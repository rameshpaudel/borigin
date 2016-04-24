<?php
// Register Navigation Menus
function oo_navigation_menus() {

	$locations = array(
		'header_left_menu' => __( 'Left Menu on the header', 'text_domain' ),
		'header_right_menu' => __( 'Right Menu on the header', 'text_domain' ),
		'footer_menu' => __( 'Menu at Footer', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'oo_navigation_menus' );