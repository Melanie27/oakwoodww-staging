												<?php $industry_insights = new WP_Query( array(
												'post_type' => 'industry_insights',
												'posts_per_page' => '1',
												'meta_key' => 'industry_insight_sticky',
												'meta_value' => 'yes'					
												));
																	
											?>											
												<?php $industry_insights = new WP_Query('post_type=industry_insights&posts_per_page=3');?>
												<ul class="news-thumbnails">
												<?php query_posts('post_type=industry_insights'); while ($industry_insights->have_posts()): $industry_insights->the_post(); ?>
													<li class="clearfix">
															<span class="hidden-xs"><?php the_post_thumbnail('herosize'); ?></span>
															<span class="hidden-lg hidden-md hidden-sm pull-left col-xs-4 press-image no-left-padding">
																<?php the_post_thumbnail('newssize'); ?>
															</span>
															<h3 class="hidden-lg hidden-md"><?php the_title(); ?></h3>
															<p class="full-story hidden-lg hidden-md">
																<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
															</p>
															<p class="headline hidden-sm hidden-xs">
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
																	<?php echo esc_html( get_post_meta( get_the_ID(), 'industry_insight_title', true ) ); ?>
																</a>
															</p>
														</li>

													<?php endwhile; ?>
													<?php wp_reset_query(); ?>
												</ul>