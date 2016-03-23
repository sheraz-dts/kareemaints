<?php
/*
Plugin Name: WP Tour Management
Plugin URI: 
Description: A very simple tour and flights management system.
Author: Muhammad Sheraz Javed
Author URI: https://sherazcodex.wordpress.com/
Text Domain: simple-tour-management
Domain Path: /languages/
Version: 1.0
*/

define( 'WPTM_VERSION', '4.4' );

define( 'WPTM_REQUIRED_WP_VERSION', '4.3' );

define( 'WPTM_PLUGIN', __FILE__ );

define( 'WPTM_PLUGIN_BASENAME', plugin_basename( WPTM_PLUGIN ) );

define( 'WPTM_PLUGIN_NAME', trim( dirname( WPTM_PLUGIN_BASENAME ), '/' ) );

define( 'WPTM_PLUGIN_DIR', untrailingslashit( dirname( WPTM_PLUGIN ) ) );

define( 'WPTM_PLUGIN_MODULES_DIR', WPTM_PLUGIN_DIR . '/modules' );

if ( ! defined( 'WPTM_LOAD_JS' ) ) {
	define( 'WPTM_LOAD_JS', true );
}

if ( ! defined( 'WPTM_LOAD_CSS' ) ) {
	define( 'WPTM_LOAD_CSS', true );
}

if ( ! defined( 'WPTM_AUTOP' ) ) {
	define( 'WPTM_AUTOP', true );
}

if ( ! defined( 'WPTM_USE_PIPE' ) ) {
	define( 'WPTM_USE_PIPE', true );
}

if ( ! defined( 'WPTM_ADMIN_READ_CAPABILITY' ) ) {
	define( 'WPTM_ADMIN_READ_CAPABILITY', 'edit_posts' );
}

if ( ! defined( 'WPTM_ADMIN_READ_WRITE_CAPABILITY' ) ) {
	define( 'WPTM_ADMIN_READ_WRITE_CAPABILITY', 'publish_pages' );
}

if ( ! defined( 'WPTM_VERIFY_NONCE' ) ) {
	define( 'WPTM_VERIFY_NONCE', true );
}

if ( ! defined( 'WPTM_USE_REALLY_SIMPLE_CAPTCHA' ) ) {
	define( 'WPTM_USE_REALLY_SIMPLE_CAPTCHA', false );
}

if ( ! defined( 'WPTM_VALIDATE_CONFIGURATION' ) ) {
	define( 'WPTM_VALIDATE_CONFIGURATION', true );
}

// Deprecated, not used in the plugin core. Use WPTM_plugin_url() instead.
define( 'WPTM_PLUGIN_URL', untrailingslashit( plugins_url( '', WPTM_PLUGIN ) ) );

require_once WPTM_PLUGIN_DIR . '/settings.php';
