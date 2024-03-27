<?
    require 'rb-mysql.php';
    

    $db = require '../config/config_db.php';
    R::setup($db['dsn'], $db['user'], $db['pass']);
    R::freeze( TRUE );
    R::fancyDebug( TRUE );


 
//1)

// $main = R::dispense('main');
// $main->title = 'Главная2';
// $id = R::store($main);
// var_dump($id);


// $main = R::load('main',4);

// echo $main['title'];


$cat = R::findAll('posts','title LIKE ?',['%new%'] );
print_r ($cat);

?>