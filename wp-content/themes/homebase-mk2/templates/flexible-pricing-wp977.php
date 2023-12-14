<?php
/*
Template Name: Pricing-WP977 - Flexible
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


<main id="primary" class="site-main" role="document">

<?php
if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $add_left_margin          = get_sub_field('add_left_margin');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $button_text              = get_sub_field('button_text');
        $form_link                = (get_sub_field('form_link')) ? get_sub_field('form_link') : 'https://app.joinhomebase.com/onboarding/sign-up';
        $hero_image               = get_sub_field('image');
        ?>

        <div class="section section-hero">
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 <?php echo ($add_left_margin) ? 'col-sm-5 offset-sm-1': 'col-sm-6'; ?> col-left">
                <div class="col-inner">
                  <div class="text-wrap">
                  <?php
                  // headline
                  if ($headline) :
                    echo '<h1 class="fw-black">' . $headline . '</h1>';
                  endif;

                  // subheadline
                  if ($subheadline) :
                    echo '<h2 class="subheading">' . $subheadline . '</h2>';
                  endif;?>

                    <form action="<?php echo $form_link; ?>"
                      id="hero-signup-form"
                      method="GET"
                      class="email-signup-form"
                    >
                      <div class="form-item input">
                        <input class="homeform"
                            aria-label="email address"
                            type="email"
                            name="email"
                            placeholder="Email address"
                        />
                      </div>
                      <div class="form-item">
                        <button type="submit"
                            aria-label="submit"
                            id="create-account"
                            name="Submit"
                            class="primary"
                        ><?php echo $button_text; ?></button>
                      </div>
                    </form> 
                  </div>
                </div>
              </div>

              
              <div class="col col-12 col-sm-6 col-md-5 offset-md-1 col-right">
                <div class="col-inner">
                  <?php if ($hero_image ) : ?>
                  <div class="img-wrap">
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Free service widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_free_service' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $button_text              = get_sub_field('button_text');
        $button_link              = get_sub_field('button_link');
        ?>

        <div class="section section-free-service">
          <div class="container">
            <div class="row">
              <div class="col col-12 col-sm-5 offset-sm-1 col-left">
                <div class="col-inner">
                  <div class="text-wrap">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif; ?>

                  <?php if ($headline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif; ?>

                  <?php if ($button_link) : ?>
                    <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                  <?php endif; ?>

                  </div>
                </div>
              </div>

              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <?php if ( have_rows('free_services') ) : echo '<div class="service-grid">';
                      while ( have_rows('free_services') ) : the_row();
                        $icon       = get_sub_field('icon');
                        $text       = get_sub_field('text');
                  ?>
                    <div class="service-item">
                      <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                      <span><?php echo $text; ?></span>
                    </div>
                  <?php 
                      endwhile;
                      echo '</div>';
                    endif; 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Payroll CTA widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_payroll_cta' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $image                    = get_sub_field('image');
        $features                 = get_sub_field('features');
        $footertext               = get_sub_field('footertext');
        $button_text              = get_sub_field('button_text');
        $button_link              = get_sub_field('button_link');
        ?>

        <div class="section section-payroll-cta">
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h3 class="fw-black"><?php echo $headline; ?></h3>
                  <?php endif; ?>

                  <?php if ($headline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="row row-2cols ">
              <div class="col col-12 col-sm-6 col-img">
                <div class="col-inner">
                  <div class="img-wrapper">
                    <?php if ($image) : ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-text">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php if ($features)
                      echo $features; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-footer">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="content-wrapper">
                    <?php if ($footertext) : ?>
                      <h3 class="subheading fw-extra"><?php echo $footertext; ?></h3>
                    <?php endif; ?>

                    <?php if ($button_link) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Free other service widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_free_o_service' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-fo-servie">
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="section-header">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h3 class="fw-black">' . $headline . '</h3>';
                    ?>
                  </div>

                  <?php
                    if ( have_rows('other_services') ) : 
                      echo '<div class="other-services-grid">';
                      while ( have_rows('other_services') ) : the_row();
                        $text       = get_sub_field('text');
                  ?>
                    <div class="service-item"><span><?php echo $text; ?></span></div>
                  <?php   
                      endwhile;
                      echo '</div>';
                    endif; 
                  ?>
                  <div class="section-footer">
                    <a href="<?php echo $button_link; ?>" class="button primary"><?php echo $button_text; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    

    <?php
    /* --------------------------------------------
      Pricing table
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_pricing_table' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $bill_monthly             = get_sub_field('bill_monthly');
        $bill_annually            = get_sub_field('bill_annually');
        $save                     = get_sub_field('save');
        $add_link                 = get_sub_field('add_link');
        $f_link_text              = get_sub_field('f_link_text');
        $f_link_url               = get_sub_field('f_link_url');
        $show_crossed_out         = get_sub_field('show_crossed_out');
        $pricing_table_back_image = get_sub_field("pricing_table_back_image");
        $footer_left_text         = get_sub_field("footer_left_text");
        $footer_right_text        = get_sub_field("footer_right_text");
        $footer_bottom_text       = get_sub_field("footer_bottom_text");
        $footer_plus_icon         = get_sub_field("footer_plus_icon");
        $pricing_table_back_image = ( isset($pricing_table_back_image['url']) )? "background-image: url('". $pricing_table_back_image['url'] ."');" : "";
        $footer_plus_icon         = ( isset($footer_plus_icon['url']) )? $footer_plus_icon['url'] : "";
        ?>

        <div class="section section-pricing-teable">
          <div class="container">
            <div class="row header">
              <div class="col col-12">
                <div class="col-inner">
                  <h3 class="fw-black"><?php echo $headline; ?></h3>
                 
                  <?php if( have_rows('features_after_heading') ): ?>
                    <ul class="features_after_heading_49837">
                      <?php  while ( have_rows('features_after_heading') ) : the_row(); ?>
                        <li><span><?php the_sub_field('features_text_after_heading'); ?></span></li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>


                  <div class="hb-new-toggle-btn">
                    <div class="hb-toggle-row" data-monthly="<?php echo $bill_monthly; ?>" data-annual="<?php echo $bill_annually; ?>">
                      <div class="hb-toggle-col">Monthly</div>
                      <div class="hb-toggle-col active">Annual</div>
                    </div>
                      <div class="save-text">
                        <img src="<?php echo $save['url']; ?>" alt="<?php echo $save['alt']; ?>">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrap-849374" style="<?= $pricing_table_back_image ?>">
            <div class="container">
              <div class="row pricing-tables">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if( have_rows('pricing_tables') ): ?>
                      <div class="pricing-tables-container">
                        <?php  while ( have_rows('pricing_tables') ) : the_row(); 
                          $hide_table = get_sub_field('hide_table');
                          $plan_title = get_sub_field('plan_title');
                          $plan_meta = get_sub_field('plan_meta');
                          $annually_save_text = get_sub_field('annually_save_text');
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
                          $addon_headline = get_sub_field('addon_headline');
                          $addon_subheadline = get_sub_field('addon_subheadline');
                          $addon_description = get_sub_field('addon_description');
                          $addon_offer = get_sub_field('addon_offer');
                          $show_addon = get_sub_field('show_addon');
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
                                <div class="plan-header">
                                  <?php if ($plan_title) : ?>
                                    <h3 class="plan-title"><?php echo $plan_title; ?></h3>
                                  <?php endif; ?>

                                  <?php if($summary): ?>
                                    <div class="plan-summary">
                                        <?php echo $summary; ?>
                                    </div>
                                  <?php endif; ?>
                                </div>

                                <div class="plan-body">
                                  <div class="plan-price">
                                    <?php if($show_crossed_out) : ?>
                                    <div class="crossed-out-price"><?php echo str_replace("<sup>$</sup>", "$", $monthly_price) ?></div>
                                    <?php endif; ?>
                                    <h3 class="fw-black plan-price-value"  annual="<?php echo $annually_price; ?>" monthly="<?php echo $monthly_price; ?>"><?php echo $annually_price; ?></h3>

                                    <div class="plan-meta">
                                      <?php echo $plan_meta ; ?>
                                    </div>

                                    <?php if($annually_save_text): ?>
                                        <div class="annually-save-text">
                                          <?php echo $annually_save_text ; ?>
                                        </div>
                                    <?php endif; ?>
                                  </div>

                                  <?php
                                  // list
                                  if (have_rows('provided_services')) : ?>
                                    <ul class="plan_services-list">
                                      <?php while ( have_rows('provided_services') ) : the_row(); ?>
                                        <li><?php the_sub_field('service'); ?></li>
                                      <?php endwhile; ?>
                                    </ul>
                                  <?php endif; ?>

                                  <?php if($add_button) : ?>
                                  <a href="<?php echo $link_url; ?>" target="_blank" class="button" rel="noopener noreferrer">
                                    <?php echo $button_text; ?>
                                  </a>

                                  <?php if($plus_text) : ?>
                                    <div class="plan-plus"><?php echo $plus_text; ?></div>
                                  <?php endif; ?>

                                  <?php endif; ?> 
                                  <?php if($show_addon) : ?>                                                                                             
                                  <div class="plan-addon">
                                    <?php if ($addon_subheadline): ?> 
                                    <div class="subheadline micro">
                                      <?php echo $addon_subheadline; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($addon_headline): ?> 
                                    <div class="headline">
                                      <?php echo $addon_headline; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($addon_description): ?> 
                                    <div class="description">
                                      <?php echo $addon_description; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($addon_offer): ?> 
                                    <div class="offer">
                                      <?php echo $addon_offer; ?>
                                    </div>
                                    <?php endif; ?>
                                  </div>
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
              </div>
              <div class="footer">
                <div class="footer-container">
                  <img class="footer-plus-icon" src="<?= $footer_plus_icon ?>">
                  <div class="class-48734398">
                    <p class="footer-left-text"><?= $footer_left_text ?></p>
                    <p class="footer-right-text"><?= $footer_right_text ?></p>
                  </div>
                  <?= $footer_bottom_text ?>
                </div>
            </div>
            </div>
          </div>
        
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Optinal Add-ons
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_addons_widget' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline         = get_sub_field('headline');
        ?>

        <div class="section section-optional-addons ">
          <div class="container">
            <div class="row header">
              <div class="col col-12 col-sm-10 offset-sm-1">
                <div class="col-inner">
                <?php
                // headline
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
                endif;?>
                </div>
              </div>
            </div>
            <div class="row addons">
            <?php if( have_rows('addons') ): ?>
              <?php  while ( have_rows('addons') ) : the_row();
                $addon_image = get_sub_field('addon_image');
                $title = get_sub_field('title');
                $price = get_sub_field('price');
                $description = get_sub_field('description');
              ?>
              <div class="col col-12 col-sm-4">
                <div class="col-inner">
                  <div class="addon-item">
                    <div class="addon-img">
                      <img src="<?php echo $addon_image['url']; ?>" alt="<?php echo $addon_image['alt']; ?>">
                    </div>
                    <div class="addon-title"><?php echo $title; ?></div>
                    <div class="addon-price"><?php echo $price; ?></div>
                    <div class="addon-desc"><?php echo $description; ?></div>
                  </div>
                </div>
              </div>
              <?php  endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $align                  = get_sub_field('align');
      $stype                  = get_sub_field('stype');
      $content                = get_sub_field('content');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner">
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="banner-wrapper <?php echo 'aligned-'.$align; ?> <?php echo 'shape-'.$stype; ?>">
                    <div class="bg-layer">
                      <div class="bg-inner">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="shape-3"></div>
                      </div>
                    </div>
                    <?php if ($content) : ?>
                      <h3 class="normal"><?php echo $content; ?></h3>
                    <?php endif; ?>
                    <?php if ($button_text) : ?>
                      <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Rating widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_rating' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $id                 = get_sub_field('widget_id');
      $type               = get_sub_field('widget_type');
      $headline           = get_sub_field('headline');
      $subheadline        = get_sub_field('subheadline');
      $r_date             = get_sub_field('r_date');
      ?>

        <div class="section section-rating <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
          <div class="bglayer"></div>
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 <?php echo ($type == 'fullbg') ? 'col-xl-4' : ''; ?>">
                <div class="col-inner">
                  <div class="rating-header">
                    <?php

                    if ($headline) :
                      echo '<h2 class="'.(($type == "fullbg") ? 'large' : '').' fw-black">' . $headline . '</h2>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="normal '.(($type == "halfbg") ? 'subheading' : '').'">' . $subheadline . '</h3>';
                    endif;?>                      
                  </div>
                </div>
              </div>
              <div class="col col-12 <?php echo ($type == 'fullbg') ? 'col-xl-8' : ''; ?>">
                <div class="col-inner">
                  <div class="col-board-wrapper">
                    <div class="rating-container">
                      <div class="rating-board">
                        <?php if ( have_rows('ratings') ) : $index = 0;
                            while ( have_rows('ratings') ) : the_row();
                                $r_image        = get_sub_field('r_image');
                                $r_label        = get_sub_field('r_label');
                                $r_quote        = get_sub_field('r_quote');
                                $p_logo         = get_sub_field('p_logo');
                                $p_url          = get_sub_field('p_url');
                            if (($type == 'fullbg') && ($index == 3)) break;
                        ?>
                          
                            <div class="rating-box">
                              <div class="rscore"><object data="<?php echo $r_image['url']; ?>" type="image/svg+xml" alt="<?php echo $r_image['alt'];?>"><?php echo $r_image['alt'];?></object></div>
                              <div class="rlabel"><?php echo $r_label; ?></div>
                              <div class="rquote"><?php echo $r_quote; ?></div>
                              <div class="plogo">
                                <?php if ($p_url) : ?><a href="<?php echo $p_url; ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                                <img alt="<?php echo $p_logo['alt']; ?>" src="<?php echo $p_logo['url']; ?>" />
                                <?php if ($p_url) : ?></a><?php endif; ?>
                              </div>
                            </div>
                          </a>
                        <?php 
                            $index++;
                            endwhile;
                          endif; 
                        ?>
                      </div>

                      <?php if ($r_date) : ?>
                        <div class="rating-date text-center micro">
                          <?php echo $r_date; ?>
                        </div>
                      <?php endif; ?>
                    </div>
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
        $bill_monthly     = get_sub_field('bill_monthly');
        $bill_annually    = get_sub_field('bill_annually');
        $save             = get_sub_field('save');
      ?>

      <div id="hb-pricing-detail" class="section section-pricing-detailed">
        <div class="container">
          <div class="row header">
            <div class="col col-12">
              <div class="col-inner">
                <?php
                  // headline
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
                endif;?>

                <div class="swith-bill-mode">
                  <div class="bill-text monthly"><span><?php echo $bill_monthly; ?></span></div>
                  <label class="pure-material-switch" for="pricing-detail-toggle">
                      <input type="checkbox" id="pricing-detail-toggle" checked>
                      <span></span>
                  </label>
                  <div class="bill-text annually active">
                    <span><?php echo $bill_annually; ?></span>
                    <div class="save-text">
                      <img src="<?php echo $save['url']; ?>" alt="<?php echo $save['alt']; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row table hide-for-sm">
            <div class="col col-12"><div class="col-inner">
              <div class="table-scroll">
                <table id="pricing-d-table" cellspacing="0" cellpadding="0">
                  <thead>
                    <tr>
                      <th width="250" class="empty-cell"><div></div></th>
                      <?php if ( have_rows('columns') ) :
                          $count_colums = 0;
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
                              $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                              $button_link        = (get_sub_field('button_link'));
                              $bottom_text        = get_sub_field('bottom_text');

                              if($add_top_tag == true) $plan_popular_index = $count_colums;
                      ?>


                      <th width="167" class="<?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                      <div>
                          <?php if ($add_top_tag && $top_tag_text) : ?>
                              <h3 class="pricing-top-tag ">
                                  <span><?php echo $top_tag_text; ?></span>
                              </h3>
                          <?php endif; ?>
                          <?php if ($pricing_plan_title) : ?>
                            <span class="pricing-col-title"><?php echo $pricing_plan_title; ?></span>
                          <?php endif; ?>
                          <div class="pricing-plan-body">
                              <span class="pricing-price" annual="<?php echo $annual_price; ?>" monthly="<?php echo $monthly_price; ?>">
                                  <?php echo $annual_price; ?>
                              </span>

                              <span class="pricing-meta" annual="<?php echo $annual_meta; ?>" monthly="<?php echo $monthly_meta; ?>">
                                  <?php echo $annual_meta; ?>
                              </span>
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
                          $trcls = get_sub_field('add_details') ? 'expandable' : '';

                          echo  '<tr class="'.$trcls.'">
                                  <td class="pricing-feature-title"><div>
                                      <h4>' . get_sub_field('feature_title') . '</h4>
                                  </div></td>';
                                  
                                  $detail_count_columns = 0;
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
                                                if($plan_popular_index == $detail_count_columns)
                                                    $class='checked popular';
                                                else
                                                    $class='checked';
                                                break;
                                            }
                                        }
                                        if($detail_count_columns <= $count_colums) {
                                          if(get_sub_field('feature_title_with_check_mark')){
                                            echo    '<td class="' . $class . ' feature_title_with_check_mark"><div>'. get_sub_field('feature_title_with_check_mark') .'</div></td>';
                                          } else {
                                            echo    '<td class="' . $class . '"><div></div></td>';
                                          }
                                        }
                                    }
                                  } else if($feature_display_type = 'Text') {
                                      if( have_rows('plan_feature_text') ):
                                          while ( have_rows('plan_feature_text') ): the_row();
                                              
                                              $detail_count_columns++;
                                              if($detail_count_columns <= $count_colums) {
                                                  if($plan_popular_index == $detail_count_columns)
                                                    echo '<td class="text-center text-value popular"><div>' . get_sub_field('text_feature') . '</div></td>';
                                                  else
                                                    echo '<td class="text-center text-value"><div>' . get_sub_field('text_feature') . '</div></td>';
                                              }
                                          endwhile;
                                      endif;
                                  }

                            echo '</tr>';
                        if( get_sub_field('add_details') && have_rows('feature_details') ):
                          echo '<tr class="hidden-tr"><td><div class="expandable-content-wrap-pricing"><ul>';
                            while ( have_rows('feature_details') ): the_row();
                              echo '<li>'.get_sub_field('feature_item').'</li>';
                            endwhile;
                          echo '</ul></div></td>';
                          
                            foreach($plans_has_feature as $has_feature_index => $has_feature_value) {
                              
                              echo '<td class="expandable-check-marks"><div class="expandable-check-wrap">';
                              if($has_feature_value == 1){
                          
                                while ( have_rows('feature_details') ): the_row();

                                  echo '<div><img src="/wp-content/themes/homebase/images/check-mark-94387.svg"></div>';
                                
                                endwhile;
                              }
                              echo '</div></td>';
                            }

                          echo '</tr>';

                        endif;
                      endwhile;
                    endif;
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="empty-cell"><div></div></td>
                      <?php if ( have_rows('columns') ) :
                          while ( have_rows('columns') ) : the_row();
                            if (get_row_layout() == 'column') : 
                              $add_top_tag        = get_sub_field('add_top_tag');
                              $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                              $button_link        = (get_sub_field('button_link'));
                              $bottom_text        = get_sub_field('bottom_text');
                      ?>
                      <td class="<?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                        <div class="text-center">
                          <a href="<?php echo $button_link; ?>" target="_blank" class="button" rel="noopener noreferrer">
                              <?php echo $button_text; ?>
                          </a>
                        </div>
                      </td>
                      <?php       endif;
                              endwhile;
                          endif;
                      ?>
                    </tr>
                  </tfoot>
                </table>
              </div></div>
            </div>
          </div>
        </div>


        <div class="hb-pricing-detail-mobile-view">
          <div class="table-scroll">
            <table id="pricing-d-table" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <?php if ( have_rows('columns') ) :
                      $count_colums = 0;
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
                          $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                          $button_link        = (get_sub_field('button_link'));
                          $bottom_text        = get_sub_field('bottom_text');

                          if($add_top_tag == true) $plan_popular_index = $count_colums;
                  ?>


                  <th class="<?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                  <div class="wrap-after-th">
                      <?php if ($add_top_tag && $top_tag_text) : ?>
                          <h3 class="pricing-top-tag ">
                              <span><?php echo $top_tag_text; ?></span>
                          </h3>
                      <?php endif; ?>
                      <?php if ($pricing_plan_title) : ?>
                        <span class="pricing-col-title"><?php echo $pricing_plan_title; ?></span>
                      <?php endif; ?>
                      <div class="pricing-plan-body">
                          <span class="pricing-price" annual="<?php echo $annual_price; ?>" monthly="<?php echo $monthly_price; ?>">
                              <?php echo $annual_price; ?>
                          </span>

                          <!-- <span class="pricing-meta" annual="<?php //echo $annual_meta; ?>" monthly="<?php //echo $monthly_meta; ?>">
                              <?php //echo $annual_meta; ?>
                          </span> -->
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
                      $trcls = get_sub_field('add_details') ? 'expandable' : '';

                      echo  '<tr class="'.$trcls.'">
                              <td colspan="4" class="pricing-feature-title">
                                <div>
                                  <h4>' . get_sub_field('feature_title') . '</h4>
                                </div>
                              </td></tr><tr>';
                              
                              $detail_count_columns = 0;
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
                                            if($plan_popular_index == $detail_count_columns)
                                                $class='checked popular';
                                            else
                                                $class='checked';
                                            break;
                                        }
                                    }
                                    if($detail_count_columns <= $count_colums) {
                                     
                                      if(get_sub_field('feature_title_with_check_mark')){
                                        echo    '<td colspan="4" class="' . $class . ' feature_title_with_check_mark"><div>'. get_sub_field('feature_title_with_check_mark') .'</div></td>';
                                      } else {
                                        echo    '<td class="' . $class . '"><div></div></td>';
                                      }
                                    }
                                }
                              } else if($feature_display_type = 'Text') {
                                  if( have_rows('plan_feature_text') ):
                                      while ( have_rows('plan_feature_text') ): the_row();
                                          $detail_count_columns++;
                                          if($detail_count_columns <= $count_colums) {
                                              if($plan_popular_index == $detail_count_columns)
                                                  echo    '<td class="text-center text-value popular"><div>' . get_sub_field('text_feature') . '</div></td>';
                                              else
                                                  echo    '<td class="text-center text-value"><div>' . get_sub_field('text_feature') . '</div></td>';
                                          }
                                      endwhile;
                                  endif;
                              }

                        echo '</tr>';
                  endwhile;
                endif;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <?php if ( have_rows('columns') ) :
                      while ( have_rows('columns') ) : the_row();
                        if (get_row_layout() == 'column') : 
                          $add_top_tag        = get_sub_field('add_top_tag');
                          $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                          $button_link        = (get_sub_field('button_link'));
                          $bottom_text        = get_sub_field('bottom_text');
                  ?>
                  <td colspan="4" class="<?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                    <div class="text-center">
                      <a href="<?php echo $button_link; ?>" target="_blank" class="button" rel="noopener noreferrer">
                          <?php echo $button_text; ?>
                      </a>
                      <p class="pricing-detail-after-btn-txt">No credit card required</p>
                    </div>
                  </td>
                  <?php       endif;
                          endwhile;
                      endif;
                  ?>
                </tr>
              </tfoot>
            </table>
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
        $image                    = get_sub_field('image');
        $text                     = get_sub_field('text');
        ?>

        <div class="section section-customer-support">
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <?php if ($image) : ?>
                    <div class="col-2-img img-desktop">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col col-12 col-sm-6 offset-sm-1 col-right">
                <div class="col-inner">
                <?php
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
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
                      <div class="contact-icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                      </div>
                      <div class="contact-method"><?php echo $contact_method; ?></div>
                      <div class="method-text"><a href="<?php echo $method_link; ?>"><?php echo $method_text; ?></a></div>
                    </div>
                  <?php  endwhile; ?>
                </div>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Simple one column
    -------------------------------------------- */
    elseif ( get_row_layout() == 'simple_one_column' ) :
      if (!get_sub_field('hide_widget')) : 
        $id                 = get_sub_field('widget_id');
        $content            = get_sub_field('content');
        ?>
        <div class="section section-simple-one-column <?php echo ($id) ? "id='".$id."'" : '';?>">
          <div class="container-narrow">
            <?php if ($content) : ?>
              <div class="content"><?php echo $content; ?></div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    
    <?php
   /* --------------------------------------------
      FAQ
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_faq' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $id                     = get_sub_field('widget_id');
      $headline               = get_sub_field('headline');
      ?>

        <div class="section section-faq" <?php echo ($id) ? "id='".$id."'" : '';?>>
          <div class="container-narrow">
            <?php if ($headline) : ?>
              <h2 class="headline">
                <?php echo $headline; ?>
              </h2>
            <?php endif; ?>
            <?php if ( have_rows('items') ) : ?>
              <div class="faq-items">
                <?php while ( have_rows('items') ) : the_row();
                  $question    = get_sub_field('question');
                  $answer      = get_sub_field('answer');
                  $faq_field   = get_sub_field('faq_field');?>
                  <div class="faq-item">
                    <?php if ($faq_field) : ?>
                      <div class="faq-field">
                        <p class="micro"><?php echo $faq_field; ?></p>
                      </div>
                    <?php endif; ?>
                    <?php if ($question) : ?>
                      <div class="question">
                        <p><?php echo $question; ?></p>
                        <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                      </div>
                    <?php endif; ?>
                    <?php if ($answer) : ?>
                      <div class="answer">
                        <?php echo $answer; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php 
  
      global $schema;

      $schema = array(
      '@context'   => "https://schema.org",
      '@type'      => "FAQpage",
      'mainEntity' => array()
      );

      if ( have_rows('items') ) {
        while ( have_rows('items') ) : the_row();
          $questions = array(
            '@type'          => 'Question',
            'name'           => get_sub_field('question'),
            'acceptedAnswer' => array(
            '@type' => "Answer",
            'text' => get_sub_field('answer')
              )
              );
              array_push($schema['mainEntity'], $questions);
        endwhile;

      function blog_generate_faq_schema ($schema) {
        global $schema;
        if ($schema['mainEntity']) {
          echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
        }
      }
      add_action( 'wp_footer', 'blog_generate_faq_schema', 100 );
      }

      ?>


    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>


</main>
<?php get_footer(); ?>