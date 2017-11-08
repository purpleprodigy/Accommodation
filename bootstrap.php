<?php
/**
 * Accommodation plugin
 *
 * @package     PurpleProdigy\Accommodation;
 * @author      Purple Prodigy
 * @licence     GPL-2.0+
 * @link        https://purpleprodigy.com
 */
/*
 * @wordpress-plugin
 * Plugin Name:     Accommodation
 * Plugin URI:      https://github.com/purpleprodigy/Accommodation
 * Description:     Accommodation is a WordPress Plugin that displays a grid layout for accommodation options using a custom post type and taxonomy.
 * Version:         1.0.0
 * Author:          Purple Prodigy
 * Author URI:      https://purpleprodigy.com
 * Text Domain:     accommodation
 * Requires WP:     4.7
 * Requires PHP:    5.5
 */
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace PurpleProdigy\Accommodation;

use PurpleProdigy\Polestar\Custom as CustomModule;
use PurpleProdigy\Metadata as metaData;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Nothing to see here." );
}

/**
 * Set up the plugin's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$plugin_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
	}

	define( 'ACCOMMODATION_URL', $plugin_url );
	define( 'ACCOMMODATION_DIR', plugin_dir_path( __FILE__ ) );
	define( 'ACCOMMODATION_PLUGIN', __FILE__ );
	define( 'ACCOMMODATION_TEXT_DOMAIN', 'accommodation' );
}

include __DIR__ . '/src/plugin.php';

/**
 * Register a plugin with the Custom Module.
 *
 * @since 1.0.0
 *
 * @param string $plugin_file
 *
 * @return void
 */
function register_plugin( $plugin_file ) {
	register_activation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_deactivation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_uninstall_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
}

/**
 * Delete the rewrite rules on plugin status change.
 *
 * @since 1.0.0
 *
 * @return void
 */
function delete_rewrite_rules_on_plugin_status_change() {
	delete_option( 'rewrite_rules' );
}

CustomModule\register_plugin( __FILE__ );

/**
 * Autoload the plugin's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload_files() {
	$files = array(
		'/src/config-store/module.php',
		'/src/metadata/module.php'
	);

	foreach ( $files as $filename ) {
		require __DIR__ . $filename;
	}
}

/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_constants();

	autoload_files();

	// Load configurations
	metaData\autoload_configurations(
		array(
			__DIR__ . '/config/meta-box.php'
		)
	);
}

launch();
