<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#00579E">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#00579E">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#00579E">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description' ); ?></title>
    <meta description="<?php bloginfo('description');?>">
    <?php
//All the enqued stylesheet goes here
wp_head();?>

</head>

<!--  -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="51">

    <!-- BEGIN PAGE LOADER -->
    <div id="loader">
        <div class="preload">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader.gif" alt="Loading"/>
        </div>
    </div> 

    <!-- Scroll-up -->
    <div class="scroll-up page-scroll">
        <a href=".navbar"><i class="fa fa-angle-up"></i></a>
    </div>


    <!-- BEGIN NAVBAR / NAVIGATION -->
    <header class="header">
        <nav id="navigation" class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Navbar Header-->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars fa-2x"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('title' ); ?>">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">

                    <?php
                    /*
                    ===============================================================
                    Left Navigation Menu
                    ===============================================================
                     */
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header_left_menu',
                            'container' => false,
                            'container_class' => false,
                            'menu_class' => 'nav navbar-nav navbar-right',
                        ));
                    /*
                    ===============================================================
                    Right Navigation Menu
                    ===============================================================
                     */
                    /*wp_nav_menu(
                    	array(
                    		'theme_location' => 'header_right_menu',
                    		'container' => false,
                    		'container_class' => 'container',
                    		'menu_class' => 'nav navbar-nav navbar-right',
                    	));*/
                    ?>

                </div>
                <!-- //.navbar-collapse -->
            </div>
            <!-- //.container -->
        </nav>
    </header>
