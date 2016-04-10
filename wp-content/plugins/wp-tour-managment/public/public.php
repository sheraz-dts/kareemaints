<?php 
/**
 * Function to display search form.
 * 
 */
function wptm_tour_search() {
	global $destinations;
	?>
		
	<form action="<?php the_permalink('29');?>" method="post" name="tour_search" id=tour_search>
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
                    <div class="col-md-6 col-sm-6 col-xs-6">
                       <label>From</label>
                       <select id="from_destination" name="from_destination" class="form-control validate[required]">
                        	<?php foreach($destinations as $destination){ ?>
	                     		<option <?php echo $destination['city_id'] == '2822' ? 'selected': '';?> value="<?php echo $destination['city_id'].'_'.$destination['city_code']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
                       		<?php } ?> 
                      	</select>
                    </div>  
                    <div class="col-md-6 col-sm-6 col-xs-6">
                       <label>To</label>
                       <select name="to_destination" class="form-control">
	                       <?php foreach($destinations as $destination){ ?>
		                     	<option <?php echo $destination['city_id'] == '1380' ? 'selected': '';?> value="<?php echo $destination['city_id'].'_'.$destination['city_code']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>	
		                   <?php } ?>
                      </select>
                    </div> 
                </div><!-- /row-end -->
                <div class="row m-bot-20">
                	<div class="col-md-6 col-sm-6 col-xs-6">
                    	<label>Departing</label>
                		<input type="text" name="departing" id="deprting" placeholder="mm/dd/yyyy" class="form-control datepicker">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 whole-show whole-disap">
                    	<label>Returning</label>
                		<input type="text" name="returning" id="returning" placeholder="mm/dd/yyyy" class="form-control datepicker">
                    </div>
                </div><!-- /row-end --> 
                <div class="row m-bot-20">
                	<div class="col-md-3 col-sm-4 col-xs-4">
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
                    <div class="col-md-3 col-sm-3 col-xs-3">
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
                    <div class="col-md-3 col-sm-3 col-xs-3">
                    	<label>Infant</label>
                		<select name="infants" class="form-control">
                          <option selected="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                      </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                    <label>Class</label>
                    <select class="form-control">
                      <option selected=""></option>
                      <option>Business</option>
                      <option>Economy</option>
                      <option>Group</option>
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
					<select class="form-control">
                    	<?php foreach($destinations as $destination){ ?>
                     	<option <?php echo $destination['city_id'] == '2822' ? 'selected': '';?> value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
                       	<?php } ?>                                           
                    </select>
                </div> <!-- /col-12-end --> 
                <div class="col-md-12">
					<label>To</label>
					<select class="form-control">
                    	<?php foreach($destinations as $destination){ ?>
                     		<option <?php echo $destination['city_id'] == '2823' ? 'selected': '';?> value="<?php echo $destination['city_id']?>"><?php echo $destination['city_name']?>,&nbsp;<?php echo $destination['country_name']?></option>
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
	$meta_keys[] = 'to';
	$meta_keys[] = 'from';
	$meta_keys[] = 'departing';
	$meta_keys[] = 'returning';
	$meta_keys[] = 'adults';
	$meta_keys[] = 'childs';
	$meta_keys[] = 'infant';
	
	if (!empty($_POST)) {
		$searchparams = array();
		$searchstr = array();
	
		$querystr = "
		SELECT DISTINCT $wpdb->posts.ID, $wpdb->posts.post_title, $wpdb->posts.post_status, $wpdb->posts.post_type

		FROM $wpdb->posts, $wpdb->postmeta
		WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id
			AND $wpdb->posts.post_status = 'publish'
			AND $wpdb->posts.post_type = 'tours'";
	
		if (!empty($_POST['to_destination'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'to' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['to_destination'];
		}
		
		if (!empty($_POST['from_destination'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'from' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['from_destination'];
		}
	
		if (!empty($_POST['departing'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'departing' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['departing'];
		}
	
		if (!empty($_POST['returning'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'returning' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['returning'];
		}
	
		if (!empty($_POST['adults'])) {
	    	$searchstr[] = "($wpdb->postmeta.meta_key = 'adults' AND $wpdb->postmeta.meta_value = %s)";
	    	$searchparams[] = $_POST['adults'];
		}
	
		if (!empty($_POST['childs'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'childs' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['childs'];
		}
	
		if (!empty($_POST['infants'])) {
			$searchstr[] = "($wpdb->postmeta.meta_key = 'infants' AND $wpdb->postmeta.meta_value = %s)";
			$searchparams[] = $_POST['infants'];
		}
	
		if (!empty($searchstr)) {
			$searchstr = " AND (" . implode(' OR ', $searchstr) . ")";
		}

		$querystr .= $searchstr; 
		
		$querystr .= "	AND $wpdb->posts.post_date < NOW()
		GROUP BY $wpdb->posts.ID
		ORDER BY $wpdb->posts.post_date DESC";

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
                <input type="text" id="only_name" placeholder="Adult Full Name" class="form-control">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <label>Date Of Birth</label>
                <input type="text" placeholder="mm/dd/yyyy" class="form-control datepickerz">
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
                <input name="number" type="text" class="form-control" placeholder="43259568129912">
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
                <span class="little-size">Select City*</span>
                <select class="form-control">
                	<option value=""></option>
                    <option value="KHI">Karachi</option>
                    <option value="ISB">Islamabad</option>
                    <option value="LHR">Lahore</option>
                    <option value="MLT">Multan</option>
                </select>
            </div>
            <div class="col-md-4">
                <span class="little-size">Select Agent*</span>
                <select class="form-control">
                    <option value=""></option>
                    <option value="KHI">Faraz</option>
                    <option value="LHR">Fareed</option>
                    <option value="MLT">Luqman</option>
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
