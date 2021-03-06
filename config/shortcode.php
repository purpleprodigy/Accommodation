<?php
/**
 * Runtime configuration parameters for the Accommodation Shortcode.
 *
 * @package     PurpleProdigy\Accommodation
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\Accommodation;

return array(

	/**=================================================
	 * Shortcode name [accommodation]
	 *==================================================*/
	'shortcode_name'              => 'accommodation',

	/**=================================================
	 * Specify if you want do_shortcode() to run on the
	 * content between the shortcode opening and closing
	 * brackets. Defaults to true.
	 *==================================================*/
	'do_shortcode_within_content' => false,

	/**=================================================
	 * Specify the processing function when you want
	 * your code to handle the output buffer, view, and
	 * processing.
	 *==================================================*/
	'processing_function'         => __NAMESPACE__ . '\process_the_accommodation_shortcode',

	/**=================================================
	 * Paths to the view files
	 *==================================================*/
	'view'                        => array(
		'container_single' => ACCOMMODATION_DIR . '/src/views/accommodation.php',
		'container_type'   => ACCOMMODATION_DIR . '/src/views/container.php',
	),

	/**=================================================
	 * Defined shortcode default attributes.  Each is
	 * overridable by the author.
	 *==================================================*/
	'defaults'                    => array(
		'post_id'                  => 0,
		'type'                     => '',
		'number_of_accommodations' => -1,
		'show_none_found_message'  => 1,
		'none_found_by_type'       => __( 'Sorry, no Accommodations were found for that type.', ACCOMMODATION_TEXT_DOMAIN ),
		'none_found_single'        => __( 'Sorry, no Accommodation found.', ACCOMMODATION_TEXT_DOMAIN ),
	),
);