<?php

// replace:
// defaults === your_post_name
// Defaults === your_post_names **plural
// Default === your_post_name **singular
// starter-theme-text-domain === your-text-domain
//add your description here === add description

// require:
// require this file in functions.php



function ig_gav_defaults() {
	$labels = array(
		'name'               => _x( 'Defaults', 'starter-theme-text-domain' ),
		'singular_name'      => _x( 'Default', 'post type singular name', 'starter-theme-text-domain' ),
		'menu_name'          => _x( 'Defaults', 'admin menu', 'starter-theme-text-domain' ),
		'name_admin_bar'     => _x( 'Default', 'add new on admin bar', 'starter-theme-text-domain' ),
		'add_new'            => _x( 'Add New', 'book', 'starter-theme-text-domain' ),
		'add_new_item'       => __( 'Add New Default', 'starter-theme-text-domain' ),
		'new_item'           => __( 'New Default', 'starter-theme-text-domain' ),
		'edit_item'          => __( 'Edit Default', 'starter-theme-text-domain' ),
		'view_item'          => __( 'View Default', 'starter-theme-text-domain' ),
		'all_items'          => __( 'All Defaults', 'starter-theme-text-domain' ),
		'search_items'       => __( 'Search Defaults', 'starter-theme-text-domain' ),
		'parent_item_colon'  => __( 'Parent Defaults:', 'starter-theme-text-domain' ),
		'not_found'          => __( 'No Defaults found.', 'starter-theme-text-domain' ),
		'not_found_in_trash' => __( 'No Defaults found in Trash.', 'starter-theme-text-domain' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'add your description here', 'starter-theme-text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-groups',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'defaults' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category', 'post_tag' ),
	);

	register_post_type( 'ig_gav_defaults', $args );
}

add_action( 'init', 'ig_gav_defaults' );