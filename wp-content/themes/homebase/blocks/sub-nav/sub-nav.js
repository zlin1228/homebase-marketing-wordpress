jQuery(document).ready(function(){

  var lastScrollTop = 0;

  $(window).scroll(function(event){
    var st = $(this).scrollTop();

    if (st > 0){
      $(".section-navbar").addClass("scrolled");
    } else {
      $(".section-navbar").removeClass("scrolled");
    }

    if (st > lastScrollTop && st > 150){
      $(".section-navbar").addClass("hidden");
    } else {
      $(".section-navbar").removeClass("hidden");
    }
    lastScrollTop = st;

  });

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
  
});

