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

class MainController extends AppController{

   

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
      
      $currentCount = count($crypto->rssUrls);
      $expectedCount = $currentCount + 1;
     
      if (count($titles) > 0 && count($titles) % $expectedCount === 0) {
      $crypto->addDataToDatabase($titles,$links,$dates,$descriptions);}
     
   

      //Обновление данных (скрипт запускается каждый 6 часов с использованием cron)
      $crypto->updateDateToDatabase($titles,$links,$dates,$descriptions);
     
      
      $news = \R::findAll('cryptonews');
     

   $this->set(compact('news'));
   }



   public function searchAction()
   {
   }

   public function testAction()
   {
   }
}
