<?php
/** Template Name: News */?>

<?php get_header(6); ?>

 <body id="news">
  	<div class="container-full">
  		<section class="container landing">
		 	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	
		 	<div id="primary" class="content-area">
			 	<div id="content" class="site-content" role="main">
				 	<section class="two">
					 	<div class="row heading">
						 	<section class="col-lg-12">
							 	<div class="container">
								 	<h1>News</h1>
								 </div>
							</section>		
						</div><!--heading-->
						<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds.php'); ?>	
					</section> <!--two-->	
					<section class="three container">
						<div class="row over2">
							<section class="col-lg-12 col-md-12">
								<div class="row">					
									<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols first-col">	
										<?php include (TEMPLATEPATH . '/_/components/php/press-room.php'); ?>	
									</section><!--Press Room-->	
									<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols second-col ">
										<?php include (TEMPLATEPATH . '/_/components/php/in-the-news.php'); ?>	
									</section><!--In the News-->		
									<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols third-col">	
										<?php include (TEMPLATEPATH . '/_/components/php/awards-honors.php'); ?>	
									</section><!--Awards-->				
									<section class ="hidden-lg hidden-md">
										<?php include (TEMPLATEPATH . '/_/components/php/events-mobile.php'); ?>	
									</section>	
								</div><!--end nested row-->	
							</section>
						</div><!--row-->
					</section><!--three-->
					<section class="row">
						<div class="col-lg-12">
							<section class="four hidden-sm hidden-xs"></section>
						</div>
					</section><!--content 4-->
					<section class="five container hidden-sm hidden-xs">
						<?php include (TEMPLATEPATH . '/_/components/php/events-desktop.php'); ?>	
					</section><!--five-->
					<section class="row">
						<div class="col-lg-12">
							<section class="six hidden-sm"></section>
						</div>
					</section><!--content 6-->	
					<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>	
				</div><!-- #content -->
			</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>