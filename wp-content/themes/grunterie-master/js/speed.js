function unfurldivs(){
	jQuery('div.container[role="document"] > div.section-3-columns').each(function(){
		var parentdiv = this;
		jQuery(parentdiv).addClass('section section-3-columns');
    var prettyheader = '<div class="row header"><h2>'+jQuery(parentdiv).find('h2').html()+'</h2><h3>'+jQuery(parentdiv).find('h3').html()+'</h3></div>';
    
    var prettyfeatures = '<div class="row contents">';
    jQuery(parentdiv).find('.feature').each(function() {
      var featurediv = this;
      var prettyimg = '<div class="column-img"><img src="'+jQuery(featurediv).data('src')+'" alt="'+jQuery(featurediv).data("alt")+'"></div>';
      var prettytext = '<div class="column-text">'+ 
        ((parentdiv.classList.contains('products')) ? '<div class="column-title"><h4>'+jQuery(featurediv).find('h4').html()+'</h4></div>' : '') +
        '<div class="column-desc"><p>'+ jQuery(featurediv).find('p').html()+'</p></div>'+
        '<div class="column-link"><a href="'+jQuery(featurediv).find('a').attr('href')+'">' + jQuery(featurediv).find('a').html()+'</a></div>'+
        '</div>';
        prettyfeatures += '<div class="columns medium-4 text-center"><div class="column-content">'+ prettyimg + prettytext +'</div></div>'
    })

    prettyfeatures += '</div>';

    jQuery(parentdiv).find('h2, h3, .feature').remove();
    jQuery(parentdiv).append(prettyheader).append(prettyfeatures);
  });
  
  //testimonial slider
  jQuery('div.container[role="document"] > div.section-testimonials').each(function(){
    var parentdiv = this;
    
    var prettycontent = '<div class="row"><div class="row-container"><div class="testimonials medium-offset-1 medium-10">';
    jQuery(parentdiv).find('.testimonialitem').each(function() {
      var item = this;
      var prettycate = '<div class="product-category">'+ jQuery(item).find('span.product-category').html() + '</div>';
      var prettyleftcol = '<div class="columns medium-4 text-center col-2-left-col"><div class="photo-group">'+ 
        '<div class="photo"><img alt="Author photo" src="' + jQuery(item).data('photo') + '"></div>' + 
        '<div class="subject"><img alt="Author said" src="' + jQuery(item).data('subject') + '"></div>' +
        '</div></div>';
        var prettyrightcol = '<div class="columns medium-8 text-center col-2-right-col"><div class="quote-container">' + 
        '<div class="quote"><p>' + jQuery(item).find('p.quote').html() + '</p></div>' + 
        '<div class="author-info">' + 
          '<div class="author-name"><p>' + jQuery(item).find('span.author-name').html() + '</p></div>' + 
          '<div class="author-position"><p>' + jQuery(item).find('span.author-position').html() + '</p></div>' + 
        '</div>' + 
        '</div></div>';

        prettycontent += '<div class="testimonial" style="background-image:url('+ jQuery(item).data('bg') +')">'+ prettycate + prettyleftcol + prettyrightcol +'</div>'
    })

    prettycontent += '</div></div></div>';

    jQuery(parentdiv).find('.testimonialitem').remove();
    jQuery(parentdiv).append(prettycontent);

    jQuery('.testimonials').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
      nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
      arrows: true
    });
  });
  
  //customer proof slider
  jQuery('div.container[role="document"] > div.section-proof').each(function(){
    var parentdiv = this;

    var prettyheader = '<div class="row proof-head"><div class="columns"><h2>'+jQuery(parentdiv).find('h2').html() +'</h2></div></div>';

    var prettycontent = '<div class="row"><div class="proof-slider">';
    
    jQuery(parentdiv).find('.business').each(function() {
      var tab = this;

      var prettytab = '<div title="'+ jQuery(tab).data('title') +'" data-tab-count="'+ jQuery(tab).data('tab-count')+'"><div class="proof-logos-wrap"><ul class="proof-logos proof-tab-'+jQuery(tab).data('tab-count')+'">';

      jQuery(tab).find('li').each(function() {
        prettytab += '<li class="'+jQuery(this).data('classes')+'"><img src="'+jQuery(this).data('src')+'" alt="'+jQuery(this).data('alt')+'"></li>';
      })

      prettytab += '</ul><a class="'+jQuery(tab).find('a').data('classes')+'" href="'+jQuery(tab).find('a').attr('href')+'">' + jQuery(tab).find('a').html()+'</a></div></div>';

      prettycontent += prettytab;
    })

    prettycontent += '</div></div>';

    jQuery(parentdiv).find('h2, .business').remove();
    jQuery(parentdiv).append(prettyheader, prettycontent);

    jQuery(".proof-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      customPaging : function(slider, i) {
      var thumb = jQuery(slider.$slides[i]).data();
      return '<a href="#" class="dot">'+jQuery(slider.$slides[i]).attr("title")+'</a>';
              },
      responsive: [{ 
          breakpoint: 640,
          settings: {
              dots: true,
              arrows: true,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1
          } 
      }]
    });   
  });
  
  // We care
  jQuery('div.container[role="document"] > div.section-care').each(function(){
    var parentdiv = this;
    
    var prettycontent = '<div class="row">';
    
    var prettyleftcol = '<div class="columns medium-6 col-2-left-col">';
    jQuery(parentdiv).find('span.left-img').each(function() {
      var imgdiv = this;
      var prettyDimg = '<div class="col-2-img img-desktop"><img src="'+jQuery(imgdiv).data('desktop')+'" alt="'+jQuery(imgdiv).data('alt')+'" ></div>';
      var prettyMimg = '<div class="col-2-img img-mobile"><img src="'+jQuery(imgdiv).data('mobile')+'" alt="'+jQuery(imgdiv).data('alt')+'" ></div>';
      
      prettyleftcol += prettyDimg + prettyMimg;
    });
    prettyleftcol += '</div>';

    var prettyrightcol = '<div class="columns medium-6 col-2-right-col"><div class="col-wrap"><div class="col-content"><div class="col-text">';
    prettyrightcol += '<h2>'+jQuery(parentdiv).find('h2').html()+'</h2><h3>'+jQuery(parentdiv).find('h3').html()+'</h3>' ;
    prettyrightcol += '<div class="col-2-text"><p>'+jQuery(parentdiv).find('p').html()+'</p></div>';
    prettyrightcol += '</div></div></div></div>';

    prettycontent += prettyleftcol + prettyrightcol + '</div>';

    jQuery(parentdiv).find('h2, h3, p, span').remove();
    jQuery(parentdiv).append(prettycontent);
  });


  // All in one
  jQuery('div.container[role="document"] > div.section-allinone').each(function(){
    var parentdiv = this;
        
    var prettycaptions = '<div class="row"><div class="captions medium-12">';
    jQuery(parentdiv).find('p.desc').each(function() {
      var captionitem = this;
      var prettycaption = '<div class="columns medium-2 text-center caption">';
      var prettyicon = '<div class="icon"><img alt="'+jQuery(captionitem).data('alt')+'" src="'+jQuery(captionitem).data('src')+'"></div>';
      var  prettytext = '<div class="caption-text"><div class="title">'+jQuery(captionitem).data('title')+'</div>';
      prettytext += '<div class="caption_desc"><p>'+jQuery(captionitem).html()+'</p></div>';
      prettytext += '</div>';
      
      prettycaption += prettyicon + prettytext + '</div>';

      prettycaptions += prettycaption;
    });

    prettycaptions += '</div></div>';

    var prettylink = '<div class="row"><div class="row-link text-center"><a href="'+jQuery(parentdiv).find('a').attr('href')+'""><span class="contact-text">'+jQuery(parentdiv).find('a').html()+'</span></a></div></div>';

    jQuery(parentdiv).find('p, a').remove();
    jQuery(parentdiv).append(prettycaptions).append(prettylink);
  });

  // 100K
  jQuery('div.container[role="document"] > div.section-100k').each(function(){
    var parentdiv = this;

    var prettyheaderleft = '<div class="columns medium-6 col-2-left-col text-left">';
    prettyheaderleft += '<h2>'+jQuery(parentdiv).find('h2').html()+'</h2>';
    prettyheaderleft += '<h3>'+jQuery(parentdiv).find('h3').html()+'</h3>';
    prettyheaderleft += '</div>';

    var prettyheaderright = '<div class="columns medium-6 col-2-right-col">';
    prettyheaderright += '<div class="col-2-img img-desktop"><img alt="'+jQuery(parentdiv).find('h2').data('src')+'" src="'+jQuery(parentdiv).find('h2').data('alt')+'"></div>';
    prettyheaderright += '<div class="col-2-img img-mobile"><img alt="'+jQuery(parentdiv).find('h2').data('src')+'" src="'+jQuery(parentdiv).find('h2').data('alt')+'"></div>';
    prettyheaderright += '</div>';

    var prettyheader = '<div class="row">' + prettyheaderleft + prettyheaderright + '</div>';

    var prettyreviews = '<div class="reviews medium-offset-2 medium-10">';

    jQuery(parentdiv).find('a.review').each(function() {
      var review = this;

      prettyreview = '<div class="columns medium-3 text-center review">';
      prettyreview += '<a href="'+jQuery(review).attr('href')+'">';
      prettyreview += '<div class="review-content">';
      prettyreview += '<div class="score"><img alt="'+jQuery(review).data('score-alt')+'" src="'+jQuery(review).data('score-src')+'"></div>';
      prettyreview += '<div class="logo"><img alt="'+jQuery(review).data('logo-alt')+'" src="'+jQuery(review).data('logo-src')+'"></div>';
      prettyreview += '<div class="description">'+jQuery(review).html()+'</div>';
      prettyreview += '</div></a></div>';

      prettyreviews += prettyreview;
    });

    prettyreviews += '</div>';
    var prettyreviewcontent = '<div class="row">'+prettyreviews+'</div>';

    jQuery(parentdiv).find('h2, h3, a').remove();
    jQuery(parentdiv).append(prettyheader).append(prettyreviewcontent);
  });

  // CTA banner
  jQuery('div.container[role="document"] > div.section-banner').each(function(){
    var parentdiv = this;

    var prettycontent = '<div class="row text-left" style="background-image: url('+jQuery(parentdiv).find('span').data('bg')+'); background-repeat:no-repeat; background-position: top left;"><div class="row-container"><div class="row-content">';

    var prettytextcol = '<div class="columns"><div class="main-text">';
    prettytextcol += '<p>'+jQuery(parentdiv).find('span').html()+'</p>';
    prettytextcol += '</div></div>';

    var prettylinkcol = '<div class="columns"><div class="banner-link">';
    prettylinkcol += '<p>'+jQuery(parentdiv).find('a').html()+'</p>';
    prettylinkcol += '<a href="'+jQuery(parentdiv).find('a').attr('href')+'" data-wpel-link="external">'+
                  '<img alt="'+jQuery(parentdiv).find('a').data('alt')+'" src="'+jQuery(parentdiv).find('a').data('src')+'"></a>';
    prettylinkcol += '</div></div>';

    
    prettycontent += prettytextcol + prettylinkcol + '</div></div>';

    jQuery(parentdiv).find('span, a').remove();
    jQuery(parentdiv).append(prettycontent);
  });

  // About us banner
  jQuery('div.container[role="document"] > div.section-about').each(function(){
    var parentdiv = this;
    var pdata = jQuery(parentdiv).find('p.data');

    var stylecontent = '<style type="text/css">.section-about .row-content{'+jQuery(pdata).data('dstyle')+'}';
    stylecontent += '@media only screen and (max-width: 640px) {.section-about .row-content{'+jQuery(pdata).data('mstyle')+'}}';
    stylecontent += '</style>';

    var prettycontent = '<div class="row"><div class="row-content">' + stylecontent;

    var prettytextcol = '<div class="columns">';
    prettytextcol += '<img src="'+jQuery(pdata).data('src')+'" alt="'+jQuery(pdata).data('alt')+'" width="'+jQuery(pdata).data('width')+'" /><p></p>';
    prettytextcol += '<p>'+jQuery(pdata).next().html()+'</p>';
    prettytextcol += '</div>';

    var prettylinkcol = '<div class="columns"><div class="contact-info">';
    prettylinkcol += '<a href="'+jQuery(parentdiv).find('a.support').attr('href')+'" data-wpel-link="internal">'+
                  '<span class="contact-text">'+jQuery(parentdiv).find('a.support').html()+'</span></a>';
    prettylinkcol += '<a href="'+jQuery(parentdiv).find('a.tel').attr('href')+'" data-wpel-link="internal">'+jQuery(parentdiv).find('a.tel').html()+'</a>';
    prettylinkcol += '</div></div>';

    
    prettycontent += '<div class="about-content">'+ prettytextcol + prettylinkcol +'</div></div></div>';

    jQuery(parentdiv).find('p, a').remove();
    jQuery(parentdiv).append(prettycontent);
  });
}


function loadstylesheet() {
  var cssFilesArr = ["style.css", "home-mt39-clone.css", "new-global.css"];
  var url = window.location.protocol + "//" + location.host.split(":")[0];

  for(var i = 0; i < cssFilesArr.length; i++) {
    var src = url + '/wp-content/themes/grunterie-master/css/' + cssFilesArr[i];

    $("<link/>", {
      rel: "stylesheet",
      type: "text/css",
      href: src
    }).appendTo("head");
  }
}

loadstylesheet();

unfurldivs();