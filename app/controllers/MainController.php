<?

namespace app\controllers;

use fw\core\App;
use Monolog\Level;
use Monolog\Logger;
use app\models\Main;
use fw\core\base\View;
use app\controllers\AppController;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class MainController extends AppController
{


    // public $layout = 'main';



    public function indexAction()
    {
        date_default_timezone_set('Europe/Moscow');

        // create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(ROOT .'/tmp/your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$mail = new PHPMailer(true);



        // App::$app->getList();
        $model = new Main();
        
        $posts = \R::findAll('posts');
        $menu = \R::findAll('category');
     

        $title = 'PAGE TITLE';
        View::setMeta('Главная страница','Описание страницы','Ключевые слова');
        $this->set(compact('title', 'posts', 'menu'));
    }


    public function testAction()
    {

        $this->layout = 'test';
    }
}
