		
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
	
    <!-- Hide and Show Div script -->
	<script>
	$(function() {
		$( ".datepicker" ).datepicker();
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
	
</body>

</html>