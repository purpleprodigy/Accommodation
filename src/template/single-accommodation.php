<?php
/**
 * Single Accommodation Template
 *
 * @package     PurpleProdigy\Accommodation\Template
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\Accommodation\Template;

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', __NAMESPACE__ . '\do_single_accommodation_loop' );
/**
 * Do the Single Accommodation loop and render out the HTML.
 *
 * NOTE: The variables are set to call the right HTML
 * markup in the container.php view file.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_single_accommodation_loop() {
	$records = get_posts_grouped_by_term( 'accommodation', 'accommodation-type' );
	if ( ! $records ) {
		_e( '<p>Sorry, there are no Accommodations to display.</p>', 'accommodation' );

		return;
	}

	$use_term_container = true;
	$show_term_name     = true;
	$is_calling_source  = 'template';

	foreach ( $records as $record ) {
		$term_slug = $record['term_slug'];

		include ACCOMMODATION_DIR . 'src/views/accommodation.php';
	}
}

/**
 * Loop through and render out the Accommodations.
 *
 * @since 1.0.0
 *
 * @param array $accommodations
 *
 * @return void
 */
function loop_and_render_accommodations( array $accommodations ) {
	foreach ( $accommodations as $accommodation ) {
		$post_id                 = $accommodation['post_id'];
		$post_title              = $accommodation['post_title'];
		$post_content            = $accommodation['post_content'];
		$post_thumbnail_id       = $accommodation['thumbnail_id'];
		$post_thumbnail_url      = $accommodation['thumbnail_url'];
		$post_thumbnail_metadata = $accommodation['thumbnail_metadata'];
		$post_thumbnail_title    = $accommodation['post_title'];

		include ACCOMMODATION_DIR . 'src/views/accommodation.php';
	}
}

genesis();
