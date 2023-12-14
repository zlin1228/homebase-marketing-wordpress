jQuery(document).ready(function($) {

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

  /**
   * FAQ
   * */

	var faqItems = $('.faq-item .question');

	for (var n = 0; n < faqItems.length; n++) {
	  faqItems[n].onclick = function() {
	 		$(this).parent().toggleClass('open');
	 		hideOthers(this);
	  };
	}

	function hideOthers(exceptThis) {
	  for (var n = 0; n < faqItems.length; n++) {
	    if (faqItems[n] !== exceptThis) {
	      faqItems[n].parentElement.classList.remove("open");
	    }
	  }
	}

	/**
   * Features
   * */

	var featureItems = $('.feature .title');

	for (var n = 0; n < featureItems.length; n++) {
	  featureItems[n].onclick = function() {
	 		$(this).parent().toggleClass('open');
	 		featuresHideOthers(this);
	  };
	}

	function featuresHideOthers(exceptThis) {
	  for (var n = 0; n < featureItems.length; n++) {
	    if (featureItems[n] !== exceptThis) {
	      featureItems[n].parentElement.classList.remove("open");
	    }
	  }
	}

	/**
	 * Slider | Change #slider-control to .section-slider after PMM-1 experiment
	 * */

	var currentIndex = -1;
	var slideTexts = $('.section-slider:not(#slider-exp) .col-left .item');
	var slideImages = $('.section-slider:not(#slider-exp) .col-right .item');

	function showSlide(index) {
    slideTexts.eq(currentIndex).removeClass('active');
    slideImages.eq(currentIndex).removeClass('active');
    var bar = $('.section-slider:not(#slider-exp) .col-left .item .progress-bar').eq(currentIndex);
    bar.stop(true, false);
    currentIndex = index; 
    if ( currentIndex >= slideTexts.length ) {
    	currentIndex = 0;
    }
    slideTexts.eq(currentIndex).addClass('active');
    slideImages.eq(currentIndex).addClass('active');
    var bar = $('.section-slider:not(#slider-exp) .col-left .item .progress-bar').eq(currentIndex);
    bar.width(0);
    bar.animate({'width': '100%'}, 5000, runSlider);
	}

	$('.section-slider:not(#slider-exp) .col-left .item').click(function(){
		showSlide($(this).index());
	});

	function runSlider() {
    showSlide(currentIndex + 1);
	}

	runSlider();
	
});



  /**
   * Pricing Table
   * */

$(".hb-new-toggle-btn .hb-toggle-col").click(function(e){

  if( !$(this).hasClass("active") ){
    var type = $(this).html();
    type.toLowerCase();

    $(".hb-toggle-col").removeClass("active");
    $(this).addClass("active");

    $('.plan-price-value').each(function() {
      $(this).html( $(this).attr(type) );
    });

    $('.crossed-out-price').each(function() {

      if ($(this).css('visibility') == 'visible') {
        $(this).css('visibility', 'hidden');
      }

      else {
        $(this).css('visibility', 'visible');
      }

    });
  }

  var event = "Billing Toggle Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category" : "billing_card",
    "action_type" : "click",
    "filtered_path" : window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "selected_plan" : type
  };

  amplitude.getInstance().logEvent(event, eventProperties);

});


$('.section-pricing-teable .pricing-tables a').click(function() {

  var type = $(".hb-new-toggle-btn .hb-toggle-col.active").attr("type");
  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "billing_card",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "tier_id" : $(".section-pricing-teable .pricing-tables a").index(this) + 1,
    "selected_plan" : type
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  dataLayer.push({ 
    "event": "pricingCTA",
    "ctaURL": $(this).attr('href'),
    "ctaText": "Get started",
    "tier_name": $($(".section-pricing-teable .pricing-tables .plan-title")[$(".section-pricing-teable .pricing-tables a").index(this)]).text(), 
    "annualMonthlyPrice": $($(".section-pricing-teable .pricing-tables .plan-price-value")[$(".section-pricing-teable .pricing-tables a").index(this)]).attr('annual'), 
    "tier_id": $(".section-pricing-teable .pricing-tables a").index(this) + 1
  });

});

$('.section-pricing-teable .footer a').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "billing_card",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr("href"),
    "link_text" : $(this).text()
  };
  amplitude.getInstance().logEvent(event, eventProperties);

});

