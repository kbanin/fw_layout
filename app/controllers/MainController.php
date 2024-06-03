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


      // Функция которая парсит RSS ссылки добавлет данные в массив и обновляет данные в таблице cryptonews
      cronScript($crypto);

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

         // $this->set(compact('news','page_cnt'));
         $this->loadView('index', compact('news', 'page_cnt'));
      }
   }
}
