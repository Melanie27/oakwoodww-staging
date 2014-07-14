<?php /*
Template Name: Full Width Sample 2014
*/ ?>

<?php get_header(11); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

