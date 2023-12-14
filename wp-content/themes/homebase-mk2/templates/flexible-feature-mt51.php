<?php
/*
Template Name: Featured - MT51
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">
<?php
  if ( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'flex_hero' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget              = get_sub_field('hide_widget');
        $id                       = get_sub_field('widget_id');
        $class                    = get_sub_field('widget_class');
        $add_bg                   = get_sub_field('add_background');
        $bg_color                 = get_sub_field('bg_color');
        $seotitle                 = get_sub_field('seo_title');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $ctatype                  = get_sub_field('cta_type');
        $button_text              = get_sub_field('button_text');
        $form_link                = get_sub_field('form_link');
        $button_link              = get_sub_field('button_link');
        $demo_button_text         = get_sub_field('demo_button_text');        
        $f_image                  = get_sub_field('f_image');
        $b_image                  = get_sub_field('b_image');
        $center_image             = get_sub_field('center_image');
        $add_l_margin             = get_sub_field('add_l_margin');
        $f_max_width              = get_sub_field('f_max_width');
        $b_max_width              = get_sub_field('b_max_width');
        $hero_type_of_media       = get_sub_field('hero_type_of_media');
        $hero_video               = get_sub_field('hero_video');
        $video_popup_link         = get_sub_field('video_popup_link');
        $video_popup_placeholder  = get_sub_field('video_popup_placeholder');
        $logos                    = get_sub_field('logos');
        $caption                  = get_sub_field('caption');
        ?>

          <div class="section section-hero <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <?php if ($add_bg) : ?>
              <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
            <?php endif; ?>
            <div class="container">
              <div class="row v-align-middle equal-height">
                <div class="col-left col col-12 col-sm-6">
                  <div class="col-inner">
                    <div class="text-wrapper <?php echo ($add_l_margin) ? '' : 'nomargin';?>">
                      <?php
                      // headline
                      if ($seotitle) :
                        echo '<p class="seo-title micro">' . $seotitle . '</p>';
                      endif;

                      if ($headline) :
                        echo '<h1 class="fw-black">' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                      endif;?>

                      <?php if ($ctatype == "form") : ?>

                      <form novalidate action="<?php echo $form_link; ?>"
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
                      <?php elseif ($ctatype == "two_buttons") : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                        <a class="button demo" href="#"><?php echo $demo_button_text; ?></a>
                      <?php else : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
                      <img src="<?php echo $video_popup_placeholder['url']; ?>" alt="<?php echo $video_popup_placeholder['alt']; ?>">
                      <?php endif; ?>
                    </a>
                  </div>                                
                </div>
                <?php endif; ?>  
                <?php if ( $hero_type_of_media == "video" && $hero_video ) : ?>
                <div class="hero-video col col-12 col-sm-6 col-right">
                  <div class="hero-video-wrapper">
                    <?php echo $hero_video; ?>  
                  </div>                                
                </div>
                <?php endif; ?>  
                <?php if ( $hero_type_of_media == "image" ) : ?>
                <div class="col col-12 col-sm-6 col-right <?php echo ($center_image) ? 'center' : '';?>">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($b_image ) : ?>
                      <div class="img-wrapper img-wrapper-main" <?php echo ($b_max_width) ? "style='width:".$b_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $b_image, 'full', '', array( "class" => "hero-img parallax-content1" ) ); ?>
                      </div>
                      <?php endif; ?>

                      <?php if ($f_image ) : ?>
                      <div class="img-wrapper img-wrapper-sub" <?php echo ($f_max_width) ? "style='width:".$f_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $f_image, 'full', '', array( "class" => "hero-img-sub parallax-content2" ) ); ?>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>  
              </div>              
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        features sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) :
        //if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');
          $nav_menu_name      = get_sub_field('menu_name');?>
          
          <div class="section section-navbar feature-navbar" data-scroll-sticky <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'features-sub', 'container_class' => 'features-sub-container') ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Customer quote NEW 11/2022
      -------------------------------------------- */
      elseif ( get_row_layout() == 'customer_quote_new' ) :
        //if (!get_sub_field('hide_widget')) : 
          $hide_widget      = get_sub_field('hide_widget');
          $id               = get_sub_field('widget_id');
          $quote_headline   = get_sub_field('quote_headline');
          $quote            = get_sub_field('quote');
          $image_back       = get_sub_field('image_back');
          $image_front      = get_sub_field('image_front');
          $name             = get_sub_field('name');
          $company          = get_sub_field('company');
          $who_is           = get_sub_field('who_is');
          ?>
          
          <div class="section section-customer-quote-new" <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <?php if ($quote_headline) : ?>
            <div class="quote-headline">
              <h3><?php echo $quote_headline; ?></h3>
            </div>
            <?php endif; ?>
            <?php if ($quote) : ?>
            <div class="quote">
              <p><?php echo $quote; ?></p>
            </div>
            <?php endif; ?>
            <?php if ($image_back) : ?>
            <div class="back-image"><img src="<?php echo $image_back['url']; ?>" alt="<?php echo $image_back['alt']; ?>"></div>
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
                <p class="company"><?php echo $company; ?></p>
                <p class="whois"><?php echo $who_is; ?></p>
              </div>
              <?php endif; ?>
            </div>
            <?php if ($image_front) : ?>
            <div class="front-image"><img src="<?php echo $image_front['url']; ?>" alt="<?php echo $image_front['alt']; ?>"></div>
            <?php endif; ?>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Contact hero
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_contact_hero' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');
          $form_id            = get_sub_field('form_id');
          $form_name          = get_sub_field('form_name');
          $notification       = get_sub_field('notification');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');
          $image              = get_sub_field('image');
        ?>

          <div class="section section-contact-hero" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <div class="row">
                <div class="col col-12 col-sm-5 col-left">
                  <div class="col-inner">
                    <div class="heading-wrap">
                      <?php if ($headline) : ?>
                        <h1 class="fw-black small"><?php echo $headline; ?></h1>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                    </div>
                    <?php if ($image) : ?>
                    <div class="image-wrap  hide-for-small">
                      <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                    </div>
                    <?php endif;?>
                  </div>
                </div>

                <div class="col col-12 col-sm-6 offset-sm-1 col-right">
                  <div class="col-inner">
                    <?php if ($form_id) :?>
                    <div id="contact-sales" class="form-wrap">
                      <?php 
                      if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                        Ninja_Forms()->display( intval($form_id), true );
                      } 
                      ?>
                    </div>
                    <?php endif;?>
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
      elseif ( get_row_layout() == 'flex_2_col' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $reverse                = get_sub_field('reverse');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $summary                = get_sub_field('summary');
        $add_button             = get_sub_field('add_btn');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $add_demo_button        = get_sub_field('add_demo_button');
        $demo_button_text       = get_sub_field('demo_button_text');
        $max_width              = get_sub_field('max_width');
        $max_height             = get_sub_field('max_height');
        $image                  = get_sub_field('image');
        $text_left              = get_sub_field('text_left');
        $text_right             = get_sub_field('text_right');
        $comment                = get_sub_field('comment');
        ?>

          <div class="section section-2-cols" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <?php endif;?>
                    <?php if ($summary) : ?>
                      <?php echo $summary; ?>
                    <?php endif;?>
                    <?php if ($add_button) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif;?>
                    <?php if ($add_demo_button) : ?>
                      <a class="button demo" href="#"><?php echo $demo_button_text; ?></a>
                    <?php endif;?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <?php if (get_sub_field('add_top_banner')) : ?>
                    <div class="banner">
                    <?php if ($text_left) : ?>
                      <p class="text-block-left"><?php echo $text_left; ?></p>  
                    <?php endif;?>
                    <?php if ($text_right) : ?>
                      <p class="text-block-right"><?php echo $text_right; ?></p>  
                    <?php endif;?>
                    </div>
                    <?php if ($comment) : ?>
                    <div class="comment">
                      <p><?php echo $comment; ?></p>
                    </div>
                    <?php endif;?>
                    <?php endif;?> 
                    <div class="img-wrapper" style="<?php echo ($max_width)? 'max-width:'.$max_width : '';?> <?php echo ($max_height)? 'max-height:'.$max_height : '';?>">
                    <?php if ($image) : ?>
                      <?php echo wp_get_attachment_image( $image, 'full' ); ?>
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
        Best payroll software
      -------------------------------------------- */
      elseif ( get_row_layout() == 'best_payroll_software' ) :
        //if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');?>
          
          <div class="section section-bps" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <img src="/wp-content/themes/homebase/images/payroll-number1.png" alt="Best payroll software">
                    <?php if ($headline) : ?>
                    <h3 class="headline"><?php echo $headline; ?></h3>
                    <?php endif; ?>
                    <?php if ($subheadline) : ?>
                    <p class="subheadline"><?php echo $subheadline; ?></p>
                    <?php endif; ?>
                    <div class="bps-logo"><img src="/wp-content/themes/homebase/images/payroll-fit-small-business.png" alt="Fit small business"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $type                   = get_sub_field('image_type');
        $title                  = get_sub_field('title');
        $photo                  = get_sub_field('image');
        $quote                  = get_sub_field('quote');
        $label                  = get_sub_field('label');
        $customer_name          = get_sub_field('name');
        $customer_position      = get_sub_field('position');
        $business               = get_sub_field('business');
        $address                = get_sub_field('address');
        $link                   = get_sub_field('link');
        ?>

          <div class="section section-customer-quote <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <?php if ($type != "noimage" &&  $photo) : ?>
                          <div class="photo-wrapper">
                            <?php echo wp_get_attachment_image( $photo, 'full' ); ?>
                          </div>
                        <?php endif; ?>
                        <?php if ( $type == "photo" && $label) : ?>
                          <div class="quote-label hide-for-small">
                            <?php echo wp_get_attachment_image( $label, 'full' ); ?>
                          </div>
                        <?php endif; ?>
                        <div class="quote-wrapper">
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <p class="name fw-bold"><?php echo $customer_name; ?></p>
                          <p class="position">
                            <span><?php echo $customer_position;?></span>
                            <?php if($link) : ?>
                              <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                            <?php endif; ?>
                            <span><?php echo $business; ?></span>
                            <?php if($link) : ?>
                              </a> 
                            <?php endif; ?>

                            <?php if($address) : ?>
                            <span><?php echo $address;?></span>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        POS integrations widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_pos' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget              = get_sub_field('hide_widget');
        $id                       = get_sub_field('widget_id');
        $add_link                 = get_sub_field('add_link');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $link_text                = get_sub_field('link_text');
        $link_url                 = get_sub_field('link_url');
        $posts                    = get_sub_field('integrations');
        ?>

          <div class="section section-integration" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-sm-12 text-center">
                  <div class="col-inner">
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h3 class="fw-black"><?php echo $headline; ?></h3>
                      <?php endif; ?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif; ?>
                    </div>
                    <?php if ($posts) : ?>
                      <ul class="integrations-grid">
                      <?php foreach($posts as $post) : ?>
                        <?php 
                          setup_postdata($post);
                          $img = get_field('logo');

                          if ($img) : 
                        ?>
                          <li class="post-item"><img src="<?php echo $img; ?>" alt="<?php the_title(); ?>"></li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </ul>
                      <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <?php if ($add_link) : ?>
                      <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Subscribe banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_subscribe_banner' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $link_url               = get_sub_field('link_url');
        ?>

          <div class="section section-subscribe-banner" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="banner-container">
                      <div class="banner-header">
                        <?php

                        if ($headline) :
                          echo '<h3 class="fw-black">' . $headline . '</h3>';
                        endif;

                        if ($subheadline) :
                          echo '<p>' . $subheadline . '</p>';
                        endif;?>
                      </div>

                      <div class="form">
                        <form name="subscribe"
                            action="<?php echo $link_url; ?>"
                            method="GET"
                            class="email"
                        >
                          <input type="hidden" name="modal_ID" value="<?php echo $modal_ID; ?>" />
                          <div class="form-item input">
                            <input class="homeform <?php echo $item_type; ?>"
                                aria-label="email address"
                                type="email"
                                name="email"
                                placeholder="Email address"
                            />
                          </div>
                          <div class="form-item">
                            <button type="submit" 
                                class="button primary <?php echo $item_type;?>"
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
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Signup CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_signup_banner' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $add_demo_button        = get_sub_field('add_demo_button');
        $demo_button_text       = get_sub_field('demo_button_text');
        ?>

          <div class="section section-signup-banner" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
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
                              <?php if ($add_demo_button) : ?>
                                <a class="button demo" href="#"><?php echo $demo_button_text; ?></a>
                              <?php endif;?>
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
                                <div class="rscore"><object data="<?php echo $r_image['url']; ?>" type="image/svg+xml" alt="<?php echo $r_image['alt'];?>"><?php echo $r_image['alt'];?></object></div>
                                <div class="rlabel"><?php echo $r_label; ?></div>
                                <div class="rquote"><?php echo $r_quote; ?></div>
                                <div class="plogo">
                                  <?php if ($p_url) : ?><a href="<?php echo $p_url; ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                                    <?php echo wp_get_attachment_image( $p_logo, 'full' ); ?>
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
        Business widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_business' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget              = get_sub_field('hide_widget');
        $id                       = get_sub_field('widget_id');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        ?>

          <div class="section section-business" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12 text-center">
                  <div class="col-inner">
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h3 class="fw-black"><?php echo $headline; ?></h3>
                      <?php endif; ?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif; ?>
                    </div>
                    <?php if(have_rows('business')) : ?>
                      <ul class="business-grid">
                      <?php while(have_rows('business')) :  the_row(); 
                        $icon               = get_sub_field('icon');
                        $title              = get_sub_field('title');
                        $link_url           = get_sub_field('link_url');
                      ?>
                        <li class="grid-item">
                          <a class="text-link" href="<?php echo $link_url; ?>">
                          <?php echo wp_get_attachment_image( $icon, 'full' ); ?>
                          <p class="title"><?php echo $title; ?></p>
                          </a>
                        </li>
                      <?php endwhile; ?>
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
        Learn More widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_learn_more' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        ?>

          <div class="section section-learn-more" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">

              <div class="section-header">
                <h3 class="fw-black"><?= get_sub_field("title") ?></h3>
                <div class="learn-more-desc">
                    <?= get_sub_field("description") ?>
                </div>
              </div>

              <div class="row">
                <?php
                  if ( have_rows('clock_apps') ) : 
                    while ( have_rows('clock_apps') ) : the_row();
                ?>
                <div class="col col-4 col-sm-3 col-xs-2">
                  <div class="col-inner">
                    <div class="col-wrapper">   
                      <p><?= get_sub_field("app_text") ?></p>
                      <a href='<?= get_sub_field("app_link") ?>'><?= get_sub_field("app_link_title") ?></a>
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
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        FAQs widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
        ?>

          <div class="section section-faqs" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($image_d) : ?>
                        <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                        <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) :  the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers'); ?>
                        <div class="faq-item text-left">
                          <?php if ($faq_field) : ?>
                          <div class="field"><?php echo $faq_field; ?></div>
                          <?php endif; ?>
                          <h3 class="subheading fw-bold"><?php echo $question; ?></h3>
                          <?php echo $answers; ?>
                        </div>
                      <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

        <?php 
    
        global $schema;

        $schema = array(
        '@context'   => "https://schema.org",
        '@type'      => "FAQpage",
        'mainEntity' => array()
        );

        if ( have_rows('faqs') ) {
          while ( have_rows('faqs') ) : the_row();
            $questions = array(
              '@type'          => 'Question',
              'name'           => get_sub_field('question'),
              'acceptedAnswer' => array(
              '@type' => "Answer",
              'text' => get_sub_field('answers')
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

      <?php
      /* --------------------------------------------
        FAQs widget NEW
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq_new' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
        $type             = get_sub_field('type');
        ?>

          <div class="section section-faqs-new <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="row">
                <?php if ($type == 'one-col') : ?>
                  <?php if ($subheadline) : ?>
                    <p class="subheadline micro"><?php echo $subheadline; ?></p>
                  <?php endif; ?>
                  <?php if ($headline) : ?>
                    <h2 class="headline fw-black"><?php echo $headline; ?></h2>
                  <?php endif; ?>
                  <div class="col-right">
                    <div class="col-inner">
                      <?php if(have_rows('faqs')) : ?>
                        <?php while(have_rows('faqs')) : the_row(); 
                          $faq_field         = get_sub_field('faq_field');
                          $question          = get_sub_field('question');
                          $answers           = get_sub_field('answers'); ?>
                          <div class="faq-item text-left">
                            <?php if ($faq_field) : ?>
                              <div class="field">
                                <p class="micro"><?php echo $faq_field; ?></p>
                              </div>
                            <?php endif; ?>
                            <?php if ($question) : ?>
                              <div class="question">
                                <p><?php echo $question; ?></p>
                                <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                              </div>
                            <?php endif; ?>
                            <?php if ($answers) : ?>
                              <div class="answer">
                                <?php echo $answers; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php else : ?>
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($image_d) : ?>
                        <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                        <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) : the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers'); ?>
                        <div class="faq-item text-left">
                          <?php if ($faq_field) : ?>
                            <div class="field">
                              <p class="micro"><?php echo $faq_field; ?></p>
                            </div>
                          <?php endif; ?>
                          <?php if ($question) : ?>
                            <div class="question">
                              <p><?php echo $question; ?></p>
                              <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                            </div>
                          <?php endif; ?>
                          <?php if ($answers) : ?>
                            <div class="answer">
                              <?php echo $answers; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php //endif; ?>

        <?php 
    
        global $schema;

        $schema = array(
        '@context'   => "https://schema.org",
        '@type'      => "FAQpage",
        'mainEntity' => array()
        );

        if ( have_rows('faqs') ) {
          while ( have_rows('faqs') ) : the_row();
            $questions = array(
              '@type'          => 'Question',
              'name'           => get_sub_field('question'),
              'acceptedAnswer' => array(
              '@type' => "Answer",
              'text' => get_sub_field('answers')
              )
            );
            array_push($schema['mainEntity'], $questions);
          endwhile;

        function blog_generate_faq_new_schema ($schema) {
          global $schema;
          if ($schema['mainEntity']) {
            echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
          }
        }
        add_action( 'wp_footer', 'blog_generate_faq_new_schema', 100 );
        }

        ?>

      <?php
      /* --------------------------------------------
        Features widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'features_new' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget              = get_sub_field('hide_widget');
        $id                       = get_sub_field('widget_id');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $image                    = get_sub_field('image');
        ?>

          <div class="section section-features" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <div class="section-header">
                <?php if ($headline) : ?>
                  <h2 class="fw-black"><?php echo $headline; ?></h2>
                <?php endif; ?>
                <?php if ($subheadline) : ?>
                  <p class="subheading normal"><?php echo $subheadline; ?></p>
                <?php endif; ?>
              </div>
              <?php if(have_rows('features_repeater')) : ?>
                <div class="features">
                  <?php while(have_rows('features_repeater')) :  the_row(); 
                    $title              = get_sub_field('title');
                    $text               = get_sub_field('text');
                    $link_url           = get_sub_field('link_url');
                    $link_text          = get_sub_field('link_text');  ?>
                    <div class="feature">
                      <?php if ($title) : ?>
                        <div class="title">
                          <p><?php echo $title; ?></p>
                          <img class="cross" src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">     
                        </div>
                      <?php endif; ?>
                      <?php if ($text) : ?>
                        <div class="text">
                          <?php echo $text; ?>                        
                        </div>
                      <?php endif; ?>
                      <?php if ($link_url) : ?>
                        <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                  <?php if ($image) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Features widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'testimonials_carousel' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget              = get_sub_field('hide_widget');
        $id                       = get_sub_field('widget_id');
        $headline                 = get_sub_field('headline');
        $count                    = count(get_sub_field('testimonials'));
        ?>

          <div class="section section-testimonials-carousel" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <?php if(have_rows('testimonials')) : ?>
                <div class="marquee">
                  <div class="testimonials">
                    <?php while(have_rows('testimonials')) :  the_row(); 
                      $title              = get_sub_field('title');
                      $text               = get_sub_field('text');
                      $icon               = get_sub_field('icon');
                      $author             = get_sub_field('author');
                      $date               = get_sub_field('date');  ?>
                      <div class="testimonial">
                        <?php if ($title) : ?>
                          <div class="title">
                            <p><?php echo $title; ?></p>
                            <?php if ($icon) : ?>
                              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php endif; ?>                       
                          </div>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                          <div class="text">
                            <?php echo $text; ?>                        
                          </div>
                        <?php endif; ?>
                        <?php if ($author || $date) : ?>
                          <div class="info">
                            <?php if ($author) : ?>
                              <div class="author">
                                <?php echo $author; ?>                        
                              </div>
                            <?php endif; ?>
                            <?php if ($date) : ?>
                              <div class="date">
                                <?php echo $date; ?>                        
                              </div>
                            <?php endif; ?>                 
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>                  
                  </div>
                  <div class="testimonials">
                    <?php while(have_rows('testimonials')) :  the_row(); 
                      $title              = get_sub_field('title');
                      $text               = get_sub_field('text');
                      $icon               = get_sub_field('icon');
                      $author             = get_sub_field('author');
                      $date               = get_sub_field('date');  ?>
                      <div class="testimonial">
                        <?php if ($title) : ?>
                          <div class="title">
                            <p><?php echo $title; ?></p>
                            <?php if ($icon) : ?>
                              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php endif; ?>                       
                          </div>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                          <div class="text">
                            <?php echo $text; ?>                        
                          </div>
                        <?php endif; ?>
                        <?php if ($author || $date) : ?>
                          <div class="info">
                            <?php if ($author) : ?>
                              <div class="author">
                                <?php echo $author; ?>                        
                              </div>
                            <?php endif; ?>
                            <?php if ($date) : ?>
                              <div class="date">
                                <?php echo $date; ?>                        
                              </div>
                            <?php endif; ?>                 
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>                  
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Slider
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_slider' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>

          <div class="section section-slider" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
                <h3 class="subheading">
                  <?php echo $subheadline; ?>
                </h3>
              <?php endif; ?>
              <div class="content">
                <div class="col-left col-sm-5">
                  <?php if ( have_rows('items') ) : ?>
                    <?php while ( have_rows('items') ) : the_row();
                      $title          = get_sub_field('title');
                      $subtitle       = get_sub_field('subtitle');
                      $image          = get_sub_field('image');
                      $link_text      = get_sub_field('link_text');
                      $link_url       = get_sub_field('link_url');?>
                      <div class="item">
                        <?php if ($title) : ?>
                          <div class="title">
                            <p><?php echo $title; ?></p>
                            <img src="/wp-content/themes/homebase/images/chevron-down-34.svg">
                          </div>
                        <?php endif; ?>
                        <div class="progress-bar-wrapper"></div>
                        <?php if ($image) : ?>
                          <div class="image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        <?php endif; ?>
                        <?php if ($subtitle) : ?>
                          <div class="subtitle">
                            <?php echo $subtitle; ?>
                          </div>
                        <?php endif; ?>
                        <?php if ($link_url) : ?>
                          <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>                    
                  <?php endif; ?>
                </div>
                <div class="col-right col-sm-6">
                  <?php if ( have_rows('items') ) : ?>
                    <?php while ( have_rows('items') ) : the_row();
                      $image      = get_sub_field('image');?>
                      <div class="item">
                        <?php if ($image) : ?>
                          <div class="image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Features icon boxes
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_features_iconboxes' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>

          <div class="section section-features-iconboxes" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
                <p class="subheadline">
                  <?php echo $subheadline; ?>
                </p>
              <?php endif; ?>              
              <?php if ( have_rows('iconboxes_repeater') ) : ?>
                <div class="iconboxes">
                  <?php while ( have_rows('iconboxes_repeater') ) : the_row();
                    $title          = get_sub_field('title');
                    $icon           = get_sub_field('icon');
                    $link_url       = get_sub_field('link_url');?>
                    <div class="iconbox">                      
                      <?php if ($link_url) : ?>
                        <a href="<?php echo $link_url; ?>">
                          <?php if ($icon) : ?>
                            <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                          <?php endif; ?>
                          <?php if ($title) : ?>
                            <p class="title"><?php echo $title; ?></p>
                          <?php endif; ?>
                        </a>
                      <?php endif; ?>                      
                    </div>
                  <?php endwhile; ?>     
                </div>               
              <?php endif; ?>              
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Apps CTA
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_apps' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $image_appstore         = get_sub_field('image_appstore');
        $image_gplay            = get_sub_field('image_gplay');
        $url_appstore           = get_sub_field('url_appstore');
        $url_gplay              = get_sub_field('url_gplay');
        ?>

          <div class="section section-cta-apps" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <?php if ($headline) : ?>
                <h3 class="headline">
                  <?php echo $headline; ?>
                </h3>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
                <p class="subheadline">
                  <?php echo $subheadline; ?>
                </p>
              <?php endif; ?>
              <?php if ($image_appstore || $image_gplay) : ?>
                <div class="buttons">
                  <?php if ($image_appstore) : ?>
                    <div class="appstore">
                      <a href="<?php echo $url_appstore; ?>" target="_blank">
                        <img src="<?php echo $image_appstore['url']; ?>" alt="<?php echo $image_appstore['alt']; ?>">
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php if ($image_gplay) : ?>
                    <div class="gplay">
                      <a href="<?php echo $url_gplay; ?>" target="_blank">
                        <img src="<?php echo $image_gplay['url']; ?>" alt="<?php echo $image_gplay['alt']; ?>">
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Challenges
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_challenges' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>

          <div class="section section-challenges" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
                <p class="subheadline">
                  <?php echo $subheadline; ?>
                </p>
              <?php endif; ?>              
              <?php if ( have_rows('challenges_repeater') ) : ?>
                <div class="challenges">
                  <?php while ( have_rows('challenges_repeater') ) : the_row();
                    $text           = get_sub_field('text');
                    $link_url       = get_sub_field('link_url');?>                    
                    <?php if ($link_url) : ?>
                      <a class="challenge" href="<?php echo $link_url; ?>">
                        <?php if ($text) : ?>
                          <span class="text"><?php echo $text; ?></span>
                          <img src="/wp-content/themes/homebase/images/arrow-right-darkpurple-34.svg">
                        <?php endif; ?>
                      </a>
                    <?php endif; ?>
                  <?php endwhile; ?>     
                </div>               
              <?php endif; ?>              
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Free offers widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_free_offers' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
          $hide_widget            = get_sub_field('hide_widget');
          $id                     = get_sub_field('widget_id');
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $button_text            = get_sub_field('button_text');
          $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-free-offers" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
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
        <?php //endif; ?>
      
      <?php
      /* --------------------------------------------
        Footer CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget            = get_sub_field('hide_widget');
        $id                     = get_sub_field('widget_id');
        $align                  = get_sub_field('align');
        $stype                  = get_sub_field('stype');
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $add_demo_button        = get_sub_field('add_demo_button');
        $demo_button_text       = get_sub_field('demo_button_text');
        ?>

          <div class="section section-cta-banner" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
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
                      <?php if ($add_demo_button) : ?>
                        <a class="button demo reverse" href="#"><?php echo $demo_button_text; ?></a>
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
        Business pictured widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_bs_pictured' ) : ?>

        <?php //if (!get_sub_field('hide_widget')) : ?>

        <?php
          $hide_widget        = get_sub_field('hide_widget');
          $title              = get_sub_field('title');
          $id                 = get_sub_field('widget_id');
        ?>

          <div class="section section-bp-caption" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
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
        Simple one column
      -------------------------------------------- */
      elseif ( get_row_layout() == 'simple_one_column' ) :
        //if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');
          $content            = get_sub_field('content');
          ?>
          <div class="section section-simple-one-column <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>">
            <div class="container-narrow">
              <?php if ($content) : ?>
                <div class="content"><?php echo $content; ?></div>
              <?php endif; ?>
            </div>
          </div>
        <?php //endif; ?>

      <?php
      /* --------------------------------------------
        Awards widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_awards' ) :
        //if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');?>
          
          <div class="section section-awards" <?php echo ($id) ? "id='".$id."'" : '';?> <?php echo ($hide_widget) ? 'style="display:none;"' : '' ?>>
            <div class="container">
              <?php if ( have_rows('awards_images', 'option') ) :?>
                <?php $award_images = get_field('awards_images', 'option'); ?>
                <div class="marquee">                    
                  <div class="marquee-inner" style="animation-duration: <?php echo count($award_images)*4; ?>s;">
                    <?php foreach( $award_images as $award_image ): ?>
                      <div class="img-container">
                        <img class="marquee-img" src="<?php echo $award_image['url']; ?>" alt="<?php echo $award_image['alt']; ?>"/>
                      </div>                      
                    <?php endforeach; ?>
                  </div>
                  <div class="marquee-inner" style="animation-duration: <?php echo count($award_images)*4; ?>s;">
                    <?php foreach( $award_images as $award_image ): ?>
                      <div class="img-container">
                        <img class="marquee-img" src="<?php echo $award_image['url']; ?>" alt="<?php echo $award_image['alt']; ?>"/>
                      </div> 
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php //endif; ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>