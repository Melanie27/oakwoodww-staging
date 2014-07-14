	<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Affiliations
 
 */

get_header(2); ?>

 <body id="affiliations">
 	 <div class="container-full">
  		<section class="container landing internal">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Affiliations & Partnerships</h1>
								</div>
							</section>		
						</div><!--heading-->
					</section> <!--two container-->		
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 partners">
								<div class="row">
									<h1>Partnerships</h1>
									<h2 class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
								</div>
								<div class="row affiliations">
									<section class="col-lg-4 col-md-4 logo-individual hidden-xs">
										<img src="<?php bloginfo( 'template_directory' ); ?>/images/affiliations/logo-marriott.jpg" alt="logo-marriott">											
									</section>
									<section class="col-lg-8 col-md-8 affiliations-text">
										<h2>Marriott International</h2>
										<ul class="affiliations-list">
											<li>Direct access to nearly 4,000 additional Marriott International locations worldwide</li>
											<li>A seamless experience with coordination of all stay requirements</li>
											<li>Consistent, high-quality service</li>
											<li>Marriott Rewards<sup>&reg;</sup> points at ExecuStay<sup>&reg;</sup> locations</li>
										</ul>
										<p> Marriott International is the perfect hotel complement to Oakwood Worldwide's move-in ready corporate housing and serviced apartment accommodations. Together, our partnership offers more choice, convenience and customizable solutions for you and your guests.</p>									
									</section>
								</div>
								<hr class="hidden-lg hidden-md" />
								<div class="row affiliations">
									<section class="col-lg-4 col-md-4 logo-individual hidden-xs">
										<img src="<?php bloginfo( 'template_directory' ); ?>/images/affiliations/logo-regus.jpg" alt="logo-marriott">												
									</section>
									<section class="col-lg-8 col-md-8 affiliations-text">
										<h2>Regus</h2>
										<ul class="affiliations-list">
											<li>Direct access to nearly 4,000 additional Marriott International locations worldwide</li>
											<li>A seamless experience with coordination of all stay requirements</li>
											<li>Consistent, high-quality service</li>
											<li>Marriott Rewards<sup>&reg;</sup> points at ExecuStay<sup>&reg;</sup> locations</li>
										</ul>
										<p> Marriott International is the perfect hotel complement to Oakwood Worldwide's move-in ready corporate housing and serviced apartment accommodations. Together, our partnership offers more choice, convenience and customizable solutions for you and your guests.</p>									
									</section>
								</div>														
							</section>
						</div><!--row-->
					</section><!--three-->
					<hr />
					<section class="row">
						<div class="col-lg-12">
							<section class="four hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 4-->
					<section class="five container">
						<section class="row industry-affiliations">	
							<section class="col-lg-12 col-xs-12">
								<h1>Industry Affiliations</h1>
							</section>
							<section class="col-lg-12">	
								<?php include (TEMPLATEPATH . '/_/components/php/industry-affiliations.php'); ?>
							</section>
						</section>
					</section>
					<hr />
					<section class="row">
						<div class="col-lg-12">
							<section class="six hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 6-->
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>