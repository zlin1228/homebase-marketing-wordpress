<?php
/* Template name: Reviews
 * Template version: V3
 * Updated By: Clickmedia
 * Date: Jun 8, 2019
 *  */
get_header();
?>



<?php
if ( have_rows('flexible_reviews_content') ) :

	while ( have_rows('flexible_reviews_content') ) : the_row();




		/* --------------------------------------------
			hero
		-------------------------------------------- */
		if ( get_row_layout() == 'flex_hero' ) : ?>


			<?php if (!get_sub_field('hide_widget')) :

				$scroll_anchor = get_sub_field('scroll_anchor');
				$hero_style    = get_sub_field('hero_style');

				// with picture
				if ($hero_style == 'with-picture') : ?>


					<?php
					$bg              = get_sub_field('background_image');
					$bg_pos          = get_sub_field('bg_horizontal_alignment');
					$col_classes     = (get_sub_field('text_position') == 'left') ? 'medium-7' : 'large-offset-6 medium-offset-5 medium-7';
					$height          = (get_sub_field('section_height')) ? get_sub_field('section_height') : 530;
					$hero_text_pos   = (get_sub_field('text_position') == 'left') ? 'hero-text-left' : 'hero-text-right';
					$text_color      = get_sub_field('text_color');
					$text_size       = get_sub_field('text_size');
					$headline        = get_sub_field('headline');
					$subheadline     = get_sub_field('subheadline');
					$sign_up         = get_sub_field('email_sign_up_form');
					$sign_up_text    = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Get started';
					$button          = get_sub_field('button');
					$button_text     = get_sub_field('button_text');
					$button_link     = get_sub_field('button_link');
					$additional_text = get_sub_field('additional_text');
					$add_credit      = get_sub_field('add_image_credit');
					$credit_person   = get_sub_field('image_credit_person');
					$credit_text     = get_sub_field('image_credit_text');
					$credit_color    = get_sub_field('image_credit_color');
					?>

					<div class="hero with-picture <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>"
						 <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
						 style="background-image: url(<?php echo $bg; ?>); background-position: <?php echo $bg_pos; ?> top;"
					>
						<div class="row <?php echo $hero_text_pos ?>">
							<div class="columns large-6 hero-text-col <?php echo $col_classes; ?>"
								 style="height: <?php echo $height; ?>px;"
							>

								<div class="hero-text <?php echo $text_size; ?>"
									 style="color: <?php echo $text_color; ?>;"
								>
									<?php if ($headline) : ?>
										<h1><?php echo $headline; ?></h1>
									<?php endif; ?>

									<?php if ($sign_up) : ?>
										<form action="https://app.joinhomebase.com/onboarding/sign-up"
											  id="home-signup-form"
											  method="GET"
											  class="home-form"
										>

											<input class="homeform"
												   type="email"
												   name="email"
												   placeholder="Email address"
											/>

											<input type="submit"
												   id="create-account"
												   name="Submit"
												   class="primary-cta buttonsbn"
												   value="<?php echo $sign_up_text; ?>"
											/>
										</form>
									<?php endif; ?>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<?php
$image = get_field( 'image' );

