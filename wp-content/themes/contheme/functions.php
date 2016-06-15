<?php
//adding support
add_theme_support('nav-menus');
add_theme_support('post-thumbnails');
//Including the files
include get_template_directory() . '/includes/front/enqueue.php';
include get_template_directory() . '/includes/front/navigations.php';
include get_template_directory() . '/includes/widgets.php';
include get_template_directory() . '/includes/general-settings.php';
//	include( get_template_directory() . '/includes/custom-post-type.php' );

//Applying filters and hooks

add_action('wp_enqueue_scripts', 'o_o_load_css');
add_action('wp_enqueue_scripts', 'o_o_load_scripts');
add_action('widgets_init', 'o_o_footer_widgets');
/*copied from generatewp.com*/
add_filter('show_admin_bar', '__return_false');