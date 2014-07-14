<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Business Solutions Single
 
 */

get_header(4); ?>

<body id="individual-business-traveler-single">
  	<div class="container-full"> 
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Industry Insights: <span class="entry-title"><?php the_title(); ?></span></h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include (TEMPLATEPATH . '/_/components/php/hero-government.php'); ?>	
		  	</section> <!--two-->	
			<hr />
			<section class="three container overview" id="overview">
				<div class="row over2">
					<section class="col-lg-12 col-md-12">
						<div class="row overview-top">
							<section class="col-lg-8 col-md-7 col-sm-12 col-xs-12 insights no-padding">
								<h1>Featured Insight Title</h1>
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/government/industry-insights/hero-industry-insights-relocation.jpg" alt="video-industry-insights" class="img-responsive" />
								<p class="caption">July 31, 2013 - Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Nullam in dui mauris. Vivamus hendrerit arcu sed erat lorem ipsum.</p>													
							</section><!--end two thirds-->
							<hr class="hidden-lg hidden-md hidden-sm">															
							<?php include (TEMPLATEPATH . '/_/components/php/solutions-by-industry.php'); ?>	
						</div><!--end nested row-->								
					</section>
				</div><!--row-->
			</section><!--three overview-->					
			<hr />	
			<section class="row">
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
				</div><!--columns-->
			</section><!--row-->		
			<hr />
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>