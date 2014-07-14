<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Global Region APAC
 
 */

get_header(3); ?>
<body id="united-states-canada">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two apac">
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
							<h2>Asia and the Pacific (APAC)</h2>
							<p>As the Asia Pacific region continues its growth as a center of world commerce, the demand for innovative, comprehensive corporate housing and serviced apartment solutions has also increased. So more companies are looking to Oakwood Worldwide as a corporate housing partner for more than accommodations, but also local insights and expertise, plus ongoing support to help insure success in this vital region. </p>
							<p>Oakwood Worldwide operates regional headquarters in Singapore and has invested in 28 branded properties across China, Hong Kong, India, Indonesia, Japan, Korea, the Philippines and Thailand. Here, guests receive the same great quality matched with a high level of community amenities, providing more opportunities for networking outside the typical business environment</p>
							<p>In addition, Oakwood Worldwide offers access to hundreds of additional corporate housing and serviced apartment accommodations across the Asia Pacific, ensuring that our clients are able to stay right where they need to be to offer the ideal location, and value, for both the traveler and the company.</p>
							
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
							<h2>Discover Popular Destinations in <?php the_title(); ?></h2>
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
								<?php include (TEMPLATEPATH . '/_/components/php/carousel-apac.php'); ?>
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