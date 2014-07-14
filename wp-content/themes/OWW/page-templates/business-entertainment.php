<?php
/* Template Name: Business Entertainment */?>

<?php get_header(4); ?>

<body id="entertainment">
  	<div class="container-full">
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary" class="content-area">
			  	<div id="content" class="site-content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>Entertainment</h1>
								  </div>
							</section>		
						</div><!--heading-->
						<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds-entertainment.php'); ?>
					</section> <!--two-->	
					<hr />
					<div class="container">
						<?php include (TEMPLATEPATH . '/_/components/php/extended-stay-lodging.php'); ?>
					</div><!--end container-->		
					<hr />
					<section class="row hidden-sm hidden-xs">
						<div class="col-lg-12">
							<section class="four"></section>
						</div>
					</section><!--content 4-->					
					<section class="three three-a container overview">
						<div class="row over2">										
							<section class="col-lg-12 col-md-12">						
								<div class="row">
									<h2 class="prefer">Why Does The Entertainment Industry Prefer Oakwood Worldwide?</h2>
									<ul class="prefer-oakwood">
										<li>Our corporate and serviced apartments are far more spacious than the typical hotel room, with separate living, sleeping and dining spaces and full-size kitchens</li>
										<li>We offer fitness centers, swimming pools, laundry facilities, Wi-Fi and other amenities in most locations for added convenience</li>
										<li>Our dedicated specialists have the speed and experience to address issues and solve problems 24/7/365</li>
										<li>We have over 50 years experience serving the entertainment industry</li>
										<li>We offer the broadest range of accommodations with flexible pricing to meet most production budgets</li>
										<li>We have convenient locations near film and television studios, theaters, etc.</li>
										<li>We offer personalized strategies for cost containment, such as group housing solutions, consolidated invoicing and flexible billing</li>
									</ul>
								</div>
							</section>	
						</div>
					</section>
					<hr class="hidden-lg" />
					<div class="row industry-insights">
						<section class="col-sm-12 hidden-lg hidden-md hidden-sm hidden-xs">
							<div class="container">
								<h2>Industry Insights</h2>
							</div>
							<?php include (TEMPLATEPATH . '/_/components/php/industry-insights.php'); ?>
						</section>
					</div>
					<section class="row hidden-sm">
						<div class="col-lg-12 hidden-xs">
							<section class="six"></section>
						</div>
				</section><!--content 6-->	
				<hr class="hidden-xs hidden-sm">

<?php get_footer(); ?>