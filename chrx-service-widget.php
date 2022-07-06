<?php
/**
 * Plugin Name: Chrx service
 * Plugin URI:  https://twitter.com/ocen_chris
 * Description: This pluging shows the name and details of the service provider
 * Version:     1.0
 * Author:      Ocen Chrx
 * Author URI:  https://twitter.com/ocen_chris
 * Text Domain: chrx_service
 *
 * @package chrx-service
 */

// If this file is called directly, abort!!!
defined( 'ABSPATH' ) || die( 'No Access!' );

if ( 'CHRX_CUSTOM_URL' ) {
	define( 'CHRX_CUSTOM_URL', plugin_dir_url( __FILE__ ) );
}

require_once( plugin_dir_path( __FILE__ ) . '/chrx-service-widget.php' );
