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
	                    <select class="form-control">
	                      <option value="economy" selected>Economy</option>
	                      <option value="business">Business</option>
	                      <option value="groups">Groups</option>
	                  </select>
	                </div>
	                </div><!-- /row-end --> 
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
	$adults = !empty($_POST['infants']) ? $_POST['infants'] : '';
?>

	 <div class="col-md-4 box-l">
		<h2>Flights</h2>
            <div class="row m-bot-20">
            	<div class="col-md-12">
					<label class="radio-inline"> 
						<input type="radio" value="option2" id="inlineRadio2" name="inlineRadioOptions">
						One Way
		            </label> 
	                <label class="radio-inline"> 
	                    <input checked="checked" type="radio" value="option1" id="inlineRadio1" name="inlineRadioOptions">
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
                    <input type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 whole-show whole-disap">
                    <label>Returning</label>
                    <input type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
                </div>
            </div><!-- /row-end --> 
            <div class="row m-bot-20">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Adult</label>
                    <select class="form-control">
                      <option selected="">0</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Child</label>
                    <select class="form-control">
                      <option selected="">0</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <label>Infant</label>
                    <select class="form-control">
                      <option selected="">0</option>
                      <option>1</option>
                  </select>
                </div>
            </div><!-- /row-end --> 
            <input class="btn btn-default" value="Search" type="submit">
        </div><!-- /col-4-end -->
<?php
}

add_action( 'portlet_tour_search_sr', 'wptm_tour_search_sr' );

