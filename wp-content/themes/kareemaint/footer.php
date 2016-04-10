		
    	   </div>
        </div>
            
        <footer>
            <div id="inner-footer" class="vertical-nav">
                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar('footer1'); ?>

                        <div class="col-xs-12 text-center">
                            <p><?php _e('Design by <a href="https://github.com/nicolas-van">@nicolas-van</a>', 'simple-bootstrap') ?></p>
                            <p><?php _e("Powered by WordPress", "simple-bootstrap"); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

	<?php wp_footer(); // js scripts are inserted using this function ?>
    
    <!--<script type="text/jscript" src="js/jquery-1.9.0.min.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.10.2.js"></script>
  
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/jquery.validationEngine-en.js"></script>    
    <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/jquery.validationEngine.js"></script>
	
    <!-- Hide and Show Div script -->
	<script>
	$(document).ready(function(){
        $("#formID").validationEngine('attach');
    });
	   	
	$(function() {
		$( ".datepicker" ).datepicker();
	});
	
  	$(function() {
		$( ".datepickerz" ).datepicker({
	 	 changeMonth: true,
	  	changeYear: true,
		yearRange: "1970:2016"
		});
 	});
	
    $(document).ready(function(){
        $("input.btn").click(function(){
            $("div.dis-appear").hide(1000);
			$("div.bg-color-white").show();
        });	
		$("button").click(function(){
            $("div.disapp-whole").hide(1000);
			$("div.show-whole").show();
        });
        $("input#inlineRadio1").click(function(){
			$("div.whole-show").show();
        });
		$("input#inlineRadio2").click(function(){
			$("div.whole-disap").hide();
        });
    });
    </script>
    
	<script type="text/javascript">
		$(function () {
			$('.button-select').click(function () {
				var tour_id = $(this).attr('data-tour-id');
				var adults = $(this).attr('data-adults');
				var childs = $(this).attr('data-childs');
				var infants = $(this).attr('data-infants');
				var flight_class = $(this).attr('data-flight-class');
				var route_type = $(this).attr('data-route-type');
	
				var form = $('.flight_form');
	
				var confirmBook = confirm("Are you sure to book this flight..?");
	
				if (confirmBook) {
					form.find('#tour_id').val(tour_id);
					form.find('#adults').val(adults);
					form.find('#childs').val(childs);
					form.find('#infants').val(infants);
					form.find('#flight_class').val(flight_class);
					form.find('#route_type').val(route_type);

					form.find('#submit').click();
				} else {
					form.find('#tour_id').val('');
					form.find('#adults').val('');
					form.find('#childs').val('');
					form.find('#infants').val('');
					form.find('#flight_class').val('');
					form.find('#route_type').val('');
				}
			});

			$('#booking_agent').change(function (e) {
				var agent = $(this).val();

				if (agent != '') {
					if (agent == 'KHI') {
						agent_email = 'agent1@email.com';
						agent_name = 'Karachi Aagent';
					}
					
					if (agent == 'LHR') {
						agent_email = 'agent2@email.com';
						agent_name = 'Lahore Aagent';
					}
					
					if (agent == 'MLT') {
						agent_email = 'agent3@email.com';
						agent_name = 'Multan Aagent';
					}

					$('#agent_email').val(agent_email);
					$('#agent_name').val(agent_name);
				}
			});
		});
		
	// PUT NLY NUMBERS IN TEXT-FIELD
	//			 $("#num").keypress(function (e){
	//				  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)){
	//					return false;
	//				  }
	//			});
				
		// Ensures that it is a number and stops the key press
		$('input[name="number"]').keydown(function(event) {
			if (!(!event.shiftKey //Disallow: any Shift+digit combination
					&& !(event.keyCode < 48 || event.keyCode > 57) //Disallow: everything but digits
					|| !(event.keyCode < 96 || event.keyCode > 105) //Allow: numeric pad digits
					|| event.keyCode == 46 // Allow: delete
					|| event.keyCode == 8  // Allow: backspace
					|| event.keyCode == 9  // Allow: tab
					|| event.keyCode == 27 // Allow: escape
					|| (event.keyCode == 65 && (event.ctrlKey === true || event.metaKey === true)) // Allow: Ctrl+A
					|| (event.keyCode == 67 && (event.ctrlKey === true || event.metaKey === true)) // Allow: Ctrl+C
					//Uncommenting the next line allows Ctrl+V usage, but requires additional code from you to disallow pasting 
					//non-numeric symbols
					//|| (event.keyCode == 86 && (event.ctrlKey === true || event.metaKey === true)) // Allow: Ctrl+Vpasting 
					|| (event.keyCode >= 35 && event.keyCode <= 39) // Allow: Home, End
					)) {
				event.preventDefault();
			}
		});
		
		$(function () {
			$('#only_name').keydown(function (e) {
				if (e.shiftKey || e.altKey) {
					e.preventDefault();
			} else {
			var key = e.keyCode;
				if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					e.preventDefault();
			}
				}
			});
		});			
	</script>    
	
</body>

</html>