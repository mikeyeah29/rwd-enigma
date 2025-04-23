<?php

namespace RWDEnigma\Blocks;

class Service_Tags_Block {

    var $theme_namespace = 'rwd-enigma';

    public function __construct() {
        add_action('init', [$this, 'register_block']);
    }

    public function register_block() {
        register_block_type($this->theme_namespace . '/service-tags', [
            'render_callback' => [$this, 'render_block'],
        ]);
    }

    public function render_block($attributes, $content, $block) {
        ob_start();
        get_template_part('template-parts/blocks/service-tags', null, [
            'attributes' => $attributes,
            'block' => $block
        ]);
        return ob_get_clean();
    }
}

new Service_Tags_Block();
