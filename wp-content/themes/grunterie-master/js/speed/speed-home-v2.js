function unfurldivs(){

  //  2 columns widget
  jQuery('div.container[role="document"] > div.section-2-columns').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row"><div class="row-container"><div class="column small-12"><div class="column-inner">';

    var header = jQuery(parentdiv).find('.section-header');
    var prettyheader = '<div class="section-header">' +
                          '<h2 class="fw-black">'+jQuery(header).find('h2').html()+'</h2>' +
                          '<h3 class="subheading normal">'+jQuery(header).find('h3').html()+'</h3>'+
                          '</div>';

    var prettyrows = '<div class="section-main">';

    jQuery(parentdiv).find('.row').each(function() {
      var row = this;
      prettyrows += '<div class="row row-flex '+((jQuery(row).data('reverse') == '1') ? 'reverse' : '')+'"><div class="row-container">';

      var prettyleftcol = '<div class="column medium-6 col-left"><div class="column-inner"><div class="text-wrapper">'+ 
        '<h3 class="fw-black">' + jQuery(row).find('h3').html() + '</h3>';
      if((jQuery(row).data('link') != '1')) {
        prettyleftcol += '<p>'+ jQuery(row).find('p.desc').html() +'</p>' +
            '<a class="text-link-arrow" href="'+jQuery(row).find('a').attr('href')+'" data-wpel-link="internal">'+ jQuery(row).find('a').html() +'</a>';
          if((jQuery(row).data('cert') == '1')) {
            prettyleftcol += '<div class="cert-wrapper"><div class="cert-logo">'+
                  '<img src="'+jQuery(row).find('p.cert').data('src')+'" alt="'+jQuery(row).find('p.cert').data('alt')+'"/></div>' + 
                  '<div class="cert-text"><p>'+jQuery(row).find('p.cert').html()+'</p></div></div>'
          }
      }
      else {
        prettyleftcol += '<ul class="links">'+ jQuery(row).find('ul.links').html() +'</ul>';
      }

      prettyleftcol += '</div></div></div>';

      var mwidth = jQuery(row).data('mwidth');
      var mheight = jQuery(row).data('mheight');


      var prettyrightcol = '<div class="column medium-6 col-right"><div class="column-inner"><div class="img-wrapper" style="'+((mwidth) ? 'max-width:'+mwidth : '')+' '+((mheight) ? 'max-height:'+mheight : '')+'">' + 
        '<img src="'+jQuery(row).data('src')+'" alt="'+jQuery(row).data('alt')+'"/>' + 
        '</div></div></div>';

      prettyrows += prettyleftcol + prettyrightcol + '</div></div>';
    });

    prettyrows += '</div>';

    prettycontent += prettyheader + prettyrows +'</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  slingle 2 columns widget
  jQuery('div.container[role="document"] > div.section-2-col').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-flex '+((jQuery(parentdiv).data('reverse') == '1') ? 'reverse' : '')+'"><div class="row-container">';

    var prettyleftcol = '<div class="column medium-6 col-left"><div class="column-inner"><div class="text-wrapper">'+ 
        '<h2 class="fw-black">' + jQuery(parentdiv).find('h2').html() + '</h2>'+
        '<h3 class="subheading normal">' + jQuery(parentdiv).find('h3').html() + '</h3>'+
        '<p>'+ jQuery(parentdiv).find('p').html() +'</p>' +
        '</div></div></div>'

    var prettyrightcol = '<div class="column medium-6 col-right"><div class="column-inner"><div class="img-wrapper">' + 
      '<img src="'+jQuery(parentdiv).data('src')+'" alt="'+jQuery(parentdiv).data('alt')+'"/>' + 
      '</div></div></div>';

    prettycontent += prettyleftcol + prettyrightcol +'</div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  review widget
  jQuery('div.container[role="document"] > div.section-reviews').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner">';

    var prettyheader = '<div class="reviews-header">' +
                          '<h3 class="subheading normal">'+jQuery(parentdiv).find('h3').html()+'</h3>' +
                          '<h2 class="fw-black">'+jQuery(parentdiv).find('h2').html()+'</h2>'+
                          '</div>';

    var prettygrid = '<div class="row reviews-grid"><div class="row-container">';

    jQuery(parentdiv).find('.review-item').each(function() {
      var item = this;
      var prettyitem = '<div class="columns small-6 medium-3 text-center review-item"><div class="column-inner">'+
              '<a href="'+jQuery(item).find('a').attr('href')+'" target="_blank">'+
                '<div class="review-box">'+
                  '<div class="logo"><img src="'+jQuery(item).data('logo-src')+'" alt="'+jQuery(item).data('logo-alt')+'"/></div>'+
                  '<div class="score"><img src="'+jQuery(item).data('score-src')+'" alt="'+jQuery(item).data('score-alt')+'"/></div>'+
                  '<div class="content">'+jQuery(item).find('a').html()+'</div>'+
                '</div>'+
              '</a>'+
              '</div></div>'

      prettygrid += prettyitem;
    });

    prettygrid += '<div class="columns small-12 text-center"><span class="rating">'+jQuery(parentdiv).find('p.rating').html()+'</span></div>'+
            '</div></div>';

    var prettycreview = '<div class="customer-review">' + 
            '<p class="c-review">'+jQuery(parentdiv).find('p.c-review').html()+'</p>'+
            '<p class="c-info">'+jQuery(parentdiv).find('p.c-info').html()+'</p>'+
            '</div>'

    prettycontent += prettyheader + prettygrid + prettycreview +'</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  Intro product widget
  jQuery('div.container[role="document"] > div.section-intro-product').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container">';

    var prettyleftcol = '<div class="column medium-5 col-left"><div class="column-inner"><div class="col-wrapper">'+
                '<div class="text-wrapper">'+
                  '<h2 class="fw-black">'+jQuery(parentdiv).find('h2').html()+'</h2>'+ 
                  '<h3 class="subheading normal">'+jQuery(parentdiv).find('h3').html()+'</h3>'+
                  '<a class="button primary" href="'+jQuery(parentdiv).find('a.btn').attr('href')+'" data-wpel-link="external">'+jQuery(parentdiv).find('a.btn').html()+'</a>'+
                '</div>'+
                '<div class="image-wrapper hide-for-small">'+
                  '<img src="'+jQuery(parentdiv).find('a.btn').data('src')+'" alt="'+jQuery(parentdiv).find('a.btn').data('alt')+'"/>'+
                '</div>'+
              '</div></div></div>';

    var prettyrightcol = '<div class="column medium-7 col-right"><div class="column-inner"><div class="col-wrapper">';

    jQuery(parentdiv).find('.intro-group').each(function() {
      var group = this;
      var prettygroup = '<div class="intro-group">'+
            '<div class="group-title"><span>'+jQuery(group).find('p.group-title').html()+'</span></div>'
          jQuery(group).find('.intro-box').each(function() {
            var box = this;
            var prettybox = '<div class="intro-box"><div class="icon">'+
                  '<img src="'+jQuery(box).data('src')+'" alt="'+jQuery(box).data('alt')+'"/></div>'+
                  '<div class="text-wrapper"><a class="text-link-arrow" href="'+jQuery(box).find('a').attr('href')+'">'+jQuery(box).find('a').html()+'</a>'+
                  '<p>'+jQuery(box).find('p').html()+'</p></div>'+
                  '</div>'
      
            prettygroup += prettybox;
          });
      prettygroup += '</div>'

      prettyrightcol += prettygroup;
    });

    prettyrightcol += '</div></div></div>';

    prettycontent += prettyleftcol + prettyrightcol + '</div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  Signup widget
  jQuery('div.container[role="document"] > div.section-signup-widget').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner">';

    var prettyheader = '<div class="row"><div class="row-container"><div class="column small-12"><div class="column-inner"><div class="section-header">'+
              '<h3 class="fw-black">'+jQuery(parentdiv).find('h3').html()+'</h3>'+
              '<span>'+jQuery(parentdiv).find('p').html()+'</span>'+
            '</div></div></div></div></div>';

    var prettygrid = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner"><ul class="feature-grid">'+jQuery(parentdiv).find('ul').html()+'</ul>';

    var prettyfooter = '<div class="section-footer">'+
          '<a href="'+jQuery(parentdiv).find('a').attr('href')+'" class="button primary">'+jQuery(parentdiv).find('a').html()+'</a>'+
          '</div></div></div></div></div>'
    

    prettycontent = prettyheader + prettygrid + prettyfooter;

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  Vestibulum widget
  jQuery('div.container[role="document"] > div.section-vestibulum-widget').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner">';

    var prettyheader = '<div class="section-header">'+
        '<h2 class="fw-black">'+jQuery(parentdiv).find('h2').html()+'</h2>'+
        '<h3 class="subheading normal">'+jQuery(parentdiv).find('h3').html()+'</h3>'+
        '</div>'
    var prettycols = '<div class="section-content"><div class="row row-flex"><div class="row-container">';

    var prettyleftcol = '<div class="column medium-3 col-left"><div class="column-inner">'+jQuery(parentdiv).find('.col-left').html()+'</div></div>';
    var prettycentercol = '<div class="column medium-6 col-center"><div class="column-inner"><div class="image-wrapper">'+
        '<img src="'+jQuery(parentdiv).find('.col-center').data('src')+'" alt="'+jQuery(parentdiv).find('.col-center').data('alt')+'"/>' + 
        '</div></div></div>';
    var prettyrightcol = '<div class="column medium-3 col-right"><div class="column-inner">'+jQuery(parentdiv).find('.col-right').html()+'</div></div>';

    prettycols += prettyleftcol + prettycentercol + prettyrightcol +'</div></div></div>';

    prettycontent += prettyheader + prettycols + '</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  new features widget
  jQuery('div.container[role="document"] > div.section-new-features').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row"><div class="row-container"><div class="column medium-12"><div class="column-inner">';

    var prettyheader = '<div class="section-header">' +
        '<h2 class="fw-black">'+jQuery(parentdiv).find('h2').html()+'</h2>' +
        '<h3 class="subheading normal">'+jQuery(parentdiv).find('h3').html()+'</h3>'+
        '</div>';

    var prettyrow = '<div class="row"><div class="row-container">';

    jQuery(parentdiv).find('.feature').each(function() {
      var feature = this;

      prettyrow += '<div class="columns medium-3"><div class="column-inner"><div class="feature">'+
          '<div class="icon"><img src="'+jQuery(feature).data('src')+'" alt="'+jQuery(feature).data('alt')+'"/></div>'+
          '<div class="text-wrapper"><span class="title fw-extra">'+jQuery(feature).find('p.title').html()+'</span>'+
          '<p>'+jQuery(feature).find('p.desc').html()+'</p>'+
          '<a class="text-link-arrow" href="'+jQuery(feature).find('a').attr('href')+'">'+jQuery(feature).find('a').html()+'</a></div>'+
          '</div></div></div>';
    });

    prettyrow += '</div></div>';

    prettycontent += prettyheader + prettyrow +'</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  CTA widget
  jQuery('div.container[role="document"] > div.section-cta-banner').each(function(){
    var parentdiv = this;
    var stype = 'shape-' + jQuery(parentdiv).data('stype');
    var align = 'aligned-' + jQuery(parentdiv).data('align');

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner"><div class="banner-wrapper '+align+' '+stype+'">'+
        '<div class="bg-layer"><div class="bg-inner"><div class="shape-1"></div><div class="shape-2"></div><div class="shape-3"></div></div></div>'+
        '<h3 class="fw-bold">'+jQuery(parentdiv).find('h3').html()+'</h3>'+
        '<a class="button secondary reverse" href="'+jQuery(parentdiv).find('a').attr('href')+'" >'+jQuery(parentdiv).find('a').html()+'</a>'+
        '</div></div></div></div></div>'

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  About us widget
  jQuery('div.container[role="document"] > div.section-aboutus').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column"><div class="column-inner"><div class="content-wrapper">'+
        '<div class="logo"><img src="'+jQuery(parentdiv).find('a.phone-number').data('logo-src')+'" alt="'+jQuery(parentdiv).find('a.phone-number').data('logo-alt')+'"/></div>'+
        '<p>'+jQuery(parentdiv).find('p').html()+'</p>'+
        '<a href="'+jQuery(parentdiv).find('a.contact-link').attr('href')+'" class="contact-link">'+jQuery(parentdiv).find('a.contact-link').html()+'</a>'+
        '<a href="'+jQuery(parentdiv).find('a.phone-number').attr('href')+'" class="phone-number">'+jQuery(parentdiv).find('a.phone-number').html()+'</a>'+
        '<img class="photo hide-for-small" src="'+jQuery(parentdiv).find('a.phone-number').data('photo-src')+'" alt="'+jQuery(parentdiv).find('a.phone-number').data('photo-alt')+'"/>'+
        '<img class="quote-label hide-for-small" src="'+jQuery(parentdiv).find('a.phone-number').data('label-src')+'" alt="'+jQuery(parentdiv).find('a.phone-number').data('label-alt')+'"/>'+
        '</div></div></div></div></div>'

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  Customer quotes widget
  jQuery('div.container[role="document"] > div.section-customer-quote').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="columns"><div class="column-inner">';

    var prettyslider = '<div id="quote-slider">';

    jQuery(parentdiv).find('.quote-item').each(function() {
      var item = this;

      var prettyslide = '<div class="quote-item '+((jQuery(item).data('show') == '1') ? '' : 'hide-for-small')+'"><div class="quote-item-wrapper">'+
            '<h3 class="subheading fw-black hide-for-small">'+jQuery(item).find('h3').html()+'</h3>'+
            '<div class="quote-container"><div class="quote-wrapper">'+
              '<p class="quote-message">'+jQuery(item).find('p.message').html()+'</p>'+
              '<p class="name fw-bold">'+jQuery(item).find('p.name').html()+'</p>'+
              '<p class="position">'+jQuery(item).find('p.position').html()+'</p>'+
            '</div></div>'+
            '<img class="photo" src="'+jQuery(item).data('photo-src')+'" alt="'+jQuery(item).data('photo-alt')+'">'+
            '<div class="quote-label hide-for-small"><img src="'+jQuery(item).data('label-src')+'" alt="'+jQuery(item).data('label-alt')+'"></div>'+
            '</div></div>';
      prettyslider += prettyslide;
    });

    prettyslider += '</div>';

    prettycontent += prettyslider + '</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });

  //  Business tab widget
  jQuery('div.container[role="document"] > div.section-business-tab').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row row-small"><div class="row-container"><div class="column small-12"><div class="column-inner">';

    var prettyheader = '<div class="section-header">'+
        '<h2 class="fw-black">'+jQuery(parentdiv).find('h2').html()+'</h2></div>';

    var prettyslider = '<div class="logo-slider">';

    jQuery(parentdiv).find('ul.grid').each(function() {
      var grid = this;

      var prettygrid = '<div data-title="'+jQuery(grid).data('title')+'"><ul class="logo-grid">';
      
      jQuery(grid).find('li').each(function() {
        var logo = this;

        var prettylogo = '<li><img src="'+jQuery(logo).data('src')+'" alt="'+jQuery(logo).data('alt')+'"></li>';

        prettygrid += prettylogo;
      });
      
      prettygrid += '</ul></div>'

      prettyslider += prettygrid;
    });

    prettyslider += '</div>';

    prettycontent += prettyheader + prettyslider + '</div></div></div></div>';

    jQuery(parentdiv).empty();
    jQuery(parentdiv).append(prettycontent);
  });
}