function wptm_tour_search_results() {
	global $wpdb;
	$meta_keys[1] = 'from';
	$meta_keys[2] = 'to';
	$meta_keys[3] = 'departing';
	$meta_keys[4] = 'returning';
// 	$meta_keys[5] = 'departure_time';
// 	$meta_keys[6] = 'arrival_time';
// 	$meta_keys[7] = 'flight_no';
		
	if (!empty($_POST)) {
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
	
		if (!empty($_POST['departing'])) {
			$searchstr[] = "(pm3.meta_value = %s)";
			$searchparams[] = $_POST['departing'];
		}
	
		if (!empty($_POST['returning'])) {
			$searchstr[] = "(pm4.meta_value = %s)";
			$searchparams[] = $_POST['returning'];
		}
	
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
            <h3>(Select from 7 outbound options found)</h3>
            
            <?php if (!empty($tours)) { ?>
            	<?php foreach ($tours as $tour) { ?>
            		<?php $fields = get_field_objects( $tour['ID'] );?>
            		<?php 
            			$from_arr = explode('_', $fields['from']['value']);
            			$from_city = $fields['from']['choices'][$fields['from']['value']];
            			$from_city_code = $from_arr[1];
            			
            			$to_arr = explode('_', $fields['to']['value']);
            			$to_city = $fields['to']['choices'][$fields['to']['value']];
            			$to_city_code = $to_arr[1];
            		
            		
            		?>
            		
		            <div class="panel panel-default"> 
		                <div class="panel-heading"> 
		                    <h3 class="panel-title">
		                    <?php echo $from_city; ?> <b><?php echo $from_city_code ?></b> <i class="fa fa-long-arrow-right"></i>
		                    <?php echo $to_city; ?> <b><?php echo $to_city_code ?></b></h3> 
		                </div> 
		                <div class="panel-body pad-bot-0">
		                    <div class="row m-bot-20">
		                        <div class="col-md-1 col-sm-1 col-xs-1">
		                            <i class="fa fa-plane fa-4"></i>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Departure</div> 
		                           <div>21 March, Mon</div> 
		                           <div><b>22:00</b></div>
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Arrival</div>
		                           <div>21 March, Mon</div> 
		                           <div><b>22:00</b></div> 
		                        </div>
		                        <div class="col-md-3 col-sm-3 col-xs-3">
		                           <div>Flight</div> 
		                           <div>NL127</div> 
		                           <div><b>Airbus 330-301</b></div>
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
		                        <div class="col-md-8"></div>
		                        <div class="col-md-2">
		                            <b>PKR 17,000</b>
		                        </div>
		                        <div class="col-md-2">
		                            <button autocomplete="off" class="btn btn-primary btn-md btn-block pull-right button-select" data-loading-text="Loading..." id="loading-example-btn" type="button">Select</button>
		                        </div>
		                    </div>
		                </div> 
		            </div><!-- /panel-end -->
	            <?php } ?>
            <?php } ?>
        </div><!-- /col-8-end -->
   </div><!-- /row-end -->
	<form name="flight_form" action="<?php the_permalink('40') ;?>" method="post" class="flight_form">
		<input name="tour_id" id="tour_id" type="hidden" value="38">
		<input name="adults" id="adults" type="hidden" value="3">
		<input name="childs" id="childs" type="hidden" value="2">
		<input name="infants" id="infants" type="hidden" value="1">
		<input name="class_type" id="class_type" type="hidden" value="1">
		<input name="book_flight" id="submit" type="submit" value="book" style="display:none">
	</form>
</div><!-- /well-end -->

<?php
}

add_action( 'portlet_tour_search_results', 'wptm_tour_search_results' );

function wptm_tour_client_form() {
?>
<div class="well clearfix">
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
        <div class="row m-bot-20">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <label>Adult Full Name*</label>
                <input type="text" placeholder="Adult Full Name" class="form-control">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <label>Date Of Birth</label>
                <input type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
            </div>
            <div class="col-md-4">
                <label>Title</label>
                <select class="form-control">
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
                <input type="text" class="form-control" placeholder="43259568129912">
                <div class="spans">Enter CNIC or Passport Number</div>
            </div>
            <div class="col-md-4">
                <form> 
                    <label>Wheel Chair Required</label>
                    <div class="checkbox checks"> 
                        <label><input type="checkbox" value=""> 
                            <i class="fa fa-wheelchair"></i>
                        </label> 
                    </div> 
                </form>
            </div>
        </div><!-- /row-end --> 
        <div class="border-d m-top-40-bot-30"></div>
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
                <span class="little-size">Full Name*</span>
                <input type="text" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
                <span class="little-size">Select Agent*</span>
                <select class="form-control">
                    <option selected="selected" value="S">Select</option>
                    <option value="KHI">Karachi</option>
                    <option value="LHR">Lahore</option>
                    <option value="MLT">Multan</option>
                </select>
            </div>
        </div><!-- /row-end --> 
        <input type="submit" value="BOOK NOW" class="btn btn-default">
    </div><!-- /col-8-end -->
    <div class="col-md-4 c-txt">
    	<h1>Trip Summary</h1>
    	<div class="row mar-top-bot-30">
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			KHI
	    		</span>
	    		<hr>
	    		<span class="depart-time">
	    			4 : 00
	    		</span><!-- /time-depart-end -->
	    	</div><!-- /col-md-4-end -->
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			<i class="fa fa-long-arrow-right"></i>
	    		</span>
	    		<hr>
	    		<span class="airline-code">
	    			NHL-125
	    		</span><!-- /airline-cod-end -->
	    	</div><!-- /col-md-4-end -->
	    	<div class="col-md-4 text-center">
	    		<span class="circle">
	    			ISB
	    		</span>
	    		<hr>
	    		<span class="arrival-time">
	    			6 : 00
	    		</span><!-- /arrival-time-end -->
	    	</div><!-- /col-md-4-end -->
	    </div><!-- /row-end  -->
	    <div class="border-b mar-top-bot-30"></div>	
	    <p>1 Ticket(s) : One way trip</p>
	    <div class="dotted-line"></div>
	    <div class="row">
		    <div class="col-md-8">Traveler 1 : Adult </div>
		    <div class="col-md-4 text-right"><b>10,400.00</b></div>
	    </div><!-- /row-end  -->
	    <div class="border-b mar-top-bot-30"></div>	
	    <div class="row m-bot-20">
		    <div class="col-md-4">Trip Total: </div>
		    <div class="col-md-8 text-right"><h2>PKR 10,400.00</h2></div>
	    </div><!-- /row-end  -->
    </div><!-- /col-md-4-end bg-greish  -->    
</div><!-- /well-end -->
<?php
}

add_action( 'portlet_tour_client_form', 'wptm_tour_client_form' );

?>