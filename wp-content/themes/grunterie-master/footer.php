	<!-- </div> --><!-- Row End -->
<!-- </div> --><!-- Container End -->

		</div><!-- /main-inner-wrapper -->

	</main>

	<?php if (!get_field('landing_page_mode')) : ?>

		<footer class="page-row">

		<?php
			$bib_logo = get_field('op_footer_banner_logo', 'option');
			$open_new_tab = get_field('op_footer_banner_new_tab', 'option');
		?>
		
			<div class="footer-section footer-bib-banner">
				<div class="row">
					<div class="columns">
						<div class="bib-banner-container">
							<div class="row">
								<div class="columns medium-5 col-img">
									<div class="img-wrapper">
										<img data-src="<?php echo $bib_logo['url']; ?>" alt="<?php echo $bib_logo['alt']; ?>" class="lazyload"/>
									</div>
								</div>
								<div class="columns medium-7 col-text">
									<div class="text-wrapper">
										<p class="bib-title"><?php the_field('op_footer_banner_title', 'option'); ?></p>
										<p class="bib-desc"><?php the_field('op_footer_banner_desc', 'option'); ?></p>
										<a 	class="bib-link" rel="noopener"
												href="<?php the_field('op_footer_banner_linkurl', 'option'); ?>"
												<?php echo ($open_new_tab) ? 'target="_blank"' : ''; ?>
										>
											<?php the_field('op_footer_banner_linktext', 'option'); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
			// press logos
			$images = get_field('op_press_logos', 'option');
			if ($images) : ?>
				<div class="footer-section press-logos">
					<div class="row">
						<div class="columns">
							<p class="text-center"><?php the_field('op_press_logos_headline', 'option'); ?></p>
							<ul class="text-center">
								<?php foreach ($images as $image) : ?>
									<li>
										<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="lazyload"/>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>


			<?php
				// social banner
				$s_title = get_field('op_footer_social_title', 'option');
				$s_subtitle = get_field('op_footer_social_subtitle', 'option');
				$recurso_arrow = get_field('op_footer_recurso_arrow', 'option');
			?>
			<div class="footer-section f-social-banner">
				<div class="row row-flex row-small">
					<div class="columns medium-6 col-left">
						<h3 class="subheading"><?php echo $s_title; ?></h3>
						<p><?php echo $s_subtitle; ?></p>
						<?php if ($recurso_arrow) : ?>
						<img data-src="<?php echo $recurso_arrow['url']; ?>" alt="<?php echo $recurso_arrow['alt']; ?>" class="recurso-arrow lazyload hide-for-small"/>
						<?php endif; ?>
					</div>
					<div class="columns medium-6 col-right">
						<?php if (have_rows('op_footer_social_buttons', 'option')) : ?>
							<ul class="social-btns">
								<?php while ( have_rows('op_footer_social_buttons', 'option') ) : the_row(); 
									$social_icon = get_sub_field('icon', 'option');
								?>
									<li>
										<a href="<?php the_sub_field('link', 'option'); ?>"	class="social-btn" target="_blank" data-wpel-link="external" rel="noopener noreferrer">
											<img data-src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>" class="lazyload"/>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif;?>
					</div>
				</div>
			</div>


			<div class="footer-section footer-menu">
				<div class="row">

					<?php
					$theme_locations  = get_nav_menu_locations();
					$f_product_name   = wp_get_nav_menu_object($theme_locations['footer-product'])->name;
					$f_resources_name = wp_get_nav_menu_object($theme_locations['footer-resources'])->name;
					$f_solutions_name = wp_get_nav_menu_object($theme_locations['footer-solutions'])->name;
					$f_homebase_name  = wp_get_nav_menu_object($theme_locations['footer-homebase'])->name;
					?>

					<div class="columns medium-3">
						<div class="col-wrapper">
						<p class="footer-headline"><?php echo $f_product_name ?></p>
						<?php wp_nav_menu( array('theme_location' => 'footer-product') ); ?>
						</div>
					</div>

					<div class="columns medium-3">
						<div class="col-wrapper">
						<p class="footer-headline"><?php echo $f_solutions_name ?></p>
						<?php wp_nav_menu( array('theme_location' => 'footer-solutions') ); ?>
						</div>
					</div>

					<div class="columns medium-3">
						<div class="col-wrapper">
						<p class="footer-headline"><?php echo $f_resources_name ?></p>
						<?php wp_nav_menu( array('theme_location' => 'footer-resources') ); ?>
						</div>
					</div>

					<div class="columns medium-3">
						<div class="col-wrapper">
						<p class="footer-headline"><?php echo $f_homebase_name ?></p>
						<?php wp_nav_menu( array('theme_location' => 'footer-homebase') ); ?>
						</div>
					</div>

					<div class="columns show-for-small">
						<div class="col-wrapper">
						<?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-section footer-summary">
				<div class="row">
					<div class="columns">
					<?php
						if(get_field('add_featured_text') && get_field('featured_text')) 
							the_field('featured_text');
						else
							the_field('op_generic_footer_text', 'option');
					?>
					</div>
				</div>
			</div>

			<div class="footer-section copyright">
				<div class="row">
					<div class="columns">
						<p>© <?php echo date('Y'); ?> <?php the_field('op_footer_copyright', 'option'); ?></p>
						<?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
					</div>
				</div>
			</div>

		</footer>

	<?php endif; ?>


