( function( $ ) {

	if($(window).width() > 640){
    $('.parallax-content1').paroller({
        factorXs: 0.0,
        factorSm: 0.0,
        factorMd: 0.4,
        factorLg: 0.4,
        factorXl: 0.4,
        factor: 0.4,
        type: 'foreground',
        transition: 'transform 0.5s ease',
    });

    $('.parallax-content2').paroller({
      factorXs: 0.0,
      factorSm: 0.0,
      factorMd: 0.7,
      factorLg: 0.7,
      factorXl: 0.7,
      factor: 0.7,
      type: 'foreground',
      transition: 'transform 0.8s ease',
    });
  }

  $('a.watch-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: true
  });

  $('.integrations-tabs li').click(function() {
		var catId = $(this).attr('cat-id');

		$('.integrations-tabs li').removeClass('active');
		$(this).addClass('active');

		// title
		$('.integrations-tab-title h2').text($(this).text());

		if (catId == 'all') {

			$('.integrations-posts .col').addClass('active');

		} else {

			$('.integrations-posts .col').removeClass('active');

			$('.integrations-posts .col').each(function() {
				var postCats = $(this).attr('cat-it').split(',');

				if (jQuery.inArray(catId, postCats) != -1) {
					$(this).addClass('active');
				}
			});

		}
	});
	
}( $ ) );