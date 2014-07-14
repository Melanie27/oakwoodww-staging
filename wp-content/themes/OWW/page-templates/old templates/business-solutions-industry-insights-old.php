<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Industry Insights
 
 */

get_header(6); ?>

<body id="industry-insights">
  		<div class="container-full">
  			<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1>Industry Insights</h1>
							</div>
						</section>		
					</div><!--heading-->
					<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds.php'); ?>	
				</section>
				<!--two-->	
		  		<div class="container">
		  			<section class="full-story hidden-lg hidden-md clearfix">
		  				<h2 class="hidden-sm">Story Title Lorem Ipsum  Dolore Sit Amet</h2>
		  				<?php include (TEMPLATEPATH . '/_/components/php/news-full-story.php'); ?>	
		  			</section>
		  		</div>	
		  		<hr class="hidden-lg hidden-md hidden-sm" />		
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12">
								<div class="row">
									<section class="col-lg-8 col-md-8 press-release-list">
										<h1>Industry Insights</h1>
											<section class="hidden-lg hidden-md hidden-sm">
												<?php include (TEMPLATEPATH . '/_/components/php/news-press-thumbs.php'); ?>	
											</section>
											<div class="row hidden-xs" id="press1">
												<ul>
													<li>
														<section class="col-lg-4 col-md-5 col-sm-4 press-image">
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-01.jpg" alt="press-release-01" class="img-responsive">
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 press-text">
															<h2>Story Title Lorem Ipsum Dolore Sit Amet</h2>
															<p>July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est.</p>
															<p class="full-story "><a href="press-releases-single.php" class="orange-link">Full Story &#8594;</a></p>	
														</section><!--end first position-->
														<div class="clearfix"></div>
													</li>
													<li>		
														<section class="col-lg-4 col-md-5 col-sm-4 press-image">
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-02.jpg" alt="press-release-01" class="img-responsive">
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 press-text">
															<h2>Story Title Lorem Ipsum Dolore Sit Amet</h2>
															<p>July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est.</p>
															<p class="full-story"><a href="press-releases-single.php" class="orange-link">Full Story &#8594;</a></p>
														</section><!--end second position-->
														<div class="clearfix"></div>
													</li>
													<li>	
														<section class="col-lg-4 col-md-5 col-sm-4 press-image">
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-03.jpg" alt="press-release-01" class="img-responsive">
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 press-text">
															<h2>Story Title Lorem Ipsum Dolore Sit Amet</h2>
															<p>July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est.</p>
															<p class="full-story"><a href="press-releases-single.php" class="orange-link">Full Story &#8594;</a></p>
														</section><!--end third position-->
														<div class="clearfix"></div>
													</li>
													<li>	
														<section class="col-lg-4 col-md-5 col-sm-4 press-image">
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-04.jpg" alt="press-release-01" class="img-responsive">
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 press-text">
															<h2>Story Title Lorem Ipsum Dolore Sit Amet</h2>
															<p>July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est.</p>
															<p class="full-story"><a href="press-releases-single.php" class="orange-link">Full Story &#8594;</a></p>
														</section><!--end fourth position-->
														<div class="clearfix"></div>
													</li>	
													<li>	
														<section class="col-lg-4 col-md-5 col-sm-4 press-image">
															<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-05.jpg" alt="press-release-01" class="img-responsive">
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 press-text">
															<h2>Story Title Lorem Ipsum Dolore Sit Amet</h2>
															<p>July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est.</p>
															<p class="full-story"><a href="press-releases-single.php" class="orange-link">Full Story &#8594;</a></p>
														</section><!--end fifth position-->
														<div class="clearfix"></div>
													</li>
												</ul>		
											</div><!--end press1-->	
											<div class="row">
												<section class="col-lg-5 col-lg-offset-2 col-xs-12">
													<ul class="pagination">
														<li><a href="#">&laquo;</a></li>
														<li class="active"><a href="#press1">1</a></li>
														<li><a href="#press2">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a href="#">&raquo;</a></li>
													</ul>
												</section>
											</div><!--end pagination row-->
										</section><!--end two thirds-->
										<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>																					
									</div><!--end nested row-->
								</section>
							</div><!--row-->
						</section><!--three-->
						<section class="content row">
							<div class="col-lg-12">
								<section class="four hidden-xs">
								</section>
							</div>
						</section><!--content 4-->
						<hr />			
							<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>	
						<hr />	
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>