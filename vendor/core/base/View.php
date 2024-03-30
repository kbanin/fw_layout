<?

namespace vendor\core\base;




class View
{

    public $route = [];
    public $view;
    public $layout;
    public static $meta = ['title'=>'','desc'=>'','keywords'=>''];

    public function __construct($route, $layout = '', $view = '')
    {
        
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }



    public function render($vars)
    {

        (extract($vars));
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (is_file($file_view)) {

            require $file_view;
        } else {

            echo "<p><Не найден вид <b>$file_view</b></p>";
        }
        $content = ob_get_clean();
        $file_layout = APP . "/views/layouts/{$this->layout}.php";
        if (is_file($file_layout)) {
            require $file_layout;
        } else {
            echo "<p>Не найден  шаблон <b>$file_layout</b></p>";
        }
    }

    public static function getMeta ()
    {
      echo '<title>'.self::$meta['title'].'</title>    
     <meta name="description" content="'.self::$meta['desc'].'">
     <meta name="keywords" content="'.self::$meta['keywords'].'">';
    }



    public static function setMeta ($title='',$desc='',$keywords='')
    {
            self::$meta['title'] = $title;

            self::$meta['desc'] = $desc;

            self::$meta['keywords'] = $keywords;


    }
}
