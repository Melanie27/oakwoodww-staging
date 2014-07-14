<?php /*
Template Name: Full Width Temple
*/ ?>

<?php get_header(16); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

