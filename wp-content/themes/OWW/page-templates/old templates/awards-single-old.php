<?php
/**
 * The template for displaying all pages
 *
 * * Template Name: Awards Single
 
 */

get_header(6); ?>

 <body id="awards-single">
 	 <div class="container-full">
  		<section class="container landing">
		  	<?php include (TEMPLATEPATH . '/_/components/php/header-menu.php'); ?>	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="two">
				<div class="row heading">
					<section class="col-lg-12">
						<div class="container">
							<h1>Awards</h1>
						</div>
					</section>		
				</div><!--heading-->
				<?php include (TEMPLATEPATH . '/_/components/php/hero-thirds-internal.php'); ?>	
		  	</section> <!--two-->						  				
		  	<div class="container">
				<section class="three">
					<div class="row over2">
						<section class="col-lg-12 col-md-12">
							<div class="row">
								<section class="col-lg-8 col-md-8 press-release-list">
								<!--awards navigation-->	
									<div class="row">
										<section class="col-lg-9 col-md-11 col-xs-12 awards-sections">
											<h4>See Awards From:</h4>
											<ul>
												<li><a href="#">All</a></li>
												<li><a href="#" class="active">EMMAs</a></li>
												<li><a href="#">Cartus Global Network</a></li>
											</ul>
										</section>	
									</div><!--Awards Navigation-->
									<h1>Award Name</h1>
										<section class="press-release-hero">
											<img src="<?php bloginfo( 'template_directory' ); ?>/images/news/press-releases/press-release-splash-01.jpg" alt="press-release-splash-01" class="img-responsive">
										</section>			
										<section class="press-release-content">	
											<p class="press-release-text">LOS ANGELES - July 31, 2013 - Sed vamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat.</p>
											<p class="press-release-text">
													Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. 
											</p>
												<h2 class="press-release-sub-head">Lorem ipsum heading dolor sit amet</h2>
											<p class="press-release-text">
													Consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. 
											</p>
											<p class="press-release-text">
													Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed ut dui. Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. 
											</p>
											<p class="press-release-text">
													Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque.
											</p>
											<p class="more">More from <span class="tags"><a href="#">Awards</a>, <a href="#">Oakwood Worldwide</a></span></p>
											<p class="see-release"><a class="orange-link hidden-xs" href="#">See Press Release &#8594;</a></p>
											<div class="clearfix"></div>
										</section><!--end press release content-->
										<hr class="hidden-lg hidden-md" />					
									</section><!--end press release list-->
									<section class="hidden-lg hidden-md hidden-sm">
										<h1>Awards for 2013</h1>
										<?php include (TEMPLATEPATH . '/_/components/php/news-press-thumbs.php'); ?>		
									</section>
										<?php include (TEMPLATEPATH . '/_/components/php/news-navigation.php'); ?>							
								</section><!--end 12 col-->
							</div><!--row-->
						</section><!--three-->
						</div>
						<hr class="hidden-lg hidden-md" />
						<div class="content row hidden-lg hidden-md hidden-sm hidden-xs">
							<div class="col-lg-12">
								<section class="four hidden-xs">
								</section>
							</div>
						</div><!--content 4-->  				
						<?php include (TEMPLATEPATH . '/_/components/php/media-relations-mobile.php'); ?>					
						<hr />
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>