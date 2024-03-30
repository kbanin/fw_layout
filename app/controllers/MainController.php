<?

namespace app\controllers;

use app\models\Main;
use vendor\core\App;
use vendor\core\base\View;

class MainController extends AppController
{


    // public $layout = 'main';



    public function indexAction()
    {

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
