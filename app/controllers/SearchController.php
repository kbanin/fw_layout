<? namespace app\controllers;

use fw\core\App;
use Monolog\Level;
use Monolog\Logger;
use app\models\Main;
use fw\core\base\View;
use app\controllers\AppController;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;

class SearchController extends AppController {




public function indexAction (){
    $model = new Main();

    $name = $_GET['name'];
    if(!empty($name)){

        $products = \R::findOne('products', 'name = ?', [$name]);
        $services = \R::findOne('services', 'name = ?', [$name]);


    }else{
        redirect();
    }


    $title = 'SEARCH';
    View::setMeta('Главная страница','Описание страницы','Ключевые слова');
    $this->set(compact('title', 'products','services'));


}













}