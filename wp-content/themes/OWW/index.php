<?php get_header(); ?>

  <body id="home">
  	<section class="container landing">
		<?php include "_/components/php/header-menu.php"; ?>
		 <section class="two">
			 <div class="row heading">
				 <section class="col-lg-12">
					 <div class="container">
						 <section class="row">
							 <div class="col-lg-10">
								 <h1>Oakwood Worldwide lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
								 <p><a href="#" class="learn-more">Learn more &#8594;</a></p>
							</div>
						</section>
					</div>
				</section>		
			</div>
			<!--heading-->			
		 </section> <!--two-->	
		<section class="three container">
			<div class="row over2">
				<section class="col-lg-12 col-md-12">
					<div class="row">
						<section class="col-lg-8 col-md-8 col-sm-12 col-xs-12 our-brands">
							<div class="row">
								<section class="col-lg-11 col-md-12 col-sm-11 brands-intro">
									<h1>Our Brands:	Oakwood, ExecuStay and Insurance Housing Solutions</h1>
									<p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.</p>
								</section>	
							</div>
							<div class="row">
								<section class="col-lg-12 col-md-12 col-sm-12 logos brand-logos">
									<div class="row">
										<ul class="logos col-lg-12">
											<li><img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/logo-oakwood-homepage.jpg" alt="Oakwood" class="logo oakwood img-responsive"></li>
											<li><img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/logo-execustay-homepage.jpg" alt="Execustay" class="logo execustay img-responsive"></li>
											<li><img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/logo-ihs-homepage.jpg" alt="Insurance Housing Solutions" class="logo ihs img-responsive"></li>
										
										</ul>
									</div>
									<div class="clearfix"></div>
								</section>
							</div><!--end nested logos-->
						</section><!--end our brands-->
						<section class="col-lg- col-md-4 col-sm-12 col-xs-12 no-right-padding">
							<div class="solutions promo-video">
								<a href="#" class="industry-sections">
									,<!--<img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/video-promo.jpg" alt="video-promo" class="img-responsive">-->	
									<header class="industries">
										<h3>Promo Video Title Lorem Ipsum Dolore Sit Amet</h3>
										<div class="clearfix"></div>
									</header>
								</a>
							</div><!--end video-->
						</section>
					</div><!--end nested row-->
				</section>
			</div><!--row-->
		</section><!--three-->				
		<section class="row">
			<div class="col-lg-12">
				<section class="four hidden-sm hidden-xs">
				</section>
			</div>
		</section><!--content 4-->
		<hr />
		<div class="row">
			<section class="col-lg-12 five">
				<div class="container">	
					<section class="row one-third-two-thirds">
						<div class="col-lg-4 col-md-4 col-sm-12 thirds first-third-one-third">
							<h1><a href="vision-leadership.php">Vision & Leadership</a></h1>
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/vision-leadership-01.jpg" alt="vision-leadership-01" class="img-responsive hidden-xs">
							<p class="">Sed aucto lorem ipsum dolore sit amet ndisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posu aesent. Vestibulum ante ipsum primis in faucibus orci luctus.</p>		
						</div><!--end first third-->
						<hr class="hidden-lg hidden-md hidden-sm">
						<div class="col-lg-4 col-md-4 col-sm-6 thirds middle-third">
							<h1><a href="news.php">News</a></h1>
							<?php include "_/components/php/news-thumbs.php"; ?>												
						</div>
						<hr class="hidden-sm" />
						<div class="col-lg-4 col-md-4 col-sm-6 thirds last-third">
							<h1>Industry Insights</h1>
							<?php include "_/components/php/news-thumbs.php"; ?>												
						</div>	
					</section>
				</div><!--container-->						
			</section><!--end five-->
		</div>		
  		<hr />
  		<section class="row">
			<div class="col-lg-12">
				<section class="six hidden-sm hidden-xs">
				</section>
			</div>
		</section><!--content 6-->
		<section class="seven container hidden-sm hidden-xs">
				<div class="row carousel-heading">
					<section class="col-lg-12 col-md-12 ">
						<h1>Promotions</h1>
						<?php include "_/components/php/carousel-emea.php"; ?>
					</section>
				</div>
			</section><!--end five-->	
			<div class="row hidden-lg hidden-md">
				<section class="col-lg-12 seven">
					<div class="container">
						<section class="row promotions">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/promo-1.jpg" alt="promo-1" class="img-responsive" >	
							</div><!--end first third-->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/promo-middle.jpg" alt="promo-middle" class="img-responsive">	
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 third-promo">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/homepage/promo-1.jpg" alt="promo-1" class="img-responsive">				
							</div>
						</section>
					</div><!--container-->
				</section><!--seven-->
			</div><!--row-->
			<hr />	
			<section class="row">
				<div class="col-lg-12">
					<section class="eight hidden-sm hidden-xs">
					</section>
				</div>
			</section><!--content 8-->
		
		<?php get_footer(); ?>