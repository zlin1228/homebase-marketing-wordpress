<?php
/*
Template Name: Pricing
*/
get_header(); ?>

<div class="container" role="document">
    <?php
    if ( have_rows('flexible_pricing') ) :

        while ( have_rows('flexible_pricing') ) : the_row();

        if  ( get_row_layout() == 'hero_pricing' ) : ?>
          <div class="hero" style="background-image: url('<?php echo get_sub_field('background_image'); ?>')">
            <div class="row">
                <div class="hero-text">
                    <h1><?php echo get_sub_field('title'); ?></h1>
                    <h2><?php echo get_sub_field('subtitle'); ?></h2>
                    <p class="save-text"><?php echo get_sub_field('save_text'); ?></p>
                    <div class="swith-bill-mode">
                        <div class="bill-text monthly"><?php echo get_sub_field('bill_monthly_text'); ?></div>
                        <label class="pure-material-switch">
                            <input type="checkbox" id="pricing-toggle" checked>
                            <span></span>
                        </label>
                        <div class="bill-text annually active"><?php echo get_sub_field('bill_annually_text'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <?php elseif ( get_row_layout() == 'pricing' ) : ?>

			<?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                    $scroll_anchor = get_sub_field('scroll_anchor');
                    $exclusion_text  = get_sub_field('bottom_text');
                ?>

				<div class="pricing-section" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>

					<?php
                    $sticky_header        = get_sub_field('sticky_header');

					// table
					if ( have_rows('columns') ) : ?>
                      <div class="pricing-table">
							<?php while ( have_rows('columns') ) : the_row();
								if (get_row_layout() == 'column') : ?>


									<?php
									$hide_column        = get_sub_field('hide_column');
									$add_top_tag        = get_sub_field('add_top_tag');
									$top_tag_text       = (get_sub_field('top_tag_text')) ? get_sub_field('top_tag_text') : 'Most popular plan';
									$pricing_plan_title = get_sub_field('pricing_plan_title');
									$annual_price       = get_sub_field('annual_price');
									$annual_meta        = get_sub_field('annual_meta');
									$monthly_price      = get_sub_field('monthly_price');
									$monthly_meta       = get_sub_field('monthly_meta');
									$subheadline        = get_sub_field('subheadline');
                                    $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                                    $button_link        = (get_sub_field('button_link'));
									// $utm_content     = get_sub_field('utm_content');
                                    $list_meta        = get_sub_field('list_meta');
                                    $short_description        = get_sub_field('short_description');
                                    $bottom_text        = get_sub_field('bottom_text');


									if (!$hide_column) : ?>
										<div class="pricing-table-col <?php echo ($add_top_tag) ? 'pricing-table-col-tagged' : ''; ?>">

											<?php
											// top tag
											if ($add_top_tag) : ?>
												<div class="pricing-top-tag">
													<span><?php echo $top_tag_text; ?></span>
												</div>
											<?php endif; ?>

											<div class="pricing-plan">
												<?php
												//Sticky Header Block
												if ($sticky_header) : ?>
													<!--  FIXED SCROLL FUNCTION  -->
													<script>
														window.addEventListener( 'load', function() {
															jQuery(window).scroll(function() {
																var scroll = jQuery(window).scrollTop();
// 															console.log(scroll);
																if (jQuery(window).width() > 640){
																	if (scroll >= 328 && scroll <= 1145) {
																		jQuery(".pricing-col-title").addClass("stick-col-title");
																		jQuery(".sticky-meta").addClass("stick-top");
																	}else {
																		jQuery(".pricing-col-title").removeClass("stick-col-title");
																		jQuery(".sticky-meta").removeClass("stick-top");
																	}
																}
															});
														} );
													</script>
													<!-- -------------------------------- -->
												<?php endif; ?>
												<?php
												// column title
                                                if ($pricing_plan_title) : ?>
													<h3 class="pricing-col-title">
														<span><?php echo $pricing_plan_title; ?></span>
													</h3>
												<?php endif; ?>

												<div class="pricing-plan-body">
                                                    <?php if ($sticky_header) : ?><div class="sticky-meta"><?php endif; ?>
                                                    <?php if($short_description): ?>
                                                    <div class="pricing-short-description">
                                                        <?php echo $short_description; ?>
                                                    </div>
                                                    <?php endif; ?>
													<div class="pricing-price" annual="<?php echo $annual_price; ?>" monthly="<?php echo $monthly_price; ?>">
														<?php echo $annual_price; ?>
													</div>

                                                    <?php
                                                    $phone_href = '';
                                                    $phone = '';
                                                    $phone_html = '';
                                                    if ($subheadline) {
                                                        $phone_href = 'tel:+' . str_replace("-","",trim($subheadline));
                                                        $phone_href = trim($phone_href);
                                                        $phone = trim($subheadline);
                                                        $phone_html = esc_html('<span class=\'pricing-subheadline\'><a href=\'' . $phone_href . '\'>'. $phone .'</a></span>');
                                                    }
                                                    ?>
													<div class="pricing-meta" annual="<?php echo $annual_meta . $phone_html ?>" monthly="<?php echo $monthly_meta . $phone_html ?>">
                                                        <?php echo $annual_meta ; ?>
                                                        <span class="pricing-subheadline"><a href="<?php echo $phone_href; ?>"><?php echo $phone; ?></a></span>
													</div>
                                                    <?php if ($sticky_header) : ?> </div><?php endif; ?>


													<a href="<?php echo $button_link; ?>" target="_blank" class="button">
														<?php echo $button_text; ?>
													</a>
                                                    <?php if ($list_meta) : ?><p class="list-meta"><?php echo $list_meta; ?></p><?php endif; ?>
													<?php
													// list
													if (have_rows('list')) : ?>
														<ul class="pricing-table-list">
															<?php while ( have_rows('list') ) : the_row(); ?>
																<li <?php echo (get_sub_field('add_divider_below')) ? ' class="divider-below"' : ''; ?>>
																	<?php the_sub_field('text'); ?>
																	<?php
																		$tooltip_headline	= get_sub_field('tooltip_headline');
																		$tooltip_description= get_sub_field('tooltip_description');
																		$tooltip_learn_more	= get_sub_field('tooltip_learn_more');
																		$tooltip_learn_more_link	= get_sub_field('tooltip_learn_more_link');
																		$tooltip_video	= get_sub_field('tooltip_video');
																		$tooltip_id	= get_sub_field('tooltip_id');
																	if (get_sub_field('add_tooltip')) : ?>
																		<a id="<?php echo $tooltip_id; ?>" href="#" class="qstn-icn"><img class="lazyload" data-src="/wp-content/uploads/2018/05/icn-questn.svg"></a>
																		<div id="popover-<?php echo $tooltip_id; ?>" class="pricing-tooltip">
																			<?php if ($tooltip_video) : ?>
																				<div class="row">
																					<div class="columns small-6 medium-6">
																						<h3 class="tooltip_headline"><?php echo $tooltip_headline; ?></h3>
																						<p class="tooltip_description"><?php echo $tooltip_description; ?></p>
																						<a href="<?php echo $tooltip_learn_more_link; ?>" class="tooltip_learnmore"><?php echo $tooltip_learn_more; ?></a>
																					</div>
																					<div class="columns small-6 medium-6 embed-container"><?php the_field($tooltip_video); ?></div>
																				</div>
																				<style>
																					.embed-container {
																						position: relative;
																						padding-bottom: 56.25%;
																						overflow: hidden;
																						max-width: 100%;
																						height: auto;
																					}

																					.embed-container iframe,
																					.embed-container object,
																					.embed-container embed {
																						position: absolute;
																						top: 0;
																						left: 0;
																						width: 100%;
																						height: 100%;
																					}
																				</style>
																			<?php endif; ?>

																			<?php if (!($tooltip_video)) : ?>
																				<div class="row">
																					<div class="columns small-12 medium-12">
																						<h3 class="tooltip_headline"><?php echo $tooltip_headline; ?></h3>
																						<p class="tooltip_description"><?php echo $tooltip_description; ?></p>
																						<a href="<?php echo $tooltip_learn_more_link; ?>" class="tooltip_learnmore"><?php echo $tooltip_learn_more; ?></a>
																						<a href="#" class="tooltip_close"><img class="lazyload" data-src="/wp-content/uploads/2018/06/icn-close.png"></a>
																					</div>
																				</div>
																			<?php endif; ?>
																		</div>
																		<script>
																			document.addEventListener( "DOMContentLoaded", function() {
																				var anchor_id = "<?php echo $tooltip_id; ?>";
																				var popover_id = "popover-"+"<?php echo $tooltip_id; ?>";
																				jQuery('#'+anchor_id).click(function() {
																					jQuery('#'+popover_id).show();
																				});
																				jQuery('.tooltip_close').click(function() {
																					jQuery('#'+popover_id).hide();
																				});
																			} );
																		</script>
																	<?php endif; ?>
																</li>

															<?php endwhile; ?>
														</ul>
                                                    <?php endif; ?>
                                                    <?php if($bottom_text) : ?>
                                                    <p class="pricing-col-bottom-text"><?php echo $bottom_text; ?></p>
                                                    <?php endif; ?>

												</div>

											</div>
										</div>
									<?php endif; ?>


								<?php endif;
                            endwhile; ?>
                        </div>
                        <div class="bottom-text"><?php echo $exclusion_text; ?></div>
					<?php endif; ?>


					<?php
					// bottom
					$bottom_link_title = get_sub_field('bottom_link_title');
					$bottom_link_text = get_sub_field('bottom_link_text');
                    $bottom_link_url  = get_sub_field('bottom_link_url');


					if ($bottom_link_text) : ?>
						<div class="pricing-bottom hidden-xs">
							<div class="row">
								<div class="columns text-center">
									<?php echo ($bottom_link_title) ? '<p>' . $bottom_link_title . '</p>' : ''; ?>
									<a href="<?php echo $bottom_link_url; ?>">
										<?php echo $bottom_link_text; ?>
                                    </a>
                                    <img class="arrow-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" />
								</div>
							</div>
						</div>
					<?php endif; ?>

                </div>

			<?php  endif; //flex_pricing ?>
            <?php
    elseif( get_row_layout() == 'image_left_content' ) : ?>
        <div class="col-2-section image-left-content-right">
            <div class="row">
                <div class="columns large-6 text-center col-2-right-col">
                    <div class="col-2-img">
                        <img class=" lazyloaded" alt="Screenshot App" data-src="<?php echo get_sub_field('image_left'); ?>" src="<?php echo get_sub_field('image_left'); ?>">
                    </div>
                </div>
                <div class="columns large-6 col-2-left-col">
                    <?php echo get_sub_field('content_right'); ?>
                </div>

            </div>
        </div>
    <?php elseif( get_row_layout() == 'pricing_detail' ) : ?>
    <div class="pricing-detailed hidden-xs" id="pricing-detailed">
        <div class="row">
            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th width="240" class="empty-cell"></th>
                            <?php if ( have_rows('columns') ) :
                                    $count_colums = 0;
                                    $plans_popular = array('basic'=>false, 'essentials' => false, 'plus'=>false, 'enterprise'=>false);
                                    $plan_popular_index = 0;
                                    while ( have_rows('columns') ) : the_row();
                                        if (get_row_layout() == 'column') : $count_colums++; ?>

                                            <?php
                                            $hide_column        = get_sub_field('hide_column');
                                            $add_top_tag        = get_sub_field('add_top_tag');
                                            $top_tag_text       = (get_sub_field('top_tag_text')) ? get_sub_field('top_tag_text') : 'Most popular plan';
                                            $pricing_plan_title = get_sub_field('pricing_plan_title');
                                            $annual_price       = get_sub_field('annual_price');
                                            $annual_meta        = get_sub_field('annual_meta');
                                            $monthly_price      = get_sub_field('monthly_price');
                                            $monthly_meta       = get_sub_field('monthly_meta');
                                            $subheadline        = get_sub_field('subheadline');
                                            $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                                            $button_link        = (get_sub_field('button_link'));
                                            //$utm_content     = get_sub_field('utm_content');
                                            $list_meta        = get_sub_field('list_meta');
                                            $short_description        = get_sub_field('short_description');
                                            $bottom_text        = get_sub_field('bottom_text');
                                            $plan_popular = get_sub_field('utm_content');

                                            $plans_popular[$plan_popular] = $add_top_tag;
                                            if($add_top_tag == true) $plan_popular_index = $count_colums;
                                                                                            ?>


                            <th width="200" class="bg--white">
                            <div class="text--center">
                                <?php if ($pricing_plan_title) : ?>
                                    <h3 class="pricing-col-title <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                                        <span><?php echo $pricing_plan_title; ?></span>
                                    </h3>
                                <?php endif; ?>
                                <div class="pricing-plan-body <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                                    <?php if ($sticky_header) : ?><div class="sticky-meta"><?php endif; ?>
                                    <?php if($short_description): ?>
                                    <div class="pricing-short-description">
                                        <?php echo $short_description; ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="pricing-price" annual="<?php echo $annual_price; ?>" monthly="<?php echo $monthly_price; ?>">
                                        <?php echo $annual_price; ?>
                                    </div>

                                    <div class="pricing-meta" annual="<?php echo $annual_meta; ?>" monthly="<?php echo $monthly_meta; ?>">
                                        <?php echo $annual_meta; ?>
                                    </div>
                                    <?php if ($sticky_header) : ?> </div><?php endif; ?>
                                    <?php
                                    // subheadline
                                    if ($subheadline) : ?>
                                        <div class="pricing-subheadline">
                                            <?php echo $subheadline; ?>
                                        </div>
                                    <?php endif; ?>

                                    <a href="<?php echo $button_link; ?>" target="_blank" class="button <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                                        <?php echo $button_text; ?>
                                    </a>
                                </div>
                            </div>
                            </th>
                            <?php       endif;
                                    endwhile;
                                endif;
                            ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if( have_rows('features_group') ):
                       while ( have_rows('features_group') ): the_row();
                          echo '<tr>
                                    <td class="pricing-feature__title">
                                        <h4>' . get_sub_field('group_title') . '</h4>
                                    </td>';
                                    for($i=0;$i<$count_colums;$i++) {
                                        echo '<td></td>';
                                    }

                            echo '</tr>';
                                if( have_rows('detail_group') ):
                                    while ( have_rows('detail_group') ): the_row();
                                    $tooltip = get_sub_field('item_tooltip');
                                    $class_tooltip = 'class="col-tooltip"';
                                    $detail_count_columns = 0;
                                    if(empty($tooltip)) $class_tooltip = '';

                                    echo '<tr>
                                            <td><span data-tooltip-text="'. $tooltip . '" ' . $class_tooltip . ' >' . get_sub_field('item_name') . '</span></td>';

                                    $feature_display_type = get_sub_field('feature_display');

                                    if($feature_display_type == 'Checkbox') {

                                        $plans_has_feature = array('basic'=>false, 'essentials' => false, 'plus'=>false, 'enterprise'=>false);
                                        $plan_feature = get_sub_field('plan_feature');

                                        foreach($plans_has_feature as $plan =>$has_feature) {
                                            $class = '';
                                            $detail_count_columns++;
                                            foreach($plan_feature as $pf) {
                                                if($plan == $pf) {
                                                    $plans_has_feature[$pf] = true;
                                                    if($plans_popular[$pf])
                                                        $class='class="checked popular"';
                                                    else
                                                        $class='class="checked"';
                                                    break;
                                                }
                                            }
                                            if($detail_count_columns <= $count_colums) {
                                                echo    '<td ' . $class . '></td>';
                                            }
                                        }
                                    } else if($feature_display_type = 'Text') {
                                        if( have_rows('plan_feature_text') ):
                                            while ( have_rows('plan_feature_text') ): the_row();
                                                $detail_count_columns++;
                                                if($detail_count_columns <= $count_colums) {
                                                    if($plan_popular_index == $detail_count_columns)
                                                        echo    '<td class="text--center text-value popular">' . get_sub_field('text_feature') . '</td>';
                                                    else
                                                        echo    '<td class="text--center text-value">' . get_sub_field('text_feature') . '</td>';
                                                }
                                            endwhile;
                                        endif;
                                    }

                                    echo '</tr>';
                                    endwhile;
                                endif;
                       endwhile;
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php elseif ( get_row_layout() == 'flex_signup_bumper' ) : ?>


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
                            id="home-signup-form-2"
                            method="GET"
                            class="home-form"
                    >
                        <input class="homeform"
                                aria-label="email address"
                                type="email"
                                name="email"
                                placeholder="Email address"
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
        <?php endif; ?>
    <?php elseif ( get_row_layout() == 'title' ) : ?>
        <h1 class="pricing-title <?php echo (get_sub_field('hide_on_mobile')==true)?'hidden-xs':''; ?>"><?php echo get_sub_field('title'); ?></h1>
    <?php endif; //end if layouts ?>
    <?php
        endwhile; //flexible pricing
    endif; //flexible pricing

    ?>
</div>
<script>
document.addEventListener( "DOMContentLoaded", function() {
    jQuery('#pricing-toggle').click(function(){
        var val = jQuery(this).is(":checked");

		jQuery('.bill-text').removeClass('active');

        var type = "monthly";
        if(val == true) { //annualy
            type = "annual";
			jQuery('.bill-text.annually').addClass('active');
            //$('.save-text').removeClass('monthly');
        } else {
			jQuery('.bill-text.monthly').addClass('active');
            //$('.save-text').addClass('monthly');
        }



		jQuery('.pricing-price').each(function() {
			jQuery(this).html( jQuery(this).attr(type) );
		});

		jQuery('.pricing-meta').each(function() {
			jQuery(this).html( jQuery(this).attr(type) );
		});
    });

	jQuery(window).resize(function() {
        fixStickyHeader();
    });

    function fixStickyHeader() {
        var widthTh = jQuery('th.bg--white').width();
        if( jQuery('th.bg--white div').hasClass('sticky') ) {

            //$('th.bg--white div.sticky').css( "width", (widthTh + 1) + 'px' );
			jQuery('th.bg--white:nth-child(2) div.sticky').css( "width", (widthTh + 2) + 'px' );
			jQuery('th.bg--white:nth-child(3) div.sticky').css( "width", (widthTh + 1) + 'px' );
			jQuery('th.bg--white:nth-child(4) div.sticky').css( "width", (widthTh + 1) + 'px' );
			jQuery('th.bg--white:nth-child(5) div.sticky').css( "width", (widthTh + 2) + 'px' );
        } else {
			jQuery('th.bg--white>div').css("width","100%");
        }
    }
	jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();
            //console.log("scroll: " + scroll);
            if (jQuery(window).width() > 767){
                if (scroll >= 1877 && scroll <= 4587) {
					jQuery('thead tr th').css('opacity',1);
					jQuery("thead tr th>div").addClass("sticky");
					jQuery('.table-scroll table').css('margin-top','197px');
                }else {
                    //$("thead tr th>div").removeClass("sticky");
                    if(scroll >= 4587) {
						jQuery('thead tr th').css('opacity',0);
                    }

                }

                if(scroll <= 1877) {
					jQuery("thead tr th>div").removeClass("sticky");
					jQuery('.table-scroll table').css('margin-top','0');
                }
            }

            fixStickyHeader();
    });

	jQuery('p.list-meta').on('click',function(e) {
        e.preventDefault();
            if (jQuery(window).width() < 640){
                var list = jQuery(this).siblings('ul.pricing-table-list');
                list.toggle(200, 'swing');
				jQuery(this).toggleClass('open');
        }
    });
});
</script>
<?php get_footer(); ?>
