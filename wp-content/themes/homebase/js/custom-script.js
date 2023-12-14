( function( $ ) {
	$('body').on('click','a[href*=\\#]:not([href=\\#])', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html,body').animate({
						scrollTop: target.offset().top - $('header').height()
					}, 1000);
					return false;
				}
			}
	});
	
	resizeFooterMenu();
	$(window).resize(function() {
		resizeFooterMenu()
	});

  if (window.location.search || window.location.hash) {
    
    $("a:not(#hero-popup-video)").each(function() {    
      var _href = $(this).attr("href");
      if (!_href.includes('drift') && !_href.includes('tel:')) {
        if ( _href.includes('?') ) {
          var _hrefSearch = _href.split('?');
          if ( _hrefSearch[1].includes('#') ) {
            var _hrefHash = _hrefSearch[1].split('#');
            $(this).attr("href", _hrefSearch[0] + "?" + _hrefHash[0] + window.location.search.replace('?','&') + "#" + _hrefHash[1]);
          }
          else {
            $(this).attr("href", _href + window.location.search.replace('?','&') + window.location.hash);
          }
        }

        else if ( _href.includes('#') ) {
          var _hrefHash = _href.split('#');
          $(this).attr("href", _hrefHash[0] + window.location.search + "#" + _hrefHash[1]);
        }

        else {
          $(this).attr("href", _href + window.location.search + window.location.hash);  
        } 
      }
      
    });

    $("form").each(function() {    
      var _form = $(this);
      var _action = _form.attr("action");
      
      if (_action) {
        var queryParams = window.location.search.replace('?', '');
        var inputParams = queryParams.split('&');
        inputParams = inputParams.reverse();
        inputParams.forEach(function(item) {
          var inputValues = item.split('=');
          _form.prepend('<input type="hidden" name="' + inputValues[0] +'" value="' + inputValues[1] + '">');
        });
      }

      if (_action.includes('?')) {
        _actionSearch = _action.split('?');
        _action = _actionSearch[0];
      } 
      _form.attr("action", _action + window.location.search);
      
    });

  }

  /**
   * CRO popup
   * */

  $('.cro-popup .close').click(function() {
    $('.cro-popup').css('display','none');
    setCookie('cro_popup', 'closed');

    var event = "Dismiss Clicked";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "cro_popup", 
      "modal_source": "function_call_from_GO",
      "modal_version": "cro_experiment_1", 
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "cro_experiment_1" : "test"
    };
    
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 

    amplitude.getInstance().logEvent(event, eventProperties);
  });

  $(document).mouseup(function(e) {
    var container = $('.cro-popup .container');

    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {

      if ($('.cro-popup').css('display') == "flex") {
        var event = "Dismiss Clicked";
        var eventProperties = {
          "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
          "event_category": "cro_popup", 
          "modal_source": "function_call_from_GO",
          "modal_version": "cro_experiment_1", 
          "filtered_path": window.location.pathname,
          "full_path" : window.location.pathname + window.location.search + window.location.hash,
          "query_params" : window.location.search,
          "screen_height" : screen.height,
          "screen_width" : screen.width,
          "cro_experiment_1" : "test"
        };
        if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
          var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
          for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
        }
        amplitude.getInstance().logEvent(event, eventProperties);

        $('.cro-popup').css('display','none');
        setCookie('cro_popup', 'closed');
      }
      
    }
  });

  var delayInput = $('#cro-delay').text();
  var croDisplayType = $('#cro-display-type').text();
  if (croDisplayType == "delay") {
    if( parseInt(delayInput) > 0 ) {
      cro_popup(delayInput);
    }
  }
  else if (croDisplayType == "exit") {
    cro_popup_exit();
  }
  
  /**
   * Email capture popup
   * */

  var ip = 'check';
  var access_key = '80997445208f656240168f334ec3947b';
  var cities = ["Conroe", "Baytown", "Deer Park", "Friendswood", "Galveston", "Lake Jackson", "La Porte", "Missouri City", "Rosenberg", "Texas City", "Atascocita", "Channelview", "Mission Bend", "Spring", "Alvin", "Angleton", "Bellaire", "Clute", "Dickinson", "Freeport", "Galena Park", "Humble", "Jacinto City", "Katy", "La Marque", "Richmond", "Santa Fe", "Seabrook", "South Houston", "Houston", "Stafford", "Tomball", "Webster", "West University Place", "Aldine", "Cinco Ranch", "Cloverleaf", "Four Corners", "Fresno", "Greatwood", "New Territory", "Pecan Grove", "Sienna Plantation", "Ames", "Anahuac", "Arcola", "Bayou Vista", "Beach City", "Beasley", "Bellville", "Brazoria", "Brazos Country", "Brookshire", "Brookside Village", "Bunker Hill Village", "Clear Lake Shores", "Cleveland", "Cove", "Cut and Shoot", "Daisetta", "Danbury", "Dayton", "Dayton Lakes", "Devers", "El Lago", "Fulshear", "Hardin", "Hempstead", "Hedwig Village", "Hilshire Village", "Hitchcock", "Hunters Creek Village", "Industry", "Iowa Colony", "Jamaica Beach", "Jersey Village", "Kemah", "Kendleton", "Liberty", "Liverpool", "Magnolia", "Manvel", "Meadows Place", "Mont Belvieu", "Montgomery", "Morgan's Point", "Nassau Bay", "Needville", "North Cleveland", "Oak Ridge North", "Old River-Winfree", "Orchard", "Oyster Creek", "Panorama Village", "Pattison", "Patton Village", "Piney Point Village", "Plum Grove", "Prairie View", "Richwood", "Sealy", "Shenandoah", "Shoreacres", "Simonton", "Southside Place", "Splendora", "Spring Valley Village", "Surfside Beach", "Sweeny", "Taylor Lake Village", "Waller", "Wallis", "West Columbia", "Willis", "Woodbranch", "Holiday Lakes", "Kenefick", "Pine Island", "Quintana", "Roman Forest", "San Felipe", "Stagecoach", "Thompsons", "Woodloch", "Bailey's Prairie", "Bonney", "Fairchilds", "Hillcrest", "Jones Creek", "Pleak", "Tiki Island", "Bacliff", "Barrett", "Bolivar Peninsula", "Crosby", "Cumings", "Damon", "Fifth Street", "Highlands", "Pinehurst", "Porter Heights", "San Leon", "Sheldon", "Stowell", "Wild Peach Village", "Winnie"];

  $.ajax({
    url: 'https://api.ipstack.com/' + ip + '?access_key=' + access_key,
    dataType: 'jsonp',
    success: function(json) {
      var userState = json.region_code;
      var userCity = json.city;

      if (userState == 'TX' && cities.indexOf(userCity) > -1) {
        var ecDelayInput = $('#email-capture-delay').text();
        if( parseInt(ecDelayInput) > 0 ) email_capture_popup(ecDelayInput);
      }
    }
  });

  $('.email-capture-popup .close').click(function() {
    $('.email-capture-popup').css('display','none');
    //setCookie('email_capture_popup', 'closed');

    var event = "Dismiss Clicked";
    var eventProperties = {
      "product_area" : productArea,
      "event_category": "email_capture_popup", 
      "modal_source": "3_seconds_after_load_houston",
      "modal_version" : "igt_radio_experiment",
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

  $(document).mouseup(function(e) {
    var container = $('.email-capture-popup .container');

    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {

      if ($('.email-capture-popup').css('display') == "flex") {
        var event = "Dismiss Clicked";
        var eventProperties = {
          "product_area" : productArea,
          "event_category": "email_capture_popup", 
          "modal_source": "3_seconds_after_load_houston",
          "modal_version" : "igt_radio_experiment",
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

        $('.email-capture-popup').css('display','none');
        //setCookie('email_capture_popup', 'closed');
      }
      
    }
  });

  $('form[name="iterable_optin"]').each(function() {
      $(this).validate({
          rules: {
            email: {
                required: true,
                email: true
            },
          },
          messages : {
          email: {
              email: "Please enter a valid email address"
          }
          },
          submitHandler: function(form) {
            //form.submit();
            var form = $(form);
            var url = form.attr('action');
            var data = form.serialize();
            
            $.ajax({
                type: "POST",
                url: url,
                data: data,
            }).done(function(data) {
            })
          }
      });
  });

  /*var ecDelayInput = $('#email-capture-delay').text();
  if( parseInt(ecDelayInput) > 0 ) email_capture_popup(ecDelayInput);*/

  if($('.eoy-countdown').height() > 24) {
    setTimeout(function(){
      var event = "Banner Viewed";
      var eventProperties = {
        "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
        "event_category": "cro_banner",
        "filtered_path": window.location.pathname,
        "full_path" : window.location.pathname + window.location.search + window.location.hash,
        "query_params" : window.location.search,
        "screen_height" : screen.height,
        "screen_width" : screen.width,
        "banner_version" : "cro_experiment_2",
        "cro_experiment_2" : "test"
      };
      if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
        var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
        for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
      }
      amplitude.getInstance().logEvent(event, eventProperties);

      dataLayer.push({
        'event': 'topBannerViewed',
        'hostname': 'joinhomebase.com',
        'pageCategory': 'homepage',
        'pageTemplate': 'homepage-v2',
        'pageAuthor': 'baljinder',
        'title': 'homepage'
      });
    }, 5000);
  }

}( jQuery ) );

var productArea = '';
if (window.location.pathname == '/') {
  productArea = 'mw_homepage'
}
else {
  productArea = 'mw_' + window.location.pathname.replaceAll("/","").replaceAll("-","_");
}

function resizeFooterMenu(){

	var grid = jQuery(".footer-menu .row");
	var rowHeight = parseInt(grid.css('grid-auto-rows'));
	var rowGap = parseInt(grid.css('grid-row-gap'));

	if(rowHeight && rowGap) {
			jQuery(".footer-menu .row .col").each(function() {
					var rowSpan = Math.ceil((jQuery(this).find(".col-wrapper").height()+rowGap)/(rowHeight+rowGap));
					jQuery(this).css('gridRowEnd', "span "+rowSpan);
			});
	}
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  } 
  else {
    return true;
  }
}

