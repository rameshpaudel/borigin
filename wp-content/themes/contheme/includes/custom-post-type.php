<?php 
/*
 * Testimonials
 */
add_action( 'init', 'o_o_create_testimonial' );

function o_o_create_testimonial() {
    //$slug = get_option('blueorigin_general');
    //$slug = (isset($slug['slug_gallery'])) ? $slug['slug_gallery'] : 'gallery';

    $labels = array(
        'name'               => __('Testimonial','blueorigin'),
        'singular_name'      => __('Testimonial','blueorigin'),
        'add_new'            => __('Add New','blueorigin'),
        'add_new_item'       => __('Add New Testimonial','blueorigin'),
        'edit_item'          => __('Edit Testimonial','blueorigin'),
        'new_item'           => __('New Testimonial','blueorigin'),
        'all_items'          => __('All Testimonials','blueorigin'),
        'view_item'          => __('View Testimonial','blueorigin'),
        'search_items'       => __('Search Testimonials','blueorigin'),
        'not_found'          => __('No testimonial found','blueorigin'),
        'not_found_in_trash' => __('No testimonial found in Trash','blueorigin'), 
        'parent_item_colon'  => '',
        'menu_name'          => __('Testimonials','blueorigin'),
    );

    $args = array(
        'labels'   => $labels,
        'public'   => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        //'menu_icon' => get_template_directory_uri() . '/includes/images/custom.gallery.png',
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'o_o_testimonial', $args );
}
add_action( 'init', 'o_o_create_services' );

function o_o_create_services() {

    $labels = array(
        'name'                  => _x( 'Services', 'Services', 'blueorigin' ),
        'singular_name'         => _x( 'Service', 'Service', 'blueorigin' ),
        'menu_name'             => __( 'Services', 'blueorigin' ),
        'name_admin_bar'        => __( 'Services', 'blueorigin' ),
    //    'archives'              => __( 'Item Archives', 'blueorigin' ),
   //     'parent_item_colon'     => __( 'Parent Item:', 'blueorigin' ),
        'all_items'             => __( 'All Services', 'blueorigin' ),
        'add_new_item'          => __( 'Add New Service', 'blueorigin' ),
        'add_new'               => __( 'Add New', 'blueorigin' ),
        'new_item'              => __( 'New Service', 'blueorigin' ),
        'edit_item'             => __( 'Edit Service', 'blueorigin' ),
        'update_item'           => __( 'Update Service', 'blueorigin' ),
        'view_item'             => __( 'View Service', 'blueorigin' ),
        'search_items'          => __( 'Search Service', 'blueorigin' ),
        'not_found'             => __( 'Not found', 'blueorigin' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'blueorigin' ),
        'featured_image'        => __( 'Featured Image', 'blueorigin' ),
        'set_featured_image'    => __( 'Set featured image', 'blueorigin' ),
        'remove_featured_image' => __( 'Remove featured image', 'blueorigin' ),
        'use_featured_image'    => __( 'Use as featured image', 'blueorigin' ),
        'insert_into_item'      => __( 'Insert into item', 'blueorigin' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'blueorigin' ),
        'items_list'            => __( 'Services list', 'blueorigin' ),
        'items_list_navigation' => __( 'Services list navigation', 'blueorigin' ),
        'filter_items_list'     => __( 'Filter services list', 'blueorigin' ),
    );
    $args = array(
        'label'                 => $labels,
        'description'           => __( 'Place your services, what you do here.', 'blueorigin' ),
        'labels'                => $labels,
        'supports'              => array( ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'services', $args );

}