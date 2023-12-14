( function( $ ) {

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

  if (window.location.hash == "#startvideo") {

    $('#hero-popup-video').magnificPopup({
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
        patterns: {
          youtube: {
            index: 'youtube.com/',
            id: 'v=',
            src: 'https://www.youtube.com/embed/%id%?autoplay=1'
          }
        }
      }
    }).magnificPopup('open');
  }

  $('#hero-popup-video').magnificPopup({
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
        patterns: {
          youtube: {
            index: 'youtube.com/',
            id: 'v=',
            src: 'https://www.youtube.com/embed/%id%?autoplay=1'
          }
        }
      }
    });

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
   * Awards carousel
   * */

  $('.awards').slick({
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    pauseOnHover: false,
    cssEase: 'linear',
    arrows: false,
    centerMode: true,
    variableWidth: true
  });

  /**
   * Slider
   * */

  var currentIndex = -1;
  var slideTexts = $('.section-slider .col-left .item');
  var slideImages = $('.section-slider .col-right .item');

  function showSlide(index) {
    slideTexts.eq(currentIndex).removeClass('active');
    slideImages.eq(currentIndex).removeClass('active');
    currentIndex = index; 
    if ( currentIndex >= slideTexts.length ) {
      currentIndex = 0;
    }
    slideTexts.eq(currentIndex).addClass('active');
    slideImages.eq(currentIndex).addClass('active');    
  }

  $('.section-slider .col-left .item').click(function(){
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    }
    else {
      showSlide($(this).index());
      var eoyMobileHeight = $('.eoy-countdown.mobile').outerHeight();
      var headerHeight = $('header').outerHeight();
      if ($(window).width() < 769) {
        $([document.documentElement, document.body]).animate({
          scrollTop: $(this).offset().top - eoyMobileHeight - headerHeight
        }, 500);
      }
    }    
  });

  function runSlider() {
    showSlide(currentIndex + 1);
  }

  if ($(window).width() > 768) {
    showSlide(0);
  }

  //runSlider();

  /**
   * Request a demo popup
   * */

  $('.button.demo').click(function(e) {
    $('.demo-popup').css('display','flex');

    var event = "Modal Viewed";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "request_demo_popup", 
      "modal_source": "modal_source",
      "modal_version": "modal_version", 
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width
    };
    amplitude.getInstance().logEvent(event, eventProperties);
    e.preventDefault();
  });

  $('.demo-popup .close').click(function() {
    $('.demo-popup').css('display','none');

    var event = "Dismiss Clicked";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "request_demo_popup", 
      "modal_source": "modal_source",
      "modal_version": "modal_version", 
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width
    };
    amplitude.getInstance().logEvent(event, eventProperties);
  });

  $(document).mouseup(function(e) {
      var container = $('.demo-popup .container');

      if (!container.is(e.target) && container.has(e.target).length === 0) 
      {

        if ($('.demo-popup').css('display') == "flex") {
          var event = "Dismiss Clicked";
          var eventProperties = {
            "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
            "event_category": "request_demo_popup", 
            "modal_source": "modal_source",
            "modal_version": "modal_version", 
            "filtered_path": window.location.pathname,
            "full_path" : window.location.pathname + window.location.search + window.location.hash,
            "query_params" : window.location.search,
            "screen_height" : screen.height,
            "screen_width" : screen.width
          };
          amplitude.getInstance().logEvent(event, eventProperties);

          $('.demo-popup').css('display','none');
        }        
      }
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

  if ($(window).width() < 769) {
    var featuresItems = $('.feature .title');

    for (var n = 0; n < featuresItems.length; n++) {
      featuresItems[n].onclick = function() {
        $(this).parent().toggleClass('open');
        hideOtherFeatures(this);
      };
    }

    function hideOtherFeatures(exceptThis) {
      for (var n = 0; n < featuresItems.length; n++) {
        if (featuresItems[n] !== exceptThis) {
          featuresItems[n].parentElement.classList.remove("open");
        }
      }
    }
  }
	
}( $ ) );

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
      "product_area" : "mw_product_tab",
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

  var product_area = "";
    if (window.location.pathname == "/employee-scheduling/") {
      product_area = "mw_employee_scheduling";
    }
    else if (window.location.pathname == "/hiring-and-onboarding/") {
      product_area = "mw_hiring_onboarding";
    }
    else if (window.location.pathname == "/team-communication/") {
      product_area = "mw_team_communication";
    }
    else if (window.location.pathname == "/employee-happiness/") {
      product_area = "mw_employee_happiness";
    }
    else if (window.location.pathname == "/hr-compliance/") {
      product_area = "mw_hr_compliance";
    }
    else if (window.location.pathname == "/integrations/") {
      product_area = "mw_integrations";
    }
    else if (window.location.pathname == "/time-clock/") {
      product_area = "mw_time_clock";
    }
    else if (window.location.pathname == "/payroll/") {
      product_area = "mw_payroll";
    }
    else if (window.location.pathname == "/timesheets/") {
      product_area = "mw_timesheets";
    }

    $('#create-account').click(function() {

    var event = "Get Started Button Clicked";
    var eventProperties = {
      "product_area" : product_area,
      "event_category": "email_capture",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
    };

    amplitude.getInstance().logEvent(event, eventProperties);
    
    var email = $('.homeform').val();
    if( email == '' || IsEmail(email) == false ) {
      $('.homeform').addClass("error");

      var event = "Error Message Shown";
      var eventProperties = {
        "product_area" : product_area,
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
      "product_area" : product_area,
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

  $('.section-2-cols .button:not(.demo)').click(function() {

  var feature_detail_num = $(".section-2-cols .button:not(.demo)").index(this) + 1;
  var event = "Get Started Button Clicked";
  if (product_area == "mw_time_clock" || product_area == "mw_payroll") {
    feature_detail_num++;
  }
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "feature_detail_" + feature_detail_num,
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-2-cols .button.demo').click(function() {

  var event = "Request Demo Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "section_2_columns",
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

  $('.section-hero .button.demo').click(function() {

  var event = "Request Demo Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "section_hero",
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

  $('.section-hero.pro-timeclock .button:not(.demo)').click(function() {

  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "feature_detail_1",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-hero.pro-payroll .button:not(.demo)').click(function() {

  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "feature_detail_1",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-business .business-grid a').click(function() {

  var event = "Business Card Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "busiest_business_cards",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : $('p', this).text()
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-integration .text-link-arrow').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "integrations",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : $(this).text()
  };
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
        "product_area" : product_area,
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
      amplitude.getInstance().logEvent(event, eventProperties);

    });
    
  });

  var get_started_event_category_prefix = "";
  if (window.location.pathname == "/employee-scheduling/") {
      get_started_event_category_prefix = "scheduling_banner_";
    }
    else if (window.location.pathname == "/hiring-and-onboarding/") {
      get_started_event_category_prefix = "hiring_banner_";
    }
    else if (window.location.pathname == "/team-communication/") {
      get_started_event_category_prefix = "team_communication_banner_";
    }
    else if (window.location.pathname == "/employee-happiness/") {
      get_started_event_category_prefix = "employee_happiness_banner_";
    }
    else if (window.location.pathname == "/hr-compliance/") {
      get_started_event_category_prefix = "hr_compliance_banner_";
    }
    else if (window.location.pathname == "/integrations/") {
      get_started_event_category_prefix = "integrations_banner_";
    }
    else if (window.location.pathname == "/time-clock/") {
      get_started_event_category_prefix = "timeclock_banner_";
    }
    else if (window.location.pathname == "/payroll/") {
      get_started_event_category_prefix = "payroll_banner_";
    }
    else if (window.location.pathname == "/timesheets/") {
      get_started_event_category_prefix = "timesheets_banner_";
    }

  $('.section-signup-banner a:not(.demo)').click(function() {

  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": get_started_event_category_prefix + "1",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-signup-banner .button.demo').click(function() {

  var event = "Request Demo Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "section_signup_banner",
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

  $('.section-cta-banner a:not(.demo)').click(function() {

  var cta_num = $('.section-cta-banner a:not(.demo)').index(this) + 2;
  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": get_started_event_category_prefix + cta_num,
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-cta-banner .button.demo').click(function() {

  var event = "Request Demo Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "section_cta_banner",
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

  $('.section-faqs a').click(function() {

  var link_text = "";
  if ($('span', this).text() == "") {
    link_text = $(this).text();
  }
  else {
    link_text = $('span', this).text();
  }

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "faq",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : link_text
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-free-offers a').click(function() {

  var event = "See All Payroll Features Button Clicked";
  var eventProperties = {
    "product_area" : product_area,
    "event_category": "feature_checklist",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.demo-popup form').submit(function() {
  var event = "Submit Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "request_demo_popup",
    "modal_source": "modal_source",
    "modal_version": "modal_version",
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

  //Timeclock experiment

  var timeClockProduct = "";
  if ($('body').hasClass('exp')) {
    timeClockProduct = "experiment";
  }
  else {
    timeClockProduct = "control";
  }

  $('.section-hero .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_email_capture",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-features .feature a').click(function() {

  var link_text = "";
  if ($(this).parent().index() == 1) {
    link_text = "GPS: Get Homebase time clocks";
  }
  else {
    link_text = $(this).text();
  }

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_product_features",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : link_text,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-slider .text-link-arrow').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_step_by_step_guide",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : $(this).text(),
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-cta-apps .appstore a').click(function() {

  var event = "App Download Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_app_cta",
    "button_text": "Download on the App Store",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-cta-apps .gplay a').click(function() {

  var event = "App Download Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_app_cta",
    "button_text": "Get it on Google Play",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-features-iconboxes .iconbox a').click(function() {

  var event = "Icon Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_built_for_small_business",
    "icon_text": $('.title', this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('#footer-cta-exp .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_time_clock_cta",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-challenges a').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_time_tracking_troubles",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : $('.text', this).text(),
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('#signup-cta-exp .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_time_clock_cta",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('#footer-cta-exp2 .button').click(function() {

  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_time_clock",
    "event_category": "mw_footer",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-2-cols a').click(function() {

  var link_text = "";
  if ($('span', this).text() == "") {
    link_text = $(this).text();
  }
  else {
    link_text = $('span', this).text();
  }

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "feature_details",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : link_text,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-faqs-new a').click(function() {

  var link_text = "";
  if ($('span', this).text() == "") {
    link_text = $(this).text();
  }
  else {
    link_text = $('span', this).text();
  }

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "mw_faq",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_url" : $(this).attr('href'),
    "link_text" : link_text,
    "timeclockproduct" : timeClockProduct
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);

  });

  function experiment() {
    $('body').addClass('exp');
    $('.section:not(".section-navbar")').hide();
    $('#hero-exp').show();
    $('#features-exp').show();
    $('#rating-exp').show();
    $('#testimonials-exp').show();
    $('#slider-exp').show();
    $('#cta-apps-exp').show();
    $('#iconboxes-exp').show();
    $('#footer-cta-exp').show();
    $('#challenges-exp').show();
    $('#signup-cta-exp').show();
    $('#faq-exp').show();
    $('#footer-cta-exp2').show();
    $('#bp-exp').show();
  }

  