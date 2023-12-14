<?php
/*
Template Name: Partners4 - MT66
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
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="text-wrap">
                    <?php
                    // headline
                    if ($headline) :
                      echo '<h1 class="small">' . $headline . '</h1>';
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
        Nw Hero
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_hero_new' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $class                  = get_sub_field('widget_class');
        $add_bg                 = get_sub_field('add_background');
        $bg_color               = get_sub_field('bg_color');
        $seotitle               = get_sub_field('seo_title');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $ctatype                = get_sub_field('cta_type');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        $button_link            = get_sub_field('button_link');
        $f_image                = get_sub_field('f_image');
        $b_image                = get_sub_field('b_image');
        $m_image                = get_sub_field('m_image');
        $f_max_width            = get_sub_field('f_max_width');
        $b_max_width            = get_sub_field('b_max_width');
        ?>

          <div class="section section-hero-new <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <?php if ($add_bg) : ?>
              <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
            <?php endif; ?>
            <div class="container">
              <div class="row v-align-middle ">
                <div class="col-left col col-12 col-sm-5">
                  <div class="col-inner">
                    <div class="text-wrapper">
                      <?php
                      // headline
                      if ($seotitle) :
                        echo '<h1 class="seo-title micro secondary hide-for-sm">' . $seotitle . '</h1>';
                      endif;

                      if ($headline) :
                        echo '<h2 class="fw-black">' . $headline . '</h2>';
                      endif;

                      if ($subheadline) :
                        echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                      endif;?>

                      <?php if ($ctatype == "form") : ?>

                      <form action="<?php echo $form_link; ?>"
                        id="hero-signup-form"
                        method="GET"
                        class="email-signup-form"
                      >
                        <div class="form-item input">
                          <input class="homeform"
                            aria-label="email address"
                            type="email"
                            name="email"
                            placeholder="Email address"
                          />
                        </div>
                        <div class="form-item">
                          <button type="submit"
                              aria-label="submit"
                              id="create-account"
                              name="Submit"
                              class="primary"
                          ><?php echo $button_text; ?></button>
                        </div>
                      </form>

                      <?php else : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-right col col-12 col-sm-7">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($b_image ) : ?>
                      <div class="img-wrapper img-wrapper-main hide-for-sm" <?php echo ($b_max_width) ? "style='width:".$b_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $b_image, 'full', '', array( "class" => "hero-img parallax-content1" ) ); ?>
                      </div>
                      <?php endif; ?>

                      <?php if ($f_image ) : ?>
                      <div class="img-wrapper img-wrapper-sub hide-for-sm" <?php echo ($f_max_width) ? "style='width:".$f_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $f_image, 'full', '', array( "class" => "hero-img-sub parallax-content2" ) ); ?>
                      </div>
                      <?php endif; ?>

                      <?php if ($m_image ) : ?>
                      <div class="img-wrapper img-wrapper-mo show-for-sm">
                        <?php echo wp_get_attachment_image( $m_image, 'full', '', array( "class" => "hero-img-mo" ) ); ?>
                      </div>
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
      Subpage widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_subpages' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-subpage">
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="header-wrap">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <?php endif;?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row row-subpages">
              <?php if ( have_rows('subpages') ) :
                  while ( have_rows('subpages') ) : the_row();
                    $icon             = get_sub_field('icon');
                    $sp_name          = get_sub_field('sp_name');
                    $sp_summary       = get_sub_field('sp_summary');
                    $link_text        = get_sub_field('link_text');
                    $link_url         = get_sub_field('link_url');
              ?>
              <div class="col col-12 col-sm-6">
                <div class="col-inner">
                  <div class="subpage-container">
                  
                    <div class="img-wrap">
                      <?php if ($icon) : ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" width="64" height="64">
                      <?php endif;?>
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
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="text-wrap">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <?php endif;?>
                    <?php if ($button_text) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="text-wrap">
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <?php endif;?>

                    <?php if ($button_text) : ?>
                      <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_cols' ) : ?>

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
                  <div>
                    <?php if ($headline || $subheadline) : ?>
                      <div class="section-header hide-for-sm">
                        <?php if ($headline) : ?>
                          <h2 class="fw-black"><?php echo $headline; ?></h2>
                        <?php endif;?>
                        <?php if ($subheadline) : ?>
                          <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                        <?php endif;?>
                      </div>
                    <?php endif;?>
                  </div>
                  
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

                        <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
                          <div class="col col-12 col-sm-6 col-left">
                            <div class="col-inner">
                              <div class="text-wrapper">
                              <?php if ($row_headline) : ?>
                                <h3 class="fw-black"><?php echo $row_headline; ?></h3>
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
          <div class="container-narrow">
            <div class="row row-steps">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <div class="text-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif;?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif;?>
                      <?php if ($add_button) : ?>
                        <a class="button <?php echo $button_type; ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php endif;?>
                      <?php if ($add_link) : ?>
                        <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-7 col-right">
                <div class="col-inner">
                  <div class="step-wrap">
                    <?php if ( have_rows('steps') ) :
                        while ( have_rows('steps') ) : the_row();
                          $icon             = get_sub_field('icon');
                          $title            = get_sub_field('title');
                          $description      = get_sub_field('description');
                    ?>
                      <div class="workstep">
                        <div class="icon"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" width="64" height="64"></div>
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
                  <?php endif;?>

                  <?php if ($add_link) : ?>
                    <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                  <?php endif;?>
                </div>
              </div>
            </div>

            <?php if ($add_video) : ?>
            <div class="row row-video">
              <div class="col col-12">
                <div class="col-inner">
                  <div>
                    <div class="col-header hide-for-sm">
                      <?php if ($v_headline) : ?>
                        <h2 class="fw-black"><?php echo $v_headline; ?></h2>
                      <?php endif;?>
                    </div>

                    <div class="col-main  hide-for-sm">
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

                    <div class="col-watchbtn show-for-sm">
                      <a class="button secondary watch-video" href="<?php echo $v_button_link; ?>"><?php echo $v_button_text; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif;?>
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
          <div class="container">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                <?php if ($headline) : ?>
                  <h2 class="fw-black"><?php echo $headline; ?></h2>
                <?php endif; ?>
                <?php if ($subheadline) : ?>
                  <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="row row-tabs integrations-tabs">
              <div class="col col-12">
                <div class="col-inner">
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

            <div class="row row-posts integrations-posts">
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

                  <div class="col col-12 col-sm-3 active" cat-it="<?php echo $cats; ?>">
                    <div class="col-inner">
                      <div class="integrations-post">
                        <div class="integrations-post-img">
                          <div>
                            <img src="<?php echo $final_img; ?>" alt="<?php the_title(); ?>">
                          </div>
                        </div>
                        <div class="integrations-post-content">
                          <div class="content-wrap">
                            <span class="title"><?php the_title(); ?></span>
                            <p><?php echo $excerpt; ?></p>
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

</main>

<?php get_footer(); ?>