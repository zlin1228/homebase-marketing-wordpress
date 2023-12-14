window.addEventListener( 'load', function() {
  jQuery(document).ready(function(){

    $("input[type='email']").focusout(function(e){
      e.preventDefault();

      if($("input[type='email']").val())
        return true;
      else
        return false
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
     * Sub nav
     * */

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
     * Calculator New
     * */
    $('.name-date input').change(function() {
      $(this).attr('value', $(this).val());
      $('.email-name').attr('value', $('input[name="name"]').val());
      $('.email-date').attr('value', $('input[name="date"]').val());
    });

    $('.days input').change(function() {
      $(this).attr('value', $(this).val());
      calculate();
    });

    $('#rate').change(function() {
      $(this).attr('value', $(this).val());
      calculate();
    });

    $('#overtime40x').change(function() {
      $(this).attr('value', $(this).val());
      calculate();
    });

    $('#overtime8x').change(function() {
      $(this).attr('value', $(this).val());
      calculate();
    });

    function calculate() {
      $('.days .row').each(function() {
        var start = $('.start input', this).val();
        var end = $('.end input', this).val();
        var breakTime = $('.break input', this).val();

        start = start.split(":");
        end = end.split(":");

        var startDate = new Date(0, 0, 0, start[0], start[1], 0);
        var endDate = new Date(0, 0, 0, end[0], end[1], 0);
        var diff = endDate.getTime() - startDate.getTime();
        var breakTimeMs = breakTime * 60 * 60 * 1000;
        diff = diff - breakTimeMs;
        var hours = Math.floor(diff / 1000 / 60 / 60);
        diff -= hours * 1000 * 60 * 60;
        var minutes = Math.floor(diff / 1000 / 60);         

        if( hours >= 0 && minutes >=0 ) {
          $('.total', this).text((hours < 10 ? "0" : "") + hours + ":" + (minutes < 10 ? "0" : "") + minutes);
        }
      });      
      
      var totalHours = 0;
      var totalMinutes = 0;
      var extraHours = 0;
      for (var i = 0; i < 7; i++) {
        var dayTotal = $('.days .total').eq(i).text();
        dayTotal = dayTotal.split(":");
        totalHours = totalHours + parseInt(dayTotal[0]);
        totalMinutes = totalMinutes + parseInt(dayTotal[1]);
      }

      if (totalMinutes > 59) {
        extraHours = Math.floor(totalMinutes / 60);
        totalHours = totalHours + extraHours;
        totalMinutes -= extraHours * 60;
      }
      var totalGrossPay = 0;      
      var over40inMinutes = 0;   
      var over40hours = 0;
      var over40minutes = 0;
      var over40pay = 0;
      var over8hours = 0;
      var over8minutes = 0;
      var over8inMinutes = 0;
      var over8pay = 0;
      var dayTotalInMinutes = 0;
      var regInMinutes = 0;
      var regHours = 0;
      var regMinutes = 0;
      var overInMinutes = 0;
      var overHours = 0;
      var overMinutes = 0;
      var overPay = 0; 
      var rate = $('#rate').val();
      var over40x = $('#overtime40x').val();
      var over8x = $('#overtime8x').val();      

      if($('.overtime40 input').is(':checked') && $('.overtime8 input').is(':checked')) {
        $('.total-hours').hide();
        $('.reg-hours').css('display', 'flex');
        $('.over-hours').css('display', 'flex');
        if ($('.gross input').is(':checked')) {
          $('.over-pay').css('display', 'flex');
        }

        if (totalHours >= 40 && totalMinutes >= 0) {
          over40hours = totalHours - 40;
          over40pay = (rate * over40hours * over40x) + (rate * totalMinutes * over40x / 60);
          over40inMinutes = over40hours * 60 + totalMinutes;
          $('#reg-hours').text('40:00');
        }

        else {
          $('#reg-hours').text((totalHours < 10 ? "0" : "") + totalHours + ":" + (totalMinutes < 10 ? "0" : "") + totalMinutes);
        }

        for (var i = 0; i < 7; i++) {
          var dayTotal = $('.days .total').eq(i).text();
          dayTotal = dayTotal.split(":");
          dayTotalInMinutes = (parseInt(dayTotal[0]) * 60) + parseInt(dayTotal[1]);
          
          if (dayTotalInMinutes > 480) {
            over8inMinutes = over8inMinutes + dayTotalInMinutes - 480;
          }
        }

        over8pay = over8inMinutes * rate * over8x / 60;
        overInMinutes = over40inMinutes + over8inMinutes;
        overHours = Math.floor(overInMinutes / 60);
        overMinutes = overInMinutes - (overHours * 60);
        $('#over-hours').text((overHours < 10 ? "0" : "") + overHours + ":" + (overMinutes < 10 ? "0" : "") + overMinutes);

        totalGrossPay = rate * 40 + over8pay + over40pay;
        $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2));

        overPay = over8pay + over40pay;
        $('#over-pay').text('$' + overPay.toFixed(2));
      }

      else if ($('.overtime40 input').is(':checked')) {
        $('.total-hours').hide();
        $('.reg-hours').css('display', 'flex');
        $('.over-hours').css('display', 'flex');
        if ($('.gross input').is(':checked')) {
          $('.over-pay').css('display', 'flex');
        }

        if (totalHours >= 40 && totalMinutes >= 0) {
          over40hours = totalHours - 40;
          $('#reg-hours').text('40:00');
          $('#over-hours').text((over40hours < 10 ? "0" : "") + over40hours + ":" + (totalMinutes < 10 ? "0" : "") + totalMinutes);
          totalGrossPay = (rate * 40) + (rate * over40hours * over40x) + (rate * totalMinutes * over40x / 60);
          overPay = (rate * over40hours * over40x) + (rate * totalMinutes * over40x / 60);
          $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2));
          $('#over-pay').text('$' + overPay.toFixed(2));
        }

        else {
          $('#reg-hours').text((totalHours < 10 ? "0" : "") + totalHours + ":" + (totalMinutes < 10 ? "0" : "") + totalMinutes);
          totalGrossPay = (totalHours * rate) + (totalMinutes / 60 * rate);
          $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2));
        }
      }

      else if ($('.overtime8 input').is(':checked')) {
        $('.total-hours').hide();
        $('.reg-hours').css('display', 'flex');
        $('.over-hours').css('display', 'flex');
        if ($('.gross input').is(':checked')) {
          $('.over-pay').css('display', 'flex');
        }

        for (var i = 0; i < 7; i++) {
          var dayTotal = $('.days .total').eq(i).text();
          dayTotal = dayTotal.split(":");
          dayTotalInMinutes = (parseInt(dayTotal[0]) * 60) + parseInt(dayTotal[1]);
          
          if (dayTotalInMinutes > 480) {
            overInMinutes = overInMinutes + dayTotalInMinutes - 480;
            regInMinutes = regInMinutes + 480;
          }

          else {
            regInMinutes = regInMinutes + dayTotalInMinutes;
          }
        }

        regHours = Math.floor(regInMinutes / 60);
        regMinutes = regInMinutes - (regHours * 60);
        $('#reg-hours').text((regHours < 10 ? "0" : "") + regHours + ":" + (regMinutes < 10 ? "0" : "") + regMinutes);

        overHours = Math.floor(overInMinutes / 60);
        overMinutes = overInMinutes - (overHours * 60);
        $('#over-hours').text((overHours < 10 ? "0" : "") + overHours + ":" + (overMinutes < 10 ? "0" : "") + overMinutes);

        totalGrossPay = (regInMinutes * rate / 60) + (overInMinutes * rate / 60 * over8x);
        $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2));

        overPay = (overInMinutes * rate / 60 * over8x);
        $('#over-pay').text('$' + overPay.toFixed(2));
      }

      else {
        $('.reg-hours').hide();
        $('.over-hours').hide();
        $('.over-pay').hide();

        totalGrossPay = (totalHours * rate) + (totalMinutes / 60 * rate);
      }      

      $('#total-hours').text((totalHours < 10 ? "0" : "") + totalHours + ":" + (totalMinutes < 10 ? "0" : "") + totalMinutes);
      $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2));

      //Email hidden fields populate
      $('.email-total-hours').val($('#total-hours').text());
      $('.email-regular-hours').val($('#reg-hours').text());
      $('.email-overtime-hours').val($('#over-hours').text());
      $('.email-total-gross-pay').val($('#total-gross-pay').text());
      $('.email-overtime-pay').val($('#over-pay').text());      
    }

    $('#print').click(function(e) {
      e.preventDefault();
      var prtContent = document.getElementById("printableform");
      var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
      WinPrint.document.write('<link rel="stylesheet" type="text/css" href="'+document.location.origin+'/wp-content/themes/homebase/style/pages/time-card-calculator-v2-pdf.min.css">');
      WinPrint.document.write('<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">');
      WinPrint.document.write(prtContent.innerHTML);
      WinPrint.document.close();
      WinPrint.setTimeout(function(){
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
      }, 1000);
    });

    $('#reset').click(function(e) {
      e.preventDefault();
      $('.days input').val('00:00');
      $('.total:not(.title)').text('00:00');
      $('#total-hours').text('00:00');
      $('#reg-hours').text('00:00');
      $('#over-hours').text('00:00');
      $('#total-gross-pay').text('$0000.00');
      $('#over-pay').text('$0000.00');
      $('#rate').val('');
    });

    $('.gross input').click(function() {
      if($(this).is(':checked')) {
        $('.gross-box').css('display', 'flex');
        $('.gross-pay').css('display', 'flex');
        if($('.overtime40 input').is(':checked') || $('.overtime8 input').is(':checked')) {
          $('.over-pay').css('display','flex');
        }
      }
      else {
        $('.gross-box').css('display', 'none');
        $('.gross-pay').hide();
        $('.over-pay').hide();
      }
    });

    $('.overtime40 input').click(function() {
      if($(this).is(':checked')) {
        $('.overtime40-box').css('display', 'flex');        
      }
      else {
        $('.overtime40-box').css('display', 'none');
        if(!$('.overtime8 input').is(':checked')) {
          $('.total-hours').css('display','flex');
        }
      }
      calculate();
    });

    $('.overtime8 input').click(function() {
      if($(this).is(':checked')) {
        $('.overtime8-box').css('display', 'flex');
      }
      else {
        $('.overtime8-box').css('display', 'none');
        if(!$('.overtime40 input').is(':checked')) {
          $('.total-hours').css('display','flex');
        }
      }
      calculate();
    });

    
  });
  
  $('form .button').click(function() {
    // Email URL
      var url = '';
      url = 'data[name]=' + $('input[name="name"]').val() + '&data[date]=' + $('input[name="date"]').val();
      for (var i = 0; i < 3; i++) {
        url = url + '&' + 'data[' + $('input[type="checkbox"]').eq(i).attr('name') + ']=' + $('input[type="checkbox"]').eq(i).is(":checked");
      }
      url = url + '&data[rate]=' + $('input[name="rate"]').val() + '&data[overtime40x]=' + $('select[name="overtime40x"]').val() + '&data[overtime8x]=' + $('select[name="overtime8x"]').val();
      for (var i = 0; i < $('.days input').length; i++) {
        url = url + '&' + 'data[' + $('.days input').eq(i).attr('name') + ']=' + $('.days input').eq(i).val();
      }
    $('.email-url').val('https://hb2020.wpengine.com/time-card-calculator-v2/?' + url);
  });

  /**
   * Amplitude events
   * */
  
  $('form .button').click(function() {

    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "mw_email_capture",
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
    
    var email = $('.homeform').val();
    if( email == '' || IsEmail(email) == false ) {
      $('.homeform').addClass("error");

      var event = "Error Message Shown";
      var eventProperties = {
        "product_area" : "mw_time_card_calculator",
        "event_category": "mw_email_capture",
        "action_type": "shown",
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

  $('.homeform').focus(function() {

    var event = "Field Focused";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "mw_email_capture",
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

  $('#print').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "mw_time_card_calculator",
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

  $('#reset').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "mw_time_card_calculator",
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

  $('.section-cta .button').click(function() {
  
    var event = "Button Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
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

  $('.section-faq a').click(function() {

    var link_text = "";
    if ($('span', this).text() == "") {
      link_text = $(this).text();
    }
    else {
      link_text = $('span', this).text();
    }

    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "mw_faq",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_url" : $(this).attr('href'),
      "link_text" : link_text
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.section-hero a').click(function() {

    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_time_card_calculator",
      "event_category": "hero",
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

});
