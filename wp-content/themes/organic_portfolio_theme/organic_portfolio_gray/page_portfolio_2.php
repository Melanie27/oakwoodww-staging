<?php
/*
Template Name: Portfolio Page 2 Column
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentwide">
	
		<div class="postarea">
        
        	<h3><?php the_title(); ?></h3>
            
            <?php $wp_query = new WP_Query(array('cat'=>ot_option('portfolio2_cat'),'showposts'=>ot_option('portfolio2_cat_num'),'paged'=>$paged)); ?>
            <?php $first_or_second = 'first'; ?>
			<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php global $more; $more = 0; ?>
            
            <div class="portfolio_2 <?php echo $first_or_second; ?>">
            <?php $first_or_second = ('first'==$first_or_second) ? 'second' : 'first'; ?>
            
            	<div class="portfoliotitle_2">              
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                    <span class="fold"></span>
                </div>	

                <div class="portfolioimg_2">
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'portfolio-2' ); ?></a>
                </div>
            
            </div>
							
			<?php endwhile; ?>
            
            <div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>
            
            <?php else : // do not delete ?>

            <h3><?php _e("Page not Found"); ?></h3>
            <p><?php _e("We're sorry, but the page you're looking for isn't here."); ?></p>
            <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar"); ?></p>

			<?php endif; // do not delete ?>
		
		</div>
		
	</div>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>