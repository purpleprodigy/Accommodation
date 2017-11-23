<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Accommodation;
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GPL-2.0+
 */

namespace PurpleProdigy\Accommodation;

use PurpleProdigy\Metadata;

/**
 * Launches the plugin.
 *
 * @since 1.0.0
 *
 * @param string $root_file Plugin's root bootstrap file.
 *
 * @return void
 */
function launch_plugin( $root_file ) {
	autoload();

	register_with_custom_module( $root_file );

	// Load configurations
	MetaData\autoload_configurations(
		array(
			ACCOMMODATION_DIR . 'config/meta-box.php',
		)
	);
}

/**
 * Autoload plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'custom.php',
		'shortcode/shortcode.php',
		'template/helpers.php',
	);

	foreach ( $files as $file ) {
		require __DIR__ . '/' . $file;
	}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	$asset_file = 'assets/css/style.css';

	wp_enqueue_style(
		'accommodation_style',
		ACCOMMODATION_URL . $asset_file,
		array(),
		get_asset_current_version_number( ACCOMMODATION_DIR . $asset_file )
	);

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style(
		'font-awesome',
		'//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
		array(),
		null );
}
