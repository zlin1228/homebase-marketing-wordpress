jQuery(document).ready(function(){

  /**
   * Overtime items
   * */

  $('.over-add img').click(function() {
    $('<div class="over-item" style="display: flex;"><div class="box"><div class="rate-over"><label for="rate-over">Overtime wage</label><div class="wrapper"><span>$</span><input type="number" name="rate-over" placeholder="00.00" step="0.01" min="0.10" max="300.00" aria-label="Overtime rate"><span>/hour</span></div></div><div class="hours-over"><label for="hours-over">Overtime hours</label><div class="time"><input class="hours" type="number" min="0" step="1" name="hours-over" aria-label="Regular hours" placeholder="00">:<input class="mins" type="number" min="0" max="59" step="1" name="mins-over" aria-label="Regular minutes" placeholder="00"></div></div></div><div class="close"><img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg"></div></div>').insertBefore('.over-add');
    if ($(window).width() < 641) {
      $('.time input').css('width', $(this).val().length + 'ch')
    }
  });

  $('.over-add .text').click(function() {
    $('<div class="over-item" style="display: flex;"><div class="box"><div class="rate-over"><label for="rate-over">Overtime wage</label><div class="wrapper"><span>$</span><input type="number" name="rate-over" placeholder="00.00" step="0.01" min="0.10" max="300.00" aria-label="Overtime rate"><span>/hour</span></div></div><div class="hours-over"><label for="hours-over">Overtime hours</label><div class="time"><input class="hours" type="number" min="0" step="1" name="hours-over" aria-label="Regular hours" placeholder="00">:<input class="mins" type="number" min="0" max="59" step="1" name="mins-over" aria-label="Regular minutes" placeholder="00"></div></div></div><div class="close"><img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg"></div></div>').insertBefore('.over-add');
    if ($(window).width() < 641) {
      $('.time input').css('width', $(this).val().length + 'ch')
    }
  });

  $(document).on('click', '.over-item .close', function() {
    if ($('.over-item .close').length > 1) {
      $(this).parent().remove();
    }
    calculate();
  });

  /**
   * Aligning time inputs on mobiles
   * */
  if ($(window).width() < 641) {
    $('.time input').css('width', $(this).val().length + 'ch')
  }

  /**
   * Calculator
   * */

  $(document).on('change keyup', '.regular input', function() {
    $(this).attr('value', $(this).val());
    calculate();
  });

  $(document).on('change keyup', '.addons input', function() {
    $(this).attr('value', $(this).val());
    calculate();
  });

  $(document).on('change keyup', '.regular .time input', function() {
    if ($(this).val().length === 1) {
      $(this).val('0' + $(this).val());
    }
    else if ($(this).val().length > 2) {
      $(this).val(parseInt($(this).val()));
    }
    if ($(window).width() < 641) {
      $(this).css('width', $(this).val().length + 'ch')
    }
  });

  $(document).on('change keyup', '.addons .time input', function() {
    if ($(this).val().length === 1) {
      $(this).val('0' + $(this).val());
    }
    else if ($(this).val().length > 2) {
      $(this).val(parseInt($(this).val()));
    }
    if ($(window).width() < 641) {
      $(this).css('width', $(this).val().length + 'ch')
    }
  });



  $('.over-check input').click(function() {
    if($(this).is(':checked')) {
      $('.titles.overtime').css('display', 'flex');
      $('.over-item').css('display', 'flex');
      $('.over-add').css('display', 'flex');
    }
    else {
      $('.titles.overtime').hide();
      $('.over-item').hide();
      $('.over-add').hide();
    }
    calculate();
  });

  function calculate() {
    var regRate = $('#rate-reg').val();
    var regTotal = 0;
    var regHours = $('.hours-reg .hours').val();
    var regMins = $('.hours-reg .mins').val();
    regTotal = (regRate * regHours) + (regRate * regMins / 60);
    $('.gross-reg-val').text('$' + regTotal.toFixed(2));

    var totalGrossPay = 0;
    var overTotal = 0;

    if( $('.over-check input').is(':checked') ) {
      for (var i = 0; i < $('.over-item').length; i++) {
        var overRate = $('.rate-over input').eq(i).val() * 1.5;
        var overHours = $('.hours-over .hours').eq(i).val();
        var overMins = $('.hours-over .mins').eq(i).val();
        overTotal = overTotal + (overRate * overHours) + (overRate * overMins / 60);
      }     
      totalGrossPay = regTotal + overTotal;
      $('#total-gross-pay').text('$' + totalGrossPay.toFixed(2)); 
    }

    else {
      $('#total-gross-pay').text('$' + regTotal.toFixed(2));
    }       
  }

  /**
   * Amplitude events
   * */

  $('#rate-reg').change(function() {

    var event = "Field Changed";
    var eventProperties = {
      "product_area" : "mw_paycheck_calculator",
      "event_category": "mw_paycheck_calculator",
      "action_type": "change",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "field_name" : "Hourly wage"
    };

    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.hours-reg input').focus(function() {

    var event = "Field Focused";
    var eventProperties = {
      "product_area" : "mw_paycheck_calculator",
      "event_category": "mw_paycheck_calculator",
      "action_type": "focus",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "field_name" : "Hours this pay period"
    };

    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });

  $('.over-check input').click(function() {

    var event = "Checkbox Clicked";
    var eventProperties = {
      "product_area" : "mw_paycheck_calculator",
      "event_category": "mw_paycheck_calculator",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "checkbox_label" : "Overtime"
    };

    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });
  
});


