<?


namespace fw\core;
use R;

class Db
{
    use Singletone;

    protected $pdo;
    public static $countSql = 0;



    protected function __construct()
    {

        $db = require ROOT . '/config/config_db.php';
        require LIBS.'/rb-mysql.php';
         R::setup($db['dsn'], $db['user'], $db['pass']);
         R::freeze( TRUE );
        //  $options  = [ \PDO::ATTR_DEFAULT_FETCH_MODE=> \PDO::FETCH_ASSOC];
        // $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'],$options);
        
    }

    

   


}
