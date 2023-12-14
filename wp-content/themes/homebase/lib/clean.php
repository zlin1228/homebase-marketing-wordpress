<?php

// start all the functions
add_action('after_setup_theme','homebase_startup');

if( ! function_exists( 'homebase_startup ' ) ) {
	function homebase_startup() {

		// launching operation cleanup
		add_action('init', 'homebase_head_cleanup');
		// remove WP version from RSS
		add_filter('the_generator', 'homebase_rss_version');
		// remove pesky injected css for recent comments widget
		add_filter( 'wp_head', 'homebase_remove_wp_widget_recent_comments_style', 1 );
		// clean up comment styles in the head
		add_action('wp_head', 'homebase_remove_recent_comments_style', 1);
		// clean up gallery output in wp
		add_filter('gallery_style', 'homebase_gallery_style');
		// additional post related cleaning
		add_filter( 'img_caption_shortcode', 'homebase_cleaner_caption', 10, 3 );
		add_filter('get_image_tag_class', 'homebase_image_tag_class', 0, 4);
		add_filter('get_image_tag', 'homebase_image_editor', 0, 4);
		add_filter( 'the_content', 'homebase_img_unautop', 30 );

	} /* end homebase_startup */
}

/**********************
WP_HEAD GOODNESS
The default WordPress head is
a mess. Let's clean it up.

Thanks for Bones
http://themble.com/bones/
**********************/

if( ! function_exists( 'homebase_head_cleanup ' ) ) {
	function homebase_head_cleanup() {
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
	  add_filter( 'style_loader_src', 'homebase_remove_wp_ver_css_js', 9999 );
	  // remove Wp version from scripts
    add_filter( 'script_loader_src', 'homebase_remove_wp_ver_css_js', 9999 );
    
    // additional post related cleaning
		add_filter( 'img_caption_shortcode', 'homebase_cleaner_caption', 10, 3 );
		add_filter('get_image_tag_class', 'homebase_image_tag_class', 0, 4);
		add_filter('get_image_tag', 'homebase_image_editor', 0, 4);
    add_filter( 'the_content', 'homebase_img_unautop', 30 );

	} /* end head cleanup */
}


// remove WP version from RSS
if( ! function_exists( 'homebase_rss_version ' ) ) {
	function homebase_rss_version() { return ''; }
}

// remove WP version from scripts
if( ! function_exists( 'homebase_remove_wp_ver_css_js ' ) ) {
	function homebase_remove_wp_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
}

// remove injected CSS for recent comments widget
if( ! function_exists( 'homebase_remove_wp_widget_recent_comments_style ' ) ) {
	function homebase_remove_wp_widget_recent_comments_style() {
	   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
		  remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	   }
	}
}

// remove injected CSS from recent comments widget
if( ! function_exists( 'homebase_remove_recent_comments_style ' ) ) {
	function homebase_remove_recent_comments_style() {
	  global $wp_widget_factory;
	  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	  }
	}
}

// remove injected CSS from gallery
if( ! function_exists( 'homebase_gallery_style ' ) ) {
	function homebase_gallery_style($css) {
	  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
	}
}


// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
if( ! function_exists( 'homebase_ie_conditional ' ) ) {
	function homebase_ie_conditional( $tag, $handle ) {
		if ( 'reverie-ie-only' == $handle )
			$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
		return $tag;
	}
}

/*********************
Post related cleaning
*********************/
/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
if( ! function_exists( 'homebase_cleaner_caption ' ) ) {
	function homebase_cleaner_caption( $output, $attr, $content ) {

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

	} /* end homebase_cleaner_caption */
}

// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
if( ! function_exists( 'homebase_image_tag_class ' ) ) {
	function homebase_image_tag_class($class, $id, $align, $size) {
		$align = 'align' . esc_attr($align);
		return $align;
	} /* end homebase_image_tag_class */
}

// Remove width and height in editor, for a better responsive world.
if( ! function_exists( 'homebase_image_editor ' ) ) {
	function homebase_image_editor($html, $id, $alt, $title) {
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
	} /* end homebase_image_editor */
}

// Wrap images with figure tag. Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
if( ! function_exists( 'homebase_img_unautop ' ) ) {
	function homebase_img_unautop($pee) {
		$pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
		return $pee;
	} /* end homebase_img_unautop */
}

?>