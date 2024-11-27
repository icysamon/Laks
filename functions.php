<?php
// add font awesome
function add_font_awesome() {
    wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css'); // font awesome
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );


function add_script() {
    wp_enqueue_script( 'laks', get_template_directory_uri().'/assets/js/laks.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'add_script' );


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
            background-color: #2f2f2f;
            border-radius: 8px;
        }' 
    ) );
}
add_action( 'init', 'themeslug_register_block_styles' );


// Mathjax3
function add_mathjax_script() {
    wp_enqueue_script('mathjax-script', 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js');
}
add_action('wp_enqueue_scripts', 'add_mathjax_script');


// Function to add prism.css and prism.js to the site
function add_prism() {
    // Register prism.css file
    wp_register_style(
        'prismCSS', // handle name for the style 
        get_stylesheet_directory_uri().'/assets/css/prism.css' // location of the prism.css file
    );

    // Register prism.js file
    wp_register_script(
        'prismJS', // handle name for the script 
        get_stylesheet_directory_uri().'/assets/js/prism.js' // location of the prism.js file
    );

    // Enqueue the registered style and script files
    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');

function hide_plugin() {
    // Hide the google site kit menu
    remove_menu_page('googlesitekit-dashboard');

    // Hide the W3 Total Cache
    remove_menu_page('w3tc_dashboard');
    remove_submenu_page('upload.php', 'w3tc_extension_page_imageservice');
}
add_action('admin_menu', 'hide_plugin', 999);

// remove tool bar item
function remove_toolbar_node($wp_admin_bar) {
    $wp_admin_bar->remove_menu("google-site-kit");
    $wp_admin_bar->remove_menu("w3tc");
}
add_action("admin_bar_menu", "remove_toolbar_node", 999);

function ds_admin_theme_style() {
//echo '<style>.update-nag, .updated, .error, .is-dismissible { display: none; }</style>';}
echo '<style>.is-dismissible { display: none !important; }</style>';
}
add_action('admin_enqueue_scripts', 'ds_admin_theme_style', 999); 
add_action('login_enqueue_scripts', 'ds_admin_theme_style', 999);


