window.addEventListener( 'load', function() {
  jQuery(document).ready(function(){

    $("input[type='email']").focusout(function(e){
      e.preventDefault();

      if($("input[type='email']").val())
        return true;
      else
        return false
    });
  });

  var max_hours = 12; //12 when AM/PM mode, 24 without that format
  var max_minutes = 59;
  var max_break = 99999 // (in minutes)

  var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
  var maxCard = 7;

  jQuery(document).ready(function(){
    initTable();
    initCard();

    $('a.add_timecard').click(function(e){
      e.preventDefault();
      if($('.timecard-container').length < 7) {
        $('.timecard-container select').each( function() {
          $(this).prop("disabled", true);
        })

        $('.timecard-group').append(createTimeCard());
          initCard();
      }
    });

  });

  function initTable() {
    var table = $('table');
    table.find(".startingtime .timepicker, .endingtime .timepicker").timepicker({ 
      timeFormat: 'h:mm p',
      dropdown: false,
      change: function(time) {
        // the input field
        if(!time) {
          reGenerateTotalInTable();
          return;
        }

        var $table = $(this).closest('table');
        var $td = $(this).closest('td');
        var index = $td.index();
        $table.find('td').removeClass('active-day');
        $table.find('tr').each(function() {
            $(this).find('td').eq(index).addClass('active-day');
        });

        var $startingtime = $('.startingtime .active-day .timepicker').timepicker('getTime');
        var $endingtime = $('.endingtime .active-day .timepicker').timepicker('getTime');
        
        if($startingtime && $endingtime) {
          calculateTimeInTable();
        }
      }
    });

    table.find(".breaktime .timepicker").timepicker({
      timeFormat: 'H:mm',
      defaultTime: '0',
      dropdown: false,
      change: function(time) {
        // the input field
        if(!time) {
          $('.breaktime .active-day .timepicker').timepicker('setTime', '0');
        } 

        var $table = $(this).closest('table');
        var $td = $(this).closest('td');
        var index = $td.index();
        $table.find('td').removeClass('active-day');
        $table.find('tr').each(function() {
            $(this).find('td').eq(index).addClass('active-day');
        });

        var $startingtime = $('.startingtime .active-day .timepicker').timepicker('getTime');
        var $endingtime = $('.endingtime .active-day .timepicker').timepicker('getTime');
        
        if($startingtime && $endingtime) {
          calculateTimeInTable();
        }
      }
    });
  }

  function initCard() {
    $lastCard = $('.timecard-container:last');
    $lastCard.find(".startingtime .timepicker, .endingtime .timepicker").timepicker({ 
      timeFormat: 'h:mm p',
      dropdown: false,
      change: function(time) {
        // the input field
        if(time == '')  return;

        $('.timecard-container').removeClass('active-day');

        var $card = $(this).closest('.timecard-container');
        $card.addClass('active-day');

        var $startingtime = $card.find('.startingtime .timepicker').timepicker('getTime');
        var $endingtime = $card.find('.endingtime .timepicker').timepicker('getTime');
        
        if($startingtime && $endingtime) {
          calculateTimeInCard();
        }
      }
    });

    $lastCard.find(".breaktime .timepicker").timepicker({ 
      timeFormat: 'H:mm',
      defaultTime: '0',
      dropdown: false,
      change: function(time) {
        // the input field
        if(time == '')  return;

        $('.timecard-container').removeClass('active-day');

        var $card = $(this).closest('.timecard-container');
        $card.addClass('active-day');

        var $startingtime = $card.find('.startingtime .timepicker').timepicker('getTime');
        var $endingtime = $card.find('.endingtime .timepicker').timepicker('getTime');
        
        if($startingtime && $endingtime) {
          calculateTimeInCard();
        }
      }
    });

    $lastCard.find('a.remove-timecard').click(function(e){
      e.preventDefault();
      $(this).closest('.timecard-container').remove();
      writeGeneralTotalInCard();
    });

    $lastCard.find("select").change(function (e) {
        $(this).closest('.timecard-container').attr('data-day', $(this).val());
    });
  }

  function calculateTimeInTable(){

    var starting_time = $('.startingtime .active-day .timepicker').timepicker('getTime');
    var starting_hour = starting_time.getHours() % 12;
    var starting_minutes = starting_time.getMinutes();
    var starting_indication = parseInt(starting_time.getHours() / 12) ? 720 : 0;

    var ending_time = $('.endingtime .active-day .timepicker').timepicker('getTime');
    var ending_hour = ending_time.getHours() % 12;
    var ending_minutes = ending_time.getMinutes();
    var ending_indication = parseInt(ending_time.getHours() / 12) ? 720 : 0;

    var break_time = $('.breaktime .active-day .timepicker').timepicker('getTime');
    var break_hour = break_time.getHours();
    var break_minutes = break_time.getMinutes();

    // validate if starting format is correct
    if(
        starting_hour > max_hours ||
        starting_hour < 0 ||
        starting_minutes > max_minutes ||
        starting_minutes < 0
    ){
        $('.active-day').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.startingtime .active-day').addClass('error');
        $('.totaltime .active-day .total').addClass('error');
        $('.totaltime .active-day .total').html("Starting Time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // validate if ending format is correct
    } else if(
        ending_hour > max_hours ||
        ending_hour < 0 ||
        ending_minutes > max_minutes ||
        ending_minutes < 0
    ){
        $('.active-day').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.endingtime .active-day').addClass('error');
        $('.totaltime .active-day .total').addClass('error');
        $('.totaltime .active-day .total').html("Ending Time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // validate if break format is correct
    }
    else if(
        break_hour > max_hours ||
        break_hour < 0 ||
        break_minutes > max_minutes ||
        break_minutes < 0
    ){
        $('.active-day').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.breaktime .active-day').addClass('error');
        $('.totaltime .active-day .total').addClass('error');
        $('.totaltime .active-day .total').html("Break time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // calculate total starting, ending and break time in minutes
    }
    else {
        var total_start = (starting_hour*60) + starting_indication + starting_minutes;
        var total_ending = (ending_hour*60) + ending_indication + ending_minutes;
        var total_break = (break_hour*60)+ break_minutes;

        // validate that starting time isn't smaller than ending time
        if(total_start > total_ending){
            $('.active-day').removeClass('error');
            $('.result-hours').removeClass('error');
            $('.endingtime .active-day').addClass('error');
            $('.totaltime .active-day .total').addClass('error');
            $('.totaltime .active-day .total').html("Ending Time Error");
            $('.result-hours').addClass('error');
            $('.result-hours').html("Error");

        // validate that break time doesn't exceed
        } else{
            $('.active-day').removeClass('error');
            $('.result-hours').removeClass('error');
            var total = total_ending - total_start - total_break;
            $('.totaltime .active-day .totalinput').val(total);

            // validate that any value is empty
            if(isNaN(total)){
                $('.active-day').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.totaltime .active-day .total').addClass('error');
                $('.totaltime .active-day .total').html("A value is null");
                $('.totaltime .active-day .totalinput').val(0);
                $('.result-hours').addClass('error');
                $('.result-hours').html("Error");
            // validate that break time isn't exceeding
            } else if(total_break > max_break || total < 0){
                $('.active-day').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.breaktime .active-day').addClass('error');
                $('.totaltime .active-day .total').addClass('error');
                $('.totaltime .active-day .total').html("Break time is exceeding");
                $('.result-hours').addClass('error');
                $('.result-hours').html("Error");

            // print total
            } else{
                $('.totaltime .active-day .total').removeClass('error');

                var hours = Math.floor(total / 60);
                var minutes = total - (hours * 60);

                if (minutes < 10){
                    $('.totaltime .active-day .total').html(hours + ('h 0') + minutes + ('m'));
                } else{
                    $('.totaltime .active-day .total').html(hours + ('h ') + minutes + ('m'));
                }

                writeGeneralTotalInTable();
            }
        }
    }
  }

  function writeGeneralTotalInTable(){
    var general_total = 0;
    var $columns = $('.totaltime' ).find('td');

    jQuery.each($columns, function(i, item) {
      if(i > 0) {
        general_total += parseInt($(item).find('.totalinput').val());
      }
    });

    var general_hours = Math.floor(general_total / 60);
    var general_minutes = general_total - (general_hours * 60);

    if (general_minutes < 10){
      $('.result-hours').html(general_hours + ('h 0') + general_minutes + ('m'));
      $('.form-total-hours').val(general_hours + ('h 0') + general_minutes + ('m'));
        } else{
      $('.result-hours').html(general_hours + ('h ') + general_minutes + ('m'));
      $('.form-total-hours').val(general_hours + ('h ') + general_minutes + ('m'));
    }
  }

  function reGenerateTotalInTable() {
    $('.totaltime .active-day .totalinput').val(0);
    $('.totaltime .active-day .total').html('0:00');

    writeGeneralTotalInTable();
  }

  function calculateTimeInCard(){

    var starting_time = $('.active-day .startingtime .timepicker').timepicker('getTime');
    var starting_hour = starting_time.getHours() % 12;
    var starting_minutes = starting_time.getMinutes();
    var starting_indication = parseInt(starting_time.getHours() / 12) ? 720 : 0;

    var ending_time = $('.active-day .endingtime .timepicker').timepicker('getTime');
    var ending_hour = ending_time.getHours() % 12;
    var ending_minutes = ending_time.getMinutes();
    var ending_indication = parseInt(ending_time.getHours() / 12) ? 720 : 0;

    var break_time = $('.active-day .breaktime .timepicker').timepicker('getTime');
    var break_hour = break_time.getHours();
    var break_minutes = break_time.getMinutes();

    // validate if starting format is correct
    if(
        starting_hour > max_hours ||
        starting_hour < 0 ||
        starting_minutes > max_minutes ||
        starting_minutes < 0
    ){
        $('.active-day *').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.active-day .startingtime').addClass('error');
        $('.active-day .totaltime .total').addClass('error');
        $('.active-day .totaltime .total').html("Starting Time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // validate if ending format is correct
    } else if(
        ending_hour > max_hours ||
        ending_hour < 0 ||
        ending_minutes > max_minutes ||
        ending_minutes < 0
    ){
        $('.active-day *').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.active-day .endingtime').addClass('error');
        $('.active-day .totaltime .total').addClass('error');
        $('.active-day .totaltime .total').html("Ending Time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // validate if break format is correct
    }
    else if(
        break_hour > max_hours ||
        break_hour < 0 ||
        break_minutes > max_minutes ||
        break_minutes < 0
    ){
        $('.active-day *').removeClass('error');
        $('.result-hours').removeClass('error');
        $('.active-day .breaktime').addClass('error');
        $('.active-day .totaltime .total').addClass('error');
        $('.active-day .totaltime .total').html("Break time Error");
        $('.result-hours').addClass('error');
        $('.result-hours').html("Error");

    // calculate total starting, ending and break time in minutes
    }
    else {
        var total_start = (starting_hour*60) + starting_indication + starting_minutes;
        var total_ending = (ending_hour*60) + ending_indication + ending_minutes;
        var total_break = (break_hour*60)+ break_minutes;

        // validate that starting time isn't smaller than ending time
        if(total_start > total_ending){
            $('.active-day *').removeClass('error');
            $('.result-hours').removeClass('error');
            $('.active-day .endingtime').addClass('error');
            $('.active-day .totaltime .total').addClass('error');
            $('.active-day .totaltime .total').html("Ending Time Error");
            $('.result-hours').addClass('error');
            $('.result-hours').html("Error");

        // validate that break time doesn't exceed
        } else{
            $('.active-day *').removeClass('error');
            $('.result-hours').removeClass('error');
            var total = total_ending - total_start - total_break;
            $('.active-day .totaltime .totalinput').val(total);

            // validate that any value is empty
            if(isNaN(total)){
                $('.active-day *').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.active-day .totaltime .total').addClass('error');
                $('.active-day .totaltime .total').html("A value is null");
                $('.totaltime .active-day .totalinput').val(0);
                $('.result-hours').addClass('error');
                $('.result-hours').html("Error");
            // validate that break time isn't exceeding
            } else if(total_break > max_break || total < 0){
                $('.active-day *').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.active-day .breaktime').addClass('error');
                $('.active-day .totaltime .total').addClass('error');
                $('.active-day .totaltime .total').html("Break time is exceeding");
                $('.result-hours').addClass('error');
                $('.result-hours').html("Error");

            // print total
            } else{
                $('.active-day .totaltime .total').removeClass('error');

                var hours = Math.floor(total / 60);
                var minutes = total - (hours * 60);

                if (minutes < 10){
                    $('.active-day .totaltime .total').html(hours + ('h 0') + minutes + ('m'));
                } else{
                    $('.active-day .totaltime .total').html(hours + ('h ') + minutes + ('m'));
                }

                writeGeneralTotalInCard();
            }
        }
    }
  }

  function writeGeneralTotalInCard(){
    var general_total = 0;

    $('.timecard-container .totaltime').each(function() {
        general_total += parseInt($(this).find('.totalinput').val());
    });

    var general_hours = Math.floor(general_total / 60);
    var general_minutes = general_total - (general_hours * 60);

    if (general_minutes < 10){
      $('.result-hours').html(general_hours + ('h 0') + general_minutes + ('m'));
      $('.form-total-hours').val(general_hours + ('h 0') + general_minutes + ('m'));
        } else{
      $('.result-hours').html(general_hours + ('h ') + general_minutes + ('m'));
      $('.form-total-hours').val(general_hours + ('h ') + general_minutes + ('m'));
    }
  }
  
  function createTimeCard() {
    var freeDays = days;
    $('.timecard-container').each( function(){
      var d = $(this).attr('data-day');
      freeDays = $.grep(freeDays, function(v) {
        return v != d;
      });
    });

    var cardContent = ''

    cardContent =     '<div class="timecard-container" data-day="' + freeDays[0] + '">' +
                        '<div class="item-wrap">' +
                          '<div class="item-row">' +
                            '<div class="item-col">' +
                              '<div class="item-label">select your day of work</div>' + 
                                '<div class="item-content">' + 
                                  '<select class="days">';
                                    freeDays.forEach(function(item) {
                                      cardContent += '<option value="'+ item +'">'+ item +'</option>';
                                    });
    cardContent +=                '</select>' + 
                                '</div>'+
                              '</div>'+
                            '</div>'+
                            '<div class="item-row">'+
                              '<div class="item-col startingtime"  style="margin-right: 13px;">'+
                                '<div class="item-label">Starting Time</div>'+
                                '<div class="item-content">'+
                                  '<input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>'+
                                '</div>'+
                              '</div>'+
                              '<div class="item-col endingtime" style="margin-left: 13px;">'+
                                '<div class="item-label">Ending Time</div>'+
                                '<div class="item-content">'+
                                  '<input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                            '<div class="item-row breaktime">'+
                              '<div class="item-col">'+
                                '<div class="item-label">Insert your break period</div>'+
                                '<div class="item-content">'+
                                  '<input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                            '<div class="item-row totaltime">'+
                              '<div class="item-col">'+
                                '<div class="item-label">Total Hours</div>'+
                              '</div>'+
                              '<div class="item-col">'+
                                '<div class="item-content">'+
                                  '<input type="hidden" value="00" class="totalinput"><div class="total">0h 00m</div>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                          '<a class="remove-timecard" href="#">Remove</a>'+
                        '</div>'+
                      '</div>';

    return cardContent;
  }

});
