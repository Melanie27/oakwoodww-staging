<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Careers
 
 */

get_header(3); ?>

<body id="careers">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	
		 	<div id="primary" class="content-area">
			 	<div id="content" class="site-content" role="main">
				 	<section class="two">
					 	<div class="row heading">
						 	<section class="col-lg-12">
							 	<div class="container">
								 	<h1><?php the_title(); ?></h1>										
								 </div>
							</section>		
						</div><!--heading-->	
					</section> <!--two container-->							
					<section class="three container">
						<div class="row">
							<section class="col-lg-12 col-md-12 career-intro">
								<h2>Working at Oakwood Worldwide</h2>
								<h3>We’re looking for associates ready to take on the world</h3>
								<p>Hoping to take your hospitality experience to the next level? Look no further than the corporate housing and serviced apartment leader. At Oakwood Worldwide, we know that satisfied associates make for satisfied clients and guests. That's why we offer competitive compensation, a generous benefits package and an empowering work environment.</p>
								<p>If you're someone who thrives in a dynamic atmosphere, works well with a team and has a "service spirit" that pushes you to go above and beyond, we want you!</p>
							</section>
							<?php include (TEMPLATEPATH . '/_/components/php/career-icons.php'); ?>						
						</div>
					</section>
					<section class="container three three-a hidden-sm hidden-xs">
						<div class="row">
							<section class="col-lg-12 col-md-12 search-jobs">
								<h2>Search Current Openings</h2>	
								<iframe src="http://sj.tbe.taleo.net/SJ2/ats/careers/jobSearch.jsp?org=OAKWOODWW&cws=1" frameborder="0" height="900" width="800">[Your user agent does not 
support frames or is currently configured not to display 
frames.]</iframe>		
							</section>
						</div>					
					</section>		
					<hr />
					<section class="container three three-a">          
						<div class="row career-promo">
							<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 oakwood-university thirds">
								<div class="row promo-header">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h2>Why Oakwood Worldwide</h2>
									</section>
								</div>
								<div class="row career-trio">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="video-container">
											<iframe width="340" height="191" src="//www.youtube.com/embed/cOPJEcrVcEY?wmode=opaque&rel=0" frameborder="0" allowfullscreen></iframe>
										</div>
									</section>
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p>As an associate, you’ll have a financially stable company on your side, making investments in your professional development and rewarding your achievements.</p>
									</section>
								</div>	
							</section>
							<hr class="hidden-lg hidden-md hidden-sm">
							<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 why-oakwood thirds">
								<div class="row promo-header">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h2>Oakwood University</h2>
									</section>
								</div>
								<div class="row career-trio">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<img src="<?php bloginfo( 'template_directory' ); ?>/images/careers/Oakwood-University.jpg" alt="oakwood-university" class="img-responsive">
									</section>
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p>Our ongoing training program, Oakwood University, offers comprehensive internal training for associates at every level of our organization.</p>
									</section>
								</div>
							</section>
							<hr class="hidden-lg hidden-md hidden-sm">
							<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 referral thirds">
								<div class="row promo-header">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h2>Our Associates</h2>
									</section>
								</div>
								<div class="row career-trio">
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<img src="<?php bloginfo( 'template_directory' ); ?>/images/careers/Our-Associates.jpg" alt="our-associates" class="img-responsive">
									</section>
									<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p>We’re not looking for employees. We’re hoping to add to our team of associates—individuals who we respect as partners and who we fully entrust with the future of our company.</p>
									</section>
								</div>
							</section>
						</div>
					</section><!--three-->				
					<hr />	
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>