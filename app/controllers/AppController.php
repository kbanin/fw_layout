<?
namespace app\controllers;
use fw\core\base\Controller;

class AppController extends Controller {


public function __construct( $route)
{
    parent::__construct($route);
    if ($this->route['controller']=='Main' && $this->route['action']=='test' ){
        echo '<h1>TEST</h1>';
    }
}




}











?>