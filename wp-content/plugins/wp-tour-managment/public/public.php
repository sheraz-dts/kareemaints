<?php 
/**
 * Function to display search form.
 * 
 */
function wptm_tour_search() {
	global $destinations;
	?>
		<form action="<?php the_permalink('29');?>" method="post" name="tour_search">
			<div class="btn-pref btn-group btn-group-lg" role="group" aria-label="...">
	            <div class="btn-group" role="group">
	                <button type="button" id="stars" class="btn btn-default btn-group-justified" href="#tab1" data-toggle="tab">
	                    <div><i class="glyphicon glyphicon-star"></i>Book a Flight</div>
	                </button>
	            </div>
	        </div><!-- /btn-pref-end -->
	        <div class="well">
	          <div class="tab-content clearfix">
	            <div class="tab-pane fade in active" id="tab1">	            
	                <div class="row m-bot-20">
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                       <label>From</label>
	                       <select name="from_destination" class="form-control">
                       			<option value="">Select From</option>
	                        	<?php foreach($destinations as $destination){ ?>
		                     		<option value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
	                       		<?php } ?> 
	                      	</select>
	                    </div>  
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                       <label>To</label>
	                       <select name="to_destination" class="form-control">
	                       		<option value="">Select To</option>
		                       	<?php foreach($destinations as $destination){ ?>
		                     		<option value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>	
			                   	<?php } ?>
	                      </select>
	                    </div> 
	                </div><!-- /row-end -->
	                <div class="row m-bot-20">
	                	<div class="col-md-6 col-sm-6 col-xs-6">
	                    	<label>Departing</label>
	                		<input type="text" name="departing" id="deprting" placeholder="mm/dd/yyyy" class="form-control datepicker">
	                    </div>
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                    	<label>Returning</label>
	                		<input type="text" name="returning" id="returning" placeholder="mm/dd/yyyy" class="form-control datepicker">
	                    </div>
	                </div><!-- /row-end --> 
	                <div class="row m-bot-20">
	                	<div class="col-md-4 col-sm-4 col-xs-4">
	                    	<label>Adult</label>
	                		<select name="adults" class="form-control">
	                          <option selected="0">0</option>
	                          <option value="1">1</option>
	                          <option value="2">2</option>
	                          <option value="3">3</option>
	                          <option value="4">4</option>
	                          <option value="5">5</option>
	                      </select>
	                    </div>
	                    <div class="col-md-4 col-sm-4 col-xs-4">
	                    	<label>Child</label>
	                		<select name="childs" class="form-control">
	                          <option selected="0">0</option>
	                          <option value="1">1</option>
	                          <option value="2">2</option>
	                          <option value="3">3</option>
	                          <option value="4">4</option>
	                          <option value="5">5</option>
	                      </select>
	                    </div>
	                    <div class="col-md-4 col-sm-4 col-xs-4">
	                    	<label>Infant</label>
	                		<select name="infants" class="form-control">
	                          <option selected="0">0</option>
	                          <option value="1">1</option>
	                          <option value="2">2</option>
	                      </select>
	                    </div>
	                    <div class="col-md-3 col-sm-4 col-xs-4">
	                    <label>Class</label>
	                    <select name="flight_class" id="flight_class" class="form-control">
	                      <option value="<?php echo FLIGHT_CLASS_ECONOMY?>">Economy</option>
	                      <option value="<?php echo FLIGHT_CLASS_BUSINESS?>">Business</option>
	                      <option value="<?php echo FLIGHT_CLASS_GROUPS?>">Groups</option>
	                  </select>
	                </div>
	                </div><!-- /row-end --> 
	                <input name="route_type" id="route_type" type="hidden" value="<?php echo ROUTE_ONE_WAY_TRIP?>">   
	                <input class="btn btn-default" name="submit" type="submit" value="Search">   
	            </div><!-- /tab-1-end -->
	          </div><!-- /tab-content-end -->
	       </div><!-- /well-end -->
       </form>
<?php
}

add_action( 'portlet_tour_search', 'wptm_tour_search' );

