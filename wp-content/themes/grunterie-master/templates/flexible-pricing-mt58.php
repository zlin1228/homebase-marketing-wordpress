<?php
/*
Template Name: Pricing - MT58 - Flexible
*/
get_header(); ?>
<script type="application/ld+json">
    {  
      "@context":"http://schema.org",
      "@type":"WebApplication",
      "name": "Homebase",
      "applicationCategory": "BusinessApplication",
      "datePublished": "2014-04-01T08:32:29-08:00",
      "description": "Free time tracking, employee scheduling, hiring, and team management tools for small (but mighty) businesses.",
      "operatingSystem":"Web platform, Windows, Mac OS X, Linux, iOS, Android",
      "url":"https://joinhomebase.com/",
      "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "USD"
			},
      "image": [
        "https://joinhomebase.com/wp-content/uploads/2020/02/timeclock-3-1-1-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/05/hiring-on-2.png"
       ],
      "featureList":"https://joinhomebase.com/features/employee-scheduling/",
      "screenshot": "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
      "softwareHelp": "https://joinhomebase.com/homebase-support/",
      "author":{  
          "@type":"Organization",
          "name":"Homebase",
          "url":"https://joinhomebase.com/",
          "logo":{
            "@type":"ImageObject",
            "url":"https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
            "width":"256px",
            "height":"256px"
          }
      },
      "video":{  
          "@type":"VideoObject",
          "caption":"Getting started with Homebase",
          "thumbnailUrl":"https://img.youtube.com/vi/qmk18_LnLBU/maxresdefault.jpg",
          "contentUrl":"https://www.youtube.com/watch?v=qmk18_LnLBU",
          "name":"Free Employee Scheduling, Timesheets, Time Clock, Hiring, and Team Communication App | Homebase Demo",
          "description":"Homebase makes work easier for 100,000+ small (but mighty) businesses with everything they need to manage an hourly team: employee scheduling, time clocks, team communication, hiring, onboarding, and compliance. Learn more and sign up for free at joinhomebase.com.",
          "uploadDate":"2018-09-24"
      },
      "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": "4.8",
         "reviewCount": "15821"
      },
      "review": [
        {
          "@type": "Review",
          "author":
          {
            "@type": "Person",
            "name": "Danny Del Campo"
          },
          "datePublished": "2020-06-10",
          "description": "User friendly yet has very advanced settings for those who need more control. Has options for location tracking, time cards are accurate, and able to track PTO simply.",
          "name": "Great scheduling and HR software for small business",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        },
        {
          "@type": "Review",
          "author": 
          {
            "@type": "Person",
            "name": "Samantha Powell"
          },
          "datePublished": "2019-04-18",
          "description": "This product is great for creating schedules and keeping track of staff. The phone app is a great way to see posted schedules, requested time off, and estimated pay!",
          "name": "Great product",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        }
      ]
    }
 </script>