function hideCROStickyBanner() {
  $('.eoy-countdown').hide();
  $('#page').removeClass('eoy');
}

function showCROStickyBanner() {
  if($(window).width() > 640) {
    $('.eoy-countdown:not(.mobile)').show();
  }
  else {
    $('.eoy-countdown.mobile').show();
  }
  $('#page').addClass('eoy');

  setTimeout(function(){
    var event = "Banner Viewed";
    var eventProperties = {
      "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
      "event_category": "cro_banner",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "banner_version" : "cro_experiment_2",
      "cro_experiment_2" : "test"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }
    amplitude.getInstance().logEvent(event, eventProperties);

    dataLayer.push({
      'event': 'topBannerViewed',
      'hostname': 'joinhomebase.com',
      'pageCategory': 'homepage',
      'pageTemplate': 'homepage-v2',
      'pageAuthor': 'baljinder',
      'title': 'homepage'
    });
  }, 5000);
}

$('.email-capture-popup form').submit(function() {
  setCookie('email_capture_popup', 'closed');
  $('.email-capture-popup').css('display','none');
});

/*-------------------
Amplitude events 2022
-------------------*/

$('.section-cta-banner a').click(function() {

  if ($(this).attr('href') !== "/contact-sales/") {
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_footer",
      "event_category": "banner",
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
  };

  if (window.location.pathname !== "/homebase-pricing/") {

    dataLayer.push({ 
      "event": "ctaClick",
      "ctaLocation": "body",
      "ctaURL": $(this).attr('href'),
      "ctaText": $(this).text()
    });
  };

});

