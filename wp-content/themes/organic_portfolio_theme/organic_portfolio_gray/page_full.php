<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentwide">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h3><?php the_title(); ?></h3>
            <?php the_content(__('Read More'));?>


<div style="clear:left;">


  

</div><?php edit_post_link('(Edit)', '', ''); ?>
            
            <?php endwhile; else: ?>
            
           <?php endif; ?>
    	      
        </div>
	
	</div>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>