<?
namespace app\controllers;

use app\models\Main;
use fw\core\base\View;
use fw\libs\Pagination;



class PostsController extends AppController{

    public function indexAction()
    {
        $model = new Main();
        $total = \R::count('products');
        $page = isset($_GET['page'])? (int)$_GET['page']:1;
        
        $perpage = 5;
        $pagination = new Pagination($page,$perpage,$total);
        debug($pagination->uri);
        
        $start=$pagination->getStart();
        $products= \R::findAll('products', "LIMIT $start, $perpage ");
        $services= \R::findAll('services', "LIMIT $start, $perpage ");


    
        $menu = \R::findAll('category');
     

        $title = 'PAGE TITLE';
        View::setMeta('Главная страница','Описание страницы','Ключевые слова');
        $this->set(compact('title', 'products','services', 'menu','pagination','total'));
    }
    
    
  
    public function testAction()
    {   debug($this->route);
        echo "Posts:test";
    }
    
    


}















?>