(function() {
  var scriptsArr = ["slick.min.js", "jquery.validate.min.js", "lazysizes.min.js", "jquery.matchHeight-min.js", "foundation.min.js", "custom.min.js", "remodal.min.js"];

  var url = window.location.protocol + "//" + location.host.split(":")[0] + '/wp-content/themes/grunterie-master/js/';
  var blogscript = url + 'blog.min.js';

    for(var i = 0; i < scriptsArr.length; i++) {
    var src = url + scriptsArr[i];
    
    if( i==0 ) {
      $.getScript(src, function() {
        initslider()
      });
    }

    else if(i==1) {
      $.getScript(src, function() {
        $.getScript(blogscript, function() {
          console.log( "Blogscript Load was performed." );
        });
      });
    }
    else
      $.getScript(src, function() {
        console.log( "Load was performed." );
      });
  }
})();

function initslider() {
  if(jQuery('.post-slider').length > 0) {
    setTimeout(function(){
      $('.post-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        arrows: true
      });
    }, 500);
  }
}