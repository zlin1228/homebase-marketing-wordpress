<?php
/*********************
Enqueue the proper CSS
if you use Sass.
 *********************/
if( ! function_exists( 'grunterie_enqueue_style' ) ) {
    function grunterie_enqueue_style()
    {
        // Register the main style
        wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.min.css', array(), '', 'all' );
        wp_enqueue_style( 'slick-css' );
        if ( !is_front_page() && !is_page_template( 'templates/flexible-home-mt39-clone.php' ) ) {
            if(!is_blog()) {
                wp_register_style( 'grunterie-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.5.9', 'all' );
                wp_enqueue_style( 'grunterie-stylesheet' );
            }
            
            wp_register_style( 'grunterie-new-stylesheet', get_stylesheet_directory_uri() . '/css/new-global.css', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'grunterie-new-stylesheet' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'grunterie_enqueue_style' );
