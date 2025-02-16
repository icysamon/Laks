<?php
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

// Add laks.css
function add_laks_css() {
    wp_register_style(
        'laksCSS',
        get_stylesheet_directory_uri().'/style.css'
    );
    wp_enqueue_style('laksCSS');

}
add_action('wp_enqueue_scripts', 'add_laks_css');

// Function to add prism.css and prism.js to the site
function add_prism() {
    // Register prism.css file
    wp_register_style(
        'prismCSS', // handle name for the style 
        'https://www.cdn.icysamon.com/prism/prism.css' // location of the prism.css file
    );

    // Register prism.js file
    wp_register_script(
        'prismJS', // handle name for the script 
        'https://www.cdn.icysamon.com/prism/prism.js' // location of the prism.js file
    );

    // Enqueue the registered style and script files
    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');

// Mathjax3
function add_mathjax_script() {
    //wp_enqueue_script('mathjax-script', 'https://www.cdn.icysamon.com/mathjax/es5/tex-mml-chtml.js');
    wp_enqueue_script('mathjax-script', get_stylesheet_directory_uri().'/assets/js/mathjax.js');
}
add_action('wp_enqueue_scripts', 'add_mathjax_script');

// add font awesome
function add_font_awesome() {
    wp_register_style(
        'fontAwesomeCSS',
        'https://www.cdn.icysamon.com/font-awesome/css/font-awesome.min.css'
    );
    wp_enqueue_style('fontAwesomeCSS');
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

function add_gutenberg_editor_style () {
    wp_register_style(
        'editorCSS',
        get_stylesheet_directory_uri().'/assets/css/editor.css'
    );
    wp_enqueue_style('editorCSS');
}
add_action( 'enqueue_block_editor_assets', 'add_gutenberg_editor_style' );