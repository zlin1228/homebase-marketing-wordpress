jQuery(document).ready(function($) {

  var lastScrollTop = 0;

  $(window).scroll(function(event){
    var st = $(this).scrollTop();

    /*if (st > 0){
      // downscroll code
      $(".section-navbar").addClass("scrolled");
    } else {
      // upscroll code
      $(".section-navbar").removeClass("scrolled");
    }*/

    if (st > lastScrollTop && st > 80){
      // downscroll code
      $("#masthead").addClass("hidden");
    } else {
      // upscroll code
      $("#masthead").removeClass("hidden");
    }
    lastScrollTop = st;
  });

  $.get("https://ipinfo.io", function (response) {
    var userCountry = response.country;
    if (userCountry == "US") {
      userCountry = "United States";
    } 
    $('.subscribe-country').val(userCountry);
    $('.subscribe-source-url').val(window.location);
  }, "jsonp");

  $('form[name="subscribe-fow"]').each(function() {
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
                $('.section-newsletter .subheadline').text("Thank you for signing up. We’ll be in touch with more useful insights from our Future of Local Work report. ");
                $('.form').css('visibility', 'hidden');
            })
          }
      });
  });

/*  setTimeout(function start (){  
    $('.section-resignation-vertical .chart-fill').each(function(i){  
      var $bar = $(this);
      setTimeout(function(){
        $bar.css('height', $bar.attr('data-percent') + '%');      
      }, i*100);
    });
  }, 500);*/

/*  setTimeout(function start (){  
    $('.section-resignation-horizontal .chart-fill').each(function(i){  
      var $bar = $(this);
      setTimeout(function(){
        $bar.css('width', $bar.attr('data-percent') + '%');      
      }, i*100);
    });
  }, 500);*/

  

  
	
});

function isElementInViewport (el) {
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && 
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) 
    );
}

// Capture scroll events
  $(window).scroll(function(){

    if (isElementInViewport($('.section-are-you-ready .yellow-bg'))) {
      $('.section-are-you-ready .yellow-bg').addClass('start');
    }

    if (isElementInViewport($('.section-resignation-vertical .yellow-bg'))) {
      $('.section-resignation-vertical .yellow-bg').addClass('start');
    }

    if (isElementInViewport($('.section-resignation-horizontal .yellow-bg'))) {
      $('.section-resignation-horizontal .yellow-bg').addClass('start');
    }

    if (isElementInViewport($('.section-smb .yellow-bg'))) {
      $('.section-smb .yellow-bg').addClass('start');
    }  

    if (isElementInViewport($('.section-resignation-horizontal .chart-fill'))) {
      $('.section-resignation-horizontal .chart-fill').each(function(i){  
        var $bar = $(this);
        setTimeout(function(){
          $bar.css('width', $bar.attr('data-percent') + '%');      
        }, i*100);
      });
    }  

    if (isElementInViewport($('.section-resignation-vertical .chart-fill'))) {
      $('.section-resignation-vertical .chart-fill').each(function(i){  
        var $bar = $(this);
        setTimeout(function(){
          $bar.css('height', $bar.attr('data-percent') + '%');      
        }, i*100);
      });
    } 
               
  });

jQuery.validator.addMethod("validate_email", function(value, element) {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid Email.");
