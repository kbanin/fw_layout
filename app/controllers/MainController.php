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

        
        $url = 'https://coinspot.io/feed/';
        $xml = simplexml_load_file($url);
      //  debug($xml);
       
        foreach ($xml->channel->item as $item){

           debug  ((string)$title = $item->title);
           debug ((string)$link = $item->link);
           debug ((string)$date = $item->pubDate);
           debug((string)$date = $item->description);
           debug((string)$date = $item->content_encoded);

          

        }
        
     }



     public function searchAction()
     {
     }

     public function testAction()
     {
     }
}
