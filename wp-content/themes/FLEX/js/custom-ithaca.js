// JavaScript Document


$(document).ready(function() {
	
	$('.subMenu').smint(); /*smint*/	
	$("a.grouped_elements").fancybox(); /*Photo Gallery*/
	
});


/*Frequently Asked Questions Functionality*/

$(document).ready(function(){
 
	$('#cssmenu li .active').hide();  
  
  	$('#cssmenu > ul > li > a').click(function() {

		var checkElement = $(this).next();
		$('#cssmenu li').removeClass('active');
		$(this).closest('li').addClass('active');	

		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}

		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('#cssmenu ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}

		if (checkElement.is('ul')) {
			return false;
		} 
	
		else {
			return true;	
		}

	});  
  
});
