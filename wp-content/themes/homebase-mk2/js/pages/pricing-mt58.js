( function( $ ) {

  $('.pricing-price').matchHeight();
  $('.pricing-meta').matchHeight();
  $('.pricing-subheadline').matchHeight();
  $('.icon-list .icon-list-item').matchHeight();

  $('.pricing-toggle li').click(function() {
    $('.pricing-toggle li').removeClass('active');
    $(this).addClass('active');

    var type = $(this).data('type');

    $('.pricing-price').each(function() {
      $(this).text($(this).attr(type));
    });

    $('.pricing-meta').each(function() {
      $(this).text($(this).attr(type));
    });
  });

  $('#pricing-toggle').click(function(){
      var val = $(this).is(":checked");

    $('.bill-text').removeClass('active');

        var type = "monthly";
        if(val == true) { //annualy
            type = "annual";
      $('.bill-text.annually').addClass('active');
            //$('.save-text').removeClass('monthly');
        } else {
      $('.bill-text.monthly').addClass('active');
            //$('.save-text').addClass('monthly');
        }



    $('.plan-price-value').each(function() {
      $(this).html( $(this).attr(type) );
    });

    $('.pricing-price').each(function() {
      $(this).html( $(this).attr(type) );
    });

    $('.pricing-meta').each(function() {
      $(this).html( $(this).attr(type) );
    });
  });

	$(window).resize(function() {
    fixStickyHeader();
  });

  function fixStickyHeader() {
    var widthTh = $('th.bg--white').width();
    var heightTh = $('th.bg--white div').height();

    if( $('th.empty-cell div').hasClass('sticky')) {
      $('th.empty-cell div').css( "height", (heightTh + 1) + 'px' );
    }

    if( $('th.bg--white div').hasClass('sticky') ) {

          //$('th.bg--white div.sticky').css( "width", (widthTh + 1) + 'px' );
      $('th.bg--white:nth-child(2) div.sticky').css( "width", (widthTh + 2) + 'px' );
      $('th.bg--white:nth-child(3) div.sticky').css( "width", (widthTh + 1) + 'px' );
      $('th.bg--white:nth-child(4) div.sticky').css( "width", (widthTh + 1) + 'px' );
      $('th.bg--white:nth-child(5) div.sticky').css( "width", (widthTh + 2) + 'px' );
    } else {
      $('th.bg--white>div').css("width","100%");
    }
  }
 
  var tempTableO = 0;
  var tempTableH = 0;
	$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var pricingDTOffset = $(".pricing-detailed .table-scroll").offset().top;
    var pricingDTHeight = $(".pricing-detailed .table-scroll").outerHeight();
    var top = $("#masthead").outerHeight();
        //console.log("scroll: " + scroll);

    if ($(window).width() > 767) {
      if(!$("thead tr th>div").hasClass("sticky")) {
        if((scroll + top) >= pricingDTOffset) {
            $('thead tr th').css('opacity',1);
            $("thead tr th>div").addClass("sticky");
            $("thead tr th>div").css('top', top+'px');
            var stickyH = $("thead tr th.bg--white>div").outerHeight();
            $('.pricing-detailed .table-scroll').css('margin-top', $("thead tr th.bg--white>div").outerHeight());
            tempTableO = pricingDTOffset;
            tempTableH = pricingDTHeight;
        }
      }
      else {
        if((scroll + top) < tempTableO) {
          $("thead tr th>div").removeClass("sticky");
          $("thead tr th>div").css('top', '0');
          $('.pricing-detailed .table-scroll').css('margin-top','0');
        }
        else {
          if((scroll + top) >= tempTableO + tempTableH - $("thead tr th.bg--white>div").outerHeight()) {
            $('thead tr th').css('opacity',0);
          }
          else {
            $('thead tr th').css('opacity',1);
          }
        } 
      }
    }

    fixStickyHeader();
  });

	$('p.list-meta').on('click',function(e) {
      e.preventDefault();
          if ($(window).width() < 640){
              var list = $(this).siblings('ul.pricing-table-list');
              list.toggle(200, 'swing');
      $(this).toggleClass('open');
      }
  });
	
}( $ ) );