<?php

class Rwd_Enigma_Header_Customizer {

    public static function register($wp_customize) {
        self::register_header_layout($wp_customize);
        self::register_burger_menu_styles($wp_customize);
        self::register_header_colors($wp_customize);
        self::register_header_effects($wp_customize);
    }

    private static function register_header_layout($wp_customize) {
        $wp_customize->add_section('header_options', array(
            'title'    => __('Header Options', 'rwd-enigma'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('header_layout', array(
            'default'   => 'default',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_layout', array(
            'label'    => __('Choose Header Layout', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'header_layout',
            'type'     => 'select',
            'choices'  => array(
                'default'  => __('Default Header', 'rwd-enigma'),
                'minimal'  => __('Minimal Header', 'rwd-enigma'),
                'centered' => __('Centered Header', 'rwd-enigma'),
            ),
        ));
    }

    private static function register_burger_menu_styles($wp_customize) {
        $wp_customize->add_setting('burger_menu_style', array(
            'default'   => 'standard',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('burger_menu_style', array(
            'label'    => __('Choose Burger Menu Style', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'burger_menu_style',
            'type'     => 'select',
            'choices'  => array(
                '3dx'         => __('3D X', 'rwd-enigma'),
                '3dy'         => __('3D Y', 'rwd-enigma'),
                '3dxy'        => __('3D XY', 'rwd-enigma'),
                'arrow'       => __('Arrow', 'rwd-enigma'),
                'arrowalt'    => __('Arrow Alt', 'rwd-enigma'),
                'arrowturn'   => __('Arrow Turn', 'rwd-enigma'),
                'boring'      => __('Boring', 'rwd-enigma'),
                'collapse'    => __('Collapse', 'rwd-enigma'),
                'elastic'     => __('Elastic', 'rwd-enigma'),
                'emphatic'    => __('Emphatic', 'rwd-enigma'),
                'minus'       => __('Minus', 'rwd-enigma'),
                'slider'      => __('Slider', 'rwd-enigma'),
                'spin'        => __('Spin', 'rwd-enigma'),
                'spring'      => __('Spring', 'rwd-enigma'),
                'stand'       => __('Stand', 'rwd-enigma'),
                'squeeze'     => __('Squeeze', 'rwd-enigma'),
                'vortex'      => __('Vortex', 'rwd-enigma'),
            ),
        ));
    }

    private static function register_header_colors($wp_customize) {
        $color_palette = wp_get_global_settings( array( 'color', 'palette', 'theme' ) ) ?? [];
        $color_choices = [];

        $color_choices['transparent'] = 'None';

        if (!empty($color_palette)) {
            foreach ($color_palette as $color) {
                if (isset($color['slug'], $color['name'])) {
                    $color_choices[$color['slug']] = $color['name'];
                }
            }
        }

        // Header Background Color Setting
        $wp_customize->add_setting('header_bg_color', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_bg_color', array(
            'label'    => __('Header Background Color', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'header_bg_color',
            'type'     => 'select',
            'choices'  => $color_choices,
        ));

        // Header Text Color Setting
        $wp_customize->add_setting('header_text_color', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_text_color', array(
            'label'    => __('Header Text Color', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'header_text_color',
            'type'     => 'select',
            'choices'  => $color_choices,
        ));
    }

    private static function register_header_effects($wp_customize) {
        // Blur Background Option
        $wp_customize->add_setting('header_blur_background', array(
            'default'   => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_blur_background', array(
            'label'    => __('Blur Background', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'header_blur_background',
            'type'     => 'checkbox',
        ));

        // Apply Background Color on Scroll Option
        $wp_customize->add_setting('header_bg_on_scroll', array(
            'default'   => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_bg_on_scroll', array(
            'label'    => __('Apply Background Colour On Scroll', 'rwd-enigma'),
            'section'  => 'header_options',
            'settings' => 'header_bg_on_scroll',
            'type'     => 'checkbox',
        ));
    }
}
