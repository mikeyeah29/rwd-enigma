<?php

class Cherry_Custom_Post_Types
{
    public function __construct()
    {
        add_action('init', array($this, 'register_testimonial_post_type'));
        add_action('init', array($this, 'register_service_post_type'));
        add_action('init', array($this, 'register_project_taxonomy'));
        add_action('init', array($this, 'register_project_post_type'));
    }

    function register_project_taxonomy() {
        // Register a new taxonomy for Projects
        register_taxonomy('project_type', 'project', array(
            'labels' => array(
                'name'              => __('Project Types', 'textdomain'),
                'singular_name'     => __('Project Type', 'textdomain'),
                'search_items'      => __('Search Project Types', 'textdomain'),
                'all_items'         => __('All Project Types', 'textdomain'),
                'parent_item'       => __('Parent Project Type', 'textdomain'),
                'parent_item_colon' => __('Parent Project Type:', 'textdomain'),
                'edit_item'         => __('Edit Project Type', 'textdomain'),
                'update_item'       => __('Update Project Type', 'textdomain'),
                'add_new_item'      => __('Add New Project Type', 'textdomain'),
                'new_item_name'     => __('New Project Type Name', 'textdomain'),
                'menu_name'         => __('Project Types', 'textdomain'),
            ),
            'hierarchical'      => true, // Like categories
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_rest'      => true, // Gutenberg support
            'rewrite'           => array('slug' => 'project-type'), // Custom URL slug
        ));
    }

    public function register_testimonial_post_type()
    {
        $labels = array(
            'name'               => __('Testimonials', 'cherry-theme'),
            'singular_name'      => __('Testimonial', 'cherry-theme'),
            'menu_name'          => __('Testimonials', 'cherry-theme'),
            'add_new'            => __('Add New', 'cherry-theme'),
            'add_new_item'       => __('Add New Testimonial', 'cherry-theme'),
            'edit_item'          => __('Edit Testimonial', 'cherry-theme'),
            'new_item'           => __('New Testimonial', 'cherry-theme'),
            'view_item'          => __('View Testimonial', 'cherry-theme'),
            'all_items'          => __('All Testimonials', 'cherry-theme'),
            'search_items'       => __('Search Testimonials', 'cherry-theme'),
            'not_found'          => __('No testimonials found.', 'cherry-theme'),
            'not_found_in_trash' => __('No testimonials found in trash.', 'cherry-theme'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'supports'           => array('title', 'editor', 'thumbnail'),
            'rewrite'            => array('slug' => 'testimonials'),
            'menu_icon'          => 'dashicons-testimonial',
        );

        register_post_type('testimonial', $args);
    }

    public function register_service_post_type()
    {
        $labels = array(
            'name'               => __('Services', 'cherry-theme'),
            'singular_name'      => __('Service', 'cherry-theme'),
            'menu_name'          => __('Services', 'cherry-theme'),
            'add_new'            => __('Add New', 'cherry-theme'),
            'add_new_item'       => __('Add New Service', 'cherry-theme'),
            'edit_item'          => __('Edit Service', 'cherry-theme'),
            'new_item'           => __('New Service', 'cherry-theme'),
            'view_item'          => __('View Service', 'cherry-theme'),
            'all_items'          => __('All Services', 'cherry-theme'),
            'search_items'       => __('Search Services', 'cherry-theme'),
            'not_found'          => __('No services found.', 'cherry-theme'),
            'not_found_in_trash' => __('No services found in trash.', 'cherry-theme'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => false,
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite'            => array('slug' => 'services'),
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-admin-tools',
        );

        register_post_type('service', $args);
    }

    public function register_project_post_type()
    {
        $labels = array(
            'name'               => __('Projects', 'cherry-theme'),
            'singular_name'      => __('Project', 'cherry-theme'),
            'menu_name'          => __('Projects', 'cherry-theme'),
            'add_new'            => __('Add New', 'cherry-theme'),
            'add_new_item'       => __('Add New Project', 'cherry-theme'),
            'edit_item'          => __('Edit Project', 'cherry-theme'),
            'new_item'           => __('New Project', 'cherry-theme'),
            'view_item'          => __('View Project', 'cherry-theme'),
            'all_items'          => __('All Projects', 'cherry-theme'),
            'search_items'       => __('Search Projects', 'cherry-theme'),
            'not_found'          => __('No projects found.', 'cherry-theme'),
            'not_found_in_trash' => __('No projects found in trash.', 'cherry-theme'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomies'         => array('project_type'),
            'rewrite'            => array('slug' => 'projects'),
            'menu_icon'          => 'dashicons-portfolio',
            'show_in_rest'       => true,
            'template' => [
                ['cherry/project-intro', []],
                ['cherry/project-gallery', [
                    'images' => [
                        ['url' => 'default1.jpg', 'gridColumn' => 'span 9', 'gridRow' => 'span 1', 'aspectRatio' => 'aspect-ratio-standard'],
                        ['url' => 'default2.jpg', 'gridColumn' => 'span 7', 'gridRow' => 'span 2', 'aspectRatio' => 'aspect-ratio-tall'],
                        ['url' => 'default3.jpg', 'gridColumn' => 'span 7', 'gridRow' => 'span 1', 'aspectRatio' => 'aspect-ratio-standard'],
                        ['url' => 'default4.jpg', 'gridColumn' => 'span 7', 'gridRow' => 'span 2', 'aspectRatio' => 'aspect-ratio-tall'],
                        ['url' => 'default5.jpg', 'gridColumn' => '3 / 8', 'gridRow' => 'span 1', 'aspectRatio' => 'aspect-ratio-standard'],
                        ['url' => 'default6.jpg', 'gridColumn' => 'span 14', 'gridRow' => 'span 1', 'aspectRatio' => 'aspect-ratio-standard'],
                    ],
                ]]
            ],
        );

        register_post_type('project', $args);
    }
}

?>
