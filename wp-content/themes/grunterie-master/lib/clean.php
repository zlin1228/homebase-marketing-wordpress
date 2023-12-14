<?php
/*********************
Start all the functions
at once for Reverie.
*********************/

// start all the functions
add_action('after_setup_theme','reverie_startup');

if( ! function_exists( 'reverie_startup ' ) ) {
	function reverie_startup() {

		// launching operation cleanup
		add_action('init', 'reverie_head_cleanup');
		// remove WP version from RSS
		add_filter('the_generator', 'reverie_rss_version');
		// remove pesky injected css for recent comments widget
		add_filter( 'wp_head', 'reverie_remove_wp_widget_recent_comments_style', 1 );
		// clean up comment styles in the head
		add_action('wp_head', 'reverie_remove_recent_comments_style', 1);
		// clean up gallery output in wp
		add_filter('gallery_style', 'reverie_gallery_style');

		// enqueue base scripts and styles
		add_action('wp_enqueue_scripts', 'reverie_scripts_and_styles', 10);
		// ie conditional wrapper
		add_filter( 'style_loader_tag', 'reverie_ie_conditional', 10, 2 );

		// additional post related cleaning
		add_filter( 'img_caption_shortcode', 'reverie_cleaner_caption', 10, 3 );
		add_filter('get_image_tag_class', 'reverie_image_tag_class', 0, 4);
		add_filter('get_image_tag', 'reverie_image_editor', 0, 4);
		add_filter( 'the_content', 'reverie_img_unautop', 30 );

	} /* end reverie_startup */
}


/**********************
WP_HEAD GOODNESS
The default WordPress head is
a mess. Let's clean it up.

Thanks for Bones
http://themble.com/bones/
**********************/

if( ! function_exists( 'reverie_head_cleanup ' ) ) {
	function reverie_head_cleanup() {
		// category feeds
		// remove_action( 'wp_head', 'feed_links_extra', 3 );
		// post and comment feeds
		// remove_action( 'wp_head', 'feed_links', 2 );
		// EditURI link
		remove_action( 'wp_head', 'rsd_link' );
		// windows live writer
		remove_action( 'wp_head', 'wlwmanifest_link' );
		// index link
		remove_action( 'wp_head', 'index_rel_link' );
		// previous link
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
		// start link
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
		// links for adjacent posts
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		// WP version
		remove_action( 'wp_head', 'wp_generator' );
	  // remove WP version from css
	  add_filter( 'style_loader_src', 'reverie_remove_wp_ver_css_js', 9999 );
	  // remove Wp version from scripts
	  add_filter( 'script_loader_src', 'reverie_remove_wp_ver_css_js', 9999 );

	} /* end head cleanup */
}

// remove WP version from RSS
if( ! function_exists( 'reverie_rss_version ' ) ) {
	function reverie_rss_version() { return ''; }
}

// remove WP version from scripts
if( ! function_exists( 'reverie_remove_wp_ver_css_js ' ) ) {
	function reverie_remove_wp_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
}

// remove injected CSS for recent comments widget
if( ! function_exists( 'reverie_remove_wp_widget_recent_comments_style ' ) ) {
	function reverie_remove_wp_widget_recent_comments_style() {
	   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
		  remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	   }
	}
}

// remove injected CSS from recent comments widget
if( ! function_exists( 'reverie_remove_recent_comments_style ' ) ) {
	function reverie_remove_recent_comments_style() {
	  global $wp_widget_factory;
	  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	  }
	}
}

// remove injected CSS from gallery
if( ! function_exists( 'reverie_gallery_style ' ) ) {
	function reverie_gallery_style($css) {
	  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
	}
}

