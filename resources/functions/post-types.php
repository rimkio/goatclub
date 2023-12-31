<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if ( ! function_exists( 'dev_create_custom_post_type' ) ) {
	// Register Custom Post Type
	function dev_create_custom_post_type() {
		register_post_type( 'events', array(
			'label'               => __( 'Events', 'dev' ),
			'description'         => __( 'Events', 'dev' ),
			//'labels'                => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-calendar',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		) );

	}
	add_action( 'init', 'dev_create_custom_post_type', 0 ); // Register Custom Taxonomy
}

if ( ! function_exists( 'dev_create_custom_taxonomy' ) ) {
	function dev_create_custom_taxonomy() {
		register_taxonomy('festival', array('events'), array(
			'labels'            => array(
				'name'          => _x('Festivals', 'Taxonomy General Name', 'dev'),
				'singular_name' => _x('Festivals', 'Taxonomy Singular Name', 'dev'),
				'menu_name'     => __('Festivals', 'dev'),
			),
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,
		));
		
	}

	add_action( 'init', 'dev_create_custom_taxonomy', 0 );
}
