<?php

class Rwd_Enigma_Demo_CPT {

	const POST_TYPE = 'demo';

	public function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ] );
	}

	public function register_post_type() {
		$labels = [
			'name'               => __( 'Demos', 'rwd-enigma' ),
			'singular_name'      => __( 'Demo', 'rwd-enigma' ),
			'add_new'            => __( 'Add New', 'rwd-enigma' ),
			'add_new_item'       => __( 'Add New Demo', 'rwd-enigma' ),
			'edit_item'          => __( 'Edit Demo', 'rwd-enigma' ),
			'new_item'           => __( 'New Demo', 'rwd-enigma' ),
			'view_item'          => __( 'View Demo', 'rwd-enigma' ),
			'search_items'       => __( 'Search Demos', 'rwd-enigma' ),
			'not_found'          => __( 'No demos found', 'rwd-enigma' ),
			'not_found_in_trash' => __( 'No demos found in Trash', 'rwd-enigma' ),
			'menu_name'          => __( 'Demos', 'rwd-enigma' ),
		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'show_in_rest'       => true,
			'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
			'has_archive'        => true,
			'menu_icon'          => 'dashicons-playlist-video',
			'rewrite'            => [ 'slug' => 'demos' ],
		];

		register_post_type( self::POST_TYPE, $args );
	}
}

new Rwd_Enigma_Demo_CPT();
