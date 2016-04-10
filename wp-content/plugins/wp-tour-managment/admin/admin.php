<?php

require_once WPTM_PLUGIN_DIR . '/admin/includes/admin-functions.php';

function wptm_register_post_type(){

	$singular = 'Tour';
	$plural = 'Tours';

	$labels = array(
			'name'              => $plural,
			'singular_name'     => $singular,
			'add_name'          => 'Add New',
			'add_new_item'      => 'Add New ' . $singular,
			'edit'              => 'Edit',
			'edit_item'         => 'Edit ' . $singular,
			'new_item'          => 'New ' . $singular,
			'view'              => 'View ' . $singular,
			'view_item'         => 'View ' . $singular,
			'search_item'       => 'Search ' . $plural,
			'parent'            => 'Parent ' . $singular,
			'not_found'         => 'No ' . $plural . ' found',
			'not_in_trash'      => 'No ' . $plural . ' in Trash',
	);


	$args = array(
			'labels'                => $labels,
			'public'                => true,
			'publicly_queryable'    => true,
			'execute_form_search'   => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_admin_bar'     => true,
			'menu_position'         => 30,
			'menu_icon'  			=> 'dashicons-tag',
			'can_export'            => true,
			'delete_with_user'      => false,
			'hierarchical'          => false,
			'has_archive'           => true,
			'query_var'             => true,
			'rewrite'               => array(
					'slug'         => 'tours',
					'with_front'   => true,
					'pages'        => true,
					'feeds'        => true,
			),
			'capability_type'       => 'post',
			'supports'              => array(
					'title'
					//'editor',
					//'author',
					//'thumbnail',
					//'custom-fields',
			)
	);

	register_post_type('tours', $args);
}
add_action('init', 'wptm_register_post_type');

/* Add Custom Admin Menu */
add_action( 'admin_menu', 'wptm_settings_menu' );
add_action( 'admin_init', 'register_wptm_settings');

function wptm_settings_menu() {
	add_options_page( 'WP Tour Management settings', 'WPTM Settings', 'manage_options', 'custom-wptm-settings-identifier', 'wptm_settings_options' );
}

function register_wptm_settings() {
	register_setting( 'wptm_google_api_key_option-group', 'wptm_google_api_key' );
}

function wptm_settings_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}
	?>
    <div>
        <h2>WP Tour Management Settings</h2>

        <form method="post" action="options.php">
            <?php 
            settings_fields( 'wptm_google_api_key_option-group' ); 
            do_settings_fields( 'wptm_google_api_key_option-group', '' );
            ?>

            <p>Google API Key</p>
            <input type="text" name="wptm_google_api_key" value="<?php echo get_option('wptm_google_api_key'); ?>" />

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}
?>

<?php
	function wptm_bookings_admin(){
		$bookings = get_bookings();
?>
	<div class="wrap">
		<h2 style="margin-bottom:15px;">Customer Booking Requests</h2>
		
		<div class="wp-list-table widefat fixed striped posts">
		<div data-example-id="striped-table" class="bs-example">
		  <table class="table table-striped wp-list-table widefat fixed striped posts">
		    <thead>
		      <tr>
		        <th><input type="checkbox" name="check_all_bookings" id="check_all_bookings"></th>
		        <th>Route</th>
		        <th>Total Tickets</th>
		        <th>Flight Class</th>
		        <th>Route Type</th>
		        <th>Customer Email</th>
		        <th>Booking Date</th>
		        <th>Agent Email</th>
		        <th>Status</th>
		      </tr>
		    </thead>
		    <tbody>
	    	<?php if (!empty($bookings)) { ?>
				<?php foreach ($bookings as $booking) { ?>
			      <tr>
			        <th scope="row"><input type="checkbox" name="check_booking[]" class="check_booking" value="<?php echo $booking['booking_id']?>"></th>
			        <td><?php echo $booking['tour_title']?></td>
			        <td><?php echo $booking['total_tickets']?></td>
			        <td><?php echo ucfirst($booking['flight_class'])?></td>
			        <td><?php echo ucfirst($booking['route_type'])?></td>
			        <td><?php echo $booking['customer_email']?></td>
			        <td><?php echo $booking['date_created']?></td>
			        <td><?php echo $booking['agent_email']?></td>
			        <td><?php echo ucfirst($booking['status'])?></td>
			      </tr>				
				<?php } ?>	
	      	<?php } ?>
		    </tbody>
		  </table>
		</div><!-- /bs-example-end -->
	</div><!-- /wp-list-table-end -->
	</div>
	<?php
}