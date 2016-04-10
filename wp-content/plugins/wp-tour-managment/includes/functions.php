<?php
/**
 * To get destinations from wp_city and wp_country tables
 * 
 * @param array $params
 * @return array
 */ 
function get_from_destinations( $params = array() ) {
	// global
	global $wpdb;
	
	$limit_min = !empty($params['min']) ? $params['min'] : '0';
	$limit_max = !empty($params['max']) ? $params['max'] : '100';
	
	$sql = "SELECT 
				ct.name as city_name, ct.id as city_id, ct.code as city_code, 
				co.name as country_name, co.country_id as country_id, co.iso_code_3 as country_code   
			FROM wp_city ct
			INNER JOIN wp_country co
				ON ct.country_code = co.iso_code_3 
			ORDER BY city_name ASC
			LIMIT %d,%d";
	
	$destinations = $wpdb->get_results($wpdb->prepare($sql, $limit_min, $limit_max), ARRAY_A);
	
	return $destinations;
}

$destinations = get_from_destinations();

function get_bookings( $params = array() ) {
	// global
	global $wpdb;
	
	$limit_min = !empty($params['min']) ? $params['min'] : '0';
	$limit_max = !empty($params['max']) ? $params['max'] : '100';
	$status = !empty($params['status']) ? $params['status'] : 'PENDING';
	$deleted = !empty($params['deleted']) ? $params['deleted'] : '';
	
	$sql = "SELECT 
				b.booking_id as booking_id, b.tour_id as tour_id, b.total_tickets as total_tickets, 
				b.flight_class as flight_class, b.route_type as route_type, p.post_title as tour_title,
				b.passengers_data as passengers_data, b.customer_name as customer_name, b.customer_email as customer_email,
				b.agent_email as agent_email, b.agent_name as agent_name, b.status as status, b.deleted as deleted,
				b.date_created as date_created   
			FROM wp_bookings b
			INNER JOIN wp_posts p
				ON p.ID = b.tour_id
			WHERE p.post_status = 'publish'
				AND p.post_type = 'tours'";
	
	if (!empty($deleted)) {			
		$sql .= " AND b.deleted = '$deleted'";
	}
	
	$sql .= " AND b.status = '$status'";
	
	$sql .= " ORDER BY date_created DESC";
	$sql .= " LIMIT %d,%d";
	
	$bookings = $wpdb->get_results($wpdb->prepare($sql, $limit_min, $limit_max), ARRAY_A);
	
	return $bookings;
}

# $bookings = get_bookings();  call this method where you need it

function dv( $var = array() ) {
	echo "<pre>";
		print_r($var);
	echo "</pre>";
}

function get_selected( $value = false ) {
	if ($value) {
		return 'selected';
	} else {
		return '';
	}
}

function get_checked( $value = false ) {
	if ($value) {
		return 'checked';
	} else {
		return '';
	}
}

function getFormatedDate($date = '', $format = 'Y-m-d') {
	$formatted_date = '';
	
	if (!empty($date)) {
		$formatted_date = date($format, strtotime($date));
	}
	
	return $formatted_date;
}

function getCurrencyFormat($value, $is_currency='Y') {
	if (!is_numeric($value)) {
		return $value;
	} else {
		if (!$value) {
			if ($is_currency == 'Y') {
				return CURRENCY_SYMBOL.' '.number_format('0',2,'.',',');
			} else {
				return number_format('0',2,'.',',');
			}
		} else {
			if ($is_currency == 'Y') {
				return CURRENCY_SYMBOL.' '.number_format($value,2,'.',',');
			} else {
				return number_format($value,2,'.',',');
			}
		}
	}
}

function getRouteType($route_type = '') {
	$route = 'One Way Trip';
	if (!empty($route_type)) {
		switch ($route_type) {
			case ONE_WAY_TRIP:
				$route = 'One Way Trip';
				break;
			case ROUND_TRIP:
				$route = 'Round Trip';
				break;
		}
	}
	
	return $route;
}

