<?php /*
Template Name: Full Width SAP
*/ ?>

<?php get_header(12); ?> 
	
	<?php while (have_posts()) : the_post(); ?>			    			
		<?php the_content(); ?>						
		<?php endwhile; ?>					    	
</body>
</html>

