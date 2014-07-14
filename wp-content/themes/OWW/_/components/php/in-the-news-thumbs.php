																	
													<?php $in_the_news = new WP_Query('post_type=in_the_news&posts_per_page=3');?>
															<ul class="news-thumbnails">
																<?php query_posts('post_type=in_the_news'); while ($in_the_news->have_posts()): $in_the_news->the_post(); ?>
																	<li class="clearfix">
																		<span class="hidden-xs"><?php the_post_thumbnail('herosize'); ?></span>
																		<span class="hidden-lg hidden-md hidden-sm pull-left col-xs-4 press-image no-left-padding">
																			<?php the_post_thumbnail('newssize'); ?>
																		</span>
																		<!--<p class="date hidden-xs hidden-sm"><?php the_date();?></p>-->
																		<h3 class="hidden-lg hidden-md"><?php the_title(); ?></h3>
																		<p class="full-story hidden-lg hidden-md">
																			<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
																		</p>
																		<p class="headline hidden-sm hidden-xs">
																			<a href="<?php the_permalink(); ?>">
																				<?php the_title(); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_title', true ) ); ?>
																			</a>
																		</p>
																	</li>
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</ul>