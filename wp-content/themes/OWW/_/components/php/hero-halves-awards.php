							<div class="row container over hidden-xs">
								<section class="col-lg-12 vert">		
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">	
									<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<?php $carousel_awards = new WP_Query( array(
														'post_type' => 'carousel_awards',
														'posts_per_page' => '1',
														'meta_key' => 'carousel_award_position',
														'meta_value' => '1'			
													));?>
													<?php query_posts('post_type=carousel_awards'); while ($carousel_awards->have_posts()): $carousel_awards->the_post(); ?>
												<?php the_post_thumbnail(''); ?>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?> 
											</div>

												<?php $carousel_awards = new WP_Query( array(
														'post_type' => 'carousel_awards',
														'posts_per_page' => '10',
														'meta_key' => 'carousel_award_position',
														'meta_value' => '2'			
													));?>
													<?php query_posts('post_type=carousel_awards'); while ($carousel_awards->have_posts()): $carousel_awards->the_post(); ?>
													
													<?php for ($i = 0; $i < 1; $i++) {
														 echo '<div class="item">';
														 	the_post_thumbnail('');
														 echo '</div>';
														 
													}?>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?> 
										</div><!--end carousel inner-->
										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div> <!--end carousel example-->	
								</section>	<!--vert-->
							</div><!--row container-->	
						