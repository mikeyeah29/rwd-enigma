<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
    // Ensure the `wp_body_open` hook is available for themes with WordPress 5.2 or later.
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
?>

<?php

    $header_layout = get_theme_mod('header_layout', 'default');

    if ($header_layout == 'minimal') {
        get_template_part('template-parts/header', 'minimal');
    } elseif ($header_layout == 'centered') {
        get_template_part('template-parts/header', 'centered');
    } else {
        get_template_part('template-parts/header', 'default');
    }

?>