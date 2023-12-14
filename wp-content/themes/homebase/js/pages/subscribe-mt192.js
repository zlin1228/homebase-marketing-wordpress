jQuery(document).ready(function($) {

  $('header').on('click', '.search-toggle', function(e) {
    e.preventDefault();
    
    $('#blog-menu').toggleClass('visible');
    $('header').toggleClass('search-active');
    $(this).toggleClass('active');
  });

  $('.blog-title').click(function(){
    $(".mobile-blogmenu").toggleClass('show');
  });

  $('.close-blogmenu').click(function(){
    $(".mobile-blogmenu").toggleClass('show');
  });

  $.get("https://ipinfo.io", function (response) {
    var userCountry = response.country;
    if (userCountry == "US") {
      userCountry = "United States";
    } 
    $('.subscribe-country').val(userCountry);
    $('.subscribe-source-url').val(window.location);
  }, "jsonp");

  $('form[name="subscribe-header"]').each(function() {
      $(this).validate({
          rules: {
            email: {
                validate_email: true,
                required: true,
                email: true
            }
          },
          messages : {
          email: {
              email: "Please enter a valid email address"
          }
          },
          submitHandler: function(form) {
            
            var form = $(form);
            var url = form.attr('action');
            var data = form.serialize();
            
            $.ajax({
                type: "POST",
                url: url,
                data: data, 
            }).done(function(data) {
                location.href = "/subscribe-success/";
            })
          }
      });
  });

  $('form[name="subscribe-cta"]').each(function() {
      $(this).validate({
          rules: {
            email: {
                validate_email: true,
                required: true,
                email: true
            }
          },
          messages : {
          email: {
              email: "Please enter a valid email address"
          }
          },
          submitHandler: function(form) {

            var form = $(form);
            var url = form.attr('action');
            var data = form.serialize();
            
            $.ajax({
                type: "POST",
                url: url,
                data: data, 
            }).done(function(data) {
                location.href = "/subscribe-success/";
            })
          }
      });
  });

});

jQuery(window).on('scroll',function(){

  var scroll = jQuery(window).scrollTop();
  if (scroll > 0) {
    jQuery("#nav-header").addClass("onscroll");
    jQuery("#blog-navbar").css("top", $('header').position().top + $('header').outerHeight() + "px");
  } else {
    jQuery("#nav-header").removeClass("onscroll");
    jQuery("#blog-navbar").css("top", "0");
  }
});

jQuery.validator.addMethod("validate_email", function(value, element) {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid Email.");