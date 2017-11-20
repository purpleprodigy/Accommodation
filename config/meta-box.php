<?php
/**
 * Accommodation Meta Box Configuration Model
 *
 * Runtime Configuration Parameters
 *
 * @package     PurpleProdigy\Metadata
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\Metadata;

return array(
	/************************************************************
	 * Configure a unique ID for your meta box.
	 *
	 * This ID is used when running add_meta_box, for storing
	 * in the Config Store, for the view file, and save $_POST.
	 ***********************************************************/
	'meta_box.accommodation' => array(

		/************************************************************
		 * Configuration parameters for adding the meta box.
		 ***********************************************************/
		'add_meta_box'  => array(
			'title'  => __( 'Accommodation', 'accommodation' ),
			'screen' => array( 'accommodation' ),
		),

		/************************************************************
		 * Configure each custom field, specifying its meta_key, default
		 * value, delete_state, and sanitizing function.
		 ***********************************************************/
		'custom_fields' => array(
			'beds'               => array(
				'is_single'    => true,
				'default'      => '',
				'delete_state' => '',
				'sanitize'     => 'sanitize_text_field',
			),
			'price'              => array(
				'is_single'    => true,
				'default'      => '',
				'delete_state' => '',
				'sanitize'     => 'sanitize_text_field',
			),
			'sleeps'             => array(
				'is_single'    => true,
				'default'      => '',
				'delete_state' => '',
				'sanitize'     => 'sanitize_text_field',
			),
			'booking_system_url' => array(
				'is_single'    => true,
				'default'      => '',
				'delete_state' => '',
				'sanitize'     => 'sanitize_text_field',
			),
		),

		/************************************************************
		 * Configure the absolute path to your meta box's view file.
		 ***********************************************************/
		'view'          => ACCOMMODATION_DIR . 'src/views/meta-box.php',
	),
);