function wptm_tour_search_sr() {
	global $destinations;
	
	$from = !empty($_POST['from_destination']) ? $_POST['from_destination'] : '';
	$to = !empty($_POST['to_destination']) ? $_POST['to_destination'] : '';
	$departing = !empty($_POST['departing']) ? $_POST['departing'] : '';
	$returning = !empty($_POST['returning']) ? $_POST['returning'] : '';
	$adults = !empty($_POST['adults']) ? $_POST['adults'] : '';
	$childs = !empty($_POST['childs']) ? $_POST['childs'] : '';
	$infants = !empty($_POST['infants']) ? $_POST['infants'] : '';
	$flight_class = !empty($_POST['flight_class']) ? $_POST['flight_class'] : '';
	$route_type = !empty($_POST['route_type']) ? $_POST['route_type'] : '';

?>
	<form action="<?php the_permalink('29');?>" method="post" name="tour_search">
	 <div class="col-md-4 box-l">
		<h2>Flights</h2>
            <div class="row m-bot-20">
            	<div class="col-md-12">
					<label class="radio-inline"> 
						<input type="radio" value="<?php echo ROUTE_ONE_WAY_TRIP; ?>" id="route_type_ow" name="route_type" <?php echo get_checked($route_type == ROUTE_ONE_WAY_TRIP)?>>
						One Way
		            </label> 
	                <label class="radio-inline"> 
	                    <input type="radio" value="<?php echo ROUTE_ROUND_TRIP; ?>" id="route_type_rt" name="route_type" <?php echo get_checked($route_type == ROUTE_ROUND_TRIP)?>>
	                    Roundtrip 
	                </label> 
	             </div><!-- /col-md-12-end -->
 			</div><!-- /row-end -->
			<div class="row m-bot-20">
				<div class="col-md-12 m-bot-20">
					<label>Flying from</label>
					<select class="form-control" name="from_destination">
						<option value="">Select From</option>
                    	<?php foreach($destinations as $destination){ ?>
                     		<option <?php echo $destination['city_id'] == $from ? 'selected': '';?> value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
                       	<?php } ?>                                           
                    </select>
                </div> <!-- /col-12-end --> 
                <div class="col-md-12">
					<label>To</label>
					<select class="form-control" name="to_destination">
						<option value="">Select To</option>
                    	<?php foreach($destinations as $destination){ ?>
                     		<option <?php echo $destination['city_id'] == $to ? 'selected': '';?> value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
                       	<?php } ?> 
                    </select>
				</div><!-- /col-12-end -->
			</div><!-- /row-end -->
			<div class="row m-bot-20">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>Departing</label>
                    <input type="text" placeholder="mm/dd/yyyy" name="departing" id="deprting" value="<?php echo $departing; ?>" class="form-control datepicker">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 whole-show whole-disap">
                    <label>Returning</label>
                    <input type="text" placeholder="mm/dd/yyyy" name="returning" id="returning" value="<?php echo $returning; ?>" class="form-control datepicker">
                </div>
            </div><!-- /row-end --> 
            <div class="row m-bot-20">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Adult</label>
                    <select name="adults" class="form-control">
                    	<option value="">0</option>
                      	<option value="1" <?php echo get_selected($adults == 1)?>>1</option>
                      	<option value="2" <?php echo get_selected($adults == 2)?>>2</option>
                      	<option value="3" <?php echo get_selected($adults == 3)?>>3</option>
                      	<option value="4" <?php echo get_selected($adults == 4)?>>4</option>
                      	<option value="5" <?php echo get_selected($adults == 5)?>>5</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Child</label>
                    <select name="childs" class="form-control">
                      <option selected="">0</option>
                      <option value="1" <?php echo get_selected($childs == 1)?>>1</option>
                      <option value="2" <?php echo get_selected($childs == 2)?>>2</option>
                      <option value="3" <?php echo get_selected($childs == 3)?>>3</option>
                      <option value="4" <?php echo get_selected($childs == 4)?>>4</option>
                      <option value="5" <?php echo get_selected($childs == 5)?>>5</option>
                  </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Infant</label>
                    <select name="infants" class="form-control">
                      <option selected="">0</option>
                      <option value="1" <?php echo get_selected($infants == 1)?>>1</option>
                      <option value="2" <?php echo get_selected($infants == 2)?>>2</option>
                  </select>
                </div>
            </div><!-- /row-end --> 
			<div class="row m-bot-20">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>Flight Class</label>
                    <select name="flight_class" id="flight_class" class="form-control">
                      	<option value="<?php echo FLIGHT_CLASS_ECONOMY?>" <?php echo get_selected($flight_class == FLIGHT_CLASS_ECONOMY)?>>Economy</option>
                      	<option value="<?php echo FLIGHT_CLASS_BUSINESS?>" <?php echo get_selected($flight_class == FLIGHT_CLASS_BUSINESS)?>>Business</option>
                      	<option value="<?php echo FLIGHT_CLASS_GROUPS?>" <?php echo get_selected($flight_class == FLIGHT_CLASS_GROUPS)?>>Groups</option>
                  	</select>
                </div>
            </div><!-- /row-end -->             
            <input class="btn btn-default" name="submit" type="submit" value="Apply">
        </div><!-- /col-4-end -->
   	</form>
<?php
}

