<?php

// Register Custom Post Type
function ec_speaker_post_type() {

	$labels = array(
		'name'                  => 'Speakers',
		'singular_name'         => 'Speaker',
		'menu_name'             => 'Speakers',
		'name_admin_bar'        => 'Speaker',
		'archives'              => 'Speaker Archives',
		'attributes'            => 'Speaker Attributes',
		'parent_item_colon'     => 'Parent Speaker:',
		'all_items'             => 'All Speakers',
		'add_new_item'          => 'Add New Speaker',
		'add_new'               => 'Add New',
		'new_item'              => 'New Speaker',
		'edit_item'             => 'Edit Speaker',
		'update_item'           => 'Update Speaker',
		'view_item'             => 'View Speaker',
		'view_items'            => 'View Speakers',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Speaker Photo',
		'set_featured_image'    => 'Set speaker photo',
		'remove_featured_image' => 'Remove speaker photo',
		'use_featured_image'    => 'Use as speaker photo',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this speaker',
		'items_list'            => 'Speakers list',
		'items_list_navigation' => 'Speakers list navigation',
		'filter_items_list'     => 'Filter speakers list',
	);
	$args = array(
		'label'                 => 'Speaker',
		'description'           => 'Conference Speakers',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'speakers', $args );

}
add_action( 'init', 'ec_speaker_post_type', 0 );
