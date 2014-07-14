<section class="executive-committee row">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 first-third-one-third">
		<section class="row">
			<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">		
				<h2>Executive Leadership</h2>
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/executive-leadership.jpg" alt="upcoming-events-01" class="img-responsive hidden-xs">
			</div>		
			<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">		
				<p class="blurb">Inspired by our Founder, Howard Ruby and our President, Ric Villarreal, our executive committee leads Oakwood Worldwide with a focus on our client relationships, technology, overall guest experience and valued associates. Discover how the unique backgrounds of our committee members have shaped the strategic growth of our company today. </p>
			</div>
		</section>									
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 leaders top">
		<?php $executive_committee = new WP_Query('post_type=executive_committee&posts_per_page=6');?>
		<ul class="leadership-photos">
			<?php query_posts('post_type=executive_committee'); while ($executive_committee->have_posts()): $executive_committee->the_post(); ?>
			<li class="clearfix pull-left">
				<a href="<?php the_permalink(); ?>" class="orange-link"><?php the_post_thumbnail('leadershipsize'); ?></a>
				<h3 class="name"><?php the_title(); ?></h3>
				<p class="title"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></p>
				<p><a href="<?php the_permalink(); ?>" class="orange-link">Full Bio &#8594;</a></p>								
			</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div>
</section>