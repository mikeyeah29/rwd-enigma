<?php

namespace RWDEnigma\Blocks;

class Hero_Default_Block {

    var $theme_namespace = 'rwd-enigma';

    public function __construct() {
        add_action('init', [$this, 'register_block']);

    }

    public function register_block() {
        register_block_type($this->theme_namespace . '/hero-default', [
            'attributes' => [
                'imageUrl' => ['type' => 'string', 'default' => ''],
                'caption' => ['type' => 'string', 'default' => ''],
                'columnWidth' => ['type' => 'number', 'default' => 6],
            ],
            'render_callback' => [$this, 'render_block'],
        ]);
    }

    public function render_block($attributes, $content, $block) {
        ob_start();
        get_template_part('template-parts/blocks/hero-default', null, [
            'attributes' => $attributes,
            'block' => $block
        ]);
        return ob_get_clean();
    }
}

new Hero_Default_Block();
