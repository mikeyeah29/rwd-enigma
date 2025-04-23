<?php

namespace RWDEnigma\Blocks;

class About_Me_Block {

    var $theme_namespace = 'rwd-enigma';

    public function __construct() {
        add_action('init', [$this, 'register_block']);
    }

    public function register_block() {
        register_block_type($this->theme_namespace . '/about-me', [
            'render_callback' => [$this, 'render_block'],
        ]);
    }

    public function render_block($attributes, $content, $block) {
        ob_start();
        get_template_part('template-parts/blocks/about-me', null, [
            'attributes' => $attributes,
            'block' => $block
        ]);
        return ob_get_clean();
    }
}

new About_Me_Block();
