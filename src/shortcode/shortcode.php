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

use PurpleProdigy\Polestar\Custom;

Custom\register_shortcode( ACCOMMODATION_DIR . 'config/shortcode.php' );

/**
 * Process the Accommodation Shortcode to build a list of Accommodations.
 *
 * @since 1.0.0
 *
 * @param array $config Array of runtime configuration parameters.
 * @param array $attributes Attributes for this shortcode instance.
 * @param string $shortcode_name Name of the shortcode.
 *
 * @return string
 */
function process_the_accommodation_shortcode( array $config, array $attributes, $shortcode_name ) {

	$attributes['post_id'] = (int) $attributes['post_id'];

	if ( $attributes['post_id'] < 1 && ! $attributes['type'] ) {
		return '';
	}

	// Call the view file, capture it into the output buffer, and then return it.
	ob_start();

	if ( $attributes['post_id'] > 0 ) {
		render_single_accommodation( $attributes, $config );
	} else {
		render_type_accommodation( $attributes, $config );
	}

	return ob_get_clean();
}

/**
 * Render the single Accommodation.
 *
 * @since 1.3.0
 *
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function render_single_accommodation( array $attributes, array $config ) {
	$accommodation_id = (int) $attributes['post_id'];
	$accommodation    = get_post( $accommodation_id );
	if ( ! $accommodation ) {
		return render_none_found_message( $attributes );
	}

	$use_term_container   = false;
	$is_calling_source    = 'shortcode-single-accommodation';
	$post_id              = $accommodation->post_id;
	$post_title           = $accommodation->post_title;
	$post_content         = $accommodation->post_content;
	$post_thumbnail_id    = $accommodation->thumbnail_id;
	$post_thumbnail_url   = $accommodation->thumbnail_url;
	$post_thumbnail_title = $accommodation->post_title;

	include $config['view']['container_single'];
}

/**
 * Render the Type Accommodations.
 *
 * @since 1.3.0
 *
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function render_type_accommodation( array $attributes, array $config ) {
	$config_args = array(
		'posts_per_page' => (int) $attributes['number_of_accommodations'],
		'nopaging'       => true,
		'post_type'      => 'accommodation',
		'tax_query'      => array(
			array(
				'taxonomy' => 'accommodation-type',
				'field'    => 'slug',
				'terms'    => $attributes['type'],
			),
		),
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$query = new \WP_Query( $config_args );

	if ( ! $query->have_posts() ) {
		return render_none_found_message( $attributes, false );
	}

	while ( $query->have_posts() ) {
		$query->the_post();
	}

	$use_term_container = true;
	$is_calling_source  = 'shortcode-by-type';
	$term_slug          = $attributes['type'];

	include $config['view']['container_type'];

	wp_reset_postdata();
}

/**
 * Loop through the query and render out the Accommodation by type.
 *
 * @since 1.3.0
 *
 * @param \WP_Query $query
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function loop_and_render_accommodations_by_type( \WP_Query $query, array $attributes, array $config ) {
	$accommodation_id = (int) $attributes['post_id'];
	$accommodation    = get_post( $accommodation_id );
	while ( $query->have_posts() ) {
		$query->the_post();

		$is_calling_source    = 'loop-and-render';
		$post_title           = $accommodation->post_title;
		$post_content         = $accommodation->post_content;
		$post_thumbnail_id    = $accommodation->thumbnail_id;
		$post_thumbnail_url   = $accommodation->thumbnail_url;
		$post_thumbnail_title = $accommodation->post_title;

		include $config['view']['container_single'];
	}
}

/**
 * Render "none found" message handler.
 *
 * @since 1.0.0
 *
 * @param array $attributes
 * @param bool $is_single_accommodation
 *
 * @return void
 */
function render_none_found_message( array $attributes, $is_single_accommodation = true ) {
	if ( ! $attributes['show_none_found_message'] ) {
		return;
	}

	$message = $is_single_accommodation
		? $attributes['none_found_single']
		: $attributes['none_found_by_type'];

	echo "<p>{$message}</p>";
}
