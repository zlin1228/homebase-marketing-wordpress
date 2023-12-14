<?php
/*
Template Name: Simplified Paid LP - MT31 - Flexible
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

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
        $max_width              = get_sub_field('max_width');
        $max_height             = get_sub_field('max_height');
        ?>

          <div class="section section-hero <?php echo $hero_type; ?> <?php echo $custom_class; ?>">
            <div class="container">
              <div class="row <?php echo ($hero_type == 'type4') ? 'v-align-middle' : ''; ?>">
                <div class="col col-12 col-left <?php echo ($l_classes) ? $l_classes : 'col-sm-6'; ?>">
                  <div class="col-inner">
                    <div class="text-wrapper">
                      <div class="top-wrap">
                        <?php if ($headline) : ?>
                        <h1 class="fw-black small"><?php echo $headline; ?></h1>
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
                    <?php if($hero_type == 'type2') : ?>
                    <div class="col-bglayer hide-for-sm">
                      <?php for ( $i = 0; $i < 3; $i ++ ) : ?>
                        <div class="item item-<?php echo $i+1; ?>">
                        <?php if(have_rows('memebr_images')) : the_row(); 
                            $m_image = get_sub_field('m_image');
                            $m_max_width    = get_sub_field('m_max_width');
                            $m_max_height   = get_sub_field('m_max_height');
                        ?>
                          <img src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>" style="<?php echo ($m_max_width)? 'width:'.$m_max_width : '';?> <?php echo ($m_max_height)? 'height:'.$m_max_height : '';?>">
                        <?php endif; ?>
                        </div>
                      <?php endfor; ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  
                </div>

                <div class="col col-12 col-right <?php echo ($r_classes) ? $r_classes : 'col-sm-6'; ?>">
                  <div class="col-inner">
                    <div class="img-wrapper">
                      <?php if ($image_d) : ?>
                      <img class="hide-for-sm" src="<?php echo $image_d['url']; ?>" alt="<?php echo $image_d['alt']; ?>" style="<?php echo ($max_width)? 'width:'.$max_width : '';?> <?php echo ($max_height)? 'height:'.$max_height : '';?>">
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                      <img class="show-for-sm" src="<?php echo $image_m['url']; ?>" alt="<?php echo $image_m['alt']; ?>">
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
          $max_width        = get_sub_field('max_width');
          $max_height       = get_sub_field('max_height');
        ?>
          <div class="section section-2-columns">
            <div class="container">
              <div class="row <?php echo ($reverse)? 'reverse' : '';?> <?php echo ($index == 1) ? 'desktop-only': ''; ?> v-align-middle">
                <div class="col col-12 col-left <?php echo ($reverse) ? 'col-sm-6':'col-sm-5 offset-sm-1'; ?>">
                  <div class="col-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <?php endif;?>
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <?php endif;?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <div class="img-wrapper <?php echo ($overflow)? 'overflow' : '';?>">
                    <?php if ($image) : ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="<?php echo ($max_width)? 'width:'.$max_width : '';?> <?php echo ($max_height)? 'height:'.$max_height : '';?>">
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
        Signup CTA banner
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
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $add_link               = get_sub_field('add_link');
        $title                  = get_sub_field('title');
        $photo                  = get_sub_field('image');
        $quote                  = get_sub_field('quote');
        $customer_link          = get_sub_field('customer_link');
        $label                  = get_sub_field('label');
        $customer_name          = get_sub_field('customer_name');
        $customer_position      = get_sub_field('customer_position');
        ?>

          <div class="section section-customer-quote">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12 col-sm-9 offset-sm-3">
                  <div class="col-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    
                    <div class="quote-container">
                      <?php if ($quote) : ?>
                          <?php if($add_link) : ?>
                            <a href = "<?php echo $customer_link; ?>" target="_blank" data-wpel-link="external"> 
                          <?php endif; ?>
                          <div class="quote-wrapper">
                            <p class="quote-message"><?php echo $quote; ?></p>
                            <p class="name fw-bold"><?php echo $customer_name; ?></p>
                            <p class="position"><?php echo $customer_position; ?></p>
                          </div>
                          <?php if($add_link) : ?>
                            </a> 
                          <?php endif; ?>
                        <?php if ($photo) : ?>
                          <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="photo"/>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                    <?php if ($label) : ?>
                      <div class="quote-label hide-for-sm">
                        <img src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
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