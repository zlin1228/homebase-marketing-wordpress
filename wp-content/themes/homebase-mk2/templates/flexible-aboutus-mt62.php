<?php
/*
Template Name: About us - MT62
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
        $headline           = get_sub_field('headline');
        $subheadline        = get_sub_field('subheadline');
        $image              = get_sub_field('image');
      ?>

        <div class="section section-hero">
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 offset-sm-1 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1 class="fw-black">' . $headline . '</h1>';
                    endif;

                    if ($subheadline) :
                      echo '<h2 class="subheading">' . $subheadline . '</h2>';
                    endif;
                    ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="img-wrapper">
                  <?php if ($image ) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
    elseif ( get_row_layout() == 'flex_2cols' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $reverse                = get_sub_field('reverse');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $content                = get_sub_field('content');
      $add_link               = get_sub_field('add_link');
      $link_text              = get_sub_field('link_text');
      $link_url               = get_sub_field('link_url');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-2-cols">
          <div class="container">
            <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
              <div class="col col-12 col-sm-6 col-text">
                <div class="col-inner">
                  <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="fw-black"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                  <?php if ($content) : ?>
                    <?php echo $content; ?>
                  <?php endif;?>
                  <?php if ($add_link) : ?>
                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                  <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-image">
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Mission widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_mission' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $image               = get_sub_field('image');
        $title               = get_sub_field('title');
        $banner_content      = get_sub_field('banner_content');
      ?>

        <div class="section section-mission">
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="banner-wrapper">
                  <?php if ($image) : ?>
                    <div class="icon-wrapper"><img alt="<?php echo $image['alt']; ?>"  src="<?php echo $image['url']; ?>" /></div>
                  <?php endif;?>
                  <?php if ($title) : ?>
                    <div class="banner-title"><?php echo $title; ?></div>
                  <?php endif;?>
                  <?php if ($banner_content) : ?>
                    <?php echo $banner_content; ?>
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
      Count widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_count' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
      ?>

        <div class="section section-count">
          <div class="bglayer"><div class="bginner"></div></div>
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row row-count">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ( have_rows('counts') ) :
                      echo '<div class="grid-count">';
                      while ( have_rows('counts') ) : the_row();
                          $count    = get_sub_field('count');
                          $content   = get_sub_field('content');
                  ?>
                    <div class="item-count">
                      <div class="count"><?php echo $count; ?></div>
                      <div class="content"><?php echo $content; ?></div>
                    </div>
                  <?php endwhile;
                    echo '</div>';
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      CTA widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_widget' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner">
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($content) : ?>
                      <h3 class="subheading fw-extra"><?php echo $content; ?></h3>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Tweet widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_tweet_widget' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $color_schema     = get_sub_field('color_schema');
      ?>

        <div class="section section-tweet <?php echo ($color_schema == 'purple')? 'purple' : 'teal'; ?>">
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-7 col-left">
                <div class="col-inner">
                  <div class="tweet-grid">
                    <?php if ( have_rows('tweets') ) :
                      while ( have_rows('tweets') ) : the_row();
                          $customer_name    = get_sub_field('customer_name');
                          $score            = get_sub_field('score');
                          $tweet_platform   = get_sub_field('tweet_platform');
                          $comment          = get_sub_field('comment');
                    ?>
                      <div class="tweet-item">
                        <div class="tweet-container">
                          <?php if($tweet_platform) : ?>
                          <div class="platform"><img alt="<?php echo $tweet_platform['alt']; ?>"  src="<?php echo $tweet_platform['url']; ?>" /></div>
                          <?php endif; ?>
                          <div class="name fw-bold"><?php echo $customer_name; ?></div>
                          <?php if($score) : ?>
                          <div class="score"><img alt="<?php echo $score['alt']; ?>"  src="<?php echo $score['url']; ?>" /></div>
                          <?php endif; ?>
                          <div class="comment"><?php echo $comment; ?></div>
                        </div>
                      </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-5 col-right">
                <div class="col-inner">
                  <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
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
      Location widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_map' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $image            = get_sub_field('image');
        $content          = get_sub_field('content');
      ?>

        <div class="section section-location">        
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="small fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row row-count">
              <div class="col col-12 col-sm-8 col-map">
                <div class="col-inner">
                  <div class="img-wrapper">
                    <?php if ($image) : ?>
                      <img alt="<?php echo $image['alt']; ?>"  src="<?php echo $image['url']; ?>" />
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div class="col col-12 col-sm-4 col-text">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php if ($content)
                       echo $content;
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
      Get in touch widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_touch' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $content          = get_sub_field('content');
      ?>

        <div class="section section-touch">
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                  <?php if ($content) : ?>
                    <p><?php echo $content; ?></p>
                  <?php endif;?>
                </div>
              </div>

              <div class="col col-12 col-sm-6 offset-sm-1 col-right">
                <div class="col-inner">
                  <?php if( have_rows('methods') ): ?>
                  <div class="method-wrapper">
                    <?php  while ( have_rows('methods') ) : the_row(); 
                      $icon = get_sub_field('icon');
                      $text = get_sub_field('text');
                      $link = get_sub_field('link');
                    ?>
                      <div class="item-method">
                        <div class="icon">
                          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                        </div>
                        <div class="content"><a href="<?php echo $link; ?>"><?php echo $text; ?></a></div>
                      </div>
                    <?php  endwhile; ?>
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
      Investor widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_investor' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $investor_logos   = get_sub_field('investor_logos');
      ?>

        <div class="section section-investor">
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row row-logo">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($investor_logos) : ?>
                    <div class="grid-logos">
                    <?php foreach( $investor_logos as $logo ): ?>
                      <div class="item-logo">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="lazyload"/>
                      </div>
                    <?php endforeach; ?>
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
      Business pictured widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_bs_pictured' ) : ?>

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

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>


<?php get_footer(); ?>