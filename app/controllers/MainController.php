<?

namespace app\controllers;

use fw\core\App;
use Monolog\Level;
use Monolog\Logger;
use app\models\Main;
use fw\core\base\View;
use app\controllers\AppController;
use DiDom\Document;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class MainController extends AppController
{
    



    public function indexAction()
    {

        $crypto = new Main();
        $topCrypto = $crypto->getCryptoArray();
        
        $url = 'https://www.coingecko.com/?items=300';
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();

        $document = new Document();
        $document->loadHtml($html);
        $сryptocurrencies = $document->find('');

        

     
       


    }









    public function searchAction()
    {
    }








    public function testAction()
    {
    }
}
