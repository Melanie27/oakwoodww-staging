<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Affiliations Single
 
 */

get_header(2); ?>

 <body id="industry-affiliations">
 	 <div class="container-full">
  		<section class="container landing internal">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1>Industry Affiliations</h1>
							</div>
						</section>		
					</div><!--heading-->
		  		</section> <!--two container-->	
				<section class="three container">
					<div class="row over2">
						<section class="col-lg-12 col-md-12">
							<div class="row">
								<h1>National Multi Housing Council</h1>
							</div>
							<div class="row">
								<section class="col-lg-4 col-md-4 logo-individual">
									<img src="<?php bloginfo( 'template_directory' ); ?>/images/vision-leadership/_industry-affiliations/individual-nmhc.jpg" alt="individual-nmhc" class="logo-large">
								</section>
								<section class="col-lg-8 col-md-8 affiliations-text">
									<p>Sed vamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat.</p>
									<p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et mag.</p>
									<p>
									Consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. 
									</p>
								</section>
							</div>												
						</section>
					</div><!--row-->
				</section><!--three-->
				<hr />
				<section class="five container">
					<section class="row industry-affiliations">		
						<?php include (TEMPLATEPATH . '/_/components/php/industry-affiliations.php'); ?>
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