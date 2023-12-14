jQuery(document).ready(function(){

  var faqItems = $('.faq-item .question');

  for (var n = 0; n < faqItems.length; n++) {
    faqItems[n].onclick = function() {
      $(this).parent().toggleClass('open');
      hideOthers(this);
    };
  }

  function hideOthers(exceptThis) {
    for (var n = 0; n < faqItems.length; n++) {
      if (faqItems[n] !== exceptThis) {
        faqItems[n].parentElement.classList.remove("open");
      }
    }
  }

  $('.section-faq a').click(function() {

    var link_text = "";
    if ($('span', this).text() == "") {
      link_text = $(this).text();
    }
    else {
      link_text = $('span', this).text();
    }

    var event = "Link Clicked";
    var eventProperties = {
      "product_area" : "mw_paycheck_calculator",
      "event_category": "mw_faq",
      "action_type": "click",
      "filtered_path": window.location.pathname,
      "full_path" : window.location.pathname + window.location.search + window.location.hash,
      "query_params" : window.location.search,
      "screen_height" : screen.height,
      "screen_width" : screen.width,
      "link_url" : $(this).attr('href'),
      "link_text" : link_text
    };
    if( document.body.getAttribute('data-amplitude-gtm-pageview-disabled') == 'Yes' && typeof document.getElementById('amp-attr-hijack') !== 'undefined' ) {
      var jsnAttr = JSON.parse(document.getElementById('amp-attr-hijack').innerHTML );
      for (var key in jsnAttr) eventProperties[key] = jsnAttr[key];
    } 
    amplitude.getInstance().logEvent(event, eventProperties);

  });
  
});

