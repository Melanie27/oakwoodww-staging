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
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/landing-page-ie7.css">
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/landing-page-ie8.css">
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/rcarousel.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rcarousel/state-department-style.css"/>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/demo.css" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/district/stylesheet.css" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landing-page-state-department.css" />


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.smint.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom-state-department.js"></script>

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
						.css( "background-image", "url(images/page-on.png)" );

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(images/page-off.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 700,
						auto: {
							enabled: false
						},
						width: 780,
						height: 255,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
				$("#ui-carousel-next")
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
