																							
															<?php $press_releases = new WP_Query('post_type=press_releases&posts_per_page=3');?>

																	<ul class="news-thumbnails">
																		<?php query_posts('post_type=press_releases'); while ($press_releases->have_posts()): $press_releases->the_post(); ?>
																		<li class="clearfix">
																			<?php the_post_thumbnail('herosize'); ?>
																			<p class="date"><?php the_date();?></p>
																			<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_blurb', true ) ); ?></p></a>
																		</li>
																		
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>