jQuery(document).ready(function(){

  $('.section-cta .button').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_paycheck_calculator",
      "event_category": "mw_homebase_features",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : $(this).text()
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);  

  });
  
});

