								<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 case-studies">
									<h1>Case Studies</h1>
									<?php $case_studies = new WP_Query('post_type=case_studies&posts_per_page=3');?>
									<ul class="news-thumbnails">
									<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
										<li class="clearfix">
											<?php the_post_thumbnail('herosize'); ?>
											<p class="date"><?php the_date();?></p>
											<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>
										</li>
																		
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</section>