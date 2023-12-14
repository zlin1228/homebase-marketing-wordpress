
"use strict";

( function( $ ) {
  // drift.on('ready',function(api, payload) {
  //   drift.api.widget.show();
  //   $( "#open-chat-window" ).click(function( event ) {
  //     event.preventDefault();
  //     drift.api.startInteraction({ interactionId: 261216 });
  //   });
  //  });

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

  function convertTZ(date, tzString) {
    return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));   
  }

  const dateNow = new Date();
  const ctCurrentDate = convertTZ(dateNow, 'America/Chicago');
  const localCurrentDate = convertTZ(dateNow, Intl.DateTimeFormat().resolvedOptions().timeZone);
  const offsetct = (localCurrentDate - ctCurrentDate) / 3600000;

  var phone_open = $('#phone-open').text().substring(0, $('#phone-open').text().length-2);
  var phone_open_prefix = $('#phone-open').text().substring($('#phone-open').text().length-2, $('#phone-open').text().length);
  var phone_close = $('#phone-close').text().substring(0, $('#phone-close').text().length-2);
  var phone_close_prefix = $('#phone-close').text().substring($('#phone-close').text().length-2, $('#phone-close').text().length);
  var chat_open = $('#chat-open').text().substring(0, $('#chat-open').text().length-2);
  var chat_open_prefix = $('#chat-open').text().substring($('#chat-open').text().length-2, $('#chat-open').text().length);
  var chat_close = $('#chat-close').text().substring(0, $('#chat-close').text().length-2);
  var chat_close_prefix = $('#chat-close').text().substring($('#chat-close').text().length-2, $('#chat-close').text().length);
  var phone_open_right = $('.phone-open-right').text().substring(0, $('.phone-open-right').text().length-2);
  var phone_open_right_prefix = $('.phone-open-right').text().substring($('.phone-open-right').text().length-2, $('.phone-open-right').text().length);
  var phone_close_right = $('.phone-close-right').text().substring(0, $('.phone-close-right').text().length-2);
  var phone_close_right_prefix = $('.phone-close-right').text().substring($('.phone-close-right').text().length-2, $('.phone-close-right').text().length);  

  if (Number.isInteger(offsetct)) {

    if (phone_open.includes(':')) {
      var phone_open_arr = phone_open.split(':');
      phone_open_arr[0] = parseInt(phone_open_arr[0]) + parseInt(offsetct);  
      if (phone_open_arr[0] > 24) {
        phone_open_arr[0] = phone_open_arr[0] - 24;
      }     
      else if (phone_open_arr[0] > 12 && phone_open_arr[0] <= 24) {
        phone_open_arr[0] = phone_open_arr[0] - 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      else if (phone_open_arr[0] == 0) {
        phone_open_arr[0] = phone_open_arr[0] + 12;
      }
      else if (phone_open_arr[0] < 0) {
        phone_open_arr[0] = phone_open_arr[0] + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      var local_phone_open = phone_open_arr[0] + ":" + phone_open_arr[1] + phone_open_prefix;
    }
    else {
      var local_phone_open = parseInt(phone_open) + parseInt(offsetct);
      if (local_phone_open > 24) {
        local_phone_open = local_phone_open - 24;
      }  
      else if (local_phone_open > 12 && local_phone_open <= 24) {
        local_phone_open = local_phone_open - 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      else if (local_phone_open == 0) {
        local_phone_open = local_phone_open + 12;
      }
      else if (local_phone_open < 0) {
        local_phone_open = local_phone_open + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      local_phone_open = local_phone_open + phone_open_prefix;
    }

    if (phone_open_right.includes(':')) {
      var phone_open_right_arr = phone_open_right.split(':');
      phone_open_right_arr[0] = parseInt(phone_open_right_arr[0]) + parseInt(offsetct);  
      if (phone_open_right_arr[0] > 24) {
        phone_open_right_arr[0] = phone_open_right_arr[0] - 24;
      }     
      else if (phone_open_right_arr[0] > 12 && phone_open_right_arr[0] <= 24) {
        phone_open_right_arr[0] = phone_open_right_arr[0] - 12;
        if (phone_open_right_prefix == "am") {
          phone_open_right_prefix = "pm";
        }
        else {
          phone_open_right_prefix = "am";
        }
      }
      else if (phone_open_right_arr[0] == 0) {
        phone_open_right_arr[0] = phone_open_right_arr[0] + 12;
      }
      else if (phone_open_right_arr[0] < 0) {
        phone_open_right_arr[0] = phone_open_right_arr[0] + 12;
        if (phone_open_right_prefix == "am") {
          phone_open_right_prefix = "pm";
        }
        else {
          phone_open_right_prefix = "am";
        }
      }
      var local_phone_open_right = phone_open_right_arr[0] + ":" + phone_open_right_arr[1] + phone_open_right_prefix;
    }
    else {
      var local_phone_open_right = parseInt(phone_open_right) + parseInt(offsetct);
      if (local_phone_open_right > 24) {
        local_phone_open_right = local_phone_open_right - 24;
      }  
      else if (local_phone_open_right > 12 && local_phone_open_right <= 24) {
        local_phone_open_right = local_phone_open_right - 12;
        if (phone_open_right_prefix == "am") {
          phone_open_right_prefix = "pm";
        }
        else {
          phone_open_right_prefix = "am";
        }
      }
      else if (local_phone_open_right == 0) {
        local_phone_open_right = local_phone_open_right + 12;
      }
      else if (local_phone_open_right < 0) {
        local_phone_open_right = local_phone_open_right + 12;
        if (phone_open_right_prefix == "am") {
          phone_open_right_prefix = "pm";
        }
        else {
          phone_open_right_prefix = "am";
        }
      }
      local_phone_open_right = local_phone_open_right + phone_open_right_prefix;
    }

    if (phone_close.includes(':')) {
      var phone_close_arr = phone_close.split(':');
      phone_close_arr[0] = parseInt(phone_close_arr[0]) + parseInt(offsetct);
      if (phone_close_arr[0] > 24) {
        phone_close_arr[0] = phone_close_arr[0] - 24;
      }
      else if (phone_close_arr[0] > 12 && phone_close_arr[0] <= 24) {
        phone_close_arr[0] = phone_close_arr[0] - 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      else if (phone_close_arr[0] == 0) {
        phone_close_arr[0] = phone_close_arr[0] + 12;
      }
      else if (phone_close_arr[0] < 0) {
        phone_close_arr[0] = phone_close_arr[0] + 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      var local_phone_close = phone_close_arr[0] + ":" + phone_close_arr[1] + phone_close_prefix;
    }
    else {
      var local_phone_close = parseInt(phone_close) + parseInt(offsetct);
      if (local_phone_close > 24) {
        local_phone_close = local_phone_close -24;
      }
      else if (local_phone_close > 12 && local_phone_close <= 24) {
        local_phone_close = local_phone_close - 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      else if (local_phone_close == 0) {
        local_phone_close = local_phone_close + 12;
      }
      else if (local_phone_close < 0) {
        local_phone_close = local_phone_close + 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      local_phone_close = local_phone_close + phone_close_prefix;
    }  

    if (phone_close_right.includes(':')) {
      var phone_close_right_arr = phone_close_right.split(':');
      phone_close_right_arr[0] = parseInt(phone_close_right_arr[0]) + parseInt(offsetct);
      if (phone_close_right_arr[0] > 24) {
        phone_close_right_arr[0] = phone_close_right_arr[0] - 24;
      }
      else if (phone_close_right_arr[0] > 12 && phone_close_right_arr[0] <= 24) {
        phone_close_right_arr[0] = phone_close_right_arr[0] - 12;
        if (phone_close_right_prefix == "am") {
          phone_close_right_prefix = "pm";
        }
        else {
          phone_close_right_prefix = "am";
        }
      }
      else if (phone_close_right_arr[0] == 0) {
        phone_close_right_arr[0] = phone_close_right_arr[0] + 12;
      }
      else if (phone_close_right_arr[0] < 0) {
        phone_close_right_arr[0] = phone_close_right_arr[0] + 12;
        if (phone_close_right_prefix == "am") {
          phone_close_right_prefix = "pm";
        }
        else {
          phone_close_right_prefix = "am";
        }
      }
      var local_phone_close_right = phone_close_right_arr[0] + ":" + phone_close_right_arr[1] + phone_close_right_prefix;
    }
    else {
      var local_phone_close_right = parseInt(phone_close_right) + parseInt(offsetct);
      if (local_phone_close_right > 24) {
        local_phone_close_right = local_phone_close_right -24;
      }
      else if (local_phone_close_right > 12 && local_phone_close_right <= 24) {
        local_phone_close_right = local_phone_close_right - 12;
        if (phone_close_right_prefix == "am") {
          phone_close_right_prefix = "pm";
        }
        else {
          phone_close_right_prefix = "am";
        }
      }
      else if (local_phone_close_right == 0) {
        local_phone_close_right = local_phone_close_right + 12;
      }
      else if (local_phone_close_right < 0) {
        local_phone_close_right = local_phone_close_right + 12;
        if (phone_close_right_prefix == "am") {
          phone_close_right_prefix = "pm";
        }
        else {
          phone_close_right_prefix = "am";
        }
      }
      local_phone_close_right = local_phone_close_right + phone_close_right_prefix;
    }  
    
    if (chat_open.includes(':')) {
      var chat_open_arr = chat_open.split(':');
      chat_open_arr[0] = parseInt(chat_open_arr[0]) + parseInt(offsetct);
      if (chat_open_arr[0] > 24) {
        chat_open_arr[0] = chat_open_arr[0] - 24;
      }
      else if (chat_open_arr[0] > 12 && chat_open_arr[0] <= 24) {
        chat_open_arr[0] = chat_open_arr[0] - 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      else if (chat_open_arr[0] == 0) {
        chat_open_arr[0] = chat_open_arr[0] + 12;
      }
      else if (chat_open_arr[0] < 0) {
        chat_open_arr[0] = chat_open_arr[0] + 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      var local_chat_open = chat_open_arr[0] + ":" + chat_open_arr[1] + chat_open_prefix;
    }
    else {
      var local_chat_open = parseInt(chat_open) + parseInt(offsetct);
      if (local_chat_open > 24) {
        local_chat_open = local_chat_open - 24;
      }
      else if (local_chat_open > 12 && local_chat_open <= 24) {
        local_chat_open = local_chat_open - 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      else if (local_chat_open == 0) {
        local_chat_open = local_chat_open + 12;
      }
      else if (local_chat_open < 0) {
        local_chat_open = local_chat_open + 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      local_chat_open = local_chat_open + chat_open_prefix;
    }
    
    if (chat_close.includes(':')) {
      var chat_close_arr = chat_close.split(':');
      chat_close_arr[0] = parseInt(chat_close_arr[0]) + parseInt(offsetct);
      if (chat_close_arr[0] > 24) {
        chat_close_arr[0] = chat_close_arr[0] - 24;
      }
      else if (chat_close_arr[0] > 12 && chat_close_arr[0] <= 24) {
        chat_close_arr[0] = chat_close_arr[0] - 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      else if (chat_close_arr[0] == 0) {
        chat_close_arr[0] = chat_close_arr[0] + 12;
      }
      else if (chat_close_arr[0] < 0) {
        chat_close_arr[0] = chat_close_arr[0] + 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      var local_chat_close = chat_close_arr[0] + ":" + chat_close_arr[1] + chat_close_prefix;
    }
    else {
      var local_chat_close = parseInt(chat_close) + parseInt(offsetct);
      if (local_chat_close > 24) {
        local_chat_close = local_chat_close - 24;
      }
      else if (local_chat_close > 12 && local_chat_close <= 24) {
        local_chat_close = local_chat_close - 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      else if (local_chat_close == 0) {
        local_chat_close = local_chat_close + 12;
      }
      else if (local_chat_close < 0) {
        local_chat_close = local_chat_close + 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      local_chat_close = local_chat_close + chat_close_prefix;
    }

  }

  else {
    
    if (phone_open.includes(':')) {
      var phone_open_arr = phone_open.split(':');
      phone_open_arr[0] = parseInt(phone_open_arr[0]) + parseInt(offsetct) + 1;
      if (phone_open_arr[0] > 24) {
        phone_open_arr[0] = phone_open_arr[0] - 24;
      }     
      else if (phone_open_arr[0] > 12 && phone_open_arr[0] <= 24) {
        phone_open_arr[0] = phone_open_arr[0] - 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      else if (phone_open_arr[0] == 0) {
        phone_open_arr[0] = phone_open_arr[0] + 12;
      }
      else if (phone_open_arr[0] < 0) {
        phone_open_arr[0] = phone_open_arr[0] + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      var local_phone_open = phone_open_arr[0] + phone_open_prefix;
    }
    else {
      var local_phone_open = parseInt(phone_open) + parseInt(offsetct);
      if (local_phone_open > 24) {
        local_phone_open = local_phone_open - 24;
      }  
      else if (local_phone_open > 12 && local_phone_open <= 24) {
        local_phone_open = local_phone_open - 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      else if (local_phone_open == 0) {
        local_phone_open = local_phone_open + 12;
      }
      else if (local_phone_open < 0) {
        local_phone_open = local_phone_open + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      local_phone_open = local_phone_open + ":30" + phone_open_prefix;
    }

    if (phone_close.includes(':')) {
      var phone_close_arr = phone_close.split(':');
      phone_close_arr[0] = parseInt(phone_close_arr[0]) + parseInt(offsetct) + 1;
      if (phone_close_arr[0] > 24) {
        phone_close_arr[0] = phone_close_arr[0] - 24;
      }
      else if (phone_close_arr[0] > 12 && phone_close_arr[0] <= 24) {
        phone_close_arr[0] = phone_close_arr[0] - 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      else if (phone_close_arr[0] == 0) {
        phone_close_arr[0] = phone_close_arr[0] + 12;
      }
      else if (phone_close_arr[0] < 0) {
        phone_close_arr[0] = phone_close_arr[0] + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      var local_phone_close = phone_close_arr[0] + phone_close_prefix;
    }
    else {
      var local_phone_close = parseInt(phone_close) + parseInt(offsetct);
      if (local_phone_close > 24) {
        local_phone_close = local_phone_close -24;
      }
      else if (local_phone_close > 12 && local_phone_close <= 24) {
        local_phone_close = local_phone_close - 12;
        if (phone_close_prefix == "am") {
          phone_close_prefix = "pm";
        }
        else {
          phone_close_prefix = "am";
        }
      }
      else if (local_phone_close == 0) {
        local_phone_close = local_phone_close + 12;
      }
      else if (local_phone_close < 0) {
        local_phone_close = local_phone_close + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      local_phone_close = local_phone_close + ":30" + phone_close_prefix;
    }  
    
    if (chat_open.includes(':')) {
      var chat_open_arr = chat_open.split(':');
      chat_open_arr[0] = parseInt(chat_open_arr[0]) + parseInt(offsetct) + 1;
      if (chat_open_arr[0] > 24) {
        chat_open_arr[0] = chat_open_arr[0] - 24;
      }
      else if (chat_open_arr[0] > 12 && chat_open_arr[0] <= 24) {
        chat_open_arr[0] = chat_open_arr[0] - 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      else if (chat_open_arr[0] == 0) {
        chat_open_arr[0] = chat_open_arr[0] + 12;
      }
      else if (chat_open_arr[0] < 0) {
        chat_open_arr[0] = chat_open_arr[0] + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      var local_chat_open = chat_open_arr[0] + chat_open_prefix;
    }
    else {
      var local_chat_open = parseInt(chat_open) + parseInt(offsetct);
      if (local_chat_open > 24) {
        local_chat_open = local_chat_open - 24;
      }
      else if (local_chat_open > 12 && local_chat_open <= 24) {
        local_chat_open = local_chat_open - 12;
        if (chat_open_prefix == "am") {
          chat_open_prefix = "pm";
        }
        else {
          chat_open_prefix = "am";
        }
      }
      else if (local_chat_open == 0) {
        local_chat_open = local_chat_open + 12;
      }
      else if (local_chat_open < 0) {
        local_chat_open = local_chat_open + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      local_chat_open = local_chat_open + ":30" + chat_open_prefix;
    }
    
    if (chat_close.includes(':')) {
      var chat_close_arr = chat_close.split(':');
      chat_close_arr[0] = parseInt(chat_close_arr[0]) + parseInt(offsetct) + 1;
      if (chat_close_arr[0] > 24) {
        chat_close_arr[0] = chat_close_arr[0] - 24;
      }
      else if (chat_close_arr[0] > 12 && chat_close_arr[0] <= 24) {
        chat_close_arr[0] = chat_close_arr[0] - 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      else if (chat_close_arr[0] == 0) {
        chat_close_arr[0] = chat_close_arr[0] + 12;
      }
      else if (chat_close_arr[0] < 0) {
        chat_close_arr[0] = chat_close_arr[0] + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      var local_chat_close = chat_close_arr[0] + chat_close_prefix;
    }
    else {
      var local_chat_close = parseInt(chat_close) + parseInt(offsetct);
      if (local_chat_close > 24) {
        local_chat_close = local_chat_close - 24;
      }
      else if (local_chat_close > 12 && local_chat_close <= 24) {
        local_chat_close = local_chat_close - 12;
        if (chat_close_prefix == "am") {
          chat_close_prefix = "pm";
        }
        else {
          chat_close_prefix = "am";
        }
      }
      else if (local_chat_close == 0) {
        local_chat_close = local_chat_close + 12;
      }
      else if (local_chat_close < 0) {
        local_chat_close = local_chat_close + 12;
        if (phone_open_prefix == "am") {
          phone_open_prefix = "pm";
        }
        else {
          phone_open_prefix = "am";
        }
      }
      local_chat_close = local_chat_close + ":30" + chat_close_prefix;
    }

  }

  $('#phone-open').text(local_phone_open);
  $('#phone-close').text(local_phone_close);
  $('#chat-open').text(local_chat_open);
  $('#chat-close').text(local_chat_close);
  $('.phone-open-right').text(local_phone_open_right);
  $('.phone-close-right').text(local_phone_close_right);
  $('.timezone').text(Intl.DateTimeFormat('en', {timeZoneName: 'short'}).formatToParts().find(p => p.type === 'timeZoneName').value);
  
}( $ ) );

