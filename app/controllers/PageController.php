<?

namespace app\controllers;

use app\models\Main;


class PageController extends AppController {



    public function indexAction()
    {   
        $model = new Main();   
        $posts = \R::findAll('posts');
        $menu = \R::findAll('category');
         $title = 'Страница';
        $this->set(compact ('title','menu'));
           
    }









}














?>