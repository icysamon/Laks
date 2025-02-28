<?php
// Editor style
function add_gutenberg_editor_style () {
    wp_register_style(
        'editorCSS',
        get_stylesheet_directory_uri().'/assets/css/editor.css'
    );
    wp_enqueue_style('editorCSS');
}
add_action( 'enqueue_block_editor_assets', 'add_gutenberg_editor_style' );

// Group style
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
            background-color: #FCE7E6;
            border-radius: 8px;
        }' 
    ) );

    register_block_style( 'core/group', array(
        'name' => 'glass',
        'label' => __( 'Glass', 'themeslug' ),
        'inline_style' => '.wp-block-group.is-style-glass {
            background-color: #ffffffcc;
            border-radius: 8px;
        }' 
    ) );
}
add_action( 'init', 'themeslug_register_block_styles' );

// Add font awesome
function add_font_awesome() {
    wp_register_style(
        'fontAwesomeCSS',
        get_stylesheet_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css'
    );
    wp_enqueue_style('fontAwesomeCSS');
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

// Add laks.css
function add_laks_css() {
    wp_register_style(
        'laksCSS',
        get_stylesheet_directory_uri().'/style.css'
    );
    wp_enqueue_style('laksCSS');
}
add_action('wp_enqueue_scripts', 'add_laks_css');

// Add prism.css & prism.js
function add_prism() {
    wp_register_script(
        'prismJS',
        'https://www.cdn.icysamon.jp/prism/prism.js'
    );
    wp_register_style(
        'prismCSS',
        'https://www.cdn.icysamon.jp/prism/prism.css'
    );
    wp_enqueue_script('prismJS');
    wp_enqueue_style('prismCSS');
}
add_action('wp_enqueue_scripts', 'add_prism');

// Mathjax3
function add_mathjax_script() {
    //wp_enqueue_script('mathjax-script', 'https://www.cdn.icysamon.jp/mathjax/es5/tex-mml-chtml.js');
    wp_enqueue_script('mathjax-script', get_stylesheet_directory_uri().'/assets/js/mathjax.js');
}
add_action('wp_enqueue_scripts', 'add_mathjax_script');