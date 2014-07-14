// JavaScript Document

//Note: If the selector name is changed (.request-now) it affects the FAQ functionality
$(document).ready(function() {
	$('.subMenu').smint(); /*smint*/
		
	//$("a.grouped_elements").fancybox(); /*Photo Gallery*/
	

/*Scrolling box functionality*/

var top = $('.request-now').offset().top - parseFloat($('.request-now').css('marginTop').replace(/auto/, 0));
  	$(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
  
    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('.request-now').addClass('fixed');
    } else {
      // otherwise remove it
      $('.request-now').removeClass('fixed');
    }
  });
  
  
  
 /*Modal window -contact representative js*/

	$('.page-template-page-templatesfull-width-Sample-2014-php .contact-representative').click(function () {
		$('.mainarticle').show();
		$('.mainarticle').load('../wp-content/themes/FLEX/landing_modal_oakwoodww.html #mainarticle', function() {
			$('#theDark, .mainarticle').fadeIn(500);
		
			$('#theDark, .close-button, .close-modal').click(function(){
				$('#theDark, .mainarticle').hide();
				
			});	
		});				
	
	}); /* end */



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
	} else {
		return true;	
	}
});
  
  
});


/* CEB Properties Functionality*/

$(document).ready(function(){
 
$('#cssmenu2 li .active').hide();  
  
  $('#cssmenu2 > ul > li > a').click(function() {

	var checkElement = $(this).next();

	$('#cssmenu2 li').removeClass('active');
	$(this).closest('li').addClass('active');	

	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		$(this).closest('li').removeClass('active');
		checkElement.slideUp('normal');
	}

	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		$('#cssmenu2 ul ul:visible').slideUp('normal');
		checkElement.slideDown('normal');
	}

	if (checkElement.is('ul')) {
		return false;
	} else {
		return true;	
	}
});
  
  
});




/*Move-in Move-out Tabbing Fuctionality*/
$(document).ready(function() {
		
		$('#tab-short').hide();
		$('#moving-in').addClass("tab-selected");

		$('#moving-in').click(function () {
			$('#tab-long').show();
			$('#moving-in').addClass("tab-selected");
			$('#moving-out').removeClass("tab-selected");
			$('#tab-short').hide();
		});

		$('#moving-out').click(function () {
			$('#tab-short').show();
			$('#moving-out').addClass("tab-selected");
			$('#moving-in').removeClass("tab-selected");
			$('#tab-long').hide();
		});
		
	});
	
	

/*FAQ Tabbing Fuctionality*/
$(document).ready(function() {
		
		$('#tab-checkOut').hide();
		$('#tab-staying').hide();
		$('#arriving').addClass("tab-selected");

		$('#arriving').click(function () {
			$('#tab-arriving').show();
			$('#arriving').addClass("tab-selected");
			$('#staying').removeClass("tab-selected");
			$('#tab-staying').hide();
			$('#checkOut').removeClass("tab-selected");
			$('#tab-checkOut').hide();

		});

		$('#staying').click(function () {
			$('#tab-staying').show();
			$('#staying').addClass("tab-selected");
			$('#arriving').removeClass("tab-selected");
			$('#tab-arriving').hide();
			$('#checkOut').removeClass("tab-selected");
			$('#tab-checkOut').hide();
		});
		
		$('#checkOut').click(function () {
			$('#tab-checkOut').show();
			$('#checkOut').addClass("tab-selected");
			$('#arriving').removeClass("tab-selected");
			$('#tab-arriving').hide();
			$('#staying').removeClass("tab-selected");
			$('#tab-staying').hide();
		});
		
	});




















