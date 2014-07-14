<?php /*Template Name: In The News Single */ ?>

<?php get_header(6); ?>

<body id="in-the-news-single">
  	<div class="container-full">  
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		  	<div id="primary">
			  	<div id="content" role="main">
				  	<section class="two">
					  	<div class="row heading">
						  	<section class="col-lg-12">
							  	<div class="container">
								  	<h1>In The News: <?php the_title() ?></h1>
								</div>
							</section>		
						</div><!--heading-->
						<?php /*include (TEMPLATEPATH . '/_/components/php/hero-thirds-in-the-news.php'); */?>
					</section> <!--two-->	
					<?php
						$mypost = array( 'post_type' => 'in-the-news', );
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
												<h2><?php the_title(); ?></h2>
												<section class="press-release-hero">								
													<?php the_post_thumbnail(); ?>
													<?php echo esc_html( get_post_meta( get_the_ID(), 'photo_caption', true ) ); ?>
												</section>
												<section class="press-release-content">	       	
													<?php the_content(); ?>
													<p>
														<a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'article_link', true ) ); ?> target="_blank" ">View Article in <?php echo esc_html( get_post_meta( get_the_ID(), 'source_name', true ) ); ?></a>
													</p>
													<p class="more">More From:
														<span class="tags">
														<?php the_terms( $post->ID, 'in_the_news_years' ,  ' ' );?>
														</span>
													</p>									
													<div class="clearfix"></div>	
												</section><!--end two thirds--> 
													
											</section>									
											<section class="hidden-lg hidden-md hidden-sm news-single-archives">
												<h2>News for 2014</h2>
												<?php include (TEMPLATEPATH . '/_/components/php/in-the-news-thumbs.php'); ?>
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
						</div>
					</article> 
				<?php endwhile; ?>
			</div>
		</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>