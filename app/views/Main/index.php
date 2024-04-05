<?

use fw\widjets\menu\Menu;

 new Menu(
    [ //'tpl'=> WWW.'/menu/my_menu.php',
       'tpl'=> WWW.'/menu/select.php',
       'class'=> 'my_select',
       'container'=>'select',
       'table'=>'categories',
       'cache'=>60,



    ]
 );?>
<? foreach ($posts as $post ):?>
<br>
<?=$post['title'];?>
<br>
<?=$post['text'];?>


<?endforeach;?>




