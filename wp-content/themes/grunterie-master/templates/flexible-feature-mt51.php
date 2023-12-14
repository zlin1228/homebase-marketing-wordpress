<?php
/*
Template Name: Feature - MT51 - Flexible
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
        $id                     = get_sub_field('widget_id');
        $seotitle               = get_sub_field('seo_title');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $ctatype                = get_sub_field('cta_type');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $button_link            = get_sub_field('button_link');
        $image                  = get_sub_field('image');
        $center_image           = get_sub_field('center_image');
        $add_l_margin           = get_sub_field('add_l_margin');
        $max_width              = get_sub_field('max_width');
        ?>

          <div class="section section-hero" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-flex">
              <div class="row-container">
                <div class="columns col-left medium-6">
                  <div class="column-inner">
                    <div class="text-wrapper <?php echo ($add_l_margin) ? '' : 'nomargin';?>">
                      <?php
                      // headline
                      if ($seotitle) :
                        echo '<h1 class="seo-title">' . $seotitle . '</h1>';
                      endif;

                      if ($headline) :
                        echo '<h2 class="fw-black">' . $headline . '</h2>';
                      endif;

                      if ($subheadline) :
                        echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                      endif;?>

                      <?php if ($ctatype == "form") : ?>

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

                      <?php else : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="columns col-right medium-6 <?php echo ($center_image) ? 'center' : '';?>">
                  <div class="column-inner">
                    <div class="img-wrapper" style="<?php echo ($max_width) ? 'max-width:'.$max_width : '';?>">
                    <?php if ($image ) : ?>
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
        features sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : 
          $nav_menu_name        = get_sub_field('menu_name');
        ?>
          <div class="section section-navbar feature-navbar" <?php echo ($id) ? "id='".$id."'" : '';?>>
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
        Contact hero
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_contact_hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $form_id            = get_sub_field('form_id');
          $form_name          = get_sub_field('form_name');
          $notification       = get_sub_field('notification');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');
          $image              = get_sub_field('image');
        ?>

          <div class="section section-contact-hero" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row">
              <div class="row-container">
                <div class="columns medium-5 col-left">
                  <div class="column-inner">
                    <div class="heading-wrap">
                      <?php if ($headline) : ?>
                        <h1 class="fw-black small"><?php echo $headline; ?></h1>
                      <? endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                      <? endif;?>
                    </div>
                    <?php if ($image) : ?>
                    <div class="image-wrap  hide-for-small">
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                    <? endif;?>
                  </div>
                </div>

                <div class="columns medium-6 medium-offset-1 col-right">
                  <div class="column-inner">
                    <?php if ($form_id) :?>
                    <div id="contact-sales" class="form-wrap">
                      <?php 
                      if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                        Ninja_Forms()->display( intval($form_id), true );
                      } 
                      ?>
                    </div>
                    <? endif;?>
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
      elseif ( get_row_layout() == 'flex_2_col' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $reverse                = get_sub_field('reverse');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $summary                = get_sub_field('summary');
        $add_button             = get_sub_field('add_btn');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $image                  = get_sub_field('image');
        ?>

          <div class="section section-2-cols" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
              <div class="row-container">
                <div class="column medium-6 col-left">
                  <div class="column-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <? endif;?>
                    <?php if ($summary) : ?>
                      <?php echo $summary; ?>
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
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
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

          <div class="section section-customer-quote <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-small">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <?php if ($type != "noimage" &&  $photo) : ?>
                          <div class="photo-wrapper">
                            <img data-src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="lazyload"/>
                          </div>
                        <?php endif; ?>
                        <?php if ( $type == "photo" && $label) : ?>
                          <div class="quote-label hide-for-small">
                            <img class="lazyload"  data-src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
                          </div>
                        <?php endif; ?>
                        <div class="quote-wrapper">
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <p class="name fw-bold"><?php echo $customer_name; ?></p>
                          <p class="position">
                            <span><?php echo $customer_position;?></span>
                            <?php if($link) : ?>
                              <a href = "<?php echo $link; ?>" target="_blank" data-wpel-link="external"> 
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
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        POS integrations widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_pos' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                       = get_sub_field('widget_id');
        $add_link                 = get_sub_field('add_link');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $link_text                = get_sub_field('link_text');
        $link_url                 = get_sub_field('link_url');
        $posts                    = get_sub_field('integrations');
        ?>

          <div class="section section-integration" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-12 text-center">
                  <div class="column-inner">
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
                          <li class="post-item"><img class="lazyload" data-src="<?php echo $img; ?>" alt="<?php the_title(); ?>"></li>
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
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Subscribe banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_subscribe_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $link_url               = get_sub_field('link_url');
        ?>

          <div class="section section-subscribe-banner" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-small">
              <div class="row-container">
                <div class="column medium-12">
                  <div class="column-inner">
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
                            <button type="submit" class="button primary <?php echo $item_type;?>"><?php echo $button_text; ?></button>
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
        Signup banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_signup_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-signup-banner" <?php echo ($id) ? "id='".$id."'" : '';?>>
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
        Review widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_review' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>
  
        <?php
        $id                 = get_sub_field('widget_id');
        $headline           = get_sub_field('headline');
        $subheadline        = get_sub_field('subheadline');
        $customer_review    = get_sub_field('customer_review');
        $customer_info      = get_sub_field('customer_info');
        $rating_text        = get_sub_field('rating_text');
        ?>
  
          <div class="section section-reviews" <?php echo ($id) ? "id='".$id."'" : '';?>>
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
        Business widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_business' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                       = get_sub_field('widget_id');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        ?>

          <div class="section section-business" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-12 text-center">
                  <div class="column-inner">
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
                          <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
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
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        FAQs widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
        ?>

          <div class="section section-faqs" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-6 col-left">
                  <div class="column-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($image_d) : ?>
                        <img class="lazyload hide-for-small" data-src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                        <img class="lazyload show-for-small" data-src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="columns medium-6 col-right">
                  <div class="column-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) :  the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers');
                      ?>
                        <div class="faq-item text-left">
                          <div class="field"><?php echo $faq_field; ?></div>
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
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Signup widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_free_offers' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
          $id               = get_sub_field('widget_id');
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $button_text            = get_sub_field('button_text');
          $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-free-offers" <?php echo ($id) ? "id='".$id."'" : '';?>>
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
        Footer CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $align                  = get_sub_field('align');
        $stype                  = get_sub_field('stype');
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-cta-banner" <?php echo ($id) ? "id='".$id."'" : '';?>>
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

</div>

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