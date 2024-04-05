<?
namespace fw\core;

use Exception;



class ErrorHandler {
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this,'fatallErrorHandler']);
        set_exception_handler([$this,'exceptionHandler']);
    }


    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logErrors($errstr,$errfile,$errline);

         
        return true;
    }


    public function fatallErrorHandler (){
        
       $error = error_get_last();
       if(!empty($error) && $error['type']&(E_ERROR)){
      $this->logErrors($error['message'],$error['file'],$error['line']);
        ob_end_clean();

      $this->displayError($error['type'],$error['message'],$error['file'],$error['line'],);
    
       }else{
        ob_get_flush();
       }
       

    }

    public function exceptionHandler (Exception $e,){     
        $this->logErrors($e->getMessage(),$e->getFile(),$e->getLine());
       
    $this->displayError('Исключение',$e->getMessage(),$e->getFile(),$e->getLine(),$e->getCode());
    }

  

    protected function logErrors ($message ='',$file = '',$line =''){

        error_log("[".date('Y-m-d H:i:s')  ."] Текст ошибки:{$message}|Файл: {$file}|Строка:{$line}\n==========================\n",3, ROOT.'/tmp/errors.log');
        
    }




    protected function  displayError($errno, $errstr, $errfile, $errline, $response = 500)
    {
        if ($response ==404 && !DEBUG){

            require WWW.'/errors/404.html';
            die;
        }

        http_response_code($response);
        if (DEBUG) {
            require WWW.'/errors/dev.php';
        } else {
            require WWW. '/errors/prod.php';
        }

        die;
    }


}










?>