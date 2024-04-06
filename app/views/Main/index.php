<?if(!empty($posts)):?>
<? foreach ($posts as $post):?>
  
 <h1><?=$post->title?></h1>
   <p class="lead mx-auto desc mb-5"><?=$post->text?></p>
   <? endforeach?>



<? else:?>
<h3>Posts not found</h3>
<? endif?>





















<!-- <?

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
 -->



