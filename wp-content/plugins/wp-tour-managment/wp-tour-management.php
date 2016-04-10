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

if ( ! defined( 'FLIGHT_CLASS_BUSINESS' ) ) {
	define( 'FLIGHT_CLASS_BUSINESS', 'business' );
}

if ( ! defined( 'FLIGHT_CLASS_ECONOMY' ) ) {
	define( 'FLIGHT_CLASS_ECONOMY', 'economy' );
}

if ( ! defined( 'FLIGHT_CLASS_GROUPS' ) ) {
	define( 'FLIGHT_CLASS_GROUPS', 'groups' );
}

if ( ! defined( 'CURRENCY_SYMBOL' ) ) {
	define( 'CURRENCY_SYMBOL', 'PKR' );
}

if ( ! defined( 'ROUTE_ONE_WAY_TRIP' ) ) {
	define( 'ROUTE_ONE_WAY_TRIP', 'one way' );
}

if ( ! defined( 'ROUTE_ROUND_TRIP' ) ) {
	define( 'ROUTE_ROUND_TRIP', 'round' );
}

if ( ! defined( 'ADMIN_EMAIL_FLIGHT_BOOKING_SUBJECT' ) ) {
	define( 'ADMIN_EMAIL_FLIGHT_BOOKING_SUBJECT', 'New Flight Booking from a Customer' );
}

if ( ! defined( 'ADMIN_EMAIL_FLIGHT_BOOKING_CONTENT' ) ) {
	define( 'ADMIN_EMAIL_FLIGHT_BOOKING_CONTENT', 'Dear Admin, <br><br>A flight booking request is received from a customer with following details:<br><br><br>{booking_details} <br><br><br><br>Kareema International' );
}

if ( ! defined( 'CUSTOMER_EMAIL_FLIGHT_BOOKING_SUBJECT' ) ) {
	define( 'CUSTOMER_EMAIL_FLIGHT_BOOKING_SUBJECT', 'Thank you for booking flight with Kareema International.' );
}

if ( ! defined( 'CUSTOMER_EMAIL_FLIGHT_BOOKING_CONTENT' ) ) {
	define( 'CUSTOMER_EMAIL_FLIGHT_BOOKING_CONTENT', 'Dear {customer_name}, <br><br>Thank you for booking flight with Kareema International. This is to inform you that we have received your flight booking request, one of our dedicated sales person will get in touch with you soon. <br><br>Best Regards, <br><br>Kareema International' );
}

// Deprecated, not used in the plugin core. Use WPTM_plugin_url() instead.
define( 'WPTM_PLUGIN_URL', untrailingslashit( plugins_url( '', WPTM_PLUGIN ) ) );

require_once WPTM_PLUGIN_DIR . '/settings.php';
