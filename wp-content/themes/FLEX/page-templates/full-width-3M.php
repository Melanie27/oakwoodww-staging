<?php /*
Template Name: Full Width 3M
*/ ?>

<?php get_header(15); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

