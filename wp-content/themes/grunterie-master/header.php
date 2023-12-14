<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="preconnect" href="https://vars.hotjar.com" />
	<link rel="preconnect" href="https://script.hotjar.com" />
	<link rel="preconnect" href="https://www.googleadservices.com" />
	<link rel="preconnect" href="https://heapanalytics.com" />
	<link rel="preconnect" href="https://static.ads-twitter.com" />
	<link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
	<link rel="preconnect" href="https://www.facebook.com" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
	<link rel="preconnect" href="https://use.typekit.net" />
	<link rel="preconnect" href="https://stats.g.doubleclick.net" />
	<link rel="preconnect" href="https://googleads.g.doubleclick.net" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

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

	<!-- <script type="text/javascript">
		window.addEventListener( 'load', function() {
				$.getScript('https://use.typekit.net/usq1zcp.js', function() {
					setTimeout(function() {
						Typekit.load();
					}, 50);
      	});
		} );
	
		// (function() {
		// 	var config = {
		// 		kitId: 'usq1zcp',
		// 		scriptTimeout: 3000
		// 	};
		// 	var h = document.getElementsByTagName('html')[0];
		// 	h.className += ' wf-loading';
		// 	var t = setTimeout(function() {
		// 		h.className = h.className.replace(/(\s|^)wf-loading(\s|$)/g, ' ');
		// 		h.className += ' wf-inactive';
		// 	}, config.scriptTimeout);
		// 	var d = false;
		// 	var tk = document.createElement('script');
		// 	tk.src = '//use.typekit.net/' + config.kitId + '.js';
		// 	tk.type = 'text/javascript';
		// 	tk.async = 'false';
		// 	tk.onload = tk.onreadystatechange = function() {
		// 		var rs = this.readyState;
		// 		if (d || rs && rs != 'complete' && rs != 'loaded') return;
		// 		d = true;
		// 		clearTimeout(t);
		// 		try { Typekit.load(config); } catch (e) {}
		// 	};
		// 	var s = document.getElementsByTagName('script')[0];
		// 	s.parentNode.insertBefore(tk, s);
  	// })();
		
	</script> -->

<?php wp_head(); ?>



<script type="text/javascript">
	window.addEventListener( 'load', function() {
		setTimeout(function () {
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
		}, 4000 );
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

<!-- Page-hiding snippet (recommended)  -->
 <style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',800,
{'GTM-PHWC5BZ':true});</script>


<!-- Modified Analytics tracking code with Optimize plugin -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46996609-8', 'auto');
    ga('require', 'GTM-PHWC5BZ');
    ga('send', 'pageview');
    </script>


<!-- Modified Analytics tracking code with Optimize plugin -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46996609-5', 'auto');  // Update tracker settings

                                         // Removed pageview call

</script>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="Homebase Blog Feed" href="https://joinhomebase.com/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

	<?php if( !is_page_template('templates/flexible-home-mt39.php') && !is_page_template('templates/flexible-home-mt39-clone.php') ) : ?>
		<link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/jennasue-font.woff2" type="font/woff2" crossorigin="anonymous">
		<link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/jennasue-font.woff" type="font/woff2" crossorigin="anonymous">
	<?php endif; ?>
	
<style>
.footer-cta .section-title {
 color: rgb(46, 59, 78);
 display: block;
 font-size: 2.125rem;
 font-weight: 400;
 line-height: normal;
 margin-bottom: 2.1rem;
 margin-top: 0;
}
</style>
<meta name="msvalidate.01" content="5DD9DD6DD89F254C90FB17619DA24B8C" />



<!-- Hiding Banner on landing page -->
	<?php if (get_field('landing_page_mode')) : ?>
		<style>
			.announcement-banner{
				display: none !important;
			}
			.change-top{
				top: 0px !important;
			}
			.main-wrapper .header-inner .top-bar{
				border-bottom: none;
			}
			.change-height {
				height: 68px !important;
			}
		</style>
	<?php endif; ?>
<!-- Hiding Banner on landing page end -->

<!-- VWO code -->

<?php
$vwo_disabled = get_field( 'disable_vwo_code', 'option' );
if ( 'disabled' !== $vwo_disabled[0] ) {
?>
	<script type='text/javascript' async='false'>
	window._vwo_code = window._vwo_code || (function(){
	var account_id=435529,
	settings_tolerance=1700,
	library_tolerance=2000,
	use_existing_jquery=true,
	is_spa=0,
	hide_element='body',
	/* DO NOT EDIT BELOW THIS LINE */
	f=false,d=document,code={use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){
	settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+(+is_spa)+'&r='+Math.random());return settings_timer; }};window._vwo_settings_timer = code.init(); return code; }());
	</script>