function getBookingDetailsTemplate($data = array()) {
?>
<div class="well clearfix">
    <div class="col-md-8 bg-greish">
        <div class="row">
            <div class="col-md-12">
                <h4>Passangers</h4>
            </div>
        </div><!-- /row-end --> 
        <div class="border-b m-top-10-bot-20"></div>
        <div class="row m-bot-20">
        	<div class="col-md-6">
            	<div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Adult Full Name</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">Faraz Alam</span>
                    </div>
                </div><!-- -/row-end -->
            </div><!-- -/col-md-6-end -->
        	<div class="col-md-6">
            	<div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Date Of Birth</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">06/28/1985</span>
                    </div>
                </div><!-- -/row-end -->
            </div><!-- -/col-md-6-end -->
        </div><!-- /row-end -->

        <div class="row m-bot-20"> 
        	<div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label>CNIC</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">4210109553489</span>
                    </div>
                </div><!-- -/row-end -->
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Title</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">Mr</span>
                    </div>
                </div><!-- /row-end -->
        	</div>
        </div><!-- /row-end --> 
        
        <div class="row m-bot-20">
            <div class="col-md-6 text-right">
            	<label>Wheel Chair Required</label>
            </div> 
            <div class="col-md-6">
                <span class="form-control">Yes</span>  
            </div>
        </div><!-- /row-end -->
        
        <div class="border-d m-top-40-bot-30"></div>
        
        <div class="row m-bot-20"> 
        	<div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">City</label>
                    </div>
                     <div class="col-md-7">
                        <span class="form-control">Karachi</span>
                    </div>
                </div><!-- /row-end -->
            </div>
        	<div class="col-md-6">
                <div class="row">
					<div class="col-md-5 text-right">
                		<label style="margin:10px 0 0;">Agent Email</label>
            		</div>
                    <div class="col-md-7">
                        <span class="form-control">faraz.agst@gmail.com</span>
                    </div>	
               </div><!-- /row-end -->
            </div>
        </div><!-- /row-end -->  
 
        <div class="border-d m-top-40-bot-30"></div>
        
        <div class="row m-bot-20">
        	<div class="col-md-6">
                <div class="row"> 
                    <div class="col-md-5 text-right">
                        <label style="margin:0 0 0;">Aeroplane Description</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">Airbus 399</span>
                    </div>
                </div><!-- /row-end -->
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Flight No</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">EK 992</span>
                    </div>
                </div><!-- /row-end -->
            </div>
        </div><!-- /row-end -->

		<div class="row m-bot-20">
        	 <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Departure Time</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">04 : 00</span>
                    </div>
                </div><!-- /row-end -->
              </div>
              <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Arrival Time</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">05 : 00</span>
                    </div>
              	</div><!-- /row-end -->
              </div>
        </div><!-- /row-end -->

        <div class="row m-bot-20"> 
        	<div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Route Type</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">Oneway</span>
                    </div>
            	</div><!-- /row-end -->
           </div>
           <div class="col-md-6">
                <div class="row">
                   <div class="col-md-5 text-right">
                        <label style="margin:10px 0 0;">Trip Total</label>
                    </div>
                    <div class="col-md-7">
                        <span class="form-control">PKR 10,400.00</span>
                    </div>
                </div><!-- /row-end -->
           </div>
        </div><!-- /row-end -->
    </div><!-- /col-12-end -->   
</div><!-- /well-end -->
	
	
<?php
}

function getCityCode($city_id = '') {
	$city_code = '';
	if (!empty($city_id)) {
		switch ($city_id) {
			case '2831':
				$city_code = 'ISL';
				break;
			case '2822':
				$city_code = 'KHI';
				break;
			case '2823':
				$city_code = 'LHR';
				break;
			case '2826':
				$city_code = 'MLT';
				break;
			case '1381':
				$city_code = 'MSH';
				break;
			case '1380':
				$city_code = 'TEH';
				break;
			case '1409':
				$city_code = 'NJF';
				break;
		}
	}
	
	return $city_code;
}

/**
 * To add booking data
 *
 * @param unknown $data
 * @return unknown
 */
function add_booking( $data = array(), $format_params = array() ) {
	// global
	global $wpdb;

	$insert = $wpdb->insert( 'wp_bookings', $data, $format_params);

	return $insert;
}

/**
 * To process post data
 *
 * @param unknown $data
 * @return unknown
 */
function wptm_process_post() {
	$data = array();
	if (!empty($_POST['book_flight'])) {		
		$data['agent_email'] = $_POST['agent_email'];
		$format_params[] = '%s';
		
		$data['agent_name'] = $_POST['agent_name'];
		$format_params[] = '%s';
		
		$data['tour_id'] = $_POST['tour_id'];
		$format_params[] = '%d';
		
		$data['adults'] = $_POST['adults'];
		$format_params[] = '%d';
		
		$data['childs'] = $_POST['childs'];
		$format_params[] = '%d';
		
		$data['infants'] = $_POST['infants'];
		$format_params[] = '%d';
		
		$data['flight_class'] = $_POST['flight_class'];
		$format_params[] = '%s';
		
		$data['route_type'] = $_POST['route_type'];
		$format_params[] = '%s';
		
		$data['customer_name'] = $_POST['customer_name'];
		$format_params[] = '%s';
		
		$data['customer_email'] = $_POST['customer_email'];
		$format_params[] = '%s';
		
		$data['customer_phone'] = $_POST['customer_phone'];
		$format_params[] = '%s';
		
		$data['passengers_data'] = json_encode($_POST['passengers']);
		$format_params[] = '%s';
		
		$data['total_tickets'] = $_POST['total_tickets'];
		$format_params[] = '%d';
		
		$data['total_amount'] = $_POST['total_amount'];
		$format_params[] = '%d';
		
		$data['date_created'] = date('Y-m-d H:i:s');
		$format_params[] = '%s';

		$booked = add_booking($data, $format_params);
		
		if ($booked) {
			// Send Email to Admin
			$admin_email = get_option( 'admin_email', DEFAULT_EMAIL );
			$customer_name = !empty($data['customer_name']) ? $data['customer_name'] : 'Customer';
			$customer_email = !empty($data['customer_email']) ? $data['customer_email'] : '';
			
			
			$to = $admin_email;
			$subject = ADMIN_EMAIL_FLIGHT_BOOKING_SUBJECT;
			$booking_details = getBookingDetailsTemplate($data);

			$message = str_replace('{booking_details}', $booking_details, ADMIN_EMAIL_FLIGHT_BOOKING_CONTENT);
			$headers = array("From:$admin_email","Content-Type: text/html; charset=UTF-8");

			//wp_mail( $to, $subject, $message, $headers );
			
			// Send Email to Customer
			
			
			$to = $customer_email;
			$subject = CUSTOMER_EMAIL_FLIGHT_BOOKING_SUBJECT;
			$message = str_replace('{customer_name}', $customer_name, CUSTOMER_EMAIL_FLIGHT_BOOKING_CONTENT);

			//wp_mail( $to, $subject, $message, $headers );

			wp_redirect( get_permalink('2'));
			exit();
		}
	}
}
add_action( 'plugins_loaded', 'wptm_process_post' );

?>