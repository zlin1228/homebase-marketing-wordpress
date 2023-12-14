jQuery(document).ready(function($) {

  $('.top-bar').on('click', '.search-toggle', function(e) {
      var selector = $(this).data('selector');
      
      $(selector).toggleClass('visible').find('.search-input #s').focus();
      $(this).toggleClass('active');
      
      e.preventDefault();
  });



  $('.blog-title').click(function(){
  $(".mobile-blogmenu").toggleClass('show');
});



  $('.close-blogmenu').click(function(){
  $(".mobile-blogmenu").toggleClass('show');
});

  if(window.location.hash) {
  // smooth scroll to the anchor id
  jQuery('html, body').animate({
      scrollTop: $('[data-anchor="' + window.location.hash + '"]').offset().top - ($('.main-wrapper header').outerHeight() + $('.topbannernotice').outerHeight() + $('.blog-navbar').outerHeight() - 450) + 'px'
  }, 1000, 'swing');
  }

  $('form[name="subscribe"]').each(function() {
      $(this).validate({
          rules: {
            email: {
                validate_email: true,
                required: true,
                email: true
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
            // Optionally alert the user of success here...
                var modalID = form.find('input[name="modal_ID"]').val();
                var modal;
                if(modalID)
                    modal = jQuery('[data-remodal-id = "blog-modal-'+modalID+'"]').remodal();
                else
                    modal = jQuery('[data-remodal-id = "blog-modal"]').remodal();
                modal.open();
            })
          }
      });
  });

  $('.st-share').on('click', function(e){
    e.preventDefault();
    window.open(this.href, '', 'height=500, width=500'); 
  });

  $('.st-connection').on('click', function(e){
    e.preventDefault();

    var inputc = document.body.appendChild(document.createElement("input"));
    inputc.value = window.location.href;
    inputc.select();
    document.execCommand('copy');
    inputc.parentNode.removeChild(inputc);

    var tooltip = $(this).find('.tooltiptext');
    tooltip.addClass("show");;
    tooltip.html("Copied link");
  });

  $('.st-connection').on('mouseout', function(){
    var tooltip = $(this).find('.tooltiptext');
    tooltip.removeClass("show");
    tooltip.html("");
  });
});

jQuery(window).on('scroll',function(){
  var scroll = jQuery(window).scrollTop();
  if (scroll > 0) {
    jQuery("#nav-header").addClass("onscroll");
  } else {
    jQuery("#nav-header").removeClass("onscroll");
  }
});

jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid Email.");

function copyToClipboard(text) {
  
}