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
    public $products;
    public $services;

    // public $layout = 'main';



    public function indexAction()
    {

        $model = new Main();
        $total = \R::count('products');
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $perpage = 5;
        $pagination = new Pagination($page, $perpage, $total);


        $start = $pagination->getStart();
        $products = \R::findAll('products', "LIMIT $start, $perpage ");
        $services = \R::findAll('services', "LIMIT $start, $perpage ");
         

      
        $productData = $model->getData($products,'product_id');

        
        $serviceData = $model->getData($services,'service_id');


        $title = 'PAGE TITLE';
        View::setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'products', 'services','pagination', 'total','productData','serviceData'));
    }


    public function searchAction()
    {

        $this->layout = 'test';
    }



    public function testAction()
    {
        if ($this->isAjax()) {



            $model = new Main();
            $total = \R::count('products');

            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;;
            $perpage = 5;
            $pagination = new Pagination($page, $perpage, $total);


            $start = $pagination->getStart();
            $products = \R::findAll('products', "LIMIT $start, $perpage ");
            $services = \R::findAll('services', "LIMIT $start, $perpage ");

            
            $productData = $model->getData($products,'product_id');

            
            $serviceData = $model->getData($services,'service_id');


            

            $head = '<h2>Продукты и Услуги</h2>';

            $this->loadView('index', compact('head', 'products', 'services', 'pagination','productData','serviceData'));

            die;
        }


        echo 222;
    }
}
