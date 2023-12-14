<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Homebase
 */

?>

<?php if (is_page_template( 'templates/flexible-pay-any-day-lp.php' )) : 
		$footer_logo = get_field('footer_logo');
		$footer_text = get_field('footer_text');?>
	<footer>
		<div class="container">
			<?php if ($footer_logo) : ?>
			<div class="footer-logo">
				<a href="https://joinhomebase.com/"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"></a>
			</div>
			<?php endif; ?>
			<?php if ($footer_text) : ?>
			<div class="footer-text">
				<?php echo $footer_text; ?>
			</div>
			<?php endif; ?>
		</div>
	</footer>
<?php else : ?>

<?php if (!get_field('remove_footer')) : ?>
	<footer id="colophon" class="site-footer">
		<?php
			$bib_logo = get_field('op_footer_banner_logo', 'option');
		?>	

		<?php if (!get_field('hide_section_press_logos', 'option') && !get_field('remove_footer_logos')) : ?>
		<div class="footer-logos">
			<div class="container-narrow">
				<?php					
					$press_logos_headline 	= get_field('op_press_logos_headline', 'option');
					$press_logos 			= get_field('op_press_logos', 'option');
					$press_badges 			= get_field('op_press_badges', 'option'); ?>
					
						<div class="row">
							<div class="col">
								<div class="col-inner">
									<?php if ($press_logos_headline) : ?>
									<p class="title text-center"><?php echo $press_logos_headline; ?></p>
									<?php endif; ?>
									<?php if ($press_badges) : ?>
									<ul class="press-badges text-center">
										<?php foreach ($press_badges as $badge) : ?>
											<li><?php echo wp_get_attachment_image( $badge, 'full'); ?></li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>
									<?php if ($press_logos) : ?>
									<ul class="press-logos text-center">
										<?php foreach ($press_logos as $logo) : ?>
											<li><?php echo wp_get_attachment_image( $logo, 'full'); ?></li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>	
								</div>
							</div>
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
		<div class="footer-social-banner">
			<div class="container-narrow">
				<div class="row row-flex v-align-middle">
					<div class="col col-12 col-sm-6 col-left">
						<div class="col-inner">
							<h3 class="subheading"><?php echo $s_title; ?></h3>
							<p><?php echo $s_subtitle; ?></p>
							<?php if ($recurso_arrow) : ?>
							<img src="<?php echo $recurso_arrow['url']; ?>" alt="<?php echo $recurso_arrow['alt']; ?>" class="recurso-arrow lazyload hide-for-sm"/>
							<?php endif; ?>
						</div>
					</div>
					<div class="col col-12 col-sm-6 col-right">
						<div class="col-inner">
							<?php if (have_rows('op_footer_social_buttons', 'option')) : ?>
								<ul class="social-btns">
									<?php while ( have_rows('op_footer_social_buttons', 'option') ) : the_row(); 
										$social_icon = get_sub_field('icon', 'option');
									?>
										<li>
											<a href="<?php the_sub_field('link', 'option'); ?>"	class="social-btn" target="_blank" data-wpel-link="external" rel="noopener noreferrer">
											<?php if($social_icon) : ?>
												<?php echo wp_get_attachment_image( $social_icon, 'full'); ?>
											<?php endif; ?>
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php if(!get_field('remove_footer_menu')): ?>
			<div class="footer-menu">
				<div class="container-narrow">
					<?php
						$theme_locations  = get_nav_menu_locations();
						$f_product_name   = wp_get_nav_menu_object($theme_locations['footer-product'])->name;
						$f_resources_name = wp_get_nav_menu_object($theme_locations['footer-resources'])->name;
						$f_solutions_name = wp_get_nav_menu_object($theme_locations['footer-solutions'])->name;
						$f_homebase_name  = wp_get_nav_menu_object($theme_locations['footer-homebase'])->name;
					?>

					<div class="row">
						<div class="col col-12 col-sm-3 f-nav-product">
							<div class="col-inner">
								<div class="col-wrapper">
								<p class="footer-headline"><?php echo $f_product_name ?></p>
								<?php wp_nav_menu( array('theme_location' => 'footer-product') ); ?>
								</div>
							</div>
						</div>

						<div class="col col-12 col-sm-3 f-nav-solutions">
							<div class="col-inner">
								<div class="col-wrapper">
								<p class="footer-headline"><?php echo $f_solutions_name ?></p>
								<?php wp_nav_menu( array('theme_location' => 'footer-solutions') ); ?>
								</div>
							</div>
						</div>

						<div class="col col-12 col-sm-3 f-nav-resources">
							<div class="col-inner">
								<div class="col-wrapper">
								<p class="footer-headline"><?php echo $f_resources_name ?></p>
								<?php wp_nav_menu( array('theme_location' => 'footer-resources') ); ?>
								</div>
							</div>
						</div>

						<div class="col col-12 col-sm-3 f-nav-homebase">
							<div class="col-inner">
								<div class="col-wrapper">
								<p class="footer-headline"><?php echo $f_homebase_name ?></p>
								<?php wp_nav_menu( array('theme_location' => 'footer-homebase') ); ?>
								</div>
							</div>
						</div>

						<div class="col col-12 show-for-sm f-nav-copyright">
							<div class="col-inner">
								<div class="col-wrapper">
								<?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="footer-bottom">
			<div class="container-narrow">
				<?php if(!(is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() || is_search())) : ?>
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
				<?php endif; ?>
				<div class="copyright" <?php echo (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() || is_search()) ? 'style="padding-top:0;"' : ''; ?>>
					<div class="row">
						<div class="col">
							<div class="col-inner">
								<p>© <?php echo date('Y'); ?> <?php the_field('op_footer_copyright', 'option'); ?></p>
								<div id="menu-copyright" class="hide-for-sm">
									<?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>

