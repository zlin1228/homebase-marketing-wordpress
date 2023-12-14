<?php
/*
Template Name: Customers table - MT65 - Flexible
*/
get_header(); ?>

<div class="container new-style" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $seotitle               = get_sub_field('seo_title');
      $open_new               = get_sub_field('open_new');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $button_text            = get_sub_field('button_text');
      $form_link              = get_sub_field('form_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-hero">
          <div class="row row-flex">
            <div class="row-container">
              <div class="columns medium-5 medium-offset-1 col-left">
                <div class="column-inner">
                  <?php

                  if ($seotitle) :
                    echo '<h1 class="seo-title">' . $seotitle . '</h1>';
                  endif;

                  // headline
                  if ($headline) :
                    echo '<h2 class="fw-black">' . $headline . '</h2>';
                  endif;

                  if ($subheadline) :
                    echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                  endif;?>

                  <form action="<?php echo $form_link; ?>"
                    id="hero-signup-form"
                    method="GET"
                    class="email-signup-form">
                    
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
                </div>
              </div>
              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <div class="img-wrapper">
                  <?php if ($image ) : ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
      features sub nav
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_subnav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
        $nav_menu_name        = get_sub_field('menu_name');
      ?>
        <div class="section section-navbar customers-table-navbar">
          <div class="row">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'customers-subnav', 'container_class' => 'customers-subnav-container') ); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Intro a categories
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_categories' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-intro-categories">
          <div class="row">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <?php
                  // headline
                  if ($headline) 
                    echo '<h2 class="fw-black">' . $headline . '</h2>';
                  if ($subheadline) 
                    echo '<h3 class="subheading fw-black">' . $subheadline . '</h3>';
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                <?php
                  if ( have_rows('categories') ) : echo '<div class="category-grid">';
                    while ( have_rows('categories') ) : the_row();
                ?>
                    <div class="category-item">
                      <?php the_sub_field('name'); ?>
                    </div>
                <?php
                    endwhile; echo '</div>';
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
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_columns' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $reverse               = get_sub_field('reverse');
      $headline               = get_sub_field('headline');
      $subheadline               = get_sub_field('subheadline');
      $content               = get_sub_field('content');
      $add_button               = get_sub_field('add_button');
      $button_text               = get_sub_field('button_text');
      $button_link               = get_sub_field('button_link');
      $image               = get_sub_field('image');
      ?>

        <div class="section section-2-cols">
          <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?>">
            <div class="row-container">
              <div class="column medium-6 col-left">
                <div class="column-inner">
                  <div class="img-wrapper">
                  <?php if ($image) : ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  <? endif;?>
                  </div>
                </div>
              </div>
              <div class="column medium-6 col-right">
                <div class="column-inner">
                  <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h3 class="fw-black"><?php echo $headline; ?></h3>
                  <? endif;?>
                  <?php if ($content) : ?>
                    <?php echo $content; ?>
                  <? endif;?>
                  <?php if ($add_button) : ?>
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
      Tweet widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_tweet_widget' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $color_schema     = get_sub_field('color_schema');
      ?>

        <div class="section section-tweet <?php echo ($color_schema == 'purple')? 'purple' : 'teal'; ?>">
          <div class="row row-flex row-small">
            <div class="row-container">
              <div class="column medium-7 col-left">
                <div class="column-inner">
                  <div class="tweet-grid">
                    <?php if ( have_rows('tweets') ) :
                      while ( have_rows('tweets') ) : the_row();
                          $customer_name    = get_sub_field('customer_name');
                          $score            = get_sub_field('score');
                          $tweet_platform   = get_sub_field('tweet_platform');
                          $comment          = get_sub_field('comment');
                    ?>
                      <div class="tweet-item">
                        <div class="tweet-container">
                          <?php if($tweet_platform) : ?>
                          <div class="platform"><img class="lazyload" alt="<?php echo $tweet_platform['alt']; ?>"  data-src="<?php echo $tweet_platform['url']; ?>" /></div>
                          <?php endif; ?>
                          <div class="name fw-bold"><?php echo $customer_name; ?></div>
                          <?php if($score) : ?>
                          <div class="score"><img class="lazyload" alt="<?php echo $score['alt']; ?>"  data-src="<?php echo $score['url']; ?>" /></div>
                          <?php endif; ?>
                          <div class="comment"><?php echo $comment; ?></div>
                        </div>
                      </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>
                  </div>
                </div>
              </div>
              <div class="column medium-5 col-right">
                <div class="column-inner">
                  <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <? endif;?>
                  <?php if ($subheadline) : ?>
                    <h3 class="subheading"><?php echo $subheadline; ?></h3>
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
      Customer quote
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_customer_quote' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $type                   = get_sub_field('image_type');
      $title                  = get_sub_field('title');
      $photo                  = get_sub_field('photo');
      $quote                  = get_sub_field('quote');
      $label                  = get_sub_field('label');
      $customer_name          = get_sub_field('customer_name');
      $customer_position      = get_sub_field('customer_position');
      $business               = get_sub_field('business');
      $address                = get_sub_field('address');
      $link                   = get_sub_field('link');
      ?>

        <div class="section section-customer-quote <?php echo $type; ?>">
          <div class="row row-small">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <?php if ($title) : ?>
                    <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                  <?php endif; ?>
                  <?php if ($quote) : ?>
                    <div class="quote-container">
                      <?php if ($type != "noimage" &&  $photo) : ?>
                        <div class="photo-wrapper">
                          <img data-src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="lazyload"/>
                        </div>
                      <?php endif; ?>
                      <?php if ( $type == "photo" && $label) : ?>
                        <div class="quote-label hide-for-small">
                          <img class="lazyload"  data-src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
                        </div>
                      <?php endif; ?>
                      <div class="quote-wrapper">
                        <p class="quote-message"><?php echo $quote; ?></p>
                        <p class="name fw-bold"><?php echo $customer_name; ?></p>
                        <p class="position">
                          <span><?php echo $customer_position;?></span>
                          <?php if($link) : ?>
                            <a href = "<?php echo $link; ?>" target="_blank" data-wpel-link="external"> 
                          <?php endif; ?>
                          <span><?php echo $business; ?></span>
                          <?php if($link) : ?>
                            </a> 
                          <?php endif; ?>

                          <?php if($address) : ?>
                          <span><?php echo $address;?></span>
                          <?php endif; ?>
                        </p>
                      </div>
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
      Customer logos
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_customers_logo' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline               = get_sub_field('headline');
      $logos                  = get_sub_field('logos');
      ?>

        <div class="section section-customers-logo">
          <div class="row row-small">
            <div class="row-container">
              <div class="column small-12">
                <div class="column-inner">
                  <?php
                  // headline
                  if ($headline) 
                    echo '<h3 class="fw-black">' . $headline . '</h3>';
                  ?>

                  <?php if ($logos) : ?>
                    <ul class="customer-logos">
                      <?php foreach ($logos as $logo) : ?>
                        <li class="customer-logo">
                          <img data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="lazyload"/>
                        </li>
                      <?php endforeach; ?>
                    </ul>
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

      $m_content                = get_sub_field('m_content');
      $m_button_text            = get_sub_field('m_button_text');
      $m_button_link            = get_sub_field('m_button_link');
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
                  <?php
                  // headline
                  if ($content || $m_content) 
                    echo '<h3 class="fw-normal hide-for-small">' . $content . '</h3>';
                    echo '<h3 class="fw-bold show-for-small">' . $m_content . '</h3>';

                  if ($button_text || $m_button_text) 
                    echo '<div class="hide-for-small"><a class="button secondary reverse" href="'.$button_link.'">' . $button_text . '</a></div>';
                    echo '<div class="show-for-small"><a class="button secondary revers" href="'.$m_button_link.'">' . $m_button_text . '</a></div>';
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
      Business pictured widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_bs_pictured' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $title     = get_sub_field('title');
      ?>

        <div class="section section-bp-caption">
          <div class="row row-small">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
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
                          <a href="<?php echo $website; ?>" target="_blank" rel="noreferrer"><?php echo $business_name.', '; ?></a>
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

<script type="text/javascript">
  window.addEventListener( 'load', function() {
    var lastScrollTop = 0;
    jQuery(window).scroll(function(event){
      var st = $(this).scrollTop();
      if (st > lastScrollTop && st >= 150){
          // downscroll code
          jQuery(".section-navbar").addClass("hidden");
      } else {
          // upscroll code
          jQuery(".section-navbar").removeClass("hidden");
      }
      lastScrollTop = st;
    });

    if(jQuery(window).width() < 641){
      jQuery('.tweet-grid').slick({
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
      });
    }
  });
</script>

<?php get_footer(); ?>