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
        $сryptocurrencies = $document->find('table[data-coin-table-target="table"] tbody[data-view-component="true"]
        tr[data-view-component="true"] td[data-view-component="true"]:nth-child(3) a.tw-flex.tw-items-center.tw-w-full');

    
        
         foreach ($сryptocurrencies as $coins){
          
         var_dump ($coins->attr('href'));  
         var_dump($coins->find('div.tw-text-gray-700')[0]->text());
         echo '<br>';
        

     

         }

     
     }


    









    public function searchAction()
    {
    }








    public function testAction()
    {
    }
}
