<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>State Department: Oakwood Arlington</title>
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/rcarousel.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/state-department-style.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/demo.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/landing-page-state-department.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/property-page-state-department.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/district/stylesheet.css"/>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.smint.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-state-department.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/rcarousel/jquery.ui.core.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rcarousel/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rcarousel/jquery.ui.rcarousel.js" type="text/javascript"></script>

<script type="text/javascript">
			jQuery(function($) {
				function generatePages() {
					var _total, i, _link;
					
					_total = $( "#carousel" ).rcarousel( "getTotalPages" );
					
					for ( i = 0; i < _total; i++ ) {
						_link = $( "<a href='#'></a>" );
						
						$(_link)
							.bind("click", {page: i},
								function( event ) {
									$( "#carousel" ).rcarousel( "goToPage", event.data.page );
									event.preventDefault();
								}
							)
							.addClass( "bullet off" )
							.appendTo( "#pages" );
					}
					
					// mark first page as active
					$( "a:eq(0)", "#pages" )
						.removeClass( "off" )
						.addClass( "on" )
						.css( "background-image", "url(/wp-content/uploads/sites/10/2014/02/page-on.png)" );

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(/wp-content/uploads/sites/10/2014/02/page-off.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(/wp-content/uploads/sites/10/2014/02/page-on.png)" );
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 700,
						auto: {
							enabled: false
						},
						width: 600,
						height: 328,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.add( ".bullet" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);
			});
		</script>

</head>

<body <?php body_class(); ?>> 	                                                              
