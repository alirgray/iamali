<?php


function park_wp_child_enqueue_styles() {  
    wp_enqueue_style( 'park-main-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'park-child-main-theme-style',get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'park_wp_child_enqueue_styles', 11);

function park_child_lang_setup() {
    load_child_theme_textdomain( 'park-wp', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'park_child_lang_setup' );

?>