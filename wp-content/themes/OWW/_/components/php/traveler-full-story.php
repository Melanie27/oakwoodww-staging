											<?php $industry_insights = new WP_Query( array(
												'post_type' => 'industry_insights',
												'posts_per_page' => '1',
												'meta_key' => 'industry_insight_sticky',
												'meta_value' => 'yes',
												'meta_key' => 'industry_insight_sticky_individual',
												'meta_value' => 'yes'
																	
												));
																	
											?>
											<?php query_posts('post_type=industry_insights'); while ($industry_insights->have_posts()): $industry_insights->the_post(); ?>
											
											<section class="col-lg-4 col-md-4 col-sm-6 thirds cover-image">
												<?php the_post_thumbnail('stickysize'); ?>
											</section> <!--end one third-->
											<section class="col-lg-8 col-md-8 thirds blurb">
												<h4 class="hidden-xs"><?php the_title();?></h4>
												<p class="blurb-intro">
													<?php echo esc_html( get_post_meta( get_the_ID(), 'industry_insight_sticky_story', true ) ); ?>
												</P>
												<p class="full-story">
													<a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a>
												</p>
												<p>More from <span class="tags">
													<?php the_terms( $post->ID, 'industry_insights_industry_type' ,  ' ' );?>
												</p>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
											</section> <!--end two thirds-->											
											
											
											
	