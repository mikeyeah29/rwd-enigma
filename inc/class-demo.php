<?php

namespace RWD_Enigma;

class Demo {
    
    var $post_id;

    public function __construct() {
        $this->post_id = get_the_ID();
    }

    public function get_colors() {

        // echo '<pre>';
        // print_r($this->post_id);
        // echo '</pre>';

        $color_theme = get_post_meta($this->post_id, 'color_theme', true);

        $color_themes = [
            'nature' => [ 
                'primary' => '#487f6d',
                'secondary' => '#62b7a3',
                'accent' => '#a4dab7',
                'light_accent' => '#dfece5',
                'light' => '#f9f6f1',
                'dark' => '#144334'
            ],
            'elegant' => [
                'primary' => '#6a293d',
                'secondary' => '#a05a6d',
                'accent' => '#d7b1a3',
                'light_accent' => '#f9f6f1',
                'light' => '#ebd9c7',
                'dark' => '#4c1f25'
            ]            
        ];

        return $color_themes[$color_theme];
    }
    
}