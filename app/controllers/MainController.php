<?

namespace app\controllers;

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
use app\controllers\AppController;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class MainController extends AppController
{



    public function indexAction()
    { 
        
       //Код запускатеся через cron каждые 6 часов . Код находится в app/controllers/console/ConsoleController.php
     
        
    }




    public function searchAction()
    { {
            $model = new Main;
            if ($this->isAjax()) {

                $coin = isset($_GET['query']) ? $_GET['query'] : '';
                $coinNews = \R::findAll('cryptonews', 'coin = ?', [$coin]);
                $total = count($coinNews);
                $perpage = 25;

                //Получаем страницу на которую нажал пользователь 
                $page = isset($_GET['page']) ? $_GET['page'] : 1;

                //Вычесляем начальный индекс для выборки новостей

                $start = ($page - 1) * $perpage;

                //Выбираем соответствующий сегмент новостей для текущей страницы

                $pageNews = array_slice($coinNews, $start, $perpage);
                $countPageNews = count($pageNews);


                // Генерируем HTML-фрагмент с данными новостей
                $html = '';
                foreach ($pageNews as $news) {
                    $html .= '<div class="news-item mb-3 p-2 border rounded">';
                    $html .= '<h4 class="news-title">' . $news['title'] . '</h4>';
                    $html .= '<p class="news-date text-muted">' . 'Дата обновления новости :' . $news['pub_date'] . '</p>';
                    $html .= '<p class="news-description">' . $news['description'] . '</p>';
                    $html .= '<a href="' . $news['links'] . '" class="news-link">Читать полностью</a>';
                    $html .= '</div>';
                }

                // Возвращаем HTML-фрагмент в качестве ответа
                echo $html;

                $this->loadView('search', compact('total', 'perpage', 'countPageNews'));
                exit();
            }
        }
    }
}
