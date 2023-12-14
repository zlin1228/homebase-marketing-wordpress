

( function( $ ) {

  $(window).on('scroll',function(event){
    if($('.post-slider').length > 0) {
      $('.post-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        arrows: true
      });
    }
  
    $(window).off(event);
  });
	
}( $ ) );