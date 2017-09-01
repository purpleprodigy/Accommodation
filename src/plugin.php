<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\Accommodation;
 * @since       1.3.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\Accommodation;

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

/**
 * Autoload plugin files.
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'module.php',
		'template/helpers.php'

	);

	foreach ( $files as $file ) {
		include __DIR__ . '/' . $file;
	}
}

autoload();