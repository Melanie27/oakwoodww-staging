					<?php $events = new WP_Query('post_type=events&posts_per_page=3');?>
							<ul class="news-thumbnails hidden-lg hidden-md">
								<?php query_posts('post_type=events'); while ($events->have_posts()): $events->the_post(); ?>
									<li class="clearfix">
										<span class="hidden-xs"><?php the_post_thumbnail('herosize'); ?></span>
										<span class="hidden-lg hidden-md hidden-sm pull-left col-xs-4 press-image no-left-padding">
											<?php the_post_thumbnail('newssize'); ?>
										</span>						
										<h3><?php the_title(); ?></h3>
										<p class="full-story">
											<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
										</p>	
									</li>
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
								</ul>											
								<span class="hidden-xs hidden-sm">
									<?php $events = new WP_Query('post_type=events&posts_per_page=4');?>
									<ul class="news-thumbnails events">
										<?php query_posts('post_type=events'); while ($events->have_posts()): $events->the_post(); ?>
										<li class="clearfix pull-left">
											<span><?php the_post_thumbnail('herosize'); ?></span>
											<p class="headline hidden-sm hidden-xs">
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_title', true ) ); ?>
												</a>
											</p>
											<p class="location"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_location', true ) ); ?></p>											
										</li>									
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</span>									
								<div class="hidden-lg hidden-md hidden-sm">
									<?php include (TEMPLATEPATH . '/_/components/php/btn-all-events.php'); ?>	
								</div>
											
												
												
												