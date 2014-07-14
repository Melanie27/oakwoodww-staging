																	
																	<h2 class="hidden-lg hidden-md hidden-sm hidden-xs"><?php the_title();?></h2>
																	<?php $awards = new WP_Query('post_type=awards&posts_per_page=3');?>
																	<ul class="news-thumbnails">
																		<?php query_posts('post_type=awards'); while ($awards->have_posts()): $awards->the_post(); ?>
																		<li>
																			<section class="col-lg-4 col-md-5 col-sm-4 col-xs-4 press-image">
																				<?php the_post_thumbnail('newssize'); ?>
																			</section>
																			<section class="col-lg-8 col-md-7 col-sm-8 col-xs-8 press-text">
																				<h3><?php the_title(); ?></h3>
																				<p class="full-story"><a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a></p>	
																			</section>
																			<div class="clearfix"></div>				
																		</li>
																		<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																	</ul>