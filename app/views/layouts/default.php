<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?

use fw\core\base\View;

 View::getMeta();?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>DEFAULT|</title>
  </head>
  <body>

  <div class ="container">

  <ul class ="nav nav-pills">
  <li> <a href ="/"> Home</a> </li>
  <li> <a href ="page/about"> About</a> </li>
    <li> <a href ="/admin"> Admin</a> </li>
    <li> <a href ="/user/signup"> SignUp</a> </li>
    <li> <a href ="/user/login"> Login</a> </li>
    <li> <a href ="/user/logout"> Logout</a> </li>
    </ul>

    <h1>DEFAULT</h1>
<? if (isset($_SESSION['error'])):?>
     <div class="alert alert-danger">
     <?=$_SESSION['error'];unset($_SESSION['error']);?>
  <? endif?>
</div>

  <? if (isset($_SESSION['success'])):?>
     <div class="alert alert-success">
     <?=$_SESSION['success'];unset($_SESSION['success']);?>
  <? endif?>
  </div>

 

    <?=$content?>

    </div>
    
  </body>
</html>