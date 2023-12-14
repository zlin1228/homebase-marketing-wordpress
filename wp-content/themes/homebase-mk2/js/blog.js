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

  if(window.location.hash && $('[data-anchor="' + window.location.hash + '"]').length > 0) {
    // smooth scroll to the anchor id
    $('html, body').animate({
        scrollTop: $('[data-anchor="' + window.location.hash + '"]').offset().top - ($('header .header-inner').outerHeight() + $('.blog-navbar').outerHeight() - 450) + 'px'
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

  if ($('.post-content h2').length > 0) {
  $('#section-table-of-contents').prepend('<nav class="table-of-contents"><h3>Table of Contents</h3><ul></ul></nav>');
}
  $('.post-content').find('h2').each(function(hnum) {
    var item = $(this);
    var inner_text = $(this).text();
    var classlist = $(this).attr('class');

    if (classlist != null) {
      $(this).replaceWith('<h2 id="toc-' + hnum + '" class="' + classlist + '">' + inner_text + "</h2>");
    }
    else {
      $(this).replaceWith('<h2 id="toc-' + hnum + '">' + inner_text + "</h2>");
    }
    

    var li = $('<li/>');
    var a = $('<a/>', {text: item.text(), href: '#toc-' + hnum, title: item.text()});
    a.appendTo(li);
    $('#section-table-of-contents .table-of-contents ul').append(li);
  });
});

jQuery(window).on('scroll',function(event){
  if(jQuery('.post-slider').length > 0) {
    $('.post-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      variableWidth: true,
      prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
      nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
            prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
            nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
            arrows: true,
          }
        }
      ]
    });
  }

  $(window).off(event);
});

jQuery(window).on('scroll',function(){

  var scroll = jQuery(window).scrollTop();
  if (scroll > 0) {
    jQuery("#nav-header").addClass("onscroll");
    $("#blog-navbar").addClass('scrolled');
    jQuery("#blog-navbar").css("top", $('header').position().top + $('header').outerHeight() + $('.eoy-countdown').outerHeight() + "px");
    $('.section-bottom-cta').show();
  } else {
    jQuery("#nav-header").removeClass("onscroll");
    $("#blog-navbar").removeClass('scrolled');
    jQuery("#blog-navbar").css("top", "0");
  }
  if (scroll > 100) {
    $('.section-bottom-cta').show();
  }
  else {
    $('.section-bottom-cta').hide();
  }

});

jQuery.validator.addMethod("validate_email", function(value, element) {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid Email.");

/*****************
 Amplitude events
*****************/

$('.section-bottom-cta .button').click(function() {
  var event = "Button Clicked";
  var eventProperties = {
    "product_area" : "mw_" + window.location.pathname.replaceAll("/","").replaceAll("-","_"),
    "event_category": "section_bottom_cta",
    "button_text": $(this).text(),
    "action_type": "click",
    "filtered_path": window.location.pathname,
    "full_path" : window.location.pathname + window.location.search + window.location.hash,
    "query_params" : window.location.search,
    "screen_height" : screen.height,
    "screen_width" : screen.width
  };
  amplitude.getInstance().logEvent(event, eventProperties);
});


/*******************
 Google Analytics 4
*******************/

$('.st-share').click(function() {
  dataLayer.push({ 
    "event": "blogSocialShare", 
    "socialPlatform": $(this).attr('data-network'), 
    "blogAuthor": $('.post-author .name').text(),
    "blogCategory": $($('.post-meta span')[0]).text(),
  });
});

$('.st-connection').click(function() {
  dataLayer.push({ 
    "event": "blogSocialShare", 
    "socialPlatform": "Link Share", 
    "blogAuthor": $('.post-author .name').text(),
    "blogCategory": $($('.post-meta span')[0]).text(),
  });
});

$('.single-post .section-subscribe-banner form').submit(function() {
  dataLayer.push({ 
    "event": "newsletterSubscription", 
    "blogAuthor": $('.post-author .name').text(),
    "blogCategory": $($('.post-meta span')[0]).text(),
  });
});

$('.blog .section-subscribe-banner .button').click(function() {
  dataLayer.push({ 
    "event": "newsletterSubscription", 
    "source": "Main blog page"  
  });
});

$('#searchform').submit(function() {
  var previousNumberOfSearches = (getCookie('searchSubmit')) ? getCookie('searchSubmit') : 0;
  setCookieWithTime('searchSubmit', parseInt(previousNumberOfSearches) + 1, 86400000);
  dataLayer.push({ 
    "event": "search", 
    "searchTerm": $('#searchinput').val(),
    "previousNumberOfSearches" : previousNumberOfSearches
  });
});