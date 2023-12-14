( function( $ ) {  

  $(window).scroll(function(event){
  
    if($(window).width() > 960 && $('#quote-slider').length > 0){
      $('#quote-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        arrows: true
      });
    }

    $(window).off(event);       

  });

  /**
   * Hero video popup
   * */
  $('.hero-video-popup a').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true,
    iframe: {
      markup: '<div class="mfp-iframe-scaler hero-video">' +
        '<div class="mfp-close hero-popup-video-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
        '</div>',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
        }
      }
    },
    callbacks: {
      open: function() {
        var event = "Hero Video Popup Opened";
        var eventProperties = {
          "product_area" : "mw_homepage",
          "event_category": "hero_video",
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
      },
      close: function() {
        var event = "Hero Video Popup Closed";
        var eventProperties = {
          "product_area" : "mw_homepage",
          "event_category": "hero_video",
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
      },
    }
  });

  //CRO-14

  $('.section-hero .button.primary.reverse').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true,
    iframe: {
      markup: '<div class="mfp-iframe-scaler hero-video">' +
        '<div class="mfp-close hero-popup-video-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
        '</div>',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
        }
      }
    },
    callbacks: {
      open: function() {
        var event = "Hero Video Popup Opened";
        var eventProperties = {
          "product_area" : "mw_homepage",
          "event_category": "hero_video",
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
      },
      close: function() {
        var event = "Hero Video Popup Closed";
        var eventProperties = {
          "product_area" : "mw_homepage",
          "event_category": "hero_video",
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
      },
    }
  });

  /**
   * Clients logos slider
   * */
  if( $('#logo-slider').length > 0 ) {
    $("#logo-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      customPaging : function(slider, i) {
        return '<div class="dot">'+$(slider.$slides[i]).attr("data-title")+'</div>';
      },
      responsive: [{ 
          breakpoint: 640,
          settings: {
            dots: true,
            arrows: true,
            customPaging : function(slider, i) {
              return '<div class="dot">'+$(slider.$slides[i]).attr("data-title")+'</div>';
            },
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
            nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
          } 
      }]
    });
  }

  if( $('#video-quote').length > 0 ) {
    $('#video-quote').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true,
      iframe: {
        markup: '<div class="mfp-iframe-scaler">' +
          '<div class="mfp-close"></div>' +
          '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
          '</div>',
      }
    });
  }

  /**
   * CRO-14 Nav buttons
   * */

  var headerOffset = 0;
  if ($('.eoy-countdown')) {
    headerOffset = $('header').outerHeight() + $('.eoy-countdown').outerHeight();
  }
  else {
    headerOffset = $('header').outerHeight();
  }
  if ($('.section-2-columns#cro14var1 .nav-buttons .button').length > 0) {    
    $('.section-2-columns#cro14var1 .nav-buttons .button').click(function(e) {
      e.preventDefault();
      var element = $('.section-2-columns#cro14var1 .section-main .row')[$(this).index()];
      var elementPosition = element.getBoundingClientRect().top;
      var offsetPosition = elementPosition + window.pageYOffset - headerOffset;  
      window.scrollTo({
           top: offsetPosition,
           behavior: "smooth"
      });
    });
  }

  /*-------------------
  Amplitude events 2022
  -------------------*/

  $('#create-account').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "email_capture",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "get_started"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);
    
    var email = $('.homeform').val();
    if( email == '' || IsEmail(email) == false ) {
      $('.homeform').addClass("error");

      var event = "Error Message Shown";
      var eventProperties = {
        "product_area" : "mw_homepage",
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

  $('.section-2-columns#cro14var1 .nav-buttons .button').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "page_nav",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_number" : $(this).index() + 1,
      "button_text" : $(this).text(),
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);
        
  });

  $('.section-hero .button.primary:not(.reverse)').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "hero_section",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "Get started"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);
        
  });

  $('.section-hero .button.primary.reverse').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "hero_section",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "What is Homebase"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);
        
  });

  $('.section-signup-cta-banner .button').click(function() {
  
    var event = "Get Started For Free Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "signup_cta",
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

  $('.section-clients-logos .dot').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "customers",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "customers_tab"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);  

  });

  $('body').on('click', '.section-clients-logos .slick-next', function() {
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "customers",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "customers_tab"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('body').on('click', '.section-clients-logos .slick-prev', function() {
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "customers",
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

  $('.section-customer-video-quote .button').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_page_stories",
      "event_category": "mw_page_stories",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "watch_videos_started"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }   
    amplitude.getInstance().logEvent(event, eventProperties);  

  });

  $('.section-customer-video-quote #video-quote').click(function() {
  
    var event = "Video Play Button Clicked";
    var eventProperties = {
      "product_area" : "mw_page_stories",
      "event_category": "mw_page_stories",
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

  $('.section-new-cta .button').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_footer",
      "event_category": "banner",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "try_homebase_free"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);  

  });

  $('.homeform').focus(function() {

    var event = "Field Focused";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "email_capture",
      "action_type": "focus",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "field" : "email"
    };

    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-2-columns .text-link-arrow').each(function() {
    var link_type = "";
    $(this).click(function() {
      if ($(this).attr('href') == '/time-clock/') {
        link_type = "time_tracking";
      }
      else if ($(this).attr('href') == '/employee-scheduling/') {
        link_type = "scheduling";
      }
      else if ($(this).attr('href') == '/payroll/') {
        link_type = "payroll";
      }
      else if ($(this).attr('href') == '/team-communication/') {
        link_type = "team_communication";
      }
      else if ($(this).attr('href') == '/hiring-and-onboarding/') {
        link_type = "hiring_and_onboarding";
      }
      else if ($(this).attr('href') == '/hr-compliance/') {
        link_type = "hr_compliance";
      }
      else if ($(this).attr('href') == '/employee-happiness/') {
        link_type = "employee_happiness";
      }
      else if ($(this).attr('href') == '/labor-cost/') {
        link_type = "labor_cost";
      }
      var event = "Learn More Link Clicked";
      var eventProperties = {
        "product_area" : "mw_homepage",
        "event_category": "feature_section",
        "action_type": "click",
        "filtered_path": window.location.pathname,
        "full_path" : window.location.pathname + window.location.search + window.location.hash,
        "query_params" : window.location.search,
        "screen_height" : screen.height,
        "screen_width" : screen.width,
        "link_type" : link_type
      };
      if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
      amplitude.getInstance().logEvent(event, eventProperties);

    });
    
  });

  $('.section-cta-video .button').click(function() {

    var event = "Watch Videos Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "greenlight",
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
      var event = "Rating Card Clicked";
      var eventProperties = {
        "product_area" : "mw_homepage",
        "event_category": "ratings",
        "action_type": "click",
        "filtered_path": window.location.pathname,
        "full_path" : window.location.pathname + window.location.search + window.location.hash,
        "query_params" : window.location.search,
        "screen_height" : screen.height,
        "screen_width" : screen.width,
        "link_url" : link_url,
        "link_text" : link_text
      };
      if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
        var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
        for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
      }   
      amplitude.getInstance().logEvent(event, eventProperties);

    });
    
  });
    
  $('body').on('click', '.section-business-tab .slick-dots .dot', function() {
    var tab = "";
    if ($(this).text() == 'Food & beverage') {
      tab = "food_beverage";
    }
    else if ($(this).text() == 'Retail') {
      tab = "retail";
    }
    else if ($(this).text() == 'Beauty & wellness') {
      tab = "beauty_wellness";
    }
    else if ($(this).text() == 'Medical & veterinary') {
      tab = "medical_veterinary";
    }
    else if ($(this).text() == 'Home & repair') {
      tab = "home_repair";
    }
    else if ($(this).text() == 'Services') {
      tab = "services";
    }
    else if ($(this).text() == 'Hospitality & leisure') {
      tab = "hospitality_leisure";
    }
    var event = "Customers Tab Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "customers",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "tab" : tab
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);

    });

  $('.section-intro-product .button.primary').click(function() {

    var event = "Get Started Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "short_feature",
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

  $('.section-intro-product .text-link-arrow').click(function() {
    var link_url = $(this).attr('href');
    var link_text = "";
    if ($(this).text() == "Hiring") {
      link_text = "hiring";
    }
    else if ($(this).text() == "Onboarding") {
      link_text = "onboarding";
    }
    else if ($(this).text() == "Scheduling") {
      link_text = "scheduling";
    }
    else if ($(this).text() == "Time clocks & timesheets") {
      link_text = "timeclocks_timesheets";
    }
    else if ($(this).text() == "Communication & performance") {
      link_text = "communication_performance";
    }
    else if ($(this).text() == "Remote & field operations") {
      link_text = "remote";
    }
    else if ($(this).text() == "Painless payroll") {
      link_text = "payroll";
    }
    else if ($(this).text() == "Pay advances") {
      link_text = "pay_advance";
    }
    else if ($(this).text() == "Team roster & paperwork") {
      link_text = "team_roster";
    }
    else if ($(this).text() == "Time off") {
      link_text = "time_off";
    }
    else if ($(this).text() == "Employee happiness") {
      link_text = "employee_happiness";
    }
    else if ($(this).text() == "Health & safety") {
      link_text = "health_safety";
    }
    else if ($(this).text() == "Labor cost controls") {
      link_text = "labor_cost";
    }
    else if ($(this).text() == "HR & compliance") {
      link_text = "hr_compliance";
    }
    else if ($(this).text() == "Payroll taxes & filings") {
      link_text = "payroll_taxes_filings";
    }
    var event = "Product Link Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "short_feature",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_text" : link_text,
      "link_url" : link_url
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-signup-widget .button.primary').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "feature_checklist",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "button_text" : "create_account"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }   
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('body').on('click', '.section-customer-quote .slick-next', function() {
    var card_type = "";
    var next_card_heading = $('.section-customer-quote .slick-active h3').text();
    if (next_card_heading == "Work from anywhere") {
      card_type = "improve_communication";
    }
    else if (next_card_heading == "Save time") {
      card_type = "work_anywhere";
    }
    else if (next_card_heading == "Get rid of the paperwork") {
      card_type = "save_time";
    }
    else if (next_card_heading == "Improve communication") {
      card_type = "get_rid_paperwork";
    }
    var event = "Card Viewed";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "testimonial",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "card_type" : card_type
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('body').on('click', '.section-customer-quote .slick-prev', function() {
    var card_type = "";
    var next_card_heading = $('.section-customer-quote .slick-active h3').text();
    if (next_card_heading == "Work from anywhere") {
      card_type = "save_time";
    }
    else if (next_card_heading == "Save time") {
      card_type = "get_rid_paperwork";
    }
    else if (next_card_heading == "Get rid of the paperwork") {
      card_type = "improve_communication";
    }
    else if (next_card_heading == "Improve communication") {
      card_type = "work_anywhere";
    }
    var event = "Card Viewed";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "testimonial",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "card_type" : card_type
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }   
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-new-features .text-link-arrow').click(function() {
    var link_url = $(this).attr('href');
    var link_text = "";
    if ($(this).text() == "View data") {
      link_text = "data";
    }
    else if ($(this).text() == "View resources") {
      link_text = "resources";
    }
    else if ($(this).text() == "Review your guide") {
      link_text = "labor_guide";
    }
    else if ($(this).text() == "Read our blog") {
      link_text = "blog";
    }
    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "small_mighty",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_text" : link_text,
      "link_url" : link_url
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }   
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-aboutus p a').click(function() {
    var link_url = $(this).attr('href');
    var link_text = "";
    if (link_url == "/employee-scheduling/") {
      link_text = "scheduling";
    }
    else if (link_url == "/time-clock/") {
      link_text = "timeclocks_timesheets";
    }
    else if (link_url == "/payroll/") {
      link_text = "payroll";
    }
    else if (link_url == "/team-communication/") {
      link_text = "communication_performance";
    }
    else if (link_url == "/hiring-and-onboarding/") {
      link_text = "hiring, onboarding";
    }
    else if (link_url == "/hr-compliance/") {
      link_text = "hr_compliance";
    }
    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "support_card",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_text" : link_text,
      "link_url" : link_url
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }  
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-aboutus .contact-link').click(function() {

    var event = "Contact Us Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "support_card",
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

  $('.section-aboutus .phone-number').click(function() {

    var event = "Call Clicked";
    var eventProperties = {
      "product_area" : "mw_homepage",
      "event_category": "support_card",
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

}( jQuery ) );


function isElementInViewport (el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }

  var rect = el.getBoundingClientRect();

  return (
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

function toggleHeroType() {
  $('.section-hero .col-right').toggleClass('hidden');
}

function cro14Var2() {
  $('.section-hero').eq(0).hide();
  $('.section-hero#cro14var2').show();
}

function cro14Var1() {
  $('.section-intro-product').hide();
  $('.section-customer-video-quote').css('margin-bottom', 0);
  $('.section-2-columns').eq(0).hide();
  $('.section-2-columns#cro14var1').show();
}
/*var socialModuleViewed = 0;

$(window).scroll(function(){
  if ($('body').hasClass('var1')) {
    if(isElementInViewport($('.section-signup-cta-banner')) && socialModuleViewed == 0) {
      var event = "Social Proof Module Viewed";
      var eventProperties = {
        "product_area" : "mw_homepage",
        "event_category": "variant1",
        "action_type": "scroll",
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

      socialModuleViewed = 1;
    }  
  }
  else if ($('body').hasClass('var2')) {
    if(isElementInViewport($('.section-signup-cta-banner')) && socialModuleViewed == 0) {
      var event = "Social Proof Module Viewed";
      var eventProperties = {
        "product_area" : "mw_homepage",
        "event_category": "variant2",
        "action_type": "scroll",
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

      socialModuleViewed = 1;
    }  
  }
  else {
    if(isElementInViewport($('.section-rating')) && socialModuleViewed == 0) {
      var event = "Social Proof Module Viewed";
      var eventProperties = {
        "product_area" : "mw_homepage",
        "event_category": "control",
        "action_type": "scroll",
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

      socialModuleViewed = 1;
    }  
  }
});*/
  
