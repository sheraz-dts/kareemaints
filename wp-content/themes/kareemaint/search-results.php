<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); ?>

	<?php if(!empty($_POST)){
		
		$from_destination = $_POST['from_destination'];
		$to_destination = $_POST['to_destination'];
		$departing = $_POST['departing'];
		$returning = $_POST['returning'];
		$adult = $_POST['adult'];
		$child = $_POST['child'];
		$infant = $_POST['infant'];
		
		dv($_POST);
		
		
		$pageposts = $wpdb->get_results($querystr, ARRAY_A);
		
	} 
	
	;?>
	
    <div class="well bg-color-white">
    	<form action="<?php the_permalink() ;?>" method="post">
        	<?php do_action ( 'portlet_tour_search_results' )?>
        </form>
    </div><!-- /well-end -->
    
<?php get_footer(); ?>