if( ! empty( $image )
	&& function_exists( 'get_rocket_option' )
	&& get_rocket_option( 'lazyload' )
	&& ! ( defined( 'DONOTROCKETOPTIMIZE' ) && DONOTROCKETOPTIMIZE )
) : ?>
	<img src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" data-lazy-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php elseif( ! empty( $image ) ) : ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>



									<?php if ($button) : ?>
										<a href="<?php echo $button_link; ?>" class="hero-button">
											<?php echo $button_text; ?>
										</a>
									<?php endif; ?>

									<?php if ($additional_text) : ?>
										<div class="hero-additional-text">
											<?php echo $additional_text; ?>
										</div>
									<?php endif ?>
								</div>

							</div>

							<?php if ($add_credit) : ?>
								<div class="hero-image-credit"
									 style="color: <?php echo $credit_color; ?>;"
								>
									<?php echo ($credit_person) ? '<span>' . $credit_person . '</span>' : ''; ?>
									<?php echo ($credit_text) ? $credit_text : ''; ?>
								</div>
							<?php endif; ?>

						</div>
					</div>


				<?php // support hero
				elseif ($hero_style == 'support') : ?>


					<?php
					$bg                = get_sub_field('background_image');
					$bg_pos            = get_sub_field('bg_horizontal_alignment');
					$height            = (get_sub_field('section_height')) ? get_sub_field('section_height') : 530;
					$text_color        = get_sub_field('text_color');
					$text_size         = get_sub_field('text_size');
					$headline          = get_sub_field('headline');
					$subheadline       = get_sub_field('subheadline');
					$text_below_search = get_sub_field('text_below_search');
					$add_bitmoji       = get_sub_field('add_bitmoji');
					$bitmoji_image     = get_sub_field('bitmoji_image');
					$bitmoji_name      = get_sub_field('bitmoji_name');
					$bitmoji_position  = get_sub_field('bitmoji_position');
					?>

					<div class="hero support-hero <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>"
						 <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
						 style="background-image: url(<?php echo $bg; ?>); background-position: <?php echo $bg_pos; ?> top;"
					>
						<div class="row">
							<div class="columns large-6 large-offset-3 medium-8 medium-offset-2 hero-text-col"
								 style="height: <?php echo $height; ?>px;"
							>

								<div class="hero-text <?php echo $text_size; ?>"
									 style="color: <?php echo $text_color; ?>;"
								>
									<?php if ($headline) : ?>
										<h1 class="text-center"><?php echo $headline; ?></h1>
									<?php endif; ?>

									<form
										action="http://support.joinhomebase.com/hc/en-us/search/"
										method="GET"
										target="_blank"
										class="zendesk-search"
									>
										<input type="text" name="query">
										<input type="hidden" name="utf8" value="✓">
										<input type="hidden" name="commit" value="Search">
									</form>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<?php if ($text_below_search) : ?>
										<div class="hero-support-text-below-search">
											<?php echo $text_below_search; ?>
										</div>
									<?php endif; ?>
								</div>

							</div>

							<?php
							// bitmoji
							if ($add_bitmoji) : ?>
								<div class="bitmoji">
									<div
										class="bitmoji-img"
										style="background-image: url(<?php echo $bitmoji_image; ?>);"
									></div>
									<div class="bitmoji-text">
										<span class="bitmoji-name">
											<?php echo $bitmoji_name; ?>
										</span>
										<span>
											<?php echo $bitmoji_position; ?>
										</span>
									</div>
								</div>
							<?php endif; ?>

						</div>
					</div>


				<?php // without picture
				elseif ($hero_style == 'without-picture') : ?>


					<?php
					$text_size     = get_sub_field('text_size');
					$headline      = get_sub_field('headline');
					$subheadline   = get_sub_field('subheadline');
					$second_subheadline   = get_sub_field('second_subheadline');
					$sign_up       = get_sub_field('email_sign_up_form');
					$sign_up_text  = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Get Started';
					$button        = get_sub_field('button');
					$button_text   = get_sub_field('button_text');
					$button_link   = get_sub_field('button_link');
					?>

					<div class="hero without-picture <?php echo ($custom_classes = get_sub_field('custom_css_classes')) ? $custom_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
						<div class="row">
							<div class="columns hero-text-col <?php echo $text_size; ?>">
								<div class="text-center">
									<?php if ($headline) : ?>
										<h1><?php echo $headline; ?></h1>
									<?php endif; ?>

									<?php if ($second_subheadline) : ?>
										<h3><?php echo $second_subheadline; ?></h3>
									<?php endif; ?>

									<?php if ($sign_up) : ?>
										<form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']"
											  id="home-signup-form"
											  method="GET"
											  class="home-form"
										>
											<input class="homeform"
												   type="email"
												   name="email"
												   placeholder="Email address"
											/>
											<input type="submit"
												   id="create-account"
												   name="Submit"
												   class="primary-cta buttonsbn"
												   value="<?php echo $sign_up_text; ?>"
											/>
										</form>
									<?php endif; ?>

									<?php if ($subheadline) : ?>
										<h2><?php echo $subheadline; ?></h2>
									<?php endif; ?>

									<?php if ($button) : ?>
										<a href="<?php echo $button_link; ?>" class="hero-button">
											<?php echo $button_text; ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>


				<?php endif; ?>


				<?php
				// quote
				$add_quote  = get_sub_field('add_quote');
				$quote_text = get_sub_field('quote_text');
				$quote_note = get_sub_field('quote_note');

				if ($add_quote) : ?>
					<div class="hero-quote">
						<p>"<?php echo $quote_text; ?>"<?php echo ($quote_note) ? ' - <span>' . $quote_note . '</span>' : ''; ?></p>
					</div>
				<?php endif; ?>

				<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
				<script defer src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
		        <script>
					window.addEventListener( 'load', function () {
			        	jQuery('.hero-text__video--play').fancybox({
					        openEffect  : 'none',
					        closeEffect : 'none',
					        helpers : {
					            media : {}
					        }
					    });

					    jQuery('.click_video').on('click', function(){
					    	jQuery('.hero-text__video--play.a_play_button').click();
					    });
					});
		        </script>

			<?php endif; ?>




			<?php

		/* --------------------------------------------
			signup bumper
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_signup_bumper' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

				<div class="signup-bumper-section row" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
					<div class="columns text-center">
						<?php
						$headline         = get_sub_field('headline');
						$form_button_text = get_sub_field('form_button_text');

						// headline
						if ($headline) : ?>
							<h2><?php echo $headline; ?></h2>
						<?php endif; ?>

						<form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']"
							  id="home-signup-form"
							  method="GET"
							  class="home-form"
						>
							<input class="homeform"
								   type="email"
								   name="email"
								   placeholder="Email address"
							/>
							<input type="submit"
								   id="create-account"
								   name="Submit"
								   class="primary-cta buttonsbn"
								   value="<?php echo ($form_button_text) ? $form_button_text : 'Get Started'; ?>"
							/>
						</form>
					</div>
				</div>

			<?php endif; ?>

			<?php
		/* --------------------------------------------
			customer stories
		-------------------------------------------- */
		elseif ( get_row_layout() == 'customer_stories' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<section class="main-wrapper__stories row">
		            <div class="row-tight dflex">
		                <div class="main-wrapper__stories--description">
		                    <h4><?= get_sub_field('headline'); ?></h4>
		                    <?php $logo = get_sub_field('logo');
		                    if(!empty($logo)): ?>
			                    <img src="<?= $logo;?>" alt="">
			                <?php endif; ?>
		                    <h2><?= get_field('h1_headline', get_sub_field('customer_storie')->ID); ?></h2>
		                    <p><?= get_field('h2_headline', get_sub_field('customer_storie')->ID); ?></p>
		                    <div class="main-wrapper__stories--description-link">
		                    	<?php
		                    		$name_link_page = get_sub_field('name_link_page');
		                    		$name_link_view_all = get_sub_field('name_link_view_all');
		                    	?>
		                        <a href="<?= get_the_permalink(get_sub_field('customer_storie')->ID); ?>"><?= empty($name_link_page) ? 'read story' : $name_link_page; ?></a>
		                        <a href="<?= get_home_url(); ?>/customer-story/"><?= empty($name_link_view_all) ? 'view all' : $name_link_view_all; ?></a>
		                    </div>
		                </div>
		                <div class="main-wrapper__stories--image">
		                    <img src="<?= get_sub_field('image'); ?>" alt="customer image">
		                </div>
		            </div>
		        </section>

			<?php endif;


		 ?>

		<?php
		/* --------------------------------------------
			distribution service
		-------------------------------------------- */
		elseif ( get_row_layout() == 'distribution_service' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<section class="main-wrapper__application row">
		            <div class="row-tight">
		                <h2><?= get_sub_field('headline'); ?></h2>
		                <div class="main-wrapper__application--content">
		                	<?php $distribution_service = get_sub_field('google_store'); ?>
		                    <div class="main-wrapper__application--content-google">
		                        <div class="rating">
		                            <h4><?= $distribution_service['headline']; ?></h4>
		                            <div class="star-ratings-sprite"><span style="width:<?= stars_width($distribution_service['stars_google']); ?>%" class="star-ratings-sprite-rating"></span></div>
		                            <!-- <div class="rating-stars">
		                                <img src="<?= get_template_directory_uri(); ?>/img/star-full.svg" alt="App store rating">
		                                <img src="<?= get_template_directory_uri(); ?>/img/star-full.svg" alt="App store rating">
		                                <img src="<?= get_template_directory_uri(); ?>/img/star-full.svg" alt="App store rating">
		                                <img src="<?= get_template_directory_uri(); ?>/img/star-full.svg" alt="App store rating">
		                                <img src="<?= get_template_directory_uri(); ?>/img/star-quater.svg" alt="App store rating">
		                            </div> -->
		                            <p><?= $distribution_service['small_subtitle']; ?></p>
		                        </div>
		                        <div class="image">
		                            <img src="<?= $distribution_service['image']; ?>" alt="Google store image">
		                        </div>
		                        <div class="text">
		                            <h4><?= $distribution_service['description']; ?></h4>
		                        </div>
		                        <div class="name">
		                            <p><?= $distribution_service['author']; ?></p>
		                        </div>
		                        <div class="logo">
		                            <a href="<?= $distribution_service['link']['url']; ?>"><img src="<?= $distribution_service['link']['image']; ?>" alt="Google store logo"></a>
		                        </div>
		                    </div>
		                    <?php $distribution_service = get_sub_field('app_store'); ?>
		                    <div class="main-wrapper__application--content-app">
		                        <div class="rating">
		                            <h4><?= $distribution_service['headline']; ?></h4>
		                            <div class="star-ratings-sprite">
		                            	<span style="width:<?= stars_width($distribution_service['stars_app']); ?>%" class="star-ratings-sprite-rating"></span>
		                            </div>
		                            <p><?= $distribution_service['small_subtitle']; ?></p>
		                        </div>
		                        <div class="image">
		                            <img src="<?= $distribution_service['image']; ?>" alt="App store image">
		                        </div>
		                        <div class="text">
		                            <h4><?= $distribution_service['description']; ?></h4>
		                        </div>
		                        <div class="name">
		                            <p><?= $distribution_service['author']; ?></p>
		                        </div>
		                        <div class="logo">
		                            <a href="<?= $distribution_service['link']['url']; ?>"><img src="<?= $distribution_service['link']['image']; ?>" alt="App store logo"></a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </section>

			<?php endif;

		/* --------------------------------------------
			slideshow reviews
		-------------------------------------------- */
		elseif ( get_row_layout() == 'slideshow_reviews' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<section class="main-wrapper__carousel row-tight">
		            <h2><?= get_sub_field('headline'); ?></h2>
		            <?php $stars_block = get_sub_field('stars_block');
		            if(!$stars_block['hide_widget']): ?>
			            <div class="rating">
			                <h4><?= $stars_block['headline']; ?></h4>
			                <div class="star-ratings-sprite">
			                	<span style="width:<?= stars_width($stars_block['stars_slider']); ?>%" class="star-ratings-sprite-rating"></span>
			                </div>
			                <p><?= $stars_block['small_subtitle']; ?></p>
			            </div>
			        <?php endif; ?>
		            <div class="slider-wrapper">
		            	<?php $slider = get_sub_field('slider');
		            		foreach ($slider as $slide) {
		            			$review = get_field('review', $slide['review']); ?>
				                <div class="main-wrapper__carousel--slider with-picture">
				                    <div class="slider-block">
				                        <div class="slider-block__background">
				                            <img src="<?= $slide['background_image']; ?>" alt="Slider image">
				                        </div>
				                        <div class="slider-block__columns">
				                            <div class="text">
				                                <h4>“<?= $review['review']['description']; ?>”</h4>
				                            </div>
				                            <div class="name"><p><span><?= $review['author']['full_name']; ?></span><br><?= $review['author']['position']; ?><br><?= $review['author']['address']; ?></p></div>
				                        </div>
				                        <div class="slider-block__round">
				                            <div class="slider-block__round--figure"><img src="<?= $slide['logo']; ?>" alt="Review logo"></div>
				                        </div>
				                    </div>
				                </div>
			                <?php }	?>
		            </div>
		        </section>

			<?php endif;

			/* --------------------------------------------
				review list
			-------------------------------------------- */
			elseif ( get_row_layout() == 'review_list' ) : ?>
				<?php if (!get_sub_field('hide_widget')) :
					$ReviewsMethod = new ReviewsMethod(); ?>
					<section class="row-tight main-wrapper__reviews">
			            <div class="main-wrapper__reviews--filter">
			                <div class="main-wrapper__reviews--filter_title">
			                    <h4><?= get_sub_field('headline'); ?></h4>
			                </div>
			                <div class="main-wrapper__reviews--filter_categories">
			                    <?php $ReviewsMethod->get_html_filters(); ?>
			                    <div class="main-wrapper__reviews--filter_categories-item">
			                        <form class="filter-form">
			                            <label for="filter_sort">Sort by:</label>
			                            <select name="name_filter_sort select_filter" id="filter_sort">
			                                <option value="all">All</option>
			                                <option value="date">Date</option>
			                                <option value="rating">Rating</option>
			                            </select>
			                        </form>
			                    </div>
			                </div>
			            </div>
			            	<?php  $ReviewsMethod->get_posts();	?>
			        </section>

			    <?php endif;
		endif;

	endwhile;

else : ?>

	<div class="row">
		<div class="columns text-center">
			<br><br><br><br>No widgets were added.<br><br><br><br><br>
		</div>
	</div>

<?php endif; ?>




<?php get_footer(); ?>
<script src="<?= get_template_directory_uri() . '/js/jquery.nice-select.js'; ?>"></script>
<script type="text/javascript">
	window.addEventListener( 'load', function () {
		jQuery('.main-wrapper__reviews--filter select').niceSelect();

		// Add slick slider
		jQuery('.slider-wrapper').slick({
			prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"> </button>',
			nextArrow: '<button class="slick-next" aria-label="Next" type="button">  </button>',
		});
	});
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/loadmore.js"></script>
