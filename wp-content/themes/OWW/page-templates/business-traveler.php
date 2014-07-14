<?php
/* Template Name: Business Traveler*/?>

<?php get_header(4); ?>

<body id="individual-business-traveler">
  	<div class="container-full">
  		<section class="container landing">
			<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Business Travel</h1>
								</div>
							</section>		
						</div><!--heading-->
						<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds-traveler.php'); ?>	
					</section> <!--two-->	
					<section class="three container overview relocation" id="overview">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 container">
								<div class="row overview-top">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
										<h2>Housing Solutions for Business Travelers and Consultants</h2>
										<h3>A Business Partner That Works for You</h3>
										<p>Oakwood Worldwide provides global housing solutions that keep business travelers at their most productive. We work closely with our clients to find accommodations that meet travelers’ daily requirements, whether they need to be close to their work site, in a neighborhood with strong schools or a pet-friendly high rise. And to ensure a smooth transition, we coordinate arrival and departure, manage service requests and streamline invoicing, giving our clients less to worry about and more time to focus on the initiatives that brought them out in the first place.</p>
									</section><!--end two thirds-->			
								</div><!--end nested row-->
							</section><!--container-->
						</div><!--end row-->
					</section><!--three-->									
					<hr />								
					<section class="three three-a container overview">
						<div class="row over2">										
							<section class="col-lg-12 col-md-12">						
								<div class="row">	
									<h2 class="prefer">Why Do Business Travelers and Consultants Prefer Oakwood Worldwide?</h2>
									<ul class="prefer-oakwood">
										<li>Our corporate and serviced apartments are far more spacious than the typical hotel room, with separate living, sleeping and dining spaces and full-size kitchens</li>
										<li>Most of our residential buildings have business centers, fitness centers and lounges, offering the mix of privacy and community that's ideal for extended stays</li>
										<li>Our dedicated specialists have the speed and experience to address issues and solve problems 24/7/365</li>
										<li>Our high-quality accommodations are located within desirable neighborhoods and are priced to fit most budgets</li>
										<li>Marriott Rewards<sup>&reg;</sup> members earn points for stays of 30 days or more at any ExecuStay<sup>&reg;</sup> location in the U.S.</li>
									</ul>
								</div>
							</section>
						</div><!--row-->
					</section><!--three overview-->	
					<div class="row industry-insights">
						<section class="col-sm-12 hidden-lg hidden-md hidden-sm hidden-xs">
							<div class="container">
								<h2>Industry Insights</h2>
							</div>
							<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
						</section>
					</div>	
					<hr />
				</div><!-- #content -->
			</div><!-- #primary -->

<?php get_footer(); ?>