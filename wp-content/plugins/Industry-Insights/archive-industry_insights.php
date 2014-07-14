<?php get_header(6); ?>

<body id="industry-insights">
  		<div class="container-full">
  			<section class="container landing">
		  		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>		  		
		  		<section id="primary">
			  		<div id="content" role="main">
				  		<section class="two">
					  		<div class="row heading">
						  		<section class="col-lg-12">
							  		<div class="container">
								  		<h1>Industry Insights</h1>
								  	</div>
								 </section>		
							</div><!--heading-->
							<?php include (TEMPLATEPATH . '/_/components/php/hero-industry-insights.php'); ?>
						</section>
						<!--two-->		    
						<?php if ( have_posts() ) : ?>
						<hr class="hidden-lg hidden-md hidden-sm">		
						<section class="three container">
							<div class="row over2">
								<section class="col-lg-12 col-md-12">
									<div class="row">
										<section class="col-lg-8 col-md-8 press-release-list industry">
										 	<h2 class="page-title">Industry Insights</h2>
										 		<section class="hidden-lg hidden-md hidden-sm">
													<?php include (TEMPLATEPATH . '/_/components/php/news-press-thumbs.php'); ?>	
													</section>
													<!-- Start the Loop -->
													<?php while ( have_posts() ) : the_post(); ?>
													<!-- Display review title and author -->
													<div class="row hidden-xs" id="press1">
														<ul>
															<li>
																<section class="col-lg-4 col-md-5 col-sm-4 press-image">
																	<?php the_post_thumbnail('newssize'); ?>
																</section>
																<section class="col-lg-8 col-md-7 col-sm-8 press-text">
																	<h3><?php the_title(); ?></h3>
																	<p class="full-story "><a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a></p>	
																</section>
																<div class="clearfix"></div>				
															</li>
														</ul>
													</div>
													<?php endwhile; ?>

													<!-- Display pagination -->
													<div class="row">
														<div class="archive-pagination col-lg-6 col-lg-offset-3">
															<?php global $wp_query;
																$total_pages = $wp_query->max_num_pages; 
																if ($total_pages > 1){  
																	$current_page = max(1, get_query_var('paged'));  
																	echo paginate_links(array(  
																	'base' => get_pagenum_link(1) . '%_%',  
																	'format' => 'page/%#%',  
																	'current' => $current_page,  
																		'total' => $total_pages,  
																	));  
																}  
																endif; ?>
														</div> 
													</div>
												</section><!--end two thirds-->
																		
												<section class="col-lg-4 col-md-4"> 	
													<?php include (TEMPLATEPATH . '/_/components/php/media-relations.php'); ?>
												</section>
																								
											</div><!--end nested row-->
										</section>
									</div><!--row-->
								</section><!--three-->		
								<section class="content row">
									<div class="col-lg-12">
										<section class="four hidden-sm hidden-xs">
										</section>
									</div>
								</section><!--content 4-->
								<hr>			
								<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>
								<hr>
							</div>
						</section>
					<br /><br />
<?php get_footer(); ?>