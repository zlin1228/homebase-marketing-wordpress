<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Homebase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	$disable_pageview_gtm = get_field('disable_pageview_gtm');
	if(is_array($disable_pageview_gtm)) if($disable_pageview_gtm[0]!=''){
	?>
		<!-- Optimizely experiementation code -->
		<script src="https://cdn.optimizely.com/js/24708080542.js"></script>
	<?php } ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="msvalidate.01" content="5DD9DD6DD89F254C90FB17619DA24B8C" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="p:domain_verify" content="95db0578cf5b874fd47991f8b27e22dd"/>


	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="preconnect" href="https://script.hotjar.com" />
	<link rel="preconnect" href="https://www.googleadservices.com" />
	<link rel="preconnect" href="https://heapanalytics.com" />
	<link rel="preconnect" href="https://static.ads-twitter.com" />
	<link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
	<link rel="preconnect" href="https://www.facebook.com" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
	<link rel="preconnect" href="https://stats.g.doubleclick.net" />
	<link rel="preconnect" href="https://googleads.g.doubleclick.net" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	
	<?php if( is_page_template('templates/flexible-video-lp-mm.php') ) : ?>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Barlow+Condensed:wght@300;600&family=Barlow:wght@900&family=Homemade+Apple&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
	<?php elseif( is_page_template('templates/flexible-payroll-testimonial.php') ) : ?>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Homemade+Apple&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
	<?php else : ?>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
	<?php endif; ?>

	<!-- Google Tag Manager -->
	<script>
	window.addEventListener( 'load', function() {
		setTimeout(function () {
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-NZMJ8R');
		}, 4000);
	} );
	</script>
	<!-- End Google Tag Manager -->


<?php wp_head(); ?>

	<script type="text/javascript">
	window.addEventListener( 'load', function() {
		
			window.heap = window.heap || [], heap.load = function (e, t) {
				window.heap.appid = e, window.heap.config = t = t || {};
				var r = t.forceSSL || "https:" === document.location.protocol, a = document.createElement("script");
				a.async = 1, a.type = "text/javascript", a.src = (r ? "https:" : "http:") + "//cdn.heapanalytics.com/js/heap-" + e + ".js";
				var n = document.getElementsByTagName("script")[0];
				n.parentNode.insertBefore(a, n);
				for (var o = function (e) {
					return function () {
						heap.push([e].concat(Array.prototype.slice.call(arguments, 0)))
					}
				}, p = ["addEventProperties", "addUserProperties", "clearEventProperties", "identify", "removeEventProperty", "setEventProperties", "track", "unsetEventProperty"], c = 0; c < p.length; c++) heap[p[c]] = o(p[c])
			};
			heap.load("55934108");
		
	} );
	</script>
	
	<!-- Profitwell Snippet -->
	<script>
		window.addEventListener( 'load', function() {
			setTimeout(function () {
				(function (i, s, o, g, r, a, m) {
					i['ProfitWellObject'] = r;
					i[r] = i[r] || function () {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date();
					a = s.createElement(o), m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m);
				})(window, document, 'script', 'https://dna8twue3dlxq.cloudfront.net/js/profitwell.js', 'profitwell');
				profitwell('auth_token', '2c291f4debb5709129621c536180a39a');
			}, 4000);
		});
	</script>
	
	<!-- Modified Analytics tracking code with Optimize plugin -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-46996609-8', 'auto');
		// ga('require', 'GTM-PHWC5BZ'); disabled due to 1071 and 1078
		ga('send', 'pageview');
	</script>
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="Homebase Blog Feed" href="https://joinhomebase.com/feed/">

</head>

<body <?php body_class('antialiased'); ?> onload="callga4();" data-amplitude-product-area="<?php
	if (is_home()) {
		echo "archive-blog";
	}
	elseif (is_post_type_archive('engineering-blog')) {
		echo "archive-engineering-blog";
	}
	elseif (is_post_type_archive('product-update')) {
		echo "archive-product-update";
	}
	elseif (is_category()) {
		echo "category-" . strtolower(str_replace(" ", "-", single_cat_title( '', false )));
	}
	else { 
		if ( isset( $post ) ) {
			echo $post->post_type . '-' . $post->post_name;
		}
	}
?>" data-amplitude-gtm-pageview-disabled="<?php 
	if(is_array($disable_pageview_gtm)) echo $disable_pageview_gtm[0];
