								<div class="row over2">
									<section class="col-lg-12 col-md-12 col-sm-12 news-columns">	
										<h2 class="solutions-head">Solutions by Industry</h2>
										<p>Whether you work in the government sector, at a Fortune 500 company, an entertainment studio or a consulting firm, Oakwood Worldwide has the resources and experience to find the right housing solution for your business requirements. We have dedicated, industry-focused teams of associates concentrated on delivering solutions that meet the needs of organizations of all kinds, and the people who travel for them. </p>
										<div class="row solutions-columns">
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">		
												<div class="solutions consulting">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/individual-business-traveler/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/consulting.jpg" alt="Woman Texting" class="img-responsive" />
														<header class="industries">
															<h3>Business Travel</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">	
														<p class="consult-desc">We’ll handle every aspect of your corporate housing and serviced apartment needs, providing your travelers with convenient, comfortable housing solutions to give them the ability and energy to focus on what they do best.</p>
														<!--
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<span>Case Study</span>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'individual business traveler'
																	
																	));
																	
																	?>
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
															<section class="col-lg-6 col-md-6">
																<span>Whitepaper</span>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'individual business traveler'
																	
																	));
																	
																	?>
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
														</div> --><!--end nested row--> 
													</section>
												</div><!--end consulting-->
											</section><!--Column 1-->
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
												<div class="solutions government">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/government" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/government.jpg" alt="Man Texting" class="img-responsive " />
														<header class="industries">
															<h3>Government</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Oakwood Worldwide has the experience and resources to provide corporate housing and extended stay lodging solutions that meet most government per diems and the needs of government travelers.</p>
														<!--
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<span>Case Study</span>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'government'																	
																	));																	
																	?>
																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>

															</section>
															<section class="col-lg-6 col-md-6">
																<span>Whitepaper</span>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'government'
																	));
																	?>
																
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
														</div> --><!--end nested row-->
													</section>
												</div><!--end government-->
											</section>
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
												<div class="solutions entertainment">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/entertainment/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/entertainment.jpg" alt="Man Texting" class="img-responsive " />
														<header class="industries">
															<h3>Entertainment</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Oakwood Worldwide offers accommodating furnished housing solutions that address above-the-line and below-the-line requests wherever theater groups, production crews and cast members need to be.</p>
														<!--
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<span>Case Study</span>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'entertainment'
																	
																	));
																	
																	?>																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline">
																	<a href="<?php the_permalink(); ?>">
																	<?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>
															</section>
															<section class="col-lg-6 col-md-6">
																<span>Whitepaper</span>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'entertainment'
																	));
																?>
																
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>																
															
															</section>
														</div> --><!--end nested row-->
													</section>
												</div><!--end entertainment-->
											</section>
										</div>
									</section>
								</div> <!--end row-->		
								<div class="row over2">
									<section class="col-lg-12 col-md-12 col-sm-12 news-columns">	
										<div class="row">
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">		
												<div class="solutions relocation">
													<a href="<?php bloginfo( 'url' ); ?>/business-solutions/relocation/" class="industry-sections">
														<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/relocation.jpg" alt="Woman on iPad" class="img-responsive"/>
														<header class="industries">
															<h3>Relocation</h3>
															<div class="clearfix"></div>
														</header>
													</a>
													<section class="industry-text">
														<p class="consult-desc">Oakwood Worldwide is everywhere your talent needs to be, ready to provide a smooth transition with cost-effective global housing solutions in great neighborhoods, convenient to their new office or project site.</p>
														<!--
														<div class="row case-studies hidden-xs">
															<section class="col-lg-6 col-md-6">
																<span>Case Study</span>
																<?php $case_studies = new WP_Query( array(
																	'post_type' => 'case_studies',
																	'posts_per_page' => '1',
																	'meta_key' => 'case_study_industry',
																	'meta_value' => 'relocation'
																	
																	));
																	
																	?>
																	
																	<?php query_posts('post_type=case_studies'); while ($case_studies->have_posts()): $case_studies->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'case_study_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>

															</section>
															<section class="col-lg-6 col-md-6">
																<span>Whitepaper</span>
																<?php $white_papers = new WP_Query( array(
																	'post_type' => 'white_papers',
																	'posts_per_page' => '1',
																	'meta_key' => 'white_paper_industry',
																	'meta_value' => 'relocation'
																	
																	));
																?>
																<?php query_posts('post_type=white_papers'); while ($white_papers->have_posts()): $white_papers->the_post(); ?>
																<p class="headline"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'white_paper_blurb', true ) ); ?></a></p>			
																<?php endwhile; ?>
																<?php wp_reset_query(); ?>	
															</section>
														</div> --> <!--end nested row-->
													</section>
												</div><!--end relocation-->
											</section><!--Column 2-->	
											<hr class="hidden-lg hidden-md hidden-sm"/>
											<section class="col-lg-8 col-md-8 col-sm-12 col-xs-12 industry-affiliations">
												<img src="<?php bloginfo( 'template_directory' ); ?>/images/business-solutions/affiliations-fpo.jpg" alt="affiliations-fpo" class="img-responsive hidden-xs" />
												<h4>Industry Affiliations</h4>
												<p>As a member of many respected business, relocation, entertainment, government and insurance associations, we’re always up to speed with your industry’s best practices—ensuring we can meet your corporate housing and serviced apartment needs with the most current and innovative solutions. </p>
												<a href="<?php bloginfo( 'url' ); ?>/affiliations/" class="orange-link">Learn More &#8594</a>	
											</section><!--Industry Affiliations Section-->
										</div><!--end nested row-->
									</section>
								</div>