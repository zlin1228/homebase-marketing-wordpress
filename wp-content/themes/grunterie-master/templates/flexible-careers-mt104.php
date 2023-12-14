<?php
/*
Template Name: Careers - MT104
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
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $d_image                = get_sub_field('image_d');
          $m_image                = get_sub_field('image_m');
        ?>

          <div class="section section-hero">
            <div class="row row-flex">
              <div class="row-container">
                <div class="col col-left medium-5 medium-offset-1">
                  <div class="column-inner">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h1 class="fw-black"><?php echo $headline; ?></h1>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h2 class="subheading"><?php echo $subheadline; ?></h2>
                      <?php endif;?>
                    </div>
                  </div>
                </div>

                <div class="col col-right medium-6">
                  <div class="column-inner">
                    <div class="img-wrapper">
                      <?php if ($d_image) : ?>
                      <img class="lazyload hide-for-small" data-src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($m_image) : ?>
                      <img class="lazyload show-for-small" data-src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
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
      elseif ( get_row_layout() == 'flex_2_cols' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>
  
        <?php
        $reverse          = get_sub_field('reverse');
        $valigntop        = get_sub_field('valign_top');
        $headline         = get_sub_field('headline');
        $content          = get_sub_field('content');
        $image            = get_sub_field('image');
        $bib              = get_sub_field('bib');
        $logo             = get_sub_field('logo');
        $link_text        = get_sub_field('link_text');
        $link_url         = get_sub_field('link_url');
        ?>
  
          <div class="section section-2-columns">
            <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?> <?php echo ($valigntop)? 'aligntop' : '';?>">
              <div class="row-container">
                <div class="column medium-5 medium-offset-1 col-left <?php echo ($reverse)? 'col-img' : 'col-text'; ?>">
                  <div class="column-inner">
                    <?php if ( $reverse ) : ?>
                        <?php if ($bib) : ?>
                        <div class="bib-container">
                          <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                          <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                        </div>
                      <?php else: ?>
                        <?php if ($image) : ?>
                          <div class="img-wrapper">
                            <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        <?php endif;?>
                      <?php endif;?>
                    <?php else : ?>
                      <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h3 class="fw-black"><?php echo $headline; ?></h3>
                      <?php endif;?>

                      <?php if ($content) : ?>
                        <p><?php echo $content; ?></p>
                      <?php endif;?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="column medium-5 col-right <?php echo ($reverse)? 'col-text' : 'col-img'; ?>">
                  <div class="column-inner">
                    <?php if ( $reverse ) : ?>

                      <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h3 class="fw-black"><?php echo $headline; ?></h3>
                      <?php endif;?>

                      <?php if ($content) : ?>
                        <p><?php echo $content; ?></p>
                      <?php endif;?>
                      </div>
                    <?php else : ?>
                      <?php if ($bib) : ?>
                        <div class="bib-container">
                          <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                          <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                        </div>
                      <?php else: ?>
                        <?php if ($image) : ?>
                          <div class="img-wrapper">
                            <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        <?php endif; ?>
                      <?php endif; ?>
                    <?php endif; ?>
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
                                $link         = get_sub_field('link');
                        ?>
                          <div class="columns small-6 medium-3 text-center review-item">
                            <div class="column-inner">
                              <a href="<?php echo $link; ?>" target="_blank" rel="noreferrer">
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
        Jobs board
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_jobs_board' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

          <?php
            $job_board_script         = get_sub_field('job_board_script');
          ?>
          <div class="section section-jobs-board">
            <div class="row">
              <div class="row-container">
                <div class="column medium-8 medium-offset-2">
                  <div class="column-inner">
                    <div id="job-board-container">
                      <div id="grnhse_app"></div>
                    </div>

                    <?php if( isset( $_GET['gh_jid']) ) : ?>
                    <script src="<?php echo $job_board_script; ?>"></script>
                    <script type="text/javascript">
                      window.addEventListener( 'load', function() {
                          Grnhse.Iframe.autoLoad();

                          if ($('#grnhse_app').length > 0) {
                            $('html, body').animate({
                              scrollTop: $('#grnhse_app').offset().top - 200
                            }, 0);
                          }
                      });
                          
                    </script>
                    <?php else : ?>
                    <script type="text/javascript">
                    window.addEventListener( 'load', function() {
                      jQuery(window).scroll(function(event){ 

                          $.getScript('<?php echo $job_board_script; ?>', function() {
                              Grnhse.Iframe.autoLoad();
                          });

                          jQuery(window).off(event);
                      });
                    });
                    </script>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Text banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_tbanner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $text          = get_sub_field('text');
        ?>

          <div class="section section-text-banner">
            <div class="row">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="text-wrap">
                    <?php if ($text) :?>
                      <h3 class="fw-black banner-text"><?php echo $text; ?></h3>
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

<?php get_footer(); ?>