<?php /*
Template Name: Full Width Ithaca
*/ ?>

<?php get_header(13); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

