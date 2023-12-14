jQuery(document).ready(function($) {

	if($(window).width() > 640){
	    $('.parallax-content1').paroller({
	        factorXs: 0.0,
	        factorSm: 0.0,
	        factorMd: 0.1,
	        factorLg: 0.1,
	        factorXl: 0.1,
	        factor: 0.1,
	        type: 'foreground',
	        transition: 'transform 0.5s ease',
	    });

	    $('.parallax-content2').paroller({
		    factorXs: 0.0,
		    factorSm: 0.0,
		    factorMd: 0.2,
		    factorLg: 0.2,
		    factorXl: 0.2,
		    factor: 0.2,
		    type: 'foreground',
		    transition: 'transform 0.8s ease',
	    });

	    $('.section-testimonial').paroller({
	        factorXs: 0.0,
	        factorSm: 0.0,
	        factorMd: 0.1,
	        factorLg: 0.1,
	        factorXl: 0.1,
	        factor: 0.1,
	        type: 'foreground',
	        transition: 'transform 0.5s ease',
	    });

	    $('.quote-wrapper').paroller({
		    factorXs: 0.0,
		    factorSm: 0.0,
		    factorMd: 0.1,
		    factorLg: 0.1,
		    factorXl: 0.1,
		    factor: 0.1,
		    type: 'foreground',
		    transition: 'transform 0.8s ease',
	    });

  	}

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
	  	$('.qr-code').attr('href', 'https://app.joinhomebase.com/money_tab/');
	}
	else {
	  	$('.qr-code').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-qr-code',
			image: {
				verticalFit: true
			}
		});

	}

  	$('.faq-item').each(function() {
  		$('.question', this).click(function(){
  			$(this).parent().toggleClass('open');
  		});
  	});

  	if (window.location.pathname === "/money_tab/") {
		function getMobileOperatingSystem() {
		  	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

		    if (/windows phone/i.test(userAgent)) {
		        return "Windows Phone";
		    }

		    if (/android/i.test(userAgent)) {
		        return "Android";
		    }
		    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
		        return "iOS";
		    }

		    return "unknown";
		}

		function DetectAndServe(){
		    let os = getMobileOperatingSystem();
		    if (os == "Android") {
		        window.location.href = "https://play.google.com/store/apps/details?id=com.joinhomebase.homebase.homebase&hl=en&gl=US&pli=1"; 
		    } else if (os == "iOS") {
		        window.location.href = "https://apps.apple.com/us/app/homebase-employee-scheduling/id871544379";
		    } else {
		        return false;
		    }
		}

		DetectAndServe();
	}
  	
});

/*-------------------
  Amplitude events 12/22
  -------------------*/

$('header a').click(function() {
	var event = "Link Clicked";
	var eventProperties = {
      	"product_area" : "mw_content_link",
	    "event_category": "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
	    "action_type": "click",
	    "filtered_path": window.location.pathname,
	    "full_path" : window.location.pathname + window.location.search + window.location.hash,
	    "query_params" : window.location.search,
	    "screen_height" : screen.height,
	    "screen_width" : screen.width,
	    "link_text" : $(this).text(),
	    "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('footer a').click(function() {
	var event = "Link Clicked";
	var eventProperties = {
      	"product_area" : "mw_content_link",
	    "event_category": "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
	    "action_type": "click",
	    "filtered_path": window.location.pathname,
	    "full_path" : window.location.pathname + window.location.search + window.location.hash,
	    "query_params" : window.location.search,
	    "screen_height" : screen.height,
	    "screen_width" : screen.width,
	    "link_text" : $(this).text(),
	    "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-faq .faq-item a').click(function() {
	var event = "Link Clicked";
	var eventProperties = {
      	"product_area" : "mw_content_link",
	    "event_category": "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
	    "action_type": "click",
	    "filtered_path": window.location.pathname,
	    "full_path" : window.location.pathname + window.location.search + window.location.hash,
	    "query_params" : window.location.search,
	    "screen_height" : screen.height,
	    "screen_width" : screen.width,
	    "link_text" : $(this).text(),
	    "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-app-links a').click(function() {
	var event = "Link Clicked";
	var eventProperties = {
      	"product_area" : "mw_content_link",
	    "event_category": "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
	    "action_type": "click",
	    "filtered_path": window.location.pathname,
	    "full_path" : window.location.pathname + window.location.search + window.location.hash,
	    "query_params" : window.location.search,
	    "screen_height" : screen.height,
	    "screen_width" : screen.width,
	    "link_text" : $(this).text(),
	    "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-hero .button').click(function() {
	var event = "Button Clicked";
    var eventProperties = {
      	"product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      	"event_category": "section_hero",
      	"button_text": $(this).text(),
      	"action_type": "click",
      	"filtered_path": window.location.pathname,
      	"full_path" : window.location.pathname + window.location.search + window.location.hash,
      	"query_params" : window.location.search,
      	"screen_height" : screen.height,
      	"screen_width" : screen.width,
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-benefits .button').click(function() {
	var event = "Button Clicked";
    var eventProperties = {
      	"product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      	"event_category": "section_benefits",
      	"button_text": $(this).text(),
      	"action_type": "click",
      	"filtered_path": window.location.pathname,
      	"full_path" : window.location.pathname + window.location.search + window.location.hash,
      	"query_params" : window.location.search,
      	"screen_height" : screen.height,
      	"screen_width" : screen.width,
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-for-employers .button').click(function() {
	var event = "Button Clicked";
    var eventProperties = {
      	"product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      	"event_category": "section_for_employers",
      	"button_text": $(this).text(),
      	"action_type": "click",
      	"filtered_path": window.location.pathname,
      	"full_path" : window.location.pathname + window.location.search + window.location.hash,
      	"query_params" : window.location.search,
      	"screen_height" : screen.height,
      	"screen_width" : screen.width,
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-faq .button').click(function() {
	var event = "Button Clicked";
    var eventProperties = {
      	"product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      	"event_category": "section_faq",
      	"button_text": $(this).text(),
      	"action_type": "click",
      	"filtered_path": window.location.pathname,
      	"full_path" : window.location.pathname + window.location.search + window.location.hash,
      	"query_params" : window.location.search,
      	"screen_height" : screen.height,
      	"screen_width" : screen.width,
    };
    amplitude.getInstance().logEvent(event, eventProperties);
});

$(".hb-emoji img").hover(function(e){
	$(this).parents(".hb-emoji").children(".hb-emoji-text").fadeIn();
}, function(e){
	$(this).parents(".hb-emoji").children(".hb-emoji-text").fadeOut();
});

// if($(window).width() > 768){
	
	

// } else {
// 	$(".hb-emoji img").click(function(e){
// 		$(this).parents(".hb-emoji").children(".hb-emoji-text").fadeIn();
// 	});
// 	$(document).click(function(e){
// 		$(".hb-emoji-text").fadeOut();
// 	});
// }
