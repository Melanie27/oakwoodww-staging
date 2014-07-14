<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Global Region EMEA
 
 */

get_header(3); ?>
<body id="united-states-canada">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two emea">
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
							<h2>Europe</h2>
							<p>With regional headquarters in London and access to hundreds of properties in 60 cities across the United Kingdom, Oakwood Worldwide offers the expertise to find corporate housing and serviced apartments that fit any traveler’s specifications.  Our team of experts is ready to provide guests the accommodations and support that will position them for business success anywhere in the United Kingdom.</p>
							<p>In addition to our expertise in the United Kingdom, we offer unparalleled service across all of Europe, with a strong presence in Germany, France, Belgium, Italy, the Netherlands, Sweden and Switzerland, among others. </p>
							<h2>Middle East and Africa</h2>
							<p>The evolving world of business has seen the remarkable rise of the Middle East and Africa as powerful centers of commerce in recent years. That makes Oakwood Worldwide’s strong presence in the region an important resource for companies seeking to capitalize on the growth of opportunities available there. As the region continues to grow, we continue to invest in new housing solutions throughout this evolving corner of the globe, consistently providing companies and travelers with innovative solutions that keep them ready for the next initiative.</p>
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
								<?php include (TEMPLATEPATH . '/_/components/php/carousel-emea.php'); ?>
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