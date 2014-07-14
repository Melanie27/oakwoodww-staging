 <!-- Start the Loop -->
<?php $affiliations = new WP_Query('post_type=affiliations&posts_per_page=12');?>
		<section class="row industry-logos">
			<?php query_posts('post_type=affiliations'); while ($affiliations->have_posts()): $affiliations->the_post(); ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 center-block">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</section>
	
	
	