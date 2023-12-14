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

  $('.integrations-tabs li').click(function() {
    var catId = $(this).attr('cat-id');
  
    $('.integrations-tabs li').removeClass('active');
    $(this).addClass('active');
  
    // title
    $('.integrations-tab-title h2').text($(this).text());
  
    if (catId == 'all') {
  
      $('.integrations-posts .col').addClass('active');
  
    } else {
  
      $('.integrations-posts .col').removeClass('active');
  
      $('.integrations-posts .col').each(function() {
        var postCats = $(this).attr('cat-it').split(',');
  
        if (jQuery.inArray(catId, postCats) != -1) {
          $(this).addClass('active');
        }
      });
  
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
	
}( $ ) );

$('#create-account').click(function() {

    var event = "Get Started Button Clicked";
    var eventProperties = {
      "product_area" : "mw_integrations",
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
        "product_area" : "mw_integrations",
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
      "product_area" : "mw_integrations",
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

$('.section-integrations-tabs li').click(function() {
    
    var integrations_selected_tab = "";
    if ($(this).text() == "All Partners") {
      integrations_selected_tab = "all_partners";
    }
    else if ($(this).text() == "Point-of-sale integrations") {
      integrations_selected_tab = "point_of_sale";
    }
    else if ($(this).text() == "Payroll integrations") {
      integrations_selected_tab = "payroll";
    }
    else if ($(this).text() == "Business tool integrations") {
      integrations_selected_tab = "business_tools";
    }
    else if ($(this).text() == "Job boards") {
      integrations_selected_tab = "job_boards";
    }
    var event = "Integrations Tab Clicked";
    var eventProperties = {
      "product_area" : "mw_integrations",
      "event_category": "mw_integrations",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "tab" : integrations_selected_tab
    };
    amplitude.getInstance().logEvent(event, eventProperties);

  });

$('.section-integrations-tabs .integrations-post-content a').click(function() {
    
    var integrations_selected_tab = "";
    if ($('.section-integrations-tabs li.active').text() == "All Partners") {
      integrations_selected_tab = "all_partners";
    }
    else if ($('.section-integrations-tabs li.active').text() == "Point-of-sale integrations") {
      integrations_selected_tab = "point_of_sale";
    }
    else if ($('.section-integrations-tabs li.active').text() == "Payroll integrations") {
      integrations_selected_tab = "payroll";
    }
    else if ($('.section-integrations-tabs li.active').text() == "Business tool integrations") {
      integrations_selected_tab = "business_tools";
    }
    else if ($('.section-integrations-tabs li.active').text() == "Job boards") {
      integrations_selected_tab = "job_boards";
    }
    var event = "Card Link Clicked";
    var eventProperties = {
      "product_area" : "mw_integrations",
      "event_category": "vendor_vard_grid",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "tab" : integrations_selected_tab,
      "card" : $(this).siblings('h3').text(),
      "link_text" : $(this).text(),
      "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);

  });