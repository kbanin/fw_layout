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
      $rssUrls = array(
         'https://coinspot.io/feed/',
         'https://ru.investing.com/rss/news_301.rss',
         'https://cryptocurrency.tech/feed/',
         'https://bits.media/rss2/',
         'https://cryptofeed.ru/feed/',
         'https://ru.beincrypto.com/feed/',
         'https://2bitcoins.ru/feed/',
        
     );
     
     $titles = [];
     $links = [];
     $dates = [];
     $descriptions = [];
     $totalItemCount = 0; // Общее количество новостей

     foreach ($rssUrls as $rssUrl) {
      $rss = simplexml_load_file($rssUrl);

      $itemCount = count($rss->channel->item); // Количество новостей в текущей ленте
      $totalItemCount += $itemCount; // Добавляем количество новостей к общему счетчику
      
  

     

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
      debug($totalItemCount);
      $this->set(compact('titles', 'links', 'dates', 'descriptions'));
   }



   public function searchAction()
   {
   }

   public function testAction()
   {
   }
}
