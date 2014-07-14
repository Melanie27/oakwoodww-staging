<?php
/**
 * The template for displaying all single posts
 *
 * * Template Name: Industry Insights Single
 
 */

get_header(4); ?>

<body id="industry-insights-single">
  	<div class="container-full">  
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary">
			  	<div id="content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>Industry Insights: <span class="entry-title"><?php the_title(); ?></span></h1>
								  </div>
							</section>		
						</div><!--heading-->
						<?php include (TEMPLATEPATH . '/_/components/php/hero-industry-insights.php'); ?>
					</section> <!--two-->	
					<hr />
					<?php
						$mypost = array( 'post_type' => 'industry_insights', );
						$loop = new WP_Query( $mypost );
					?>
    
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- Display movie review contents -->
						<div class="entry-content">
							<section class="three container overview" id="overview">
								<div class="row over2">
									<section class="col-lg-12 col-md-12">
										<div class="row overview-top">
											<section class="col-lg-8 col-md-7 col-sm-12 col-xs-12 insights no-padding">
												<h1><?php the_title(); ?></h1>							
												<!-- Display featured image -->
												<?php the_post_thumbnail(); ?>
												<?php echo esc_html( get_post_meta( get_the_ID(), 'industry_insight_photo_caption', true ) ); ?>
												<?php the_content(); ?>
												<p class="more">More From:
													<span class="tags">
													<?php the_terms( $post->ID, 'industry_insights_industry_type' ,  ' ' );?>
													</span>
												</p>
												<div class="clearfix"></div>
											</section><!--end two thirds-->
											<hr class="hidden-lg hidden-md hidden-sm">
											<?php /*include (TEMPLATEPATH . '/_/components/php/solutions-by-industry.php');*/?>	
										</div><!--end nested row-->		
									</section>
								</div><!--row-->
							</section><!--three overview-->					
						<hr />		
					</div>
				</article>
				<?php endwhile; ?>
				<!--<section class="row">
					<div class="col-lg-12 col-md-12">
						<section class="five container">
							<div class="row">
								<?php include (TEMPLATEPATH . '/_/components/php/case-studies.php'); ?>	
								<hr class="hidden-lg hidden-md hidden-sm">
								<?php include (TEMPLATEPATH . '/_/components/php/videos.php'); ?>	
								<hr class="hidden-lg hidden-md hidden-sm">
								<?php include (TEMPLATEPATH . '/_/components/php/white-papers.php'); ?>	
								<hr class="hidden-lg hidden-md hidden-sm">
							</div>
						</section><!--five-->						
					<!--</div><!--columns-->
				<!--</section><!--row-->		
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>