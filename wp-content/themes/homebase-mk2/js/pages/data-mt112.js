( function( $ ) {

  if ($(this).width() < 641) {
    $('.section-simple-list h3').click(function(event){

      if( $('.section-simple-list h3.active').is($(this)) )  {
        $('.section-simple-list h3.active').removeClass('active');
        $('.section-simple-list .row.content.open').removeClass('open').slideUp();

        return;
      }

      $('.section-simple-list h3.active').removeClass('active');
      $('.section-simple-list .row.content.open').removeClass('open').slideUp();

      $(this).addClass('active');
      $(this).closest( ".section-simple-list" ).find('.row.content').addClass('open').slideDown();
    });
  }
	
}( $ ) );