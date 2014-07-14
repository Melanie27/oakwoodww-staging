<?php /*
Template Name: Full Width Duke Energy
*/ ?>

<?php get_header(10); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

