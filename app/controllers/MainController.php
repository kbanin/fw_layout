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


        $xmlFile = ROOT.'/public/rss_crypto2.xml';
        
      
        $xml = simplexml_load_file($xmlFile );



      
        debug($xml );



        
        // $title = 'PAGE TITLE';
        // View::setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        // $this->set(compact('title'));
    }


    public function searchAction()
    {

        $this->layout = 'test';
    }







    public function testAction()
    {
       
        }


      
}
