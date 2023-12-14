<?php
/*
Template Name: Home-MT39-v1.0
*/
get_header(); ?>

<script type="application/ld+json">
  { 
   "@context": "http://schema.org",
   "@type": "Organization",
   "name": "Homebase",
   "legalName" : "Pioneer Works, Inc.",
   "url": "https://joinhomebase.com",
   "logo": "https://joinhomebase.com/wp-content/uploads/2020/05/homebase-logo-purple_proxnova.svg",
   "foundingDate": "2014",
   "founders": [{
     "@type": "Person",
     "name": "John Waldmann"
   }],
   "address": {
      "@type": "PostalAddress",
      "streetAddress": "835 Howard Street",
      "addressLocality": "San Francisco",
      "addressRegion": "CA",
      "postalCode": "94103",
      "addressCountry": "USA"
   },
   "contactPoint": {
     "@type": "ContactPoint",
     "contactType": "customer support",
     "telephone": "[+1-415-951-3830]",
     "email": "support@joinhomebase.com"
   },
   "sameAs":[  
       "https://www.facebook.com/HomebaseHQ/",
       "https://twitter.com/joinhomebase",
       "https://www.linkedin.com/company/homebase-hr/",
       "https://www.youtube.com/channel/UC6oEeT2TOCNEDM5OcYddUxA",
       "https://www.capterra.com/p/153076/Homebase/",
       "https://www.crunchbase.com/organization/homebase/",
	 "https://www.business.com/reviews/homebase/"
   ]
  }
</script>

