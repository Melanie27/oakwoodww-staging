											<?php $events = new WP_Query( array(
												'post_type' => 'events',
												'posts_per_page' => '1',
												'meta_key' => 'event_sticky',
												'meta_value' => 'yes'
																	
												));
																	
											?>
											<?php query_posts('post_type=events'); while ($events->have_posts()): $events->the_post(); ?>
											<section class="col-lg-4 col-md-4 col-sm-6 thirds cover-image hidden-sm hidden-xs">
												<?php the_post_thumbnail('stickysize'); ?>
											</section> <!--end one third-->
											<section class="col-lg-8 col-md-8 thirds blurb">
												<h2 class="hidden-xs"><?php the_title();?></h2>
												<p class="blurb-intro">
													<?php echo esc_html( get_post_meta( get_the_ID(), 'event_sticky_story', true ) ); ?>
												</P>
												<p class="full-story">
													<a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a>
												</p>
												<p>More from <span class="tags">
													<?php the_terms( $post->ID, 'events_event_month' ,  ' ' );?>
												</p>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
											</section> <!--end two thirds-->