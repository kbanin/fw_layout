<?
define('DEBUG', 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__). '/vendor/fw/libs');
define('APP', dirname(__DIR__) . '/app');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT','crypto');
define('ADMIN','http://fw.loc/admin');

file_put_contents(__DIR__.'/../log/cron.log', date('Y-m-d H:i:s') . " Скрипт начал выполняться\n", FILE_APPEND);


require __DIR__."/../vendor/autoload.php";

use app\controllers\console\ConsoleController;


        $route = ['controller' => 'Console', 'action' => 'parsing'];
        $controller = new ConsoleController($route);
        $controller->parsingAction();




file_put_contents(__DIR__.'/../log/cron.log', date('Y-m-d H:i:s') . " Скрипт завершил выполнение\n", FILE_APPEND);

?>