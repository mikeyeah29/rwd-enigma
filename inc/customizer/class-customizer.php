<?php

class Rwd_Enigma_Customizer {

    public static function init() {
        add_action('customize_register', array(__CLASS__, 'register_customizer_settings'));
    }

    public static function register_customizer_settings($wp_customize) {
        require get_template_directory() . '/inc/customizer/class-header-customizer.php';
        require get_template_directory() . '/inc/customizer/class-typography-customizer.php';

        Rwd_Enigma_Header_Customizer::register($wp_customize);
        Rwd_Enigma_Typography_Customizer::register($wp_customize);
    }

}