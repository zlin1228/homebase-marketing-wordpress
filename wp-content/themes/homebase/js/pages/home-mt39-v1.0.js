( function( $ ) {

  if($('.section-3-columns.products .column-desc').length > 0) {
    $('.section-3-columns.products .column-desc').matchHeight();
  }

  $(window).scroll(function(event){ 

    if( $('.testimonials').length > 0 ) {
      $('.testimonials').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        arrows: true
      });
    }
  
    if( $('.proof-slider').length > 0 ) {
      $(".proof-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<span class="dot">'+$(slider.$slides[i]).attr("title")+'</span>';
                },
        responsive: [{ 
            breakpoint: 640,
            settings: {
                dots: true,
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            } 
        }]
      });
    }

    $(window).off(event);
  });

}( jQuery ) );
