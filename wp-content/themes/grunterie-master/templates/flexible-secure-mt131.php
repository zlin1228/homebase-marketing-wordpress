<?php
/*
Template Name: Secure - MT131
*/
get_header(); ?>

<div class="container new-style" role="document">

<?php
$parent = get_field('parent_page');

if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-hero">
          <div class="row row-small">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1 class="fw-black">' . $headline . '</h1>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
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
      Intro widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_intro' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_button             = get_sub_field('add_button');
      $add_image              = get_sub_field('add_image');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-intro">
          <div class="row row-small row-flex">
            <div class="row-container">
              <div class="column medium-5 col-left">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                      <?php if ($add_button) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif;?>
                    </div>                  
                    <?php if ($add_image) : ?>
                      <div class="image-wrapper hide-for-small">
                        <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                      </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="column medium-7 col-right">
                <div class="column-inner">
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
                              $heading          = get_sub_field('heading');
                              $description      = get_sub_field('description');
                        ?>
                          <div class="intro-box">
                            <div class="icon"><img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></div>
                            <div class="text-wrapper">
                              <p class="fw-extra"><?php echo $heading; ?></p>
                              <p class="desc"><?php echo $description;?></p>
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Review widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_review' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $customer_review        = get_sub_field('customer_review');
      $customer_info          = get_sub_field('customer_info');
      $rating_text            = get_sub_field('rating_text');
      ?>

        <div class="section section-reviews">
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
          <div class="row row-flex row-small">
            <div class="row-container">
              <div class="columns medium-8 col-left">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <?php if ($content) : ?>
                      <h3 class="subheading fw-bold"><?php echo $content; ?></h3>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="columns medium-4 col-right">
                <div class="column-inner">
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
      Customer Support
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_customer_support' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $title                    = get_sub_field('title');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $image                    = get_sub_field('image');
        $text                     = get_sub_field('text');
        ?>

        <div class="section section-support">
          <div class="row row-small row-flex">
            <div class="row-container">
              <div class="columns medium-5 col-left">
                <div class="column-inner">
                  <?php if ($image) : ?>
                    <div class="img-wrapper">
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="columns medium-6 medium-offset-1 col-right">
                <div class="column-inner">
                <?php
                if ($headline) :
                  echo '<h3 class="fw-black">' . $headline . '</h3>';
                endif;

                // 
                if ($text) :
                  echo '<p>' . $text . '</p>';
                endif;?>

                <?php if( have_rows('contact_info') ): ?>
                <div class="contact-info-wrapper">
                  <?php  while ( have_rows('contact_info') ) : the_row(); 
                    $icon = get_sub_field('icon');
                    $contact_method = get_sub_field('contact_method');
                    $method_text = get_sub_field('method_text');
                    $method_link = get_sub_field('method_link');
                  ?>
                    <div class="contact-info">
                      <div class="contact-icon">
                        <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                      </div>
                      <div class="contact-method"><?php echo $contact_method; ?></div>
                      <div class="method-text"><a href="<?php echo $method_link; ?>"><?php echo $method_text; ?></a></div>
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

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>


<?php get_footer(); ?>