<?php

class Rwd_Enigma_Testimonial_CPT {

	const POST_TYPE = 'testimonial';

	public function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ] );
	}

	public function register_post_type() {
		$labels = [
			'name'               => __( 'Testimonials', 'rwd-enigma' ),
			'singular_name'      => __( 'Testimonial', 'rwd-enigma' ),
			'add_new'            => __( 'Add New', 'rwd-enigma' ),
			'add_new_item'       => __( 'Add New Testimonial', 'rwd-enigma' ),
			'edit_item'          => __( 'Edit Testimonial', 'rwd-enigma' ),
			'new_item'           => __( 'New Testimonial', 'rwd-enigma' ),
			'view_item'          => __( 'View Testimonial', 'rwd-enigma' ),
			'search_items'       => __( 'Search Testimonials', 'rwd-enigma' ),
			'not_found'          => __( 'No testimonials found', 'rwd-enigma' ),
			'not_found_in_trash' => __( 'No testimonials found in Trash', 'rwd-enigma' ),
			'menu_name'          => __( 'Testimonials', 'rwd-enigma' ),
		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'show_in_rest'       => false,
			'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
			'has_archive'        => true,
			'menu_icon'          => 'dashicons-testimonial',
			'rewrite'            => [ 'slug' => 'testimonials' ],
		];

		register_post_type( self::POST_TYPE, $args );
	}
}

// Initialize the class
new Rwd_Enigma_Testimonial_CPT();
