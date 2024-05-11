<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? use fw\core\base\View;

    View::getMeta();?>
    <!-- Подключение Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<!-- Шапка с навигацией и поиском -->

<? $this->getPart('inc/navbar');?>



<? if (isset($_SESSION['error'])):?>
     <div class="alert alert-danger">
     <?=$_SESSION['error'];unset($_SESSION['error']);?>
     </div>
  <? endif?>
  
  <? if (isset($_SESSION['success'])):?>
     <div class="alert alert-success">
     <?=$_SESSION['success'];unset($_SESSION['success']);?>
     </div>
  <? endif?>

<!-- Контент страницы -->


<?=$content?>




<!-- Подключение Bootstrap JS и зависимостей -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<? foreach ($scripts as $script){
   echo $script;
}  ?>


</html>
