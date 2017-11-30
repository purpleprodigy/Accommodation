<?php

namespace PurpleProdigy\Accommodation\Template;

add_action( 'genesis_entry_content', __NAMESPACE__ . '\render_accommodation_image', 8 );
function render_accommodation_image() {
	$img = genesis_get_image( array(
		'format'  => 'html',
		'size'    => genesis_get_option( 'image_size' ),
		'context' => 'archive',
		'attr'    => genesis_parse_attr( 'entry-image', array( 'alt' => get_the_title() ) ),
	) );

	if ( empty( $img ) ) {
		return;
	}

	genesis_markup( array(
		'open'    => '<a %s>',
		'close'   => '</a>',
		'content' => wp_make_content_images_responsive( $img ),
		'context' => 'entry-image-link',
	) );
}

remove_filter( 'genesis_attr_entry-image', 'genesis_attributes_entry_image' );
add_filter( 'genesis_attr_entry-image-link', __NAMESPACE__ . '\add_image_attributes' );
/**
 * Add attributes for accommodation image.
 *
 * @since 1.0.0
 *
 * @param array $attributes Existing attributes for entry image element.
 * @return array Amended attributes for entry image element.
 */
function add_image_attributes( array $attributes ) {
	$attributes['class']    = 'alignnone post-image entry-image';
	$attributes['itemprop'] = 'image';

	return $attributes;
}

add_action( 'genesis_entry_content', __NAMESPACE__ . '\render_summary', 11 );
/**
 * Render the footer which includes the booking button and summary.
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_summary() {
	$post_id = (int) get_the_ID();

	require __DIR__ . '/summary.php';
}

genesis();
