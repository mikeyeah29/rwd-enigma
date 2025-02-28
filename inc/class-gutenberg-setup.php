<?php

class Rwd_Enigma_GutenbergSetup {

    /**
     * Blocks to wrap in a container.
     *
     * @var array
     */
    private $blocks_to_wrap = [
        'core/columns'
        // 'core/image'
    ];

    /**
     * Constructor to hook into WordPress.
     */
    public function __construct() {
        add_action('after_setup_theme', [$this, 'register_colors']);
        add_filter('render_block', [$this, 'wrap_block_with_container'], 10, 2);
    }

    /**
     * Register custom colors for Gutenberg.
     */
    public function register_colors() {
        add_theme_support('editor-color-palette', array(
            array(
                'name'  => __('Primary Sage', 'enigma'),
                'slug'  => 'primary-sage',
                'color' => '#A7C4A0',
            ),
            array(
                'name'  => __('Primary Blue', 'enigma'),
                'slug'  => 'primary-blue',
                'color' => '#B0C4DE',
            ),
            array(
                'name'  => __('Primary Beige', 'enigma'),
                'slug'  => 'primary-beige',
                'color' => '#F5E9DA',
            ),
            array(
                'name'  => __('Secondary Terracotta', 'enigma'),
                'slug'  => 'secondary-terracotta',
                'color' => '#D4A373',
            ),
            array(
                'name'  => __('Secondary Gold', 'enigma'),
                'slug'  => 'secondary-gold',
                'color' => '#E8C872',
            ),
            array(
                'name'  => __('Secondary Lavender', 'enigma'),
                'slug'  => 'secondary-lavender',
                'color' => '#C3A2E4',
            ),
            array(
                'name'  => __('Background Charcoal', 'enigma'),
                'slug'  => 'background-charcoal',
                'color' => '#4A4A4A',
            ),
            array(
                'name'  => __('Background Mist', 'enigma'),
                'slug'  => 'background-mist',
                'color' => '#ECECEC',
            ),
            array(
                'name'  => __('Background Off White', 'enigma'),
                'slug'  => 'background-off-white',
                'color' => '#FAF9F6',
            ),
        ));

        // Optional: Disable default WordPress colors
        add_theme_support('disable-custom-colors');
    }

    public function wrap_block_with_container($block_content, $block) {

        if (!isset($block['blockName']) || !$block['blockName']) {
            return $block_content;
        }

        // Check if the block is in the list
        if (in_array($block['blockName'], $this->blocks_to_wrap, true)) {
            return '<div class="container-fluid">' . $block_content . '</div>';
        }

        return $block_content;
    }
}
