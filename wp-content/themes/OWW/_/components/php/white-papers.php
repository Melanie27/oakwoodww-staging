									<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 white-papers">
									<h1>White Papers</h1>
									<?php $white_papers = new WP_Query('post_type=white_papers&posts_per_page=3');?>
									<ul class="news-thumbnails">
									<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
										<li class="clearfix">
											<?php the_post_thumbnail('herosize'); ?>
											<p class="date"><?php the_date();?></p>
											<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>
										</li>							
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</section>
										
										