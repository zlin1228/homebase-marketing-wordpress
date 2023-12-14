<?php
/**
 * The template for displaying footer on the video landing page
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Homebase
 */

?>


<footer id="colophon" class="site-footer">	
	<div class="footer-bottom">
		<div class="container-narrow">
			<div class="footer-logo">
				<div class="row">
					<div class="col">
						<div class="col-inner">
							<div class="logo-wrapper">
								<img src="<?php echo get_stylesheet_directory_uri() . '/images/homebase-logo-white_small.svg' ?>" alt="Homebase logo" width="110" height="16">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-summary">
				<div class="row">
					<div class="col">
						<div class="col-inner">
						<?php
							if(get_field('add_featured_text') && get_field('featured_text')) 
								the_field('featured_text');
							else
								the_field('op_generic_footer_text', 'option');
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="row">
					<div class="col">
						<div class="col-inner">
							<p>© <?php echo date('Y'); ?> <?php the_field('op_footer_copyright', 'option'); ?></p>
							<div class="menu-copyright">
								<?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<?php if( !get_field('hide_menu')) :  ?>
<div id="mobile-menu">
	<div class="menu-container">
		<div class="menu-wrapper">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'depth'          => 0,
					'items_wrap'     => '<ul>%3$s</ul>',
					'fallback_cb'    => 'reverie_menu_fallback', // workaround to show a message to set up a menu
					'walker'         => new HB_Walker( array(
						'in_top_bar' => true,
						'item_type'  => 'li',
						'menu_type'  => 'main-menu'
					)),
				));
			?>
		</div>
		<div class="button-wrapper">
			<?php if (have_rows('op_header_buttons', 'option')) : ?>
				<ul>
					<?php while ( have_rows('op_header_buttons', 'option') ) : the_row(); ?>
						<li class="action">
							<a href="<?php the_sub_field('button_url', 'option'); ?>"	class="button <?php echo (get_sub_field('button_style', 'option')=="simple") ? 'secondary' : get_sub_field('button_style', 'option'); ?>">
								<?php the_sub_field('button_text', 'option'); ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;?>
		</div>
	</div>
</div>
<?php endif;?>

</div><!-- #page -->

<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>

<?php wp_footer(); ?>

</body>
</html>
