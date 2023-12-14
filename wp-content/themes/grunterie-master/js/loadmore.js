jQuery(document).ready(function(){
    jQuery('.main-wrapper__reviews').on('click', '.page_click', function(){
		var page = 	jQuery(this).attr('data-page');
		if(page == 0){
			return false;
		}
		var filter_company = jQuery('#filter_partner').val();
		var filter_features = jQuery('#filter_features').val();
		var filter_address = jQuery('#filter_from').val();
		var filter_sort = jQuery('#filter_sort').val();
		var data = {
			'action': 'reviewsUpdate',
			'page' : page,
			'filter_company' : filter_company,
			'filter_features' : filter_features,
			'filter_address' : filter_address,
			'filter_sort' : filter_sort
		};
		jQuery.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) {
					jQuery('.main-wrapper__reviews .main-wrapper__reviews--content').remove();
					jQuery('.main-wrapper__reviews .pagination-centered').remove();
					jQuery('.main-wrapper__reviews').append(data);
				}
			}
		});
		return false;
	});

	jQuery(document).on('click', '.main-wrapper__reviews--filter_categories-item li.option', function() {
		var page = 	1;
		var filter_company = jQuery('#filter_partner').val();
		var filter_features = jQuery('#filter_features').val();
		var filter_address = jQuery('#filter_from').val();
		var filter_sort = jQuery('#filter_sort').val();
		var data = {
			'action': 'reviewsUpdate',
			'page' : page,
			'filter_company' : filter_company,
			'filter_features' : filter_features,
			'filter_address' : filter_address,
			'filter_sort' : filter_sort
		};
		jQuery.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
					jQuery('.main-wrapper__reviews .main-wrapper__reviews--content').remove();
					jQuery('.main-wrapper__reviews .pagination-centered').remove();
					jQuery('.main-wrapper__reviews').append(data);
			}
		});
	});
});