										<!--News Navigation-->
											<section class="col-lg-3 col-lg-offset-1 hidden-md hidden-sm hidden-xs">
												<section class="news navigation hidden-xs">
													<h2>News</h2>
														<ul>
															<!--Press Releases-->
															<div class="panel-group" id="accordion">
																<div class="panel panel-default">
																	<div class="panel-heading news-nav">
																		<h4 class="panel-title">
																			<a data-toggle="collapse" data-parent="#accordion" href="#collapsePR" class="side-nav">
																				<li><h4>Press Releases</h4>
																			</a>
																		</h4>
																	</div><!--end panel heading-->
																	<div id="collapsePR" class="panel-collapse collapse in">
																		<div class="panel-body">
																				
																			<!--List all the terms, with link to term archive-->			
																			<?php
																				$args = array( 'hide_empty=0' );
																				$terms = get_terms('press_releases_tags', $args);
																				$count = count($terms); $i=0;
																				if ($count > 0) {
																	
																					echo '<ul class="release-years press-releases-archive">';
																					$term_list = '<span class="my_term-archive">';
																					foreach ($terms as $term) {
																						$i++;
																						$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																			}
																	
																				echo $term_list;
																				echo "</ul>";
																				}
																				?>	
																			</li>
																		 </div><!--end panel body-->
																	</div><!--end collapse one-->
																</div><!-- end panel-->
															
															
															<!--In the News-->
															
															<div class="panel-group" id="accordion">
																<div class="panel panel-default">
																	<div class="panel-heading news-nav">
																		<h4 class="panel-title">
																			<a data-toggle="collapse" data-parent="#accordion" href="#collapseITN" class="side-nav">
																				<li><h4>In the News</h4>
																			</a>
																		</h4>
																	</div><!--end panel heading-->
																	<div id="collapseITN" class="panel-collapse collapse in">
																		<div class="panel-body">

																				<!--List all the terms, with link to term archive-->			
																				<?php
																					$args = array( 'hide_empty=0' );
																					$terms = get_terms('in_the_news_years', $args);
																					$count = count($terms); $i=0;
																					if ($count > 0) {
																	
																						echo '<ul class="release-years in-news-archive">';
																						$term_list = '<span class="my_term-archive">';
																						foreach ($terms as $term) {
																							$i++;
																							$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																				}
																	
																				echo $term_list;
																				echo "</ul>";
																				}
																				?>	
																			</li>
																		</div><!--end panel body-->
																	</div><!--end collapse one-->
																</div><!-- end panel-->
															<!--Events-->
															<div class="panel-group" id="accordion">
																<div class="panel panel-default">
																	<div class="panel-heading news-nav">
																		<h4 class="panel-title">
																			<a data-toggle="collapse" data-parent="#accordion" href="#collapseUE" class="side-nav">
																				<li><h4>Events by Month</h4>
																			</a>
																		</h4>
																	</div><!--end panel heading-->
																	<div id="collapseUE" class="panel-collapse collapse in">
																		<div class="panel-body">																				
																			
																			<!--List all the terms, with link to term archive-->			
																			<?php
																				$args = array( 'hide_empty=0');
																				$terms = get_terms('events_event_month', $args);
																				$count = count($terms); $i=0;
																				if ($count > 0) {
																	
																					echo '<ul class="release-years upcoming-events-archive">';
																					$term_list = '<span class="my_term-archive">';
																					foreach ($terms as $term) {
																						$i++;
																						$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																			}
																	
																			echo $term_list;
																			echo "</ul>";
																			}																			?>	
																		</li>
																	</div><!--end panel body-->
																</div><!--end collapse one-->
															</div><!-- end panel-->
															<!--Awards-->
															<div class="panel-group" id="accordion">
																<div class="panel panel-default">
																	<div class="panel-heading news-nav">
																		<h4 class="panel-title">
																			<a data-toggle="collapse" data-parent="#accordion" href="#collapseAW" class="side-nav">
																				<li><h4>Awards & Honors</h4>
																			</a>
																		</h4>
																	</div><!--end panel heading-->
																	<div id="collapseAW" class="panel-collapse collapse in">
																		<div class="panel-body">
																			<!--List all the terms, with link to term archive-->	
																				<?php
																					$args = array( 'hide_empty=0' );
																					$terms = get_terms('awards_tags', $args);
																					$count = count($terms); $i=0;
																					if ($count > 0) {
																	
																						echo '<ul class="release-years awards-honors-archive">';
																						$term_list = '<span class="my_term-archive">';
																						foreach ($terms as $term) {
																							$i++;
																							$term_list .= '<li><a href="' . get_term_link( $term ) . '" class="'. sprintf(__('%s', 'my_localization_domain'), $term->name) .'" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
    	 $term_list .= '</span>';
																				}
																	
																				echo $term_list;
																				echo "</ul>";
																				}
																				?>	
															
																			</li>
																		</div><!--end panel body-->
																	</div><!--end collapse one-->
																</div><!-- end panel-->
														</div><!--end accordion-->
													</ul>
												</section><!--end news-->	
												<section class="media-relations hidden-sm hidden-xs">
													 	
													 	<?php include (TEMPLATEPATH . '/_/components/php/media-relations.php'); ?>
												</section><!--Media Relations-->	
											</section><!--end one third-->