/**********************
Enqueue CSS and Scripts
**********************/
// loading modernizr and jquery, and reply script
if( ! function_exists( 'reverie_scripts_and_styles ' ) ) {
	function reverie_scripts_and_styles() {
		if (!is_admin()) {
			// modernizr (without media query polyfill)
			// wp_register_script( 'reverie-modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '2.6.2', true );
			// ie-only style sheet
			wp_register_style( 'reverie-ie-only', get_template_directory_uri() . '/css/ie.css', array(), '' );
			// comment reply script for threaded comments
			// if( get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }
			if( !is_front_page() ) wp_register_script( 'reverie-js', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '', true );//blank.foundation.min.js
			else wp_register_script( 'reverie-js', get_template_directory_uri() . '/js/blank.foundation.min.js', array( 'jquery' ), '', true );//blank.foundation.min.js
			
			wp_enqueue_script( 'jquery' );

			if( !is_front_page() && !is_page_template( 'templates/flexible-new-home-mt39-minimal.php' )) {
				wp_register_script( 'matchheight', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array(), '', true );
				wp_register_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
				wp_register_script( 'lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', array(), '', true );
				wp_register_script( 'form-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), '', true );
				wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.min.js', array('jquery'), '1.1.3', true );
				
				wp_enqueue_script( 'reverie-js' );
				wp_enqueue_script( 'lazysizes' );
				wp_enqueue_script( 'matchheight' );
				wp_enqueue_script( 'slick-js' );
				wp_enqueue_script( 'form-validate' );
				wp_enqueue_script( 'custom' );
			}


			wp_localize_script( 'custom', 'vars', array(   
				'site_url' => get_template_directory_uri(),
			));

			if ( is_page_template( 'page-state-compliance.php' ) ) {
				wp_register_script( 'readmore', get_template_directory_uri() . '/js/readmore.min.js', array('jquery'), '', true );
			}

			else if ( is_page_template( 'templates/flexible-btb-mt59.php' ) ) {
				wp_register_script( 'btb-script', get_template_directory_uri() . '/js/btb.min.js', array('jquery'), '', true );
				wp_register_style( 'btb-style', get_template_directory_uri() . '/css/btb.min.css', array(), '' );
				wp_enqueue_style( 'btb-style' );
				wp_enqueue_script( 'btb-script' );
			}

			else if ( is_page_template( 'templates/gdm-sms-demo-confirmation.php' ) ) {
				wp_register_style( 'confirmation-style', get_template_directory_uri() . '/css/pages/page-confirmation.css', array(), '' );
				wp_enqueue_style( 'confirmation-style' );
			}

			else if ( is_page_template( 'templates/flexible-press-mt63.php' ) ) {
				wp_register_style( 'press-style', get_template_directory_uri() . '/css/pages/page-press.css', array(), '' );
				wp_enqueue_style( 'press-style' );
			}

			else if ( is_page_template( 'templates/flexible-new-home-mt39.php' ) ) {
				wp_register_style( 'home-style', get_template_directory_uri() . '/css/pages/page-home.css', array(), '' );
				wp_enqueue_style( 'home-style' );
			}

			else if ( is_page_template( 'templates/flexible-customer-mt54.php' ) ) {
				wp_register_style( 'customer-style', get_template_directory_uri() . '/css/pages/page-customer.min.css', array(), '' );
				wp_enqueue_style( 'customer-style' );
			}
   			else if ( is_page_template( 'templates/flexible-customers-table-mt65.php' ) ) {
				wp_register_style( 'customers-table-style', get_template_directory_uri() . '/css/pages/page-customers-table.min.css', array(), '' );
				wp_enqueue_style( 'customers-table-style' );
			}
			else if ( is_page_template( 'templates/flexible-cobranded-partner-mt69.php' ) ) {
				wp_register_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
				wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/css/magnific-popup.min.css', array(), '' );
				wp_enqueue_script( 'magnific-popup-script' );
				wp_enqueue_style( 'magnific-popup-style' );
				
				wp_register_style( 'cobranded-partner-style', get_template_directory_uri() . '/css/pages/page-cobranded-partner.css', array(), '' );
				wp_enqueue_style( 'cobranded-partner-style' );
			}

			else if ( is_page_template( 'templates/flexible-competitor-mt57.php' ) ) {
				wp_register_style( 'competitor-style', get_template_directory_uri() . '/css/pages/page-competitor.css', array(), '' );
				wp_enqueue_style( 'competitor-style' );
			}
			
			else if ( is_page_template( 'templates/flexible-partners4.php' ) ) {
				wp_register_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
				wp_register_style( 'magnific-popup-style', get_template_directory_uri() . '/css/magnific-popup.min.css', array(), '' );
				wp_enqueue_script( 'magnific-popup-script' );
				wp_enqueue_style( 'magnific-popup-style' );

				wp_register_style( 'partners4-style', get_template_directory_uri() . '/css/pages/page-partners4.min.css', array(), '' );
				wp_enqueue_style( 'partners4-style' );
			}
			
			else if ( is_page_template( 'templates/flexible-time-card-calculator-mt88.php' ) ) {
				wp_register_script( 'timepicker-script', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array('jquery'), '', true );
				wp_register_style( 'timepicker-style', get_template_directory_uri() . '/css/jquery.timepicker.min.css', array(), '' );
				wp_enqueue_style( 'timepicker-style' );
				wp_enqueue_script( 'timepicker-script' );

				wp_register_script( 'timecard-calculator-script', get_template_directory_uri() . '/js/timecardcalculator.min.js', array('jquery'), '', true );
				wp_enqueue_script( 'timecard-calculator-script' );
				wp_register_style( 'timecard-calculator-style', get_template_directory_uri() . '/css/pages/page-timecard-calculator.min.css', array(), '' );
				wp_enqueue_style( 'timecard-calculator-style' );
			}
			
			else if ( is_page_template( 'templates/contact-sales-mt64.php' ) ) {
				wp_register_style( 'sales-style', get_template_directory_uri() . '/css/pages/page-contactsales.min.css', array(), '' );
				wp_enqueue_style( 'sales-style' );
			}
			
			else if ( is_page_template( 'templates/flexible-feature-mt51.php' ) ) {
				wp_register_style( 'features-style', get_template_directory_uri() . '/css/pages/page-features.min.css', array(), '' );
				wp_enqueue_style( 'features-style' );
			}

			else if ( is_page_template( 'templates/flexible-simplified-paid-lp-mt31.php' ) ) {
				wp_register_style( 'simplified-style', get_template_directory_uri() . '/css/pages/page-simplified.min.css', array(), '' );
				wp_enqueue_style( 'simplified-style' );
			}

			else if ( is_page_template( 'templates/flexible-franchise-mt93.php' ) ) {
				wp_register_style( 'franchise-style', get_template_directory_uri() . '/css/pages/page-franchise.min.css', array(), '' );
				wp_enqueue_style( 'franchise-style' );
			}
			
			else if ( is_page_template( 'templates/flexible-seo-cluster-mt87.php' ) ) {
				wp_register_style( 'seocluster-style', get_template_directory_uri() . '/css/pages/page-seo-cluster.min.css', array(), '' );
				wp_enqueue_style( 'seocluster-style' );
			}

			else if ( is_page_template( 'templates/flexible-careers-mt104.php' ) ) {
				wp_register_style( 'careers-style', get_template_directory_uri() . '/css/pages/page-careers.min.css', array(), '' );
				wp_enqueue_style( 'careers-style' );
			}

			else if ( is_page_template( 'templates/flexible-pricing-mt120.php' ) ) {
				wp_register_style( 'pricing-style', get_template_directory_uri() . '/css/pages/page-pricing.min.css', array(), '' );
				wp_enqueue_style( 'pricing-style' );
			}

			else if ( is_page_template( 'templates/flexible-data-covid19.php' ) ) {
				wp_register_style( 'data-style', get_template_directory_uri() . '/css/pages/page-data.min.css', array(), '' );
				wp_enqueue_style( 'data-style' );
			}

			else if ( is_page_template( 'templates/flexible-secure-mt131.php' ) ) {
				wp_register_style( 'secure-style', get_template_directory_uri() . '/css/pages/page-secure.min.css', array(), '' );
				wp_enqueue_style( 'secure-style' );
			}

			else if ( is_page_template( 'templates/flexible-labor-law-guides-mt120.php' ) ) {
				wp_register_script( 'remodal', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
				wp_enqueue_script( 'remodal' );
				wp_register_style( 'labor-style', get_template_directory_uri() . '/css/pages/page-labor-law.min.css', array(), '' );
				wp_enqueue_style( 'labor-style' );
			}

			else if ( is_page_template( 'templates/flexible-about-us-mt62.php' ) ) {
				wp_register_style( 'aboutus-style', get_template_directory_uri() . '/css/pages/page-about-us.min.css', array(), '' );
				wp_enqueue_style( 'aboutus-style' );
			}

			
			else if ( is_page_template( 'page-home-animated.php' ) && !wp_is_mobile()) {
				wp_register_script( 'lottie', get_template_directory_uri() . '/js/lottie.js', array('jquery'), '', true );
			}

			
			else if ( is_page_template( 'page-labor-laws-map.php' ) ) {
				wp_register_script( 'raphael', get_template_directory_uri() . '/js/raphael.js', array('jquery', 'reverie-js'), '', true );
				wp_register_script( 'jquery.usmap', get_template_directory_uri() . '/js/jquery.usmap.js', array('jquery', 'reverie-js'), '', true );
				wp_register_script( 'color.jquery', get_template_directory_uri() . '/js/color.jquery.js', array('jquery', 'reverie-js'), '', true );
			}

			else if ( is_page_template( 'page-schedule-maker.php' ) ) {
				wp_register_script( 'ddslick', get_template_directory_uri() . '/js/ddslick.js', array('jquery'), '', true );
				wp_register_script( 'select2', get_template_directory_uri() . '/js/select2.min.js', array('jquery'), '', true );
				wp_register_script( 'schedule-maker', get_template_directory_uri() . '/js/schedule-maker.js', array('jquery', 'reverie-js'), '', true );				
				wp_register_script( 'remodal', get_template_directory_uri() . '/js/remodal.min.js', array('schedule-maker'), '', true );
			}

			else if(is_blog()) {
				//wp_register_script( 'blog-script', get_template_directory_uri() . '/js/blog.min.js', array('jquery'), '', true );
				//wp_enqueue_script( 'blog-script' );
				wp_register_style( 'blog-style', get_template_directory_uri() . '/css/blog.min.css', array(), '' );
				wp_enqueue_style( 'blog-style' );
				//wp_register_script( 'remodal-script', get_template_directory_uri() . '/js/remodal.min.js', array('jquery'), '', true );
				//wp_enqueue_script( 'remodal-script' );

				wp_dequeue_script( 'reverie-js' );
				wp_dequeue_script( 'lazysizes' );
				wp_dequeue_script( 'matchheight' );
				wp_dequeue_script( 'slick-js' );
				wp_dequeue_script( 'form-validate' );
				wp_dequeue_script( 'custom' );

				wp_dequeue_style( 'my-nice-select' );
				wp_dequeue_style( 'my-slick' );
			}

			else if(is_product_updates()) {
				wp_register_style( 'product-updates-style', get_template_directory_uri() . '/css/product-updates.min.css', array(), '' );
				wp_enqueue_style( 'product-updates-style' );
			}


			// for adding script that appends everything with referral code
			if( isset($_GET['refcode']) ){ 
				wp_register_script( 'referralsting', get_template_directory_uri() . '/js/referralsting.min.js', array('jquery'), '1.0', true );
				wp_enqueue_script( 'referralsting' );
			}

			global $is_IE;
			if ($is_IE) {
				wp_register_script ( 'html5shiv', "http://html5shiv.googlecode.com/svn/trunk/html5.js" , false, true);
			}

			// enqueue styles and scripts

			wp_enqueue_style('reverie-ie-only');
			/*
			I recommend using a plugin to call jQuery
			using the google cdn. That way it stays cached
			and your site will load faster.
			*/
			
			
			


			if ( is_page_template( 'page-state-compliance.php' ) ) {
				wp_enqueue_script( 'readmore' );
			}

			if ( is_page_template( 'page-home-animated.php' ) && !wp_is_mobile()) {
				wp_enqueue_script( 'lottie' );
			}

			

			wp_enqueue_script( 'html5shiv' );
            if ( is_page_template( 'page-labor-laws-map.php' ) ) {
                wp_enqueue_script( 'raphael' );
                wp_enqueue_script( 'jquery.usmap' );
                wp_enqueue_script( 'color.jquery' );
			}
			
			if ( is_page_template( 'page-schedule-maker.php' )) {				
				wp_enqueue_script( 'ddslick' );
				wp_enqueue_script( 'select2' );
				wp_enqueue_script( 'schedule-maker' );
				wp_enqueue_script( 'remodal' );
												
			}

			

			// dequeue styles and scripts
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-css' );
			if( is_front_page() ){
				wp_dequeue_style( 'my-nice-select' );
				wp_dequeue_style( 'my-slick' );
				// wp_dequeue_style( 'my-styles-reviews' );
			}
            
		}

	}
}





// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
if( ! function_exists( 'reverie_ie_conditional ' ) ) {
	function reverie_ie_conditional( $tag, $handle ) {
		if ( 'reverie-ie-only' == $handle )
			$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
		return $tag;
	}
}

/*********************
Post related cleaning
*********************/
/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
if( ! function_exists( 'reverie_cleaner_caption ' ) ) {
	function reverie_cleaner_caption( $output, $attr, $content ) {

		/* We're not worried abut captions in feeds, so just return the output here. */
		if ( is_feed() )
			return $output;

		/* Set up the default arguments. */
		$defaults = array(
			'id' => '',
			'align' => 'alignnone',
			'width' => '',
			'caption' => ''
		);

		/* Merge the defaults with user input. */
		$attr = shortcode_atts( $defaults, $attr );

		/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
		if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
			return $content;

		/* Set up the attributes for the caption <div>. */
		$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';

		/* Open the caption <div>. */
		$output = '<figure' . $attributes .'>';

		/* Allow shortcodes for the content the caption was created for. */
		$output .= do_shortcode( $content );

		/* Append the caption text. */
		$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';

		/* Close the caption </div>. */
		$output .= '</figure>';

		/* Return the formatted, clean caption. */
		return $output;

	} /* end reverie_cleaner_caption */
}

// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
if( ! function_exists( 'reverie_image_tag_class ' ) ) {
	function reverie_image_tag_class($class, $id, $align, $size) {
		$align = 'align' . esc_attr($align);
		return $align;
	} /* end reverie_image_tag_class */
}

// Remove width and height in editor, for a better responsive world.
if( ! function_exists( 'reverie_image_editor ' ) ) {
	function reverie_image_editor($html, $id, $alt, $title) {
		return preg_replace(array(
				'/\s+width="\d+"/i',
				'/\s+height="\d+"/i',
				'/alt=""/i'
			),
			array(
				'',
				'',
				'',
				'alt="' . $title . '"'
			),
			$html);
	} /* end reverie_image_editor */
}

// Wrap images with figure tag. Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
if( ! function_exists( 'reverie_img_unautop ' ) ) {
	function reverie_img_unautop($pee) {
		$pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
		return $pee;
	} /* end reverie_img_unautop */
}
?>