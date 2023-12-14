jQuery( document ).ready(function($) {

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */

        $('.accordion').removeClass('active');
        this.classList.toggle("active");



        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            $('.panel').css('display', 'none');
          panel.style.display = "none";
            $('.accordion').removeClass('active');
        } else {
            $('.panel').css('display', 'none');
          panel.style.display = "block";
        }
      });
    }

	jQuery('a.got-it').on('click', function() {
		jQuery('#oauth-modal').foundation('reveal', 'close');
	});

	$('.js-support-dropdown').click(function(){
		$(this).find(".sub-menu > li").slideToggle();
		$(this).find(".term-name").toggleClass("active");
	});

	/* jQuery('.flexslider').flexslider({
		animation: "slide"
		max-items:3,
	}); */


	jQuery('.post-type-archive-clover-hr-resources > .right').hide();

	// Smooth scroll offset

	jQuery(function() {
		jQuery('a[href*=\\#]:not([href=\\#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html,body').animate({
						scrollTop: target.offset().top -50
					}, 1000);
					return false;
				}
			}
		});
	});

	jQuery('.ajax').click(function(){
		jQuery("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});

	// wp-94 banner starts
	if( jQuery('div.topbannernotice').length > 0 ) adjustdocwithbanner();
	window.addEventListener("resize", adjustdocwithbanner);
	jQuery('.closenotice').click(function(){
		jQuery('div.topbannernotice').height(0).hide();
		adjustdocwithbanner();
	});
    // wp-94 banner ends
    
    if( jQuery('div.sticky-sidebar').length > 0 ) {
        var lastScrollTop = jQuery(window).scrollTop();

        var header = jQuery(".main-wrapper header");
        var mainCol = jQuery(".main-col");
        var sidebarCol = jQuery(".sidebar-col");

        var absoluteSidebarTop = 0;
        var absoluteSidebarBottom = 0;

        var offset = 38;

        jQuery(window).on('scroll',function(){
            if(jQuery(window).width() > 640){
                    var st = jQuery(window).scrollTop();

                    var sidebar = jQuery(".sticky-sidebar");
                    
                    var topbannernotice = jQuery(".topbannernotice");

                    var fixedHeaderH =  0;

                    if(header.hasClass('fixed') && header.css('display') != 'none')
                            fixedHeaderH = header.outerHeight();
                    if(topbannernotice.css('display') != 'none')
                            fixedHeaderH += topbannernotice.outerHeight();
                    
                    if(absoluteSidebarTop == 0) {
                            absoluteSidebarTop = fixedHeaderH + offset;
                    }
                    
                    absoluteSidebarBottom = absoluteSidebarTop + sidebar.outerHeight();

                    var relativeSidebarTop = st + absoluteSidebarTop;
                    var relativeSidebarBottom = relativeSidebarTop + sidebar.outerHeight();

                    if(relativeSidebarBottom > mainCol.offset().top + mainCol.outerHeight()){

                            var sidebarWidth = sidebarCol.outerWidth();
                            var sidebarLeft = sidebarCol.offset().left;
                            var bottom = st + jQuery(window).height() - mainCol.offset().top - mainCol.outerHeight()

                            sidebar.addClass("sticky");
                            sidebar.css({'top': (absoluteSidebarTop - (relativeSidebarBottom - mainCol.offset().top - mainCol.outerHeight()))+ 'px'});
                            //sidebar.css({'left': sidebarLeft + 'px'});
                            sidebar.css({'width': sidebarWidth + 'px'});
                    }
                    else if (st + absoluteSidebarTop > sidebarCol.offset().top) {

                            var sidebarWidth = sidebarCol.outerWidth();
                            var sidebarLeft = sidebarCol.offset().left;

                            sidebar.addClass("sticky");

                            if (st > lastScrollTop){
                            // downscroll code
                            if (st + absoluteSidebarTop -500 > sidebarCol.offset().top  && absoluteSidebarBottom + 50 > jQuery(window).height())
                                    absoluteSidebarTop = absoluteSidebarTop - (st - lastScrollTop) / 5;

                            } else {
                            // upscroll code
                            if ( absoluteSidebarTop < fixedHeaderH + offset)
                                    absoluteSidebarTop = absoluteSidebarTop - (st - lastScrollTop) / 5;
                            }
                            

                            sidebar.css({'top': (absoluteSidebarTop) + 'px'});
                            //sidebar.css({'left': sidebarLeft + 'px'});
                            sidebar.css({'width': sidebarWidth + 'px'});
                    }
                    else{
                            sidebar.removeClass("sticky");
                            sidebar.removeAttr("style");
                            absoluteSidebarTop = 0;
                    }
                    lastScrollTop = st;
            }
        });
    }
    
    // wp-100 for lazy loading infile css background images. should use background-lazy-image instead of background-image starts
    /*jQuery('style').each(function(){
      stl = this;
      if( jQuery(stl).html().indexOf('background-lazy-image') > 1 ){
        newstl = jQuery(stl).html().replace(/background-lazy-image/g, 'background-image');
        jQuery(stl).html(newstl);
      }
    });*/
    // wp-100 for lazy loading infile css background images. should use background-lazy-image instead of background-image ends

    //wp-134 starts
    jQuery('.tabs .tab').on('click', function(e) {
        e.preventDefault();
        var currentAttrValue = jQuery(this).attr('data-tab');

        // Show/Hide Tabs
        jQuery('.tab-contents ' + currentAttrValue).fadeIn(400).siblings().hide();
        //jQuery('.tab-contents ' + currentAttrValue).show().siblings().hide();

        // Change/remove current tab to active
        jQuery(this).addClass('active').siblings().removeClass('active');

        return false;
    });
    //wp-134 ends
});

jQuery(window).scroll(function() {
	if (jQuery(this).width() >= 641) {
		if (jQuery(this).scrollTop() > 100) {
			jQuery("body > header.standard").removeClass("reversed");
		} else{
			jQuery("body > header.standard").addClass("reversed");
		}
	}
});


(function($) {
 
	// store the slider in a local variable
// 	var $window = $(window),
// 			flexslider = { vars:{} };
//  
// 	// tiny helper function to add breakpoints
// 	function getGridSize() {
// 		return (window.innerWidth < 768) ? 1 :
// 					 (window.innerWidth < 992) ? 2 : 3;
// 	}
//  
// 	$window.load(function() {
// 		$('.flexslider').flexslider({
// 			animation: "slide",
// 			animationLoop: false,
// 			prevText: "",
// 			nextText: "",
// 			itemWidth: 328,
// 			itemMargin: 54,
// 			minItems: getGridSize(), // use function to pull in initial value
// 			maxItems: getGridSize(), // use function to pull in initial value
// 			start: function (slider) {
// 				flexslider = slider; //Initializing flexslider here.
// 			}
// 		});
// 	});
//  
// 	// check grid size on resize event
// 	$window.resize(function() {
// 		var gridSize = getGridSize();
//  
// 		flexslider.vars.minItems = gridSize;
// 		flexslider.vars.maxItems = gridSize;
// 	});


	/* ------------------------------------
	flexible content
	------------------------------------ */
	// mobile header
	// $(document).mouseup(function(e) {
	// 	var container = $('.top-bar.expanded');
	// 	if ( !container.is(e.target) && container.has(e.target).length === 0 ) {
            
    //         $('.mobile-menu-expanded-bg').hide();
    //         //$('.top-bar.expanded section.top-bar-section').hide();
    //         container.removeClass('expanded');
	// 	}
    // });

	// $('.top-bar .toggle-topbar.menu-icon a, .top-bar .toggle-topbar.menu-icon li').click(function(e) {
    //     e.preventDefault();
    //     console.log("--");

    //     //$('.top-bar.expanded section.top-bar-section').toggle();
    //     $('.mobile-menu-expanded-bg').toggle();
    // });

    // $('.top-bar .toggle-topbar.menu-icon li').click(function(e) {
    //     e.preventDefault();
    //     console.log("--");

    //     //$('.top-bar.expanded section.top-bar-section').toggle();
    //     $('.mobile-menu-expanded-bg').toggle();
	// });


	// scrolldown to anchor
	$('body').on('click','a[href^="#"]', function(e) {
		e.preventDefault();
		if ($('[data-anchor="' + $(this).attr('href') + '"]').length > 0) {
			$('html, body').animate({
				scrollTop: $('[data-anchor="' + $(this).attr('href') + '"]').offset().top - 68
			}, 500);
		}
	});


	// footer
	$('.footer-bottom > .row > .columns').matchHeight();


	// 3 columns
	$('.col-3-col-img').matchHeight();
	$('.col-3-col-content').matchHeight();
	$('.col-3-cols > .columns > .row > .columns').matchHeight();


	// slideshow
	$('.slideshow-body > .columns').matchHeight();

	if ($('.slideshow-caps-col').css('display') != 'block') {

		$('.slideshow-imgs').slick({
			fade: true,
			dots: true,
			arrows: false
		});

	} else {

		$('.slideshow-caps .slideshow-cap').mouseover(function() {

			$count = $(this).attr('data-slide');

			$('.slideshow-caps .slideshow-cap').removeClass('active');
			$(this).addClass('active');

			$('.slideshow-img').removeClass('active');
			$('.slideshow-img[data-slide="' + $count + '"]').addClass('active');

		});

	}


	// customer proof
	$('.proof-nav li').click(function() {

		$count = $(this).attr('data-tab-count');

		$('.proof-nav li').removeClass('active');
		$(this).addClass('active');

		$('.proof-tab-top').removeClass('active');
		$('.proof-tab-top[data-tab-count="' + $count + '"]').addClass('active');

		$('.proof-tab-bottom').removeClass('active');
		$('.proof-tab-bottom[data-tab-count="' + $count + '"]').addClass('active');

	});


	// pricing
	$('.pricing-price').matchHeight();
	$('.pricing-meta').matchHeight();
	$('.pricing-subheadline').matchHeight();
	$('.icon-list .icon-list-item').matchHeight();

	$('.pricing-toggle li').click(function() {
		$('.pricing-toggle li').removeClass('active');
		$(this).addClass('active');

		var type = $(this).data('type');

		$('.pricing-price').each(function() {
			$(this).text($(this).attr(type));
		});

		$('.pricing-meta').each(function() {
			$(this).text($(this).attr(type));
		});

		// $('.pricing-price').matchHeight();
		// $('.pricing-meta').matchHeight();
	});


	// support
	$('.zendesk-cat-img').matchHeight();


	// ajax call: zendesk faq articles
	if ($('.faq-articles').length > 0) {

		$.ajax({
			type : 'POST',
			url  : "/wp-admin/admin-ajax.php",
			data : {
				action : 'zendesk_faq_articles'
			},
			success: function(data) {

				$('.faq-articles').prepend(data);
				$('.faq-articles-preloader').fadeOut();

			}
		});

	}


	// partners page
	$('.integrations-posts .columns.active .integrations-post-content p').matchHeight();
	$('.integrations-posts .columns.active .integrations-post').matchHeight();

	$('.integrations-tabs li').click(function() {
		var catId = $(this).attr('cat-id');

		$('.integrations-tabs li').removeClass('active');
		$(this).addClass('active');

		// title
		$('.integrations-tab-title h2').text($(this).text());

		if (catId == 'all') {

			$('.integrations-posts .columns').addClass('active');

		} else {

			$('.integrations-posts .columns').removeClass('active');

			$('.integrations-posts .columns').each(function() {
				var postCats = $(this).attr('cat-it').split(',');

				if (jQuery.inArray(catId, postCats) != -1) {
					$(this).addClass('active');
				}
			});

		}

		// update matchHeight
		$('.integrations-posts .columns.active .integrations-post-content p').matchHeight({remove: true}).matchHeight();
		$('.integrations-posts .columns.active .integrations-post').matchHeight({remove: true}).matchHeight();
	});

    $('.integrations-tabs-section li[cat-id="232"]').click();

	$('.getintouch-section .columns').matchHeight();


	// press page
	$('.press-featured-post .columns').matchHeight();

	$('.press-load-more a').click(function(e) {
		e.preventDefault();

		var that   = $(this);
		var paged  = that.attr('data-paged');
		var status = that.attr('data-status');

		if ( status == 'loading' || paged == 'last' ) return;

		that.attr('data-status', 'loading');

		$.ajax({
			type : 'POST',
			url  : "/wp-admin/admin-ajax.php",
			data : {
				'action': 'get_press_posts',
				'paged' : paged
			},
			dataType : 'JSON',
			success : function(data) {

				$('.press-list-section .integrations-posts').append(data.content);
				$('.integrations-posts .columns.active .integrations-post').matchHeight({remove: true}).matchHeight();
				that.attr('data-paged', data.paged);
				that.attr('data-status', 'ready');

				if (data.no_more) {
					that.attr('data-paged', 'last');
					$('.press-load-more').hide();
				}

			}
		});
	});

	// comparison page
	$('.rate-compare-title').matchHeight();

    if($('.labor-laws-map').length) {
        var beforeState = 'AK';

        if ($(window).width() < 990){
            $('#map').css({"width": $(window).width() + 'px', "height": $(window).width() + 'px'});
            $('#map').usmap({
                showLabels: false,
                stateStyles: {fill: '#e5d5f7', 'stroke': '#fff', 'stroke-width': 1},
                stateHoverStyles: {fill: '#d7bbf7', 'stroke': '#AF97C1', 'stroke-width': 1},

                click: function(event, data) {
                    $('#map').usmap('trigger', beforeState, 'mouseout');
                    $('#selected-state > span').text(data.name).css({"font-weight": "bold", "color": "#FF6E6E"});
                    $('.state-description').removeClass('show');
                    $('.state-description.' + data.name).addClass('show');
                    console.log('.state-description.' + data.name)
                }
            });

            $('select[name="state"]').on('change',function(){
                var state = $(this).val();
                $('#map').usmap('trigger', state, 'mouseover');
                $('#map').usmap('trigger', state, 'click');

                beforeState = $(this).val();
            });
        } else{
            $('#map').css({"width": '100%'});
          
            $('#map').usmap({
            stateStyles: {fill: '#e5d5f7', 'stroke': '#fff', 'stroke-width': 1},
            stateHoverStyles: {fill: '#d7bbf7', 'stroke': '#AF97C1', 'stroke-width': 3},
            mouseover: function(event, data) {
                    $('#selected-state > span').text(data.name).css({"font-weight": "bold", "color": "#FF6E6E"});
                    /*
                $('#map').usmap('trigger', beforeState, 'mouseout');
                $('#selected-state > span').text(data.name).css({"font-weight": "bold", "color": "#FF6E6E"});
                $('.state-description').removeClass('show');
                $('.state-description.' + data.name).addClass('show');
                console.log('.state-description.' + data.name)
                    */
            },
            mouseout: function(event, data) {
                    //$('.state-description').removeClass('show');
                },
                click: function(event, data) {
                    event.stopPropagation();
                    $('#map').usmap('trigger', beforeState, 'mouseout');
                    $('#map').usmap('trigger', data.name, 'mouseover');
                    $('#selected-state > span').text(data.name).css({"font-weight": "bold", "color": "#FF6E6E"});
                $('.state-description').removeClass('show');
                    $('.state-description.' + data.name).addClass('show');
                    $('html,body').animate({
                        scrollTop: $('.state-description.' + data.name).position().top
                    }, 'slow');
                   
                    console.log('.state-description.' + data.name);                
            }
        });
        }

        $('#map, .map-container').click(function(e) {  
            e.stopPropagation();          
            $('.state-description').removeClass('show');
            
        });

        $('select[name="state"]').on('change',function(e){
            e.preventDefault();
            var state = $(this).val();
            $('.state-description').removeClass('show');
            $('#map').usmap('trigger', beforeState, 'mouseout');
            $('#map').usmap('trigger', state, 'mouseover');
            $('#map').usmap('trigger', state, 'click');

            beforeState = $(this).val();
        });

        $('.state-description').mouseover(function() {
            $(this).addClass('show');
        });

    }

	if($('.page-template-page-free-time-card-calculator').length) {
		var max_hours = 12; //12 when AM/PM mode, 24 without that format
		var max_minutes = 59;

		var max_break = 99999 // (in minutes)

		$('.day-container input').click(function(){
			$(this).val('');
		});

		$('.day-container input').on('paste', function (event) {
			if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
				event.preventDefault();
			}
		});

		$(".day-container input").on("keypress",function(event){
			// validate that entered key is a number
			if(event.which <= 47 || event.which >=58){
				return false;
			}
		});

		//check when input value changes to calculate time
		$(".day-container input").on("change",function(){
			$('.day-container').removeClass('active-day');
			$(this).closest('.day-container').addClass('active-day');

			//wait until ending time is logged then execute code
			if($('.active-day .ending .hour').val() != 0 || $('.active-day .ending .minutes').val() != 0){
				calculateTime();
			}
		});

		//changes indicator for am and pm mode, comment when used in 24h format
		$('.am').click(function(){
			$(this).parent().find("a").removeClass('active');
			$(this).parent().find("input").val(0);
			$(this).addClass('active');

			//wait until ending time is logged then execute code
			if($('.active-day .ending .hour').val() != 0 || $('.active-day .ending .minutes').val() != 0){
				calculateTime();
			}
		});

		$('.pm').click(function(){
			$(this).parent().find("a").removeClass('active');
			$(this).parent().find("input").val(720);
			$(this).addClass('active');

			//wait until ending time is logged then execute code
			if($('.active-day .ending .hour').val() != 0 || $('.active-day .ending .minutes').val() != 0){
				calculateTime();
			}
		});

		$('.clear-btn').click(function(){
			clearAll();
			calculateTime();
		});
	}


    function calculateTime(){

            var starting_indication = parseInt($('.active-day .starting .indicator input').val());
            var ending_indication = parseInt($('.active-day .ending .indicator input').val());
            var starting_hour = parseInt($('.active-day .starting .hour').val());
            var ending_hour = parseInt($('.active-day .ending .hour').val());
            var starting_minutes = parseInt($('.active-day .starting .minutes').val());
            var ending_minutes= parseInt($('.active-day .ending .minutes').val());
            var break_hour = parseInt($('.active-day .break .hour').val());
            var break_minutes = parseInt($('.active-day .break .minutes').val());

            // validate if starting format is correct
            if(
                starting_hour > max_hours ||
                starting_hour < 0 ||
                starting_minutes > max_minutes ||
                starting_minutes < 0
            ){
                $('.active-day *').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.active-day .starting').addClass('error');
                $('.active-day .total').addClass('error');
                $('.active-day .total').html("Starting Time Error");
                $('.result-hours').addClass('error');
                $('.total-hours').html("Error");

            // validate if ending format is correct
            } else if(
                ending_hour > max_hours ||
                ending_hour < 0 ||
                ending_minutes > max_minutes ||
                ending_minutes < 0
            ){
                $('.active-day *').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.active-day .ending').addClass('error');
                $('.active-day .total').addClass('error');
                $('.active-day .total').html("Ending Time Error");
                $('.result-hours').addClass('error');
                $('.total-hours').html("Error");

            // validate if break format is correct
            }
            else if(
                break_hour > max_hours ||
                break_hour < 0 ||
                break_minutes > max_minutes ||
                break_minutes < 0
            ){
                $('.active-day *').removeClass('error');
                $('.result-hours').removeClass('error');
                $('.active-day .break').addClass('error');
                $('.active-day .total').addClass('error');
                $('.active-day .total').html("Break time Error");
                $('.result-hours').addClass('error');
                $('.total-hours').html("Error");

            // calculate total starting, ending and break time in minutes
            }
            else {
                var total_start = (starting_hour*60) + starting_indication + starting_minutes;
                var total_ending = (ending_hour*60) + ending_indication + ending_minutes;
                var total_break = (break_hour*60)+ break_minutes;

                // validate that starting time isn't smaller than ending time
                if(total_start > total_ending){
                    $('.active-day *').removeClass('error');
                    $('.result-hours').removeClass('error');
                    $('.active-day .ending').addClass('error');
                    $('.active-day .total').addClass('error');
                    $('.active-day .total').html("Ending Time Error");
                    $('.result-hours').addClass('error');
                     $('.total-hours').html("Error");

                // validate that break time doesn't exceed
                } else{
                    $('.active-day *').removeClass('error');
                    $('.result-hours').removeClass('error');
                    var total = total_ending - total_start - total_break;
                    $('.active-day .totalinput').val(total);

                    // validate that any value is empty
                    if(isNaN(total)){
                        $('.active-day *').removeClass('error');
                        $('.result-hours').removeClass('error');
                        $('.active-day .total').addClass('error');
                        $('.active-day .total').html("A value is null");
                        $('.active-day .totalinput').val(0);
                        $('.result-hours').addClass('error');
                         $('.total-hours').html("Error");
                    // validate that break time isn't exceeding
                    } else if(total_break > max_break || total < 0){
                        $('.active-day *').removeClass('error');
                        $('.result-hours').removeClass('error');
                        $('.active-day .break').addClass('error');
                        $('.active-day .total').addClass('error');
                        $('.active-day .total').html("Break time is exceeding");
                        $('.result-hours').addClass('error');
                         $('.total-hours').html("Error");

                    // print total
                    } else{
                        var hours = Math.floor(total / 60);
                        var minutes = total - (hours * 60);

                        if (minutes < 10){
                            $('.active-day .total').html(hours + ('.0') + minutes);
                        } else{
                            $('.active-day .total').html(hours + ('.') + minutes);
                        }

                    }

                }
            }

        writeGeneralTotal();
    }

    function writeGeneralTotal(){
        var general_total = 0;

        $( ".day-container" ).each(function( index ) {
            general_total = general_total + parseInt($(this).find('.totalinput').val());
            //console.log($(this).find('.totalinput').val());
        });

        var general_hours = Math.floor(general_total / 60);
        var general_minutes = general_total - (general_hours * 60);

        if (general_minutes < 10){
			$('.total-hours').html(general_hours + ('.0') + general_minutes);
			$('.form-total-hours').val(general_hours + ('.0') + general_minutes);
        } else{
			$('.total-hours').html(general_hours + ('.') + general_minutes);
			$('.form-total-hours').val(general_hours + ('.') + general_minutes);
		}
	}

	function clearAll(){
		$('.day-container input').val('00');
		$('.day-container .total').html("0.00");
		$('.am').click();
	}

    if($('.google-schema-generator').length) {
        writeCode();


        $('form').on('keyup','input',function(event){

            var ticketId = $( this ).closest('.ticket').data('ticket-id');
            console.log("Ticket: " + ticketId);
            writeCode(ticketId);

        });
        $('form').on('keyup','textarea',function(event){
            var ticketId = $( this ).closest('.ticket').data('ticket-id');
            console.log("Ticket: " + ticketId);
            writeCode();
        });
        $('.tabs a').click(function( event ){
            event.preventDefault();


            var tab = $(this).attr('data-target');
            console.log(tab);
            $('.tabs a').removeClass('active');
            $('.tabs-container .tab').removeClass('active');
            $(this).addClass('active');
            $('.tabs-container ' + tab).addClass('active');
        });

         $(document).on('click','.btn-copy',function(e){
             e.preventDefault();
            CopyToClipboard(document.getElementById("code-simulator"));
             $('.btn-copy').addClass('copied');
        });

        $('.btn-copy').mouseout(function() {
            $('.btn-copy').removeClass('copied');
        });

        $(document).on('click','.add-ticket',function(e){
            e.preventDefault();
              addTicket();

        });

         $(document).on('click','.remove-ticket',function(e){
            $( this ).parent().remove();
            writeCode(0);
        });

    }

    function getTicketCode(ticketId) {
        return  ' {\r\n'+
                '  "@type": "Offer", \r\n'+
                '  "name": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#ticket-name').val() +'", \r\n'+
                '  "availability": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#availabilty').val() +'", \r\n'+
                '  "price": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#price').val() +'", \r\n'+
                '  "priceCurrency": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#currency').val() +'", \r\n'+
                '  "validFrom": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#valid').val() +'", \r\n'+
                '  "url": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#ticket-url').val() +'" \r\n'+
                '},';
    }
    function getPerformer(ticketId) {
        return  ' {\r\n'+
                 '   "@type": "PerformingGroup", \r\n'+
                 '   "name": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#performer-group').val() +'" \r\n'+
                '}, { \r\n'+
                 '   "@type": "Person", \r\n'+
                 '   "name": "'+ $('.ticket[data-ticket-id="' + ticketId +'"] input#performer-name').val() +'" \r\n'+
                '}'
    }

    function writeCode(ticketId){
        var ticketHtml =  '';
        var isTicket =  '';

        if(ticketId != null || $('.ticket input#ticket-name').val()){
            isTicket =  ',';
           if($('.ticket').length == 1) {
                ticketHtml = '"offers": ' +  getTicketCode(ticketId);
            } else {
                 ticketHtml = '"offers": [';
                 $('.ticket').each(function(index, ticket) {
                    var tId = $(ticket).data('ticket-id');
                    ticketHtml += getTicketCode(tId);

                });
                ticketHtml = ticketHtml.substring(0,ticketHtml.length - 1);

                ticketHtml+="],";
            }
        }

        var performerHtml =  '';

            if(ticketId != null ){

                 performerHtml = '"performer": [';
                 $('.ticket').each(function(index, ticket) {
                    var tId = $(ticket).data('ticket-id');
                     if($('.ticket[data-ticket-id="' + tId +'"] input#performer-group').val() || $('.ticket[data-ticket-id="' + tId +'"] input#performer-name').val()){
                         performerHtml += getPerformer(tId) + ",";
                    }

                });
                if($('input#performer-name').val() || $('input#performer-group').val() ){
                   performerHtml = performerHtml.substring(0,performerHtml.length - 1);
                }


                performerHtml+="]";

        }


        $(".code-simulator").text(
            '\r\n \<script type="application/ld+json"\> \r\n'+
            '{ \r\n'+
            ' "@context": "https://schema.org", \r\n'+
            ' "@type": "Event",\r\n '+
            '"name": "'+ $('input#name').val() +'",\r\n '+
            '"startDate": "'+ $('input#start').val() +'",\r\n '+
            '"endDate": "'+ $('input#end').val() +'",\r\n '+
            '"location": {\r\n '+
            '  "@type": "Place",\r\n '+
            '  "name": "'+ $('input#venue').val() +'",\r\n '+
            '  "address": {\r\n '+
            '    "@type": "PostalAddress",\r\n '+
            '    "streetAddress": "'+ $('input#street-adress').val() +'",\r\n '+
            '    "addressLocality": "'+ $('input#adress-locality').val() +'",\r\n '+
            '    "addressRegion": "'+ $('input#adress-region').val() +'",\r\n '+
            '    "postalCode": "'+ $('input#postal-code').val() +'",\r\n '+
            '    "addressCountry": "'+ $('input#adress-country').val() +'"\r\n '+
            '   }\r\n '+
            ' },\r\n '+
            '"description": "'+ $('textarea#description').val() +'",\r\n '+
            '"image": [\r\n '+
            '  "'+ $('input#image').val() +'"\r\n '+
            ']' + isTicket + '\r\n '+
            ticketHtml +'\r\n '+
            performerHtml +'\r\n '+
            '} \r\n '+

            '\</script\>'
        );

        $('.form-google-code').val('\<script type="application/ld+json"\> \r\n'+
            '{ \r\n'+
            ' "@context": "https://schema.org", \r\n'+
            ' "@type": "Event",\r\n '+
            '"name": "'+ $('input#name').val() +'",\r\n '+
            '"startDate": "'+ $('input#start').val() +'",\r\n '+
            '"endDate": "'+ $('input#end').val() +'",\r\n '+
            '"location": {\r\n '+
            '  "@type": "Place",\r\n '+
            '  "name": "'+ $('input#venue').val() +'",\r\n '+
            '  "address": {\r\n '+
            '    "@type": "PostalAddress",\r\n '+
            '    "streetAddress": "'+ $('input#street-adress').val() +'",\r\n '+
            '    "addressLocality": "'+ $('input#adress-locality').val() +'",\r\n '+
            '    "addressRegion": "'+ $('input#adress-region').val() +'",\r\n '+
            '    "postalCode": "'+ $('input#postal-code').val() +'",\r\n '+
            '    "addressCountry": "'+ $('input#adress-country').val() +'"\r\n '+
            '   }\r\n '+
            ' },\r\n '+
            '"description": "'+ $('textarea#description').val() +'",\r\n '+
            '"image": [\r\n '+
            '  "'+ $('input#image').val() +'"\r\n '+
            ']' + isTicket + '\r\n '+
            ticketHtml +'\r\n '+
            performerHtml +'\r\n '+
            '} \r\n '+

            '\</script\>');

    }

    var ticketQuant = 1;
    function addTicket(){
        $('.tickets').append(
        '<div class="ticket" data-ticket-id="'+ticketQuant+'"> <div class="input-container"> <label for="ticket-name">Ticket name*</label>  <input id="ticket-name" name="ticket-name" type="text" placeholder="Ex. Early bird entrance">  </div>  <div class="input-container half"> <label for="availabilty">Availabilty*</label> <input id="availabilty" name="availabilty" type="text" placeholder="?"> </div> <div class="input-container half">   <label for="valid">Valid from*</label> <input id="valid" name="valid" type="text" placeholder="Ex. 08/10/2019"> </div> <div class="input-container half"> <label for="price">Price</label> <input id="price" name="price" type="text" placeholder="$"> </div> <div class="input-container half"> <label for="currency">Currency</label> <input id="currency" name="currency" type="text" placeholder="Select (?)"> </div> <div class="input-container">  <label for="ticket-url">Ticket URL</label> <input id="ticket-url" name="ticket-url" type="text" placeholder="Insert your ticket URL.">  </div> <div class="input-container"> <label for="performer-group">Performer Group</label>  <input id="performer-group" name="performer-group" type="text" placeholder="Ex. Name of the group or band"> </div> <div class="input-container"> <label for="performer-name">Performer Name</label>  <input id="performer-name" name="performer-name" type="text" placeholder="Ex. Name of the artist or performer"> </div>  <a href="#" class="add-ticket">Add another ticket</a> <a href="#" class="remove-ticket">Remove this ticket</a> </div>'
        );

        ticketQuant++;
    }


    /*function CopyToClipboard(containerid) {

        if (document.selection) {
            console.log('selection1');
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");

        } else if (window.getSelection) {
            console.log('selection2');
            var range = document.createRange();
             range.selectNode(document.getElementById(containerid));
             window.getSelection().addRange(range);
             document.execCommand("copy");
        }
    }*/


function CopyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);

    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }

    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
    
$('.readmore').each(function() {
    var height = $(this).data('chars');

    $('.readmore').readmore({
        speed: 75,
        collapsedHeight: height,
        embedCSS: false,
        blockCSS: 'display: block; width: 100%;',
        moreLink: '<a href="#" class="morelink">Show more</a>',
        lessLink: '<a href="#" class="morelink less">Show less</a>'
    });

});
    
$('.columns-readmore').each(function() {
    var height = $(this).data('chars');

    $('.columns-readmore').readmore({
        speed: 75,
        collapsedHeight: height,
        embedCSS: false,
        blockCSS: 'display: block; width: 100%;',
        moreLink: '<a href="#" class="morelink">Show more</a>',
        lessLink: '<a href="#" class="morelink less">Show less</a>'
    });

});
    
$('.hiring-readmore').each(function() {
    var height = $(this).data('chars');

    $('.hiring-readmore').readmore({
        speed: 75,
        collapsedHeight: height,
        embedCSS: false,
        blockCSS: 'display: block; width: 100%;',
        moreLink: '<a href="#" class="morelink">Show more</a>',
        lessLink: '<a href="#" class="morelink less">Show less</a>'
    });

});

})(jQuery);

function adjustdocwithbanner(){
	bannerheight = jQuery('div.topbannernotice').height();
	// jQuery('html, .fixed, .new-features .features-nav').css('margin-top', bannerheight+'px');
	jQuery('html, .fixed, .new-features .features-nav, .blog-navbar, .section-navbar').css('margin-top', bannerheight+'px');
}

