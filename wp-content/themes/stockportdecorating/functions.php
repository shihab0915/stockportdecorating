<?php
add_action( 'wp_enqueue_scripts', '_my_child_theme_styles', PHP_INT_MAX );
/**
 * Enqueue parent theme styles considering styles dependencies.
 */
function _my_child_theme_styles() {
    // Parent styles that need to be loaded before the child theme styles.
    $parent_styles = array(  'parent_style_1' => 'style.css', 'parent_style_2' => 'styles/modern.css' );
    // Enqueue parent styles using the custom handles and considering styles dependencies.
    foreach( $parent_styles as $handle => $style ) {
        wp_enqueue_style( $handle, get_template_directory_uri() . '/' . $style, array( 'hrb-normalize', 'hrb-foundation' ) );
    }
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array_keys( $parent_styles )
    );
}

//=========================
//      OTHER STYLES
//=========================
function getthejobdone_styles() {
    wp_enqueue_style( 'OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' ); //font-family: 'Open Sans', sans-serif;
    wp_enqueue_style( 'font-awesome', get_theme_file_uri('/css/font-awesome.min.css') );
}
add_action( 'wp_enqueue_scripts', 'getthejobdone_styles' );


//=============================
//      OTHER JAVASCRIPTS wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
//=============================
function getthejobdone_js() {
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/js/jquery.waypoints.min.js'), array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'getthejobdone_js' );

function getthejobdone_features() {
    add_theme_support('title-tag'); // dynamic title for every pages
}
add_action( 'after_setup_theme', 'getthejobdone_features' );