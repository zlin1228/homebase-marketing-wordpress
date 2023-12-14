( function( $ ) {

  $('a.play-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: true
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

	$('#toggle-videoes').on('click', function(){
    $(this).toggleClass('open');

		$('.video-grid .video-card.hidden').each(function() {
			$(this).slideToggle();
		});
  });


	$(window).scroll(function(event){ 
		if( $('#tweet-slider').length > 0 ) {
			$('#tweet-slider').slick({
				infinite: true,
				centerMode: true,
				arrows: false,
				dots: true,
				variableWidth: true,
				autoplay: true,
  			autoplaySpeed: 5000,
				customPaging : function(slider, i) {
          return '<div class="dot"></div>';
        },
				responsive: [
					{
						breakpoint: 768,
						settings: {
							centerMode: false,
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							variableWidth: false,
						}
					},
				]
			});

			$(window).off(event);
		}
	});
	
}( $ ) );