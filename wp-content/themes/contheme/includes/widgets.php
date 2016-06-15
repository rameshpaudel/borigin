<?php 
if( ! function_exists('o_o_widgets')):
	
	function o_o_footer_widgets()
	{

		register_sidebar(array(
			'id'			=> 'footer-center-widget',
			'name'			=>	__('Footer center widget'),
			'description'	=> __('Center footer sidebar'),
			'before_widget' => '<div class="col-sm-12 col-md-4 footer-column not-right-column animated fadeInDown"><div class="footer-text">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',

			));
		register_sidebar(array(
			'id'			=> 'footer-right-widget',
			'name'			=>	__('Footer right widget'),
			'description'	=> __('Right footer sidebar'),
			
			'before_widget' => '<div class="col-sm-12 col-md-4 footer-column not-right-column animated fadeInUp">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
			));
	}
endif;