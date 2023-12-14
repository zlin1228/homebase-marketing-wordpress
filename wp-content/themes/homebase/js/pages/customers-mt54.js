( function( $ ) {

  $('.tabs .tab').on('click', function(e) {
    e.preventDefault();
    var currentAttrValue = $(this).attr('data-tab');

    // Show/Hide Tabs
    $('.tab-contents ' + currentAttrValue).fadeIn(400).siblings().hide();

    // Change/remove current tab to active
    $(this).addClass('active').siblings().removeClass('active');

    return false;
});
	
}( $ ) );