add_action( 'portlet_tour_search_sr', 'wptm_tour_search_sr' );

function wptm_tour_search_results() {
	$tours = array();
	global $wpdb;
	$meta_keys[1] = 'from';
	$meta_keys[2] = 'to';
	$meta_keys[3] = 'departing';
	$meta_keys[4] = 'returning';
// 	$meta_keys[5] = 'departure_time';
// 	$meta_keys[6] = 'arrival_time';
// 	$meta_keys[7] = 'flight_no';
		
	if (!empty($_POST)) {
		$from = !empty($_POST['from_destination']) ? $_POST['from_destination'] : '';
		$to = !empty($_POST['to_destination']) ? $_POST['to_destination'] : '';
		$departing = !empty($_POST['departing']) ? $_POST['departing'] : '';
		$returning = !empty($_POST['returning']) ? $_POST['returning'] : '';
		$adults = !empty($_POST['adults']) ? $_POST['adults'] : '';
		$childs = !empty($_POST['childs']) ? $_POST['childs'] : '';
		$infants = !empty($_POST['infants']) ? $_POST['infants'] : '';
		$flight_class = !empty($_POST['flight_class']) ? $_POST['flight_class'] : '';
		$route_type = !empty($_POST['route_type']) ? $_POST['route_type'] : '';		
		
		$searchparams = $meta_keys;

		$querystr = "
		SELECT DISTINCT p.ID, p.post_title, p.post_status, p.post_type,
		pm1.meta_value AS $meta_keys[1]_destination, pm2.meta_value AS $meta_keys[2]_destination, pm3.meta_value AS $meta_keys[3], pm4.meta_value AS $meta_keys[4]
		FROM $wpdb->posts p
		INNER JOIN $wpdb->postmeta pm1
			ON pm1.post_id = p.ID
			AND pm1.meta_key = %s
		INNER JOIN $wpdb->postmeta pm2
			ON pm2.post_id = pm1.post_id
			AND pm2.meta_key = %s
		INNER JOIN $wpdb->postmeta pm3
			ON pm3.post_id = pm2.post_id
			AND pm3.meta_key = %s
		INNER JOIN $wpdb->postmeta pm4
			ON pm4.post_id = pm3.post_id					
			AND pm4.meta_key = %s
		WHERE p.post_status = 'publish'
		AND p.post_type = 'tours'";
	
		if (!empty($_POST['from_destination'])) {
			$searchstr[] = "(pm1.meta_value = %s)";
			$searchparams[] = $_POST['from_destination'];
		}
		
		if (!empty($_POST['to_destination'])) {
			$searchstr[] = "(pm2.meta_value = %s)";
			$searchparams[] = $_POST['to_destination'];
		}
	
// 		if (!empty($_POST['departing'])) {
// 			$searchstr[] = "(pm3.meta_value = %s)";
// 			$searchparams[] = $_POST['departing'];
// 		}
	
// 		if (!empty($_POST['returning'])) {
// 			$searchstr[] = "(pm4.meta_value = %s)";
// 			$searchparams[] = $_POST['returning'];
// 		}
	
		if (!empty($searchstr)) {
			$searchstr = " AND (" . implode(' AND ', $searchstr) . ")";
		}

		$querystr .= $searchstr; 
		
		$querystr .= "	AND p.post_date < NOW()

		ORDER BY p.post_date DESC";

		$tours = $wpdb->get_results($wpdb->prepare($querystr, $searchparams), ARRAY_A);
	}	
?>
<div class="well bg-color-white" id="flights_search_results">
   <div class="row">
       <?php do_action ( 'portlet_tour_search_sr' );?>
        <div class="col-md-8 box-2">
            <h1>Availability Results</h1>
            <h3>(Select from <?php echo count($tours); ?> outbound options found)</h3>
            
            <?php if (!empty($tours)) { ?>
            	<?php foreach ($tours as $tour) { ?>
            		<?php $fields = get_field_objects( $tour['ID'] ); ?>
            		<?php //dv($fields)?>
            		<?php 
            			$from_arr = explode('_', $fields['from']['value']);
            			$from_city = $fields['from']['choices'][$fields['from']['value']];
            			$from_city_code = $from_arr[1];
            			
            			$to_arr = explode('_', $fields['to']['value']);
            			$to_city = $fields['to']['choices'][$fields['to']['value']];
            			$to_city_code = $to_arr[1];
            			
            			$departing = $fields['departing']['value'];
            			$returning = $fields['returning']['value'];            			
            			$departure_time = $fields['departure_time']['value'];
            			$arrival_time = $fields['arrival_time']['value'];
            			$flight_no = $fields['flight_no']['value'];            			
            			$arrival_time = $fields['arrival_time']['value'];
            			$aeroplane_description = $fields['aeroplane_description']['value'];
            			
            			$total_amount = 0;
            			$total_amount_adults = 0;
            			$total_amount_childs = 0;
            			$total_amount_infants = 0;
            			$qty_adults = $adults;
            			$qty_childs = $childs;
            			$qty_infants = $infants;
            			
            			if ($flight_class == FLIGHT_CLASS_BUSINESS) {
            				$rates_adults = $fields['b_adults']['value'];
            				$rates_childs = $fields['b_childs']['value'];
            				$rates_infants = $fields['b_infants']['value'];
            			} elseif ($flight_class == FLIGHT_CLASS_ECONOMY) {
            				$rates_adults = $fields['e_adults']['value'];
            				$rates_childs = $fields['e_childs']['value'];
            				$rates_infants = $fields['e_infants']['value'];
            			} elseif ($flight_class == FLIGHT_CLASS_GROUPS) {
            				$rates_adults = $fields['g_adults']['value'];
            				$rates_childs = $fields['g_childs']['value'];
            			}
            			
            			if (!empty($qty_adults)) {
            				$total_amount_adults = ($rates_adults * $qty_adults);
            			}
            			
            			if (!empty($qty_childs)) {
            				$total_amount_childs = ($rates_childs * $qty_childs);
            			}
            			
            			if (!empty($qty_infants)) {
            				$total_amount_infants = ($rates_infants * $qty_infants);
            			}
            			
            			$total_amount = $total_amount_adults + $total_amount_childs + $total_amount_infants;
            		?>
            		
		            <div class="panel panel-default"> 
		                <div class="panel-heading"> 
		                    <h3 class="panel-title">
		                    <?php echo $from_city; ?> <b><?php echo $from_city_code ?></b> <i class="fa fa-long-arrow-right"></i>
		                    <?php echo $to_city; ?> <b><?php echo $to_city_code ?></b> <?php echo  $tour['ID']; ?></h3> 
		                </div> 
		                <div class="panel-body pad-bot-0">
		                    <div class="row m-bot-20">
		                        <div class="col-md-1 col-sm-1 col-xs-1">
		                            <i class="fa fa-plane fa-4"></i>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Departure</div> 
		                           <div><?php echo getFormatedDate($departing, 'j F l Y');?></div> 
		                           <div><b><?php echo $departure_time; ?></b></div>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Arrival</div>
		                           <div><?php echo getFormatedDate($returning, 'j F l Y');?></div> 
		                           <div><b><?php echo $arrival_time;?></b></div> 
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Flight</div> 
		                           <div><?php echo $flight_no; ?></div> 
		                           <div><b><?php echo $aeroplane_description; ?></b></div>
		                        </div>
		                        <div class="col-md-2 col-sm-2 col-xs-12">
		                            <a class="btn btn-primary btn-md btn-block pull-right" role="button" data-toggle="collapse" href="#collapseExample-1" aria-expanded="false" aria-controls="collapseExample">More</a>
		                        </div>
		                    </div>     
		                </div>
		                <div id="collapseExample-1" class="collapse" aria-expanded="false" style="height: 0px;"> 
		                    <div class="panel-color clearfix">
		                        <div class="col-md-1 col-sm-1 col-xs-1">
		                            
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Economy</div> 
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Flight Fare</div>
		                           <div><b>7,000</b></div> 
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Fees & Taxes</div> 
		                           <div><b>10,000</b></div>
		                        </div>
		                        <div class="col-md-2 col-sm-2 col-xs-12">
		                            <a class="btn btn-primary btn-md btn-block pull-right" role="button" data-toggle="collapse" href="#collapseExample-1" aria-expanded="false" aria-controls="collapseExample">Hide</a>
		                        </div>
		                    </div> 
		                </div>
		                <div class="panel-body border-top">
		                    <div class="row">
		                        <div class="col-md-7"></div>
		                        <div class="col-md-3">
		                            <b><?php echo getCurrencyFormat($total_amount); ?></b>
		                        </div>
		                        <div class="col-md-2">
		                            <button autocomplete="off" class="btn btn-primary btn-md btn-block pull-right button-select" data-loading-text="Loading..." name="select_flight" id="select_flight" 
		                            data-tour-id="<?php echo $tour['ID']; ?>" 
		                            data-adults="<?php echo $adults; ?>" 
		                            data-childs="<?php echo $childs; ?>" 
		                            data-infants="<?php echo $infants; ?>" 
		                            data-flight-class="<?php echo $flight_class; ?>" 
		                            data-route-type="<?php echo $route_type; ?>" 
		                            type="button">Select</button>
		                        </div>
		                    </div>
		                </div> 
		            </div><!-- /panel-end -->
	            <?php } ?>
            <?php } ?>
        </div><!-- /col-8-end -->
   </div><!-- /row-end -->
	<form name="flight_form" action="<?php the_permalink('40') ;?>" method="post" class="flight_form">
		<input name="tour_id" id="tour_id" type="hidden" value="">
		<input name="adults" id="adults" type="hidden" value="">
		<input name="childs" id="childs" type="hidden" value="">
		<input name="infants" id="infants" type="hidden" value="">
		<input name="flight_class" id="flight_class" type="hidden" value="">
		<input name="route_type" id="route_type" type="hidden" value="">
		<input name="select_flight" id="submit" type="submit" value="book" style="display:none">
	</form>
</div><!-- /well-end -->

<?php
}

