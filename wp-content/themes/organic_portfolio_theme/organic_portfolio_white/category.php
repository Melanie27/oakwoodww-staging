<?php get_header(); ?>

<div id="content">

	<div id="contentwide">
    	
    	<?php if(ot_option('1_column') == 'Yes') { ?>
	
		<div class="postarea">
        
        	<h3><?php the_category(', '); ?></h3>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="portfolio">
            
            	<div class="portfoliotitle">              
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                    <span class="fold"></span>
                </div>	

                <div class="portfolioimg">
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'portfolio' ); ?></a>
                </div>
            
            </div>
            
            <div style="clear:both;"></div>
							
			<?php endwhile; else: ?>         
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
            
            <div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>
		
		</div>
        
        <?php } else { ?>
        
        <?php if(ot_option('2_column') == 'Yes') { ?>
        
        <div class="postarea">
        
        	<h3><?php the_category(', '); ?></h3>
            
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
        
        <?php } else { ?>
        
        <div class="postarea">
        
        	<h3><?php the_category(', '); ?></h3>
            
            <?php $post_class = 'first'; ?>
			<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php global $more; $more = 0; ?>
            
            <div class="portfolio_3 <?php echo $post_class; ?>">
            
				<?php
                    if ('first' == $post_class){
                      $post_class = 'second';
                    }elseif ('second' == $post_class){
                      $post_class = 'third';
                    }else{
                      $post_class = 'first';
                    }
                ?>
            
            	<div class="portfoliotitle_3">              
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                    <span class="fold"></span>
                </div>	

                <div class="portfolioimg_3">
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'portfolio-3' ); ?></a>
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
        
        <?php } ?>
		<?php } ?>
		
	</div>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>