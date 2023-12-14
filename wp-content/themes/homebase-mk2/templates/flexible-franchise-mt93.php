<?php
/*
Template Name: Franchise LP - MT93
*/
get_header(); ?>

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
            <div class="container">
              <div class="row v-align-middle">
                <div class="col col-left col-12 col-sm-5">
                  <div class="col-inner">
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
                        class="email-signup-form <?php echo ($cta_type == 'btn') ? 'show-for-sm' : '';?>"
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
                    <div class="col-bglayer hide-for-sm">
                      <?php for ( $i = 0; $i < 3; $i ++ ) : ?>
                        <div class="item item-<?php echo $i+1; ?>"></div>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>

                <div class="col col-right col-12 col-sm-7">
                  <div class="col-inner">
                    <div class="img-wrapper">
                      <?php if ($d_image) : ?>
                      <img class="hide-for-sm" src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($m_image) : ?>
                      <img class="show-for-sm" src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
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
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($headline || $subheadline) : ?>
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                    </div>
                    <?php endif;?>
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
  
                          <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
                            <div class="col col-12 col-sm-6 col-left">
                              <div class="col-inner">
                                <div class="text-wrapper">
                                <?php if ($title) : ?>
                                  <h3 class="fw-black"><?php echo $title; ?></h3>
                                <?php endif;?>

                                <?php if ($content) : ?>
                                  <p><?php echo $content; ?></p>
                                <?php endif;?>

                                <?php if ($add_link) : ?>
                                  <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                <?php endif;?>
                                </div>
                              </div>
                            </div>
                            <div class="col col-12 col-sm-6 col-right">
                              <div class="col-inner">
                                <div class="img-wrapper">
                                <?php if ($image) : ?>
                                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif;?>
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
                  <div class="col-inner">
                    <div class="banner-container <?php echo ($banner_color == 'blue') ? 'blue-banner':'pink-banner'; ?>">
                      <div class="row v-align-middle">
                        <div class="row-container">
                          <div class="column medium-6 large-5 col-left">
                            <div class="col-inner">
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
                            <div class="col-inner">
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
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div>
                      <?php if ($title) : ?>
                        <h3 class="subheading fw-black hide-for-sm"><?php echo $title; ?></h3>
                      <?php endif; ?>
                      <?php if ($quote) : ?>
                        <div class="quote-container">
                          <div class="quote-wrapper">
                            <img class="photo" alt="<?php echo $photo['alt']; ?>"  src="<?php echo $photo['url']; ?>" />
                            <p class="quote-message"><?php echo $quote; ?></p>
                            <span class="customer-info name fw-bold"><?php echo $customer_name; ?><span class="hide-for-sm"> - </span></span>
                            <span class="customer-info position"><?php echo $customer_position; ?></span>
                          </div>
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
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="contact-container">
                      <img class="photo" alt="<?php echo $photo['alt']; ?>"  src="<?php echo $photo['url']; ?>" />
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
            <div class="container">
              <div class="row v-align-middle">
                <div class="col col-12">
                  <div class="col-inner">
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
                      <?php if ( have_rows('items') ) :
                          while ( have_rows('items') ) : the_row();
                            $icon           = get_sub_field('icon');
                            $title          = get_sub_field('title');
                            $content        = get_sub_field('content');
                            $link_text      = get_sub_field('link_text');
                            $link_url       = get_sub_field('link_url');
                      ?>
                        <div class="col col-12 col-custom">
                          <div class="col-inner">
                              <div class="feature">
                                <div class="icon"><img alt="<?php echo $icon['alt']; ?>"  src="<?php echo $icon['url']; ?>" /></div>
                                <div class="text-wrapper">
                                  <span class="title fw-black hide-for-sm"><?php echo $title; ?></span>
                                  <a class="text-link-arrow show-for-sm" href="<?php echo $link_url; ?>"><?php echo $title; ?></a>
                                  <p><?php echo $content; ?></p>
                                  <a class="text-link-arrow hide-for-sm" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="banner-container">
                      <div class="banner-wrapper">
                        <div class="photo-wrapper"><img class="photo" alt="<?php echo $photo['alt']; ?>"  src="<?php echo $photo['url']; ?>" /></div>
                        <div class="content-wrapper">
                          <?php if ($title) : ?>
                            <span class="title"><?php echo $title; ?></span>
                          <?php endif; ?>

                          <?php if ($content) : ?>
                            <p class="content hide-for-sm"><?php echo $content; ?></p>
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

</main>

<?php get_footer(); ?>