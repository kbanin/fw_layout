<?

namespace app\controllers\admin;

use fw\core\base\View;


class UserController extends AppController {


//  public $layout = 'default';

    public function indexAction (){

      View::setMeta('Админка::Главная страница','Описсание админки','Ключевики админки');
      
      $test =  'Тестовая переменная';
      $data = ['test','2'];
    //   $this->set([
    //     'test'=>$test,
    //     'data'=> $data,
    //   ]);
$this->set (compact('test','data'));
     
    }


    public function testAction (){



}

}








?>