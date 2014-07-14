<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Global Region South America
 
 */

get_header(3); ?>
<body id="united-states-canada">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two south-america">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1><?php the_title(); ?></h1>										
							</div>
						</section>		
					</div><!--heading-->		
					
		  		</section> <!--two container-->	
		  		<section class="three container">
					<div class="row intro-regional">
						<section class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
							<h2>South America</h2>
							<p>As more companies expand their scope to include South America, they look to Oakwood Worldwide for innovative housing solutions and industry-leading local market expertise. Offering a wide range of corporate housing and serviced apartments across Chile, Peru, Brazil, Mexico, Argentina, Costa Rica and Venezuela, we have the ability to provide guests with accommodations that make them comfortable in their environs and focused on the business at hand in this growing region of the world.</p>
							<!--
							<ul>
								<li> A presence in all 50 United States</li>
								<li> Top four markets are L.A., D.C., N.Y. and Chicago</li>
								<li> WSSC in Phoenix, Arizona</li>
								<li> Nine Oakwood buildings and 7 co-branded Oakwood and ExecuStay buildings in the United States</li>
								<li> Latin American locations in Argentina, Brazil, Chile, Costa Rica, Mexico, Peru and Venezuela</li>
							</ul> -->
						</section>
					</div>
				</section><!--end three-->
				<hr />
				<section class="five container">
					<div class="row carousel-heading">
						<section class="col-lg-12 col-md-12">
							<h2>Discover Popular <?php the_title(); ?> Destinations</h2>
								<ul class="hidden-lg hidden-md destinations">
									<li>Washington, D.C.</li>
									<li>Tampa, FL</li>
									<li>Charleston, SC</li>
									<li>New York, NY</li>
									<li>Washington, D.C.</li>
									<li>Tampa, FL</li>
									<li>Charleston, SC</li>
									<li>New York, NY</li>
								</ul>
								<?php include (TEMPLATEPATH . '/_/components/php/carousel-south-america.php'); ?>
						</section>
					</div>
				</section><!--end five-->			
				<hr />
				<section class="seven container">
					<div class="row global-destinations">
						<section class="col-lg-12 col-md-12 global-intro">
							<h2>Learn More About Our Expertise in Other Regions</h2>
						</section>
						<?php include (TEMPLATEPATH . '/_/components/php/global-destinations.php'); ?>
					</div>
				</section><!--seven-->		
				<hr />	
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>