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
        
$version = curl_version();
debug($version);
// Установка URL-адреса API
$url = 'https://api.coingecko.com/api/v3/ping';

// Установка заголовка или параметра строки запроса с ключом API
$headers = [
    'x-cg-demo-api-key:CG-jm2TWrhNHdoGKeNZDnjYSrfg', // Заголовок
    // 'x_cg_demo_api_key' => 'YOUR_API_KEY', // Параметр строки запроса
];

// Создание нового cURL ресурса
$curl = curl_init();

// Установка опций cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Выполнение запроса
$response = curl_exec($curl);
debug($response );

// Проверка наличия ошибок
if ($response === false) {
    echo 'Ошибка выполнения запроса: ' . curl_error($curl);
} else {
    // Обработка ответа
    $data = json_decode($response, true);
    debug($data);
    
    if ($data['gecko_says'] === '(V3) To the Moon!') {
        echo 'API CoinGecko работает!';
    } else {
        echo 'API CoinGecko не работает!';
    }
}

// Закрытие cURL ресурса
curl_close($curl);
       
    }


    public function searchAction()
    {

        $this->layout = 'test';
    }







    public function testAction()
    {
       
        }


      
}
