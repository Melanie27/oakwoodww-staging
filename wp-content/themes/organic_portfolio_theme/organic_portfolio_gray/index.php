<?php get_header(); ?>


<div id="content">


  <div id="contentleft">
  
  
    <div class="postarea">
    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      
      <h3>
        <?php the_title(); ?>
      </h3>
      
      
      
      <?php the_content(__('Read more'));?>
      
      <div style="clear:both;"></div>
      
      <!--
			<?php trackback_rdf(); ?>
			-->
                       
      <div class="postmeta">
      
        
      </div>
      
      
    </div>
    
    
    
    
    
    <?php endwhile; else: ?>
    <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
    <?php endif; ?>
    
      
    
  </div>
  
    
 
  
  
</div>


<!-- The main column ends  -->


<?php get_footer(); ?>