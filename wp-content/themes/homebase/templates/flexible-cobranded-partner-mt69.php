<?php
/*
Template Name: Cobranded - Partner - MT69 - Flexible
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
        $layout                 = get_sub_field('layout');
        $border_type            = get_sub_field('border_type');
        $partner_brand          = get_sub_field('partner_brand');
        $homebase_brand         = get_sub_field('homebase_brand');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $button_classes         = get_sub_field('button_classes');
        $image                  = get_sub_field('image');
        ?>

          <div class="section section-hero <?php echo ($layout == 'one') ? 'one-col' : 'two-cols'; ?>">
            <div class="container">
              <div class="row row-brand">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="brand-container">
                      <div class="brand-wrap partner <?php echo $border_type; ?>">
                        <img src="<?php echo $partner_brand['url']; ?>" alt="<?php echo $partner_brand['alt']; ?>">
                      </div>
                      <div class="plus-wrap <?php echo $border_type; ?>">
                        <span class="plus">+</span>
                      </div>
                      <div class="brand-wrap homebase <?php echo $border_type; ?>">
                        <img src="<?php echo $homebase_brand['url']; ?>" alt="<?php echo $homebase_brand['alt']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-content <?php echo ($layout == 'two') ? 'v-align-middle' : ''; ?>">
                <div class="col col-12 <?php echo ($layout == 'two') ? 'col-sm-6' : ''; ?>">
                  <div class="col-inner">
                    <div class="text-container">
                      <?php if ($headline) : ?>
                        <h1 class="fw-black <?php echo ($layout == 'two') ? 'small' : ''; ?>"><?php echo $headline; ?></h1>
                      <?php endif;?>

                      <?php if ($subheadline) : ?>
                        <h3 class="subheading fw-normal"><?php echo $subheadline; ?></h3>
                      <?php endif; ?>
                      <a class="button primary <?php echo ($button_classes) ? $button_classes : ''; ?>" href="<?php echo $button_link; ?>">
                        <?php echo $button_text; ?>
                      </a>
                    </div>
                  </div>
                </div>

                <?php if ($layout == 'two') : ?>
                <div class="col col-12 col-sm-6">
                  <div class="col-inner">
                    <div class="image-container">
                      <?php if ($image) : ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Signup cards widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_signup_cards' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>
  
        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $scroll_anchor          = get_sub_field('scroll_anchor');
        ?>
  
          <div class="section section-signup-cards" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading fw-normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                    </div>

                    <div class="section-main">
                      <?php if ( have_rows('cards') ) :?>
                        <div class="card-grid">
                          <?php
                            while ( have_rows('cards') ) : the_row();
                              $title                = get_sub_field('title');
                              $subtitle             = get_sub_field('subtitle');
                              $logo                 = get_sub_field('logo');
                              $content              = get_sub_field('content');
                              $button_text          = get_sub_field('button_text');
                              $button_link          = get_sub_field('button_link');
                              $button_classes       = get_sub_field('button_classes');
                          ?>
                            <div class="card text-center">
                              <div class="card-container">
                                <?php if ($title) : ?>
                                  <h3 class="title fw-bold"><?php echo $title; ?></h3>
                                <?php endif;?>
                                <?php if ($subtitle) : ?>
                                  <p class="subtitle"><?php echo $subtitle; ?></p>
                                <?php endif;?>
                                <?php if ($logo) : ?>
                                  <div class="image-wrap"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></div>
                                <?php endif;?>
                                <?php if ($content) : ?>
                                  <?php echo $content; ?>
                                <?php endif;?>
                                <?php if ($button_text && $button_link) : ?>
                                  <a class="button primary <?php echo ($button_classes) ? $button_classes : ''; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                                <?php endif;?>
                              </div>
                            </div>
                          <?php endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                    <?php if ($add_link) : ?>
                    <div class="section-footer">
                      <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        3 columns widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_3_columns' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>
  
        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $scroll_anchor          = get_sub_field('scroll_anchor');
        $add_footer_link        = get_sub_field('add_footer_link');
        $footer_link_text       = get_sub_field('footer_link_text');
        $footer_link_url        = get_sub_field('footer_link_url');
        $image_type             = get_sub_field('image_type');
        ?>
  
          <div class="section section-3-columns" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
            <div class="<?php echo ($image_type == "icon") ? 'container-narrow' : 'container'?>">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($headline || $subheadline) : ?>
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading fw-normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                    </div>
                    <?php endif;?>
                    <div class="section-main">
                      <?php if ( have_rows('columns') ) :?>
                        <div class="row">
                          <?php
                            while ( have_rows('columns') ) : the_row();
                              $icon           = get_sub_field('icon');
                              $title          = get_sub_field('title');
                              $desc           = get_sub_field('desc');
                              $add_link       = get_sub_field('add_link');
                              $link_text      = get_sub_field('link_text');
                              $link_url       = get_sub_field('link_url');
                          ?>
                            <div class="col col-12 col-sm-4">
                              <div class="col-inner">
                                <div class="column-wrap">
                                  <?php if ($icon) : ?>
                                    <div class="<?php echo ($image_type == "icon") ? 'icon-wrap' : 'image-wrap'?>"><img class="lazyload" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></div>
                                  <?php endif;?>
                                  <?php if ($title || $desc) : ?>
                                    <div class="text-wrap">
                                      <span class="title fw-black"><?php echo $title; ?></span>
                                      <p><?php echo $desc; ?></p>
                                    </div>
                                  <?php endif;?>
                                  <?php if ($add_link && $link_text) : ?>
                                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                  <?php endif;?>
                                </div>
                              </div>
                            </div>
                          <?php endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                    <?php if ($add_footer_link && $footer_link_text) : ?>
                    <div class="section-footer">
                      <a class="text-link-arrow" href="<?php echo $footer_link_url; ?>"><?php echo $footer_link_text; ?></a>
                    </div>
                    <?php endif;?>
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
        $scroll_anchor          = get_sub_field('scroll_anchor');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        ?>
  
          <div class="section section-2-columns" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($headline || $subheadline) : ?>
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading fw-normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                    </div>
                    <?php endif;?>
                    <div class="section-main">
                      <?php if ( have_rows('items') ) :
                            while ( have_rows('items') ) : the_row();
                              $reverse          = get_sub_field('reverse');
                              $link_group       = get_sub_field('link_group');
                              $title            = get_sub_field('title');
                              $description      = get_sub_field('description');
                              $add_link         = get_sub_field('add_link');
                              $link_widget      = get_sub_field('link_widget');
                              $link_text        = get_sub_field('link_text');
                              $link_url         = get_sub_field('link_url');
                              $button_text      = get_sub_field('button_text');
                              $button_url       = get_sub_field('button_url');
                              $button_classes   = get_sub_field('button_classes');
                              $image            = get_sub_field('image');
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

                                <?php if ($add_link) : ?>
                                  <?php if ($link_widget == "text") : ?>
                                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                  <?php else : ?>
                                    <a class="button primary <?php echo ($button_classes) ? $button_classes : ''; ?>" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
                                  <?php endif;?>
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
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title                  = get_sub_field('title');
        $quote                  = get_sub_field('quote');
        $customer_name          = get_sub_field('name');
        $customer_position      = get_sub_field('position');
        ?>

          <div class="section section-customer-quote">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($title) : ?>
                      <div><h3 class="subheading fw-black hide-for-sm"><?php echo $title; ?></h3></div>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <div class="quote-wrapper">
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
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-signup-banner">
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
        Footer CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_footer_cta' ) : ?>

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
                        <a class="button primary reverse <?php echo ($button_classes) ? $button_classes : ''; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
        Footer Intro
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_footer_intro' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : 

          $logo            = get_sub_field('logo');
          $content_d       = get_sub_field('content_d');
          $content_m       = get_sub_field('content_m');
          
        ?>
          <div class="section section-footer-intro">
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="intro-container">
                      <div class="content-wrapper">
                        <?php
                        if ($logo) :?>
                          <img class="homebase-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                        <?php endif;

                        if ($content_d) :
                          echo '<div class="hide-for-sm">'. $content_d.'</div>';
                        endif;

                        if ($content_m) :
                          echo '<div class="show-for-sm">'. $content_m.'</div>';
                        endif;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif;

      /* --------------------------------------------
        Footer Intro
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_notification' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : 

          $content       = get_sub_field('content');
          
        ?>
          <div class="section section-notification">
            <div class="container-narrow">
              <div class="row text-left">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="content-wrapper">
                      <?php
                      if ($content) :
                        echo $content;
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
        Video
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_video' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : 

          $v_headline             = get_sub_field('v_headline');
          $v_content              = get_sub_field('v_content');
          $v_button_text          = get_sub_field('v_button_text');
          $v_button_link          = get_sub_field('v_button_link');

        ?>
          <div class="section section-video">
            <div class="container-narrow">
              <div class="row row-video">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="col-header">
                      <?php if ($v_headline) : ?>
                        <h2 class="fw-black"><?php echo $v_headline; ?></h2>
                      <?php endif;?>
                    </div>

                    <div class="col-main  hide-for-sm">
                      <?php
                        if($v_content) :
                          echo $v_content;
                        endif;
                      ?>
                    </div>

                    <div class="col-watchbtn show-for-sm">
                      <a class="button secondary watch-video" href="<?php echo $v_button_link; ?>"><?php echo $v_button_text; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Guide Widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_toggle' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $tab_icon_o            = get_sub_field('tab_icon_o');
        $tab_title_o           = get_sub_field('tab_title_o');
        $headline_o            = get_sub_field('headline_o');
        $add_button_o           = get_sub_field('add_button_o');
        $button_text_o         = get_sub_field('button_text_o');
        $button_link_o         = get_sub_field('button_link_o');

        $add_video_widget_o    = get_sub_field('add_video_widget_o');
        $v_headline_o          = get_sub_field('v_headline_o');
        $v_subheadline_o       = get_sub_field('v_subheadline_o');
        $v_button_text_o       = get_sub_field('v_button_text_o');
        $v_button_link_o       = get_sub_field('v_button_link_o');

        $tab_icon_e            = get_sub_field('tab_icon_e');
        $tab_title_e           = get_sub_field('tab_title_e');
        $headline_e            = get_sub_field('headline_e');
        $add_button_e           = get_sub_field('add_button_e');
        $button_text_e         = get_sub_field('button_text_e');
        $button_link_e         = get_sub_field('button_link_e');

        $add_video_widget_e    = get_sub_field('add_video_widget_e');
        $v_headline_e          = get_sub_field('v_headline_e');
        $v_subheadline_e       = get_sub_field('v_subheadline_e');
        $v_button_text_e       = get_sub_field('v_button_text_e');
        $v_button_link_e       = get_sub_field('v_button_link_e');
        ?>

        <div class="section section-toggle">
          <div class="tabs">
            <div class="container">
              <div class="row">
                <div class="col col-6 tab left-tab active" data-tab="#tab-owner">
                  <div class="col-inner">
                    <div class="active-tab-bg"></div>
                    <div class="tab-container">
                      <div class="tab-icon">
                        <img src="<?php echo $tab_icon_o['url']; ?>" alt="<?php echo $tab_icon_o['alt']; ?>">
                      </div>
                      <div class="tab-title">
                        <P><?php echo $tab_title_o; ?></P>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-6 tab right-tab" data-tab="#tab-employee">
                  <div class="col-inner">
                    <div class="active-tab-bg"></div>
                    <div class="tab-container">
                      <div class="tab-icon">
                        <img src="<?php echo $tab_icon_e['url']; ?>" alt="<?php echo $tab_icon_e['alt']; ?>">
                      </div>
                      <div class="tab-title">
                        <P><?php echo $tab_title_e; ?></P>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-contents">
            <div id="tab-owner" class="tab-content active">
              <div class="container">
                <div class="row row-guide">
                  <div class="col col-12 col-md-10 offset-md-1">
                    <div class="col-inner">
                      <div class="content-header">
                        <h2 class="fw-bold"><?php echo $headline_o; ?></h2>
                      </div>

                      <?php if( have_rows('repeater_o') ): ?>
                        <div class="row guides">
                        <?php  while ( have_rows('repeater_o') ) : the_row(); 
                          $icon             = get_sub_field('icon');
                          $text             = get_sub_field('text');
                          $add_link         = get_sub_field('add_link');
                          $link_text        = get_sub_field('link_text');
                          $link_url         = get_sub_field('link_url');
                        ?>
                          <div class="col col-12 col-sm-auto"><div class="col-inner">
                            <div class="icon-wrapper">
                              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </div>
                            <div class="text-wrapper">
                              <p><?php echo $text; ?></p>
                            </div>
                            <?php if ($add_link) : ?>
                            <div class="link-wrapper">
                              <a class="text-link-arrow" href="<?php echo $link_url; ?>" target="_blank"><?php echo $link_text; ?></a>
                            </div>
                            <?php endif; ?>
                          </div></div>
                        <?php endwhile; ?>
                        </div>
                      <?php endif; ?>

                      <?php if ($add_button_o) : ?>
                      <div class="button-wrapper">
                        <a class="button" href="<?php echo $button_link_o; ?>" target="_blank"><?php echo $button_text_o; ?></a>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php if ($add_video_widget_o) : ?>
              <div class="container">
                <div class="row row-video">
                  <div class="col col-12">
                    <div class="col-inner">
                      <div class="video-wrapper">
                        <div class="row">
                          <div class="col col-12 col-sm-5 left-col">
                            <div class="col-inner">
                              <div class="wrapper">
                              <?php
                                if ($v_headline_o) :
                                echo '<h2 class="fw-bold">' . $v_headline_o . '</h2>';
                              endif;?>

                              <?php if ($v_subheadline_o) : ?>
                                <h3 class="subheading"><?php echo $v_subheadline_o; ?></h3>
                              <?php endif; ?>
                              </div>
                            </div>
                          </div>

                          <div class="col col-12 col-sm-7 right-col">
                            <div class="col-inner">
                              <?php if( have_rows('video_items_o') ): ?>
                                <?php  while ( have_rows('video_items_o') ) : the_row(); 
                                  $item_type           = get_sub_field('item_type');
                                  $video_src           = get_sub_field('video_source');
                                  $image               = get_sub_field('image');
                                  $headline            = get_sub_field('item_headline');
                                  $content             = get_sub_field('content');
                                  $link_text           = get_sub_field('link_text');
                                  $link_url            = get_sub_field('link_url');
                                ?>
                                  <div class="video-item <?php echo ($item_type == 'Video') ? 'video' : 'pdf'; ?>">
                                    <div class="item-left-col">
                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                      <div class="overlay">
                                        <a href="<?php echo $video_src; ?>" target="_blank">
                                          <img src="<?php echo get_stylesheet_directory_uri() . '/images/icon_video.png' ?>" alt="Play Now"/>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="item-right-col">
                                      <a href="<?php echo $link_url; ?>" target="_blank">
                                        <div class="headline"><?php echo $headline; ?></div>
                                        <div class="content"><?php echo $content; ?></div>
                                        <div class="video-link"><?php echo $link_text; ?></div>
                                      </a>
                                    </div>
                                  </div>

                                <?php  endwhile; ?>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="button-wrapper">
                        <a class="button" href="<?php echo $v_button_link_o; ?>" target="_blank"><?php echo $v_button_text_o; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>

            <div id="tab-employee" class="tab-content">
              <div class="container">
                <div class="row row-guide">
                  <div class="col col-12 col-md-10 offset-md-1">
                    <div class="col-inner">
                      <div class="content-header">
                        <h2 class="fw-bold"><?php echo $headline_e; ?></h2>
                      </div>

                      <?php if( have_rows('repeater_e') ): ?>
                        <div class="row guides">
                        <?php  while ( have_rows('repeater_e') ) : the_row(); 
                          $icon             = get_sub_field('icon');
                          $text             = get_sub_field('text');
                          $add_link         = get_sub_field('add_link');
                          $link_text        = get_sub_field('link_text');
                          $link_url         = get_sub_field('link_url');
                        ?>
                          <div class="col col-12 col-sm-auto"><div class="col-inner">
                            <div class="icon-wrapper">
                              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </div>
                            <div class="text-wrapper">
                              <p><?php echo $text; ?></p>
                            </div>
                            <?php if ($add_link) : ?>
                            <div class="link-wrapper">
                              <a class="text-link-arrow" href="<?php echo $link_url; ?>" target="_blank"><?php echo $link_text; ?></a>
                            </div>
                            <?php endif; ?>
                          </div></div>
                        <?php endwhile; ?>
                        </div>
                      <?php endif; ?>

                      <?php if ($add_button_e) : ?>
                      <div class="button-wrapper">
                        <a class="button" href="<?php echo $button_link_e; ?>" target="_blank"><?php echo $button_text_e; ?></a>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php if ($add_video_widget_e) : ?>
              <div class="container">
                <div class="row row-video">
                  <div class="col col-12">
                    <div class="col-inner">
                      <div class="video-wrapper">
                        <div class="row">
                          <div class="col col-12 col-sm-5 left-col">
                            <div class="col-inner">
                              <div class="wrapper">
                              <?php
                                if ($v_headline_e) :
                                echo '<h2 class="fw-bold">' . $v_headline_e . '</h2>';
                              endif;?>

                              <?php if ($v_subheadline_e) : ?>
                                <h3 class="subheading"><?php echo $v_subheadline_e; ?></h3>
                              <?php endif; ?>
                              </div>
                            </div>
                          </div>

                          <div class="col col-12 col-sm-7 right-col">
                            <div class="col-inner">
                              <?php if( have_rows('video_items_e') ): ?>
                                <?php  while ( have_rows('video_items_e') ) : the_row(); 
                                  $item_type           = get_sub_field('item_type');
                                  $video_src           = get_sub_field('video_source');
                                  $image               = get_sub_field('image');
                                  $headline            = get_sub_field('item_headline');
                                  $content             = get_sub_field('content');
                                  $link_text           = get_sub_field('link_text');
                                  $link_url            = get_sub_field('link_url');
                                ?>
                                  <div class="video-item <?php echo ($item_type == 'Video') ? 'video' : 'pdf'; ?>">
                                    <div class="item-left-col">
                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                      <div class="overlay">
                                        <a href="<?php echo $video_src; ?>" target="_blank">
                                          <img src="<?php echo get_stylesheet_directory_uri() . '/images/icon_video.png' ?>" alt="Play Now"/>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="item-right-col">
                                      <a href="<?php echo $link_url; ?>" target="_blank">
                                        <div class="headline"><?php echo $headline; ?></div>
                                        <div class="content"><?php echo $content; ?></div>
                                        <div class="video-link"><?php echo $link_text; ?></div>
                                      </a>
                                    </div>
                                  </div>

                                <?php  endwhile; ?>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="button-wrapper">
                        <a class="button" href="<?php echo $v_button_link_e; ?>" target="_blank"><?php echo $v_button_text_e; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>

          </div>
        </div>
        <?php endif; ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</div>

<?php get_footer(); ?>