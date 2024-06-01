<?

namespace app\controllers;

use fw\core\App;
use Monolog\Level;
use Monolog\Logger;
use app\models\Main;
use fw\core\base\View;
use app\controllers\AppController;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class MainController extends AppController
{



   public function indexAction()
   {


      $crypto = new Main;

      $titles = [];
      $links = [];
      $dates = [];
      $descriptions = [];


      //  Получение новостей из массива ссылок  RSS 
      foreach ($crypto->rssUrls as $rssUrl) {

         $rss = simplexml_load_file($rssUrl);




         foreach ($rss->channel->item as $item) {



            (string)$title = $item->title;
            (string)$link = $item->link;
            (string)$date = $item->pubDate;
            (string)$description = $item->description;


            $titles[] = $title;
            $links[] = $link;
            $dates[] = $date;
            $descriptions[] = $description;
         }
      }


      //Сохранение данных новостей в БД таблицу cryptonews в случае добавление новой ссылки в массив rssUrls

      $expectedCount = count($crypto->rssUrls);
      $file = ROOT . '/count.txt';
      $currentCount = file_exists($file) ? (int)file_get_contents($file) : 0; // начальное значение


      if ($expectedCount > $currentCount) {
         \R::wipe('cryptonews');

         $crypto->addDataToDatabase($titles, $links, $dates, $descriptions);
         $currentCount = $expectedCount; // обновляем текущее значение
         // Сохраняем текущее значение в файл
         file_put_contents($file, $currentCount);
      } else { //Обновление данных (скрипт запускается каждый 6 часов с использованием cron)

         $crypto->updateDateToDatabase($titles, $links, $dates, $descriptions);
      }

      $coins = $crypto->getCryptoArray();


      $perpage = 25;
      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $total = \R::count('cryptonews');

      $page_cnt = ceil($total / $perpage);



      $news = $crypto->pagination($page, $total, $perpage, $page_cnt);



      $this->set(compact('news', 'page_cnt', 'coins'));
   }



   public function searchAction()

   {
      if ($this->isAjax()) {

         $model = new Main();

         if (isset($_GET['crypto'])) $coin = $_GET['crypto'];

         $coinNews = \R::find('cryptonews', 'title LIKE ? OR description LIKE ?', ["%$coin%", "%$coin%"]);

         $coinNews = !empty($coinNews) ? $coinNews : '';

         $this->set(compact('coinNews', 'coin'));
      }
   }

   public function paginationAction()
   {
      if ($this->isAjax()) {

         
         $crypto = new Main();



         $perpage = 25;
         $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
         
         $total = \R::count('cryptonews');

         $page_cnt = ceil($total / $perpage);



         $news = $crypto->pagination($page, $total, $perpage, $page_cnt);

         

         $this->loadView ('index',compact('news', 'page_cnt'));
      }
   }
}
