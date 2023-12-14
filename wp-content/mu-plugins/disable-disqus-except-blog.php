<?php 
/*
Plugin Name: Disable disqus plugin everywhere except post page (for site performance)
*/


if (!defined('ABSPATH')) {
	exit;
}

function disable_disqus_except_blog( $plugins ) {
	// The 'option_active_plugins' hook occurs before any user information get generated,
	// so we need to require this file early to be able to check for logged in status
	require (ABSPATH . WPINC . '/pluggable.php');

	// Use the plugin folder and main file name here.
	$key = array_search('disqus-comment-system/disqus.php', $plugins);

	if (false !== $key) {
		// Remove the plugin reference, based on its key
		unset($plugins[$key]);
	}

	return $plugins;
}


if (strpos($_SERVER['REQUEST_URI'], '/blog/') === false) {
	add_filter('option_active_plugins', 'disable_disqus_except_blog');
}

