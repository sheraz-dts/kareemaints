<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<?php simple_boostrap_display_post(true); ?>
		
		<?php endwhile; ?>	
		
		<?php simple_boostrap_page_navi(); ?>	
		
		<?php else : ?>
        
       <div class="row">
		<?php 
			$posty = new wp_query('post');
			if($posty->have_posts()):
				while($posty->have_posts()) : $posty->the_post();?>
					<div class="col-lg-6 col-md-6 col-sm-6">
                    	<div class="row">
                            <article class="col-md-4 col-sm-6 ful-size_pic">
								<?php the_post_thumbnail();?>
                            </article>
                            <article class="col-md-8 col-sm-6">
                                <h1><?php the_title();?></h1>
                                <?php the_content();?>
                            </article>
                        </div><!-- /row-end -->
                    </div>
		<?php endwhile;
			else:
				echo '<p>No content found...</p>';
		endif;?>
    </div><!-- .row-end -->
		
		<article id="post-not-found" class="block">
		    <p><?php _e("No posts found.", "simple-bootstrap"); ?></p>
		</article>
		
		<?php endif; ?>

	</div>

	<?php get_sidebar("left"); ?>
	<?php get_sidebar("right"); ?>

</div>

<?php get_footer(); ?>