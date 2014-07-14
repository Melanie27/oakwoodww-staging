<?php/*Template Name: Vision Leadership Single*/?>

<?php get_header(2); ?>

 <body id="executive-leadership">
  	<div class="container-full">
  		<section class="container landing">
		<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<section class="two">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1>Executive Leadership</h1>
							</div>
						</section>		
					</div><!--heading-->						
				</section> <!--two container-->	
				<?php
			  	$mypost = array( 'post_type' => 'vision_and_leadership', );
			  	$loop = new WP_Query( $mypost );
			  	?>
			  	<?php /* The loop */ ?>
			  	<?php while ( have_posts() ) : the_post(); ?>	  					
			  	<section class="three container">
					<div class="row over2">
						<section class="col-lg-12 col-md-12 col-xs-12 exec-team no-left-padding">
							<div class="row">
								<section class="col-lg-12 col-md-12 clearfix">	
									<h1><?php the_title()?> <span class="title hidden-xs"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></span> </h1>
									<h3 class="hidden-lg hidden-md hidden-sm"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></h3>
								</section>	
							</div>	
							<div class="row">
								<section class="col-lg-8 col-md-8">
									<div class="row">
										<section class="col-lg-4 col-md-3 col-sm-3 col-xs-6 pull-left">
										<?php the_post_thumbnail(); ?>
										</section>
										<section class="col-lg-8 col-md-9 no-left-padding executive-text">
										<?php the_content(); ?>
										</section>
									</div>
								</section>					
								<?php endwhile; ?>
					 			<hr class="hidden-lg hidden-md" />
								<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 executive-committee clearfix">
									<?php $vision_and_leadership = new WP_Query('post_type=vision_and_leadership&posts_per_page=6');?>
									<ul class="leadership-photos">
										<?php query_posts('post_type=vision_and_leadership'); while ($executive_committee->have_posts()): $vision_and_leadership->the_post(); ?>
										<div class="row">
											<section class="col-lg-12 col-md-12 col-sm-12">
												<li class="clearfix">
													<?php the_post_thumbnail('leadershipsize'); ?>
													<h3 class="name"><?php the_title()?></h3>
													<p class="title"><?php echo esc_html( get_post_meta( get_the_ID(), 'committee_title', true ) ); ?></p>
													<p><a href="<?php the_permalink(); ?>" class="orange-link">Full Bio &#8594;</a></p>	
												</li>
												<?php endwhile; ?>
											</section>
										</div>		
									</ul>
								</section><!-- col-lg-4 exec-com-->
							</div>										
						</section>
					</div><!--row-->			
				</section><!--three-->	
			</div>	
			<hr />	
			<section class="content row">
				<div class="col-lg-12">
					<section class="four hidden-sm hidden-xs"></section>
				</div>
			</section><!--content 4-->		
		</div><!-- #content -->
	</div><!-- #primary -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>