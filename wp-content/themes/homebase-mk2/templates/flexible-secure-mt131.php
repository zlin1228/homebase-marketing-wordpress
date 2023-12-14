<?php
/*
Template Name: Secure - MT131
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

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
          <div class="container-narrow">
            <div class="row">
              <div class="col">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1 class="fw-black">' . $headline . '</h1>';
                    endif;

                    if ($subheadline) :
                      echo '<h2 class="subheading normal">' . $subheadline . '</h3>';
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
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                      <?php if ($add_button) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif;?>
                    </div>                  
                    <?php if ($add_image) : ?>
                      <div class="image-wrapper hide-for-small">
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
                              $heading          = get_sub_field('heading');
                              $description      = get_sub_field('description');
                        ?>
                          <div class="intro-box">
                            <div class="icon"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></div>
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
              <div class="col col-12 col-sm-8 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($content) : ?>
                      <h3 class="subheading fw-bold"><?php echo $content; ?></h3>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-4 col-right">
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
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <?php if ($image) : ?>
                    <div class="img-wrapper">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col col-12 col-sm-6 offset-sm-1 col-right">
                <div class="col-inner">
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
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
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

</main>

<?php get_footer(); ?>