( function( $ ) {
  $(window).scroll(function(event){ 

    if($('.logo-slider').length > 0 && $(window).width() < 641){
      $('.tweet-grid').slick({
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
      });
    }
    
    $(window).off(event);
  });

}( jQuery ) );
