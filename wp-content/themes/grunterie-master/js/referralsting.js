jQuery(window).load(function(){
	
	var ref = getParameterByName('refcode');

	// change all links for joinhomebase with ref code
	jQuery('a[href*="//joinhomebase.com"],a[href^="/"],a[href*="wpengine.com"]').each( function(){
		mkta = this;
		href = jQuery(mkta).attr('href');
		if( href.indexOf('?') > 1 ) jQuery(mkta).attr('href', href + '&refcode=' + ref);
		else jQuery(mkta).attr('href', href + '?refcode=' + ref);
	} );

	// change all links for app.joinhomebase with ref code
	jQuery('a[href*="//app.joinhomebase.com"]').each( function(){
		appa = this;
		href = jQuery(appa).attr('href');
		if( href.indexOf('?') > 1 ) jQuery(appa).attr('href', href + '&user_referral_code=' + ref);
		else jQuery(appa).attr('href', href + '?user_referral_code=' + ref);

		// disable right click
		jQuery(appa).attr('oncontextmenu', 'return false');
	} );

	// add ref code to all app.joinhomebase forms
	formcntr = 0;
	jQuery('form[action*="//app.joinhomebase.com"]').each( function(){
		appf = this;
		jQuery(appf).append('<input type="hidden" name="user_referral_code" value="' + ref + '" />').addClass('refform'+formcntr);
		formcntr++;
	} );

	// trigger form submit if there is a form and if clicked on any link to go over app.jhb site
	jQuery('a[href*="//app.joinhomebase.com"]').on('click', function( e ){
		if( formcntr > 0 ){
			jQuery('form.refform0').submit();
			return false;
			e.preventDefault();
		}
	});
	
});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}