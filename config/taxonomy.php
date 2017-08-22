<?php
/**
 * Runtime configuration for the Accommodation taxonomy.
 *
 * @package     PurpleProdigy\Accommodation
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Accommodation;

return array(
	/**=============================================================
	 * The taxonomy name.
	 *============================================================*/
	'taxonomy' => 'accommodation-type',

	/**=============================================================
	 * The label configuration.
	 *============================================================*/
	'labels' => array(
		'custom_type' => 'accommodation-type',
		'singular_label' => 'Accommodation type',
		'plural_label' => 'Accommodation types',
		'in_sentence_label' => 'accommodation type',
		'text_domain' => ACCOMMODATION_TEXT_DOMAIN,
		'specific_labels' => array(),
	),

	/**=============================================================
	 * These are the arguments for registering the taxonomy.
	 *============================================================*/
	'args'     => array(
		'label'             => __( 'Accommodation type', ACCOMMODATION_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	),

	/**=============================================================
	 * These are the post types to bind the taxonomy to.
	 *============================================================*/
	'post_types' => array ( 'accommodation' ),
);