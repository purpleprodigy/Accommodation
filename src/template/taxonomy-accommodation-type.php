<?php
/**
 * Accommodation Taxonomy Template
 *
 * @package     PurpleProdigy\Accommodation\Template
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\Accommodation\Template;

add_action( 'genesis_entry_content', __NAMESPACE__ . '\render_accommodation_image', 8 );

add_action( 'genesis_entry_content', __NAMESPACE__ . '\render_summary', 11 );
/**
 * Render the footer which includes the booking button and summary.
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_summary() {
	$accommodation_id = (int) get_the_ID();

	require dirname( __DIR__ ) . '/views/summary.php';
}

genesis();
