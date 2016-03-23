<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

function wptm_delete_plugin() {
	global $wpdb;

	delete_option( 'wptm' );

	$posts = get_posts( array(
		'numberposts' => -1,
		'post_type' => 'tickets',
		'post_status' => 'any' ) );

	foreach ( $posts as $post )
		wp_delete_post( $post->ID, true );
}

wptm_delete_plugin();

?>