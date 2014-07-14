<?php get_header(6); ?>

<body id="awards">
  	<div class="container-full">
  		<section class="container landing">
		 <?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?> 		
		 	<section id="primary">
			 	<div id="content" role="main">
				 	<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Awards &#38; Honors</h1>
								</div>
							</section>		
						</div><!--heading-->
						<?php /*include (TEMPLATEPATH . '/_/components/php/hero-halves-awards.php'); */?>
					</section>
					<!--two--> 		    
		  			<?php if ( have_posts() ) : ?>
		  			<hr class="hidden-lg hidden-md hidden-sm">		
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 awards-menu">	
								<div class="row">
									<section class="col-lg-6 col-md-6 col-xs-12 awards-sections">
										<h4>See Awards From:</h4>
										<!--List all the terms, with link to term archive-->	
										<?php
											$args = array( 'hide_empty=0' );
											$terms = get_terms('awards_tags', $args);
											$count = count($terms); $i=0;
											if ($count > 0) {				
												echo '<ul class="release-years awards-honors-archive">';
												$term_list = '<span class="my_term-archive">';
												foreach ($terms as $term) {
													$i++;
													$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
												}
																	
											echo $term_list;
											echo "</ul>";
										}
										?>	
								</section>
							</div>
						</section>
						<!--Awards Navigation-->
						<section class="col-lg-12 col-md-12">
							<div class="row">
								<section class="col-lg-8 col-md-8 press-release-list">
									<h2 class="page-title">Recent Awards &#38; Honors</h2>
									<!-- Start the Loop -->
									<?php while ( have_posts() ) : the_post(); ?>
									<!-- Display review title and author -->
									<div class="row" id="press1">
										<ul>
											<li>
												<section class="col-lg-4 col-md-5 col-sm-4 col-xs-4 press-image">
													<?php the_post_thumbnail('newssize'); ?>
												</section>
												<section class="col-lg-8 col-md-7 col-sm-8 col-xs-8 press-text">
													<h3><?php the_title(); ?></h3>
													<p class="full-story"><a href="<?php the_permalink(); ?>" class="orange-link">Full Story &#8594;</a></p>	
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
											'format' => '/page/%#%',  
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
<?php get_footer(); ?>