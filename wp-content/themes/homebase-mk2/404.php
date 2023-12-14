<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Homebase
 */

get_header();
?>

	<main id="primary" class="site-main" role="document">

	<div class="container">
    <div class="row">

	<div class="col col-12 col-sm-8 offset-sm-2">
		<div class="col-inner">
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry-header">
					<h2 class="entry-title"><?php _e('File Not Found', 'reverie'); ?></h2>
				</div>
				<div class="entry-content">
					<div class="error">
						<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'reverie'); ?></p>
					</div>
					<p><?php _e('Please try the following:', 'reverie'); ?></p>
					<ul> 
						<li><?php _e('Check your spelling', 'reverie'); ?></li>
						<li><?php printf(__('Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?></li>
						<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></li>
					</ul>
				</div>
			</article>
		</div>
	</div>

	</main><!-- #main -->

<?php
get_footer();
