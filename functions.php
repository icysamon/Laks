<?php
function add_font_awesome() {
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/assets/css/font-awesome.css');
    wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');