/**
 * CRO PMM-1
 * Removing this experiment, make changes in original slider code
 * */

var currentIndexExp = -1;
var slideTextsExp = $('#slider-exp .col-left .item');
var slideImagesExp = $('#slider-exp .col-right .item');

function showSlideExp(index) {
  slideTextsExp.eq(currentIndexExp).removeClass('active');
  slideImagesExp.eq(currentIndexExp).removeClass('active');
  var barExp = $('#slider-exp .col-left .item .progress-bar').eq(currentIndexExp);
  barExp.stop(true, false);
  currentIndexExp = index; 
  if ( currentIndexExp >= slideTextsExp.length ) {
    currentIndexExp = 0;
  }
  slideTextsExp.eq(currentIndexExp).addClass('active');
  slideImagesExp.eq(currentIndexExp).addClass('active');
  var barExp = $('#slider-exp .col-left .item .progress-bar').eq(currentIndexExp);
  barExp.width(0);
  barExp.animate({'width': '100%'}, 5000, runSliderExp);
}

$('#slider-exp .col-left .item').click(function(){
  showSlideExp($(this).index());
});

function runSliderExp() {
  showSlideExp(currentIndexExp + 1);
}  

function croPmmMain() {
  $('#hero-exp .subheading').text('One easy app to build schedules, communicate changes, and keep your team accountable.');
  $('.section-rating.halfbg#rating-exp .rating-header').css('flex-direction','column');
  $('.section-rating.halfbg#rating-exp .rating-header h2').css('margin-bottom','1rem');
  $('.section-rating.halfbg#rating-exp .rating-header h3').css('margin-bottom','0');
  $('#slider-control').hide();
  $('#slider-exp').show();
  $('#integrations-control').hide();
  $('#integrations-exp').show();
  $('#quote-control').hide();
  $('#quote-exp').show();
  $('#faq-exp .faq-item:nth-child(7)').show();
  runSliderExp();
}

function croPmmSem() {
  $('#hero-exp .subheading').text('One easy app to build schedules, communicate changes, and keep your team accountable.');
  $('#slider-control').hide();
  $('#slider-exp').show();
  $('#integrations-control').hide();
  $('#integrations-exp').show();
  $('#faq-exp .faq-item:nth-child(7)').show();
  runSliderExp();
}

function croPmmSemLP() {
  $('#hero-exp .subheading').text('One easy app to build schedules, communicate changes, and keep your team accountable.');
  $('#hero-exp .hero-sub-text-after-btns').html('<span class="bottom-lines">No credit card required!</span>');
  $('#logos-exp').show();
  $('#stacked-exp').show();
  $('#stacked-exp').addClass('imp');
  $('#slider-control').hide();
  $('#slider-exp').show();
  $('#rating-control').hide();
  $('#integrations-control').hide();
  $('#integrations-exp').show();
  $('#footer-cta-control').hide();
  $('#footer-cta-exp').show();
  $('#pricing-exp').show();
  $('#signup-control').hide();
  $('#quote-control').hide();
  $('#faq-exp .faq-item:nth-child(7)').show();
  $('#faq-exp .headline').text('Frequently Asked Questions');
  runSliderExp();
}

function croPmmSolutions() {
  $('#hero-exp h2').text('One easy app to take control of your day-to-day work.');
  $('#hero-exp .subheading').text('Save time on scheduling, time tracking, payroll, HR, and more — all in one app.');
  $('#slider-control').hide();
  $('#slider-exp').show();
  $('#integrations-control').hide();
  $('#integrations-exp').show();
  $('#faq-exp-solutions .faq-item:nth-child(-n+7)').hide();
  $('#faq-exp-solutions .faq-item:nth-child(n+8)').show();
  runSliderExp();
}

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
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "product_tab",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "selected_tab" : selected_tab,
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('#create-account').click(function() {

  var event = "Button Clicked";
	var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "hero_section",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
  };
	
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);
  
  var email = $('.homeform').val();
  if( false ){ //email == '' || IsEmail(email) == false ) { //Disabling the email validation
    $('.homeform').addClass("error");

    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "email_capture",
      "action_type": "shown",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Invalid Email",

    };
    
    
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
      
});