</div><!-- main-wrapper -->
<div class="mobile-menu-expanded-bg"></div>

<?php if(is_blog () && wp_is_mobile()) : //&& wp_is_mobile()?> 
<!----- Blog menu for Mobile ----->
<div class="mobile-blogmenu show-for-small">
	<div class="container">
		<div class="menu-header">
			<div class="menu-title">Menu</div>
			<span class="close-blogmenu">close</span>
		</div>
		<div class="menu-main">
			<span class="categories">Categories</span>
			<?php wp_nav_menu( array('theme_location' => 'blog-cat', 'menu-class' => 'blog-nav') ); ?>
		</div>
		<div class="menu-footer">
			<a class="button secondary" href="<?php echo get_home_url(); ?>">Explore Homebase</a>
			<a class="button primary" href="https://app.joinhomebase.com/onboarding/new">Create an account</a>
		</div>
	</div>
</div>
<?php endif; ?>

<!----- New menu for Mobile ----->


<div class="mobile-main-menu new-style">
	<div class="menu-container">
		<div class="menu-wrapper">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'depth'          => 0,
					'items_wrap'     => '<ul>%3$s</ul>',
					'fallback_cb'    => 'reverie_menu_fallback', // workaround to show a message to set up a menu
					'walker'         => new reverie_walker( array(
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
					<?php while ( have_rows('op_header_buttons', 'option') ) : the_row(); 
						if (get_sub_field('button_where', 'option') == 'mobile') :
					?>

							<li class="action">
								<a href="<?php the_sub_field('button_url', 'option'); ?>"	class="button <?php the_sub_field('button_style', 'option'); ?>">
									<?php the_sub_field('button_text', 'option'); ?>
								</a>
							</li>
						<?php endif;?>
					<?php endwhile; ?>
				</ul>
			<?php endif;?>
		</div>
	</div>
</div>

<?php if (!get_field('landing_page_mode') && !wp_is_mobile()) : ?>
<!-- COVID banner wp-94 starts -->
<?php
$topbannernotice = ''. get_field('top_banner_closeable_notice', 'option');
if( $topbannernotice != '' ){
	?>
	<div class="topbannernotice">
		<p>
			<?php echo $topbannernotice; ?>			
		</p>
		<span class="closenotice">
			X
		</span>
	</div>
	<?php
}
?>

<script type="text/javascript">
	window.addEventListener( 'load', function () {
		if (!jQuery('.top-bar-section ul .has-dropdown').hasClass('not-click')) {
			jQuery('.top-bar-section ul .has-dropdown').addClass('not-click');
		}
	});
</script>
<!-- COVID banner wp-94 ends -->
<?php endif;?>


<script>
	(function($) {
		//$(document).foundation();


		if (window.analytics !== undefined) {
			var form = document.getElementById('home-signup-form');
			analytics.trackForm(form, 'Homepage CTA', {
				copy: 'Start Now',
				format: 'form'
			});
		}


	})();
</script>

<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>

<?php wp_footer(); ?>

</body>
</html>
