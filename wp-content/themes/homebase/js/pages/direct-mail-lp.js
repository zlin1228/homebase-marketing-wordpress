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
	
});


/*-------------------
  Amplitude events 12/22
  -------------------*/

$('.section-2-columns a').click(function() {
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

$('.section-rating a').click(function() {
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

$('.section-bp-caption a').click(function() {
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

$('.section-cta-banner a').click(function() {
  var event = "Button Clicked";
    var eventProperties = {
        "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
        "event_category": "section_cta_banner",
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


var promocode = "";
if (window.location.pathname == "/deal/") {
  promocode = "RV3HF9";
}
else if (window.location.pathname == "/offer/") {
  promocode = "WK6DT4";
}
else if (window.location.pathname == "/promo/") {
  promocode = "UC4SM7";
}
else if (window.location.pathname == "/free/") {
  promocode = "G8KJ24";
}

$('.promocode').focus(function() {
  var event = "Field Focused";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "access_code_capture",
    "action_type": "focus",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "field" : "access code",
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('.cta-promocode').focus(function() {
  var event = "Field Focused";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "access_code_capture",
    "action_type": "focus",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "field" : "access code",
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('.signup-promocode').focus(function() {
  var event = "Field Focused";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "access_code_capture",
    "action_type": "focus",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "field" : "access code",
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('.promocode').keyup(function() {
  var promocodeInput = $('.promocode').val().toUpperCase();
  if (promocodeInput !== '') {
    $('.section-hero .message.error').hide();
    $('.promocode').removeClass('error');
  }
  /*if (promocodeInput == promocode) {
    $('.section-hero .message.success').show();
    $('.section-hero .message.error').hide();
    $('.promocode').removeClass('error');
  }
  else {
    $('.section-hero .message.success').hide();
  }*/
});

$('.cta-promocode').keyup(function() {
  var promocodeInput = $('.cta-promocode').val().toUpperCase();
  if (promocodeInput !== '') {
    $('.section-cta-banner .message.error').hide();
    $('.cta-promocode').removeClass('error');
  }
  /*if (promocodeInput == promocode) {
    $('.section-cta-banner .message.success').show();
    $('.section-cta-banner .message.error').hide();
    $('.cta-promocode').removeClass('error');
  }
  else {
    $('.section-cta-banner .message.success').hide();
  }*/
});

$('.signup-promocode').keyup(function() {
  var promocodeInput = $('.signup-promocode').val().toUpperCase();
  if (promocodeInput !== '') {
    $('.section-signup-widget .message.error').hide();
    $('.cta-promocode').removeClass('error');
  }
  /*if (promocodeInput == promocode) {
    $('.section-signup-widget .message.success').show();
    $('.section-signup-widget .message.error').hide();
    $('.cta-promocode').removeClass('error');
  }
  else {
    $('.section-signup-widget .message.success').hide();
  }*/
});


$('#hero-signup-form').submit(function() {
  var promocodeInput = $('.promocode').val();

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
    "access_code" : promocodeInput,
  };

  amplitude.getInstance().logEvent(event, eventProperties);

  if( promocodeInput == '' && window.location.pathname !== '/free/' ) {

    $('.promocode').addClass('error');
    $('.section-hero .message.error').show();
    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "section_hero",
      "action_type": "shown",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Empty Promocode"
    };
    
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
  
});

$('#cta-promocode-form').submit(function() {
  var promocodeInput = $('.cta-promocode').val();

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
    "access_code" : promocodeInput,
  };

  amplitude.getInstance().logEvent(event, eventProperties);

  if( promocodeInput == '' && window.location.pathname !== '/free/' ) {

    $('.cta-promocode').addClass('error');
    $('.section-cta-banner .message.error').show();
    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "section_hero",
      "action_type": "shown",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Empty Promocode"
    };
    
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
  
});

$('#signup-promocode-form').submit(function() {
  var promocodeInput = $('.signup-promocode').val();

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
    "access_code" : promocodeInput,
  };

  amplitude.getInstance().logEvent(event, eventProperties);

  if( promocodeInput == '' && window.location.pathname !== '/free/' ) {

    $('.signup-promocode').addClass('error');
    $('.section-signup-widget .message.error').show();
    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "section_hero",
      "action_type": "shown",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Empty Promocode"
    };
    
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
  
});
