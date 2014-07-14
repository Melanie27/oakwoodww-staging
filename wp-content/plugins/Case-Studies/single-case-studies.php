<?php
/**
 * The template for displaying all single posts
 *
 * * Template Name: Case Study Single
 */

get_header(7); ?>

<body id="press-releases-single">
  	<div class="container-full">  
  		<section class="container landing">
		  <?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary">
			  	<div id="content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>Case Study: <?php the_title();?></h1>
								</div>
							</section>		
						</div><!--heading-->
						<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds-internal.php'); ?>
					</section> <!--two-->	 
					<?php
						$mypost = array( 'post_type' => 'case_studies', );
						$loop = new WP_Query( $mypost );
					?>    
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<section class="three container">
								<div class="row over2">
									<section class="col-lg-12 col-md-12">
										<div class="row">
											<section class="col-lg-8 col-md-8 press-release-list">
												<h1><?php the_title(); ?></h1>
												<section class="press-release-hero">
													<?php the_post_thumbnail( array( 350, 350 ) ); ?>
													<?php echo esc_html( get_post_meta( get_the_ID(), 'photo_caption', true ) ); ?>
												</section>
												<section class="press-release-content">	       	
													<?php the_content(); ?>
													<!--<p class="more">More From:
														<span class="tags">
														<?php /*the_terms( $post->ID, 'case_studies_tags' ,  ' ' );*/?>
														</span>
													</p>-->
													<div class="clearfix"></div>	
												</section><!--end two thirds--> 
												
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
					<hr />
				</div>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>