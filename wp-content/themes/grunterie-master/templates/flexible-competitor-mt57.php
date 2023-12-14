<?php
/*
Template Name: Competitor Comparison - MT57 - Flexible
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
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns medium-5 col-left">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <div class="heading">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1>' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h2>' . $subheadline . '</h2>';
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
              <div class="columns medium-7 col-right">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <?php if ($handwrite_text) : ?>
                      <div class="handwrite-text">
                        <span><?php echo $handwrite_text; ?></span>
                      </div>
                    <? endif;?>
                    <?php if ($image_d || $image_m) : ?>
                      <div class="hero-img">
                        <img class="lazyload hide-for-small" data-src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <img class="lazyload show-for-small" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">

                        <?php if ($rating_text) : ?>
                          <div class="rating-text">
                            <span class="rating-text"><?php echo $rating_text; ?></span>
                          </div>
                        <? endif;?>
                      </div>
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
          <div class="row row-small row-flex <?php echo ($reverse)? 'reverse' : '';?>">
            <div class="row-container">
              <div class="column medium-6 col-left">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <? endif;?>

                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <? endif;?>

                    <?php if ($add_cert) : ?>
                      <div class="cert-wrapper">
                        <div class="cert-logo"><img class="lazyload" data-src="<?php echo $c_logo['url']; ?>" alt="<?php echo $c_logo['alt']; ?>"></div>
                        <div class="cert-text"><p><?php echo $c_text; ?></p></div>
                      </div>
                    <? endif;?>

                    <?php if ($add_button) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <? endif;?>
                  </div>
                </div>
              </div>
              <div class="column medium-6 col-right">
                <div class="column-inner">
                  <div class="img-wrapper">
                  <?php if ($image_d || $image_m) : ?>
                    <img class="lazyload hide-for-small" data-src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                    <img class="lazyload show-for-small" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
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
     All in one widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_allinone' ) : ?>

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
                      <?php if ( have_rows('features') ) :
                          while ( have_rows('features') ) : the_row();
                            $icon           = get_sub_field('icon');
                            $title          = get_sub_field('title');
                            $description    = get_sub_field('description');
                            $link_text      = get_sub_field('link_text');
                            $link_url       = get_sub_field('link_url');
                      ?>
                        <div class="columns custom">
                          <div class="column-inner">
                              <div class="feature">
                                <div class="icon"><img class="lazyload" alt="<?php echo $icon['alt']; ?>"  data-src="<?php echo $icon['url']; ?>" /></div>
                                <div class="text-wrapper">
                                  <span class="title fw-extra hide-for-small"><?php echo $title; ?></span>
                                  <a class="text-link-arrow show-for-small" href="<?php echo $link_url; ?>"><?php echo $title; ?></a>
                                  <p><?php echo $description; ?></p>
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
                    <?php
                      if ($logo) :
                        echo '<div class="logo"><img class="lazyload" alt="'.$logo['alt'].'"  data-src="'.$logo['url'].'" /></div>';
                      endif;

                      if ($content) :
                        echo $content;
                      endif;

                      if ($contact_url) :
                        $contacttext  = '<a href="' . $contact_url . '">';
                        $contacttext .= '<span class="contact-text">'.$contact_us.'</span>';
                        $contacttext .= '</a>';
                      else :
                        $contacttext .= '<span class="contact-text fw-bold">'.$contact_us.'</span>';
                      endif;
                      echo ($contacttext);
                    
                      if ($phone_num) :
                        echo '<a class="phone-number" href="tel:+1'.str_replace('-', '', $phone_num).'">'.$phone_num.'</a>';
                      endif; 

                      if ($photo) :
                        echo '<img data-src="'.$photo['url'].'" alt="'.$photo['alt'].'" class="photo lazyload hide-for-small"/>';
                      endif;

                      if ($label) :
                        echo '<span class="quote-label hide-for-small">'.$label.'</span>';
                      endif;
                    ?>
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

<?php get_footer(); ?>