							<section class="row container hidden-sm hidden-xs">
								<div class="col-lg-12 col-md-12">
									<div id="carousel-example-generic" class="carousel slide">
										<!-- Wrapper for slides -->
											<div class="carousel-inner"> 
												<div class="item active">
												<div class="row">
													<?php $us_slides = new WP_Query( array(
														'post_type' => 'us_slides',
														'posts_per_page' => '3',
														'meta_key' => 'us_slide_position',
														'meta_value' => '1'			
													));?>
													<?php query_posts('post_type=us_slides'); while ($us_slides->have_posts()): $us_slides->the_post(); ?>
													<?php for ($i = 0; $i < 1; $i++) {													
													echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6">';
														the_post_thumbnail('carouselsize');
														echo '<div class="carousel-caption">';
															echo '<h3>';
																echo esc_html( get_post_meta( get_the_ID(), 'us_slide_blurb', true ) );
															echo '</h3>';
														echo '</div>';

													echo '</div>';

													}?>
													
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 													
													</div><!--end row-->
												</div><!--end item-->
												
											<div class="item">
												<div class="row">
													<?php $us_slides = new WP_Query( array(
														'post_type' => 'us_slides',
														'posts_per_page' => '3',
														'meta_key' => 'us_slide_position',
														'meta_value' => '2'
					
													));?>
													<?php query_posts('post_type=us_slides'); while ($us_slides->have_posts()): $us_slides->the_post(); ?>
													<?php for ($i = 0; $i < 1; $i++) {													
													echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6">';
														the_post_thumbnail('carouselsize');
														echo '<div class="carousel-caption">';
															echo '<h3>';
																echo esc_html( get_post_meta( get_the_ID(), 'us_slide_blurb', true ) );
															echo '</h3>';
														echo '</div>';

													echo '</div>';

													}?>
													
													<?php endwhile; ?>
													<?php wp_reset_query(); ?>
													</div><!--end row-->
												</div><!--end item-->
												</div><!--end carousel-inner-->
											</div><!--end carousel-example-->
											<!-- Controls --> 
											<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span> </a>
											 <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span> </a>
										</div>
									</section><!--end row-->