add_action( 'portlet_tour_search_results', 'wptm_tour_search_results' );

function wptm_tour_client_form() {
	
	if (!empty($_POST['select_flight'])) {
// 		dv($_POST);
		$fields = get_field_objects( $_POST['tour_id'] );
		
		$tour_id = !empty($_POST['tour_id']) ? $_POST['tour_id'] : '';
		$adults = !empty($_POST['adults']) ? $_POST['adults'] : '';
		$childs = !empty($_POST['childs']) ? $_POST['childs'] : '';
		$infants = !empty($_POST['infants']) ? $_POST['infants'] : '';
		$flight_class = !empty($_POST['flight_class']) ? $_POST['flight_class'] : '';
		$route_type = !empty($_POST['route_type']) ? $_POST['route_type'] : '';
		
		$from_arr = explode('_', $fields['from']['value']);
		$from_city = $fields['from']['choices'][$fields['from']['value']];
		$from_city_id = $fields['from']['value'];
		$from_city_code = $from_arr[1];
		 
		$to_arr = explode('_', $fields['to']['value']);
		$to_city = $fields['to']['choices'][$fields['to']['value']];
		$to_city_id = $fields['to']['value'];
		$to_city_code = $to_arr[1];
		 
		$departing = $fields['departing']['value'];
		$returning = $fields['returning']['value'];
		$departure_time = $fields['departure_time']['value'];
		$arrival_time = $fields['arrival_time']['value'];
		$flight_no = $fields['flight_no']['value'];
		$arrival_time = $fields['arrival_time']['value'];
		$aeroplane_description = $fields['aeroplane_description']['value'];		
		
		$departure_time = $fields['departure_time']['value'];
		$arrival_time = $fields['arrival_time']['value'];
		$flight_no = $fields['flight_no']['value'];
		$arrival_time = $fields['arrival_time']['value'];
		$aeroplane_description = $fields['aeroplane_description']['value'];	

		$total_amount = 0;
		$total_amount_adults = 0;
		$total_amount_childs = 0;
		$total_amount_infants = 0;
		$qty_adults = $adults;
		$qty_childs = $childs;
		$qty_infants = $infants;
		 
		if ($flight_class == FLIGHT_CLASS_BUSINESS) {
			$rates_adults = $fields['b_adults']['value'];
			$rates_childs = $fields['b_childs']['value'];
			$rates_infants = $fields['b_infants']['value'];
		} elseif ($flight_class == FLIGHT_CLASS_ECONOMY) {
			$rates_adults = $fields['e_adults']['value'];
			$rates_childs = $fields['e_childs']['value'];
			$rates_infants = $fields['e_infants']['value'];
		} elseif ($flight_class == FLIGHT_CLASS_GROUPS) {
			$rates_adults = $fields['g_adults']['value'];
			$rates_childs = $fields['g_childs']['value'];
		}
		 
		if (!empty($qty_adults)) {
			$total_amount_adults = ($rates_adults * $qty_adults);
		}
		 
		if (!empty($qty_childs)) {
			$total_amount_childs = ($rates_childs * $qty_childs);
		}
		 
		if (!empty($qty_infants)) {
			$total_amount_infants = ($rates_infants * $qty_infants);
		}
		 
		$total_amount = $total_amount_adults + $total_amount_childs + $total_amount_infants;		
		
		$total_tickets = array_sum(array($adults,$childs,$infants));
	}
?>
<div class="well clearfix">
	<form action="" method="post" name="book_flight_form">
    <div class="col-md-8 bg-greish">
        <div class="row">
            <div class="col-md-6">
                <h4>Passangers</h4>
            </div>
            <div class="col-md-6">
                <span class="badge badge-set pull-right">1</span>
            </div>
        </div><!-- /row-end --> 
        <div class="border-b m-top-10-bot-20"></div>
        <?php if (!empty($adults)) { ?>
	        <?php for ($adult_count=1;$adult_count <= $adults; $adult_count++) { ?>
		        <div class="row m-bot-20">
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Adult Full Name*</label>
		                <input name="passengers[adults][<?php echo $adult_count; ?>][full_name]" type="text" placeholder="Adult Full Name" class="form-control">
		            </div>
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Date Of Birth</label>
		                <input name="passengers[adults][<?php echo $adult_count; ?>][dob]" type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
		            </div>
		            <div class="col-md-4">
		                <label>Title</label>
		                <select name="passengers[adults][<?php echo $adult_count; ?>][title]" class="form-control">
		                    <option selected="selected" value="S">Select</option>
		                    <option value="MR">Mr</option>
		                    <option value="MRS">Mrs</option>
		                    <option value="MIS">Miss</option>
		                </select>
		            </div>
		        </div><!-- /row-end --> 
		        <div class="row m-bot-20 t-text">
		            <div class="col-md-4">
		                <label>CNIC*</label>
		                <input name="passengers[adults][<?php echo $adult_count; ?>][cnic]" type="text" class="form-control" placeholder="43259568129912">
		                <div class="spans">Enter CNIC or Passport Number</div>
		            </div>
		            <div class="col-md-4">
	                    <label>Wheel Chair Required</label>
	                    <div class="checkbox checks"> 
	                        <label><input name="passengers[adults][<?php echo $adult_count; ?>][wheel_chair_required]" type="checkbox" value="Yes"> 
	                            <i class="fa fa-wheelchair"></i>
	                        </label> 
	                    </div> 
		            </div>
		        </div><!-- /row-end --> 
		        <div class="border-d m-top-40-bot-30"></div>
	        <?php } ?>
        <?php } ?>
        
        <?php if (!empty($childs)) { ?>
	        <?php for ($child_count=1;$child_count<=$childs; $child_count++) { ?>        
		        <div class="row m-bot-20">
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Child Full Name*</label>
		                <input name="passengers[childs][<?php echo $child_count; ?>][full_name]" type="text" placeholder="Child Full Name" class="form-control">
		            </div>
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Date Of Birth</label>
		                <input name="passengers[childs][<?php echo $child_count; ?>][dob]" type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
		            </div>
		            <div class="col-md-4">
		                <label>Title</label>
		                <select name="passengers[childs][<?php echo $child_count; ?>][title]" class="form-control">
		                    <option selected="selected" value="S">Select</option>
		                    <option value="MR">Mr</option>
		                    <option value="MRS">Mrs</option>
		                    <option value="MIS">Miss</option>
		                </select>
		            </div>
		        </div><!-- /row-end --> 
		        <div class="row m-bot-20 t-text">
		            <div class="col-md-4">
		                <label>CNIC*</label>
		                <input name="passengers[childs][<?php echo $child_count; ?>][cnic]" type="text" class="form-control" placeholder="43259568129912">
		                <div class="spans">Enter CNIC or Passport Number</div>
		            </div>
		            <div class="col-md-4">
	                    <label>Wheel Chair Required</label>
	                    <div class="checkbox checks"> 
	                        <label><input name="passengers[childs][<?php echo $child_count; ?>][wheel_chair_required]" type="checkbox" value="Yes"> 
	                            <i class="fa fa-wheelchair"></i>
	                        </label> 
	                    </div> 
		            </div>
		        </div><!-- /row-end --> 
		        <div class="border-d m-top-40-bot-30"></div>
	        <?php } ?>
        <?php } ?>
        <?php if (!empty($infants)) { ?>
	        <?php for ($infant_count=1;$infant_count<=$infants; $infant_count++) { ?>           
		        <div class="row m-bot-20">
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Infant Full Name*</label>
		                <input name="passengers[infants][<?php echo $infant_count; ?>][full_name]" type="text" placeholder="Infant Full Name" class="form-control">
		            </div>
		            <div class="col-md-4 col-sm-4 col-xs-4">
		                <label>Date Of Birth</label>
		                <input name="passengers[infants][<?php echo $infant_count; ?>][dob]" type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
		            </div>
		            <div class="col-md-4">
		                <label>Title</label>
		                <select name="passengers[infants][<?php echo $infant_count; ?>][title]" class="form-control">
		                    <option selected="selected" value="S">Select</option>
		                    <option value="MR">Mr</option>
		                    <option value="MRS">Mrs</option>
		                    <option value="MIS">Miss</option>
		                </select>
		            </div>
		        </div><!-- /row-end --> 
		        <div class="row m-bot-20 t-text">
		            <div class="col-md-4">
		                <label>CNIC*</label>
		                <input name="passengers[infants][<?php echo $infant_count; ?>][cnic]" type="text" class="form-control" placeholder="43259568129912">
		                <div class="spans">Enter CNIC or Passport Number</div>
		            </div>
		            <div class="col-md-4">
	                    <label>Wheel Chair Required</label>
	                    <div class="checkbox checks"> 
	                        <label><input name="passengers[infants][<?php echo $infant_count; ?>][wheel_chair_required]" type="checkbox" value="Yes"> 
	                            <i class="fa fa-wheelchair"></i>
	                        </label> 
	                    </div> 
		            </div>
		        </div><!-- /row-end --> 
		        <div class="border-d m-top-40-bot-30"></div>
	        <?php } ?>
        <?php } ?>         
        <div class="row">
            <div class="col-md-6">
                <h4>Customer</h4>
            </div>
            <div class="col-md-6">
                <span class="badge badge-set pull-right">2</span>
            </div>
        </div><!-- /row-end --> 
        <div class="border-b m-top-10-bot-20"></div>
        <div class="row m-bot-20">
            <div class="col-md-4">
                <span class="col-black">                    
                    Contact Owner: <span class="col-red">*</span>
                </span>
            </div>
            <div class="col-md-4">
                <span class="little-size">Select Agent*</span>
                <select name="booking_agent" id="booking_agent" class="form-control">
                    <option selected="selected" value="">Select</option>
                    <option value="KHI">Karachi</option>
                    <option value="LHR">Lahore</option>
                    <option value="MLT">Multan</option>
                </select>
            </div>            
            <div class="col-md-4">
                <span class="little-size">Agent Email*</span>
                <input type="text" placeholder="Agent Email" id="agent_email" name="agent_email" class="form-control" readonly>
                <input type="hidden" id="agent_name" name="agent_name" value="">
            </div>
        </div><!-- /row-end --> 
		<input name="tour_id" id="tour_id" type="hidden" value="<?php echo $tour_id; ?>">
		<input name="adults" id="adults" type="hidden" value="<?php echo $adults; ?>">
		<input name="childs" id="childs" type="hidden" value="<?php echo $childs; ?>">
		<input name="infants" id="infants" type="hidden" value="<?php echo $infants; ?>">
		<input name="flight_class" id="flight_class" type="hidden" value="<?php echo $flight_class; ?>">
		<input name="flight_no" id="flight_no" type="hidden" value="<?php echo $flight_no; ?>">
		<input name="aeroplane_description" id="aeroplane_description" type="hidden" value="<?php echo $aeroplane_description; ?>">
		<input name="route_type" id="route_type" type="hidden" value="<?php echo $route_type; ?>">
		
		<input name="customer_name" id="customer_name" type="hidden" value="Fareed">
		<input name="customer_email" id="customer_email" type="hidden" value="fkfareed337@gmail.com">
		<input name="customer_phone" id="customer_phone" type="hidden" value="03331234567">
		
		<input name="total_tickets" id="total_tickets" type="hidden" value="<?php echo $total_tickets; ?>">
		<input name="total_amount" id="total_amount" type="hidden" value="<?php echo $total_amount; ?>">
		        
        <input type="submit" name="book_flight" id="book_flight" value="BOOK NOW" class="btn btn-default">
    </div><!-- /col-8-end -->
    </form>
    <div class="col-md-4 c-txt">
    	<h1>Trip Summary</h1>
    	<div class="row mar-top-bot-30">
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			<?php echo getCityCode($from_city_id); ?>
	    		</span>
	    		<hr>
	    		<span class="depart-time">
	    			<?php echo $departure_time; ?>
	    		</span><!-- /time-depart-end -->
	    	</div><!-- /col-md-4-end -->
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			<i class="fa fa-long-arrow-right"></i>
	    		</span>
	    		<hr>
	    		<span class="airline-code">
	    			<?php echo $flight_no ?>
	    		</span><!-- /airline-cod-end -->
	    	</div><!-- /col-md-4-end -->
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			<?php echo getCityCode($to_city_id); ?>
	    		</span>
	    		<hr>
	    		<span class="arrival-time">
	    			<?php echo $arrival_time; ?>
	    		</span><!-- /arrival-time-end -->
	    	</div><!-- /col-md-4-end -->
	    </div><!-- /row-end  -->
	    <div class="border-b mar-top-bot-30"></div>	
	    <p><?php echo $total_tickets; ?> Ticket(s) : <?php echo getRouteType($route_type); ?></p>
	    <div class="dotted-line"></div>
	    <?php if (!empty($adults)) {?>
		    <div class="row">
			    <div class="col-md-6">Traveler : Adult(s) <?php echo $adults; ?></div>
			    <div class="col-md-6 text-right"><b><?php echo getCurrencyFormat($total_amount_adults); ?></b></div>
		    </div><!-- /row-end  -->
	    <?php } ?>
	    <?php if (!empty($childs)) {?>
		    <div class="row">
			    <div class="col-md-6">Traveler : Childs(s) <?php echo $childs; ?></div>
			    <div class="col-md-6 text-right"><b><?php echo getCurrencyFormat($total_amount_childs); ?></b></div>
		    </div><!-- /row-end  -->
	    <?php } ?>
	    <?php if (!empty($infants)) {?>
		    <div class="row">
			    <div class="col-md-6">Traveler : Infants(s) <?php echo $infants; ?></div>
			    <div class="col-md-6 text-right"><b><?php echo getCurrencyFormat($total_amount_infants); ?></b></div>
		    </div><!-- /row-end  -->
	    <?php } ?>
	    
	    <div class="border-b mar-top-bot-30"></div>	
	    <div class="row m-bot-20">
		    <div class="col-md-4">Trip Total: </div>
		    <div class="col-md-8 text-right"><h2><?php echo getCurrencyFormat($total_amount); ?></h2></div>
	    </div><!-- /row-end  -->
    </div><!-- /col-md-4-end bg-greish  -->    
</div><!-- /well-end -->
<?php
}

add_action( 'portlet_tour_client_form', 'wptm_tour_client_form' );

?>