<?php

// use CherryTheme\Blocks\Article_List_Block;
// use CherryTheme\Blocks\Post_Meta_Block;
// use CherryTheme\Blocks\Article_Subtitle_Block;
// use CherryTheme\Blocks\Content_Image_Block;
// use CherryTheme\Blocks\Contact_Block;
// use CherryTheme\Blocks\Process_Step_Block;
// use CherryTheme\Blocks\Image_With_Inline_Caption_Block;
// use CherryTheme\Blocks\Project_Intro_Block;
// use CherryTheme\Blocks\Project_Gallery_Block;
// use CherryTheme\Blocks\Before_After_Block;
// use CherryTheme\Blocks\Two_Column_Content_Block;
// use CherryTheme\Blocks\Two_Column_Image_Text_Block;

// // Theme Setup
// require_once get_stylesheet_directory() . '/inc/class-gutenberg-setup.php';
require_once get_stylesheet_directory() . '/inc/class-scripts.php';
require_once get_stylesheet_directory() . '/inc/class-menus.php';
require_once get_template_directory() . '/inc/customizer/class-customizer.php';
// require_once get_stylesheet_directory() . '/inc/class-custom-post-types.php';
// require_once get_stylesheet_directory() . '/inc/class-blocks.php';

// new Cherry_GutenbergSetup();
new Rwd_Enigma_Scripts();
new Rwd_Enigma_Menus();
Rwd_Enigma_Customizer::init();
// new Cherry_Custom_Post_Types();
// new Cherry_URL_Rewrite();
// new Cherry_Blocks();

add_theme_support('post-thumbnails');
add_theme_support('title-tag');