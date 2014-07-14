<?php get_header(7); ?>

<body id="press-releases">
  		<div class="container-full">
  			<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	  		
		  		<section id="primary">
			  		<div id="content" role="main">
				  		<section class="two">
					  		<div class="row heading">
						  		<section class="col-lg-12">
							  		<div class="container">
								  		<h1>White Papers</h1>
								  	</div>
								  </section>		
							</div><!--heading-->
							<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds.php'); ?>
						</section>
						<!--two-->
						<div class="container">
							<section class="full-story hidden-lg hidden-md clearfix">
								<h2 class="hidden-sm">Story Title Lorem Ipsum Dolore Sit Amet</h2>
								<?php include (TEMPLATEPATH . '/_/components/php/news-full-story.php'); ?>
							</section>
						</div>  		    
						<?php if ( have_posts() ) : ?>
						<hr class="hidden-lg hidden-md hidden-sm">		
						<section class="three container">
							<div class="row over2">
								<section class="col-lg-12 col-md-12">
									<div class="row">
										<section class="col-lg-8 col-md-8 press-release-list">
										 	<h1 class="page-title">White Papers</h1>
										 		
												<!-- Start the Loop -->
												<?php while ( have_posts() ) : the_post(); ?>
												<div class="row" id="press1">
													<ul>
														<li>
															<section class="col-lg-4 col-md-5 col-sm-4 col-xs-6 press-image">
																<?php the_post_thumbnail('newssize'); ?>
															</section>
															<section class="col-lg-8 col-md-7 col-sm-8 col-xs-6 press-text">
																<h2><?php the_title(); ?></h2>
																<p><?php echo esc_html( get_post_meta( get_the_ID(), 'press_release_subhead', true ) ); ?></</p>
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
																'format' => '/page/%#%',  
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
							<section class="content row">
								<div class="col-lg-12">
									<section class="four hidden-sm hidden-xs">
									</section>
								</div>
							</section><!--content 4-->
							<hr>
						</div>
					</section>
				<br /><br />
<?php get_footer(); ?>