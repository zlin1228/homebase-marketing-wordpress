( function( $ ) {

  /*$(window).on('scroll',function(){
    var st = $(window).scrollTop();

    if(st > 0) {
      $("header").css('background', 'white');
    }
    else {
      $("header").css('background', 'none');
    }
  });*/

  // Sub nav scroll 
  var lastScrollTop = 0;

  $(window).scroll(function(event){
    var st = $(this).scrollTop();

      if (st > 0){
        // downscroll code
        $(".section-navbar").addClass("scrolled");
      } else {
        // upscroll code
        $(".section-navbar").removeClass("scrolled");
      }

      if (st > lastScrollTop && st > 150){
        // downscroll code
        $(".section-navbar").addClass("hidden");
      } else {
        // upscroll code
        $(".section-navbar").removeClass("hidden");
      }
      lastScrollTop = st;
  });
	
}( $ ) );