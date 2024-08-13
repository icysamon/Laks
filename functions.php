<?php
function add_css() {
    wp_enqueue_style( 'laks', get_stylesheet_directory_uri().'/assets/css/laks.css'); // laks style
    wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css'); // font awesome
}

function add_script() {
    wp_enqueue_script( 'laks', get_template_directory_uri().'/assets/js/laks.js', array(), false, true );
}

add_action('wp_enqueue_scripts', 'add_css');
add_action('wp_enqueue_scripts', 'add_script');