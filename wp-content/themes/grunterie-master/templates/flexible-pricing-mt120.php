<?php
/*
Template Name: Pricing-MT120 - Flexible
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


<div class="container new-style" role="document">

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
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns <?php echo ($add_left_margin) ? 'medium-5 medium-offset-1': 'medium-6'; ?> col-left">
                <div class="column-inner">
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

                    <form action="<?php echo $form_link; ?>" id="hero-signup-form" method="GET" class="email-signup-form"?>
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

              
              <div class="columns medium-6 large-5 large-offset-1 col-right">
                <div class="column-inner">
                  <?php if ($hero_image ) : ?>
                  <div class="img-wrap">
                    <img class="lazyload" data-src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
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
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns medium-5 medium-offset-1 col-left">
                <div class="column-inner">
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

              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <?php if ( have_rows('free_services') ) : echo '<div class="service-grid">';
                      while ( have_rows('free_services') ) : the_row();
                        $icon       = get_sub_field('icon');
                        $text       = get_sub_field('text');
                  ?>
                    <div class="service-item">
                      <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
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
          <div class="row row-header">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <?php if ($headline) : ?>
                    <h3 class="fw-black"><?php echo $headline; ?></h3>
                  <?php endif; ?>

                  <?php if ($headline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-2cols row-flex row-small">
            <div class="row-container">
              <div class="columns medium-6 col-img">
                <div class="column-inner">
                  <div class="img-wrapper">
                    <?php if ($image) : ?>
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="columns medium-6 col-text">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php if ($features)
                      echo $features; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-footer">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
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
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
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
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $bill_monthly     = get_sub_field('bill_monthly');
        $bill_annually    = get_sub_field('bill_annually');
        $save             = get_sub_field('save');
        $add_link         = get_sub_field('add_link');
        $footer_text      = get_sub_field('footer_text');
        $f_link_text      = get_sub_field('f_link_text');
        $f_link_url       = get_sub_field('f_link_url');
        ?>

        <div class="section section-pricing-teable">
          <div class="row header">
            <div class="row-container">
              <div class="columns">
                <div class="column-inner">
                  <h3 class="fw-black"><?php echo $headline; ?></h3>
                  <div class="swith-bill-mode">
                      <div class="bill-text monthly"><span><?php echo $bill_monthly; ?></span></div>
                      <label class="pure-material-switch">
                          <input type="checkbox" id="pricing-toggle" checked>
                          <span></span>
                      </label>
                      <div class="bill-text annually active">
                        <span><?php echo $bill_annually; ?></span>
                        <div class="save-text">
                          <img class="lazyload" data-src="<?php echo $save['url']; ?>" alt="<?php echo $save['alt']; ?>">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row pricing-tables">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
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
                                  <h3 class="fw-black plan-price-value"  annual="<?php echo $annually_price; ?>" monthly="<?php echo $monthly_price; ?>"><?php echo $annually_price; ?></h3>

                                  <div class="plan-meta">
                                    <?php echo $plan_meta ; ?>
                                  </div>
                                </div>   

                                <div class="plan-divider"></div>

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
            </div>
          </div>
          <div class="row footer">
            <div class="row-container">
              <div class="columns medium-offset-1 medium-10">
                <div class="column-inner">
                  <div class="footer-container">
                  <?php if($footer_text) : ?>
                    <div class="footer-wrapper">
                      <?php echo $footer_text; ?>
                    </div>
                  <?php endif; ?>
                  <?php if($add_link) : ?>
                    <a class="text-link-arrow hide-for-small" href="<?php echo $f_link_url; ?>"><?php echo $f_link_text; ?></a>
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
      Optinal Add-ons
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_addons_widget' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline         = get_sub_field('headline');
        ?>

        <div class="section section-optional-addons ">
          <div class="row header">
            <div class="row-container">
              <div class="columns medium-10 medium-offset-1">
                <div class="column-inner">
                <?php
                // headline
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
                endif;?>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row addons">
            <div class="row-container">
            <?php if( have_rows('addons') ): ?>
              <?php  while ( have_rows('addons') ) : the_row(); 
                $addon_image = get_sub_field('addon_image');
                $title = get_sub_field('title');
                $price = get_sub_field('price');
                $description = get_sub_field('description');
              ?>
              <div class="columns medium-4">
                <div class="column-inner">
                  <div class="addon-item">
                    <div class="addon-img">
                      <img class="lazyload" data-src="<?php echo $addon_image['url']; ?>" alt="<?php echo $addon_image['alt']; ?>">
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
      Footer CTA banner
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
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
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
                      <a class="button secondary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
      Review widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_review' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $customer_review        = get_sub_field('customer_review');
      $customer_info          = get_sub_field('customer_info');
      $rating_text            = get_sub_field('rating_text');
      ?>

        <div class="section section-reviews">
          <div class="row row-small">
            <div class="row-container">
              <div class="column medium-12">
                <div class="column-inner">
                  <div class="reviews-header">
                    <?php

                    if ($subheadline) :
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                    endif;

                    if ($headline) :
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    endif;?>
                  </div>

                  <div class="row reviews-grid">
                    <div class="row-container">
                      <?php if ( have_rows('reviews') ) :
                          while ( have_rows('reviews') ) : the_row();
                              $score        = get_sub_field('score');
                              $logo         = get_sub_field('logo');
                              $text         = get_sub_field('text');
                              $link_url     = get_sub_field('link_url');
                      ?>
                        <div class="columns small-6 medium-3 text-center review-item">
                          <div class="column-inner">
                            <a href="<?php echo $link_url; ?>" target="_blank" rel="noreferrer">
                              <div class="review-box">
                                <div class="logo"><img class="lazyload" alt="<?php echo $logo['alt']; ?>"  data-src="<?php echo $logo['url']; ?>" /></div>
                                <div class="score"><img class="lazyload" alt="<?php echo $score['alt']; ?>"  data-src="<?php echo $score['url']; ?>" /></div>
                                <div class="content"><?php echo $text; ?></div>
                              </div>
                            </a>
                          </div>
                        </div>
                      <?php 
                          endwhile;
                        endif; 
                      ?>
                      <div class="columns small-12 text-center">
                      <?php if ($rating_text) : ?>
                        <span class="rating"><?php echo $rating_text; ?></span>
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="customer-review">
                    <?php
                    if ($customer_review) :
                      echo '<p class="c-review">' . $customer_review . '</p>';
                    endif;

                    if ($customer_info) :
                      echo '<p class="c-info">' . $customer_info . '</p>';
                    endif;?>
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

      <div id="hb-pricing-detail" class="section section-pricing-detailed hide-for-small">
        <div class="row header">
          <div class="row-container">
            <div class="columns">
              <div class="column-inner">
                <?php
                  // headline
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
                endif;?>

                <div class="swith-bill-mode">
                  <div class="bill-text monthly"><span><?php echo $bill_monthly; ?></span></div>
                  <label class="pure-material-switch">
                      <input type="checkbox" id="pricing-detail-toggle" checked>
                      <span></span>
                  </label>
                  <div class="bill-text annually active">
                    <span><?php echo $bill_annually; ?></span>
                    <div class="save-text">
                      <img class="lazyload" data-src="<?php echo $save['url']; ?>" alt="<?php echo $save['alt']; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-small table">
          <div class="row-container">
            <div class="columns"><div class="column-inner">
              <div class="table-scroll">
                <table id="pricing-d-table" cellspacing="0" cellpadding="0">
                  <thead>
                    <tr>
                      <th class="empty-cell"><div></div></th>
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
                              $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Get Started';
                              $button_link        = (get_sub_field('button_link'));
                              $bottom_text        = get_sub_field('bottom_text');

                              $plans_popular[$plan_popular_index] = $add_top_tag;
                              if($add_top_tag == true) $plan_popular_index = $count_colums;
                      ?>


                      <th width="167" class="<?php echo ($add_top_tag) ? 'popular' : ''; ?>">
                      <div class="text--center">
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
                                                    $class='class="checked popular"';
                                                else
                                                    $class='class="checked"';
                                                break;
                                            }
                                        }
                                        if($detail_count_columns <= $count_colums) {
                                            echo    '<td ' . $class . '><div></div></td>';
                                        }
                                    }
                                  } else if($feature_display_type = 'Text') {
                                      if( have_rows('plan_feature_text') ):
                                          while ( have_rows('plan_feature_text') ): the_row();
                                              $detail_count_columns++;
                                              if($detail_count_columns <= $count_colums) {
                                                  if($plan_popular_index == $detail_count_columns)
                                                      echo    '<td class="text--center text-value popular"><div>' . get_sub_field('text_feature') . '</div></td>';
                                                  else
                                                      echo    '<td class="text--center text-value"><div>' . get_sub_field('text_feature') . '</div></td>';
                                              }
                                          endwhile;
                                      endif;
                                  }

                            echo '</tr>';
                        if( get_sub_field('add_details') && have_rows('feature_details') ):
                          echo '<tr class="hidden-tr"><td colspan="5"><div><ul>';
                            while ( have_rows('feature_details') ): the_row();
                              echo '<li>'.get_sub_field('feature_item').'</li>';
                            endwhile;
                          echo '</ul></div></td></tr>';
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
                        <div class="text--center">
                          <a href="<?php echo $button_link; ?>" target="_blank" class="button">
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
          <div class="row row-small row-flex">
            <div class="row-container">
              <div class="columns medium-5 col-left">
                <div class="column-inner">
                  <?php if ($image) : ?>
                    <div class="col-2-img img-desktop">
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="columns medium-6 medium-offset-1 col-right">
                <div class="column-inner">
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
                        <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
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
    });

    jQuery('#pricing-detail-toggle').click(function(){
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

    $('#pricing-d-table').on('click', 'tr.expandable', function(){

      if(!$(this).hasClass('active')) {
        jQuery('tr.expandable.active').each(function() {
          $(this).removeClass('active');
          $(this).next('tr.hidden-tr').find('div').slideUp(400);
        });
      }

      $(this).toggleClass('active');
      $(this).next('tr.hidden-tr').find('div').slideToggle(400);
    });
});
</script>
<?php get_footer(); ?>