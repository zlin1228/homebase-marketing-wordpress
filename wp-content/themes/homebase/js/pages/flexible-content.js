(function($) {
 
	// scrolldown to anchor
	$('body').on('click','a[href^="#"]', function(e) {
		e.preventDefault();
		if ($('[data-anchor="' + $(this).attr('href') + '"]').length > 0) {
			$('html, body').animate({
				scrollTop: $('[data-anchor="' + $(this).attr('href') + '"]').offset().top - 68
			}, 500);
		}
	});

	// slideshow

	if($(window).width() > 640){
	    $('.parallax-content1').paroller({
	        factorXs: 0.0,
	        factorSm: 0.0,
	        factorMd: 0.4,
	        factorLg: 0.4,
	        factorXl: 0.4,
	        factor: 0.4,
	        type: 'foreground',
	        transition: 'transform 0.5s ease',
	    });

	    $('.parallax-content2').paroller({
	      factorXs: 0.0,
	      factorSm: 0.0,
	      factorMd: 0.7,
	      factorLg: 0.7,
	      factorXl: 0.7,
	      factor: 0.7,
	      type: 'foreground',
	      transition: 'transform 0.8s ease',
	    });
  	}

	
	$('.slideshow-body > .columns').matchHeight();

	$(window).scroll(function(event){ 
		if ($('.slideshow-caps-col').css('display') != 'block') {

			$('.slideshow-imgs').slick({
				fade: true,
				dots: true,
				arrows: false
			});

		} else {

			$('.slideshow-caps .slideshow-cap').mouseover(function() {

				$count = $(this).attr('data-slide');

				$('.slideshow-caps .slideshow-cap').removeClass('active');
				$(this).addClass('active');

				$('.slideshow-img').removeClass('active');
				$('.slideshow-img[data-slide="' + $count + '"]').addClass('active');

			});

		}

		$(window).off(event);
	});

	// Sub nav scroll 
	var lastScrollTop = 0;

	$(window).scroll(function(event){
		var st = $(this).scrollTop();

	    if (st > 0){
	      // downscroll code
	      $(".section-navbar").addClass("scrolled");
	    } else {
	      // upscroll code
	      $(".section-navbar").removeClass("scrolled");
	    }

	    if (st > lastScrollTop && st > 150){
	      // downscroll code
	      $(".section-navbar").addClass("hidden");
	    } else {
	      // upscroll code
	      $(".section-navbar").removeClass("hidden");
	    }
	    lastScrollTop = st;
	});


	// $('#create-account').click(function() {
	// 	var email = $('.homeform').val();
    // 	if( email == '' || IsEmail(email) == false ) {
    //   		$('.homeform').addClass("error");
    //   		return false;
  	// 	}
	// });

	$('#home-signup-form #create-account').click(function(e){
		var btn = this;

		var event = "Get Started Button Clicked";
		var eventProperties = {
			"product_area": 'mw_'+document.body.getAttribute('data-amplitude-product-area').replaceAll('-','_'),
			"event_category": "email_capture",
			"action_type": "click",
			"filtered_path": window.location.pathname,
			"full_path": window.location.pathname + window.location.search + window.location.hash,
			"query_params": window.location.search,
			"screen_height": screen.height,
			"screen_width": screen.width,
		};

	  amplitude.getInstance().logEvent(event, eventProperties);

	  e.preventDefault();
	  
	  setTimeout( function () { 
          $(btn).closest('form').submit();
      }, 500);

	});

})(jQuery);
