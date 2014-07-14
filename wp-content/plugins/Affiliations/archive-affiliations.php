<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Affiliations
 */
get_header(2); ?>

 <body id="affiliations">
 	 <div class="container-full">
  		<section class="container landing internal">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
				 <?php if ( have_posts() ) : ?>
					<section class="two">
						<div class="row heading">
							<section class="col-lg-12">
								<div class="container">
									<h1>Partnerships &#38; Affiliations</h1>
								</div>
							</section>		
						</div><!--heading-->
					</section> <!--two container-->		
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12 partners">
								<!--<div class="row">
									<h1>Partnerships</h1>
								</div>-->
								<div class="row affiliations">
									<section class="col-lg-4 col-md-4 logo-individual hidden-xs">
										<img width="190" style="margin-top:90px;" src="<?php bloginfo( 'template_directory' ); ?>/images/affiliations/logo-marriott.jpg" alt="logo-marriott">											
									</section>
									<section class="col-lg-8 col-md-8 affiliations-text">
										<h2>Marriott<sup>&reg;</sup> International</h2>
										<p> Oakwood Worldwide is proud to be Marriott International's preferred corporate housing and serviced apartment provider. Through this partnership, you and your guests enjoy greater flexibility, more choice and a broader variety of customizable housing solutions—for immediate placement, long term relocation and everything in between.</p>
										<p><strong>Through this partnership, Oakwood Worldwide guests benefit from:</strong></p>
										<ul class="affiliations-list">
											<li>Direct access to nearly 4,000 additional Marriott International locations worldwide</li>
											<li>A seamless experience with coordination of all stay requirements</li>
											<li>Consistent, high-quality service</li>
											<li><a href="http://execustay.com/marriott-rewards.php" target="_blank">Marriott Rewards<sup>&reg;</sup></a> points for stays of 30 days or more at ExecuStay<sup>&reg;</sup> locations throughout the United States</li>
										</ul>
																			
									</section>
								</div>
								<hr class="hidden-lg hidden-md" />
								<div class="row affiliations">
									<section class="col-lg-4 col-md-4 logo-individual hidden-xs">
										<img width="190" style="margin-top:90px;" src="<?php bloginfo( 'template_directory' ); ?>/images/affiliations/logo-regus.jpg" alt="logo-marriott">												
									</section>
									<section class="col-lg-8 col-md-8 affiliations-text">
										<h2>Regus<sup>&reg;</sup></h2>
										<p> Oakwood Worldwide maintains strong relationships with many of the largest and most respected global housing, travel, business and military associations. As active participants, we’re able to better understand best practices that apply to our industry and use them to educate our vendors, partners and contemporaries—while also applying them to our own client and guest experience. Click on the logos to learn more about our roles within each organization.</p>								
									</section>
								</div>														
							</section>
						</div><!--row-->
					</section><!--three-->
					<hr />
					<section class="row">
						<div class="col-lg-12">
							<section class="four hidden-sm hidden-xs">
							</section>
						</div>
					</section><!--content 4-->
					<section class="five container">
						<section class="row industry-affiliations">	
							<section class="col-lg-12 col-xs-12">
								<h2>Industry Affiliations</h2>
								<p>Oakwood Worldwide maintains strong relationships with many of the largest and most respected global housing, travel, business and military associations. As active participants, we’re able to better understand best practices that apply to our industry and use them to educate our vendors, partners and contemporaries &#8211; while also applying them to our own client and guest experience.
Click on the logos to learn more about our roles within each organization.</p>
							</section>
							
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
					<?php endif; ?>
				</div><!-- #content -->
			</div><!-- #primary -->
<?php get_footer(); ?>