$('.homeform').focus(function() {

  var event = "Field Focused";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "email_capture",
    "action_type": "focus",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "field" : "email",
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-rating .plogo a').each(function() {
  var link_text = "";
  $(this).click(function() {
    var link_url = $(this).attr('href');
    if ($(this).attr('href') == 'https://www.capterra.com/p/153076/Homebase/') {
      link_text = "capterra";
    }
    else if ($(this).attr('href') == 'https://www.fool.com/the-blueprint/homebase-review/') {
      link_text = "blueprint";
    }
    else if ($(this).attr('href') == 'https://apps.apple.com/us/app/homebase-employee-scheduling/id871544379') {
      link_text = "app_store";
    }
    else if ($(this).attr('href') == 'https://www.investopedia.com/best-employee-scheduling-software-5081541#best-overall-homebase') {
      link_text = "investopedia";
    }
    var event = "Rating Card Clicked";
    var eventProperties = {
      "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "ratings",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_url" : link_url,
      "link_text" : link_text,

    };
    
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });
  
});

$('.section-slider .button').click(function() {

var event = "Button Clicked";
var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
  };

  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-slider .col-left .item .title').click(function() {

var event = "Feature Slider Clicked";
var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "feature_number" : $(this).parent().index() + 1,
    "feature_text": $('h3', this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,    
  };

  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-faq .question').click(function() {

var event = "FAQ Accordion Clicked";
var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "faq_section",
    "question_number" : $(this).parent().index() + 1,
    "question_text": $('p', this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,    
  };

  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-features .title').click(function() {

var event = "Feature List Clicked";
var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_list_section",
    "feature_number" : $(this).parent().index() + 1,
    "feature_text": $('h3', this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,    
  };

  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-integration a').click(function() {

	var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "integration-section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-signup-banner a').click(function() {

var event = "Button Clicked";
var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "middle_cta",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
  };

  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-faq a').click(function() {

	var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "faq_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-features a').click(function() {

	var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_list_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-slider .subtitle a').click(function() {

	var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

// try the demo button click
$('.section-hero .button.primary').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "hero_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "button_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.right-btn-7843678').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "hero_section",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "button_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-try-demo .back-text').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "back_to_schedule_page",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-bottom-floating-cta .button.cta-btn').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "bottom_banner",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "button_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "link_type" : $(this).attr('href').replaceAll("/","").replaceAll("-","_"),
  };
  
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

});


