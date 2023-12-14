<?php
/*
Template Name: SEO Cluster - MT87 - Flexible
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
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $add_form               = get_sub_field('add_form');
        $form_link              = get_sub_field('form_link');
        $image                  = get_sub_field('image');
        ?>

          <div class="section section-hero">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="row row-header">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="header-wrap">
                          <?php
                            if ($headline) :
                              echo '<h1 class="fw-black">' . $headline . '</h1>';
                            endif;

                            if ($subheadline) :
                              echo '<h2 class="subheading normal">' . $subheadline . '</h2>';
                            endif;
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row v-align-middle">
                      <div class="col col-12 col-sm-6 col-left">
                        <div class="col-inner">
                          <div class="text-wrap">
                            <?php
                              if ($content) :
                                echo $content;
                              endif;
                            ?>

                            <?php if ($add_form ) : ?>
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
                            <?php endif; ?>
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
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        features sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) :
        if (!get_sub_field('hide_widget')) : 
          $nav_menu_name        = get_sub_field('menu_name');
          ?>
          <div class="section section-navbar feature-navbar">
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'features-sub', 'container_class' => 'features-sub-container') ); ?>
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
      elseif ( get_row_layout() == 'flex_2_cols' ) : 

        if (!get_sub_field('hide_widget')) : 
          $reverse          = get_sub_field('reverse');
          $sticky           = get_sub_field('sticky_image');
          $headline         = get_sub_field('headline');
          $subheadline      = get_sub_field('subheadline');
          $content          = get_sub_field('content');
          $image            = get_sub_field('image');
          ?>
          <div class="section section-2-columns">
            <div class="container-narrow">
              <div class="row <?php echo ($reverse)? 'reverse' : '';?> <?php echo ($sticky)? 'sticky-image' : 'v-align-middle';?>">
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-bold"><?php echo $headline; ?></h3>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                    <?php endif;?>
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <?php endif;?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right <?php echo ($sticky)? 'col-sticky' : '';?>">
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
        Simple CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_simple_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $banner_type            = get_sub_field('banner_type');
        $banner_headline        = get_sub_field('banner_headline');
        $banner_subheadline     = get_sub_field('banner_subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $form_link              = get_sub_field('form_link');
        global $post;
        if (get_post_field( 'post_name', $post->post_parent )  == 'team-communication') :
          $banner_left_headline = get_field('team_communication_leftside_headline', 'option');
          $banner_left_subheadline = get_field('team_communication_leftside_subheadline', 'option');
        elseif (get_post_field( 'post_name', $post->post_parent )  == 'hiring-and-onboarding') :
          $banner_left_headline = get_field('hiring_onboarding_leftside_headline', 'option');
          $banner_left_subheadline = get_field('hiring_onboarding_leftside_subheadline', 'option');
        elseif (get_post_field( 'post_name', $post->post_parent )  == 'hr-compliance') :
          $banner_left_headline = get_field('hr_compliance_leftside_headline', 'option');
          $banner_left_subheadline = get_field('hr_compliance_leftside_subheadline', 'option');
        elseif (get_post_field( 'post_name', $post->post_parent )  == 'payroll') :
          $banner_left_headline = get_field('payroll_leftside_headline', 'option');
          $banner_left_subheadline = get_field('payroll_leftside_subheadline', 'option');
        elseif (get_post_field( 'post_name', $post->post_parent )  == 'time-clock') :
          $banner_left_headline = get_field('time_clock_leftside_headline', 'option');
          $banner_left_subheadline = get_field('time_clock_leftside_subheadline', 'option');
        elseif (get_post_field( 'post_name', $post->post_parent )  == 'timesheets') :
          $banner_left_headline = get_field('timesheets_leftside_headline', 'option');
          $banner_left_subheadline = get_field('timesheets_leftside_subheadline', 'option');
        endif;
        ?>

          <div class="section section-simple-cta <?php echo ($banner_type == 'teal') ? 'teal-banner':'dpink-banner'; ?>">
            <div class="<?php echo ($banner_type == 'dpink') ? 'container-narrow':'container'; ?>">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="banner-container">
                      <div class="row h-align-center">
                        <?php if ($banner_type == 'teal') : ?>
                          <div class="col col-12 col-sm-7 col-md-7 col-left">
                        <?php else : ?>
                          <div class="col col-12 col-sm-8 col-left">
                        <?php endif; ?>
                            <div class="col-inner">
                              <?php
                                if ($banner_headline) :
                                  echo '<p class="headline">' . $banner_headline . '</p>';
                                else :
                                  echo '<p class="headline">' . $banner_left_headline . '</p>';
                                endif;

                                if ($banner_subheadline) :
                                  echo '<p class="subheadline">' . $banner_subheadline . '</p>';
                                else : 
                                  echo '<p class="subheadline">' . $banner_left_subheadline . '</p>';
                                endif;
                              ?>
                            </div>
                          </div>

                        <?php if ($banner_type == 'teal') : ?>
                          <div class="col col-12 col-sm-4 col-md-4 col-right">
                            <div class="col-inner">
                              <?php
                                if ($button_text) :
                                  if ($button_link) :
                                    echo '<a href="'. $button_link .'" class="button primary">' . $button_text . '</a>';
                                  else : 
                                    echo '<a href="../" class="button primary">' . $button_text . '</a>';
                                  endif;
                                else :
                                  if ($button_link) : 
                                    echo '<a href="'. $button_link .'" class="button primary">Learn more</a>'; 
                                  else : 
                                    echo '<a href="../" class="button primary">Learn more</a>';
                                  endif; 
                                endif;
                              ?>
                            </div>
                          </div>
                        <?php else : ?>
                          <div class="col col-12 col-sm-4 col-right">
                            <div class="col-inner">
                              <?php
                                if ($button_text) :
                                  if ($button_link) :
                                    echo '<a href="'. $button_link .'" class="button primary">' . $button_text . '</a>';
                                  else : 
                                    echo '<a href="../" class="button primary">' . $button_text . '</a>';
                                  endif;
                                else :
                                  if ($button_link) : 
                                    echo '<a href="'. $button_link .'" class="button primary">Learn more</a>'; 
                                  else : 
                                    echo '<a href="../" class="button primary">Learn more</a>';
                                  endif; 
                                endif;
                              ?>                              
                            </div>
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
        Subscribe banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_subscribe' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $color                  = get_sub_field('color');
        $banner_headline        = get_sub_field('banner_headline');
        $banner_subheadline     = get_sub_field('banner_subheadline');
        $button_text            = get_sub_field('button_text');
        $form_link              = get_sub_field('form_link');
        ?>

          <div class="section section-subscribe-banner">
            <div class="section-inner <?php echo $color; ?>">
              <div class="container-narrow">
                <div class="row">
                  <div class="col col-12">
                    <div class="col-inner">
                      <div class="banner-wrap">
                        <?php if ($banner_headline) : ?>
                          <h3 class="fw-black"><?php echo $banner_headline; ?></h3>
                        <?php endif; ?>

                        <?php if ($banner_subheadline) : ?>
                          <p class="subheadline"><?php echo $banner_subheadline; ?></p>
                        <?php endif; ?>

                        <form
                          action="<?php echo ($form_link) ? $form_link : '//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=b7db0538-8b4f-49ec-b2b1-b208d05b3a40'; ?>"
                          method="POST"
                          class="subscribe-form"
                        >
                          <div class="form-item input">
                            <input
                                aria-label="email address"
                                type="email"
                                name="email"
                                placeholder="Email address"
                            />
                          </div>
                          <div class="form-item button-wrap">
                            <button type="submit"
                                aria-label="submit"
                                name="Submit"
                                class="primary"
                            ><?php echo $button_text; ?></button>
                          </div>
                        </form>
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
                      <?php endif; ?>
                    </div>
                    <?php if ($photo) : ?>
                      <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="photo"/>
                    <?php endif; ?>
                    <?php if ($label) : ?>
                      <div class="quote-label hide-for-sm ">
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

      <?php
      /* --------------------------------------------
        Simple one column
      -------------------------------------------- */
      elseif ( get_row_layout() == 'simple_one_column' ) :
        if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $content            = get_sub_field('content');
          ?>
          <div class="section section-simple-one-column <?php echo ($id) ? "id='".$id."'" : '';?>">
            <div class="container-narrow">
              <?php if ($content) : ?>
                <div class="content"><?php echo $content; ?></div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        FAQs widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
        ?>

          <div class="section section-faqs" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($image_d) : ?>
                        <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                        <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) :  the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers'); ?>
                        <div class="faq-item text-left">
                          <?php if ($faq_field) : ?>
                          <div class="field"><?php echo $faq_field; ?></div>
                          <?php endif; ?>
                          <h3 class="subheading fw-bold"><?php echo $question; ?></h3>
                          <?php echo $answers; ?>
                        </div>
                      <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php 
    
        global $schema;

        $schema = array(
        '@context'   => "https://schema.org",
        '@type'      => "FAQpage",
        'mainEntity' => array()
        );

        if ( have_rows('faqs') ) {
          while ( have_rows('faqs') ) : the_row();
            $questions = array(
              '@type'          => 'Question',
              'name'           => get_sub_field('question'),
              'acceptedAnswer' => array(
              '@type' => "Answer",
              'text' => get_sub_field('answers')
                )
                );
                array_push($schema['mainEntity'], $questions);
          endwhile;

        function blog_generate_faq_schema ($schema) {
          global $schema;
          if ($schema['mainEntity']) {
            echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
          }
        }
        add_action( 'wp_footer', 'blog_generate_faq_schema', 100 );
        }

        ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>