<div class="container" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;
            /* --------------------------------------------
              Hero
            -------------------------------------------- */
            if ( get_row_layout() == 'flex_hero' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline                 = get_sub_field('headline');
                $subheadline              = get_sub_field('subheadline');
                $sign_up_text             = (get_sub_field('form_button_text')) ? get_sub_field('form_button_text') : 'Get started';
                $sign_up_url             = (get_sub_field('form_action')) ? get_sub_field('form_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
                $hero_image_desktop       = get_sub_field('hero_image_desktop');
                $hero_image_mobile       = get_sub_field('hero_image_mobile');
                ?>

                <div class="section col-2-section section-hero <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-6 large-6 col-2-left-col text-left">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1>' . $headline . '</h1>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        echo '<h3>' . $subheadline . '</h3>';
                      endif;?>

                      <form action="<?php echo $sign_up_url; ?>"
											  id="home-signup-form"
											  method="GET"
											  class="home-form"
                      >
                        <div class="row">
                            <div class="columns medium-8">
                              <input class="homeform"
                                  aria-label="email address"
                                  type="email"
                                  name="email"
                                  placeholder="Email address"
                              />
                            </div>
                            <div class="columns medium-4">
                              <input type="submit"
                                  aria-label="submit"
                                  id="create-account"
                                  name="Submit"
                                  class="primary-cta buttonsbn"
                                  value="<?php echo $sign_up_text; ?>"
                              />
                            </div>
                        </div>
                    </form>
                  </div>

                    <?php
                    // image
                    if ($hero_image_desktop || $hero_image_mobile ) : ?>
                      <div class="columns medium-6 large-5 text-right col-2-right-col">
                        <div class="col-2-img img-desktop">
                          <img class="lazyload" data-src="<?php echo $hero_image_desktop['url']; ?>" alt="<?php echo $hero_image_desktop['alt']; ?>">
                        </div>
                        <div class="col-2-img img-mobile">
                          <img class="lazyload" data-src="<?php echo $hero_image_mobile['url']; ?>" alt="<?php echo $hero_image_mobile['alt']; ?>">
                        </div>
                      </div>
                    <?php endif; ?>

                  </div>
                </div>
              <?php endif; ?>


            <?php
            /* --------------------------------------------
              Free Basic Plan
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_free_plan' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $left_text            = get_sub_field('left_text');
                $right_text            = get_sub_field('right_text');
                $add_button         = get_sub_field('add_button');
                $button_text      = get_sub_field('button_text');
                $link_url            = get_sub_field('link_url');
                $special_text            = get_sub_field('special_text');
                ?>

                <div class="section section-free-plan <?php echo ($section_index)?>">
                  <div class="row main-wrapper">
                    <div class="columns medium-7 large-5 large-offset-2 col-left text-left">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2 class="lazyload">' . $headline . '</h2>';
                      endif;

                      if ($left_text) :
                        echo  $left_text;
                      endif;?>
                    </div>

                    <div class="columns medium-5 large-4 col-right">
                      <div class="right-text-wrapper">
                        <?php if ($right_text) :
                          echo  $right_text;
                        endif;?>
                      </div>
                    </div>
                    
                    <div class="columns medium-10 large-8 medium-offset-1 large-offset-2 col-services">
                      <div class="services-container">
                        <?php if( have_rows('service_boxes') ): ?>
                          <?php  while ( have_rows('service_boxes') ) : the_row(); 
                            $service_image = get_sub_field('service_image');
                            $service_text = get_sub_field('service_text');
                          ?>
                            <li class="service-item">
                              <div class="img-service">
                                <img class="lazyload" data-src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
                              </div>
                              <div class="service_text"><?php echo $service_text; ?></div>
                            </li>
                          <?php  endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php if( $add_button ): ?>
                      <div class="columns col-btn">
                        <div class="button-wrapper">
                          <a href="<?php echo $link_url; ?>" class="button highlighted"><?php echo $button_text?></a>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="row special">
                    <div class="columns col-left medium-5 large-offset-1 large-4">
                      <div class="special-text">
                        <?php echo $special_text; ?>
                      </div>
                    </div>
                    <div class="columns col-right medium-8 large-7">
                      <div class="special-container">
                        <?php if( have_rows('special_list') ): ?>
                          <ul class="wrapper">
                          <?php  while ( have_rows('special_list') ) : the_row(); 
                          ?>
                            <li class="special-item">
                              <?php echo get_sub_field('special_item'); ?>
                            </li>
                          <?php  endwhile; ?>
                          </ul>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Other Plans
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_other_plans' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline      = get_sub_field('subheadline');
                $bill_monthly     = get_sub_field('bill_monthly');
                $bill_annually    = get_sub_field('bill_annually');
                $save             = get_sub_field('save');
                $footer_text      = get_sub_field('footer_text');
                ?>

                <div class="section section-other-plans <?php echo ($section_index)?>">
                  <div class="row header">
                    <div class="columns">                    
                        <h2><?php echo $headline; ?></h2>
                        <h3><?php echo $subheadline; ?></h3>
                        <div class="swith-bill-mode">
                            <div class="bill-text monthly"><?php echo $bill_monthly; ?></div>
                            <label class="pure-material-switch">
                                <input type="checkbox" id="pricing-toggle" checked>
                                <span></span>
                            </label>
                            <div class="bill-text annually active"><?php echo $bill_annually; ?></div>
                            <span class="save-text"><?php echo $save; ?></span>
                        </div>
                    </div>
                  </div>
                  <div class="row pricing-tables">
                    <div class="columns medium-12 large-10 large-offset-1">
                      <?php if( have_rows('pricing_tables') ): ?>
                        <div class="pricing-tables-container">
                          <?php  while ( have_rows('pricing_tables') ) : the_row(); 
                            $hide_table = get_sub_field('hide_table');
                            $plan_title = get_sub_field('plan_title');
                            $plan_meta = get_sub_field('plan_meta');
                            $monthly_price = get_sub_field('monthly_price');
                            $annually_price = get_sub_field('annually_price');
                            $unit = get_sub_field('unit');
                            $summary = get_sub_field('summary');
                            $plus_text = get_sub_field('plus_text');
                            $add_button = get_sub_field('add_button');
                            $add_toptag = get_sub_field('add_toptag');
                            $add_tooltip = get_sub_field('add_tooltip');
                            $button_text = get_sub_field('button_text');
                            $link_url = get_sub_field('link_url');
                            $top_tag_text = get_sub_field('top_tag_text');
                            $tooltip_text = get_sub_field('tooltip_text');
                          ?>
                           <?php if (!$hide_table) : ?>
                              <div class="pricing-plane-wrapper <?php echo ($add_toptag) ? 'pricing-plan-tagged' : ''; ?>">
                                <div class="pricing-top-wrapper">
                                  <?php
                                  // top tag
                                  if ($add_toptag) : ?>
                                    <div class="plan-toptag">
                                      <span><?php echo $top_tag_text; ?></span>
                                    </div>
                                  <?php endif; ?>

                                  <?php if ($add_tooltip) : ?>
                                    <div class="plan-tooltip">
                                      <span><?php echo $tooltip_text; ?></span>
                                    </div>
                                  <?php endif; ?>
                                </div>                               

                                <div class="pricing-plan-table">
                                  
                                  <?php
                                  // column title
                                  if ($plan_title) : ?>
                                    <h3 class="plan-title">
                                      <span><?php echo $plan_title; ?></span>
                                    </h3>
                                  <?php endif; ?>

                                  <div class="plan-body">
                                      <div class="plan-price">
                                        <h2 class="plan-price-value"  annual="<?php echo $annually_price; ?>" monthly="<?php echo $monthly_price; ?>"><?php echo $annually_price; ?><span><?php echo $unit; ?></span></h2>
                                      </div>       
                                      <div class="plan-meta">
                                        <?php echo $plan_meta ; ?>
                                      </div>

                                      <?php if($summary): ?>
                                        <div class="plan-summary">
                                            <?php echo $summary; ?>
                                        </div>
                                      <?php endif; ?>

                                    <?php
                                    // list
                                    if (have_rows('provided_services')) : ?>
                                      <ul class="plan_services-list">
                                        <?php while ( have_rows('provided_services') ) : the_row(); ?>
                                          <li><?php the_sub_field('service'); ?></li>
                                        <?php endwhile; ?>
                                      </ul>
                                    <?php endif; ?>

                                    <?php if($plus_text) : ?>
                                    <div class="plan-plus"><?php echo $plus_text; ?></div>
                                    <?php endif; ?>

                                    <?php if($add_button) : ?>
                                    <a href="<?php echo $link_url; ?>" target="_blank" class="button">
                                      <?php echo $button_text; ?>
                                    </a>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            <?php endif; ?>

                          <?php  endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="row footer">
                    <div class="columns medium-offset-1 medium-10">
                      <?php if($footer_text) : ?>
                      <div class="footer-container">
                        <div class="footer-wrapper">
                          <p><?php echo $footer_text; ?></p>
                        </div>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Optinal Add-ons
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_optional_addons' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline            = get_sub_field('subheadline');
                ?>

                <div class="section section-optional-addons <?php echo ($section_index)?>">
                  <div class="row header">
                    <div class="columns medium-10 medium-offset-1">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2>' . $headline . '</h2>';
                      endif;?>
                    </div>
                  </div>
                  <div class="row addons">
                    <div class="columns medium-12 large-offset-1 large-10">
                      <div class="addons-container">
                        <?php if( have_rows('addons') ): ?>
                          <?php  while ( have_rows('addons') ) : the_row(); 
                            $addon_image = get_sub_field('addon_image');
                            $title = get_sub_field('title');
                            $price = get_sub_field('price');
                            $short_description = get_sub_field('short_description');
                            $long_description = get_sub_field('long_description');
                          ?>
                            <div class="addon-item">
                              <div class="addon-header">
                                <div class="addon-title"><?php echo $title; ?></div>
                                <div class="addon-price"><?php echo $price; ?></div>
                              </div>
                              <div class="addon-img">
                                <img class="lazyload" data-src="<?php echo $addon_image['url']; ?>" alt="<?php echo $addon_image['alt']; ?>">
                              </div>
                              <div class="addon-desc">
                                <div class="addon-short"><?php echo $short_description; ?></div>
                                <div class="addon-long"><?php echo $long_description; ?></div>
                              </div>
                            </div>
                          <?php  endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Contact us banner
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_contact_banner' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $text            = get_sub_field('text');
                $button_text            = get_sub_field('button_text');
                $button_link            = get_sub_field('button_link');
                ?>

                <div class="section section-contact-banner <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-10 medium-offset-1">
                      <div class="banner-container">
                        <div class="banner-wrapper">
                          <?php
                          // headline
                          if ($text) :
                            echo '<p>'.$text.'</p>';
                          endif;?>

                          <div class="button-wrapper">
                            <a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php
            /* --------------------------------------------
              Pricing details
            -------------------------------------------- */
            elseif ( get_row_layout() == 'pricing_detail' ) : ?>
              <?php
                $headline         = get_sub_field('headline');
              ?>

              <div class="pricing-detailed" id="pricing-detailed">
                <div class="row header">
                  <div class="columns medium-10 medium-offset-1">
                    <?php
                      // headline
                    if ($headline) :
                      echo '<h2 class="lazyload">' . $headline . '</h2>';
                    endif;?>
                  </div>
                </div>
                <div class="row table">
                  <div class="columns medium-10 medium-offset-1">
                          <div class="table-scroll">
                              <table>
                                  <thead>
                                      <tr>
                                          <th width="270" class="empty-cell"><div></div></th>
                                          <?php if ( have_rows('columns') ) :
                                                  $count_colums = 0;
                                                  $plans_popular = array('basic'=>false, 'essentials' => false, 'plus'=>false, 'allinone'=>false);
                                                  $plan_popular_index = 0;
                                                  while ( have_rows('columns') ) : the_row();
                                                      if (get_row_layout() == 'column') : $count_colums++; ?>

                                                          <?php
                                                          $hide_column        = get_sub_field('hide_column');
                                                          $add_top_tag        = get_sub_field('add_top_tag');
                                                          $top_tag_text       = (get_sub_field('top_tag_text')) ? get_sub_field('top_tag_text') : 'RECOMMENDED';
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


                                          <th width="170" class="bg--white">
                                          <div class="text--center">
                                              <?php if ($add_top_tag && $top_tag_text) : ?>
                                                  <h3 class="pricing-top-tag <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                                                      <span><?php echo $top_tag_text; ?></span>
                                                  </h3>
                                              <?php endif; ?>
                                              <?php if ($pricing_plan_title) : ?>
                                                  <h3 class="pricing-col-title <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                                                      <span><?php echo $pricing_plan_title; ?></span>
                                                  </h3>
                                              <?php endif; ?>
                                              <div class="pricing-plan-body <?php echo ($add_top_tag) ? 'popular' : ''; ?>">
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
                                        echo '<tr>';
                                                for($i=0;$i<$count_colums+1;$i++) {
                                                    echo '<td></td>';
                                                }
                                        echo '</tr>';

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

                                                      $plans_has_feature = array('basic'=>false, 'essentials' => false, 'plus'=>false, 'allinone'=>false);
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
                </div>
              
            <?php
            /* --------------------------------------------
              Customer Support
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_customer_support' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $title                    = get_sub_field('title');
                $headline                 = get_sub_field('headline');
                $subheadline              = get_sub_field('subheadline');
                $image_desktop             = (get_sub_field('image_desktop'));
                $image_mobile             = (get_sub_field('image_mobile'));
                $text                     = get_sub_field('text');
                ?>

                <div class="section col-2-section section-customer-support <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-5 col-2-left-col">
                      <?php if ($image_desktop || $image_mobile ) : ?>
                        <div class="col-2-img img-desktop">
                          <img class="lazyload" data-src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">
                        </div>
                        <div class="col-2-img img-mobile">
                          <img class="lazyload" data-src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="columns medium-7 large-5 col-2-right-col text-left">
                      <?php
                      // headline
                      if ($title) :
                        echo '<h3>' . $title . '</h3>';
                      endif;

                      if ($headline) :
                        echo '<h2>' . $headline . '</h2>';
                      endif;

                      // 
                      if ($text) :
                        echo '<p>' . $text . '</p>';
                      endif;?>

                      <?php if( have_rows('contact_info') ): ?>
                      <div class="contact-info-wrapper">
                        <?php  while ( have_rows('contact_info') ) : the_row(); 
                          $icon = get_sub_field('icon');
                          $contact_method = get_sub_field('contact_method');
                          $method_text = get_sub_field('method_text');
                          $method_link = get_sub_field('method_link');
                        ?>
                          <div class="contact-info">
                            <div class="contact-method"><?php echo $contact_method; ?></div>
                            <div class="method-text"><a href="<?php echo $method_link; ?>"><?php echo $method_text; ?></a></div>
                            <div class="contact-icon">
                              <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </div>
                          </div>
                        <?php  endwhile; ?>
                      </div>
                      <?php endif; ?>
                    </div>

                  </div>
                </div>
              <?php endif; ?>
            
            <?php
            /* --------------------------------------------
              Review
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_review' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline      = get_sub_field('subheadline');
                $image_desktop            = get_sub_field('image_desktop');
                $image_mobile            = get_sub_field('image_mobile');
                ?>

                <div class="section col-2-section section-review <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-6 col-2-left-col text-left">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2 class="lazyload">' . $headline . '</h2>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        echo '<h3>' . $subheadline . '</h3>';
                      endif;?>
                    </div>
                    <?php
                    // image
                    if ($image_desktop || $image_mobile) : ?>
                      <div class="columns medium-6 col-2-right-col">
                        <div class="col-2-img img-desktop">
                          <img class="lazyload" data-src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">
                        </div>
                        <div class="col-2-img img-mobile">
                          <img class="lazyload" data-src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="row">
                    <div class="reviews medium-12 large-offset-2 large-10">
                      <?php if ( have_rows('reviews') ) :
                          while ( have_rows('reviews') ) : the_row();
                              $score = get_sub_field('score');
                              $logo = get_sub_field('logo');
                              echo '      <div class="columns medium-3 text-center review">';
                              echo '			  <a href="'.get_sub_field('link_url').'" target="_blank">';
                              echo '        <div class="review-content">';
                              echo '          <div class="score"><img class="lazyload" alt="' . $score['alt'] . '"  data-src="' . $score['url'] . '" /></div>';
                              echo '          <div class="logo"><img class="lazyload" alt="' . $logo['alt'] . '"  data-src="' . $logo['url'] . '" /></div>';
                              echo '          <div class="description">' . get_sub_field('description') . '</div>';
                              echo '        </div>';
                              echo '			  </a>';
                              echo '      </div>';
                          endwhile;
                      endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Signup bumber
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_singup_bumber' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline            = get_sub_field('headline');
                $subheadline            = get_sub_field('subheadline');
                $button_text            = get_sub_field('button_text');
                $action_url            = get_sub_field('action_url');
                ?>

                <div class="section section-sigup-bumber <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-10 medium-offset-1">
                      <div class="sigup-container">
                        <div class="sigup-wrapper">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif; ?>

                          <div class="form-wrapper">
                            <form action="<?php echo $action_url; ?>"
                              id="home-signup-form"
                              method="GET"
                              class="home-form"
                            >
                              <div class="row">
                                  <div class="columns medium-8">
                                    <input class="homeform"
                                        aria-label="email address"
                                        type="email"
                                        name="email"
                                        placeholder="Email address"
                                    />
                                  </div>
                                  <div class="columns medium-4">
                                    <input type="submit"
                                        aria-label="submit"
                                        id="create-account"
                                        name="Submit"
                                        class="primary-cta buttonsbn"
                                        value="<?php echo $button_text; ?>"
                                    />
                                  </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php endif; //end if layout ?>
        <?php endwhile; //end while main flex content ?>
    <?php endif; //end if have rows mail flex content ?>

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



      jQuery('.plan-price-value').each(function() {
        jQuery(this).html( jQuery(this).attr(type) );
      });

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
      var heightTh = jQuery('th.bg--white div').height();

      if( jQuery('th.empty-cell div').hasClass('sticky')) {
        jQuery('th.empty-cell div').css( "height", (heightTh + 1) + 'px' );
      }

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
 
  var tempTableO = 0;
  var tempTableH = 0;
	jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();
        var pricingDTOffset = jQuery(".pricing-detailed .table-scroll").offset().top;
        var pricingDTHeight = jQuery(".pricing-detailed .table-scroll").outerHeight();
        var top = jQuery(".main-wrapper header").outerHeight() + jQuery(".topbannernotice").outerHeight();
            //console.log("scroll: " + scroll);

        if (jQuery(window).width() > 767) {
          if(!jQuery("thead tr th>div").hasClass("sticky")) {
            if((scroll + top) >= pricingDTOffset) {
                jQuery('thead tr th').css('opacity',1);
                jQuery("thead tr th>div").addClass("sticky");
                jQuery("thead tr th>div").css('top', top+'px');
                var stickyH = jQuery("thead tr th.bg--white>div").outerHeight();
                jQuery('.pricing-detailed .table-scroll').css('margin-top', jQuery("thead tr th.bg--white>div").outerHeight());
                tempTableO = pricingDTOffset;
                tempTableH = pricingDTHeight;
            }
          }
          else {
            if((scroll + top) < tempTableO) {
              jQuery("thead tr th>div").removeClass("sticky");
              jQuery("thead tr th>div").css('top', '0');
              jQuery('.pricing-detailed .table-scroll').css('margin-top','0');
            }
            else {
              if((scroll + top) >= tempTableO + tempTableH - jQuery("thead tr th.bg--white>div").outerHeight()) {
                jQuery('thead tr th').css('opacity',0);
              }
              else {
                jQuery('thead tr th').css('opacity',1);
              }
            } 
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