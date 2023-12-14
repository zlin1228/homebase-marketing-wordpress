<?php
/*
Template Name: SEO Cluster - MT87 - Flexible
*/
get_header(); ?>

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
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $add_form               = get_sub_field('add_form');
        $form_link              = get_sub_field('form_link');
        $image                  = get_sub_field('image');
        ?>

          <div class="section section-hero">
            <div class="row row-small row-flex">
              <div class="row-container">
                <div class="columns">
                  <div class="column-inner">
                    <div class="row row-header">
                      <div class="row-container">
                        <div class="columns">
                          <div class="column-inner">
                            <div class="header-wrap">
                            <?php
                              if ($headline) :
                                echo '<h1 class="fw-black">' . $headline . '</h1>';
                              endif;

                              if ($subheadline) :
                                echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                              endif;
                            ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row row-flex">
                      <div class="row-container">
                        <div class="columns medium-6 col-left">
                          <div class="column-inner">
                            <div class="text-wrap">
                              <?php
                                if ($content) :
                                  echo $content;
                                endif;
                              ?>

                              <?php if ($add_form ) : ?>
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
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="columns medium-6 col-right">
                          <div class="column-inner">
                            <div class="img-wrapper">
                            <?php if ($image ) : ?>
                              <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <?php endif; ?>
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
        features sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) :
        if (!get_sub_field('hide_widget')) : 
          $nav_menu_name        = get_sub_field('menu_name');
      ?>
          <div class="section section-navbar feature-navbar">
            <div class="row">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'features-sub', 'container_class' => 'features-sub-container') ); ?>
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
      elseif ( get_row_layout() == 'flex_2_cols' ) : 

        if (!get_sub_field('hide_widget')) : 
          $reverse          = get_sub_field('reverse');
          $sticky           = get_sub_field('sticky_image');
          $headline         = get_sub_field('headline');
          $subheadline      = get_sub_field('subheadline');
          $content          = get_sub_field('content');
          $image            = get_sub_field('image');
      ?>
          <div class="section section-2-columns">
            <div class="row row-small row-flex <?php echo ($reverse)? 'reverse' : '';?> <?php echo ($sticky)? 'sticky-image' : '';?>">
              <div class="row-container">
                <div class="column medium-6 col-left">
                  <div class="column-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-bold"><?php echo $headline; ?></h3>
                    <? endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <? endif;?>
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <? endif;?>
                    </div>
                  </div>
                </div>
                <div class="column medium-6 col-right <?php echo ($sticky)? 'col-sticky' : '';?>">
                  <div class="column-inner">
                    <div class="img-wrapper">
                    <?php if ($image) : ?>
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <? endif;?>
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
        Simple CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_simple_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $banner_type            = get_sub_field('banner_type');
        $banner_headline        = get_sub_field('banner_headline');
        $banner_subheadline     = get_sub_field('banner_subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $form_link              = get_sub_field('form_link');
        ?>

          <div class="section section-simple-cta <?php echo ($banner_type == 'teal') ? 'teal-banner':'dpink-banner'; ?>">
            <div class="row">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="banner-container">
                      <div class="row row-flex <?php echo ($banner_type == 'dpink') ? 'row-small':''; ?>">
                        <div class="row-container">
                        <?php if ($banner_type == 'teal') : ?>
                          <div class="column medium-6 large-5 col-left">
                        <?php else : ?>
                          <div class="column medium-6 col-left">
                        <?php endif; ?>
                            <div class="column-inner">
                              <?php
                                if ($banner_headline) :
                                  echo '<p class="headline">' . $banner_headline . '</p>';
                                endif;

                                if ($banner_subheadline) :
                                  echo '<p class="subheadline">' . $banner_subheadline . '</p>';
                                endif;
                              ?>
                            </div>
                          </div>

                        <?php if ($banner_type == 'teal') : ?>
                          <div class="column medium-4 large-3 col-right">
                            <div class="column-inner">
                              <?php
                                if ($button_text) :
                                  echo '<a href="'.$button_link.'" class="button primary">' . $button_text . '</a>';
                                endif;
                              ?>
                            </div>
                          </div>
                        <?php else : ?>
                          <div class="column medium-6 col-right">
                            <div class="column-inner">

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
                              
                              <a href="<?php echo $form_link; ?>" class="button primary hero-signup-btn"><?php echo $button_text; ?></a>
                            </div>
                          </div>
                        <?php endif; ?>
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
        Subscribe banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_subscribe' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $color                  = get_sub_field('color');
        $banner_headline        = get_sub_field('banner_headline');
        $banner_subheadline     = get_sub_field('banner_subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        ?>

          <div class="section section-subscribe-banner">
            <div class="section-inner <?php echo $color; ?>">
              <div class="row row-small">
                <div class="row-container">
                  <div class="column">
                    <div class="column-inner">
                      <div class="banner-wrap">
                        <?php if ($banner_headline) : ?>
                          <h3 class="fw-black"><?php echo $banner_headline; ?></h3>
                        <?php endif; ?>

                        <?php if ($banner_subheadline) : ?>
                          <p class="subheadline"><?php echo $banner_subheadline; ?></p>
                        <?php endif; ?>

                        <form
                          action="<?php echo ($form_link) ? $form_link : '//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=b7db0538-8b4f-49ec-b2b1-b208d05b3a40'; ?>"
                          method="POST"
                          class="subscribe-form"
                        >
                          <div class="form-item input">
                            <input
                                aria-label="email address"
                                type="email"
                                name="email"
                                placeholder="Email address"
                            />
                          </div>
                          <div class="form-item button-wrap">
                            <button type="submit"
                                aria-label="submit"
                                name="Submit"
                                class="primary"
                            ><?php echo $button_text; ?></button>
                          </div>
                        </form>
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
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title                  = get_sub_field('title');
        $photo                  = get_sub_field('image');
        $quote                  = get_sub_field('quote');
        $label                  = get_sub_field('label');
        $customer_name          = get_sub_field('customer_name');
        $customer_position      = get_sub_field('customer_position');
        ?>

          <div class="section section-customer-quote">
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-9 medium-offset-3">
                  <div class="column-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <div class="quote-wrapper">
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <p class="name fw-bold"><?php echo $customer_name; ?></p>
                          <p class="position"><?php echo $customer_position; ?></p>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if ($photo) : ?>
                      <img data-src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="photo lazyload"/>
                    <?php endif; ?>
                    <?php if ($label) : ?>
                      <span class="quote-label hide-for-small">
                        <img class="lazyload"  data-src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
                      </span>
                    <?php endif; ?>
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

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

<script type="text/javascript">
  window.addEventListener( 'load', function() {
    var lastScrollTop = 0;
    jQuery(window).scroll(function(event){
      var st = $(this).scrollTop();
      if (st > lastScrollTop && st >= 150){
          // downscroll code
          jQuery(".section-navbar").addClass("hidden");
      } else {
          // upscroll code
          jQuery(".section-navbar").removeClass("hidden");
      }
      lastScrollTop = st;
    });
  });
</script>

<?php get_footer(); ?>