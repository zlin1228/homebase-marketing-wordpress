jQuery(document).ready(function(){

  $('.section-hero-paycheck-lp a').click(function() {

    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_paycheck_lp",
      "event_category": "mw_hero",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_url" : $(this).attr('href'),
      "link_text" : $(this).text()
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-hero-paycheck-lp .logo-link').click(function() {

    var event = "Homebase Logo Clicked";
    var eventProperties = {
      "product_area" : "mw_header",
      "event_category": "top_nav",
      "action_type": "click",
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
  
});