$('footer .bib-link').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_footer",
    "event_category": "best_business_report",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href')
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.section-bp-caption .bp-list a').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_footer",
    "event_category": "business_pictured",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text() + $(this).next().text(),
    "link_url" : $(this).attr('href') 
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }
  amplitude.getInstance().logEvent(event, eventProperties);

});

$('.footer-social-banner .social-btn').click(function() {
  link_type = "";
  if ($(this).attr('href') == "https://www.youtube.com/c/HomebaseApp") {
    link_type = "youtube";
  }
  else if ($(this).attr('href') == "https://www.facebook.com/HomebaseHQ/") {
    link_type = "facebook";
  }
  else if ($(this).attr('href') == "https://www.instagram.com/homebase/") {
    link_type = "instagram";
  }
  else if ($(this).attr('href') == "https://www.linkedin.com/company/homebase-app/") {
    link_type = "linkedin";
  }
  else if ($(this).attr('href') == "https://twitter.com/joinhomebase") {
    link_type = "twitter";
  }
  var event = "Social Link Clicked";
  var eventProperties = {
    "product_area" : "mw_footer",
    "event_category": "social",
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

$('.footer-menu a').click(function() {

  var event = "Link Clicked";
  var eventProperties = {
    "product_area" : "mw_footer",
    "event_category": "bottom_nav",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href') 
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

  var menu_category = "";
  var parent = $(this).closest('.col-12');
  if (parent.hasClass('f-nav-product')) {
    menu_category = "Product";
  }
  else if (parent.hasClass('f-nav-solutions')) {
    menu_category = "Customers";
  }
  else if (parent.hasClass('f-nav-resources')) {
    menu_category = "Resources";
  }
  else if (parent.hasClass('f-nav-homebase')) {
    menu_category = "Homebase";
  }
  dataLayer.push({ 
    "event": "navigation",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "footer",
    "menuCategory": menu_category
  });

});

$('header .button.simple').click(function() {

  var event = "Sign In Clicked";
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

$('header .button.primary').click(function() {

  var event = "Button clicked";
  var eventProperties = {
    "product_area" : "mw_header",
    "event_category": "top_nav",
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

});

$('.cro-popup .button').click(function() {
  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "cro_popup",
    "modal_source": "function_call_from_GO",
    "modal_version": "cro_experiment_1",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "cro_experiment_1" : "test"
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);
});

$('.email-capture-popup form input[type="text"]').focus(function() {

  var event = "Field Focused";
  var eventProperties = {
    "product_area" : productArea,
    "event_category": "email_capture_popup",
    "action_type": "focus",
    "modal_source": "3_seconds_after_load_houston",
    "modal_version" : "igt_radio_experiment",
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

$('.email-capture-popup form input[type="submit"]').click(function() {

  var event = "Button clicked";
  var eventProperties = {
    "product_area" : productArea,
    "event_category": "email_capture_popup",
    "action_type": "click",
    "modal_source": "3_seconds_after_load_houston",
    "modal_version" : "igt_radio_experiment",
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
  
  var email = $('.email-capture-popup form input[type="text"]').val();
  if( email == '' || IsEmail(email) == false ) {
    $('.email-capture-popup form input[type="text"]').addClass("error");

    var event = "Error Message Shown";
    var eventProperties = {
      "product_area" : productArea,
      "event_category": "email_capture_popup",
      "action_type": "shown",
      "modal_source": "3_seconds_after_load_houston",
      "modal_version" : "igt_radio_experiment",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "error" : "Invalid Email"
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    }
    amplitude.getInstance().logEvent(event, eventProperties);
    
    return false;
  }
      
});

$('header .hb-branding a').click(function() {

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

$('#hb-navigation .dropdown a').click(function() {

  var link_text = "";
  var menu_category = "";
  if ($(this).text() == "Scheduling") {
    link_text = "scheduling";
    menu_category = "Product";
  }
  else if ($(this).text() == "Time clock") {
    link_text = "time_clock";
    menu_category = "Product";
  }
  else if ($(this).text() == "Timesheets") {
    link_text = "timesheets";
    menu_category = "Product";
  }
  else if ($(this).text() == "Payroll") {
    link_text = "payroll";
    menu_category = "Product";
  }
  else if ($(this).text() == "Hiring & onboarding") {
    link_text = "hiring_onboarding";
    menu_category = "Product";
  }
  else if ($(this).text() == "Team communication") {
    link_text = "team_communication";
    menu_category = "Product";
  }
  else if ($(this).text() == "Employee happiness") {
    link_text = "employee_happiness";
    menu_category = "Product";
  }
  else if ($(this).text() == "HR & compliance") {
    link_text = "hr_compliance";
    menu_category = "Product";
  }
  else if ($(this).text() == "Integrations") {
    link_text = "integrations";
    menu_category = "Product";
  }
  else if ($(this).text() == "Food & beverage") {
    link_text = "food_beverage";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Retail") {
    link_text = "retail";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Beauty & wellness") {
    link_text = "beauty_wellness";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Medical & veterinary") {
    link_text = "medical_veterinary";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Home & repair") {
    link_text = "home_repair";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Services") {
    link_text = "services";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Hospitality & leisure") {
    link_text = "hospitality_leisure";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Education & caregiving") {
    link_text = "education_caregiving";
    menu_category = "Customers";
  }
  else if ($(this).text() == "Contact sales") {
    link_text = "contact_sales";
    menu_category = "More";
  }
  else if ($(this).text() == "Accountants") {
    link_text = "accountants";
    menu_category = "More";
  }
  else if ($(this).text() == "Become a Partner") {
    link_text = "become_a_partner";
    menu_category = "More";
  }
  else if ($(this).text() == "Support") {
    link_text = "support";
    menu_category = "More";
  }
  else if ($(this).text() == "About Us") {
    link_text = "about_us";
    menu_category = "More";
  }
  else if ($(this).attr('href') == "/careers/") {
    link_text = "careers";
    menu_category = "More";
  }
  else if ($(this).text() == "Press") {
    link_text = "press";
    menu_category = "More";
  }
  else if ($(this).text() == "#realtalk Blog") {
    link_text = "realtalk_blog";
    menu_category = "More";
  }
  var event = "Drop Down Option Selected";
  var eventProperties = {
    "product_area" : "mw_header",
    "event_category": "top_nav",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : link_text,
    "link_url" : $(this).attr('href') 
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  }
  amplitude.getInstance().logEvent(event, eventProperties);

  dataLayer.push({ 
    "event": "navigaton",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "primary",
    "menuCategory": menu_category
  });

});

$('#hb-navigation .menu-item-pricing a').click(function() {
  dataLayer.push({ 
    "event": "navigaton",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "primary",
    "menuCategory": "Pricing"
  });
});

$('.eoy-countdown a').click(function() {
  var event = "Link clicked";
  var eventProperties = {
    "product_area" : "mw_top_banner",
    "event_category": "payroll_banner",
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width,
    "link_text" : $(this).text(),
    "link_url" : $(this).attr('href'),
    "section_id" : $('.eoy-countdown').attr('id'),
    "banner_version" : "cro_experiment_2",
    "cro_experiment_2" : "test"
  };
  if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
    var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
    for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
  } 
  amplitude.getInstance().logEvent(event, eventProperties);
});


/*-------------------
Countdown banner
-------------------*/

/*var countDownDate = new Date("Jan 1, 2023 00:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = ('0' + Math.floor(distance / (1000 * 60 * 60 * 24))).slice(-2);
  var hours = ('0' + Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).slice(-2);
  var minutes = ('0' + Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).slice(-2);
  var seconds = ('0' + Math.floor((distance % (1000 * 60)) / 1000)).slice(-2);

  document.getElementById("eoy-countdown-timer-scrolled").innerHTML = days + "d : " + hours + "h : " + minutes + "m : " + seconds + "s";
  document.getElementById("eoy-countdown-timer-desktop").innerHTML = "<span>" + days + "</span><span class='semicolon'>:</span>" + "<span>" + hours + "</span><span class='semicolon'>:</span>" + "<span>" + minutes + "</span><span class='semicolon'>:</span>" + "<span>" + seconds + "</span>";
  document.getElementById("eoy-countdown-timer-mobile").innerHTML = "<span>" + days + "</span><span class='semicolon'>:</span>" + "<span>" + hours + "</span><span class='semicolon'>:</span>" + "<span>" + minutes + "</span><span class='semicolon'>:</span>" + "<span>" + seconds + "</span>";

  // If the countdown is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("eoy-countdown").innerHTML = "EXPIRED";
  }
}, 1000);*/

/*-------------------
   CRO and Email Capture Popups
  -------------------*/

function cro_popup(delay) {
  if (getCookie('cro_popup') != 'closed') {
    setTimeout(function(){
      $('.cro-popup').css('display', 'flex');

      var event = "Modal Viewed";
      var eventProperties = {
        "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
        "event_category": "cro_popup", 
        "modal_source": "function_call_from_GO",
        "modal_version": "cro_experiment_1", 
        "filtered_path": window.location.pathname,
        "full_path" : window.location.pathname + window.location.search + window.location.hash,
        "query_params" : window.location.search,
        "screen_height" : screen.height,
        "screen_width" : screen.width,
        "cro_experiment_1" : "test"
      };
      if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
        var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
        for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
      }
      amplitude.getInstance().logEvent(event, eventProperties);
    }, delay*1000);  
  }
}

function cro_popup_exit() {
  var viewed = false;
  addEvent(document, 'mouseout', function(evt) {
    if (evt.toElement == null && evt.relatedTarget == null) {
      if (getCookie('cro_popup') != 'closed' && !viewed) {
        $('.cro-popup').css('display', 'flex');

        var event = "Modal Viewed";
        var eventProperties = {
          "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
          "event_category": "cro_popup", 
          "modal_source": "function_call_from_GO",
          "modal_version": "cro_experiment_1", 
          "filtered_path": window.location.pathname,
          "full_path" : window.location.pathname + window.location.search + window.location.hash,
          "query_params" : window.location.search,
          "screen_height" : screen.height,
          "screen_width" : screen.width,
          "cro_experiment_1" : "test"
        };
        if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
          var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
          for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
        }
        amplitude.getInstance().logEvent(event, eventProperties);
        viewed = true;
      }
    };
  });
  
}

function email_capture_popup(delay) {
  if (getCookie('email_capture_popup') != 'closed') {
    setTimeout(function(){
      $('.email-capture-popup').css('display', 'flex');

      var event = "Modal Viewed";
      var eventProperties = {
        "product_area" : productArea,
        "event_category": "email_capture_popup", 
        "modal_source": "3_seconds_after_load_houston",
        "modal_version" : "igt_radio_experiment",
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
    }, delay*1000);  
  }
}


function addEvent(obj, evt, fn) {
  if (obj.addEventListener) {
      obj.addEventListener(evt, fn, false);
  } else if (obj.attachEvent) {
      obj.attachEvent("on" + evt, fn);
  }
}

function setCookie(key, value) {
  var expires = new Date();
  expires.setTime(expires.getTime() + 259200000); 
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function setCookieWithTime(key, value, time) {
  var expires = new Date();
  expires.setTime(expires.getTime() + time); 
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + ';path=/';
}

function getCookie(key) {
  var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
  return keyValue ? keyValue[2] : null;
}

/********************
  Google Analytics 4
********************/
function mkturlparams(name) {
    var url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

// $(window).load(function(){
  function callga4(){
  var author = document.querySelector('.post-author .name') == null ? 'Baljinder' : document.querySelector('.post-author .name').innerHTML;
  var templ = 'flexible-content-templatev2-php-global-jaali-by-mike';
  var ogtitle = document.querySelector('meta[property="og:title"]').getAttribute('content');
    
  res = dataLayer.push({
    'event': 'pageView',
    'hostname': window.location.hostname,
    'pageCategory': 'mw_'+document.body.getAttribute('data-amplitude-product-area').replaceAll('-','_'),
    'pageTemplate': templ,
    'pageAuthor': author,
    'pageTitle': ogtitle,
    'utm_source': mkturlparams("utm_source"),
    'utm_medium': mkturlparams("utm_medium"),
    'utm_campaign': mkturlparams("utm_campaign"),
    'utm_content': mkturlparams("utm_content"),
    'utm_term': mkturlparams("utm_term"),
    'utm_id': mkturlparams("utm_id"),
  });
  console.log(res);
}
// });

$('header .button.primary').click(function() {
  dataLayer.push({ 
    "event": "ctaClick", 
    "ctaLocation": "header", 
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text(),
  });
});

$('.section-cta-banner a').click(function() {
  if (window.location.pathname !== "/homebase-pricing/") {
    dataLayer.push({ 
      "event": "ctaClick",
      "ctaLocation": "body",
      "ctaURL": $(this).attr('href'),
      "ctaText": $(this).text()
    });
  };
});

$('.section-intro-product .button.primary').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-signup-widget .button.primary').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-2-cols .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-2-columns .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.col-2-section .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-hero .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-signup-banner a').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-bottom-cta .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-payroll-cta .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-simple-cta .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-benefits .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-for-employers .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-faq .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.section-guide .button').click(function() {
  dataLayer.push({ 
    "event": "ctaClick",
    "ctaLocation": "body",
    "ctaURL": $(this).attr('href'),
    "ctaText": $(this).text()
  });
});

$('.features-sub-container a').click(function() {
  dataLayer.push({ 
    "event": "navigaton",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "secondary",
    "menuCategory": "Product"
  });
});

$('.customers-subnav-container a').click(function() {
  dataLayer.push({ 
    "event": "navigaton",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "secondary",
    "menuCategory": "Customers"
  });
});

$('#blog-navbar a').click(function() {
  dataLayer.push({ 
    "event": "navigaton",
    "menuText": $(this).text(),
    "menuURL": $(this).attr('href'),
    "menuID": "secondary",
    "menuCategory": "Customers"
  });
});

$('#hero-signup-form').submit(function() {
  dataLayer.push({ 
    "event": "formSubmit", 
    "formName": "Email Signup",
    "formID": "hero-signup-form",
    "hostname" : "joinhomebase.com"
  });
});

var homeformStarted = false;
$('.homeform').focus(function() {
  if (!homeformStarted) {
    dataLayer.push({ 
      "event": "formStart", 
      "formName": "Email Signup",
      "formID": "hero-signup-form",
      "formField": "Email address",
      "hostname" : "joinhomebase.com"
    });
    homeformStarted = true;
  }
});

jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
  var contactsalesformStarted = false;
  $('#contact-sales input').focus(function() {
    if (!contactsalesformStarted) {
      dataLayer.push({ 
        "event": "formStart", 
        "formName": "Contact Sales",
        "formID": "nf-form-108",
        "formField": $("label[for='"+this.id+"']").text().replace(' *',""),
        "hostname" : "joinhomebase.com"
      });
      contactsalesformStarted = true;
    }
  });
});

jQuery( document ).on( 'nfFormSubmitResponse', function() {
  dataLayer.push({ 
      "event": "formSubmit", 
      "formName": "Contact Sales",
      "formID": "nf-form-108",
      "hostname" : "joinhomebase.com"
    });
});

$('.eoy-countdown a').click(function() {
  dataLayer.push({
    'event': 'topBannerCtaClicked',
    'ctaLocation': 'banner',
    'ctaURL': 'app.joinhomebase.com/onboarding/sign-up',
    'ctaText': 'Get started'
  });
});