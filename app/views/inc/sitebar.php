 <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

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
     <div class="container-fluid">
         <div class="d-flex align-items-center">
             <div class="site-logo"><a href="/">Stamina<span>.</span> </a></div>
             <div class="ml-auto">
                 <nav class="site-navigation position-relative text-right" role="navigation">
                     <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                         <li><a href="#home-section" class="nav-link">Home</a></li>
                         <li><a href="#classes-section" class="nav-link">Classes</a></li>
                         <li><a href="#schedule-section" class="nav-link">Schedule</a></li>
                         <li><a href="#trainer-section" class="nav-link">Trainer</a></li>
                         <li><a href="#services-section" class="nav-link">Services</a></li>
                         <li><a href="#contact-section" class="nav-link">Contact</a></li>
                     </ul>
                 </nav>
                 <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
             </div>

         </div>
     </div>

 </header>