<?php
/*
Template Name: Direct mail LP
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">

<?php
if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $seotitle               = get_sub_field('seo_title');
        $open_new               = get_sub_field('open_new');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $utm_campaign           = get_sub_field('utm_campaign');
        $utm_medium             = get_sub_field('utm_medium');
        $utm_source             = get_sub_field('utm_source');
        $utm_term               = get_sub_field('utm_term');
        $utm_content            = get_sub_field('utm_content');
        $image                  = get_sub_field('image');
        $add_bg                 = get_sub_field('add_background');
        $bg_color               = get_sub_field('bg_color');
        $id                     = get_sub_field('widget_id');
        $class                  = get_sub_field('widget_class');
        $f_image                = get_sub_field('f_image');
        $b_image                = get_sub_field('b_image');
        $center_image           = get_sub_field('center_image');
        $add_l_margin           = get_sub_field('add_l_margin');
        $f_max_width            = get_sub_field('f_max_width');
        $b_max_width            = get_sub_field('b_max_width');
        $hero_type_of_media     = get_sub_field('hero_type_of_media');
        $hero_video             = get_sub_field('hero_video');
        $hero_video_new         = get_sub_field('hero_video_new');
        $hero_video_new_customer_name         = get_sub_field('hero_video_new_customer_name');
        $hero_video_new_customer_position         = get_sub_field('hero_video_new_customer_position');
      ?>

      <div class="section section-hero <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
        <?php if ($add_bg) : ?>
        <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
        <?php endif; ?>
        <div class="container">
          <div class="row v-align-middle equal-height">
            <div class="col col-12 col-sm-6 col-lg-5 offset-lg-1 col-left">
              <div class="col-inner">
                <?php
                if ($seotitle) :
                  echo '<h1 class="seo-title micro">' . $seotitle . '</h1>';
                endif;
                // headline
                if ($headline) :
                  echo '<h2 class="fw-black">' . $headline . '</h2>';
                endif;

                if ($subheadline) :
                  echo '<h3 class="subheading">' . $subheadline . '</h3>';
                endif;?>

                <form action="<?php echo $form_link; ?>"
                  id="hero-signup-form"
                  method="GET"
                  class="email-signup-form">
                    <?php if ($utm_campaign) : ?>
                    <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>" />
                    <?php endif; ?>
                    <?php if ($utm_medium) : ?>
                    <input type="hidden" name="utm_medium" value="<?php echo $utm_medium; ?>" />
                    <?php endif; ?>
                    <?php if ($utm_source) : ?>
                    <input type="hidden" name="utm_source" value="<?php echo $utm_source; ?>" />
                    <?php endif; ?>
                    <?php if ($utm_term) : ?>
                    <input type="hidden" name="utm_term" value="<?php echo $utm_term; ?>" />
                    <?php endif; ?>
                    <?php if ($utm_content) : ?>
                    <input type="hidden" name="utm_content" value="<?php echo $utm_content; ?>" />
                    <?php endif; ?>
                  <div class="form-item input">
                    <input class="promocode"
                        aria-label="access code"
                        type="text"
                        name="directmailaccesscode"
                        placeholder="Access code"
                    />
                  </div>
                  <div class="message success">Access code accepted ✓</div>
                  <div class="message error">Please enter access code</div>
                  <div class="form-item">
                    <button type="submit"
                        aria-label="submit"
                        id="submit-promocode"
                        name="Submit"
                        class="primary"
                    ><?php echo $button_text; ?></button>
                  </div>
                </form>
              </div>
            </div>
            <?php if ( $hero_type_of_media == "video_new" && $hero_video_new ) : ?>
            <div class="hero-video-new col col-12 col-sm-6 col-lg-5 offset-lg-1 col-right">
              <div class="hero-video-new-wrapper">
                <div class="hero-video-new-customer-name"><?php echo $hero_video_new_customer_name; ?></div>
                <div class="hero-video-new-customer-position"><?php echo $hero_video_new_customer_position;?></div>
                <div class="hero-video-new-bg">
                  <div class="hero-video-new-frame"><video controls src="<?php echo $hero_video_new; ?>" type="video/mp4"></video></div>
                </div>  
              </div>                                
            </div>
            <?php endif; ?> 
            <?php if ( $hero_type_of_media == "video" && $hero_video ) : ?>
            <div class="hero-video col col-12 col-sm-6 col-lg-5 offset-lg-1 col-right">
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == '2_columns' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-2-columns">
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
                                  <a class="text-link-arrow" href="<?php echo $link_url; ?>" target="_blank"><?php echo $link_text; ?></a>
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      CTA banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'cta_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $align                  = get_sub_field('align');
      $stype                  = get_sub_field('stype');
      $content                = get_sub_field('content');
      $form_type              = get_sub_field('form_type');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $form_link              = get_sub_field('form_link');
      $utm_campaign           = get_sub_field('utm_campaign');
      $utm_medium             = get_sub_field('utm_medium');
      $utm_source             = get_sub_field('utm_source');
      $utm_term               = get_sub_field('utm_term');
      $utm_content            = get_sub_field('utm_content');
      ?>

        <div class="section section-cta-banner">
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
                      <h3><?php echo $content; ?></h3>
                    <?php endif; ?>
                    <?php if ($form_type == "button") : ?>
                      <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                    <?php if ($form_type == "form") : ?>
                      <form action="<?php echo $form_link; ?>"
                        id="cta-promocode-form"
                        method="GET"
                        class="email-signup-form">
                        <?php if ($utm_campaign) : ?>
                        <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_medium) : ?>
                        <input type="hidden" name="utm_medium" value="<?php echo $utm_medium; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_source) : ?>
                        <input type="hidden" name="utm_source" value="<?php echo $utm_source; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_term) : ?>
                        <input type="hidden" name="utm_term" value="<?php echo $utm_term; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_content) : ?>
                        <input type="hidden" name="utm_content" value="<?php echo $utm_content; ?>" />
                        <?php endif; ?>
                        <div class="form-item input">
                          <input class="cta-promocode"
                              aria-label="access code"
                              type="text"
                              name="directmailaccesscode"
                              placeholder="Access code"
                          />
                        </div>
                        <div class="message success">Access code accepted ✓</div>
                        <div class="message error">Please enter access code</div>
                        <div class="form-item">
                          <button type="submit"
                              aria-label="submit"
                              id="submit-promocode"
                              name="Submit"
                              class="primary"
                          ><?php echo $button_text; ?></button>
                        </div>
                      </form>
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
      Customer quote
    -------------------------------------------- */
    elseif ( get_row_layout() == 'quote' ) : ?>

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
        <?php endif; ?>

    <?php
    /* --------------------------------------------
      Rating widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'rating' ) : ?>

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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Business pictured widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'bs_pictured' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $title     = get_sub_field('title');
      ?>

        <div class="section section-bp-caption">
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Signup widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'signup' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $form_type              = get_sub_field('form_type');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $form_link              = get_sub_field('form_link');
        $utm_campaign           = get_sub_field('utm_campaign');
        $utm_medium             = get_sub_field('utm_medium');
        $utm_source             = get_sub_field('utm_source');
        $utm_term               = get_sub_field('utm_term');
        $utm_content            = get_sub_field('utm_content');
      ?>

        <div class="section section-signup-widget">
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
                  <?php if ($form_type == "button") : ?>
                  <div class="section-footer">
                    <a href="<?php echo $button_link; ?>" class="button primary"><?php echo $button_text; ?></a>
                  </div>
                  <?php endif; ?>
                  <?php if ($form_type == "form") : ?>
                    <div class="section-footer">
                      <form action="<?php echo $form_link; ?>"
                        id="signup-promocode-form"
                        method="GET"
                        class="email-signup-form">
                        <?php if ($utm_campaign) : ?>
                        <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_medium) : ?>
                        <input type="hidden" name="utm_medium" value="<?php echo $utm_medium; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_source) : ?>
                        <input type="hidden" name="utm_source" value="<?php echo $utm_source; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_term) : ?>
                        <input type="hidden" name="utm_term" value="<?php echo $utm_term; ?>" />
                        <?php endif; ?>
                        <?php if ($utm_content) : ?>
                        <input type="hidden" name="utm_content" value="<?php echo $utm_content; ?>" />
                        <?php endif; ?>
                        <div class="form-item input">
                          <input class="signup-promocode"
                              aria-label="access code"
                              type="text"
                              name="directmailaccesscode"
                              placeholder="Access code"
                          />
                        </div>
                        <div class="message success">Access code accepted ✓</div>
                        <div class="message error">Please enter access code</div>
                        <div class="form-item">
                          <button type="submit"
                              aria-label="submit"
                              id="submit-promocode"
                              name="Submit"
                              class="primary"
                          ><?php echo $button_text; ?></button>
                        </div>
                      </form>
                    </div>
                  <?php endif; ?>
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