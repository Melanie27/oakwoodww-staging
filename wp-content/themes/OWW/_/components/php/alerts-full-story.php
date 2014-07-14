											<?php $alerts = new WP_Query( array(
												'post_type' => 'alerts',
												'posts_per_page' => '1',
												'meta_key' => 'alert_sticky',
												'meta_value' => 'yes'
																	
												));					
											?>
											<?php query_posts('post_type=alerts'); while ($alerts->have_posts()): $alerts->the_post(); ?>
											<section class="col-lg-4 col-md-4 col-sm-4 col-xs-3 thirds cover-image">
												<?php the_post_thumbnail('stickysize'); ?>
											</section> <!--end one third-->
											<section class="col-lg-8 col-md-8 col-sm-8 col-xs-9 thirds blurb">
												<h2><?php the_title();?></h2>
												<p class="blurb-intro">
													<?php echo esc_html( get_post_meta( get_the_ID(), 'alert_sticky_story', true ) ); ?>
												</P>
												<p class="full-story">
													<a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a>
												</p>
												<p>More from 
													<span class="tags"><?php the_terms( $post->ID, 'alerts_tags' ,  ' ' );?>
												</p>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
											</section> <!--end two thirds-->
											<hr/>