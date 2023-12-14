<?php 
/**
 * Enqueue scripts and styles.
**/

function homebase_main_scripts() {
	wp_enqueue_style( 'homebase-style', get_stylesheet_directory_uri() . '/style/style.min.css', array(), _S_VERSION );
  wp_style_add_data( 'homebase-style', 'rtl', 'replace' );
  
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
  wp_enqueue_script( 'form-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'homebase-custom', get_template_directory_uri() . '/js/custom-script.js', array(), _S_VERSION, true );
  wp_enqueue_script( 'homebase-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'homebase_main_scripts' );


function homebase_partial_scripts() {
	if ( is_page_template( 'templates/flexible-home-mt39-v1.0.php' ) ) {
    wp_enqueue_script( 'matchheight-js', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );

    wp_enqueue_script( 'home-script', get_template_directory_uri() . '/js/pages/home-mt39-v1.0.js', array(), '', true );

    wp_register_style( 'home-css', get_template_directory_uri() . '/style/pages/home-mt39-v1.0.min.css', array(), '' );
    wp_enqueue_style( 'home-css' );
  }

  else if ( is_page_template( 'templates/flexible-home-mt39-v2.0.php' ) ) {
    //wp_enqueue_script( 'matchheight-js', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );

    wp_enqueue_script( 'home-script', get_template_directory_uri() . '/js/pages/home-mt39-v2.0.js', array(), '', true );

    wp_register_style( 'home-css', get_template_directory_uri() . '/style/pages/home-mt39-v2.0.min.css', array(), '' );
    wp_enqueue_style( 'home-css' );
  }

  else if(is_blog()) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );

    wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
    wp_register_style( 'remodal-css', get_template_directory_uri() . '/style/remodal.css', array(), '' );
    wp_enqueue_style( 'remodal-css' );

    wp_enqueue_script( 'blog-script', get_template_directory_uri() . '/js/blog.min.js', array('jquery'), '', true );
    wp_register_style( 'blog-css', get_template_directory_uri() . '/style/blog.min.css', array(), '' );
    wp_enqueue_style( 'blog-css' );
  }

  else if(is_product_updates()) {
    wp_register_style( 'product-updates-style', get_template_directory_uri() . '/style/product-updates.min.css', array(), '' );
    wp_enqueue_style( 'product-updates-style' );
  }

  else if( is_singular( 'press_list' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    
    wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
    wp_register_style( 'remodal-css', get_template_directory_uri() . '/style/remodal.css', array(), '' );
    wp_enqueue_style( 'remodal-css' );
    
    wp_enqueue_script( 'blog-script', get_template_directory_uri() . '/js/blog.min.js', array('jquery'), '', true );
    wp_register_style( 'blog-css', get_template_directory_uri() . '/style/blog.min.css', array(), '' );
    wp_enqueue_style( 'blog-css' );
  }

  else if( is_page_template( 'templates/flexible-content.php' ) ) {
    wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'matchheight-js', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'flexiblecontent-js', get_template_directory_uri() . '/js/pages/flexible-content.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );

    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    wp_register_style( 'custom-css', get_template_directory_uri() . '/style/style-custom.css', array(), '' );
    wp_enqueue_style( 'custom-css' );
    wp_register_style( 'reviews-css', get_template_directory_uri() . '/style/style-reviews.css', array(), '' );
    wp_enqueue_style( 'reviews-css' );
  }

  else if( is_page_template( 'page-full.php' ) ) {
    wp_register_style( 'custom-css', get_template_directory_uri() . '/style/style-custom.css', array(), '' );
    wp_enqueue_style( 'custom-css' );

    wp_register_style( 'reviews-css', get_template_directory_uri() . '/style/style-reviews.css', array(), '' );
    wp_enqueue_style( 'reviews-css' );
  }

  else if( is_page_template( 'page-reviews.php' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_template_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );

    wp_enqueue_script( 'nice-select-js', get_template_directory_uri() . '/js/jquery.nice-select.js', array('jquery'), '', true );
    wp_register_style( 'nice-select-css', get_template_directory_uri() . '/style/nice-select.css', array(), '' );
    wp_enqueue_style( 'nice-select-css' );

    wp_enqueue_script( 'loadmore-js', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), '', true );

    wp_enqueue_script( 'reviews-js', get_template_directory_uri() . '/js/pages/reviews.js', array('jquery'), '', true );
    wp_register_style( 'reviews-css', get_template_directory_uri() . '/style/style-reviews.css', array(), '' );
    wp_enqueue_style( 'reviews-css' );

    wp_register_style( 'custom-css', get_template_directory_uri() . '/style/style-custom.css', array(), '' );
    wp_enqueue_style( 'custom-css' );
  }

  else if( is_page_template( 'templates/flexible-data-covid19.php' ) ) {
    wp_enqueue_script( 'data-js', get_template_directory_uri() . '/js/pages/data-mt112.js', array('jquery'), '', true );
    wp_register_style( 'data-css', get_template_directory_uri() . '/style/pages/data-mt112.min.css', array(), '' );
    wp_enqueue_style( 'data-css' );
  }

  else if( is_page_template( 'templates/flexible-feature-mt51.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    
    wp_enqueue_script( 'feature-js', get_template_directory_uri() . '/js/pages/feature-mt51.js', array('jquery'), '', true );
    wp_register_style( 'featured-css', get_template_directory_uri() . '/style/pages/featured-mt51.min.css', array(), '' );
    wp_enqueue_style( 'featured-css' );
  }

  else if( is_page_template( 'templates/flexible-NSBW-campaign.php' ) ) {
    // wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    // wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    // wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    // wp_enqueue_style( 'magnific-popup-style' );
    // wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    // wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    // wp_enqueue_style( 'slick-css' );
    
    // wp_enqueue_script( 'feature-js', get_template_directory_uri() . '/js/pages/feature-mt51.js', array('jquery'), '', true );
    wp_register_style( 'flexible-NSBW-campaign-css', get_template_directory_uri() . '/style/pages/flexible-NSBW-campaign.min.css', array(), '' );
    wp_enqueue_style( 'flexible-NSBW-campaign-css' );
  }

  else if( is_page_template( 'templates/flexible-contact-sales-mt64.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'feature-js', get_template_directory_uri() . '/js/pages/contact-sales-mt64.js', array('jquery'), '', true );
    wp_register_style( 'featured-css', get_template_directory_uri() . '/style/pages/contact-sales-mt64.min.css', array(), '' );
    wp_enqueue_style( 'featured-css' );
  }

  else if( is_page_template( 'templates/flexible-careers-mt104.php' ) ) {
    wp_register_style( 'careers-css', get_template_directory_uri() . '/style/pages/careers-mt104.min.css', array(), '' );
    wp_enqueue_style( 'careers-css' );
  }

  else if( is_page_template( 'templates/flexible-franchise-mt93.php' ) ) {
    wp_register_style( 'franchise-css', get_template_directory_uri() . '/style/pages/franchise-mt93.min.css', array(), '' );
    wp_enqueue_style( 'franchise-css' );
  }

  else if ( is_page_template( 'templates/flexible-press-mt63.php' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    
    wp_register_style( 'press-style', get_template_directory_uri() . '/style/pages/press-mt63.min.css', array(), '' );
    wp_enqueue_style( 'press-style' );

    wp_enqueue_script( 'press-script', get_template_directory_uri() . '/js/pages/press-mt63.js', array('jquery'), '', true );
  }

  else if ( is_page_template( 'templates/flexible-partners4-mt66.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );

    wp_enqueue_script( 'partners4-script', get_template_directory_uri() . '/js/pages/partners4-mt66.js', array('jquery'), '', true );
    wp_register_style( 'partners4-style', get_template_directory_uri() . '/style/pages/partners4-mt66.min.css', array(), '' );
    wp_enqueue_style( 'partners4-style' );
  }

  else if ( is_page_template( 'templates/flexible-support-mt55.php' ) ) {
    wp_enqueue_script( 'support-script', get_template_directory_uri() . '/js/pages/support-mt55.js', array('jquery'), '', true );
    wp_register_style( 'support-style', get_template_directory_uri() . '/style/pages/support-mt55.min.css', array(), '' );
    wp_enqueue_style( 'support-style' );
  }

  else if ( is_page_template( 'templates/flexible-pricing-mt58.php' ) ) {
    wp_enqueue_script( 'matchheight-script', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'pricing-script', get_template_directory_uri() . '/js/pages/pricing-mt58.js', array('jquery'), '', true );
    wp_register_style( 'pricing-style', get_template_directory_uri() . '/style/pages/pricing-mt58.min.css', array(), '' );
    wp_enqueue_style( 'pricing-style' );
  }

  else if ( is_page_template( 'templates/flexible-pricing-mt120.php' ) ) {
    wp_enqueue_script( 'matchheight-script', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'pricing-script', get_template_directory_uri() . '/js/pages/pricing-mt120.js', array('jquery'), '', true );
    wp_register_style( 'pricing-style', get_template_directory_uri() . '/style/pages/pricing-mt120.min.css', array(), '' );
    wp_enqueue_style( 'pricing-style' );
  }

  else if ( is_page_template( 'templates/flexible-pricing-wp977.php' ) ) {
    wp_enqueue_script( 'matchheight-script', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'pricing-script', get_template_directory_uri() . '/js/pages/pricing-wp977.js', array('jquery'), '', true );
    wp_register_style( 'pricing-style', get_template_directory_uri() . '/style/pages/pricing-wp977.min.css', array(), '' );
    wp_enqueue_style( 'pricing-style' );
  }

  else if ( is_page_template( 'templates/flexible-partners-mt50.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );

    wp_enqueue_script( 'partners-script', get_template_directory_uri() . '/js/pages/partners-mt50.js', array('jquery'), '', true );
    wp_register_style( 'partners-style', get_template_directory_uri() . '/style/pages/partners-mt50.min.css', array(), '' );
    wp_enqueue_style( 'partners-style' );
  }

  else if ( is_page_template( 'templates/flexible-cobranded-partner-mt69.php' ) ) {
    wp_enqueue_script( 'matchheight-script', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );

    wp_enqueue_script( 'copartner-script', get_template_directory_uri() . '/js/pages/cobranded-mt69.js', array('jquery'), '', true );
    wp_register_style( 'copartner-style', get_template_directory_uri() . '/style/pages/cobarnded-partner-mt69.min.css', array(), '' );
    wp_enqueue_style( 'copartner-style' );
  }

  else if ( is_page_template( 'templates/flexible-customer-mt54.php' ) ) {
    wp_enqueue_script( 'customers-script', get_template_directory_uri() . '/js/pages/customers-mt54.js', array('jquery'), '', true );
    wp_register_style( 'customers-style', get_template_directory_uri() . '/style/pages/customers-mt54.min.css', array(), '' );
    wp_enqueue_style( 'customers-style' );
  }

  else if ( is_page_template( 'templates/flexible-customers-table-mt65.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'customers-table-script', get_template_directory_uri() . '/js/pages/customers-table-mt65.js', array('jquery'), '', true );
    wp_register_style( 'customers-table-style', get_template_directory_uri() . '/style/pages/customers-table-mt65.min.css', array(), '' );
    wp_enqueue_style( 'customers-table-style' );
  }

  else if ( is_page_template( 'templates/flexible-competitor-mt57.php' ) ) {
    wp_register_style( 'competitor-style', get_template_directory_uri() . '/style/pages/competitor-mt57.min.css', array(), '' );
    wp_enqueue_style( 'competitor-style' );
  }

  else if ( is_page_template( 'templates/flexible-seo-cluster-mt87.php' ) ) {
    wp_enqueue_script( 'seo-script', get_template_directory_uri() . '/js/pages/seo-cluster-mt87.js', array('jquery'), '', true );
    wp_register_style( 'seo-style', get_template_directory_uri() . '/style/pages/seo-cluster-mt87.min.css', array(), '' );
    wp_enqueue_style( 'seo-style' );
  }

  else if ( is_page_template( 'templates/flexible-simplified-paid-lp-mt31.php' ) ) {
    wp_enqueue_script( 'splp-script', get_template_directory_uri() . '/js/pages/simplified-mt31.js', array('jquery'), '', true );
    wp_register_style( 'splp-style', get_template_directory_uri() . '/style/pages/simplified-mt31.min.css', array(), '' );
    wp_enqueue_style( 'splp-style' );
  }

  else if ( is_page_template( 'templates/flexible-time-card-calculator-mt88.php' ) ) {
    wp_enqueue_script( 'timepicker-script', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array('jquery'), '', true );
    wp_register_style( 'timepicker-style', get_template_directory_uri() . '/style/jquery.timepicker.min.css', array(), '' );
    wp_enqueue_style( 'timepicker-style' );

    wp_enqueue_script( 'timecard-calculator-script', get_template_directory_uri() . '/js/pages/timecard-calculator-mt88.min.js', array('jquery'), '', true );
    wp_register_style( 'timecard-calculator-style', get_template_directory_uri() . '/style/pages/timecard-calculator-mt88.min.css', array(), '' );
    wp_enqueue_style( 'timecard-calculator-style' );
  }

  else if ( is_page_template( 'templates/flexible-time-card-calculator-v2.php' ) ) {
    wp_enqueue_script( 'timepicker-script', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array('jquery'), '', true );
    wp_register_style( 'timepicker-style', get_template_directory_uri() . '/style/jquery.timepicker.min.css', array(), '' );
    wp_enqueue_style( 'timepicker-style' );

    wp_enqueue_script( 'timecard-calculator-v2', get_template_directory_uri() . '/js/pages/time-card-calculator-v2.js', array('jquery'), '', true );
    wp_register_style( 'timecard-calculator-v2', get_template_directory_uri() . '/style/pages/time-card-calculator-v2.min.css', array(), '' );
    wp_enqueue_style( 'timecard-calculator-v2' );
  }

  else if ( is_page_template( 'templates/flexible-secure-mt131.php' ) ) {
    wp_register_style( 'secure-style', get_template_directory_uri() . '/style/pages/secure-mt131.min.css', array(), '' );
    wp_enqueue_style( 'secure-style' );
  }

  else if ( is_page_template( 'templates/flexible-aboutus-mt62.php' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    
    wp_enqueue_script( 'about-script', get_template_directory_uri() . '/js/pages/aboutus-mt62.js', array('jquery'), '', true );
    wp_register_style( 'about-style', get_template_directory_uri() . '/style/pages/aboutus-mt62.min.css', array(), '' );
    wp_enqueue_style( 'about-style' );
  }

  else if ( is_page_template( 'templates/flexible-labor-law-guides-mt120.php' ) ) {
    wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
    wp_register_style( 'remodal-css', get_template_directory_uri() . '/style/remodal.css', array(), '' );
    wp_enqueue_style( 'remodal-css' );
    
    wp_enqueue_script( 'laborlaw-script', get_template_directory_uri() . '/js/pages/labor-law-mt120.js', array('jquery'), '', true );
    wp_register_style( 'laborlaw-style', get_template_directory_uri() . '/style/pages/labor-law-mt120.min.css', array(), '' );
    wp_enqueue_style( 'laborlaw-style' );
  }

  else if ( is_page_template( 'templates/flexible-video-lp-mm.php' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );

    wp_enqueue_script( 'videolp-script', get_template_directory_uri() . '/js/pages/video-lp-mm.js', array('jquery'), '', true );
    wp_register_style( 'videolp-style', get_template_directory_uri() . '/style/pages/video-lp-mm.min.css', array(), '' );
    wp_enqueue_style( 'videolp-style' );
  }

  else if ( is_page_template( 'templates/flexible-payroll-testimonial.php' ) ) {
    //wp_enqueue_script( 'videolp-script', get_template_directory_uri() . '/js/pages/video-lp-mm.js', array('jquery'), '', true );
    wp_register_style( 'testimonial-style', get_template_directory_uri() . '/style/pages/payroll-testimonial.min.css', array(), '' );
    wp_enqueue_style( 'testimonial-style' );
  }
  
  else if ( is_page_template( 'templates/flexible-subscribe-mt192.php' ) ) {
	  wp_enqueue_script( 'subscribe-script', get_template_directory_uri() . '/js/pages/subscribe-mt192.js', array('jquery'), '', true );	  
    wp_register_style( 'subscribe-style', get_template_directory_uri() . '/style/pages/subscribe-mt192.min.css', array(), '' );
    wp_enqueue_style( 'subscribe-style' );
  }
  
  else if ( is_page_template( 'templates/flexible-subscribe-success-mt192.php' ) ) {	  
    wp_register_style( 'subscribe-success-style', get_template_directory_uri() . '/style/pages/subscribe-success-mt192.min.css', array(), '' );
    wp_enqueue_style( 'subscribe-success-style' );
  }

  else if ( is_page_template( 'templates/flexible-fow-microsite.php' ) ) {
    wp_enqueue_script( 'fow-microsite-script', get_template_directory_uri() . '/js/pages/fow-microsite.js', array('jquery'), '', true );    
    wp_register_style( 'fow-microsite-style', get_template_directory_uri() . '/style/pages/fow-microsite.min.css', array(), '' );
    wp_enqueue_style( 'fow-microsite-style' );
  }

  else if( is_page_template( 'templates/flexible-timesheet-template.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'timesheet-template-js', get_template_directory_uri() . '/js/pages/timesheet-template.js', array('jquery'), '', true );
    wp_register_style( 'timesheet-template-css', get_template_directory_uri() . '/style/pages/timesheet-template.min.css', array(), '' );
    wp_enqueue_style( 'timesheet-template-css' );
  }

  else if( is_page_template( 'templates/flexible-pay-any-day-lp.php' ) ) {
    wp_dequeue_script( 'homebase-navigation');
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/style/magnific-popup.min.css', array(), '' );
    wp_enqueue_style( 'magnific-popup-style' );
    
    wp_enqueue_script( 'pay-any-day-lp-js', get_template_directory_uri() . '/js/pages/pay-any-day-lp.js', array('jquery'), '', true );
    wp_register_style( 'pay-any-day-lp-css', get_template_directory_uri() . '/style/pages/pay-any-day-lp.min.css', array(), '' );
    wp_enqueue_style( 'pay-any-day-lp-css' );
  }

  else if( is_page_template( 'templates/flexible-direct-mail-lp.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'direct-mail-lp-js', get_template_directory_uri() . '/js/pages/direct-mail-lp.js', array('jquery'), '', true );
    wp_register_style( 'direct-mail-lp-css', get_template_directory_uri() . '/style/pages/direct-mail-lp.min.css', array(), '' );
    wp_enqueue_style( 'direct-mail-lp-css' );
  }

  else if( is_page_template( 'templates/flexible-bloglike.php' ) ) {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/style/slick.min.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );

    wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
    wp_register_style( 'remodal-css', get_template_directory_uri() . '/style/remodal.css', array(), '' );
    wp_enqueue_style( 'remodal-css' );
    
    wp_enqueue_script( 'bloglike-js', get_template_directory_uri() . '/js/pages/bloglike.js', array('jquery'), '', true );
    wp_register_style( 'bloglike-css', get_template_directory_uri() . '/style/pages/bloglike.min.css', array(), '' );
    wp_enqueue_style( 'bloglike-css' );
  }

  else if( is_page_template( 'templates/flexible-scheduling.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'scheduling', get_template_directory_uri() . '/js/pages/scheduling.js', array('jquery'), '', true );
    wp_enqueue_style( 'scheduling', get_template_directory_uri() . '/style/pages/scheduling.min.css', array(), '' );
  }

  else if( is_page_template( 'templates/flexible-time-card-calculator-v2.php' ) ) {
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'scheduling', get_template_directory_uri() . '/js/pages/scheduling.js', array('jquery'), '', true );
    wp_enqueue_style( 'scheduling', get_template_directory_uri() . '/style/pages/scheduling.min.css', array(), '' );
  }

  else if( is_page_template( 'templates/flexible-influencers-lp.php' ) ) {    
    wp_enqueue_script( 'influencers-lp', get_template_directory_uri() . '/js/pages/influencers-lp.js', array('jquery'), '', true );
    wp_enqueue_style( 'influencers-lp', get_template_directory_uri() . '/style/pages/influencers-lp.min.css', array(), '' );
  }

}
add_action( 'wp_enqueue_scripts', 'homebase_partial_scripts' );

?>