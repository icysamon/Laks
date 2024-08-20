<?php
function add_css() {
    wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css'); // font awesome
}

function add_script() {
    wp_enqueue_script( 'laks', get_template_directory_uri().'/assets/js/laks.js', array(), false, true );
}

// group style
function themeslug_register_block_styles() {
    register_block_style( 'core/group', array(
        'name' => 'default',
        'label' => __( 'Default', 'themeslug' ),
        'is_default' => true,
        'inline_style' => '.wp-block-group.is-style-default {}' 
    ) );
    
    register_block_style( 'core/group', array(
        'name' => 'widget',
        'label' => __( 'Widget', 'themeslug' ),
        'inline_style' => '.wp-block-group.is-style-widget {
            opacity: 1.0;
            background-color: rgba(240, 248, 255, 0.5);
            backdrop-filter:blur(5px);
            border-radius: 25px;
        }' 
    ) );

}

add_action('init', 'add_script');
add_action( 'init', 'themeslug_register_block_styles' );
add_action('init', 'add_css');