var console = {};
console.log = function(){};

jQuery(document).ready(function($) {
    $('.post-slider.press').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        //autoplay: true,
        //autoplaySpeed: 2000,
        arrows: true
    });
});

jQuery(document).ready(function($) {

    $('.toggle-topbar.menu-icon a').click(function(e){
        e.preventDefault();
        jQuery('.mobile-main-menu .menu-wrapper li.has-dropdown').each(function(){
            if(jQuery(this).hasClass('menu-item-product')) {
                jQuery(this).addClass('opensubmenu');
                jQuery(this).css({'height': (jQuery(this).find('ul.dropdown').first().outerHeight() + 64) + 'px'});
            }
            else {
                jQuery(this).removeClass('opensubmenu');
                jQuery(this).css({'height': 64, 'overflow': 'hidden'});
            }
        });

        $("body").toggleClass('noscroll');
        $(".top-bar").toggleClass('show');
        $(".mobile-main-menu").toggleClass('show');
        $(".mobile-main-menu").css({'padding-top': ($('.main-wrapper header').outerHeight() + $('.topbannernotice').outerHeight()) + 'px'});
        return false;
    });

    var mobileMenuWrapper = jQuery('.mobile-main-menu .menu-wrapper');
    
    //set the height of all li.has-dropdown items
    jQuery('.mobile-main-menu .menu-wrapper li.has-dropdown').each(function(){
        jQuery(this).css({'height': 64, 'overflow': 'hidden'});
    });
        //process the parent items

    jQuery('.mobile-main-menu .menu-wrapper li.has-dropdown > a').on('click', function(e){
        e.preventDefault();
        
        var parentLi = jQuery(this).parent('li.has-dropdown');
        var dropdownUl = parentLi.find('ul.dropdown').first();
        var dropdownUlheight = dropdownUl.outerHeight() + 64;

        //set height is auto for all parents dropdown
        parentLi.parents('li.has-dropdown').css('height', 'auto');
        //set height is auto for menu wrapper
        mobileMenuWrapper.css({'height': 'auto'});

        if(parentLi.hasClass('opensubmenu')) {
            parentLi.removeClass('opensubmenu');
            parentLi.animate({'height': 64}, 'fast');
        } else {
            var old = jQuery('.opensubmenu');
            old.removeClass('opensubmenu');
            old.animate({'height': 64}, 'fast');

            parentLi.addClass('opensubmenu');
            parentLi.animate({'height': dropdownUlheight}, 'fast');
        }
    });
});

function resizeFooterMenu(){

    var grid = jQuery(".footer-menu > .row");
    var rowHeight = parseInt(grid.css('grid-auto-rows'));
    var rowGap = parseInt(grid.css('grid-row-gap'));

    if(rowHeight && rowGap) {
        jQuery(".footer-menu > .row .columns").each(function() {
            var rowSpan = Math.ceil((jQuery(this).find(".col-wrapper").height()+rowGap)/(rowHeight+rowGap));
            jQuery(this).css('gridRowEnd', "span "+rowSpan);
        });
    }
}

jQuery(document).ready(function($) {
    resizeFooterMenu();
    window.addEventListener("resize", resizeFooterMenu);
});

if ( window.location.pathname != '/' ) {
    jQuery(document).foundation();
}

