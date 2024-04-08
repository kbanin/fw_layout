<?

namespace app\controllers\admin;

use fw\core\base\View;


class MainController extends AppController {




    public function indexAction (){


        $posts = \R::findAll('posts');
        $this->set(compact('posts'));
   
        
    }


}















?>