<?php endif; ?>

<?php if ( !get_field('hide_menu')) : ?>
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

<?php if(is_blog () && wp_is_mobile()) : //&& wp_is_mobile()?> 
	<!----- Blog menu for Mobile ----->
	<div class="mobile-blogmenu show-for-lg-down">
		<div class="blog-menu-wrap">
			<div class="menu-header">
				<div class="menu-title">Menu</div>
				<span class="close-blogmenu">close</span>
			</div>
			<div class="menu-main">
				<span class="categories">Categories</span>
				<?php wp_nav_menu( array('theme_location' => 'blog-nav', 'menu-class' => 'blog-nav') ); ?>
			</div>
			<div class="menu-footer">
				<a class="button secondary" href="<?php echo get_home_url(); ?>">Explore Homebase</a>
				<a class="button primary" href="https://app.joinhomebase.com/onboarding/new">Create an account</a>
			</div>
		</div>
	</div>
<?php endif; ?>

</div><!-- #page -->

<?php if (get_field('cro_popup_enable')) : ?>
	<?php 
	$cro_popup_display_type 		= get_field('cro_popup_display_type');
	$cro_popup_delay 		= get_field('cro_popup_delay');
	$cro_popup_image 		= get_field('cro_popup_image');
	$cro_popup_image_mobile	= get_field('cro_popup_image_mobile');
	$cro_popup_headline 	= get_field('cro_popup_headline');
	$cro_popup_subheadline 	= get_field('cro_popup_subheadline');
	$cro_popup_button_text 	= get_field('cro_popup_button_text');
	$cro_popup_button_link 	= get_field('cro_popup_button_link');
	$cro_popup_caption 		= get_field('cro_popup_caption');
	?>
	<div class="cro-popup">
		<div class="container">
			<div id="cro-display-type"><?php echo $cro_popup_display_type; ?></div>
			<div id="cro-delay"><?php echo $cro_popup_delay; ?></div>
			<div class="close">
				<img id="cro-close" src="/wp-content/themes/homebase/images/cro-close.svg">
			</div>
			<?php if ($cro_popup_image) : ?>
			<div class="image">
				<img id="cro-popup-image" src="<?php echo $cro_popup_image['url']; ?>" alt="<?php echo $cro_popup_image['alt']; ?>">
				<img id="cro-popup-image-mobile" src="<?php echo $cro_popup_image_mobile['url']; ?>" alt="<?php echo $cro_popup_image_mobile['alt']; ?>">
			</div>
			<?php endif; ?>
			<div class="content">
				<?php if ($cro_popup_headline) : ?>
				<div class="headline">
					<h3 id="cro-popup-headline"><?php echo $cro_popup_headline; ?></h3>
				</div>
				<?php endif; ?>
				<?php if ($cro_popup_subheadline) : ?>
				<div class="subheadline" id="cro-popup-subheadline">
					<?php echo $cro_popup_subheadline; ?>
				</div>
				<?php endif; ?>
				<?php if ($cro_popup_button_link) : ?>
				<a class="button primary" id="cro-popup-button" href="<?php echo $cro_popup_button_link; ?>" onClick="setTimeout(function(){window.location='<?php echo $cro_popup_button_link; ?>'},500); return false;"><?php echo $cro_popup_button_text; ?></a>
				<?php endif; ?>
				<?php if ($cro_popup_caption) : ?>
				<div class="caption" id="cro-popup-caption">
					<?php echo $cro_popup_caption; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if (get_field('email_capture_popup_enable')) : ?>
	<?php 
	$email_capture_popup_delay 					= get_field('email_capture_popup_delay');
	$email_capture_popup_image 					= get_field('email_capture_popup_image');
	$email_capture_popup_image_mobile		= get_field('email_capture_popup_image_mobile');
	$email_capture_popup_headline 			= get_field('email_capture_popup_headline');
	$email_capture_popup_subheadline 		= get_field('email_capture_popup_subheadline');
	$email_capture_popup_form_code 			= get_field('email_capture_popup_form_code');
	$email_capture_popup_caption_left 	= get_field('email_capture_popup_caption_left');
	$email_capture_popup_caption_right 	= get_field('email_capture_popup_caption_right');
	?>
	<div class="email-capture-popup">
		<div class="container">
			<div id="email-capture-delay">
				<?php echo $email_capture_popup_delay; ?>
			</div>
			<div class="close">
				<img id="email-capture-close" src="/wp-content/themes/homebase/images/cro-close.svg">
			</div>
			<?php if ($email_capture_popup_image) : ?>
			<div class="image">
				<img id="email-capture-popup-image" src="<?php echo $email_capture_popup_image['url']; ?>" alt="<?php echo $email_capture_popup_image['alt']; ?>">
				<img id="email-capture-popup-image-mobile" src="<?php echo $email_capture_popup_image_mobile['url']; ?>" alt="<?php echo $email_capture_popup_image_mobile['alt']; ?>">
			</div>
			<?php endif; ?>
			<div class="content">
				<?php if ($email_capture_popup_headline) : ?>
				<div class="headline">
					<h3 id="email-capture-popup-headline"><?php echo $email_capture_popup_headline; ?></h3>
				</div>
				<?php endif; ?>
				<?php if ($email_capture_popup_subheadline) : ?>
				<div class="subheadline" id="email-capture-popup-subheadline">
					<?php echo $email_capture_popup_subheadline; ?>
				</div>
				<?php endif; ?>
				<?php if ($email_capture_popup_form_code) : ?>
				<div class="form" id="email-capture-popup-form">
					<?php echo $email_capture_popup_form_code; ?>
				</div>
				<?php endif; ?>
				<?php if ($email_capture_popup_caption_left) : ?>
				<div class="caption-left" id="email-capture-popup-caption-left">
					<?php echo $email_capture_popup_caption_left; ?>
				</div>
				<?php endif; ?>
				<?php if ($email_capture_popup_caption_right) : ?>
				<div class="caption-right" id="email-capture-popup-caption-right">
					<?php echo $email_capture_popup_caption_right; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if (get_field('script_after_footer_add')) : ?>
	<?php echo get_field('script_after_footer_code') ?>
<?php endif; ?>
		
<?php if (is_page_template( 'templates/flexible-feature-mt51.php' )) : 
	$demo_form_id   = get_field('demo_form_id'); ?>
	<div class="demo-popup">
    <div class="container">
      <div class="close">
        <img id="cro-close" src="/wp-content/themes/homebase/images/cro-close.svg">
      </div>
      <div class="form">
        <?php echo do_shortcode('[ninja_form id='.$demo_form_id.']'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>

<?php wp_footer(); ?>

</body>
</html>