<main id="primary" class="site-main" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;
            /* --------------------------------------------
              Hero
            -------------------------------------------- */
            if ( get_row_layout() == 'flex_hero' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline                 = get_sub_field('headline');
                $subheadline              = get_sub_field('subheadline');
                $sign_up_text             = (get_sub_field('form_button_text')) ? get_sub_field('form_button_text') : 'Get started';
                $sign_up_url              = (get_sub_field('form_action')) ? get_sub_field('form_action') : 'https://app.joinhomebase.com/onboarding/sign-up';
                $opt_load_img             = get_sub_field('opt_load');
                $hero_image_desktop       = get_sub_field('hero_image_desktop');
                $hero_image_mobile        = get_sub_field('hero_image_mobile');
                ?>

                <div class="section col-2-section section-hero <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12 col-sm-6 col-2-left-col">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h1>' . $headline . '</h1>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h2>' . $subheadline . '</h2>';
                          endif;?>

                          <form action="<?php echo $sign_up_url; ?>"
                            id="home-signup-form"
                            method="GET"
                            class="home-form"
                          >
                            <div class="row">
                                <div class="col col-12 col-sm-8">
                                  <div class="col-inner">
                                    <div class="form-item">
                                      <input class="homeform"
                                          aria-label="email address"
                                          type="email"
                                          name="email"
                                          placeholder="Email address"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="col col-12 col-sm-4">
                                  <div class="col-inner">
                                    <div class="form-item">
                                      <input type="submit"
                                          aria-label="submit"
                                          id="create-account"
                                          name="Submit"
                                          class="primary-cta buttonsbn"
                                          value="<?php echo $sign_up_text; ?>"
                                      />
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-6 text-center col-2-right-col">
                        <div class="col-inner">
                          <?php if ( $opt_load_img && wp_is_mobile() ) : ?>
                            <div class="col-2-img hide-for-sm" 
                                  data-img-src="<?php echo $hero_image_mobile['url']; ?>" 
                                  data-img-alt="<?php echo $hero_image_mobile['alt']; ?>" 
                                style="min-height: <?php echo $hero_image_mobile['sizes']['large-height']; ?>px;">
                            </div>
                            <div class="col-2-img show-for-sm" 
                                  data-img-src="<?php echo $hero_image_mobile['url']; ?>" 
                                  data-img-alt="<?php echo $hero_image_mobile['alt']; ?>" 
                                style="min-height: <?php echo $hero_image_mobile['sizes']['large-height']; ?>px;">
                            </div>
                          <?php else : ?>
                            <div class="col-2-img">
                              <img class="hide-for-sm" 
                                    src="<?php echo $hero_image_desktop['url']; ?>" 
                                    alt="<?php echo $hero_image_desktop['alt']; ?>" 
                                    width="<?php echo $hero_image_desktop['sizes']['large-width']; ?>" 
                                    height="<?php echo $hero_image_desktop['sizes']['large-height']; ?>"
                              />
                              <img class="show-for-sm" 
                                    src="<?php echo $hero_image_mobile['url']; ?>" 
                                    alt="<?php echo $hero_image_mobile['alt']; ?>"
                                    width="<?php echo $hero_image_mobile['sizes']['large-width']; ?>" 
                                    height="<?php echo $hero_image_mobile['sizes']['large-height']; ?>"
                              >
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
              Product
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_products' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                
                $left_p_image       = get_sub_field('left_p_image');
                $left_p_title       = get_sub_field('left_p_title');
                $left_p_desc        = get_sub_field('left_p_desc');
                $left_link_text     = get_sub_field('left_link_text');
                $left_link_url      = get_sub_field('left_link_url');

                $center_p_image     = get_sub_field('center_p_image');
                $center_p_title     = get_sub_field('center_p_title');
                $center_p_desc      = get_sub_field('center_p_desc');
                $center_link_text   = get_sub_field('center_link_text');
                $center_link_url    = get_sub_field('center_link_url');

                $right_p_image      = get_sub_field('right_p_image');
                $right_p_title      = get_sub_field('right_p_title');
                $right_p_desc       = get_sub_field('right_p_desc');
                $right_link_text    = get_sub_field('right_link_text');
                $right_link_url     = get_sub_field('right_link_url');
                ?>

                <div class="section section-products <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;
                          ?> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="product-content">
                            <div class="product-img">
                              <img class="lazyload" src="<?php echo $left_p_image['url']; ?>" alt="<?php echo $left_p_image['alt']; ?>">
                            </div>
                            <div class="product-text">
                              <div class="product-title">
                                <h4><?php echo ($left_p_title)?></h4>
                              </div>
                              <div class="product-desc">
                                <?php echo ($left_p_desc)?>
                              </div>
                              <div class="product-link">
                              <?php 
                                if ($left_link_text) :
                                  $leftlinktext  = '<a href="' . $left_link_url . '">';
                                  $leftlinktext .= $left_link_text;
                                  $leftlinktext .= '</a>';
                                endif;
                                echo ($leftlinktext)
                              ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="product-content">
                            <div class="product-img">
                              <img class="lazyload" src="<?php echo $center_p_image['url']; ?>" alt="<?php echo $center_p_image['alt']; ?>">
                            </div>
                            <div class="product-text">
                              <div class="product-title">
                                <h4><?php echo ($center_p_title)?></h4>
                              </div>
                              <div class="product-desc">
                                <?php echo ($center_p_desc)?>
                              </div>
                              <div class="product-link">
                              <?php 
                                if ($center_link_text) :
                                  $centerlinktext  = '<a href="' . $center_link_url . '">';
                                  $centerlinktext .= $center_link_text;
                                  $centerlinktext .= '</a>';
                                endif;
                                echo ($centerlinktext)
                              ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="product-content">
                            <div class="product-img">
                              <img class="lazyload" src="<?php echo $right_p_image['url']; ?>" alt="<?php echo $right_p_image['alt']; ?>">
                            </div>
                            <div class="product-text">
                              <div class="product-title">
                                <h4><?php echo ($right_p_title)?></h4>
                              </div>
                              <div class="product-desc">
                                <?php echo ($right_p_desc)?>
                              </div>
                              <div class="product-link">
                              <?php 
                                if ($right_link_text) :
                                  $rightlinktext  = '<a href="' . $right_link_url . '">';
                                  $rightlinktext .= $right_link_text;
                                  $rightlinktext .= '</a>';
                                endif;
                                echo ($rightlinktext)
                              ?>
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
                ?>

                <div class="section section-3-columns <?php echo $selector; ?> <?php echo $section_index?>">
                  <div class="container">
                    <div class="row header">
                      <div class="col col-12">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;
                          ?> 
                        </div>
                      </div>
                    </div>

                    <div class="row contents lazyload">
                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="column-content">
                            <div class="column-img">
                              <img class="lazyload" src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>">
                            </div>
                            <div class="column-text">
                              <div class="column-title">
                              <?php if ($left_title) echo '<h4>'.$left_title.'</h4>'; ?>
                              </div>
                              <div class="column-desc">
                                <?php echo ($left_desc)?>
                              </div>
                              <div class="column-link lazyload">
                              <?php 
                                if ($left_link_text) :
                                  $leftlinktext  = '<a href="' . $left_link_url . '">';
                                  $leftlinktext .= $left_link_text;
                                  $leftlinktext .= '</a>';
                                endif;
                                echo ($leftlinktext)
                              ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="column-content">
                            <div class="column-img">
                              <img class="lazyload" src="<?php echo $center_image['url']; ?>" alt="<?php echo $center_image['alt']; ?>">
                            </div>
                            <div class="column-text">
                              <div class="column-title">
                                <?php if ($center_title) echo '<h4>'.$center_title.'</h4>'; ?>
                              </div>
                              <div class="column-desc">
                                <?php echo ($center_desc)?>
                              </div>
                              <div class="column-link">
                              <?php 
                                if ($center_link_text) :
                                  $centerlinktext  = '<a href="' . $center_link_url . '">';
                                  $centerlinktext .= $center_link_text;
                                  $centerlinktext .= '</a>';
                                endif;
                                echo ($centerlinktext)
                              ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-4 text-center">
                        <div class="col-inner">
                          <div class="column-content">
                            <div class="column-img">
                              <img class="lazyload" src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>">
                            </div>
                            <div class="column-text">
                              <div class="column-title">
                                <?php if ($right_title) echo '<h4>'.$right_title.'</h4>'; ?>
                              </div>
                              <div class="column-desc">
                                <?php echo ($right_desc)?>
                              </div>
                              <div class="column-link">
                              <?php 
                                if ($right_link_text) :
                                  $rightlinktext  = '<a href="' . $right_link_url . '">';
                                  $rightlinktext .= $right_link_text;
                                  $rightlinktext .= '</a>';
                                endif;
                                echo ($rightlinktext)
                              ?>
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
              Testimonials
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_testimonials' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                  $background_mark         = get_sub_field('background_mark');
                ?>

                <div class="section <?php echo ($section_index)?> section-testimonials">
                <style type="text/css">
                  @media only screen and (min-width: 40.0625rem) {
                    .section-testimonials .testimonial{
                      background-image: url('<?php echo $background_mark['url']; ?>');
                      background-repeat: no-repeat;
                      background-position: bottom;
                      background-size: 100%;
                    }
                  }
                </style>
                  <div class="container">
                    <div class="row row-parent">
                      <div class="col offset-sm-1 col-sm-10">
                        <div class="col-inner">
                          <div class="testimonials">
                            <?php if ( have_rows('testimonials') ) : 
                                while ( have_rows('testimonials') ) : the_row();
                                  $photo = get_sub_field('author_photo');
                                  $subject = get_sub_field('image_subject');?>
                                    <div class="testimonial">
                                      <div class="product-category"><?php echo get_sub_field('quote_title'); ?></div>
                                      <div class="row">
                                        <div class="col col-12 col-sm-4 text-center col-2-left-col">
                                          <div class="col-inner">
                                            <div class="photo-group">
                                              <div class="photo"><img class="lazyload" alt="Author Photo" src="<?php echo $photo['url']; ?>"/></div>
                                              <div class="subject"><img class="lazyload" alt="<?php echo $subject['alt']; ?>" src="<?php echo $subject['url']; ?>"/></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col col-12 col-sm-8 text-center col-2-right-col">
                                          <div class="col-inner">
                                            <div class="quote-container">
                                              <div class="quote">
                                                <p><?php echo get_sub_field('quote'); ?></p>
                                              </div>
                                              <div class="author-info">
                                                <div class="author-name">
                                                  <p><?php echo get_sub_field('name'); ?></p>
                                                </div>
                                                <div class="author-position">
                                                  <p><?php echo get_sub_field('position'); ?></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                        <?php endwhile;
                            endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              customer proof
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_customer_proof' ) : ?>


              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php $scroll_anchor = get_sub_field('scroll_anchor'); ?>

                <div class="section <?php echo ($section_index)?> section-proof proof-section">
                  <div class="container">

                    <div class="row proof-head">
                      <div class="col col-12">
                        <div class="col-inner">
                          <h2><?php the_sub_field('title'); ?></h2>
                          <?php if (get_sub_field('subtitle')) : ?>
                            <h3><?php the_sub_field('subtitle'); ?></h3>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="proof-slider">
                          <?php
                          // proof tab top
                          if (have_rows('tabs')) : ?>
                            <?php
                            $proof_tab_top = 0;
                            while ( have_rows('tabs') ) : the_row(); ?>
                              <div
                                title="<?php echo (the_sub_field('tab_name')); ?>"
                                data-tab-count="<?php echo $proof_tab_top; ?>"
                              >

                                <?php
                                $background_image = get_sub_field('background_image');
                                $logo             = get_sub_field('logo');
                                $text             = get_sub_field('text');
                                $credit_headline  = get_sub_field('credit_headline');
                                $credit_text      = get_sub_field('credit_text');
                                $add_link         = get_sub_field('add_link');
                                $link_text        = get_sub_field('link_text');
                                $link_url         = get_sub_field('link_url');
                                ?>

                                <?php
                                // logos
                                $images      = get_sub_field('logos');
                                $logos_title = get_sub_field('logos_title');

                                if( $images ) : ?>
                                  <div class="proof-logos-wrap">
                                    <?php if ($logos_title) : ?>
                                      <h2 class="text-center"><?php echo $logos_title; ?></h2>
                                    <?php endif; ?>

                                    <ul class="proof-logos proof-tab-<?php echo ($proof_tab_top); ?>">
                                      <?php 
                                      $img_index = 0;
                                      foreach( $images as $image ): 
                                      ?>
                                        <li class="<?php echo ($img_index > 5)? 'hide-for-sm' : '';?>">
                                          <img class="lazyload" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </li>
                                      <?php $img_index++; ?>
                                      <?php endforeach; ?>
                                    </ul>

                                    <?php if ($add_link) : ?>
                                    <a href="<?php echo $link_url; ?>" class="proof-link lazyload">
                                      <?php echo $link_text; ?>
                                    </a>
                                    <?php endif; ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            <?php $proof_tab_top++; endwhile; ?>
                          <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif;?>
      
            <?php
            /* --------------------------------------------
              We care
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_we_care' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline      = get_sub_field('subheadline');
                $description      = get_sub_field('description');
                $image_desktop            = get_sub_field('image_desktop');
                $image_mobile            = get_sub_field('image_mobile');
                ?>

                <div class="section col-2-section section-care <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row v-align-middle">
                      <div class="col col-12 col-sm-6 col-2-left-col">
                        <div class="col-inner">
                          <div class="col-2-img">
                            <img class="hide-for-sm" src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">
                            <img class="show-for-sm" src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-6 col-2-right-col">
                        <div class="col-inner">
                          <div class="col-wrap">
                            <div class="col-content">
                              <div class="col-text">
                                <?php
                                // headline
                                if ($headline) :
                                  echo '<h2>' . $headline . '</h2>';
                                endif;

                                // subheadline
                                if ($subheadline) :
                                  echo '<h3>' . $subheadline . '</h3>';
                                endif;

                                // text
                                if ($description) : ?>
                                  <div class="col-2-text">
                                    <?php echo $description; ?>
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
              All in one
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_all_in_one' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline      = get_sub_field('subheadline');
                $link_text        = get_sub_field('link_text');
                $link_url         = get_sub_field('link_url');
                ?>

                <div class="section col-2-section section-allinone <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class="row captions">
                      <?php if ( have_rows('captions') ) :
                          while ( have_rows('captions') ) : the_row();
                              $icon = get_sub_field('icon');
                              echo '      <div class="col col-12 col-sm-2 text-center caption"><div class="col-inner">';
                              echo '          <div class="icon"><img class="lazyload" alt="' . $icon['alt'] . '"  src="' . $icon['url'] . '" /></div>';
                              echo '          <div class="caption-text">';
                              echo '            <div class="title">' . get_sub_field('caption_title') . '</div>';
                              echo '            <div class="caption_desc"><p>' . get_sub_field('caption_desc') . '</p></div>';
                              echo '          </div>';
                              echo '      </div></div>';
                          endwhile;
                      endif; ?>
                    </div>

                    <?php 
                    if ($link_url) :
                      $linktext  = '<a href="' . $link_url . '">';
                      $linktext .= '<span class="contact-text">'.$link_text.'</span>';
                      $linktext .= '</a>';
                    else :
                      $linktext .= '<span class="contact-text">'.$link_text.'</span>';
                    endif; ?>

                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="row-link text-center">
                            <?php  
                              echo ($linktext)
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
              100K
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_100k' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline         = get_sub_field('headline');
                $subheadline      = get_sub_field('subheadline');
                $image_desktop            = get_sub_field('image_desktop');
                $image_mobile            = get_sub_field('image_mobile');
                ?>

                <div class="section col-2-section section-100k <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row v-align-middle row-top">
                      <div class="col col-12 col-sm-6 col-2-left-col text-left">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2 class="lazyload">' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;?>
                        </div>
                      </div>
                      <?php
                      // image
                      if ($image_desktop || $image_mobile) : ?>
                        <div class="col col-12 col-sm-6 col-2-right-col">
                          <div class="col-inner">
                            <div class="col-2-img">
                              <img class="hide-for-sm" src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">                            
                              <img class="show-for-sm" src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="row reviews">
                      <div class="col col-12 col-sm-10 offset-sm-2">
                        <div class="col-inner">
                          <div class="row">
                            <?php if ( have_rows('reviews') ) :
                                while ( have_rows('reviews') ) : the_row();
                                    $score = get_sub_field('score');
                                    $logo = get_sub_field('logo');
                                    echo '      <div class="col col-12 col-sm-3 text-center review"><div class="col-inner">';
                                    echo '			  <a href="'.get_sub_field('link_url').'" target="_blank" rel="noopener noreferrer">';
                                    echo '        <div class="review-content">';
                                    echo '          <div class="score"><img class="lazyload" alt="' . $score['alt'] . '"  src="' . $score['url'] . '" /></div>';
                                    echo '          <div class="logo"><img class="lazyload" alt="' . $logo['alt'] . '"  src="' . $logo['url'] . '" /></div>';
                                    echo '          <div class="description">' . get_sub_field('description') . '</div>';
                                    echo '        </div>';
                                    echo '			  </a>';
                                    echo '      </div></div>';
                                endwhile;
                            endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Banner
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_banner' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $main_text      = get_sub_field('main_text');
                $background      = get_sub_field('background');
                $link_text      = get_sub_field('link_text');
                $link_text      = get_sub_field('link_text');
                $link_url       = get_sub_field('link_url');
                ?>

                <div class="section col-2-section section-banner <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row text-left">
                    <?php
                      echo '<style type="text/css">';
                      if ($background) :
                        echo '.section-banner .row{';
                        echo    'background-image: url('. $background['url'] .');';
                        echo    'background-repeat: no-repeat;';
                        echo    'background-position: top left;';
                        echo '}';
                      endif;
                      echo '</style>';
                    ?>
                      <div class = "row-container">
                        <div class ="row-content">
                          <div class="col">
                            <div class="col-inner">
                              <div class="main-text">
                                <?php
                                // headline
                                if ($main_text) :
                                  echo  $main_text;
                                endif;?>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="col-inner">
                              <div class="banner-link">
                                <a href="<?php echo ($link_url); ?>"><?php echo ($link_text)?></a>
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
              About Us
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_about_us' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $background_desktop       = get_sub_field('background_desktop');
                $background_mobile        = get_sub_field('background_mobile');
                $logo                     = get_sub_field('logo');
                $description              = get_sub_field('description');
                $contact_text             = get_sub_field('contact_text');
                $contact_url             = get_sub_field('contact_url');
                $phone_number             = get_sub_field('phone_number');
                ?>

                <div class="section col-2-section section-about <?php echo ($section_index)?>">
                  <div class="container">
                    <div class="row">
                      <div class ="row-content">
                      <?php
                        echo '<style type="text/css">';
                        if ($background_mobile) :
                          echo  '.section-about .row-content {';
                          echo    'background-image: url('. $background_mobile['url'] .');';
                          echo  '}';
                        endif;

                        if ($background_desktop) :
                          echo '@media only screen and (min-width: 40.0625rem) {';
                          echo    '.section-about .row-content{';
                          echo      'background-image: url('. $background_desktop['url'] .');';
                          echo      'background-repeat: no-repeat;';
                          echo      'background-position: center;';
                          echo      'background-size: contain;';
                          echo    '}';
                          echo '}';
                        endif;
                        echo '</style>';
                      ?>
                        <div class="about-content">
                          <div class="col col-12">
                            <div class="col-inner">
                              <?php
                              // headline
                              if ($logo) :
                                echo '<img src="'.$logo['url'].'" alt="'.$logo['alt'].'"  width="170">';
                              endif;

                              if ($description) :
                                echo '<p>' . $description . '</p>';
                              endif;?>
                            </div>
                          </div>
                          <div class="col col-12">
                            <div class="col-inner">
                              <div class="contact-info">
                              <?php 
                                if ($contact_url) :
                                  $contacttext  = '<a href="' . $contact_url . '">';
                                  $contacttext .= '<span class="contact-text">'.$contact_text.'</span>';
                                  $contacttext .= '</a>';
                                else :
                                  $contacttext .= '<span class="contact-text">'.$contact_text.'</span>';
                                endif;
                                echo ($contacttext)
                              ?>
                              <?php if ($phone_number) : ?>
                                <a href="tel:+1<?php echo (str_replace('-', '', $phone_number)); ?>"><?php echo ($phone_number); ?></a>
                              <?php endif; ?>
                              </div>
                            </div>
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
    
</main><!-- #main -->

<?php get_footer(); ?>