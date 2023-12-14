<?php
/*
Template Name: Partners - MT50 - Flexible
*/
get_header(); ?>
<script type="application/ld+json">
    {  
      "@context":"http://schema.org",
      "@type":"WebApplication",
      "name": "Homebase",
      "applicationCategory": "BusinessApplication",
      "datePublished": "2014-04-01T08:32:29-08:00",
      "description": "Free time tracking, employee scheduling, hiring, and team management tools for small (but mighty) businesses.",
      "operatingSystem":"Web platform, Windows, Mac OS X, Linux, iOS, Android",
      "url":"https://joinhomebase.com/",
      "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "USD"
			},
      "image": [
        "https://joinhomebase.com/wp-content/uploads/2020/02/timeclock-3-1-1-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
        "https://joinhomebase.com/wp-content/uploads/2020/05/hiring-on-2.png"
       ],
      "featureList":"https://joinhomebase.com/features/employee-scheduling/",
      "screenshot": "https://joinhomebase.com/wp-content/uploads/2020/02/scheduling-3-2-1.png",
      "softwareHelp": "https://joinhomebase.com/homebase-support/",
      "author":{  
          "@type":"Organization",
          "name":"Homebase",
          "url":"https://joinhomebase.com/",
          "logo":{
            "@type":"ImageObject",
            "url":"https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
            "width":"256px",
            "height":"256px"
          }
      },
      "video":{  
          "@type":"VideoObject",
          "caption":"Getting started with Homebase",
          "thumbnailUrl":"https://img.youtube.com/vi/qmk18_LnLBU/maxresdefault.jpg",
          "contentUrl":"https://www.youtube.com/watch?v=qmk18_LnLBU",
          "name":"Free Employee Scheduling, Timesheets, Time Clock, Hiring, and Team Communication App | Homebase Demo",
          "description":"Homebase makes work easier for 100,000+ small (but mighty) businesses with everything they need to manage an hourly team: employee scheduling, time clocks, team communication, hiring, onboarding, and compliance. Learn more and sign up for free at joinhomebase.com.",
          "uploadDate":"2018-09-24"
      },
      "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": "4.8",
         "reviewCount": "15821"
      },
      "review": [
        {
          "@type": "Review",
          "author":
          {
            "@type": "Person",
            "name": "Danny Del Campo"
          },
          "datePublished": "2020-06-10",
          "description": "User friendly yet has very advanced settings for those who need more control. Has options for location tracking, time cards are accurate, and able to track PTO simply.",
          "name": "Great scheduling and HR software for small business",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        },
        {
          "@type": "Review",
          "author": 
          {
            "@type": "Person",
            "name": "Samantha Powell"
          },
          "datePublished": "2019-04-18",
          "description": "This product is great for creating schedules and keeping track of staff. The phone app is a great way to see posted schedules, requested time off, and estimated pay!",
          "name": "Great product",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5",
            "worstRating": "1"
          }
        }
      ]
    }
 </script>

 <main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" role="document">

