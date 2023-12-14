<?php
/*
Template Name: Franchise LP - MT93
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
          $cta_type               = get_sub_field('cta_type');
          $button_text            = get_sub_field('button_text');
          $button_link            = get_sub_field('button_link');
          $form_link              = get_sub_field('form_link');
          $d_image                = get_sub_field('d_image');
          $m_image                = get_sub_field('m_image');
        ?>

          <div class="section section-hero">
            <div class="row row-flex">
              <div class="row-container">
                <div class="col col-left medium-5">
                  <div class="column-inner">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h1 class="fw-black"><?php echo $headline; ?></h1>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h2 class="subheading"><?php echo $subheadline; ?></h2>
                      <?php endif;?>

                      <?php if ($cta_type == "btn" ) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif; ?>

                      <form action="<?php echo $form_link; ?>"
                        id="hero-signup-form"
                        method="GET"
                        class="email-signup-form <?php echo ($cta_type == 'btn') ? 'show-for-small' : '';?>"
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
                  <div class="col-bglayer hide-for-small">
                    <?php for ( $i = 0; $i < 3; $i ++ ) : ?>
                      <div class="item item-<?php echo $i+1; ?>"></div>
                    <?php endfor; ?>
                  </div>
                </div>

                <div class="col col-right medium-7">
                  <div class="column-inner">
                    <div class="img-wrapper">
                      <?php if ($d_image) : ?>
                      <img class="lazyload hide-for-small" data-src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($m_image) : ?>
                      <img class="lazyload show-for-small" data-src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
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
        2 columns widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_2_cols' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>
  
        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>
  
          <div class="section section-2-columns">
            <div class="row row-small">
              <div class="row-container">
                <div class="column small-12">
                  <div class="column-inner">
                    <?php if ($headline || $subheadline) : ?>
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <? endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <? endif;?>
                    </div>
                    <? endif;?>
                    <div class="section-main">
                      <?php if ( have_rows('items') ) :
                            while ( have_rows('items') ) : the_row();
                              $reverse          = get_sub_field('reverse');
                              $title            = get_sub_field('title');
                              $content          = get_sub_field('content');
                              $add_link         = get_sub_field('add_link');
                              $link_text        = get_sub_field('link_text');
                              $link_url         = get_sub_field('link_url');
                              $image            = get_sub_field('image');
                          ?>
  
                          <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
                            <div class="row-container">
                              <div class="column medium-6 col-left">
                                <div class="column-inner">
                                  <div class="text-wrapper">
                                  <?php if ($title) : ?>
                                    <h3 class="fw-black"><?php echo $title; ?></h3>
                                  <? endif;?>

                                  <?php if ($content) : ?>
                                    <p><?php echo $content; ?></p>
                                  <? endif;?>

                                  <?php if ($add_link) : ?>
                                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                  <? endif;?>
                                  </div>
                                </div>
                              </div>
                              <div class="column medium-6 col-right">
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
        Simple banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_s_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $banner_color         = get_sub_field('banner_color');
        $headline             = get_sub_field('headline');
        $subheadline          = get_sub_field('subheadline');
        $button_text          = get_sub_field('button_text');
        $button_link          = get_sub_field('button_link');
        ?>

          <div class="section section-simple-cta">
            <div class="row">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="banner-container <?php echo ($banner_color == 'blue') ? 'blue-banner':'pink-banner'; ?>">
                      <div class="row row-flex">
                        <div class="row-container">
                          <div class="column medium-6 large-5 col-left">
                            <div class="column-inner">
                              <?php
                                if ($headline) :
                                  echo '<p class="headline">' . $headline . '</p>';
                                endif;

                                if ($subheadline) :
                                  echo '<p class="subheadline">' . $subheadline . '</p>';
                                endif;
                              ?>
                            </div>
                          </div>
                          <div class="column medium-4 large-3 col-right">
                            <div class="column-inner">
                              <?php
                                if ($button_text) :
                                  echo '<a href="'.$button_link.'" class="button primary">' . $button_text . '</a>';
                                endif;
                              ?>
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
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title                  = get_sub_field('title');
        $quote                  = get_sub_field('quote');
        $photo                  = get_sub_field('photo');
        $customer_name          = get_sub_field('customer_name');
        $customer_position      = get_sub_field('customer_position');
        ?>

          <div class="section section-customer-quote">
            <div class="row row-small">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <div class="quote-wrapper">
                          <img class="photo lazyload" alt="<?php echo $photo['alt']; ?>"  data-src="<?php echo $photo['url']; ?>" />
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <span class="customer-info name fw-bold"><?php echo $customer_name; ?><span class="hide-for-small"> - </span></span>
                          <span class="customer-info position"><?php echo $customer_position; ?></span>
                        </div>
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
        Contact widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_contact' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title              = get_sub_field('title');
        $photo              = get_sub_field('photo');
        $button_text        = get_sub_field('button_text');
        $button_link        = get_sub_field('button_link');
        ?>

          <div class="section section-contact">
            <div class="row row-small">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="contact-container">
                      <img class="photo lazyload" alt="<?php echo $photo['alt']; ?>"  data-src="<?php echo $photo['url']; ?>" />
                      <div class="contact-wrapper">
                        <span class="title fw-bold"><?php echo $title; ?></span>
                        <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
      All in one widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_5_cols' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>

          <div class="section section-allinone text-left">
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
                        echo '<h3 class="fw-bold">' . $subheadline . '</h3>';
                      endif;?>
                    </div>

                    <div class="row">
                      <div class="row-container">
                        <?php if ( have_rows('items') ) :
                            while ( have_rows('items') ) : the_row();
                              $icon           = get_sub_field('icon');
                              $title          = get_sub_field('title');
                              $content        = get_sub_field('content');
                              $link_text      = get_sub_field('link_text');
                              $link_url       = get_sub_field('link_url');
                        ?>
                          <div class="columns custom">
                            <div class="column-inner">
                                <div class="feature">
                                  <div class="icon"><img class="lazyload" alt="<?php echo $icon['alt']; ?>"  data-src="<?php echo $icon['url']; ?>" /></div>
                                  <div class="text-wrapper">
                                    <span class="title fw-black hide-for-small"><?php echo $title; ?></span>
                                    <a class="text-link-arrow show-for-small" href="<?php echo $link_url; ?>"><?php echo $title; ?></a>
                                    <p><?php echo $content; ?></p>
                                    <a class="text-link-arrow hide-for-small" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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
        Footer Banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_f_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title              = get_sub_field('title');
        $content            = get_sub_field('content');
        $photo              = get_sub_field('photo');
        $link_text          = get_sub_field('link_text');
        $link_url           = get_sub_field('link_url');
        ?>

          <div class="section section-footer-banner">
            <div class="row row-small">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="banner-container">
                      <div class="banner-wrapper">
                        <div class="photo-wrapper"><img class="photo lazyload" alt="<?php echo $photo['alt']; ?>"  data-src="<?php echo $photo['url']; ?>" /></div>
                        <div class="content-wrapper">
                          <?php if ($title) : ?>
                            <span class="title"><?php echo $title; ?></span>
                          <?php endif; ?>

                          <?php if ($content) : ?>
                            <p class="content hide-for-small"><?php echo $content; ?></p>
                          <?php endif; ?>
                          
                          <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                        </div>
                      </div>
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

</div>

<?php get_footer(); ?>