<?php
function stockport_files() {
    wp_enqueue_style( 'fontawesome', get_theme_file_uri('/css/font-awesome.min.css') );
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' );
	wp_enqueue_style( 'OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet' ); //font-family: 'Open Sans', sans-serif;
	wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet' ); //font-family: 'Roboto', sans-serif;
	wp_enqueue_style( 'bootstrapCSS', get_theme_file_uri('/css/vendor/bootstrap.css') );
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );

    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
    wp_enqueue_script( 'jquery', true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/js/vendor/jquery.waypoints.min.js'), array('jquery'), NULL, true );
	wp_enqueue_script( 'bootstrapJS', get_theme_file_uri('/js/vendor/bootstrap.min.js'), array('jquery'), '3.3.7', true );
    wp_enqueue_script( 'sliderJs', get_theme_file_uri('/js/slider.min.js'), true );
	wp_enqueue_script( 'mainJS', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'stockport_files' );


// CUSTOM NAVIGATION WALKER
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function stockport_features() {
    add_theme_support('title-tag'); // dynamic title for every pages

    // REGISTER MENU
    register_nav_menus( array(
    'primary' => __( 'Primary Menu' )
    ) );

    // REGISTERS THEME SUPPORT FOR POST THUMBNAIL
    add_theme_support( 'post-thumbnails' );

    // REGISTER IMAGE SIZE FOR SLIDER
    add_image_size( 'slide-size', 1400, 380, array( 'center', 'center') );

}
add_action( 'after_setup_theme', 'stockport_features' );


// CURRENT MENU ACTIVE CLASS
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


// CUSTOM POST TYPES
function consultant_post_type() {
    // slider
    register_post_type( 'slider', array(
        'menu_position' => 3,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'public'        => true,
        'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'Add New Slide',
            'edit_item' => 'Edit Slide',
            'all_items' => 'All Slides',
            'singular_name' => 'Slide'
        ),
        'menu_icon' => 'dashicons-slides',
    ) );
    
}
add_action( 'init', 'consultant_post_type' );