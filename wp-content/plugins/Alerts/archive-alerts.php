<?php get_header(7); ?>

<body id="alerts">
  		<div class="container-full">
  			<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	  		
		  		<section id="primary">
			  		<div id="content" role="main">
				  		<section class="two">
					  		<div class="row heading">
						  		<section class="col-lg-12">
							  		<div class="container">
								  		<h1>Alerts</h1>
								  	</div>
								  </section>		
							</div><!--heading-->
							<?php include (TEMPLATEPATH . '/_/components/php/hero-alerts.php'); ?>
						</section>
						
						<!--two-->    
						<?php if ( have_posts() ) : ?>
						<hr class="hidden-lg hidden-md hidden-sm">		
						<section class="three container">
							<div class="row over2">
								<section class="col-lg-12 col-md-12">
									<div class="row">
										<section class="col-lg-8 col-md-8 press-release-list">
										 	<h1 class="page-title">Alerts Archive</h1>
												<!-- Start the Loop -->
												<?php while ( have_posts() ) : the_post(); ?>
												<div class="row" id="press1">
													<ul>
														<li>
															<section class="col-lg-4 col-md-5 col-sm-4 col-xs-6 press-image">
																<?php the_post_thumbnail('newssize'); ?>
															</section>
															<section class="col-lg-8 col-md-7 col-sm-8 col-xs-6 press-text">
																<h2 class="hidden-xs"><?php the_title(); ?></h2>
																<p class="date hidden-lg hidden-md hidden-sm"><?php the_date();?></p>
																<p><?php echo esc_html( get_post_meta( get_the_ID(), 'alert_subhead', true ) ); ?></p>
																<p class="full-story"><a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a></p>	
															</section>				
														</li>
													</ul>
												</div>
												<?php endwhile; ?>                
												<!-- Display pagination -->
												<div class="row">
													<div class="archive-pagination col-lg-8 col-lg-offset-4 col-md-7 col-md-offset-5">
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
										</div><!--end nested row-->
									</section>
								</div><!--row-->
							</section><!--three-->		
							<!--<section class="content row">
								<div class="col-lg-12">
									<section class="four hidden-sm hidden-xs">
									</section>
								</div>
							</section><!--content 4-->
							<hr>			
						</div>
					</section>
<?php get_footer(2); ?>