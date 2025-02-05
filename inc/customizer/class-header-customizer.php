<?php

class Rwd_Enigma_Header_Customizer {

    public static function register($wp_customize) {

        $wp_customize->add_section('header_options', array(
            'title'    => __('Header Options', 'mytheme'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('header_layout', array(
            'default'   => 'default',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('header_layout', array(
            'label'    => __('Choose Header Layout', 'mytheme'),
            'section'  => 'header_options',
            'settings' => 'header_layout',
            'type'     => 'select',
            'choices'  => array(
                'default'  => __('Default Header', 'mytheme'),
                'minimal'  => __('Minimal Header', 'mytheme'),
                'centered' => __('Centered Header', 'mytheme'),
            ),
        ));
        
    }

}
