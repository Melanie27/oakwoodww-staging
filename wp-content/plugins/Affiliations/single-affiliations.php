<?php
/**
 * The template for displaying all single posts
 *
 * * Template Name: Affiliation Single
 */

get_header(7); ?>

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
									<h1><?php the_title(); ?></h1>
								</div>
							</section>		
						</div><!--heading-->
					</section> <!--two container-->	
					<?php
						$mypost = array( 'post_type' => 'affiliations', );
						$loop = new WP_Query( $mypost );
					?>    
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<section class="three container">
								<div class="row over2">
									<section class="col-lg-12 col-md-12 individual-affiliation">
										<div class="row">
											<section class="col-lg-4 col-md-4 logo-individual">
												<?php the_post_thumbnail(); ?>
											</section>
											<section class="col-lg-8 col-md-8 affiliations-text">
												<?php the_content(); ?>
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
						<?php endwhile; ?>
						</div><!--end entry-content-->
					</article>
				</div>
			</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>