<?php } ?>

<!-- <script type="text/javascript">

// Font-display fix for typekit
(function () {
	if (typeof MutationObserver === 'undefined') {
		return;
	}
	var fixFontDisplay = function () {
		// inject font-display option into typekit fonts
		var styles = document.getElementsByTagName('style');
		for (var i = 0; i < styles.length; i++) {
			if (
				styles[i].innerText
				&& styles[i].innerText.indexOf('proxima-nova') !== -1
				&& styles[i].innerText.indexOf('@font-face{font-display:swap;') === -1
			) {
				styles[i].innerText = styles[i].innerText
					.split('@font-face{').join('@font-face{font-display:swap;');
			}
		}
	};
	var observer = new MutationObserver(function (mutationsList, observer) {
		for (var i = 0; i < mutationsList.length; i++) {
			fixFontDisplay();
		}
	});
	observer.observe(
		document.getElementsByTagName('head')[0],
		{attributes: false, childList: true, subtree: false}
	);
	window.fixFontObserver = observer;
})();
</script> -->

<script>
	var pageloaded = false;
	function setloadedflag () {
		pageloaded = true;
	}
	// Stealth loading of ZD chat 
	function addzendesklib(bdy){
	// window.addEventListener( 'load', function() {

		if(!pageloaded)
			return;

		if(bdy == window)
			bdy = bdy.document.getElementsByTagName("body")[0];

		if(bdy.classList.contains('zendeskadded'))
			return;

		jQuery(bdy).removeAttr('onmouseenter');
		jQuery(bdy).removeAttr('onscroll');

		jQuery(bdy).addClass('zendeskadded');
	// } );

	setTimeout(function () {
			!function (f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function () {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '289044868114522');
			fbq('track', 'PageView');
		}, 3000 );
		
	<?php if (is_page_template( 'templates/flexible-home-mt39-clone.php' )) :?>
		setTimeout( function() {
			var url = window.location.protocol + "//" + location.host.split(":")[0];
			var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
			s.async = true;
			s.src = url + '/wp-content/themes/grunterie-master/js/speed.min.js';
			s.setAttribute( 'id', 'speedscore' );
			el.parentNode.insertBefore(s, el);
		}, 1000 );
	<?php endif; ?>
	<?php if (is_page_template( 'templates/flexible-new-home-mt39-minimal.php' )) :?>
		setTimeout( function() {
			var url = window.location.protocol + "//" + location.host.split(":")[0];
			var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
			s.async = true;
			s.src = url + '/wp-content/themes/grunterie-master/js/speed/speed-home-v2.min.js';
			s.setAttribute( 'id', 'speedhomev2' );
			el.parentNode.insertBefore(s, el);
		}, 1000 );
	<?php endif; ?>
	<?php if (is_blog()) :?>
		setTimeout( function() {
			var url = window.location.protocol + "//" + location.host.split(":")[0];
			var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
			s.async = true;
			s.src = url + '/wp-content/themes/grunterie-master/js/speed/speed-blog.min.js';
			s.setAttribute( 'id', 'speedblog' );
			el.parentNode.insertBefore(s, el);
		}, 1000 );
	<?php endif; ?>
		jQuery('div[data-img-src*="/"]').each(function() {
			dvimg = this;
			img_src = jQuery(dvimg).data('imgSrc');
			img_alt = jQuery(dvimg).data('imgAlt');
			html = '<img class="lazyloaded" src="' + img_src + '" alt="' + img_alt + '">';
			jQuery(dvimg).html(html);
		})
	}
</script>

<?php // <script id="ze-snippet" defer="defer" src="https://static.zdassets.com/ekr/snippet.js?key=09712871-85c5-4988-8730-66caa61372a4"></script> ?>


</head>

<body <?php body_class('antialiased'); ?> onload="setloadedflag();" onmouseenter="addzendesklib(this);" onscroll="addzendesklib(this);">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NZMJ8R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->


<?php
$announ_text   = get_field('announcement_banner_text', 'option');
$announ_length = strlen($announ_text);
$announ_inlinelink_text = get_field('announcement_banner_inline_link_text', 'option');
$announ_inlinelink_link = get_field('announcement_banner_inline_link_link', 'option');
$announ_info_chip = get_field('info_chip', 'option');
?>

<div class="main-wrapper <?php echo (isset($_COOKIE["announcement_length"]) && $announ_text && $_COOKIE["announcement_length"] != $announ_length) ? 'has-announ-banner' : ''; ?>">

	<?php
	/* ab test announcement */
	if (isset($_COOKIE["announcement_length"]) && $announ_text && $_COOKIE["announcement_length"] != $announ_length) : ?>
		<div class="announcement-banner <?php $green_banner   = get_field('green_banner', 'option'); if ($green_banner) : ?><?php echo "green-banner" ?> <?php endif; ?>" data-length="<?php echo $announ_length; ?>">
			<div class="row">
				<div class="columns">
					<div class="announ-text"><?php echo $announ_text; ?><a class="annouc-inlne-link" href="<?php echo $announ_inlinelink_link; ?>"><?php echo $announ_inlinelink_text; ?></a><span class="info-chip"><?php echo $announ_info_chip; ?></span></div>
					<?php echo ($announ_bttn_text = get_field('announcement_banner_button_text', 'option')) ? '<a class="button" href="' . get_field('announcement_button_url', 'option') . '">' . $announ_bttn_text . '</a>' : ''; ?>
				</div>
			</div>

			<button class="announ-hide" type="button"></button>
		</div>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.cookie.js"></script>
		<script>
			window.addEventListener( 'load', function() {
				jQuery('.announ-hide').click(function() {
					jQuery('.announcement-banner').hide();
					jQuery('header.fixed').removeClass('change-top');
					jQuery('.header-placement').removeClass('change-height');
					jQuery('.main-wrapper').removeClass('has-announ-banner');
					if (jQuery.cookie('announcement_length') != jQuery('.announcement-banner').data('length')) {
						jQuery.cookie('announcement_length', jQuery('.announcement-banner').data('length'), { expires: 30, path: '/' });
					}
				});
			});
		</script>
	<?php endif; ?>


	<?php if (!get_field('remove_top_nav')) : ?>

		<header class="<?php echo (!get_field('header_for_content_2')) ? 'fixed' : '';?> standard reversed <?php $green_banner   = get_field('green_banner', 'option'); if ($green_banner && $_COOKIE["announcement_length"] != $announ_length) : ?><?php echo "change-top" ?> <?php endif; ?>">
			<div class="header-inner 
				<?php echo (get_field('landing_page_mode')) ? 'landing-page-header' : ''; ?> 
				<?php echo (get_field('wide_header')) ? 'wide-header' : ''; ?> 
				<?php 
					if(get_field('remove_header_menu')){
						echo (' no-menu');
						if(get_field('show_signin_widget'))
							echo (' signin-widget');
						if(get_field('show_fixed_signup_form'))
							echo (' fixed-signup-form');
					}
				?>
			">
				<div class="row">
					<div class="columns">

						<!-- Starting the Top-Bar -->
						<nav class="top-bar" data-topbar>

							<ul class="title-area">
								<?php if (get_field('header_for_content_2')) : ?>
									<li class="logo-h">
										<!-- logo -->
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
											rel="home"
											class="logo"
										>
											<img src="<?php echo get_stylesheet_directory_uri() . '/img/Homebase-Logomark.png' ?>" alt="Homebase logo">
										</a>
									</li>
								<?php endif; ?>
								<li class="name">
									<!-- logo -->
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
									   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
									   rel="home"
									   class="logo"
									>
										<img src="<?php echo get_stylesheet_directory_uri() . '/img/homebase-logo-purple_proxnova.svg' ?>" alt="Homebase logo" width="105" height="16">
									</a>
								</li>

								<?php if(is_blog () && wp_is_mobile()) : //&& wp_is_mobile()?> 
								<li class="blog-menu-m show-for-small">
									<div class="blog-menu-widget">
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
														<?php if ( get_post_type() == 'engineering-blog' ) : ?>
														<input type="hidden" name="post_type" value="engineering-blog" />
														<?php endif; ?>
													</div>
											</form>
										</div>
										<div class="search-control-button">
											<a href="#" class="search-toggle" data-selector=".top-bar">Search</a>
										</div>
									</div>
								</li>
								<?php endif; ?>

								<?php if (!get_field('landing_page_mode')) : ?>
									
										<?php if (!get_field('hide_mobile_get_started_button') && !is_null(get_field('hide_mobile_get_started_button')) ) : 
											$getStarted_link = get_field( 'header_get_started_link' );
											$getStarted_text = get_field( 'header_get_started_text' );
											?>
												<li class="action">
													<a 
														href="<?php echo ($getStarted_link) ? $getStarted_link : 'https://app.joinhomebase.com/onboarding/sign-up';?>" 
														class="button highlighted mobile-header-getstarted" 
														data-wpel-link="external"
													>
													<?php echo ($getStarted_text) ? $getStarted_text : 'Get started'; ?>
													</a>
												</li>
										<?php endif; ?>

										<li class="toggle-topbar menu-icon">
											<a href="#">
												<span>-</span>
												<span>-</span>
												<span>-</span>
											</a>
										</li>
								<?php endif;?>
							</ul>

							<section class="top-bar-section">
								
								<?php if (!get_field('landing_page_mode')) : ?>
									<?php if (get_field('remove_header_menu')) : ?>
										<div class="empty-nav-container"></div>
									<?php else : ?>
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
									<?php endif;?>

									<?php if(get_field('remove_header_menu') && get_field('show_signin_widget')) : ?>
										<?php 
											$simple_pre_question = get_field('simple_pre_question');
											$signin_link_text = get_field('signin_link_text');
										?>
											<ul>
												<li class="pom-text">
													<p><?php echo ($simple_pre_question); ?></p>
												</li>
												<li class="action">
													<a href="https://app.joinhomebase.com/accounts/sign-in" class="button simple" target="_blank" data-wpel-link="external" rel="nofollow"><strong><?php echo ($signin_link_text); ?></strong></a>
												</li>
											</ul>
									<?php elseif (have_rows('op_header_buttons', 'option')) : ?>
										<ul>
											<?php while ( have_rows('op_header_buttons', 'option') ) : the_row(); ?>

												<?php
												if (get_sub_field('button_where', 'option') == 'desktop') :
													if (get_sub_field('add_referral_code') && get_field('page_referral_code')) {
														$url = "https://app.joinhomebase.com/referrals/onboarding?referral_code=" . get_field('page_referral_code');
													} else {
														$url = get_sub_field('button_url', 'option');

														if( get_field( 'header_get_started_link' ) && get_sub_field('button_text', 'option') == 'Get Started' ) $url = get_field( 'header_get_started_link' );
													}
													?>

													<li class="action">
														<a href="<?php echo $url; ?>"
															class="button <?php the_sub_field('button_style', 'option'); ?>"

														>
															<?php the_sub_field('button_text', 'option'); ?>
														</a>
													</li>
												<?php endif;?>

											<?php endwhile; ?>
										</ul>
										<?php endif;?>

								<?php else : ?>

									<ul>
										<?php if (get_field('header_for_content_2')) : ?>
											<li class="pom-text">
												<p>Already have an account?</p>
											</li>
											<li class="action">
												<a href="https://app.joinhomebase.com/accounts/sign-in" class="button simple" target="_blank" data-wpel-link="external" rel="nofollow"><strong>Sign In</strong></a>
											</li>
										<?php else: ?>
											<li class="action">
												<a href="https://app.joinhomebase.com/accounts/sign-in" class="button simple" target="_blank" data-wpel-link="external">Already using Homebase?</a>
											</li>
											<?php if (get_field('header_get_started_link')) : ?>
												<li class="action">
													<a href="<?php echo get_field( 'header_get_started_link' );?>" class="button highlighted" target="_blank" data-wpel-link="external">Get started</a>
												</li>
											<?php endif; ?>
										<?php endif; ?>
									</ul>

								<?php endif; ?>

							</section>

						</nav>
						<?php if(get_field('remove_header_menu') && get_field('show_fixed_signup_form')) :
								$header_signup_form_title = get_field('header_signup_form_title');
								$header_signup_button_text = get_field('header_signup_button_text');
							?>
								<div class="columns medium-offset-3 medium-6 header-signup-form">
									<h2 class="header-signup-form-title"><?php echo ($header_signup_form_title); ?></h2>
									<form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']"
													id="home-signup-form-2"
													method="GET"
													class="home-form"
									>
										<div class="columns small-6">
											<input class="homeform"
															aria-label="email address"
															type="email"
															name="email"
															placeholder="Email Address"
											/>
										</div>
										<div class="columns small-6">
											<input type="submit"
															id="create-account"
															aria-label="submit"
															name="Submit"
															class="primary-cta buttonsbn"
															value="<?php echo ($header_signup_button_text) ? $header_signup_button_text : 'Create Account'; ?>"
											/>
										</div>
									</form>
								</div>
							<?php endif;?>
						<!-- End of Top-Bar -->

					</div>
				</div>
			</div>
		</header>

		<div class="page-row header-placement <?php echo (get_field('landing_page_mode')) ? 'retain_old_height landing-header-placement' : ''; ?> <?php $green_banner   = get_field('green_banner', 'option'); if ($green_banner && $_COOKIE["announcement_length"] != $announ_length) : ?><?php echo "change-height" ?> <?php endif; ?>"></div>
		
	<?php endif; ?>

	<script>
		window.addEventListener( 'load', function() {
			jQuery(window).on('scroll',function(){
				//alert('Hi');
				if (jQuery(window).scrollTop() > 350) {
					jQuery(".header-signup-form").addClass("show");
				} else{
					jQuery(".header-signup-form").removeClass("show");
				}
			});
		});
	</script>

	<main class="page-row page-row-expanded">
	<?php
		$modal = get_field('subscription_modal');
		if( $modal && !$modal['hide_widget'] && $modal['iterable_subscription_list_id'] ): ?>

		<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal-title" aria-describedby="modal-subtitle" data-remodal-options="hashTracking: false, closeOnEscape: false, closeOnOutsideClick: false">
				<div class="row">
						<h2 id="modal-title"><?php echo $modal['modal_title']; ?></h2>
						<p id="modal-subtitle"><?php echo $modal['modal_subtitle']; ?></p>
						
						<div class="send-email-form">
								<form name="modal_form" action="" method="POST" class="email">
										<div class="row">
												<div class="columns medium-8">
														<input type="email" class="text-wrap" id="modal-email" name="email" size="22" required="required" aria-required="true" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" value="Enter your email">
												</div>
												<div class="columns medium-4">
														<input type="submit" class="submit-wrap" value="<?php echo ( $modal['submit_button_text']) ? $modal['submit_button_text'] : 'Submit' ?>">
												</div>
										</div>
								</form>
						</div>
				</div>
		</div>

		<script src="<?php echo get_template_directory_uri(); ?>/js/remodal.min.js"></script>
		<script>
				window.addEventListener( 'load', function () {
						<?php if( !$modal['hide_widget'] && $modal['iterable_subscription_list_id'] ): ?>
								var modal = jQuery('[data-remodal-id=modal]').remodal();

								<?php if($modal['popup_delay']): ?>
										jQuery("body").one('mouseenter', function() {
												modal.open();
										});
								<?php else : ?>
										modal.open();
								<?php endif; ?>
								

								jQuery('form[name="modal_form"]').submit(function(e) {
										e.preventDefault();
										
										jQuery.post("//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=<?php echo $modal['iterable_subscription_list_id']; ?>", jQuery('form[name="modal_form"]').serialize(),  function(response) {
												modal.close();
										});
								});
						<?php endif; ?>
				});
		</script>
		<?php endif; ?>

		<div class="main-inner-wrapper">

		
		<div class="page-row page-placement <?php echo (get_field('landing_page_mode')) ? 'landing-page-placement' : ''; ?> <?php $green_banner   = get_field('green_banner', 'option'); if ($green_banner && $_COOKIE["announcement_length"] != $announ_length) : ?><?php echo "change-height" ?> <?php endif; ?>"></div>
		
