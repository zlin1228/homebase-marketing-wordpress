/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(document).ready(function($) {		

	if ($(window).scrollTop() > 0) {
		$(".eoy-countdown").addClass('scrolled');
		$("#masthead").addClass('scrolled');
	}

	$(window).scroll(function() {

    var scroll = $(window).scrollTop();
		var hPosTop = $("#masthead").position().top;

		if ($(window).width() > 640 ) {
			if(scroll > 0) {
	      $(".eoy-countdown").addClass('scrolled');
	    }
	    else {
	      $(".eoy-countdown").removeClass('scrolled');
	    }
		}

		if(scroll > 0) {
      $("#masthead").addClass('scrolled');
    }
    else {
      $("#masthead").removeClass('scrolled');
    }

		if ($("#masthead").hasClass('fixed'))
			return;

		if (scroll > hPosTop) {
				$("#masthead").addClass("sticky");
		} else {
				$("#masthead").removeClass("sticky");
		}

		
	});

	$('#icon-menu').click(function(){
			jQuery('#mobile-menu .menu-wrapper li.has-dropdown').each(function(){
					if(jQuery(this).hasClass('menu-item-product')) {
							jQuery(this).addClass('opensubmenu');
							jQuery(this).css({'height': (jQuery(this).find('ul.dropdown').first().outerHeight() + 64) + 'px'});
					}
					else {
							jQuery(this).removeClass('opensubmenu');
							jQuery(this).css({'height': 64, 'overflow': 'hidden'});
					}
			});

			$("body").toggleClass('noscroll');
			$('#masthead').toggleClass('mmheader');
			$("#toggle-menu").toggleClass('active');
			$("#hb-signbuttons").toggle();
			$("#mobile-menu").toggleClass('active');
			$("#mobile-menu").css({'padding-top': ($('#masthead').outerHeight() + $("#masthead").position().top) + 'px'});
			return false;
	});

	var mobileMenuWrapper = jQuery('#mobile-menu .menu-wrapper');
	
	//set the height of all li.has-dropdown items
	jQuery('#mobile-menu .menu-wrapper li.has-dropdown').each(function(){
			jQuery(this).css({'height': 64, 'overflow': 'hidden'});
	});
			//process the parent items

	jQuery('#mobile-menu .menu-wrapper li.has-dropdown > a').on('click', function(e){
			e.preventDefault();
			
			var parentLi = jQuery(this).parent('li.has-dropdown');
			var dropdownUl = parentLi.find('ul.dropdown').first();
			var dropdownUlheight = dropdownUl.outerHeight() + 64;

			//set height is auto for all parents dropdown
			parentLi.parents('li.has-dropdown').css('height', 'auto');
			//set height is auto for menu wrapper
			mobileMenuWrapper.css({'height': 'auto'});

			if(parentLi.hasClass('opensubmenu')) {
					parentLi.removeClass('opensubmenu');
					parentLi.animate({'height': 64}, 'fast');
			} else {
					var old = jQuery('.opensubmenu');
					old.removeClass('opensubmenu');
					old.animate({'height': 64}, 'fast');

					parentLi.addClass('opensubmenu');
					parentLi.animate({'height': dropdownUlheight}, 'fast');
			}
	});
});

