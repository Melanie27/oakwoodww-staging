// JavaScript Document


$(document).ready(function() {

		$('.subMenu').smint(); /*smint*/
		
		
		/*State Department (what's new - accordian) Functionality*/
		var allPanels = $('div.active').hide();

		  $('a.open-profile').click(function() {
		    var $targetPanel = $(this).parent().next();
		      $targetPanel.slideDown();
		      return false;
		  });
		
		 $('a.close-profile').click(function() {
		    var $targetPanel = $(this).parent().next();
		      allPanels.slideUp();
		      return false;
		  });
		
		    
		    
		  /*Frequently Asked Questions Functionality*/ 
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
		
		
		/* Google Maps */
		function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(38.876409, -77.154272),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);
        google.maps.event.addDomListener(window, 'load', initialize);
      }
      
		    
		    
});








