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
        'name' => 'glass',
        'label' => __( 'Glass', 'themeslug' ),
        'inline_style' => '.wp-block-group.is-style-glass {
            background-color: #ffffffcc;
            border-radius: 8px;
        }' 
    ) );
}
add_action( 'init', 'themeslug_register_block_styles' );

// Add style.css
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
        get_stylesheet_directory_uri().'/assets/js/prism.js',
        array(),
		'1.0',
        true
    );
    wp_register_style(
        'prismCSS',
        get_stylesheet_directory_uri().'/assets/css/prism.css',
    );
    wp_enqueue_script('prismJS');
    wp_enqueue_style('prismCSS');
}
add_action('wp_enqueue_scripts', 'add_prism');

// Mathjax3
function add_mathjax_script() {
    wp_enqueue_script('mathjax-script', get_stylesheet_directory_uri().'/assets/js/mathjax.js');
}
add_action('wp_enqueue_scripts', 'add_mathjax_script');

// SMTP Mail
function custom_smtp_settings( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host = SMTP_HOST;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_USER;
    $phpmailer->Password = SMTP_PASS;
    $phpmailer->FromName = SMTP_NAME;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->SMTPAuth = SMTP_AUTH;
}
add_action( 'phpmailer_init', 'custom_smtp_settings' );
