<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<form action="<?php the_permalink('29');?>" method="post" name="tour search">
    <?php do_action ( 'portlet_tour_search' )?>
    </form>
    
    <!--<div class="well bg-color-white disapp-whole" style="display:none;">
        <?php //do_action ( 'portlet_tour_search_results' )?>
    </div>--><!-- /well-end -->
    
    <!--<div class="well clearfix show-whole" style="display:none;">
        <?php //do_action ( 'portlet_tour_client_form' )?>
    </div>--><!-- /well-end -->

<?php get_footer(); ?>
