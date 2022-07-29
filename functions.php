<?php 

function lev_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'lev_theme_support');

function lev_register_styles()
{
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('leveq-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'lev_register_styles');

function lev_register_scripts() {
    wp_enqueue_script('lev-main', get_template_directory_uri(). "/assets/js/main.js", array(), 0.1, true);
}

add_action( 'wp_enqueue_scripts', 'lev_register_scripts');

?>