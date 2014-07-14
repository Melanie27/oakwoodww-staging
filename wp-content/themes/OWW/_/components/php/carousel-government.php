							<section class="row container hidden-sm hidden-xs">
								<div class="col-lg-12 col-md-12 ipad-padding">
									<div id="carousel-example-generic" class="carousel slide">
										<!-- Wrapper for slides -->
										<div class="carousel-inner"> 
											<!-- Slide -->
											<div class="item active">
												<div class="row">
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '3',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '1'			
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<?php for ($i = 0; $i < 1; $i++) {													
													echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6 max-height-car">';
														the_post_thumbnail('carouselsize');
														echo '<div class="carousel-caption">';
															echo '<h3>';
																echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) );
															echo '</h3>';
														echo '</div>';

													echo '</div>';

													}?>
													
													<?php endwhile; ?>
													<?php wp_reset_query(); ?> 													
													</div><!--end row-->
												</div><!--end item-->
												
											<!--<div class="item">
												<div class="row">
													<?php $carousel_images = new WP_Query( array(
														'post_type' => 'carousel_images',
														'posts_per_page' => '3',
														'meta_key' => 'carousel_image_position',
														'meta_value' => '2'
					
													));?>
													<?php query_posts('post_type=carousel_images'); while ($carousel_images->have_posts()): $carousel_images->the_post(); ?>
													<?php for ($i = 0; $i < 1; $i++) {													
													echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6 max-height-car">';
														the_post_thumbnail('carouselsize');
														echo '<div class="carousel-caption">';
															echo '<h3>';
																echo esc_html( get_post_meta( get_the_ID(), 'carousel_image_blurb', true ) );
															echo '</h3>';
														echo '</div>';

													echo '</div>';

													}?>
													
													<?php endwhile; ?>
													<?php wp_reset_query(); ?>
													</div><!--end row-->
												<!-- </div> -->
												</div><!--end carousel-inner-->
											</div><!--end carousel-example-->
											<!-- Controls --> 
											<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span> </a> 
											<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span> </a>
										</div>
									</section><!--end row-->