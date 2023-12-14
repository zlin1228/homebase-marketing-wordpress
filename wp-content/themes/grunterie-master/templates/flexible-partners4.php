<?php
/*
Template Name: Partners4 - Flexible
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
        $add_button             = get_sub_field('add_button');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $img_l_d                = get_sub_field('img_l_d');
        $img_l_m                = get_sub_field('img_l_m');
        $img_r_d                = get_sub_field('img_r_d');
        $img_r_m                = get_sub_field('img_r_m');
      ?>

        <div class="section section-hero <?php echo ($parent) ? 'sm-padding' : ''; ?>">
        <style type="text/css">
          .section-hero {background: url(<?php echo $img_l_d['url'];?>) left top 42px no-repeat, url(<?php echo $img_r_d['url'];?>) right bottom 46px no-repeat;}
          @media screen and (max-width: 640px) {
          <?php if($parent) : ?>
          .section-hero {background: url(<?php echo $img_l_m['url'];?>) right top 24px no-repeat, url(<?php echo $img_r_m['url'];?>) left bottom 0 no-repeat;}
          <?php else : ?>
          .section-hero {background: url(<?php echo $img_l_m['url'];?>) left top 24px no-repeat, url(<?php echo $img_r_m['url'];?>) right bottom 0 no-repeat;}
          <?php endif; ?>
          }
        </style>
          <div class="row row-small">
            <div class="row-container">
              <div class="columns">
                <div class="column-inner">
                  <div class="text-wrap">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1>' . $headline . '</h1>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                    endif;

                    if ($add_button) :
                      echo '<a class="button primary" href="'.$button_link.'">' . $button_text . '</a>';
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
      Subpage widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_subpages' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-subpage">
          <div class="row row-small row-header">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="header-wrap">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <? endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <? endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row row-small row-subpages">
            <div class="row-container">
              <?php if ( have_rows('subpages') ) :
                  while ( have_rows('subpages') ) : the_row();
                    $icon             = get_sub_field('icon');
                    $sp_name          = get_sub_field('sp_name');
                    $sp_summary       = get_sub_field('sp_summary');
                    $link_text        = get_sub_field('link_text');
                    $link_url         = get_sub_field('link_url');
              ?>
              <div class="columns medium-6">
                <div class="column-inner">
                  <div class="subpage-container">
                  
                    <div class="img-wrap">
                      <?php if ($icon) : ?>
                        <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" width="64" height="64">
                      <? endif;?>
                    </div>
                    <div class="text-wrapper">
                      <p class="title"><?php echo $sp_name; ?></p>
                      <p class="summary"><?php echo $sp_summary;?></p>
                      <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Why widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_why' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $content                = get_sub_field('content');
      ?>

        <div class="section section-why">
          <div class="row row-flex aligntop row-small">
            <div class="row-container">
              <div class="columns medium-6 col-left">
                <div class="column-inner">
                  <div class="text-wrap">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <? endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <? endif;?>
                    <?php if ($button_text) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <? endif;?>
                  </div>
                </div>
              </div>
              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <div class="text-wrap">
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <? endif;?>

                    <?php if ($button_text) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_cols' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-2-columns">
          <div class="row">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <?php if ($headline || $subheadline) : ?>
                  <div class="section-header hide-for-small">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <? endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <? endif;?>
                  </div>
                  <? endif;?>
                  <div class="section-main">
                    <?php if ( have_rows('rows') ) :
                          while ( have_rows('rows') ) : the_row();
                            
                            if (!get_sub_field('hide_row')) :

                            $reverse          = get_sub_field('reverse');
                            $row_headline     = get_sub_field('row_headline');
                            $content          = get_sub_field('content');
                            $add_link         = get_sub_field('add_link');
                            $link_widget      = get_sub_field('link_widget');
                            $link_text        = get_sub_field('link_text');
                            $link_url         = get_sub_field('link_url');
                            $button_text      = get_sub_field('button_text');
                            $button_url       = get_sub_field('button_url');
                            $image            = get_sub_field('image');
                        ?>

                        <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
                          <div class="row-container">
                            <div class="column medium-6 col-left">
                              <div class="column-inner">
                                <div class="text-wrapper">
                                <?php if ($row_headline) : ?>
                                  <h3 class="fw-black"><?php echo $row_headline; ?></h3>
                                <? endif;?>
                                <?php if ($content) : ?>
                                  <?php echo $content; ?>
                                <? endif;?>
                                <?php if ($add_link) : ?>
                                  <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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
                    <?php endif;
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
      How it works 
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_how' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_button             = get_sub_field('add_button');
      $button_type            = get_sub_field('button_type');
      $button_text            = get_sub_field('button_text');
      $button_link            = get_sub_field('button_link');
      $add_link               = get_sub_field('add_link');
      $link_text              = get_sub_field('link_text');
      $link_url               = get_sub_field('link_url');
      $add_video              = get_sub_field('add_video');
      $v_headline             = get_sub_field('v_headline');
      $v_content              = get_sub_field('v_content');
      $v_button_text          = get_sub_field('v_button_text');
      $v_button_link          = get_sub_field('v_button_link');
      ?>

        <div class="section section-howit">
          <div class="row row-steps row-small">
            <div class="row-container">
              <div class="column medium-5 col-left">
                <div class="column-inner">
                  <div class="col-wrapper">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <? endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <? endif;?>
                      <?php if ($add_button) : ?>
                        <a class="button <?php echo $button_type; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <? endif;?>
                      <?php if ($add_link) : ?>
                        <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                      <? endif;?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column medium-7 col-right">
                <div class="column-inner">
                  <div class="step-wrap">
                    <?php if ( have_rows('steps') ) :
                        while ( have_rows('steps') ) : the_row();
                          $icon             = get_sub_field('icon');
                          $title            = get_sub_field('title');
                          $description      = get_sub_field('description');
                    ?>
                      <div class="workstep">
                        <div class="icon"><img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" width="64" height="64"></div>
                        <div class="text-wrapper">
                          <p class="title"><?php echo $title; ?></p>
                          <p class="description"><?php echo $description;?></p>
                        </div>
                      </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>
                  </div>

                  <?php if ($add_button) : ?>
                    <a class="button <?php echo $button_type; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                  <? endif;?>

                  <?php if ($add_link) : ?>
                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                  <? endif;?>
                </div>
              </div>
            </div>
          </div>
          
          <?php if ($add_video) : ?>
          <div class="row row-video row-small">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="col-header hide-for-small">
                    <?php if ($v_headline) : ?>
                      <h2 class="fw-black"><?php echo $v_headline; ?></h2>
                    <? endif;?>
                  </div>

                  <div class="col-main  hide-for-small">
                    <?php
                      // if ($v_url) :
                      //   echo '<div class="video-container">';
                      //   echo do_shortcode('[video src="'.$v_url.'" poster="'.$v_overlay['url'].'" width=731 height=444]');
                      //   echo '</div>';
                      // endif;

                      if($v_content) :
                        echo $v_content;
                      endif;
                    ?>
                  </div>

                  <div class="col-watchbtn show-for-small">
                    <a class="button secondary watch-video" href="<?php echo $v_button_link; ?>"><?php echo $v_button_text; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <? endif;?>
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

    <?php
    /* --------------------------------------------
      integrations tabs
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_integration' ) : ?>


      <?php if (!get_sub_field('hide_widget')) : 
        $all_tab_text     = get_sub_field('alltab_text');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $terms            = get_sub_field('integration_tabs');
      ?>
        <div class="section section-integration">

          <div class="row row-header">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                <?php if ($headline) : ?>
                  <h2 class="fw-black"><?php echo $headline; ?></h2>
                <?php endif; ?>
                <?php if ($subheadline) : ?>
                  <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row row-tabs integrations-tabs">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <?php
                  if (!empty($terms)) : ?>
                    <ul>
                      <li cat-id="all" class="active"><?php echo $all_tab_text; ?></li>
                      <?php foreach($terms as $term) : ?>
                        <li cat-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></li>
                      <?php endforeach; ?>
                      
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row row-posts integrations-posts">
            <div class="row-container">
              <?php // now run a query for each category
              foreach( $terms as $term ) :

                  // Define the query
                $args = array(
                    'post_type' => 'integration', // replace with name of your custom post type
                    'integration-category'  => $term->slug, // replace with name of your custom taxonomy
                    'posts_per_page'=>-1
                );
                $query = new WP_Query( $args );

                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post(); 
                    $int_tab_img   = get_field('int_tabs_img');
                    $logo          = get_field('logo');
                    $final_img     = ($int_tab_img) ? $int_tab_img : (($logo) ? $logo : '');
                    $excerpt       = get_the_excerpt();
                    $cats          = implode(',', wp_get_post_terms(get_the_ID(), 'integration-category', array("fields" => "ids")));
              ?>

                  <div class="columns medium-3 active" cat-it="<?php echo $cats; ?>">
                    <div class="column-inner">
                      <div class="integrations-post">
                        <div class="integrations-post-img">
                          <div>
                            <img class="lazyload" data-src="<?php echo $final_img; ?>" alt="<?php the_title(); ?>">
                          </div>
                        </div>
                        <div class="integrations-post-content">
                          <div class="content-wrap">
                            <span class="title"><?php the_title(); ?></span>
                            <p><? echo $excerpt; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              <?php endwhile;
                 endif;
                wp_reset_postdata();
              endforeach;?>

            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>

<script type="text/javascript">
		window.addEventListener( 'load', function() {
			jQuery('a.watch-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: true
      });
		});
</script>

<?php get_footer(); ?>