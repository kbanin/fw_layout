<?

namespace app\controllers;



class CronController{



    public function indexAction()
    {
        file_put_contents('/var/www/fw.loc/log/cron.log', date('Y-m-d H:i:s') . " Скрипт начал выполняться\n", FILE_APPEND);

        $route = ['controller' => 'Main', 'action' => 'index'];
        $controller = new MainController($route);
        $controller->indexAction();

        file_put_contents('/var/www/fw.loc/log/cron.log', date('Y-m-d H:i:s') . " Скрипт завершил выполнение\n", FILE_APPEND);
    }


}




















?>