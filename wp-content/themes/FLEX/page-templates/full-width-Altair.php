<?php /*
Template Name: Full Width Altair
*/ ?>

<?php get_header(14); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

