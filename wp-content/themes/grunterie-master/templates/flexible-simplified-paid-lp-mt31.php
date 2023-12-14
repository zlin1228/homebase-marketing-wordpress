<?php
/*
Template Name: Simplified Paid LP - MT31 - Flexible
*/
get_header(); ?>

<div class="container new-style" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();
    
      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'flex_hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hero_type              = get_sub_field('hero_type');
        $custom_class           = get_sub_field('custom_class');
        $l_classes              = get_sub_field('l_classes');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $r_classes              = get_sub_field('r_classes');
        $image_d                = get_sub_field('image_d');
        $image_m                = get_sub_field('image_m');
        ?>

          <div class="section section-hero <?php echo $hero_type; ?> <?php echo $custom_class; ?>">
            <div class="row <?php echo ($hero_type != 'type1') ? 'row-flex' : ''; ?>">
              <div class="row-container">
                <div class="col col-left <?php echo ($l_classes) ? $l_classes : ''; ?>">
                  <div class="column-inner">
                    <div class="text-wrapper">
                      <div class="top-wrap">
                        <?php if ($headline) : ?>
                        <h1 class="small fw-black"><?php echo $headline; ?></h1>
                        <?php endif;?>
                      </div>
                      <div class="bottom-wrap">
                        <?php if ($subheadline) : ?>
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                        <?php endif;?>

                        <?php if ($button_text) : ?>
                        <a class="button <?php echo ($hero_type == 'type4') ? 'reverse' : ''; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>
                  <?php if($hero_type == 'type2') : ?>
                  <div class="col-bglayer hide-for-small">
                    <?php for ( $i = 0; $i < 3; $i ++ ) : ?>
                      <div class="item item-<?php echo $i+1; ?>">
                      <?php if(have_rows('memebr_images')) : the_row(); $m_image = get_sub_field('m_image');?>
                        <img class="lazyload" data-src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
                      <?php endif; ?>
                      </div>
                    <?php endfor; ?>
                  </div>
                  <?php endif; ?>
                </div>

                <div class="col col-right <?php echo ($r_classes) ? $r_classes : ''; ?>">
                  <div class="column-inner">
                    <div class="img-wrapper">
                      <?php if ($image_d) : ?>
                      <img class="lazyload hide-for-small" data-src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                      <img class="lazyload show-for-small" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="section-bglayer"></div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        2 columns widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_2_cols' ) : 

        if (!get_sub_field('hide_widget')) : 
          $index++;
          $reverse          = get_sub_field('reverse');
          $overflow         = get_sub_field('overflow');
          $headline         = get_sub_field('headline');
          $content          = get_sub_field('content');
          $image            = get_sub_field('image');
      ?>
          <div class="section section-2-columns">
            <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?> <?php echo ($index == 1) ? 'desktop-only': ''; ?>">
              <div class="row-container">
                <div class="column col-left <?php echo ($reverse) ? 'medium-6':'medium-5 medium-offset-1'; ?>">
                  <div class="column-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <? endif;?>
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <? endif;?>
                    </div>
                  </div>
                </div>
                <div class="column medium-6 col-right">
                  <div class="column-inner">
                    <div class="img-wrapper <?php echo ($overflow)? 'overflow' : '';?>">
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
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('banner_headline');
        $subheadline            = get_sub_field('banner_subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-signup-banner">
            <div class="section-inner <?php echo $color; ?>">
              <div class="row row-flex">
                <div class="row-container">
                  <div class="columns medium-8 col-left">
                    <div class="column-inner">
                      <?php
                      if ($headline) :
                        echo '<h3 class="fw-black">' . $headline . '</h3>';
                      endif;
                      if ($subheadline) :
                        echo '<p class="normal">' . $subheadline . '</p>';
                      endif;
                      ?>
                    </div>
                  </div>
                  <div class="columns medium-4 col-right">
                    <div class="column-inner">
                      <a class="button primary" href="<?php echo $button_link; ?>">
                        <?php echo $button_text; ?>
                      </a>
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
    jQuery(window).on('scroll',function(){
      var st = jQuery(window).scrollTop();

      if(st > 0) {
        jQuery("header").css('background', 'white');
      }
      else {
        jQuery("header").css('background', 'none');
      }
    });
  });
</script>

<?php get_footer(); ?>