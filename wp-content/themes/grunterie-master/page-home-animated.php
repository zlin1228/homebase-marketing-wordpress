<?php
/*
Template Name: Home - Flexible Animated
*/
get_header(); ?>

<div class="container" role="document">
    <div class="col-2-section fixed-video">
        <div class="row">
            <div class="columns large-6 col-2-left-col">
            </div>
            <div class="columns large-6  col-2-right-col">
                <img class="fallback-image" style="display:none;" src="<?php echo esc_url(home_url('/wp-content/uploads/2020/02/home-product-driven-fallback.png')); ?>" alt="Homebase" />
                <div id="lottie"></div>
            </div>
        </div>
    </div>
    <?php
    if ( have_rows('flexible_homepage') ) :

        while ( have_rows('flexible_homepage') ) : the_row();

        if  ( get_row_layout() == 'intro_get_started' ) : ?>
            <div class="col-2-section intro-get-started">
                <div class="row">
                    <div class="columns large-6 text-left col-2-right-col col-form">
                        <h1><?php echo get_sub_field('headline'); ?></h1>
                        <h4><?php echo get_sub_field('subheadline'); ?></h4>

                        <?php if ( get_sub_field( 'sign_up_google' ) ){?>
                            <a href="<?php echo get_sub_field('google_link'); ?>" class="google-lnk"><img src="<?php bloginfo('template_url'); ?>/img/google-icon.png" alt="Sign up with Google"  width="18" />Sign up with Google</a>
                            <div class="or">OR</div>
                        <?php } ?>

                        <div class="signup-bumper-column">
                            <?php $form_button_text = get_sub_field('bumper_text_button'); ?>

                            <form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']"
                                    id="home-signup-form-2"
                                    method="GET"
                                    class="home-form"
                            >
                                <input class="homeform"
                                        aria-label="email address"
                                        type="email"
                                        name="email"
                                        placeholder="Email Address"
                                />
                                <input type="submit"
                                        id="create-account"
                                        aria-label="submit"
                                        name="Submit"
                                        class="primary-cta buttonsbn"
                                        value="<?php echo ($form_button_text) ? $form_button_text : 'Get Started'; ?>"
                                />
                            </form>
                        </div>
                    </div>
                    <div class="columns large-6 col-2-left-col col-bullets">
                          <?php
                            $bullets = get_sub_field('bullets');
                            if( have_rows('bullets') ):
                                echo '<ul>';
                                while ( have_rows('bullets') ): the_row();
                                    echo    '<li>' . get_sub_field('item_description') . '</li>';

                                endwhile;
                                echo '</ul>';
                            endif;
                          ?>
                          <div class="bullets-footer"><?php echo get_sub_field('bullets_footer'); ?></div>
                    </div>
                </div>
            </div>
    <?php


		/* --------------------------------------------
			3 column
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_3_column' ) : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				<?php
				$scroll_anchor        = get_sub_field('scroll_anchor');
				$add_border_to_bottom = get_sub_field('add_border_to_bottom');
				$add_border_to_top    = get_sub_field('add_border_to_top');
				?>

				<div class="col-3-section <?php echo ($extra_classes = get_sub_field('extra_css_classes')) ? $extra_classes : ''; ?> <?php echo ($add_border_to_bottom) ? 'support-bumper-section-border-bottom' : ''; ?> <?php echo ($add_border_to_top) ? 'support-bumper-section-border-top' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
					// top image
					$top_pic_src = get_sub_field('top_picture');

					if ($top_pic_src) :

						$top_pic_style = get_sub_field('top_picture_style');
						$top_pic_pos   = get_sub_field('top_picture_position');
						$top_pic_link  = get_sub_field('top_picture_link');

						// simple
						if ($top_pic_style) :

							$top_pic  = '<div class="row col-3-top-pic-simple">';
							$top_pic .= '<div class="columns">';
							$top_pic .= ($top_pic_link) ? '<a href="' . $top_pic_link . '">' : '';
							$top_pic .= '<img alt="Team Managment Icon" src="' . $top_pic_src . '">';
							$top_pic .= ($top_pic_link) ? '</a>' : '';
							$top_pic .= '</div>';
							$top_pic .= '</div>';

						// full width
						else :

							$top_pic_height = get_sub_field('full_width_picture_height');
							$pic_height     = ($top_pic_height) ? $top_pic_height : '200';
							?>

							<div class="row col-3-top-pic-full">
								<div class="columns">

									<?php
									// link
									if ($top_pic_link) :

										$top_pic  = '<div class="row col-3-top-pic-full">';
										$top_pic .= '<div class="columns">';
										$top_pic .= '<a style="background-image: url(' . $top_pic_src . '); height: ' . $pic_height . 'px;" href="' . $top_pic_link . '"></a>';
										$top_pic .= '</div>';
										$top_pic .= '</div>';

									// div
									else :

										$top_pic  = '<div class="row col-3-top-pic-full">';
										$top_pic .= '<div class="columns">';
										$top_pic .= '<div style="background-image: url(' . $top_pic_src . '); height: ' . $pic_height . 'px;"></div>';
										$top_pic .= '</div>';
										$top_pic .= '</div>';

									endif; ?>

								</div>
							</div>

						<?php endif;

					endif;

					// render top picture above headline
					echo ($top_pic_src && $top_pic_pos == 'above_headline') ? $top_pic : ''; ?>

					<div class="row col-3-top-headlines">
						<div class="columns">

							<?php
							$top_headline         = get_sub_field('top_headline');
							$top_subheadline_text = get_sub_field('top_subheadline');
							$top_subheadline_link = get_sub_field('top_subheadline_link');

							// headline
							if ($top_headline) :
								echo '<h2>' . $top_headline . '</h2>';
							endif;

							// subheadline
							if ($top_subheadline_text) :
								$top_subheadline  = ($top_subheadline_link) ? '<a href="' . $top_subheadline_link . '">' : '';
								$top_subheadline .= $top_subheadline_text;
								$top_subheadline .= ($top_subheadline_link) ? '</a>' : '';

								echo '<h3>' . $top_subheadline . '</h3>';
							endif;
							?>

						</div>
					</div>

					<?php
					// render top picture below headline
					echo ($top_pic_src && $top_pic_pos == 'below_headline') ? $top_pic : '';
					?>


					<?php
					// columns
					$expand_row = get_sub_field('expand_row');

					if ( have_rows('columns') ) : ?>
						<div class="row col-3-cols">

							<?php
							$col_qty = 0;

							while (have_rows('columns')) { the_row(); $col_qty++; }

							switch($col_qty) {
								case 1 :
									$inner_wrap = 'medium-offset-3 medium-6';
									break;
								case 2 :
									$inner_wrap = 'large-offset-2 large-8';
									$col_class  = 'medium-6';
									break;
								case 3 :
									$inner_wrap = 'large-offset-1 large-10';
									$col_class  = 'medium-4';
									break;
								case 4 :
									$col_class  = 'large-3 medium-6';
									break;
								default:
									$col_class  = 'medium-6';
							}

							if ($expand_row) {
								$inner_wrap = '';
							}
							?>

							<div class="columns <?php echo $inner_wrap; ?>">
								<div class="row">

									<?php
									while (have_rows('columns')) : the_row(); ?>


										<div class="columns <?php echo $col_class; ?>">
											<div class="col-3-col">

												<?php
												$col_img          = get_sub_field('picture');
												$text_alignment   = get_sub_field('text_alignment');
												$headline_text    = get_sub_field('headline');
												$headline_link    = get_sub_field('headline_link');
												$subheadline_text = get_sub_field('subheadline');
												$subheadline_link = get_sub_field('subheadline_link');
												$text             = get_sub_field('text');
												$learn_more       = get_sub_field('learn_more');
												$link_text        = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
												$link_url         = get_sub_field('link_url');
												$button_text      = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
												$button_link      = get_sub_field('button_link');

												// image
												if ($col_img) : ?>
													<div class="col-3-col-img" style="text-align: <?php echo $text_alignment; ?>;">
														<img class="lazyload" alt="USP Icon" data-src="<?php echo $col_img; ?>">
													</div>
												<?php endif;

												// content
												if ($headline_text || $subheadline_text || $text) : ?>
													<div class="col-3-col-content" style="text-align: <?php echo $text_alignment; ?>;">

														<?php
														// headline
														if ($headline_text) :

															$headline  = '<h4>';
															$headline .= ($headline_link) ? '<a href="' . $headline_link . '">' : '';
															$headline .= $headline_text;
															$headline .= ($headline_link) ? '</a>' : '';
															$headline .= '</h4>';

															echo $headline;

														endif;

														// subheadline
														if ($subheadline_text) :

															$headline  = '<h5>';
															$headline .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
															$headline .= $subheadline_text;
															$headline .= ($subheadline_link) ? '</a>' : '';
															$headline .= '</h5>';

															echo $headline;

														endif;

														// text
														if ($text) :

															echo '<div class="col-3-col-text">' . $text . '</div>';

														endif;
														?>

													</div>
												<?php endif;

												// link/button
												if ($learn_more) : ?>
													<div class="col-3-col-link">
														<a
															href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
															class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
														>
															<?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
														</a>
													</div>
												<?php endif; ?>

											</div>
										</div>


									<?php endwhile; ?>

								</div>
							</div>

						</div>
					<?php endif; ?>

				</div>

			<?php endif; ?>
        <?php elseif ( get_row_layout() == 'content_slider' ) :
            if ( have_rows('flexible_slider_content') ) :
                echo '<div class="content-slider js-slider-wrapper">';
                while ( have_rows('flexible_slider_content') ) : the_row();
                    if  ( get_row_layout() == 'content_left_image_right' ) : ?>
                    <div class="slide-content" style="background-color: <?php echo get_sub_field('background_color'); ?>;">
                        <div class="col-2-section">
                            <div class="row text-center"><h1><?php echo get_sub_field('title'); ?></h1></div>
                            <div class="row">
                                <div class="columns large-6 text-left col-2-right-col col-content">
                                    <?php echo get_sub_field('content'); ?>
                                    <?php if(get_sub_field('button_link')): ?>
                                    <a href="<?php echo get_sub_field('button_link'); ?>"><?php echo (get_sub_field('button_text'))?get_sub_field('button_text'):'Learn more'; ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="columns large-6 col-2-left-col col-image">                                  
                                    <img class="lazyload" data-src="<?php echo get_sub_field('image'); ?>" alt="Homebase" />                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif  ( get_row_layout() == 'content_right_image_left' ) : ?>
                    <div class="slide-content" style="background-color: <?php echo get_sub_field('background_color'); ?>;">
                        <div class="col-2-section">
                            <div class="row text-center"><h1><?php echo get_sub_field('title'); ?></h1></div>
                            <div class="row">
                                <div class="columns large-6 col-2-left-col col-image">
                                    <img class="lazyload" data-src="<?php echo get_sub_field('image'); ?>" alt="Homebase"/>
                                </div>
                                <div class="columns large-6 text-left col-2-right-col col-content">
                                    <?php echo get_sub_field('content'); ?>
                                    <?php if(get_sub_field('button_link')): ?>
                                    <a href="<?php echo get_sub_field('button_link'); ?>"><?php echo (get_sub_field('button_text'))?get_sub_field('button_text'):'Learn more'; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php echo '</div>'; ?>
            <?php endif; ?>
            <?php elseif ( get_row_layout() == 'content_left_image_right' ) : ?>
            <div class="section-content" style="background-color: <?php echo get_sub_field('background_color'); ?>;">
                <div class="col-2-section">
                    <div class="row">
                        <div class="columns large-6 text-left col-2-right-col col-content">
                            <?php if(get_sub_field('title')): ?>
                            <h2><?php echo get_sub_field('title'); ?></h2>
                            <?php endif; ?>
                            <?php echo get_sub_field('content'); ?>
                            <?php if(get_sub_field('button_link')): ?>
                            <a href="<?php echo get_sub_field('button_link'); ?>"><?php echo (get_sub_field('button_text'))?get_sub_field('button_text'):'Learn more'; ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="columns large-6 col-2-left-col col-image">
                            <?php if(wp_is_mobile()): ?>
                            <img class="lazyload" data-src="<?php echo get_sub_field('image'); ?>" alt="Homebase"/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif  ( get_row_layout() == 'content_right_image_left' ) : ?>
            <div class="section-content" style="background-color: <?php echo get_sub_field('background_color'); ?>;">
                <div class="col-2-section">
                    <div class="row">
                        <div class="columns large-6 col-2-left-col col-image">
                            <img class="lazyload hide-mobile" data-src="<?php echo get_sub_field('image'); ?>" alt="Homebase" />
                        </div>
                        <div class="columns large-6 text-left col-2-right-col col-content">
                            <?php if(get_sub_field('title')): ?>
                            <h2><?php echo get_sub_field('title'); ?></h2>
                            <?php endif; ?>
                            <img class="lazyload hide-desktop" data-src="<?php echo get_sub_field('image'); ?>" alt="Homebase" />
                            <?php echo get_sub_field('content'); ?>
                            <?php if(get_sub_field('button_link')): ?>
                            <a href="<?php echo get_sub_field('button_link'); ?>"><?php echo (get_sub_field('button_text'))?get_sub_field('button_text'):'Learn more'; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif ( get_row_layout() == 'reviews' ) : ?>
            <div class="reviews-layout">
                <div class="row text-center">
                    <h1><?php echo get_sub_field('title'); ?></h1>
                </div>
                <div class="row reviews">
                        <?php if ( have_rows('reviews') ) :
                            while ( have_rows('reviews') ) : the_row();
                                echo '      <div class="columns large-4 medium-4 text-center">';
                                echo '	      <a href="'.get_sub_field('link_url').'" target="_blank">';
                                echo '          <div class="score"><img class="lazyload" data-src="' . get_sub_field('score') . '" alt="Score" /></div>';
                                echo '          <div class="company"><img class="lazyload"  data-src="' . get_sub_field('company_logo') . '" alt="Platform" /></div>';
                                echo '          <div class="score-description">' . get_sub_field('score_description') . '</div>';
                                echo '		   </a>';
                                echo '      </div>';
                            endwhile;
                        endif; ?>
                </div>
            </div>
            <?php elseif ( get_row_layout() == 'how_it_works' ) : ?>
            <div class="row how-it-works text-center">
                <h1><?php echo get_sub_field('title'); ?></h1>
                <a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
            </div>
            <?php elseif ( get_row_layout() == 'headline_only' ) : ?>
            <div class="headline-only text-center">
                <h1><?php echo get_sub_field('headline'); ?></h1>
            </div>

            <?php elseif ( get_row_layout() == 'hero_bubble' ) : ?>
        <div class="section-content" style="background-color: #f6f7f7;">
            <div class="col-2-section hero-bubble">
                <div class="row">
                    <div class="columns large-6 col-2-left-col">
                        <?php if( have_rows('bubble') ):

	                       while( have_rows('bubble') ): the_row(); ?>
                                <div class="bubble">
                                    <img class="float-image" src="<?php echo get_sub_field('bubble_ilustration'); ?>">
                                    <h1><strong><?php echo get_sub_field('bubble_title'); ?></strong></h1>
                                    <h2><?php echo get_sub_field('bubble_subtitle'); ?></h2>
                                    <p><?php echo get_sub_field('bubble_description'); ?></p>

                                    <?php $link = get_sub_field('bubble_button');
                                    if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="button"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                    <div class="columns large-6 col-2-left-col">
                        <img src="<?php echo get_sub_field('bubble_image'); ?>">
                    </div>
                </div>
            </div>
        </div>

            <?php elseif ( get_row_layout() == 'reviews_with_quote' ) : ?>
            <div class="col-2-section reviews-with-quote-layout">
                <div class="row">
                    <div class="columns large-6 col-2-left-col col-reviews">
                        <?php if ( have_rows('reviews') ) :
                            while ( have_rows('reviews') ) : the_row();
                                echo '      <div class="columns large-4 medium-4 text-center review">';
                                echo '          <div class="score"><img class="lazyload" data-src="' . get_sub_field('score') . '" alt="Score" /></div>';
                                echo '          <div class="company"><img class="lazyload"  data-src="' . get_sub_field('company_logo') . '" alt="Platform" /></div>';
                                echo '          <div class="score-description">' . get_sub_field('score_description') . '</div>';
                                echo '      </div>';
                            endwhile;
                        endif; ?>
                        <div class="signup-bumper-column">
                            <?php $form_button_text = get_sub_field('bumper_text_button'); ?>

                            <form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']"
                                    id="home-signup-form-2"
                                    method="GET"
                                    class="home-form"
                            >
                                <input class="homeform"
                                        aria-label="email address"
                                        type="email"
                                        name="email"
                                        placeholder="Email Address"
                                />
                                <input type="submit"
                                        id="create-account"
                                        aria-label="submit"
                                        name="Submit"
                                        class="primary-cta buttonsbn"
                                        value="<?php echo ($form_button_text) ? $form_button_text : 'Get Started'; ?>"
                                />
                            </form>
                        </div>
                    </div>
                    <div class="columns large-6 col-2-right-col col-quote">
                        <div class="quote-section">
                            <div class="quote-container">
                                <div class="quote-text-container">
                                <?php echo get_sub_field('quote_text'); ?>
                                </div>
                            </div>
                            <div class="quote-author"><?php echo get_sub_field('quote_author'); ?></div>
                            <div class="quote-position"><?php echo get_sub_field('quote_author_position'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="section-divider"></div>
            </div>
            <?php elseif ( get_row_layout() == 'bullets_quote_with_image' ) : ?>
            <div class="col-2-section bullets-quote-with-image-layout">
                <div class="row">
                    <div class="columns large-6 col-2-left-col col-bullets">
                    <?php
                            $bullets = get_sub_field('bullets');
                            if( have_rows('bullets') ):
                                echo '<ul>';
                                while ( have_rows('bullets') ): the_row();
                                    echo    '<li>' . get_sub_field('item_description') . '</li>';

                                endwhile;
                                echo '</ul>';
                            endif;
                          ?>
                          <div class="bullets-footer-container">
                          <div class="bullets-footer"><?php echo get_sub_field('bullets_footer'); ?></div>
                            <a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
                          </div>
                    </div>
                    <div class="columns large-6 col-2-right-col col-quote-image hide-mobile">
                        <div class="img-container" style="background-image: url('<?php echo get_sub_field('quote_background_image'); ?>');">
                            <div class="img-text-container">
                                <div class="quote-text"><?php echo get_sub_field('quote'); ?></div>
                                <div class="quote-author"><?php echo get_sub_field('quote_author'); ?></div>
                                <div class="quote-author-position"><?php echo get_sub_field('quote_author_position'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif ( get_row_layout() == 'customers' ) : ?>
            <div class="section-divider"></div>
            <div class="section-customers">
                <h1><?php echo get_sub_field('headline'); ?></h1>
                <div class="customer-logos">
                    <?php if ( have_rows('customers') ) :
                            while ( have_rows('customers') ) : the_row();
                                echo '<img class="lazyload" data-src="' . get_sub_field('logo') . '" alt="'. get_sub_field('customer_name') . '" />';                                
                            endwhile;
                        endif; ?>
                </div>
                <div class="customer-review">
                    <div class="customer-review-logo"><img class="lazyload" data-src="<?php echo get_sub_field('customer_review_logo'); ?>" alt="Customer Review" /></div>
                    <div class="quote-col">
                        <div class="quote-section">
                            <div class="quote-container">
                                <div class="quote-text-container">
                                    <div class="quote-text"><?php echo get_sub_field('customer_review'); ?></div>
                                    <div class="quote-author"><?php echo get_sub_field('customer_review_author'); ?></div>
                                    <div class="quote-position"><?php echo get_sub_field('customer_review_position'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; //end if layout ?>
        <?php endwhile; //end while main flex content ?>
    <?php endif; //end if have rows mail flex content ?>
    <script>
        window.addEventListener( 'load', function() {
           jQuery('.js-slider-wrapper').slick({
                dots: true,
                centerMode: true,
                arrows: true,
                infinite: false,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                cssEase: 'linear',
                centerPadding: '0px',
                prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"> </button>',
                nextArrow: '<button class="slick-next" aria-label="Next" type="button"> </button>',
            });

            jQuery('.score-description').val().replace(/\u2028/g, ' ');
        });

    </script>
<?php get_footer(); ?>
