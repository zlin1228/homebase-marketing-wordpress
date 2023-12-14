jQuery(document).ready(function(){

	if(window.location.hash) {
		// smooth scroll to the anchor id
		jQuery('html, body').animate({
				scrollTop: jQuery('[data-anchor="' + window.location.hash + '"]').offset().top - (jQuery('.main-wrapper header').outerHeight() + jQuery('.topbannernotice').outerHeight()) + 'px'
		}, 1000, 'swing');
	}

	jQuery('#btb-form-wrapper input[name="zipcode"]').on('keyup', function(){
		txtinp = this;
		resultBx = jQuery(txtinp).closest('#btb-form-wrapper').find('.btb-zip-search-results .result-list');
		if( jQuery(txtinp).val().length < 2 ){
			jQuery(resultBx).parent().css('display', 'none');
			jQuery(resultBx).html('');
		}
		else{
			// jQuery(resultBx).removeClass('empty');
			jQuery(resultBx).parent().css('display', 'block');
			var data = {
						'action': 'msa_list',
						'txt': jQuery(txtinp).val()
					};
			jQuery.post(ajaxurl, data, function(response) {
						jQuery(resultBx).html( response );
					});
		}
		jQuery(txtinp).closest('#btb-form-wrapper').find('input[type="submit"]').addClass('disabled');
		jQuery(txtinp).attr('href', '');
	});

	jQuery('#btb-form-wrapper input.zipbtn').on('click', function(e){
		btn = this;
		txtinp = jQuery(txtinp).closest('#btb-form-wrapper').find('input[name="zipcode"]');
		

		return false;
		e.preventDefault();
	});

	jQuery('#btb-form-wrapper .btb-zip-search-results .result-list').on('click', 'li', function(){

		if( jQuery(this).attr('value') == '' ) return;

		window.location.assign( jQuery(this).attr('value') );

	});

	jQuery(document).click(function() {
		resultBx = jQuery('#btb-form-wrapper').find('.btb-zip-search-results .result-list');
    jQuery(resultBx).parent().css('display', 'none');
		jQuery(resultBx).html('');
	});

	jQuery('#btb-form-wrapper').on('click', function(e){
		e.stopPropagation();
	});

	jQuery('#btb-form-wrapper').on('submit', function(e){
		if( jQuery(this).find('input[name="zipcode"]').length > 0 ){
			return false;
		}
	});

});

function soc_share_invoke_pu( ths ){
	url = jQuery(ths).attr("data-url");
	window.open( url, '', 'height=500, width=500' );
	return false;
}