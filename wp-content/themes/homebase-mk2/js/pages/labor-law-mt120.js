( function( $ ) {

  $.validator.addMethod("validate_email", function(value, element) {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
  }, "Please enter a valid Email.");

  $('form[name="subscribe"]').each(function() {
    $(this).validate({
        rules: {
          email: {
              required: true,
              email: true,
              validate_email: true
          },
          location_state: {
              required: true
          },
        },
        messages : {
          email: {
              email: "Please enter a valid email address"
          },
          location_state: {
              required: "Please select your state"
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
              data: data, // serializes the form's elements.
          }).done(function(data) {
              var modal = $(`[data-remodal-id='modal-subscribe']`).remodal();
              modal.open();
          })
        }
    });
  });

  $("a.read-more").click(function(e){
    e.preventDefault();
    var target = $(this).prev('.card-content');
    if($(this).hasClass('open')) {
      $(target).animate({height:135}, 500);

      $(this).removeClass('open');
      $(this).text('Read more');
    }

    else {
      $(target).animate({
        height: $(target).get(0).scrollHeight
      }, 500, function(){
        $(target).height('auto');
      });

      $(this).addClass('open');
      $(this).text('Read less');
    }
  });

  $('.card ').each(function() {
    var conHeight = $(this).find('.card-content').get(0).scrollHeight;

    if($(window).width() >= 640 && conHeight < 136 )
      $(this).addClass('card-noexpand');
    else if($(window).width() < 641 && conHeight < 191 )
      $(this).addClass('card-noexpand');
  });

  $('#liststate').on('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
          window.open(url, '_blank');
      }
      return false;
  });
	
}( $ ) );