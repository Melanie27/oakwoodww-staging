<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Vision & Leadership
 */

get_header(2); ?>

<body id="vision-leadership">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		 	<div id="primary" class="content-area">
			 	<div id="content" class="site-content" role="main">
				 	<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Vision &#38; Leadership</h1>
								</div>
							</section>		
						</div><!--heading-->		
						<?php include (TEMPLATEPATH . '/_/components/php/hero-halves.php'); ?>
					</section> <!--two container-->	
					<section class="hidden-lg hidden-md hidden-sm hidden-xs col-md-6 col-xs-12 hero-halves">
						<h1>2013</h1>
						<h2>Oakwood Worldwide</h2>
						<p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
					</section><!--End two halves-->	
					<hr />
					<section class="three container">
						<div class="row over2a">
							<section class="col-lg-12 col-md-12">
								<h2>Heritage &#38; Values</h2>
								<h3>&#34;The Oakwood Worldwide secret is simple: we go above and beyond for our clients. And, as it happens, when they grow, we grow. When they succeed, we succeed. It’s that easy because to us, our clients and guests mean everything.&#34; &#8212; Ric Villarreal, President</h3>
								<p>In 1960, Oakwood Worldwide pioneered the corporate housing industry by recognizing an unspoken need for more flexible, adaptive and thoughtful housing solutions. Today, with that same entrepreneurial and intuitive spirit, Oakwood Worldwide continues to define the corporate housing and serviced apartment category by challenging the status quo. We’re always looking for new ways to deliver more choice, more flexibility and more efficient solutions that help drive the success of the clients we serve. We’re searching for new technologies to make our services more accessible from anywhere in the world. And we’re making investments in innovation, continuing our long-standing commitment to providing a world-class experience for our clients and guests. Which means you can count on us for progressive, reliable solutions delivered with the expertise and vision to take you and your company anywhere you need to go.</p>
							</section>
						</div>
					</section>
					<hr/>
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 col-xs-12">
							<?php include (TEMPLATEPATH . '/_/components/php/executive-committee.php'); ?>												
							</section>
						</div><!--row-->
					</section><!--three-->
					<hr />
					<section class="content row">
						<div class="col-lg-12">
							<section class="four hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 4-->
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>