<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;
            /* --------------------------------------------
              features sub nav
            -------------------------------------------- */
            if ( get_row_layout() == 'flex_features_sub_nav' ) : ?>


              <?php if (!get_sub_field('hide_widget')) : 
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

              <?php endif;

            /* --------------------------------------------
              Hero
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_hero' ) : ?>

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
              $add_l_margin           = get_sub_field('add_l_margin');
              $f_max_width            = get_sub_field('f_max_width');
              $b_max_width            = get_sub_field('b_max_width');
              ?>

                <div class="section section-hero <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
                  <?php if ($add_bg) : ?>
                    <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
                  <?php endif; ?>
                  <div class="container">
                    <div class="row v-align-middle ">
                      <div class="col-left col col-12 col-sm-6">
                        <div class="col-inner">
                          <div class="text-wrapper <?php echo ($add_l_margin) ? '' : 'nomargin';?>">
                            <?php
                            // headline
                            if ($seotitle) :
                              echo '<h1 class="seo-title micro">' . $seotitle . '</h1>';
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
                      <div class="col-right col col-12 col-sm-6">
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
                    </div>
                    
                  </div>
                </div>
              <?php endif; ?>

            <?php  
            /* --------------------------------------------
              3 column
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_3_columns' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $selector           = get_sub_field('section_name');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                
                $left_image       = get_sub_field('left_image');
                $left_title       = get_sub_field('left_title');
                $left_desc        = get_sub_field('left_desc');
                $left_link_text     = get_sub_field('left_link_text');
                $left_link_url      = get_sub_field('left_link_url');

                $center_image     = get_sub_field('center_image');
                $center_title     = get_sub_field('center_title');
                $center_desc      = get_sub_field('center_desc');
                $center_link_text   = get_sub_field('center_link_text');
                $center_link_url    = get_sub_field('center_link_url');

                $right_image      = get_sub_field('right_image');
                $right_title      = get_sub_field('right_title');
                $right_desc       = get_sub_field('right_desc');
                $right_link_text    = get_sub_field('right_link_text');
                $right_link_url     = get_sub_field('right_link_url');

                $fourth_image      = get_sub_field('fourth_image');
                $fourth_title      = get_sub_field('fourth_title');
                $fourth_desc       = get_sub_field('fourth_desc');
                $fourth_link_text    = get_sub_field('fourth_link_text');
                $fourth_link_url     = get_sub_field('fourth_link_url');
                ?>

                <div class="section section-3-columns <?php echo $selector; ?> <?php echo $section_index?>">
                  <div class="container">
                    <div class="row header">
                      <div class="col col-12">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2 class="fw-black">' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3 class="fw-bold">' . $subheadline . '</h3>';
                          endif;
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="row contents">
                      <div class="col col-12 col-sm-10 offset-sm-1">
                        <div class ="col-inner">
                          <div class="row">
                            <div class="col col-12 col-sm-3 text-center">
                              <div class="col-inner">
                                <div class="column-content">
                                  <div class="column-img">
                                    <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>">
                                  </div>
                                  <div class="column-text">
                                    <div class="column-title">
                                      <h4><?php echo ($left_title)?></h4>
                                    </div>
                                    <div class="column-desc">
                                      <?php echo ($left_desc)?>
                                    </div>
                                    <div class="column-link lazyload">
                                    <?php 
                                      if ($left_link_url && $left_link_text) :
                                        $leftlinktext  = '<a href="' . $left_link_url . '">';
                                        $leftlinktext .= $left_link_text;
                                        $leftlinktext .= '</a>';

                                        echo ($leftlinktext);
                                      endif;
                                    ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col col-12 col-sm-3 text-center">
                              <div class="col-inner">
                                <div class="column-content">
                                  <div class="column-img">
                                    <img src="<?php echo $center_image['url']; ?>" alt="<?php echo $center_image['alt']; ?>">
                                  </div>
                                  <div class="column-text">
                                    <div class="column-title">
                                      <h4><?php echo ($center_title)?></h4>
                                    </div>
                                    <div class="column-desc">
                                      <?php echo ($center_desc)?>
                                    </div>
                                    <div class="column-link">
                                    <?php 
                                      if ($center_link_url && $center_link_text) :
                                        $centerlinktext  = '<a href="' . $center_link_url . '">';
                                        $centerlinktext .= $center_link_text;
                                        $centerlinktext .= '</a>';

                                        echo ($centerlinktext);
                                      endif;
                                    ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col col-12 col-sm-3 text-center">
                              <div class="col-inner">
                                <div class="column-content">
                                  <div class="column-img">
                                    <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>">
                                  </div>
                                  <div class="column-text">
                                    <div class="column-title">
                                      <h4><?php echo ($right_title)?></h4>
                                    </div>
                                    <div class="column-desc">
                                      <?php echo ($right_desc)?>
                                    </div>
                                    <div class="column-link">
                                    <?php 
                                      if ($right_link_url && $right_link_text) :
                                        $rightlinktext  = '<a href="' . $right_link_url . '">';
                                        $rightlinktext .= $right_link_text;
                                        $rightlinktext .= '</a>';

                                        echo ($rightlinktext);
                                      endif;
                                      
                                    ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col col-12 col-sm-3 text-center">
                              <div class="col-inner">
                                <div class="column-content">
                                  <div class="column-img">
                                    <img src="<?php echo $fourth_image['url']; ?>" alt="<?php echo $fourth_image['alt']; ?>">
                                  </div>
                                  <div class="column-text">
                                    <div class="column-title">
                                      <h4><?php echo ($fourth_title)?></h4>
                                    </div>
                                    <div class="column-desc">
                                      <?php echo ($fourth_desc)?>
                                    </div>
                                    <div class="column-link">
                                    <?php 
                                      if ($fourth_link_url && $fourth_link_text) :
                                        $fourthlinktext  = '<a href="' . $fourth_link_url . '">';
                                        $fourthlinktext .= $fourth_link_text;
                                        $fourthlinktext .= '</a>';

                                        echo ($fourthlinktext);
                                      endif;
                                    ?>
                                    </div>
                                  </div>
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
              integrations tabs
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_integrations_tab' ) : ?>


              <?php if (!get_sub_field('hide_widget')) : 
                $all_tab_text     = get_sub_field('all_tab_text');
                $hyper_text       = get_sub_field('hyper_text');
                $terms            = get_sub_field('tabs');
                $footer_text      = get_sub_field('footer_text');
                $link_text        = get_sub_field('link_text');
                $link_url         = get_sub_field('link_url');
              ?>
                <div class="section-integrations-tabs section <?php echo ($section_index)?>">
                  <div class="tabs-header">
                    <div class="container">
                      <div class="integrations-tabs">
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

                  <div class="tab-content">
                    <div class="container">
                      <div class="row integrations-posts">
                        <?php // now run a query for each category
                        foreach( $terms as $term ) :

                            // Define the query
                          $args = array(
                              'post_type' => 'integration', // replace with name of your custom post type
                              'integration-category'  => $term->slug, // replace with name of your custom taxonomy
                              'posts_per_page'=>-1
                          );
                          $query = new WP_Query( $args );

                          if ($query->have_posts()) : ?>
                            
                              <?php while ($query->have_posts()) : $query->the_post(); ?>
        
                                <?php
                                $int_tab_img   = get_field('int_tabs_img');
                                $logo          = get_field('logo');
                                $final_img     = ($int_tab_img) ? $int_tab_img : (($logo) ? $logo : '');
                                $excerpt       = get_the_excerpt();
                                $external_link = get_field('external_link');
                                $title_link    = get_field('title_link');
                                $external_link_text = get_field('external_link_text');
                                $cats          = implode(',', wp_get_post_terms(get_the_ID(), 'integration-category', array("fields" => "ids")));
                                ?>
        
                                <div class="col col-12 col-sm-4 active" cat-it="<?php echo $cats; ?>"><div class="col-inner">
                                  <div class="integrations-post">
                                    <div class="integrations-post-img">
                                      <div>
                                        <img src="<?php echo $final_img; ?>" alt="<?php the_title(); ?>">
                                      </div>
                                    </div>
                                    <div class="integrations-post-content">
                                      <?php if ($title_link) : ?>
                                      <h3><a href="<?php echo $title_link; ?>"><?php the_title(); ?></a></h3>                                      
                                      <?php else : ?>
                                      <h3><?php the_title(); ?></h3>
                                      <?php endif; ?>
                                      <span><?php echo wp_trim_words( $excerpt, 25, '...' ); ?></span>
                                      <?php if ($external_link) : ?>
                                        <a href="<?php echo $external_link; ?>" target="_blank" rel="noreferrer"><?php echo ($external_link_text) ? $external_link_text : $hyper_text; ?></a>
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </div></div>
        
                              <?php endwhile; ?>
                          <?php endif; 
                          
                          wp_reset_postdata();
                        endforeach;
                        ?>
                      </div>
                      <div class="row footer-link">
                        <div class="col col-12 col-sm-9">
                          <div class="col-inner">
                            <p><?php echo $footer_text; ?></p>
                          </div>
                        </div>
                        <div class="col col-12 col-sm-3">
                          <div class="col-inner">
                            <a class="text-link-arrow" href="<?php echo $link_url; ?>" target="_blank" rel="noreferrer"><?php echo $link_text; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            
            <?php
            /* --------------------------------------------
              Testimonial
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_testimonial' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $title                    = get_sub_field('title');
                $content                  = get_sub_field('content');
                $authors_name             = get_sub_field('authors_name');
                $authors_position         = get_sub_field('authors_position');
                $authors_photo            = get_sub_field('authors_photo');
                ?>

                <div class="section section-testimonial <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row">
                      <?php
                      // image
                      if ($authors_photo) : ?>
                        <div class="col col-12 col-sm-4 offset-sm-1 col-2-left-col">
                          <div class="col-inner">
                            <div class="col-2-img">
                              <img src="<?php echo $authors_photo['url']; ?>" alt="<?php echo $authors_photo['alt']; ?>">
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>

                      <div class="col col-12 col-sm-7 col-2-right-col">
                        <div class="col-inner">
                          <div class="col-wrap">
                            <div class="col-content">
                              <div class="col-text">
                                <?php
                                // headline
                                if ($title) :
                                  echo '<h3 class="fw-black">' . $title . '</h3>';
                                endif;

                                // text
                                if ($content) : ?>
                                  <div class="content">
                                    <?php echo $content; ?>
                                  </div>
                                <?php endif;
                                
                                if ( $authors_position || $authors_name ) : ?>
                                  <div class="author-info">
                                    <div class="author-name"><?php echo $authors_name; ?></div>
                                    <div class="author-position"><?php echo $authors_position; ?></div>
                                  </div>
                                <?php endif;?>
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
              2 column
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_2_column' ) : ?>


                <?php if (!get_sub_field('hide_widget')) : ?>

                  <?php
                  $scroll_anchor      = get_sub_field('scroll_anchor');
                  $borders            = get_sub_field('borders');
                  $reverse            = get_sub_field('reverse');
                  $headline           = get_sub_field('headline');
                  $subheadline        = get_sub_field('subheadline');
                  $text               = get_sub_field('text');
                  $add_custom_list    = get_sub_field('add_custom_list');
                  $learn_more         = get_sub_field('learn_more');
                  $link_text          = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
                  $link_url           = get_sub_field('link_url');
                  $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
                  $button_link        = get_sub_field('button_link');
                  $image              = get_sub_field('image');
                  $add_image_credit   = get_sub_field('add_image_credit');
                  $image_credit_title = get_sub_field('image_credit_title');
                  $image_credit_text  = get_sub_field('image_credit_text');
                  $image_credit_color = get_sub_field('image_credit_color');
                  $form_text      = (get_sub_field('sign_up_text')) ? get_sub_field('sign_up_text') : 'Start now for free';
                  $form_link      = (get_sub_field('sign_up_action')) ? get_sub_field('sign_up_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
                  ?>

                  <div class="section section-2-columns <?php echo ($section_index)?> <?php echo ($borders) ? 'col-2-borders' : ''; ?> <?php echo ($reverse) ? 'reverse' : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                    <div class="container">
                      <div class="row v-align-middle">

                        <div class="col col-12 col-md-5 offset-md-1 col-2-left-col"><div class="col-inner">
                          <div class="col-header">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2 class="fw-black">' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3 class="subheading">' . $subheadline . '</h3>';
                          endif; ?>
                          </div>
                          
                          <?php if ($text) : ?>
                            <div class="col-2-text">
                              <?php echo $text; ?>
                            </div>
                          <?php endif;

                          // custom bullet list
                          if ($add_custom_list && have_rows('custom_bullet_list')) : ?>
                            <ul class="col-2-bullet-list">
                              <?php while ( have_rows('custom_bullet_list') ) : the_row(); ?>

                                <?php
                                $headline = get_sub_field('headline');
                                $text     = get_sub_field('text');
                                ?>

                                <li>
                                  <?php if ($headline) : ?>
                                    <h4><?php echo $headline; ?></h4>
                                  <?php endif; ?>

                                  <?php echo $text; ?>
                                </li>

                              <?php endwhile; ?>
                            </ul>
                          <?php endif;

                          // link/button/form
                          if( $learn_more == 'form' ) : ?>
                            <div class="page-template-flexible-home">
                              <div class="signup-bumper-column">
                                  <form action="<?php echo $form_link ?>?fullname=$_GET['fullname']&email=$_GET['email']"
                                          id="home-signup-form-2"
                                          method="GET"
                                          class="home-form"
                                  >
                                      <input class="homeform"
                                              aria-label="email address"
                                              type="email"
                                              name="email"
                                              placeholder="Email Address"
                                      />
                                      <input type="submit"
                                              id="create-account"
                                              aria-label="submit"
                                              name="Submit"
                                              class="primary-cta buttonsbn"
                                              value="<?php echo $form_text; ?>"
                                      />
                                  </form>
                              </div>
                            </div>
                          <?php
                          elseif ($learn_more) : ?>
                            <div class="col-3-col-link">
                              <a
                                href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
                                class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
                              >
                                <?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
                              </a>
                            </div>
                          <?php endif; ?>
                        </div></div>

                        <?php
                        // image
                        if ($image) : ?>
                          <div class="col col-12 col-md-5 text-center col-2-right-col"><div class="col-inner">
                            <div class="col-header">
                              <?php
                              // headline
                              if ($headline) :
                                echo '<h2>' . $headline . '</h2>';
                              endif;

                              // subheadline
                              if ($subheadline) :
                                echo '<h3>' . $subheadline . '</h3>';
                              endif; ?>
                            </div>

                            <div class="col-2-img">
                              <img alt="Screenshot App" src="<?php echo $image; ?>">

                              <?php if ($add_image_credit) : ?>
                                <div class="col-2-image-credit"
                                  style="color: <?php echo $image_credit_color; ?>;"
                                >
                                  <?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
                                  <?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
                                </div>
                              <?php endif; ?>
                            </div>
                          </div></div>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>

                <?php endif; ?>

            <?php
            /* --------------------------------------------
              CTA Banner
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $align                  = get_sub_field('align');
                $stype                  = get_sub_field('stype');
                $banner_text          = get_sub_field('banner_text');
                $link_text            = get_sub_field('link_text');
                $link_url             = get_sub_field('link_url');
                ?>

                <div class="section section-cta-banner" <?php echo ($section_index)?>>
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
                            <?php if ($banner_text) : ?>
                              <h3 class="fw-normal"><?php echo $banner_text; ?></h3>
                            <?php endif; ?>
                            <?php if ($link_text) : ?>
                              <a class="button primary reverse" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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

</main>

<?php get_footer(); ?>