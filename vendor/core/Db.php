<?


namespace vendor\core;
use R;

class Db
{

    protected $pdo;
    protected static $instance;
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

    

    public static function instance()
    {

        if (self::$instance === null) {

            self::$instance = new self();
        }
        return self::$instance;
    }




    // public function execute($sql,$params =[])
    // {
    //     self::$countSql++;
    //     $stmt = $this->pdo->prepare($sql);
    //     return $stmt->execute($params);
    // }

    // public function query($sql,$params =[])
    // {
    //     self::$countSql++;
        
    //     $stmt = $this->pdo->prepare($sql);
    //     $res =  $stmt->execute($params);
    //     if ($res !== false) {
    //         return $stmt->fetchAll();
    //     }
    //     return[];
    // }
}
