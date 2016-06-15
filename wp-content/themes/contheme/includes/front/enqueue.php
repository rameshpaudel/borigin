<?php
//Loading All the css
if( ! function_exists( 'o_o_load_css' ) ):
    /*
    * This function loads all the css to load on
    * the site's header part
    */
    function o_o_load_css()
    {
        wp_register_style( 'stylesheetScreen',  get_template_directory_uri() . '/stylesheets/screen.css' );
        wp_register_style( 'fontLato', "http://fonts.googleapis.com/css?family=Lato:300,400,700");

        wp_register_style( 'bootstrapCss', get_template_directory_uri() .'/assets/plugins/bootstrap/css/bootstrap.min.css' );
        
        wp_register_style( 'fontAwesome', get_template_directory_uri() .'/assets/plugins/font-awesome/css/font-awesome.min.css' );

        wp_register_style( 'animatecss', get_template_directory_uri() .'/assets/plugins/animate-css/animate.min.css' );

        wp_register_style( 'owlCarousel', get_template_directory_uri() .'/assets/plugins/owl.carousel/owl-carousel/owl.carousel.css' );

        wp_register_style( 'owlCarouselTheme', get_template_directory_uri() .'/assets/plugins/owl.carousel/owl-carousel/owl.theme.css' );
        
        wp_register_script( 'modernizer', get_template_directory_uri() . '/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js' );
        
       

        wp_enqueue_style('stylesheetScreen');
        wp_enqueue_style('fontLato');

        wp_enqueue_style('bootstrapCss');

        wp_enqueue_style('fontAwesome');

        wp_enqueue_style('animatecss');

        wp_enqueue_style('owlCarousel');

        wp_enqueue_style('owlCarouselTheme');

        wp_enqueue_script('modernizer');

    }
   
endif;

//Loading all the javascripts
if(! function_exists('o_o_load_scripts')):
    /*
    * This function loads all the javascripts to load on
    * the site's footer part
    */
    function o_o_load_scripts(){

      
        wp_register_script('jqueryFile', get_template_directory_uri()."/assets/js/jquery.js",array(),false,true);
        wp_register_script('custom-fix-js', get_template_directory_uri()."/assets/js/app.js",array(),false,true);
        wp_register_script('bootstrapMin',get_template_directory_uri()."/assets/plugins/bootstrap/js/bootstrap.min.js",array(),false,true);
        //WOW JS
        wp_register_script('wowJS',get_template_directory_uri()."/assets/plugins/wow.min.js",array(),false,true);
        //Jquery BackStretch for slider
        wp_register_script('jqueryBackStretch',get_template_directory_uri()."/assets/plugins/jquery.backstretch.min.js",array(),false,true);
        //Detection of mobile devices
        wp_register_script('jqueryDetectMobile',get_template_directory_uri()."/assets/plugins/detectmobilebrowser.js",array(),false,true);
        //Easing plugin for animation
        wp_register_script('jqueryEasing',get_template_directory_uri()."/assets/plugins/jquery-easing/jquery.easing.min.js",array(),false,true);
        //Sticky for sticking the topbar
        wp_register_script('jquerySticky',get_template_directory_uri()."/assets/plugins/jquery.sticky.js",array(),false,true);

        wp_register_script('jqueryInview',get_template_directory_uri()."/assets/plugins/jquery-inview/jquery.inview.min.js",array(),false,true);
        //Count to certain numbers
        wp_register_script('jqueryCountTo',get_template_directory_uri()."/assets/plugins/jquery.countTo.js",array(),false,true);
        wp_register_script('jqueryEasyPieChart',get_template_directory_uri()."/assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js",array(),false,true);
        wp_register_script('jqueryCountDown',get_template_directory_uri()."/assets/plugins/jquery-countdown/jquery.countdown.min.js",array(),false,true);
        wp_register_script('owlCarouselJS',get_template_directory_uri()."/assets/plugins/owl.carousel/owl-carousel/owl.carousel.min.js",array(),false,true);
        wp_register_script('themeMainJS',get_template_directory_uri()."/assets/js/theme_js.js",array(),false,true);
        wp_register_script('themeCustomJS',get_template_directory_uri()."/assets/js/custom.js",array(),false,true);
        
        wp_register_script('bootstrapCarousel',get_template_directory_uri()."/assets/js/carousel.js",array(),false,true);
        wp_register_script('animations',get_template_directory_uri()."/assets/js/animation.js",array(),false,true);
     
        wp_register_script('contentBoxes',get_template_directory_uri()."/assets/js/features/content-boxes.js",array(),false,true);
     
     
        wp_register_script('funnyBoxes',get_template_directory_uri()."/assets/js/features/funny-boxes.js",array(),false,true);
     
        wp_register_script('testimonials',get_template_directory_uri()."/assets/js/features/testimonials.js",array(),false,true);
     

        wp_enqueue_script('jqueryFile',false,array(),false,true);
        wp_enqueue_script('bootstrapMin',false,array(), false,true);

        wp_enqueue_script('wowJS',false,array(), false,true);

        wp_enqueue_script('jqueryBackStretch',false,array(), false,true);

        wp_enqueue_script('jqueryDetectMobile',false,array(), false,true);

        wp_enqueue_script('jqueryEasing',false,array(), false,true);

        wp_enqueue_script('jquerySticky',false,array(), false,true);

        wp_enqueue_script('jqueryInview',false,array(), false,true);

        wp_enqueue_script('jqueryCountTo',false,array(), false,true);
        wp_enqueue_script('jqueryEasyPieChart',false,array(), false,true);

        wp_enqueue_script('jqueryCountDown',false,array(), false,true);

        wp_enqueue_script('owlCarouselJS',false,array(), false,true);

        wp_enqueue_script('themeMainJS',false,array(), false,true);
        wp_enqueue_script('themeCustomJS',false,array(), false,true);
        wp_enqueue_script('slideshowBg',false,array(), false,true);
        wp_enqueue_script('bootstrapCarousel',false,array(), false,true);
        wp_enqueue_script('animations',false,array(), false,true);
        wp_enqueue_script('contentBoxes',false,array(), false,true);
        wp_enqueue_script('funnyBoxes',false,array(), false,true);
        wp_enqueue_script('custom-fix-js', false, array(), false, true);
    }
    
    
endif;