window.addEventListener('message', function(event) {

      // It's important to check the origin in case there are other scripts sending postMessages
      if (event.origin === 'https://demo.arcade.software') {
        var evts = JSON.stringify(event.data, null, 2)
        var json = JSON.parse(evts);
        
        // console.log("Arcade Events Starts From Here----------------");
        // console.log(evts);
        // console.log("Arcade Events Ends Here----------------");
        

        if(json.arcade !== undefined && json.arcade.steps !== undefined){
          var steps = json.arcade.steps;

          // For dekstop view
          if(json.arcade.id == "k5y1BxpllFxt9HYEVskL"){

            for (var i=0; i < steps.length; i++) {
            
              if(steps[i].id == "c734e0d3-9b02-44d5-bf85-f7c0b02adc6b" && steps[i].isActive == true){

                // order:- 2 //
                var event = "Arcade Demo Module Start";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "1",
                  "module_name" : "Build a Schedule",

                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);

              } else if(steps[i].id == "521cc174-e5eb-4f86-ab1e-dd764204758d" && steps[i].isActive == true){
                
                // order:- 26 //
                var event = "Arcade Demo Module Complete";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "1",
                  "module_name" : "Build a Schedule",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "be9bb412-1fcb-4e99-a35c-5106dacb95ed" && steps[i].isActive == true){
               
               // order:- 28 //
                var event = "Arcade Demo Module Start";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "2",
                  "module_name" : "Switch scheduling views",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "2217278e-185a-4bc6-93b1-4275c6680206" && steps[i].isActive == true){
               
               // order:- 35 //
                var event = "Arcade Demo Module Complete";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "2",
                  "module_name" : "Switch scheduling views",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "1990217c-3681-46cb-9aaa-0a8b7b9e8157" && steps[i].isActive == true){
               
               // order:- 37 //
                var event = "Arcade Demo Module Start";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "3",
                  "module_name" : "Change team availability",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "f67e509e-12cf-45f3-8bb1-fe721f68eed7" && steps[i].isActive == true){
               
               // order:- 46 //
                var event = "Arcade Demo Module Complete";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "3",
                  "module_name" : "Change team availability",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "93675336-a726-42c0-beb8-24cf926db556" && steps[i].isActive == true){
               
               // order:- 48 //
                var event = "Arcade Demo Module Start";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "4",
                  "module_name" : "Approve claimed shifts",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              } else if(steps[i].id == "41bf2a27-a41d-40c3-8231-dcc167b175ae" && steps[i].isActive == true){
               
               // order:- 52 //
                var event = "Arcade Demo Module Complete";
                var eventProperties = {
                  "product_area" : "mw_employee_scheduling_demo",
                  "event_category": "product_demo",
                  "action_type": "click",
                  "filtered_path": window.location.pathname,
                  "full_path" : window.location.pathname + window.location.search + window.location.hash,
                  "query_params" : window.location.search,
                  "screen_height" : screen.height,
                  "screen_width" : screen.width,
                  "module_number": "4",
                  "module_name" : "Approve claimed shifts",
                };
                
                if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                amplitude.getInstance().logEvent(event, eventProperties);
              
              }

            }

          } else if(json.arcade.id == "ciTDhtPcGHfrs90ehpE9"){
            // For Mobile view

              for (var i=0; i < steps.length; i++) {
            
                if(steps[i].id == "7d613055-ccc6-4597-b822-c4f4a567e6fe" && steps[i].isActive == true){

                  // order:- 2 //
                  var event = "Arcade Demo Module Start";
                  var eventProperties = {
                    "product_area" : "mw_employee_scheduling_demo",
                    "event_category": "product_demo",
                    "action_type": "click",
                    "filtered_path": window.location.pathname,
                    "full_path" : window.location.pathname + window.location.search + window.location.hash,
                    "query_params" : window.location.search,
                    "screen_height" : screen.height,
                    "screen_width" : screen.width,
                    "module_number": "1",
                    "module_name" : "Create a Shift",

                  };
                  
                  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                  amplitude.getInstance().logEvent(event, eventProperties);

                } else if(steps[i].id == "13987c13-6bfd-4b8c-a3a8-39e45bd52f0c" && steps[i].isActive == true){

                  // order:- 15 //
                  var event = "Arcade Demo Module Complete";
                  var eventProperties = {
                    "product_area" : "mw_employee_scheduling_demo",
                    "event_category": "product_demo",
                    "action_type": "click",
                    "filtered_path": window.location.pathname,
                    "full_path" : window.location.pathname + window.location.search + window.location.hash,
                    "query_params" : window.location.search,
                    "screen_height" : screen.height,
                    "screen_width" : screen.width,
                    "module_number": "1",
                    "module_name" : "Create a Shift",

                  };
                  
                  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                  amplitude.getInstance().logEvent(event, eventProperties);

                } else if(steps[i].id == "254d1220-6375-479e-8746-b6ec0dbb432a" && steps[i].isActive == true){

                  // order:- 16 //
                  var event = "Arcade Demo Module Start";
                  var eventProperties = {
                    "product_area" : "mw_employee_scheduling_demo",
                    "event_category": "product_demo",
                    "action_type": "click",
                    "filtered_path": window.location.pathname,
                    "full_path" : window.location.pathname + window.location.search + window.location.hash,
                    "query_params" : window.location.search,
                    "screen_height" : screen.height,
                    "screen_width" : screen.width,
                    "module_number": "2",
                    "module_name" : "Pickup an open shift",

                  };
                  
                  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                  amplitude.getInstance().logEvent(event, eventProperties);

                } else if(steps[i].id == "a61eec97-8381-4257-aa05-d2ea6d4b3528" && steps[i].isActive == true){

                  // order:- 23 //
                  var event = "Arcade Demo Module Complete";
                  var eventProperties = {
                    "product_area" : "mw_employee_scheduling_demo",
                    "event_category": "product_demo",
                    "action_type": "click",
                    "filtered_path": window.location.pathname,
                    "full_path" : window.location.pathname + window.location.search + window.location.hash,
                    "query_params" : window.location.search,
                    "screen_height" : screen.height,
                    "screen_width" : screen.width,
                    "module_number": "2",
                    "module_name" : "Pickup an open shift",

                  };
                  
                  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
                  amplitude.getInstance().logEvent(event, eventProperties);

                }

              }

          }
        }
      }
    },
    false
  );


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
  