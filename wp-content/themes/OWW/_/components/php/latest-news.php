										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading collapse1" id="collapse1">
													<h1 class="title1 panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapser">
															<span class="accords">Latest</span>
														</a>
														<button type="button" class="btn mobile-toggle" data-toggle="button" data-target="#collapseOne" id="btn-1"></button>
													</h1>
												</div>	
												 <div id="collapseOne" class="panel-collapse collapse in">
												 	<div class="panel-body">
														<h1 class="hidden-xs hidden-sm">Latest News</h1>	
														<section class="latest-releases">
															<h3 class="hidden-sm hidden-xs">Latest Releases</h3>
															 <?php include (TEMPLATEPATH . '/_/components/php/news-thumbs.php'); ?>	
															<div class="clearfix"></div>
														</section><!--Latest Releases-->
														<div class="hidden-xs">
															 <?php include (TEMPLATEPATH . '/_/components/phpbtn-view-archives.php'); ?>	
														</div>
													</div><!--panel body-->
												</div><!--Collapse One-->
											</div><!--panel-->
									