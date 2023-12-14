<?php
/*
Template Name: Competitor Comparison - MT57 - Flexible
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

      <?php if (!get_sub_field('hide_widget')) : 
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $image_d                = get_sub_field('image_d');
        $image_m                = get_sub_field('image_m');
        $handwrite_text         = get_sub_field('handwrite_text');
        $rating_text            = get_sub_field('rating_text');
      ?>

        <div class="section section-hero">
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <div class="heading">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1 class="fw-black small">' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h2 class="subheading">' . $subheadline . '</h2>';
                      endif;?>
                    </div>

                    <form action="<?php echo $form_link; ?>"
                      id="hero-signup-form"
                      method="GET"
                      class="email-signup-form"
                      <?php echo ($open_new) ? "target='_blank'" : "" ?>
                    >
                      <div class="form-item input">
                        <input class="homeform "
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
              <div class="col col-12 col-sm-6 offset-sm-1 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($handwrite_text) : ?>
                      <img class="handwrite-text hide-for-sm" src="<?php echo $handwrite_text['url']; ?>" alt="<?php echo $handwrite_text['alt']; ?>">
                    <?php endif;?>
                    <?php if ($image_d || $image_m) : ?>
                      <div class="hero-img">
                        <img class="desktop" src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <img class="mobile" src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      </div>
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
        $reverse          = get_sub_field('reverse');
        $add_button       = get_sub_field('add_button');
        $add_cert         = get_sub_field('add_certification');
        $headline         = get_sub_field('headline');
        $content          = get_sub_field('content');
        $button_text      = get_sub_field('button_text');
        $button_link      = get_sub_field('button_link');
        $c_logo           = get_sub_field('c_logo');
        $c_text           = get_sub_field('c_text');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
      ?>

        <div class="section section-2-columns">
          <div class="container">
            <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <?php endif;?>

                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <?php endif;?>

                    <?php if ($add_cert) : ?>
                      <div class="cert-wrapper">
                        <div class="cert-logo"><img src="<?php echo $c_logo['url']; ?>" alt="<?php echo $c_logo['alt']; ?>"></div>
                        <div class="cert-text"><p><?php echo $c_text; ?></p></div>
                      </div>
                    <?php endif;?>

                    <?php if ($add_button) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="img-wrapper">
                  <?php if ($image_d || $image_m) : ?>
                    <img class="hide-for-sm" src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                    <img class="show-for-sm" src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
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

        <div class="section section-signup-widget">
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
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
     All in one widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_allinone' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-allinone text-left">
          <div class="container">
            <div class="row">
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
                    <?php if ( have_rows('features') ) :
                        while ( have_rows('features') ) : the_row();
                          $icon           = get_sub_field('icon');
                          $title          = get_sub_field('title');
                          $description    = get_sub_field('description');
                          $link_text      = get_sub_field('link_text');
                          $link_url       = get_sub_field('link_url');
                    ?>
                      <div class="col col-12 col-sm-20">
                        <div class="col-inner">
                            <div class="feature">
                              <div class="icon"><img alt="<?php echo $icon['alt']; ?>"  src="<?php echo $icon['url']; ?>" /></div>
                              <div class="text-wrapper">
                                <span class="title fw-black hide-for-sm"><?php echo $title; ?></span>
                                <a class="text-link-arrow show-for-sm" href="<?php echo $link_url; ?>"><?php echo $title; ?></a>
                                <p><?php echo $description; ?></p>
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

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>

</main>
<?php get_footer(); ?>