?>"><?php if($disable_pageview_gtm[0] == 'Yes') echo '<span style="display:none" id="amp-attr-hijack">{}</span>'; ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NZMJ8R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php wp_body_open(); ?>
<?php if (is_page_template( 'templates/flexible-home-mt39-v2.0.php' ) || is_page_template( 'templates/flexible-feature-mt51.php' ) ) : ?>
<div id="page" class="site <?php echo (get_field('initial_state') == "shown" ) ? 'eoy' : ''; ?>">
<?php else : ?>
<div id="page" class="site <?php echo (get_field('global_cro_sticky_banner_initial_state', 'option') == "shown") ? 'eoy' : ''; ?>">
<?php endif; ?>
	<?php if ( get_field('enable_topbanner') ) :?>
		<div class="top-banner hide-for-sm">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col-inner">
							<div class="topbanner-container">
								<?php get_field('custom_banner_content') ? the_field('custom_banner_content') : the_field('top_banner_content', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (is_page_template( 'templates/flexible-home-mt39-v2.0.php' ) || is_page_template( 'templates/flexible-feature-mt51.php' ) ) : 
		$initial_state 	= get_field('initial_state');
		$section_id 		= (get_field('section_id')) ? get_field('section_id') : get_field('global_cro_sticky_banner_section_id', 'option');
		$banner_content = (get_field('banner_content')) ? get_field('banner_content') : get_field('global_cro_sticky_banner_content', 'option'); ?>
			<div class="eoy-countdown <?php echo (get_field('fixed_header')) ? 'fixed' : ''; ?> <?php echo ($initial_state == "hidden") ? 'hidden' : ''; ?>" <?php echo ($section_id) ? 'id="'.$section_id.'"' : ''; ?>>
				<div class="eoy-countdown-container">
					<div class="text">
						<?php if ($banner_content) : ?>
							<?php echo $banner_content; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php  else : 
		$initial_state 	= get_field('global_cro_sticky_banner_initial_state', 'option');
		$section_id 		= get_field('global_cro_sticky_banner_section_id', 'option');
		$banner_content = get_field('global_cro_sticky_banner_content', 'option'); ?>
			<div class="eoy-countdown <?php echo (get_field('fixed_header')) ? 'fixed' : ''; ?> <?php echo ($initial_state == "hidden") ? 'hidden' : ''; ?>" <?php echo ($section_id) ? 'id="'.$section_id.'"' : ''; ?>>
				<div class="eoy-countdown-container">
					<div class="text">
						<?php if ($banner_content) : ?>
							<?php echo $banner_content; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php endif; ?>
	<?php if (is_page_template( 'templates/flexible-pay-any-day-lp.php' )) : 
		$logo = get_field('header_logo');?>
	<header <?php echo (get_field('remove_header')) ? 'style="display:none;"' : ''; ?> >
		<div>
			<a href="https://joinhomebase.com/"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
		</div>
	</header>
	<?php else : ?>
	<header id="masthead" class="site-header <?php echo (get_field('fixed_header')) ? 'fixed' : ''; ?>" <?php echo (get_field('remove_header')) ? 'style="display:none;"' : ''; ?> >
		<div class="header-inner">
			<div class="container">
				<div class="row v-align-middle">
					<div class="col col-auto col-left">
						<div class="col-inner">
							<div class="hb-branding">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name', 'display' ));?>" rel="home" class="logo">
									<?php if (is_page_template( 'templates/flexible-influencers-lp.php' )) : ?>
										<img src="<?php echo get_stylesheet_directory_uri() . '/images/influencers-header-logo.svg' ?>" alt="Homebase logo" width="105" height="16">
									<?php else : ?>
										<img src="<?php echo get_stylesheet_directory_uri() . '/images/homebase-logo-purple_small.svg' ?>" alt="Homebase logo" width="105" height="16">
									<?php endif; ?>
									<?php if (is_page_template('templates/flexible-fow-microsite.php')): ?>
										<div class="logo-text micro"><?php echo get_field('logo_text'); ?></div>	
									<?php endif ?>
								</a>
							</div><!-- .site-branding -->
						</div>
					</div>

					<div class="col col-right">
						<div class="col-inner">
							<div class="row v-align-middle">

								<div class="col col-menu hide-for-lg-down">
									<div class="col-inner">
										<?php if( !get_field('hide_menu') && !get_field('landing_page_mode')) : ?>
										<nav id="hb-navigation" class="main-navigation">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'container'      => false,
													'depth'          => 0,
													'items_wrap'     => '<ul>%3$s</ul>',
													'fallback_cb'    => 'hb_menu_fallback', // workaround to show a message to set up a menu
													'walker'         => new HB_Walker( array(
														'in_top_bar' => true,
														'item_type'  => 'li',
														'menu_type'  => 'main-menu'
													)),
												));
											?>
										</nav><!-- #site-navigation -->
										<?php endif ;?>
									</div>
								</div>

								<div class="col col-buttons">
									<div class="col-inner">
										<?php 
												$custom_signin_text      = get_field('signin_link_text');
												$custom_signin_link      = get_field('signin_link_url');
												$custom_signup_text      = get_field('header_signup_button_text');
												$custom_signup_link      = get_field('header_get_started_link');
										?>
										<?php if (have_rows('op_header_buttons', 'option')) : ?>
											<ul id="hb-signbuttons" class="sign-buttons">
												<?php while ( have_rows('op_header_buttons', 'option') ) : the_row(); ?>

													<?php
														if ( get_sub_field('show_m_header', 'option') ) 
															$classes = "";
														else
															$classes = "hide-for-lg-down";

														$button_text = get_sub_field('button_text', 'option');
														$button_link = get_sub_field('button_url', 'option');

														if (get_sub_field('add_referral_code') && get_field('page_referral_code')) {
															$button_link = "https://app.joinhomebase.com/referrals/onboarding?referral_code=" . get_field('page_referral_code');
														} 
														else {

															if ( get_sub_field('button_style', 'option') == 'simple') {
																if( $custom_signin_text )
																	$button_text = $custom_signin_text;
																if( $custom_signin_link )
																	$button_link = $custom_signin_link;
															}

															else if ( get_sub_field('button_style', 'option') == 'primary') {
																if( $custom_signup_text )
																	$button_text = $custom_signup_text;
																if( $custom_signup_link )
																	$button_link = $custom_signup_link;
															}
														}
														?>

														<li class="action <?php echo $classes;?>">
															<a href="<?php echo $button_link; ?>"	class="button <?php the_sub_field('button_style', 'option'); ?>">
																<?php echo $button_text; ?>
															</a>
														</li>

												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>

								<?php if(is_blog () && wp_is_mobile()) : //&& wp_is_mobile()?> 
								<div class="col col-blog-menu show-for-lg-down">
									<div class="col-inner">
										<div id="blog-menu" class="blog-menu-widget">
											<div class="blog-menu-title-warpper">
												<?php if ( get_post_type() == 'post' ) : ?>
												<a class="blog-title" href="#">Blog</a>
												<?php endif; ?>
											</div>
											<div class="search-widget">
												<div class="nav-searchbar">
													<form role="search" method="get" id="searchform" class="search-box" action="<?php echo home_url('/'); ?>">
															<div class="search-input">
																<input type="text" value="" name="s" aria-label="Seach" id="bhsearchinput" class="searchinput" placeholder="Enter search here">
															</div>
															<div class="search-button">
																<input type="submit" id="bhsearchbtn" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="searchbtn">
															</div>
													</form>
												</div>
												<div class="search-control-button">
													<a href="#" class="search-toggle" data-selector="#blog-menu">Search</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif;?>

								<?php if( !get_field('hide_menu') && !get_field('landing_page_mode')) : ?>
								<div class="col col-auto col-menu-icon show-for-lg-down">
									<div class="col-inner">
										<div id="toggle-menu">
											<span id="icon-menu">
												<span>-</span>
												<span>-</span>
												<span>-</span>
											</span>
										</div>
									</div>
								</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php endif; ?>
	<?php if ( get_field('enable_topbanner') ) :?>
		<div class="top-banner show-for-sm">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col-inner">
							<div class="topbanner-container">
								<?php get_field('custom_banner_content') ? the_field('custom_banner_content') : the_field('top_banner_content', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php endif; ?>

	<?php if (is_page_template( 'templates/flexible-home-mt39-v2.0.php' ) || is_page_template( 'templates/flexible-feature-mt51.php' ) ) : 
		$initial_state 	= get_field('initial_state');
		$section_id 		= (get_field('section_id')) ? get_field('section_id') : get_field('global_cro_sticky_banner_section_id', 'option');
		$banner_content = (get_field('banner_content')) ? get_field('banner_content') : get_field('global_cro_sticky_banner_content', 'option'); ?>
			<div class="eoy-countdown mobile <?php echo (get_field('fixed_header')) ? 'fixed' : ''; ?> <?php echo ($initial_state == "hidden") ? 'hidden' : ''; ?>" <?php echo ($section_id) ? 'id="'.$section_id.'"' : ''; ?>>
				<div class="eoy-countdown-container">
					<div class="text">
						<?php if ($banner_content) : ?>
							<?php echo $banner_content; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php  else : 
		$initial_state 	= get_field('global_cro_sticky_banner_initial_state', 'option');
		$section_id 		= get_field('global_cro_sticky_banner_section_id', 'option');
		$banner_content = get_field('global_cro_sticky_banner_content', 'option'); ?>
			<div class="eoy-countdown mobile <?php echo (get_field('fixed_header')) ? 'fixed' : ''; ?> <?php echo ($initial_state == "hidden") ? 'hidden' : ''; ?>" <?php echo ($section_id) ? 'id="'.$section_id.'"' : ''; ?>>
				<div class="eoy-countdown-container">
					<div class="text">
						<?php if ($banner_content) : ?>
							<?php echo $banner_content; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php endif; ?>