<?php/* Template Name: Press Release Single*/?>

<?php get_header(6); ?>

<body id="press-releases-single">
  	<div class="container-full">  
  		<section class="container landing">
		  <?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary">
			  	<div id="content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>Press Release: <?php the_title(); ?></h1>
								</div>
							</section>		
						</div><!--heading-->
						<?php /*include (TEMPLATEPATH . '/_/components/php/hero-thirds-internal.php'); */?>
					</section> <!--two-->	 
					<?php
						$mypost = array( 'post_type' => 'press-releases', );
						$loop = new WP_Query( $mypost );
					?>    
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<section class="three container">
								<div class="row over2">
									<section class="col-lg-12 col-md-12">
										<div class="row">
											<section class="col-lg-8 col-md-8 press-release-list">
												<h2><?php /*the_title(); */?></h2>
												<section class="press-release-hero">
													<?php the_post_thumbnail( array( 350, 350 ) ); ?>
													<?php echo esc_html( get_post_meta( get_the_ID(), 'photo_caption', true ) ); ?>
												</section>
												<section class="press-release-content">	       	
													<?php the_content(); ?>
													<p class="more">More From:
														<span class="tags">
														<?php the_terms( $post->ID, 'press_releases_tags' ,  ' ' );?>
														</span>
													</p>
													<div class="clearfix">&nbsp;</div>
													<p>About Oakwood Worldwide<br/>
Oakwood Worldwide<sup>&reg;</sup>, based in Los Angeles, Calif., is the leading provider of corporate housing and serviced apartment solutions through its two well-known brands, Oakwood<sup>&reg;</sup> and ExecuStay<sup>&reg;</sup>. Both brands provide move-in-ready furnished housing designed to meet the needs of business travelers on long- and short-term assignments. Oakwood has access to the largest selection of housing options and a presence in all 50 United States and more than 70 countries. ExecuStay is the preferred corporate housing partner of Marriott<sup>&reg;</sup> International and is the only corporate housing brand where guests can earn Marriott Rewards® points for stays at any ExecuStay location in the U.S.</p>
													<div class="clearfix"></div>	
												</section><!--end two thirds--> 
											</section>
											<hr class="hidden-lg hidden-md hidden-sm"/>									
											<section class="hidden-lg hidden-md hidden-sm">
												<h1>Press Releases</h1>
												<?php include (TEMPLATEPATH . '/_/components/php/news-thumbs.php'); ?>
											</section>				
											<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>							
										</div><!--end nested row-->
									</section>
								</div><!--row-->
							</section><!--three-->
							<section class="content row">
								<div class="col-lg-12">
									<section class="four hidden-sm hidden-xs">
									</section>
								</div>
							</section><!--content 4-->			
							<hr />
							<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>				
							<hr />
						</div><!--entry-content-->
					</article>
				<?php endwhile; ?>
			</div>
		</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>