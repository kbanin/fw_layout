<?
namespace app\controllers;

use app\models\Main;



class MainController extends AppController{

  
// public $layout = 'main';



    public function indexAction()
    {
    $model = new Main();   
    $posts = \R::findAll('posts');
    $menu = \R::findAll('category');
     $title = 'PAGE TITLE';
    $this->set(compact ('title','posts','menu'));
       
       
    }
    
    
    public function testAction (){

     $this->layout = 'test';

    }
    
    










}

















?>