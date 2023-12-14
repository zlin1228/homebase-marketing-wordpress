( function( $ ) {

  $('.main-wrapper__reviews--filter select').niceSelect();

  // Add slick slider
  $('.slider-wrapper').slick({
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"> </button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button">  </button>',
  });
	
}( $ ) );