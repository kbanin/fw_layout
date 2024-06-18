<?



namespace app\controllers\console;

use app\controllers\AppController;
use fw\core\base\Controller;
use DateTime;
use DateTimeZone;
use DateInterval;
use Exception;
use fw\core\App;
use Monolog\Level;
use Monolog\Logger;
use app\models\Main;
use fw\core\base\View;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class ConsoleController extends AppController
{
    public function parsingAction()
    {
        $model = new Main;
        $coinsArray = $model->getArray();

        // Создаем объект клиента Guzzle
        $client = new \GuzzleHttp\Client();
        $сurrentDate = new DateTime('now', new DateTimeZone('Europe/Moscow'));
        $fiveDaysAgo = new DateTime('now', new DateTimeZone('Europe/Moscow'));
        $fiveDaysAgo->sub(new DateInterval('P5D'));

           // Удаляем старые новости, где дата добавления меньше текущей даты минус 5 дней

        \R::exec("DELETE FROM cryptonews WHERE date_added < ?", [$fiveDaysAgo->format('Y-m-d H:i:s')]);

        
        foreach ($coinsArray as $coin) {
            $linkCoin = "https://news.google.com/rss/search?q={$coin}&hl=ru&gl=RU&ceid=RU:ru";




            try {
                // Отправляем запрос к RSS-ленте с помощью Guzzle
                $response = $client->get($linkCoin);

                // Проверяем, что запрос выполнен успешно
                if ($response->getStatusCode() == 200) {
                    // Парсим XML-контент ответа с помощью SimpleXML
                    $xml = simplexml_load_string($response->getBody());


                    foreach ($xml->channel->item as $item) {

                        //Добавление новостей в пустую таблицу
                        // if (\R::count('cryptonews')==0){
                        //  $model->addNews($coin,$item,$linkCoin,$presentDayTime);

                        $existingNews = \R::findOne('cryptonews', 'guid=?', [$item->guid]);
                        if (!$existingNews) {

                            $cryptoNews = \R::dispense('cryptonews');
                            $cryptoNews->coin = $coin;
                            $cryptoNews->rss_link = $linkCoin;
                            $cryptoNews->title = $item->title;
                            $cryptoNews->links = $item->link;
                            $cryptoNews->pub_date = date_create_from_format('D, d M Y H:i:s e', $item->pubDate)->format('Y-m-d H:i:s');
                            $cryptoNews->description = $item->description;
                            $cryptoNews->guid = $item->guid;
                            $cryptoNews->date_added = $сurrentDate->format('Y-m-d H:i:s');

                            \R::store($cryptoNews);
                        }
                     
                    }
                }
            } catch (\Exception $e) {
                // Обрабатываем ошибки при отправке запроса
                echo "Error: " . $e->getMessage();
            }
        }
    }
}




























?>