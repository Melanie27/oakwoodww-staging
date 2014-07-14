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
								<h1>Vision and Leadership</h1>
							</div>
						</section>		
					</div><!--heading-->		
					<?php include (TEMPLATEPATH . '/_/components/php/hero-halves.php'); ?>
		  		</section> <!--two container-->	
		  		<section class="hidden-lg hidden-md hidden-sm col-md-6 col-xs-12 hero-halves">
					<h1>2013</h1>
					<h2>Oakwood Worldwide</h2>
					<p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
				</section><!--End two halves-->	
				<hr />
				<section class="three container">
					<div class="row over2">
						<section class="col-lg-12 col-md-12">
							<?php include (TEMPLATEPATH . '/_/components/php/executive-committee.php'); ?>												
						</section>
					</div><!--row-->
					<div class="row archives">
						<section class="hidden-lg hidden-md hidden-sm col-xs-10 col-xs-offset-1">
							<a class="link-archives text-center" href="#">View All Executive Bios</a>
						</section>
					</div>
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