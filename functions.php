<?php

if ( ! defined( 'THEME_NAMESPACE' ) ) {
	define( 'THEME_NAMESPACE', 'rwd-enigma' );
}

// // Theme Setup
require_once get_stylesheet_directory() . '/inc/class-gutenberg-setup.php';
require_once get_stylesheet_directory() . '/inc/class-gutenberg-helpers.php';
require_once get_stylesheet_directory() . '/inc/class-scripts.php';
require_once get_stylesheet_directory() . '/inc/class-menus.php';
require_once get_template_directory() . '/inc/customizer/class-customizer.php';
require_once get_stylesheet_directory() . '/inc/class-simple-meta-boxes.php';

new Rwd_Enigma_GutenbergSetup();
new Rwd_Enigma_Scripts();
new Rwd_Enigma_Menus();
Rwd_Enigma_Customizer::init();

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/* Custom Post Types
=============================================*/

foreach (glob(get_template_directory() . '/inc/cpts/*.php') as $file) {
    require_once $file;
}

/* Blocks
=============================================*/

foreach (glob(get_template_directory() . '/inc/blocks/*.php') as $file) {
    require_once $file;
}

/* Meta Boxes
=============================================*/

$demo_meta = new RWD_Enigma\Simple_Meta_Boxes('demo', 'Demo Info', [
    'color_theme' => 'Color Theme'
]);


function dd($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

add_action('wp_footer', function() {
    if (is_user_logged_in() && current_user_can('manage_options')) { // Restrict to logged-in admins
        global $template;
        echo '<div style="position: fixed; bottom: 0; left: 0; background: rgba(0,0,0,0.7); color: #fff; padding: 5px 10px; font-size: 12px; z-index: 9999;">';
        echo 'Template: ' . basename($template);
        echo '</div>';
    }
});