<?php
/*
Template Name: Payroll testimonial
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
          $bg_image_d             = get_sub_field('bg_image_d');
          $bg_image_m             = get_sub_field('bg_image_m');
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $left_image             = get_sub_field('left_image');
          $right_image            = get_sub_field('right_image');
        ?>

          <div class="section section-hero">
            <div class="container">
              <div class="row row-top">
                <?php if ($bg_image_d) : ?>
                  <div class="bg-layer" style="background-image: url('<?php echo $bg_image_d['url']; ?>');"></div>
                <?php endif; ?>
                <?php if($bg_image_m) : ?>
                  <style>
                    @media only screen and (max-width:48em) {
                      .section-hero .bg-layer {
                        background-image: url('<?php echo $bg_image_m['url']; ?>') !important;
                      }
                    }
                  </style>
                <?php endif; ?>
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                       <h1 class="fw-black"><?php echo $headline; ?></h1>
                      <?php endif; ?>

                      <div class="image-wrapper">
                      <?php if ($left_image ) : ?>
                        <?php echo wp_get_attachment_image( $left_image, 'full', '', array( "class" => "left-img" ) ); ?>
                      <?php endif; ?>

                      <?php if ($right_image ) : ?>
                        <?php echo wp_get_attachment_image( $right_image, 'full', '', array( "class" => "right-img" ) ); ?>
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-bottom">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($subheadline) : ?>
                       <h2 class="subheading"><?php echo $subheadline; ?></h2>
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
        testimonial widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_testimonial' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
          $col_type               = get_sub_field('col_type');
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $bg_image               = get_sub_field('bg_image');
        ?>

          <div class="section section-testimonial <?php echo ($col_type); ?>">
            <div class="container">
              <?php if ($headline ||  $subheadline) : ?>
                <div class="row row-top">
                  <div class="col col-12">
                    <div class="col-inner">
                      <div class="col-wrapper">
                        <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                        <?php endif; ?>
                        
                        <?php if ($subheadline) : ?>
                        <p><?php echo $subheadline; ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php if ($col_type == 'two_cols') : ?>

                <div class="row row-bottom">
                  <?php if ($bg_image) : ?>
                    <div class="bg-layer" style="background-image: url('<?php echo $bg_image['url']; ?>');"></div>
                  <?php endif; ?>

                  <?php
                    if ( have_rows('testimonials') ) : 
                      while ( have_rows('testimonials') ) : the_row();
                        $photo        = get_sub_field('photo');
                        $quote        = get_sub_field('quote');
                        $name         = get_sub_field('name');
                        $position     = get_sub_field('position');
                        $company      = get_sub_field('company');
                  ?>

                    <div class="col col-12 col-sm-6">
                      <div class="col-inner">
                        <div class="col-wrapper">
                          <?php if ($photo) : ?>
                            <?php echo wp_get_attachment_image( $photo, 'full', '', array( "class" => "photo" ) ); ?>
                          <?php endif;?>

                          <div class="text-wrapper">
                            <?php if ($quote) : ?>
                              <p class="quote"><?php echo $quote; ?></p>
                            <?php endif; ?>

                            <?php if ($name) : ?>
                              <div class="name"><?php echo $name; ?></div>
                            <?php endif; ?>

                            <?php if ($position) : ?>
                              <div class="position"><?php echo $position; ?></div>
                            <?php endif; ?>

                            <?php if ($company) : ?>
                              <div class="company"><?php echo $company; ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                      endwhile;
                    endif; 
                  ?>
                </div>
              <?php else : ?>
                <?php
                  if ( have_rows('testimonials') ) : 
                    while ( have_rows('testimonials') ) : the_row();
                      $reverse      = get_sub_field('reverse');
                      $photo        = get_sub_field('photo');
                      $quote        = get_sub_field('quote');
                      $name         = get_sub_field('name');
                      $position     = get_sub_field('position');
                      $company      = get_sub_field('company');
                ?>
                  <div class="row row-bottom <?php echo ($reverse)? 'reverse' : '';?>">
                    <?php if ($bg_image) : ?>
                      <div class="bg-layer" style="background-image: url('<?php echo $bg_image['url']; ?>');"></div>
                    <?php endif; ?>
                    <div class="col col-12 col-sm-6 col-left">
                      <div class="col-inner">
                        <div class="img-wrapper">
                        <?php if ($photo) : ?>
                          <?php echo wp_get_attachment_image( $photo, 'full', '', array( "class" => "photo" ) ); ?>
                        <?php endif;?>
                        </div>
                      </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-right">
                      <div class="col-inner">
                        <div class="text-wrapper">
                          <?php if ($quote) : ?>
                            <p class="quote"><?php echo $quote; ?></p>
                          <?php endif; ?>

                          <?php if ($name) : ?>
                            <div class="name"><?php echo $name; ?></div>
                          <?php endif; ?>

                          <?php if ($position) : ?>
                            <div class="position"><?php echo $position; ?></div>
                          <?php endif; ?>

                          <?php if ($company) : ?>
                            <div class="company"><?php echo $company; ?></div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                    endwhile;
                  endif; 
                ?>
              <?php endif;?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Pricing widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_pricing' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
        ?>

          <div class="section section-features">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="section-header">
                      <?php
                      // headline
                      if ($headline) 
                        echo '<h2 class="fw-black">' . $headline . '</h2>';
                      if ($subheadline) 
                        echo '<h3 class="subheading">' . $subheadline . '</h3>';
                      ?>
                    </div>

                    <?php
                      if ( have_rows('features') ) : 
                        echo '<ul class="feature-grid">';
                        while ( have_rows('features') ) : the_row();
                          $feature  = get_sub_field('feature');
                    ?>
                      <li><span><?php echo $feature; ?></span></li>
                    <?php
                        endwhile;
                        echo '</ul>';
                      endif; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      
      <?php
      /* --------------------------------------------
        Payroll CTA 
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_payroll_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $button_text            = get_sub_field('button_text');
          $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-payroll-cta">
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline)  : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>

                      <?php
                        if ( have_rows('images') ) : 
                          echo '<div class="image-grid">'; $index = 0;
                          while ( have_rows('images') ) : the_row();
                            $image        = get_sub_field('image');
                            $max_width    = get_sub_field('max_width');
                            $max_height   = get_sub_field('max_height');

                            $index++;
                      ?>
                        <div class="image image-<?php echo $index; ?>">
                          <?php echo wp_get_attachment_image( $image, 'full', '', array( "class" => "step-image" ) ); ?>
                        </div>

                        <?php if($max_width || $max_height) : ?>
                          <style>
                          .image-<?php echo $index; ?> img{<?php echo ($max_width) ? 'width:'.$max_width : ''; ($max_height) ? ' height:'.$max_height : '';?>}
                          </style>
                        <?php endif; ?>
                      <?php
                          endwhile;
                          echo '</div>';
                        endif; 
                      ?>
                      
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading"><?php echo $subheadline; ?></h3>
                      <?php endif; ?>

                      <?php if ($button_text) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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