function loadassets() {
  var cssFilesArr = ["style.css", "new-global.css", "slick.min.css", "styles-reviews.css", "pages/page-home.css"];
  var jsFilesArr = ["slick.min.js", "jquery.validate.min.js", "lazysizes.min.js", "jquery.matchHeight-min.js", "custom.min.js"];

  var url = window.location.protocol + "//" + location.host.split(":")[0];

  for(var i = 0; i < cssFilesArr.length; i++) {
    var src = url + '/wp-content/themes/grunterie-master/css/' + cssFilesArr[i];

    $("<link/>", {
      rel: "stylesheet",
      type: "text/css",
      href: src
    }).appendTo("head");
  }

  for(var i = 0; i < jsFilesArr.length; i++) {
    var src = url + '/wp-content/themes/grunterie-master/js/' + jsFilesArr[i];
    
    if( i==0 ) {
      $.getScript(src, function() {
        initsliders()
      });
    }
    else
      $.getScript(src, function() {
        console.log( "Load was performed." );
      });
  }
}

function initsliders() {
  if((jQuery(window).width() > 640) && (jQuery('#quote-slider').length > 0)){
    setTimeout(function(){ 
      $('#quote-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
        nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        arrows: true
      });
     }, 500);
  }

  if(jQuery('.logo-slider').length > 0) {
    setTimeout(function(){
      $(".logo-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<span class="dot">'+$(slider.$slides[i]).attr("data-title")+'</span>';
                },
        responsive: [{ 
            breakpoint: 640,
            settings: {
              dots: true,
              arrows: true,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
              nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
            } 
        }]
      });
    }, 500);
  }
}

loadassets();
unfurldivs();