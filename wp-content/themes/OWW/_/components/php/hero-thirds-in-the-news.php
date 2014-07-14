
						<div class="container">
							<section class="two-a internal">
								<div class="row over hidden-sm hidden-xs">
									<?php $in_the_news = new WP_Query('post_type=in_the_news&posts_per_page=3');?>
										<ul class="col-lg-12">
											<?php query_posts('post_type=in_the_news'); while ($in_the_news->have_posts()): $in_the_news->the_post(); ?>
											<li class="col-lg-4 col-md-4 hidden-sm hidden-xs">
												<?php the_post_thumbnail('herosize'); ?>
													<p class="date"><?php the_date();?></p>
													<p class="headline size-12" style="font-size:12px;">
														<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'in_the_news_title', true ) ); ?><?php the_title(); ?></a>
													</p>
											</li>						
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</div><!--row-->
							</section><!--two-a-->
						</div><!--container-->	
						