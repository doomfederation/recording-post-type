<?php

/**
 * Plugin Name: Recording Post Type 
 * Plugin URI: https://github.com/doomfederation/recording-post-type
 * Description: Provides a recording post type for https://doomfederation.com 
 * Version: 1.0.0
 * Author: Swarthmore College
 * Author URI: https://swarthmore.edu
 * License: MIT
**/

// If this script is called directly, abort.
if (!defined("WPINC")) {
  die;
}

// Register Custom Post Type
function recording_post_type() {

	$labels = array(
		'name'                  => _x( 'Recordings', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Recording', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Recordings', 'text_domain' ),
		'name_admin_bar'        => __( 'Recording', 'text_domain' ),
		'archives'              => __( 'Recording Archives', 'text_domain' ),
		'attributes'            => __( 'Recording Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Recording', 'text_domain' ),
		'all_items'             => __( 'All Recordings', 'text_domain' ),
		'add_new_item'          => __( 'Add New Recording', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Recording', 'text_domain' ),
		'edit_item'             => __( 'Edit Recording', 'text_domain' ),
		'update_item'           => __( 'Update Recording', 'text_domain' ),
		'view_item'             => __( 'View Recording', 'text_domain' ),
		'view_items'            => __( 'View Recordingss', 'text_domain' ),
		'search_items'          => __( 'Search Recording', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Recording', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this recording', 'text_domain' ),
		'items_list'            => __( 'Recordings list', 'text_domain' ),
		'items_list_navigation' => __( 'Recordings list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter recordings list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Recording', 'text_domain' ),
		'description'           => __( 'Describes a recording as it relates to https://doomfederation.com.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'incidents'
	);
	register_post_type( 'recording', $args );

}
add_action( 'init', 'recording_post_type', 0 );



?>
