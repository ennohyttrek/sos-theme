<?php

function myCustomTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'lobster-font', get_template_directory_uri() . '/fonts/lobster/font-style.css' );
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'myCustomTheme_stylesheets' );

//add themes supports (for simplicity of code not in a function)
add_theme_support( 'disable-layout-styles' );
add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



add_action('check_ajax_referer', 'prevent_meta_box_order');
function prevent_meta_box_order($action)
{
   if ('meta-box-order' == $action /* && $wp_user == 'santa claus' */) {
      die('-1');
   }
}


//function disable_metabox_dragging() {
//    wp_deregister_script( 'postbox' );
//}
//add_action( 'admin_enqueue_scripts', 'disable_metabox_dragging' );



