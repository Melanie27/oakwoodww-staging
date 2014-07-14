																	<h2 class="hidden-lg hidden-md hidden-sm hidden-xs"><?php the_title();?></h1>
																	<?php $alerts = new WP_Query('post_type=alerts&posts_per_page=3');?>
																	<ul class="news-thumbnails">
																		<?php query_posts('post_type=alerts'); while ($alerts->have_posts()): $alerts->the_post(); ?>
																		<li class="clearfix">
																			<?php the_post_thumbnail('herosize'); ?>
																			<p class="date"><?php the_date();?></p>
																			<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'in_the_news_blurb', true ) ); ?></a>
																		</li>
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>