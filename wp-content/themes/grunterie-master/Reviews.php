<?php

if ( !class_exists('Reviews') ):

class Reviews
{
	/**
	 * Initialize & hook into WP
	 */
	public function __construct() {
		add_action( 'init', array($this, 'register_post_type'), 0 );
		add_action( 'admin_notices', array($this, 'admin_notice') );
	}
	
	
	/**
	 * Dependencies check
	 *
	 * Check to make sure we have the required plugin(s) 
	 * installed.
	 */
	public function dependencies_check() {
	   return ( is_plugin_active('advanced-custom-fields/acf.php') ) ? true : false;
	}
	
	/**
	 * Dependencies notifications
	 *
	 * Required plugin isn't installed, notify user
	 */
	public function admin_notice() {
	
		// Check for required plugins
		if ( $this->dependencies_check() )
			return;
		
		// Display message
		/*$install_link = admin_url('plugin-install.php?tab=search&type=term&s=Advanced+Custom+Fields&plugin-search-input=Search+Plugins');
		$html =  '<div class="error"><p>';
		$html .= '<strong>Team Profiles</strong> needs the <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> plugin to work. Please <a href="' . $install_link . '">install it now</a>.';
		$html .= '</p></div>';
		
		echo $html;*/
	}


	/**
	 * Register post type
	 */
	public function register_post_type() {
	   
		$labels = array(
			'name' => __("Reviews"),
			'singular_name' => __("Reviews"),
			'menu_name' => __('Reviews'),
			'add_new' => __("Add New"),
			'add_new_item' => __("Add New Review"),
			'edit_item' => __("Edit"),
			'new_item' => __("New"),
			'view_item' => __("View"),
			'search_items' => __("Search review"),
			'not_found' =>  __("Review not found"),
			'not_found_in_trash' => __("Review not found in trafh"),
			'parent_item_colon' => ''
		);
		
		register_post_type('reviews' , array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
/*			'menu_icon' => 'dashicons-camera',*/
			'rewrite' => array('slug' => 'reviews'),
			'supports' => array('title', 'thumbnail'),
			'publicly_queryable' => false,
			'exclude_from_search' => false
		) );
	}
}

$Reviews = new Reviews();

endif;