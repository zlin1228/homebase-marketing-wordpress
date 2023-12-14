<?php
/*
Template Name: Home-MT39-v2.0
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

<main id="primary" class="site-main" role="document">

<?php
if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : 
        $hide_widget                  = get_sub_field('hide_widget');
        $id                           = get_sub_field('widget_id');
        $headline                     = get_sub_field('headline');
        $subheadline                  = get_sub_field('subheadline');
        $button_text                  = get_sub_field('button_text');
        $form_link                    = get_sub_field('form_link');
        $image_d                      = get_sub_field('image_d');
        $image_m                      = get_sub_field('image_m');
        $logos                        = get_sub_field('logos');
        $caption                      = get_sub_field('caption');
        $hero_type_of_media           = get_sub_field('hero_type_of_media');
        $hero_type_of_cta             = get_sub_field('hero_type_of_cta');
        $button_one_link              = get_sub_field('button_one_link');
        $button_one_text              = get_sub_field('button_one_text');
        $button_two_link              = get_sub_field('button_two_link');
        $button_two_text              = get_sub_field('button_two_text');
        $default_type_of_media        = get_sub_field('default_type_of_media');
        $center_image                 = get_sub_field('center_image');
        $video_popup_link             = get_sub_field('video_popup_link');
        $video_popup_placeholder      = get_sub_field('video_popup_placeholder');
        $video_popup_placeholder_mobile      = get_sub_field('video_popup_placeholder_mobile');
        $video_popup_callout          = get_sub_field('video_popup_callout');
      ?>

        <div class="section section-hero <?php echo ($hero_type_of_media == "both" && $default_type_of_media) ? $default_type_of_media : ""; ?> <?php echo $hero_type_of_cta; ?>" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <div class="heading">
                      <?php
                      if ($headline) :
                        echo '<h1 class="fw-black">' . $headline . '</h1>';
                      endif;
                      if ($subheadline) :
                        echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                      endif;?>
                    </div>
                    <?php if ($hero_type_of_cta == "form") : ?>
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
                    <?php if ($hero_type_of_cta == "buttons") : ?>
                      <div class="buttons">
                        <?php if ($button_one_link) : ?>
                          <a class="button primary" href="<?php echo $button_one_link; ?>"><?php echo $button_one_text; ?></a>
                        <?php endif;?>
                        <?php if ($button_two_link) : ?>
                          <a class="button primary reverse" href="<?php echo $button_two_link; ?>"><?php echo $button_two_text; ?><img src="<?php echo get_stylesheet_directory_uri() . '/images/play-purple.svg' ?>" alt="Play Now"/></a>
                        <?php endif;?>
                      </div>
                    <?php endif; ?>
                    <?php if ($caption) : ?>
                      <div class="caption"><?php echo $caption; ?></div>
                    <?php endif; ?>
                    <?php if (get_sub_field('add_logos')) : ?>                      
                      <div class="marquee">
                        <div class="overlay"></div>
                        <div class="marquee-inner" style="animation-duration: <?php echo count($logos)*3; ?>s;">
                          <?php foreach( $logos as $logo ): ?>
                            <img class="marquee-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                          <?php endforeach; ?>
                        </div>
                        <div class="marquee-inner" style="animation-duration: <?php echo count($logos)*3; ?>s;">
                          <?php foreach( $logos as $logo ): ?>
                            <img class="marquee-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                          <?php endforeach; ?>
                        </div>
                      </div>                        
                    <?php endif;?> 
                  </div>
                </div>
              </div>
              <?php if ( $hero_type_of_media == "video_popup" && $video_popup_link ) : ?>
                <div class="hero-video-popup col col-12 col-sm-6 col-right">
                  <div class="hero-video-wrapper">
                    <a id="hero-popup-video" href="<?php echo $video_popup_link; ?>">
                      <?php if ($video_popup_placeholder ) : ?>
                        <img class="placeholder-image" src="<?php echo $video_popup_placeholder['url']; ?>" alt="<?php echo $video_popup_placeholder['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($video_popup_placeholder_mobile ) : ?>
                        <img class="placeholder-image-mobile" src="<?php echo $video_popup_placeholder_mobile['url']; ?>" alt="<?php echo $video_popup_placeholder_mobile['alt']; ?>">
                      <?php endif; ?>
                    </a>
                  </div>
                  <?php if ($video_popup_callout ) : ?>
                    <img class="callout" src="<?php echo $video_popup_callout['url']; ?>" alt="<?php echo $video_popup_callout['alt']; ?>">
                  <?php endif; ?>                             
                </div>
              <?php endif; ?>
              <?php if ( $hero_type_of_media == "image" || empty( $hero_type_of_media ) ) : ?>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <div class="img-wrapper">
                      <div class="hero-img hide-for-sm">
                        <?php if( is_int( stripos($image_d['url'], '.svg') ) ){ ?>
                          <object data="<?php echo $image_d['url']; ?>" type="image/svg+xml"></object>
                        <?php } else { ?>
                          <img src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <?php } ?>
                      </div>
                      <div class="hero-img show-for-sm">
                        <img src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <?php if ( $hero_type_of_media == "both" ) : ?>
                <div class="col col-12 col-sm-6 col-right <?php echo ($default_type_of_media == "video_popup") ? 'hidden' : '' ?>">
                  <div class="col-inner">
                    <div class="img-wrapper">
                      <div class="hero-img hide-for-sm">
                        <?php if( is_int( stripos($image_d['url'], '.svg') ) ){ ?>
                          <object data="<?php echo $image_d['url']; ?>" type="image/svg+xml"></object>
                        <?php } else { ?>
                          <img src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                        <?php } ?>
                      </div>
                      <div class="hero-img show-for-sm">
                        <img src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hero-video-popup col col-12 col-sm-6 col-right <?php echo ($default_type_of_media == "image") ? 'hidden' : '' ?>" >
                  <div class="hero-video-wrapper">
                    <a id="hero-popup-video" href="<?php echo $video_popup_link; ?>">
                      <?php if ($video_popup_placeholder ) : ?>
                      <img src="<?php echo $video_popup_placeholder['url']; ?>" alt="<?php echo $video_popup_placeholder['alt']; ?>">
                      <?php endif; ?>
                    </a>
                  </div>                                
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php //endif; ?>


    <?php
    /* --------------------------------------------
      Single 2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_column' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $reverse                = get_sub_field('reverse');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $description            = get_sub_field('description');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-2-col" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
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
          </div>
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_columns' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $id                     = get_sub_field('widget_id');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_nav_buttons        = get_sub_field('add_nav_buttons');
      ?>

        <div class="section section-2-columns" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="section-header">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <?php endif;?>
                    <?php if ($add_nav_buttons) : ?>
                      <?php if ( have_rows('nav_buttons_repeater') ) : ?>
                        <div class="nav-buttons">
                          <?php while ( have_rows('nav_buttons_repeater') ) : the_row(); 
                            $nav_button_text          = get_sub_field('nav_button_text'); ?>
                            <a class="button primary reverse" href="#"><?php echo $nav_button_text; ?></a>
                          <?php endwhile; ?>                          
                        </div>
                      <?php endif; ?>
                    <?php endif; ?>
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
                            $max_width        = get_sub_field('max_width');
                            $max_height       = get_sub_field('max_height');
                        ?>

                        <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
                          <div class="col col-12 col-sm-6 col-left">
                            <div class="col-inner">
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
                                    <div class="cert-logo"><img src="<?php echo $c_logo['url']; ?>" alt="<?php echo $c_logo['alt']; ?>"></div>
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
                          <div class="col col-12 col-sm-6 col-right">
                            <div class="col-inner">
                              <div class="img-wrapper" style="<?php echo ($max_width) ? 'max-width:'.$max_width : ''; ($max_height) ? ' max-height:'.$max_height : '';?>">
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Rating widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_rating' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget        = get_sub_field('hide_widget');
      $id                 = get_sub_field('widget_id');
      $type               = get_sub_field('widget_type');
      $headline           = get_sub_field('headline');
      $subheadline        = get_sub_field('subheadline');
      $r_date             = get_sub_field('r_date');
      ?>

        <div class="section section-rating <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
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
                              <div class="rscore"><object data="<?php echo $r_image['url']; ?>" type="image/svg+xml" aria-label="<?php echo $r_image['alt'];?>"><?php echo $r_image['alt'];?></object></div>
                              <div class="rlabel"><?php echo $r_label; ?></div>
                              <div class="rquote"><?php echo $r_quote; ?></div>
                              <div class="plogo">
                                <?php if ($p_url) : ?><a href="<?php echo $p_url; ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                                <object data="<?php echo $p_logo['url']; ?>" type="image/png" aria-label="<?php echo $p_logo['alt'];?>"><?php echo $p_logo['alt'];?></object>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Signup CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_signup_cta_banner' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $id                     = get_sub_field('widget_id');
      $color                  = get_sub_field('color');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-signup-cta-banner" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="section-inner <?php echo $color; ?>">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="banner-container">
                      <div class="row v-align-middle">
                        <div class="col col-12 col-sm-8 col-left">
                          <div class="col-inner">
                            <?php
                            if ($headline) :
                              echo '<h3 class="fw-black">' . $headline . '</h3>';
                            endif;
                            if ($subheadline) :
                              echo '<p>' . $subheadline . '</p>';
                            endif;
                            ?>
                          </div>
                        </div>
                        <div class="col col-12 col-sm-4 col-right">
                          <div class="col-inner">
                            <div>
                              <a class="button primary" href="<?php echo $button_link; ?>">
                                <?php echo $button_text; ?>
                              </a>
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
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Press logos
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_press_logos' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <style>
        footer .footer-logos {
          display: none;
        }
      </style>

      <?php
      $hide_widget        = get_sub_field('hide_widget');
      $press_logos        = get_sub_field('press_logos');
      $press_badges       = get_sub_field('press_badges');
      ?>

        <div class="section section-press-logos" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
                  <?php if ($press_badges) : ?>
                  <ul class="press-badges text-center">
                    <?php foreach ($press_badges as $badge) : ?>
                      <li><?php echo wp_get_attachment_image( $badge, 'full'); ?></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  <?php if ($press_logos) : ?>
                  <ul class="press-logos text-center">
                    <?php foreach ($press_logos as $logo) : ?>
                      <li><?php echo wp_get_attachment_image( $logo, 'full'); ?></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Clients logos
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_clients_logos' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget            = get_sub_field('hide_widget');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-clients-logos" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="col-inner">
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
                      echo '<div id="logo-slider">';
                      while ( have_rows('b_tabs') ) : the_row();
                        $title             = get_sub_field('title');
                        $logos             = get_sub_field('logos');
                  ?>
                    <div data-title="<?php echo $title; ?>">
                      <?php if ($logos) : ?>
                        <ul class="logo-grid">
                        <?php foreach( $logos as $logo ): ?>
                          <li>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Business tab
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_business' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget            = get_sub_field('hide_widget');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-business-tab" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="col-inner">
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
                      echo '<div id="logo-slider">';
                      while ( have_rows('b_tabs') ) : the_row();
                        $title             = get_sub_field('title');
                        $logos             = get_sub_field('logos');
                  ?>
                    <div data-title="<?php echo $title; ?>">
                      <?php if ($logos) : ?>
                        <ul class="logo-grid">
                        <?php foreach( $logos as $logo ): ?>
                          <li>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Intro product
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_intro_product' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_button             = get_sub_field('add_button');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-intro-product" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
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
                      <div class="image-wrapper hide-for-sm">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                      </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-7 col-right">
                <div class="col-inner">
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
                            <div class="icon">
                              <object data="<?php echo $icon['url']; ?>" type="image/svg+xml" aria-label="<?php echo $icon['alt'];?>"><?php echo $icon['alt'];?></object>
                            </div>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Signup widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_signup' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget            = get_sub_field('hide_widget');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-signup-widget" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
                  <div class="section-header">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h3 class="fw-black">' . $headline . '</h3>';
                    if ($subheadline) 
                      echo '<h3 class="subheading">' . $subheadline . '</h3>';
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Vestibulum widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_vestibulum' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget            = get_sub_field('hide_widget');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $l_content              = get_sub_field('l_content');
        $c_image                = get_sub_field('c_image');
        $r_content              = get_sub_field('r_content');
      ?>

        <div class="section section-vestibulum-widget hide-for-sm" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
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
                    <div class="row v-align-middle ">
                      <div class="col col-12 col-sm-3 col-left">
                        <div class="col-inner">
                          <?php echo $l_content; ?>
                        </div>
                      </div>
                      <div class="col col-12 col-sm-6 col-center text-center">
                        <div class="col-inner">
                          <div class="image-wrapper">
                            <img src="<?php echo $c_image['url']; ?>" alt="<?php echo $c_image['alt']; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col col-12 col-sm-3 col-right">
                        <div class="col-inner">
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Customer quote slider
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_quote' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : 
        $hide_widget            = get_sub_field('hide_widget');
      ?>

        <div class="section section-customer-quote" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
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
                    <div class="quote-item <?php echo $show_in_mobile ? '' : 'hide-for-lg-down'; ?>">
                      <div class="quote-item-wrapper">
                      <?php if ($title) : ?>
                        <h3 class="subheading fw-black hide-for-lg-down"><?php echo $title; ?></h3>
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
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="photo"/>
                      <?php endif; ?>
                      <?php if ($label) : ?>
                        <div class="quote-label hide-for-lg-down">
                          <img src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      New features widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_new_features' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-new-features text-left" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="col-inner">
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
                    <?php if ( have_rows('features') ) :
                        while ( have_rows('features') ) : the_row();
                          $icon           = get_sub_field('icon');
                          $title          = get_sub_field('title');
                          $description    = get_sub_field('description');
                          $link_text      = get_sub_field('link_text');
                          $link_url       = get_sub_field('link_url');
                    ?>
                      <div class="col col-12 col-sm-3">
                        <div class="col-inner">
                            <div class="feature">
                              <div class="icon"><object data="<?php echo $icon['url']; ?>" type="image/svg+xml" aria-label="<?php echo $icon['alt'];?>"></object>
                              </div>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Footer CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $align                  = get_sub_field('align');
      $stype                  = get_sub_field('stype');
      $content                = get_sub_field('content');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
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
                      <h3 class="fw-bold"><?php echo $content; ?></h3>
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
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      About Us widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_about_us' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget        = get_sub_field('hide_widget');
        $logo               = get_sub_field('logo');
        $photo              = get_sub_field('photo');
        $content            = get_sub_field('content');
        $contact_us         = get_sub_field('contact_us');
        $contact_url        = get_sub_field('contact_link');
        $phone_num          = get_sub_field('phone_num');
        $label              = get_sub_field('label');
      ?>

        <div class="section section-aboutus text-left" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
                  <div class="content-wrapper">
                    <?php if ($logo) : ?>
                        <div class="logo"><object data="<?php echo $logo['url']; ?>" type="image/svg+xml" aria-label="<?php echo $logo['alt'];?>"></object></div>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>

                    <?php if ($contact_url) : ?>
                        <a href="<?php echo $contact_url; ?>" class="contact-link"><?php echo $contact_us; ?></a>
                    <?php endif; ?>

                    <?php if ($phone_num) : ?>
                        <a href="tel:+1<?php echo str_replace('-', '', $phone_num); ?>" class="phone-number"><?php echo $phone_num; ?></a>
                    <?php endif; ?>

                    <?php if ($photo) : ?>
                        <img class="photo hide-for-sm" alt="<?php echo $photo['alt']; ?>" src="<?php echo $photo['url']; ?>" />
                    <?php endif; ?>

                    <?php if ($photo) : ?>
                        <img class="quote-label hide-for-sm" alt="<?php echo $label['alt']; ?>" src="<?php echo $label['url']; ?>" />
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Business pictured widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_bs_pictured' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $title              = get_sub_field('title');
        $hide_widget        = get_sub_field('hide_widget');
      ?>

        <div class="section section-bp-caption" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($title) :?>
                    <h3 class="title"><?php echo $title; ?></h3>
                  <?php endif; ?>

                  <?php if ( have_rows('businesses') ) :?>
                    <ul class="bp-list">
                    <?php while ( have_rows('businesses') ) : the_row();
                          $business_name   = get_sub_field('business_name');
                          $address         = get_sub_field('address');
                          $website         = get_sub_field('website');
                    ?>
                    
                      <li class="bs-item">
                        <?php if ($website) : ?>
                          <a href="<?php echo $website; ?>" target="_blank" rel="noopener noreferrer"><?php echo $business_name.', '; ?></a>
                        <?php else: ?>
                          <span><?php echo $business_name.', '; ?></span>
                        <?php endif; ?>

                        <span><?php echo $address; ?></span>
                      </li>
                    
                    <?php endwhile;?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      CTA Video widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_video' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
        $hide_widget        = get_sub_field('hide_widget');
        $title_image_dt     = get_sub_field('title_image_dt');
        $title_image_mb     = get_sub_field('title_image_mb');
        $bg_main            = get_sub_field('bg_main');
        $p_image_dt         = get_sub_field('p_image_dt');
        $p_image_tb         = get_sub_field('p_image_tb');
        $p_image_mb         = get_sub_field('p_image_mb');
        $content            = get_sub_field('content');
        $button_text        = get_sub_field('button_text');
        $button_link        = get_sub_field('button_link');
      ?>

        <div class="section section-cta-video" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <?php if($bg_main) : ?>
            <style>.section-cta-video {background: url('<?php echo $bg_main['url']; ?>') top 35px center repeat-x}</style>
          <?php endif; ?>
          <?php if($p_image_dt) : ?>
            <style>
              .section-cta-video {
                background: url('<?php echo $p_image_dt['url']; ?>') top 10px center no-repeat, 
                            url('<?php echo $bg_main['url']; ?>') top 35px center repeat-x;
              }
            </style>
          <?php endif; ?>
          <?php if($p_image_tb) : ?>
            <style>
              @media only screen and (max-width:75em) {
                .section-cta-video {
                  background: url('<?php echo $p_image_tb['url']; ?>') top 10px center no-repeat, 
                              url('<?php echo $bg_main['url']; ?>') top 25px center repeat-x;
                  background-size: cover, auto 80%;
                }
              }
            </style>
          <?php endif; ?>
          <?php if($p_image_mb) : ?>
            <style>
              @media only screen and (max-width:30em) {
                .section-cta-video {
                  background: url('<?php echo $p_image_mb['url']; ?>') top 10px center no-repeat, 
                              url('<?php echo $bg_main['url']; ?>') top 20px center repeat-x;
                  background-size: cover, auto 80%;
                }
              }
            </style>
          <?php endif; ?>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="col-wapper">
                    <div class="title-warpper">
                      <?php if ($title_image_dt) : ?>
                        <img class="title-lg" alt="<?php echo $title_image_dt['alt']; ?>" src="<?php echo $title_image_dt['url']; ?>" />
                      <?php endif; ?>

                      <?php if ($title_image_mb) : ?>
                        <img class="title-sm" alt="<?php echo $title_image_mb['alt']; ?>" src="<?php echo $title_image_mb['url']; ?>" />
                      <?php endif; ?>

                      <?php if ($content) : ?>
                        <h3 class="subheading"><?php echo $content; ?></h3>
                      <?php endif; ?>
                    </div>

                    <?php if ($button_text && $button_link) : ?>
                      <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      Customer quote with video
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_customer_video_quote' ) :
      //if (!get_sub_field('hide_widget')) : 
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $quote            = get_sub_field('quote');
        $video_link       = get_sub_field('video_link');
        $image            = get_sub_field('image');
        $name             = get_sub_field('name');
        $company          = get_sub_field('company');
        $location         = get_sub_field('location');
        $who_is           = get_sub_field('who_is');
        $caption          = get_sub_field('caption');
        $button_text      = get_sub_field('button_text');
        $button_link      = get_sub_field('button_link');
        ?>
        
        <div class="section section-customer-video-quote" <?php echo ($image_bg) ? "style='background-image: url(".$image_bg['url'].");'" : '';?> <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container-narrow">
            <div class="col-left col-sm-5">
              <a id="video-quote" href="<?php echo $video_link; ?>">
                <?php if ($image) : ?>
                  <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                <?php endif; ?>
              </a>              
            </div>
            <div class="col-right col-sm-7">
              <?php if ($quote) : ?>
                <div class="quote">
                  <p><?php echo $quote; ?></p>
                </div>
              <?php endif; ?>
                <div class="author-info">
                  <?php if ($name) : ?>
                    <div class="name">
                      <p><?php echo $name; ?></p>
                    </div>
                  <?php endif; ?>
                    <div class="divider"></div>
                  <?php if ($company || $who_is) : ?>
                    <div class="info">
                      <div class="top">
                        <p class="company"><?php echo $company; ?></p>
                      </div>
                      <div class="bottom">
                        <p class="location"><?php echo $location; ?> | </p>
                        <p class="whois"><?php echo $who_is; ?></p>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
            </div>
          </div>
          <?php if ($caption) : ?>
            <div class="caption">
              <?php echo $caption; ?>              
            </div>
          <?php endif; ?>
          <?php if ($button_text) : ?>
            <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
          <?php endif; ?>        
        </div>
      <?php //endif; ?>

    <?php
    /* --------------------------------------------
      New CTA banner 04/2023
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_home_new_cta' ) : ?>

      <?php //if (!get_sub_field('hide_widget')) : ?>

      <?php
      $hide_widget            = get_sub_field('hide_widget');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-new-cta" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
          <div class="container">
            <div class="content-wrapper">
              <div class="content">
                <?php if ($headline) : ?>
                  <h3 class="headline"><?php echo $headline; ?></h3>
                <?php endif; ?>
                <?php if ($subheadline) : ?>
                  <h3 class="subheadline"><?php echo $subheadline; ?></h3>
                <?php endif; ?>
                <?php if ($button_text) : ?>
                  <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                <?php endif; ?>
              </div>
            </div>            
            <div class="bg-left"></div>
            <div class="bg-right"></div>
          </div>
        </div>
      <?php //endif; ?>

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>
    
</main><!-- #main -->

<?php get_footer(); ?>