( function( $ ) {

  $('.section-3-columns .title').matchHeight();

  $('a.watch-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: true
  });

  $('.tabs .tab').on('click', function(e) {
    e.preventDefault();
    var currentAttrValue = $(this).attr('data-tab');

    // Show/Hide Tabs
    $('.tab-contents ' + currentAttrValue).fadeIn(400).siblings().hide();

    // Change/remove current tab to active
    $(this).addClass('active').siblings().removeClass('active');

    return false;
  });

  if (window.location.pathname == "/payanywhere/") {
    var search = window.location.search;
    
    if ( search == "" || search.includes('utm_medium') || search.includes('utm_source') ) {
      window.history.replaceState(null, null, "?utm_medium=partnerships&utm_source=payanywhere" + window.location.hash);
    }
    else {
      window.history.replaceState(null, null, window.location.search  + "&utm_medium=partnerships&utm_source=payanywhere" + window.location.hash);
    }
  }
	
	
}( $ ) );