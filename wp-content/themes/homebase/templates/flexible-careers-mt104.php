<?php
/*
Template Name: Careers - MT104
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
          $headline               = get_sub_field('headline');
          $subheadline            = get_sub_field('subheadline');
          $d_image                = get_sub_field('image_d');
          $m_image                = get_sub_field('image_m');
        ?>

          <div class="section section-hero">
            <div class="container">
              <div class="row v-align-middle">
                <div class="col col-12 col-sm-5 offset-sm-1 col-left">
                  <div class="col-inner">
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

                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <div class="img-wrapper">
                      <?php if ($d_image) : ?>
                      <img class="hide-for-sm" src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($m_image) : ?>
                      <img class="show-for-sm" src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
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
        $headline         = get_sub_field('headline');
        $content          = get_sub_field('content');
        $image            = get_sub_field('image');
        $bib              = get_sub_field('bib');
        $logo             = get_sub_field('logo');
        $link_text        = get_sub_field('link_text');
        $link_url         = get_sub_field('link_url');
        ?>
  
          <div class="section section-2-columns">
            <div class="container-narrow">
              <div class="row <?php echo ($reverse)? 'reverse' : '';?>">
                <div class="col col-12 col-sm-6 col-left col-text">
                  <div class="col-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <?php endif;?>

                    <?php if ($content) : ?>
                      <p><?php echo $content; ?></p>
                    <?php endif;?>
                    </div>
                  </div>
                </div>

                <div class="col col-12 col-sm-6 col-right col-img">
                  <div class="col-inner">
                    <?php if ($bib) : ?>
                      <div class="bib-container">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                        <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                      </div>
                    <?php else: ?>
                      <?php if ($image) : ?>
                        <div class="img-wrapper">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
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
        Jobs board
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_jobs_board' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

          <?php
            $job_board_script         = get_sub_field('job_board_script');
          ?>
          <div class="section section-jobs-board">
            <div class="container">
              <div class="row">
                <div class="col col-12 col-sm-8 offset-sm-2">
                  <div class="col-inner">
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
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
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


</main>

<?php get_footer(); ?>