( function( $ ) {

  $(window).on('scroll',function(){
    var st = $(window).scrollTop();

    if(st > 0) {
      $("header").css('background', 'white');
    }
    else {
      $("header").css('background', 'none');
    }
  });
	
}( $ ) );


/**
 * Amplitude events
 * */

$('.section-hero .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_free_timeclock_3_lp",
    "event_category": "hero_section",
    "action_type": "click",
    "button_text": $(this).text(),
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-signup-banner .button').eq(0).click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_free_timeclock_3_lp",
    "event_category": "feature_section",
    "action_type": "click",
    "button_text": $(this).text(),
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-signup-banner .button').eq(1).click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_free_timeclock_3_lp",
    "event_category": "middle_cta",
    "action_type": "click",
    "button_text": $(this).text(),
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

});

/*$('.section-cta-banner .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_page_free_timeclock_3_lp",
    "event_category": "footer_cta",
    "action_type": "click",
    "button_text": $(this).text(),
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

});*/