<?php get_header(6); ?>

<body id="in-the-news">
  		<div class="container-full">
  			<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>		  		
		  		<section id="primary">
			  		<div id="content" role="main">
				  		<section class="two">
					  		<div class="row heading">
						  		<section class="col-lg-12">
							  		<div class="container">
								  		<h1>In The News</h1>
								  	</div>
								  </section>		
							</div><!--heading-->
							<!-- /_/components/php/hero-in-the-news.php -->
						</section>
						<!--two-->	  		    
						<?php if ( have_posts() ) : ?>  
						<hr class="hidden-lg hidden-md hidden-sm">		
						<section class="three container">
							<div class="row over2">
								<section class="col-lg-12 col-md-12">
									<div class="row">
										<section class="col-lg-8 col-md-8 press-release-list">
											<h2 class="page-title">Top Stories</h2>
											<!-- Start the Loop -->
											<?php while ( have_posts() ) : the_post(); ?>
											<div class="row" id="press1">
												<ul>
													<li>
														<section class="col-lg-4 col-md-5 col-sm-4 col-xs-4 press-image">
														<?php the_post_thumbnail('newssize'); ?>
														</section>
														<section class="col-lg-8 col-md-7 col-sm-8 col-xs-8 press-text">
															<p class="date hidden-sm hidden-xs"><?php the_date();?></p>
															<h3><?php /*echo esc_html( get_post_meta( get_the_ID(), 'source_name', true ) ); */?> <?php the_title(); ?></h3>
															<p class="full-story hidden-lg hidden-md hidden-sm">
																<a class="orange-link" href="<?php the_permalink(); ?>">Full Story &#8594;</a>
															</p>
															<p class="full-story hidden-xs">
																<a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'article_link', true ) ); ?>" class="orange-link">Full Story: <?php echo esc_html( get_post_meta( get_the_ID(), 'source_name', true ) ); ?> &#8594;</a>
															</p>	
														</section>
														<div class="clearfix"></div>				
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
									<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>															
								</div><!--end nested row-->
							</section>
						</div><!--row-->
					</section><!--three-->	
			  		<hr class="hidden-lg hidden-md"/>	
					<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>
					<hr>
				</div>
			</section>
<?php get_footer(); ?>