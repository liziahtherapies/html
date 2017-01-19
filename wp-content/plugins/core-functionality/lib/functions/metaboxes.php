<?php
/**
 * Metaboxes
 *
 * This file registers any custom metaboxes
 *
 * @package      Shem_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Metaboxes
 * @since 1.0.0
 * @link http://www.billerickson.net/wordpress-metaboxes/
 */

function be_metaboxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'id' => 'page-options',
		'title' => 'Class',
		'pages' => array('Class'), 
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, 
		'fields' => array(
			array(
				'name' => 'Day',
				'desc' => ' Click Inside to Choose Date',
				'id' => $prefix . 'class_day',
				'type' => 'text_small'
			),
			
			array(
				'name' => 'Time',
				'desc' => 'field description (optional)',
				'id' => $prefix . 'class_time',
				'type' => 'text_small'
			),
			
			array(
				'name' => 'Class',
				'desc' => 'field description (optional)',
				'id' => $prefix . 'class_description',
				'type' => 'text_medium'
			),
			
			array(
				'name' => 'Location',
				'desc' => 'field description (optional)',
				'id' => $prefix . 'class_location',
				'type' => 'text_medium'
			),
			
			array(
				'name' => 'Web URL',
				'desc' => 'field description (optional)',
				'id' => $prefix . 'class_link',
				'type' => 'text_medium'
			),
			
			array(
				'name' => 'Notes',
				'desc' => 'field description (optional)',
				'id' => $prefix . 'class_notes',
				'type' => 'textarea'
			),
						
		),
	);
	
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes' , 'be_metaboxes' );
 
 
/**
 * Initialize Metabox Class
 * @since 1.0.0
 * see /lib/metabox/example-functions.php for more information
 *
 */
  
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( BE_DIR . '/lib/metabox/init.php' );
	}
}
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );