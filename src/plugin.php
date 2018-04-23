<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\FAQ_Beans;
 * @since       2.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GPL-2.0+
 */

namespace PurpleProdigy\FAQ_Beans;

/**
 * Launches the plugin.
 *
 * @since 2.0.0
 *
 * @param string $root_file Plugin's root bootstrap file.
 *
 * @return void
 */
function launch_plugin( $root_file ) {
	autoload();

	register_with_custom_module( $root_file );
}

/**
 * Autoload plugin files.
 *
 * @since 2.0.0
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
	$asset_file   = 'assets/css/style.css';
	$enqueue_list = apply_filters( 'enqueue_styles', array( 'dashicons', $asset_file ) );
	if ( ! $enqueue_list ) {
		return;
	}

	foreach ( $enqueue_list as $asset_handle ) {
		if ( 'dashicons' === $asset_handle ) {
			wp_enqueue_style( 'dashicons' );
		} elseif ( 'font-awesome' === $asset_handle ) {
			wp_enqueue_style(
				'font-awesome',
				'//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
				array(),
				null );
		} elseif ( $asset_file === $asset_handle ) {
			wp_enqueue_style(
				'gallery_style',
				FAQ_URL . $asset_file,
				array(),
				get_asset_current_version_number( FAQ_DIR . $asset_file )
			);
		}
	}
	$asset_file = 'assets/js/jquery.plugin.js';
	wp_enqueue_script(
		'faq-plugin-script',
		FAQ_URL . $asset_file,
		array( 'jquery' ),
		get_asset_current_version_number( FAQ_DIR . $asset_file ),
		true
	);
}
