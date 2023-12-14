jQuery(document).ready(function($) {

	/**
	 * Slider
	 * */

	var currentIndex = -1;
	var slideTexts = $('.section-slider .col-left .item');
	var slideImages = $('.section-slider .col-right .item');

	function showSlide(index) {
    slideTexts.eq(currentIndex).removeClass('active');
    slideImages.eq(currentIndex).removeClass('active');
    var bar = $('.section-slider .col-left .item .progress-bar').eq(currentIndex);
    bar.stop(true, false);
    currentIndex = index; 
    if ( currentIndex >= slideTexts.length ) {
    	currentIndex = 0;
    }
    slideTexts.eq(currentIndex).addClass('active');
    slideImages.eq(currentIndex).addClass('active');
    var bar = $('.section-slider .col-left .item .progress-bar').eq(currentIndex);
    bar.width(0);
    bar.animate({'width': '100%'}, 5000, runSlider);
	}

	$('.section-slider .col-left .item').click(function(){
		showSlide($(this).index());
	});

	function runSlider() {
    showSlide(currentIndex + 1);
	}

	runSlider();
	
});

/*-------------------
Amplitude events 2022
-------------------*/

$('#menu-features-4 a').click(function() {  
  var selected_tab = "";
  if ($(this).text() == "Scheduling") {
    selected_tab = "scheduling";
  }
  else if ($(this).text() == "Time clock") {
    selected_tab = "time-clock";
  }
  else if ($(this).text() == "Payroll") {
    selected_tab = "payroll";
  }
  else if ($(this).text() == "Hiring & onboarding") {
    selected_tab = "hiring-onboarding";
  }
  else if ($(this).text() == "Team communication") {
    selected_tab = "team-communication";
  }
  else if ($(this).text() == "Employee happiness") {
    selected_tab = "employee-happiness";
  }
  else if ($(this).text() == "HR & compliance") {
    selected_tab = "hr-compliance";
  }
  else if ($(this).text() == "Integrations") {
    selected_tab = "integrations";
  }
  var event = "Tab Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "product_tab",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "selected_tab" : selected_tab
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('#create-account').click(function() {
  var event = "Button Clicked";
	var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "hero_section",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
	amplitude.getInstance().logEvent(event, eventProperties);
  
  var email = $('.homeform').val();
  if( email == '' || IsEmail(email) == false ) {
    $('.homeform').addClass("error");

    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "email_capture",
      "action_type": "shown",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Invalid Email"
    };
    
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
      
});

$('.homeform').focus(function() {
  var event = "Field Focused";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "email_capture",
    "action_type": "focus",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "field" : "email"
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-slider .button').click(function() {
	var event = "Button Clicked";
	var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
	amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-slider .col-left .item .title').click(function() {
	var event = "Feature Slider Clicked";
	var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "feature_number" : $(this).parent().index() + 1,
    "feature_text": $('h3', this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width    
  };
	amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-cta-banner a').click(function() {
	var event = "Button Clicked";
	var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "bottom_cta",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
	amplitude.getInstance().logEvent(event, eventProperties);
});

$('.section-slider .subtitle a').click(function() {
	var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_")
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

/**
 * GA 4
 * */

$('.section-slider .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});
  