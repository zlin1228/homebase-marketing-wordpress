<?php
/*
Template Name: Home - MT39 - Flexible(NEW)
*/
get_header(); ?>
<script type="application/ld+json">
  { 
   "@context": "http://schema.org",
   "@type": "Organization",
   "name": "Homebase",
   "legalName" : "Pioneer Works, Inc.",
   "url": "https://joinhomebase.com",
   "logo": "https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
   "foundingDate": "2014",
   "founders": [{
     "@type": "Person",
     "name": "John Waldmann"
   }],
   "address": {
      "@type": "PostalAddress",
      "streetAddress": "835 Howard Street",
      "addressLocality": "San Francisco",
      "addressRegion": "CA",
      "postalCode": "94103",
      "addressCountry": "USA"
   },
   "contactPoint": {
     "@type": "ContactPoint",
     "contactType": "customer support",
     "telephone": "[+1-415-951-3830]",
     "email": "support@joinhomebase.com"
   },
   "sameAs":[  
       "https://www.facebook.com/HomebaseHQ/",
       "https://twitter.com/joinhomebase",
       "https://www.linkedin.com/company/homebase-hr/",
       "https://www.youtube.com/channel/UC6oEeT2TOCNEDM5OcYddUxA",
       "https://www.capterra.com/p/153076/Homebase/",
       "https://www.crunchbase.com/organization/homebase/",
	 "https://www.business.com/reviews/homebase/"
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

      <?php if (!get_sub_field('hide_widget')) : 
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $load_without_image     = get_sub_field('load_without_image');
        $image_d                = get_sub_field('image_d');
        $image_m                = get_sub_field('image_m');
      ?>

        <div class="section section-hero">
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns medium-5 medium-offset-1 col-left">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1 class="fw-black">' . $headline . '</h1>';
                    endif;

                    if ($subheadline) :
                      echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                    endif;?>

                    <form action="<?php echo $form_link; ?>"
                      id="hero-signup-form"
                      method="GET"
                      class="email-signup-form"
                      <?php echo ($open_new) ? "target='_blank'" : "" ?>
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
              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <div class="img-wrapper">
                    <?php if ( $load_without_image && wp_is_mobile() ) : ?>
                      <div class="hero-img hide-for-small" data-img-src="<?php echo $image_d['url']; ?>" data-img-alt="<?php echo $image_d['alt']; ?>" style="min-height: 300px;"></div>
                      <div class="hero-img show-for-small" data-img-src="<?php echo $image_m['url']; ?>" data-img-alt="<?php echo $image_m['alt']; ?>" style="min-height: 300px;"></div>
                    <?php else : ?>
                      <div class="hero-img hide-for-small">
                        <?php if( is_int( stripos($image_d['url'], '.svg') ) ){ ?>
                          <object class="lazyload" data="<?php echo $image_d['url']; ?>" type="image/svg+xml"></object>
                        <?php } else { ?>
                          <img class="lazyload" data-src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <?php } ?>
                      </div>
                      <div class="hero-img show-for-small">
                        <img class="lazyload" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      </div>
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
      Single 2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_column' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $reverse          = get_sub_field('reverse');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $description      = get_sub_field('description');
        $image            = get_sub_field('image');
      ?>

        <div class="section section-2-col">
          <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
            <div class="row-container">
              <div class="column medium-6 col-left">
                <div class="column-inner">
                  <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                  <?php if ($description) : ?>
                    <p><?php echo $description; ?></p>
                  <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="column medium-6 col-right">
                <div class="column-inner">
                  <div class="img-wrapper">
                  <?php if ($image) : ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_columns' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-2-columns">
          <div class="row">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <div class="section-header">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <?php endif;?>
                  </div>
                  <div class="section-main">
                    <?php if ( have_rows('items') ) :
                          while ( have_rows('items') ) : the_row();
                            $reverse          = get_sub_field('reverse');
                            $link_group       = get_sub_field('link_group');
                            $title            = get_sub_field('title');
                            $description      = get_sub_field('description');
                            $link_text        = get_sub_field('link_text');
                            $link_url         = get_sub_field('link_url');
                            $add_cert         = get_sub_field('add_certification');
                            $c_logo           = get_sub_field('c_logo');
                            $c_text           = get_sub_field('c_text');
                            $links            = get_sub_field('links');
                            $image            = get_sub_field('image');
                        ?>

                        <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
                          <div class="row-container">
                            <div class="column medium-6 col-left">
                              <div class="column-inner">
                                <div class="text-wrapper">
                                <?php if ($title) : ?>
                                  <h3 class="fw-black"><?php echo $title; ?></h3>
                                <?php endif;?>
                                <?php if(!$link_group) : ?>
                                  <?php if ($description) : ?>
                                    <p><?php echo $description; ?></p>
                                  <?php endif;?>
                                  <?php if ($link_text) : ?>
                                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                  <?php endif;?>
                                  <?php if ($add_cert) : ?>
                                    <div class="cert-wrapper">
                                      <div class="cert-logo"><img class="lazyload" data-src="<?php echo $c_logo['url']; ?>" alt="<?php echo $c_logo['alt']; ?>"></div>
                                      <div class="cert-text"><p><?php echo $c_text; ?></p></div>
                                    </div>
                                  <?php endif;?>
                                <?php else : ?>
                                  <?php if ( have_rows('links') ) :
                                      echo '<ul class="links">';
                                        while ( have_rows('links') ) : the_row();
                                          $link_text           = get_sub_field('link_text');
                                          $link_url            = get_sub_field('link_url');
                                  ?>
                                        <li><a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></li>
                                  <?php 
                                      endwhile;
                                      echo '</ul>';
                                    endif; 
                                  ?>
                                <?php endif;?>
                                
                                </div>
                              </div>
                            </div>
                            <div class="column medium-6 col-right">
                              <div class="column-inner">
                                <div class="img-wrapper">
                                <?php if ($image) : ?>
                                  <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif;?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>
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
                              $content      = get_sub_field('content');
                              $link_url     = get_sub_field('link_url');
                      ?>
                        <div class="columns small-6 medium-3 text-center review-item">
                          <div class="column-inner">
                            <a href="<?php echo $link_url; ?>" target="_blank" rel="noreferrer">
                              <div class="review-box">
                                <div class="logo"><img class="lazyload" alt="<?php echo $logo['alt']; ?>"  data-src="<?php echo $logo['url']; ?>" /></div>
                                <div class="score"><img class="lazyload" alt="<?php echo $score['alt']; ?>"  data-src="<?php echo $score['url']; ?>" /></div>
                                <div class="content"><?php echo $content; ?></div>
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
      Business tab
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_business' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-business-tab">
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <div class="section-header">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    if ($subheadline) 
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                    ?>
                  </div>

                  <?php
                    if ( have_rows('b_tabs') ) : 
                      echo '<div class="logo-slider">';
                      while ( have_rows('b_tabs') ) : the_row();
                        $title             = get_sub_field('title');
                        $logos             = get_sub_field('logos');
                  ?>
                    <div data-title="<?php echo $title; ?>">
                      <?php if ($logos) : ?>
                        <ul class="logo-grid">
                        <?php foreach( $logos as $logo ): ?>
                          <li>
                            <img data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="lazyload"/>
                          </li>
                        <?php endforeach; ?>
                        </ul>
                      <?php endif;?>
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
      Intro product
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_intro_product' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_button             = get_sub_field('add_button');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-intro-product">
          <div class="row row-small">
            <div class="row-container">
              <div class="column medium-6 col-left">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                      <?php if ($add_button) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif;?>
                    </div>                  
                    <?php if ($image) : ?>
                      <div class="image-wrapper hide-for-small">
                        <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                      </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="column medium-7 col-right">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <?php if ( have_rows('groups') ) :
                          while ( have_rows('groups') ) : the_row();
                    ?>
                      <div class="intro-group">
                        <div class="group-title"><span><?php echo get_sub_field('title'); ?></span></div>
                        <?php if ( have_rows('items') ) :
                            echo '<div class="intro-group-wrapper">';
                            while ( have_rows('items') ) : the_row();
                              $icon             = get_sub_field('icon');
                              $link_text        = get_sub_field('link_text');
                              $link_url         = get_sub_field('link_url');
                              $description      = get_sub_field('description');
                        ?>
                          <div class="intro-box">
                            <div class="icon"><img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></div>
                            <div class="text-wrapper">
                              <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                              <p><?php echo $description;?></p>
                            </div>
                          </div>
                        <?php 
                            endwhile;
                            echo '</div>';
                          endif; 
                        ?>
                      </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Signup widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_signup' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-signup-widget hide-for-small">
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <div class="section-header">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h3 class="fw-black">' . $headline . '</h3>';
                    if ($subheadline) 
                      echo '<span>' . $subheadline . '</span>';
                    ?>
                  </div>

                  <?php
                    if ( have_rows('features') ) : 
                      echo '<ul class="feature-grid">';
                      while ( have_rows('features') ) : the_row();
                        $title             = get_sub_field('title');
                  ?>
                    <li><span><?php echo $title; ?></span></li>
                  <?php   
                      endwhile;
                      echo '</ul>';
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
      Vestibulum widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_vestibulum' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $l_content              = get_sub_field('l_content');
        $c_image                = get_sub_field('c_image');
        $r_content              = get_sub_field('r_content');
      ?>

        <div class="section section-vestibulum-widget hide-for-small">
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <div class="section-header">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    if ($subheadline) 
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                    ?>
                  </div>

                  <div class="section-content">
                    <div class="row row-flex">
                      <div class="row-container">
                        <div class="column medium-3 col-left">
                          <div class="column-inner">
                            <?php echo $l_content; ?>
                          </div>
                        </div>
                        <div class="column medium-6 col-center">
                          <div class="column-inner">
                            <div class="image-wrapper">
                              <img class="lazyload" data-src="<?php echo $c_image['url']; ?>" alt="<?php echo $c_image['alt']; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="column medium-3 col-right">
                          <div class="column-inner">
                            <?php echo $r_content; ?>
                          </div>
                        </div>
                      </div>
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
      Customer quote slider
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_quote' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <div class="section section-customer-quote">
          <div class="row row-small">
            <div class="row-container">
              <div class="columns">
                <div class="column-inner">
                  <?php
                    if ( have_rows('quotes') ) : 
                      echo '<div id="quote-slider">';
                      while ( have_rows('quotes') ) : the_row();
                        $show_in_mobile         = get_sub_field('show_in_mobile');
                        $title                  = get_sub_field('title');
                        $image                  = get_sub_field('image');
                        $quote                  = get_sub_field('quote');
                        $label                  = get_sub_field('label');
                        $name                   = get_sub_field('name');
                        $position               = get_sub_field('position');
                  ?>
                    <div class="quote-item <?php echo $show_in_mobile ? '' : 'hide-for-small'; ?>">
                      <div class="quote-item-wrapper">
                      <?php if ($title) : ?>
                        <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                      <?php endif; ?>
                      <?php if ($quote) : ?>
                        <div class="quote-container">
                          <div class="quote-wrapper">
                            <p class="quote-message"><?php echo $quote; ?></p>
                            <p class="name fw-bold"><?php echo $name; ?></p>
                            <p class="position"><?php echo $position; ?></p>
                          </div>
                        </div>
                      <?php endif; ?>
                      <?php if ($image) : ?>
                        <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="photo lazyload"/>
                      <?php endif; ?>
                      <?php if ($label) : ?>
                        <div class="quote-label hide-for-small">
                          <img data-src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>" class="lazyload"/>
                        </div>
                      <?php endif; ?>
                      </div>
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
      New features widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_new_features' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-new-features text-left">
          <div class="row">
            <div class="row-container">
              <div class="column medium-12">
                <div class="column-inner">
                  <div class="section-header">
                    <?php

                    if ($headline) :
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                    endif;?>
                  </div>

                  <div class="row">
                    <div class="row-container">
                      <?php if ( have_rows('features') ) :
                          while ( have_rows('features') ) : the_row();
                            $icon           = get_sub_field('icon');
                            $title          = get_sub_field('title');
                            $description    = get_sub_field('description');
                            $link_text      = get_sub_field('link_text');
                            $link_url       = get_sub_field('link_url');
                      ?>
                        <div class="columns medium-3">
                          <div class="column-inner">
                              <div class="feature">
                                <div class="icon"><img class="lazyload" alt="<?php echo $icon['alt']; ?>"  data-src="<?php echo $icon['url']; ?>" /></div>
                                <div class="text-wrapper">
                                  <span class="title fw-black"><?php echo $title; ?></span>
                                  <p><?php echo $description; ?></p>
                                  <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      <?php 
                          endwhile;
                        endif; 
                      ?>
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
      Footer CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $content                = get_sub_field('content');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner">
          <div class="row">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <div class="banner-wrapper">
                  <?php if ($content) : ?>
                    <h3 class="fw-bold"><?php echo $content; ?></h3>
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
      About Us widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_about_us' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $logo               = get_sub_field('logo');
        $photo              = get_sub_field('photo');
        $content            = get_sub_field('content');
        $contact_us         = get_sub_field('contact_us');
        $contact_url        = get_sub_field('contact_link');
        $phone_num          = get_sub_field('phone_num');
        $label              = get_sub_field('label');
      ?>

        <div class="section section-aboutus text-left">
          <div class="row row-small">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="content-wrapper">
                    <?php if ($logo) : ?>
                        <div class="logo"><img class="lazyload" alt="<?php echo $logo['alt']; ?>"  data-src="<?php echo $logo['url']; ?>" /></div>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>

                    <?php if ($contact_url) : ?>
                        <a href="<?php echo $contact_url; ?>" class="contact-link"><?php echo $contact_us; ?></a>
                    <?php endif; ?>

                    <?php if ($phone_num) : ?>
                        <a href="tel:+1'.str_replace('-', '', $phone_num).'" class="phone-number"><?php echo $phone_num; ?></a>
                    <?php endif; ?>

                    <?php if ($photo) : ?>
                        <img class=" photo hide-for-small lazyload" alt="<?php echo $photo['alt']; ?>"  data-src="<?php echo $photo['url']; ?>" />
                    <?php endif; ?>

                    <?php if ($photo) : ?>
                        <img class=" quote-label hide-for-small lazyload" alt="<?php echo $label['alt']; ?>"  data-src="<?php echo $label['url']; ?>" />
                    <?php endif; ?>
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

<script type="text/javascript">
window.addEventListener( 'load', function() {

  jQuery(".logo-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    customPaging : function(slider, i) {
    var thumb = jQuery(slider.$slides[i]).data();
    return '<a href="#" class="dot">'+jQuery(slider.$slides[i]).attr("data-title")+'</a>';
            },
    responsive: [{ 
        breakpoint: 640,
        settings: {
          dots: true,
          arrows: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
          nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
        } 
    }]
  });

  if(jQuery(window).width() > 640){
    jQuery('#quote-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<span class="slick-prev" aria-label="Previous" type="button">Previous</span>',
      nextArrow: '<span class="slick-next" aria-label="Next" type="button">Next</span>',
      arrows: true,
      responsive: [{ 
          breakpoint: 640,
          settings: {
            arrows: false,
          } 
      }]
    });
  }
});

</script>

<?php get_footer(); ?>