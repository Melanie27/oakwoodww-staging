<?php
/* Template Name: Awards Single */?>
<?php get_header(6); ?>

<body id="awards-single">
  	<div class="container-full">  
  		<section class="container landing">
		 <?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		 	<div id="primary">
			 	<div id="content" role="main">
				 	<section class="two">
					 	<div class="row heading">
						 	<section class="col-lg-12">
							 	<div class="container">
								 	<h1>Awards: <?php the_title(); ?></h1>
								 </div>
							</section>		
						</div>
						<?php /*include (TEMPLATEPATH . '/_/components/php/hero-thirds-awards.php'); */?>
					</section> <!--two-->	
					<?php
						$mypost = array( 'post_type' => 'awards', );
						$loop = new WP_Query( $mypost );
						?>
        
						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>  
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- Display movie review contents -->
							<div class="entry-content">
								<section class="three container">
									<div class="row over2">
										<section class="col-lg-12 col-md-12">
											<div class="row">
												<section class="col-lg-8 col-md-8 press-release-list">
												<!--awards navigation-->	
													<div class="row">
														<section class="col-lg-9 col-md-11 col-xs-12 awards-sections awards-menu">
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
													</div><!--Awards Navigation-->
													<h2><?php the_title(); ?></h2>	
													<section class="press-release-hero">
													<!-- Display featured image -->
													<?php the_post_thumbnail(); ?>
													<?php echo esc_html( get_post_meta( get_the_ID(), 'photo_caption', true ) ); ?>
													</section>
													<section class="press-release-content">	       	
														<?php the_content(); ?>									
														<div class="clearfix"></div>	
													</section><!--end two thirds--> 
													
												</section>									
												<hr/>
												<section class="hidden-lg hidden-md hidden-sm">
													<div class="col-xs-12">
														<h2>Awards</h2>
													</div>
													<?php include (TEMPLATEPATH . '/_/components/php/awards-thumbs.php'); ?>
												</section>				
												<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>							
											</div><!--end nested row-->
										</section>
									</div><!--row-->
								</section><!--three-->
								<section class="content row">
									<div class="col-lg-12">
										<section class="four hidden-sm hidden-xs"></section>
									</div>
								</section><!--content 4-->			
							<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>				
							<hr />
						</div>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>