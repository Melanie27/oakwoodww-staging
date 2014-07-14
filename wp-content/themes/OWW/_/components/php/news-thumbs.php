																							
											<?php $press_releases = new WP_Query('post_type=press_releases&posts_per_page=3');?>
												<ul class="news-thumbnails">
													<?php query_posts('post_type=press_releases'); while ($press_releases->have_posts()): $press_releases->the_post(); ?>
														<li class="clearfix">
															<span class="hidden-xs"><?php the_post_thumbnail('herosize'); ?></span>
															<span class="hidden-lg hidden-md hidden-sm pull-left col-xs-4 press-image no-left-padding clearfix">
																<?php the_post_thumbnail('newssize'); ?>
															</span>
															<!--<p class="date hidden-xs hidden-sm"><?php the_date();?></p>-->
															<h3 class="hidden-lg hidden-md"><?php the_title(); ?>
																<p class="full-story hidden-lg hidden-md">
																	<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
																</p>
															</h3>
															<p class="headline hidden-sm hidden-xs">
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
																	<?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_title', true ) ); ?>
																</a>
															</p>
														</li>
																		
														<?php endwhile; ?>
														<?php wp_reset_query(); ?>
												</ul>