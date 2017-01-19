<?php
/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Rotator post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function be_register_class_post_type() {
	$labels = array(
		'name' => 'Class Items',
		'singular_name' => 'Class Item',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Class Item',
		'edit_item' => 'Edit Class Item',
		'new_item' => 'New Class Item',
		'view_item' => 'View Class Item',
		'search_items' => 'Search Class Items',
		'not_found' =>  'No Class items found',
		'not_found_in_trash' => 'No Class items found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Classes'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => 'classes', 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title')
	); 

	register_post_type( 'class', $args );
}
add_action( 'init', 'be_register_class_post_type' );	
