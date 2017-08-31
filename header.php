<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<head id="header">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">

  <title><?php wp_title();?></title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Ek+Mukta:300,400|Josefin+Sans:400,400i,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:800,600,500,400,200" rel="stylesheet">


    <?php wp_head();?>

</head>
<body  <?php body_class('full-width none cms-index-index cms-home');?>>


<header id="header">
        <div class="topContainerLinks">
              <div class="top-cart">
                <div class="block-title no-items">
                    <a id="cartHeader" href="#"><span class="title-cart"><b>Cart</b> <b>(</b><span>0<b> items</b></span><b>)</b></span></a>
                </div>
                <div id="topCartContent" class="block-content" style="display:none;">
                    <div class="mobile-indent"></div>
                    <div class="inner-wrapper">                           
                     <p class="cart-empty">
                            You have no items in your shopping cart.           
                      </p>
                    </div>
                </div>
               </div> 
               <ul class="links">
                    <li class="first" >
                    <a href="http://www.deuren.co.uk/customer/account/" title="My Account" class="top-link-account">My Account</a>
                    </li>
                    <li >
                    <a href="http://www.deuren.co.uk/checkout/" title="Checkout" class="top-link-checkout">Checkout</a>
                    </li>
                    <li class=" last" >
                    <a href="http://www.deuren.co.uk/customer/account/login/" title="Log In" class="top-link-login">Log In</a>
                    </li>
                </ul>
          </div>
          <div class="clear"></div>
          <div class="logo-wrapper">
                           <h2 class="logo"><strong>Deuren</strong><a href="<?php echo site_url(); ?>" title="Deuren" class="logo"><img src="<?php echo get_template_directory_uri();  ?>/assets/images/default/Deuren-Logo.png" alt="Deuren" /></a></h2>
                        <p class="welcome-msg">Contemporary Internal &amp; External Doors</p>
           </div>
    
            <div class="menuWrapper">
        
            <div class="form-search">
                <div class="indent">
                    <?php get_search_form(); ?>
                 
                    <div class="clear"></div>
                </div>
            </div>
         

            <nav class="nav-container">
                <?php wp_nav_menu( array(
                 'theme_location' => 'main_nav',
                 'before' => '<span>', 
                 'after' =>'</span>',  
                 'menu_class' => 'nav-wide',
                   'container' => 'ul', 
                   'items_wrap'      => '<ul id="nav" class="nav-wide">%3$s</ul>' 
                   ) ); 
                   ?>
            </nav>
           
            <div class="responsiveMenu">
                <span class="screenHide menuText">Menu</span>
                <div class="menu-button">

                </div>
            </div>
        </div>
          

        <div class="clear"></div>

 </header>

<div class="top-trigger" style="height:0;"></div>



<!-- to  think about 

<section class="home-projects">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 columns">
            <h2>Latest Projects &amp; News</h2>
                        <div class="news-slider">
                <div class="ns-slide">
                    <a href="http://www.deuren.co.uk/projects-and-news/internal-doors-things-to-consider-when-building-or-renovating-a-house/">
                        <div class="nss-inner">
                            <div class="image-holder">
                                <img src="<?php echo get_template_directory_uri();  ?>/assets/images/Deuren-Case-Study-Image-Square-1.jpg" alt="Things to consider when building or renovating a house">
                            </div>
                            <div class="text-holder">
                                <h3>Internal Doors - Things to consider when building or renovating a house</h3>
                                <span class="post-link">Read This Post</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="ns-slide">
                    <a href="http://www.deuren.co.uk/projects-and-news/robin-andrews-case-study/">
                        <div class="nss-inner">
                            <div class="image-holder">
                                <img src="<?php echo get_template_directory_uri();  ?>/assets/images/Deuren-Case-Study-Image-Square-3.jpg" alt="Robin Andrews Case Study">
                            </div>
                            <div class="text-holder">
                                <h3>Robin Andrews Case Study</h3>
                                <span class="post-link">Read This Post</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="ns-slide">
                    <a href="http://www.deuren.co.uk/projects-and-news/milner-case-study/">
                        <div class="nss-inner">
                            <div class="image-holder">
                                <img src="<?php echo get_template_directory_uri();  ?>/assets/images/Deuren-Case-Study-Image-Square-2.jpg" alt="Milner Case Study">
                            </div>
                            <div class="text-holder">
                                <h3>Milner Case Study</h3>
                                <span class="post-link">Read This Post</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>-->



