( function( $ ) {

  $('#pricing-toggle').click(function(){
    var val = $(this).is(":checked");

  $('.bill-text').removeClass('active');

    var type = "monthly";
      if(val == true) { //annualy
          type = "annual";
    $('.bill-text.annually').addClass('active');
          //$('.save-text').removeClass('monthly');
      } else {
    $('.bill-text.monthly').addClass('active');
          //$('.save-text').addClass('monthly');
      }

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
  

  var event = "Billing Toggle Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
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

$('#pricing-detail-toggle').click(function(){
    var val = $(this).is(":checked");

  $('.bill-text').removeClass('active');

    var type = "monthly";
      if(val == true) { //annualy
          type = "annual";
    $('.bill-text.annually').addClass('active');
          //$('.save-text').removeClass('monthly');
      } else {
    $('.bill-text.monthly').addClass('active');
          //$('.save-text').addClass('monthly');
      }

  $('.pricing-price').each(function() {
    $(this).html( $(this).attr(type) );
  });

  $('.pricing-meta').each(function() {
    $(this).html( $(this).attr(type) );
  });

  var event = "Billing Toggle Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
    "event_category" : "billing_comparison_table",
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

$('#pricing-d-table').on('click', 'tr.expandable', function(){

  if(!$(this).hasClass('active')) {
    $('tr.expandable.active').each(function() {
      $(this).removeClass('active');
      $(this).next('tr.hidden-tr').find('div').slideUp(400);
    });
  }

  $(this).toggleClass('active');
  $(this).next('tr.hidden-tr').find('div').slideToggle(400);
});

}( $ ) );



/*-------------------
Amplitude events 2022 (some are above)
-------------------*/

$('#create-account').click(function() {

  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
    "event_category": "email_capture",
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
      "product_area" : "mw_homebase_pricing",
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
    "product_area" : "mw_homebase_pricing",
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

$('.section-fo-servie a').click(function() {

  var event = "Create Account Button Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
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

$('.section-pricing-teable .pricing-tables a').click(function() {

  var val = $("#pricing-toggle").is(":checked");
  var type = "";
  if(val == true) { //annualy
    type = "annual";
  }
  else {
    type = "monthly";
  }
  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
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
    "product_area" : "mw_homebase_pricing",
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

$('.section-payroll-cta a').click(function() {

  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
    "event_category": "payroll_banner",
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

  if ($(this).attr('href') == "/contact-sales/") {
    var event = "Contact Sales Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homebase_pricing",
      "event_category": "sales_banner",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width
    };
    amplitude.getInstance().logEvent(event, eventProperties);
  }
  else {
    var event = "Try Free Button Clicked";
    var eventProperties = {
      "product_area" : "mw_homebase_pricing",
      "event_category": "free_trial_banner",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width
    };
    amplitude.getInstance().logEvent(event, eventProperties);
  }

});

$('.section-pricing-detailed #pricing-d-table a').click(function() {

  var val = $("#pricing-detail-toggle").is(":checked");
  var type = "";
  if(val == true) { //annualy
    type = "annual";
  }
  else {
    type = "monthly";
  }
  var event = "Get Started Button Clicked";
  var eventProperties = {
    "product_area" : "mw_homebase_pricing",
    "event_category": "billing_comparison_table",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "tier_id" : $(".section-pricing-detailed #pricing-d-table a").index(this) + 1,
    "selected_plan" : type
  };
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-customer-support a').click(function() {

  if ($(".section-customer-support a").index(this) == 0) {
    var event = "Call Clicked";
    var eventProperties = {
      "product_area" : "mw_homebase_pricing",
      "event_category": "support_card",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width
    };
    amplitude.getInstance().logEvent(event, eventProperties);
  }
  else {
    link_text = "";
    if ($(".section-customer-support a").index(this) == 1) {
      link_text = "send_message";
    }
    else if ($(".section-customer-support a").index(this) == 2) {
      link_text = "chat";
    }
    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_homebase_pricing",
      "event_category": "support_card",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_text" : link_text,
      "link_url" : $(this).attr('href')
    };
    amplitude.getInstance().logEvent(event, eventProperties);
  }

});
