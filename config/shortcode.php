<?php
/**
 * Runtime configuration parameters for the Accommodation Shortcode.
 *
 * @package     PurpleProdigy\Accommodation
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Accommodation;

//use PurpleProdigy\Polestar\Metadata;
//use PurpleProdigy\Polestar\ConfigStore;
//
//$store_key = array_pop(Metadata\get_meta_box_keys());
//$config_file = ConfigStore\getConfig( 'meta_box_' . $store_key );
//$custom_fields = Metadata\get_custom_fields_values( get_the_ID(), $store_key, $config_file );

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
		'container_single' => ACCOMMODATION_DIR . '/src/shortcode/views/container.php',
		'container_type'   => ACCOMMODATION_DIR . '/src/shortcode/views/container.php',
		'accommodation'    => ACCOMMODATION_DIR . '/src/shortcode/views/accommodation.php',
	),

	/**=================================================
	 * Defined shortcode default attributes.  Each is
	 * overridable by the author.
	 *==================================================*/
	'defaults'                    => array(
		'show_icon'                => '',
		'hide_icon'                => '',
		'post_id'                  => 0,
		'type'                     => '',
		'number_of_accommodations' => - 1,
		'show_none_found_message'  => 1,
		'none_found_by_type'       => __( 'Sorry, no Accommodations were found for that type.', ACCOMMODATION_TEXT_DOMAIN ),
		'none_found_single'        => __( 'Sorry, no Accommodation found.', ACCOMMODATION_TEXT_DOMAIN ),
	),
);