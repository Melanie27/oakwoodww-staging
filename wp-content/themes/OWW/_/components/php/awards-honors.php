											<div class="panel panel-default">
												<div class="panel-heading collapse4" id="collapse4">
													<h2 class="title4 panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapser">
															<h2>Awards</h2>
														</a>
														<button type="button" class="btn mobile-toggle" data-toggle="collapse" data-target="#collapseFour" id="btn-4"></button>
													</h2>
												</div>	
												 <div id="collapseFour" class="panel-collapse collapse in">
												 	<div class="panel-body">
														<?php include (TEMPLATEPATH . '/_/components/php/media-relations.php'); ?>	
														<section class="awards-honors">
															<h2 class="hidden-sm hidden-xs"><a href="<?php bloginfo('url'); ?>/awards/">Awards and Honors</a></h2>
																<div class="row">
																	<section class="col-lg-12 col-md-12">
																	<?php $awards = new WP_Query('post_type=awards&posts_per_page=3');?>
																		<ul class="list-unstyled">
																		<?php query_posts('post_type=awards'); while ($awards->have_posts()): $awards->the_post(); ?>
																			<li><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'award_blurb', true ) ); ?></a></li>
																			<?php endwhile; ?>
																		<?php wp_reset_query(); ?>
																		</ul>
																	</section>
																</div>		
																<div class="row archives">
																	<div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
																		<a class="link-archives see-all text-center" href="<?php bloginfo('url'); ?>/awards/">VIEW AWARDS</a>
																	</div>
																</div>
															</section><!--Awards and Honors-->
														</div><!--panel body-->
													</div><!--Collapse Four-->
												</div><!--panel-->
											
									