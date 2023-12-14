<?php
/*
Template Name: Pay any day LP
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">
<?php
  if ( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                       = get_sub_field('widget_id');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $add_button               = get_sub_field('add_button');
        $button_text              = get_sub_field('button_text');
        $button_url               = get_sub_field('button_url');
        $front_image              = get_sub_field('front_image');
        $back_image               = get_sub_field('back_image');
        $qr_code                  = get_field('qr_code');
        $emoji_img                = get_sub_field('emoji_img');
        $emoji_text               = get_sub_field('emoji_text');
        ?>

          <div class="section section-hero " <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
              <h1 class="headline">
                <?php echo $headline; ?>
              </h1>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
              <div class="subheadline">
                <?php echo $subheadline; ?>
              </div> 
              <?php endif; ?>
              <?php if ($add_button) : ?>
              <div class="button-wrapper">
                <a class="button qr-code" href="<?php echo $qr_code['url'];?>"><?php echo $button_text; ?></a>
              </div>
              <?php endif; ?>
              <div class="img-wrapper">
                <?php if ($back_image) : ?>
                <div class="img-wrapper-main">
                  <img src="<?php echo $back_image['url']; ?>" alt="<?php echo $back_image['alt']; ?>" class="parallax-content1">
                </div>
                <?php endif; ?>
                <?php if ($front_image) : ?>
                <div class="img-wrapper-sub">
                  <img src="<?php echo $front_image['url']; ?>" alt="<?php echo $front_image['alt']; ?>" class="parallax-content2">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="hb-emoji hb-emoji-left">
              <?php if(isset($emoji_img['url'])): ?>
                
                <img src="<?= $emoji_img['url'] ?>">
                <div class="hb-emoji-text"><?= $emoji_text ?></div>
              
              <?php endif?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Benefits
      -------------------------------------------- */
      elseif ( get_row_layout() == 'benefits' ) :
        if (!get_sub_field('hide_widget')) : 
          $id              = get_sub_field('widget_id');
          $add_button      = get_sub_field('add_button');
          $button_text     = get_sub_field('button_text');
          $button_url      = get_sub_field('button_url');
          $qr_code         = get_field('qr_code');?>
          
          <div class="section section-benefits" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ( have_rows('image_boxes') ) : ?>
                <div class="image-boxes">
                  <?php while ( have_rows('image_boxes') ) : the_row();
                    $image            = get_sub_field('image');
                    $headline         = get_sub_field('headline');
                    $subheadline      = get_sub_field('subheadline');?>
                    <div class="image-box">
                      <?php if ($image) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($headline) : ?>
                        <p class="headline"><?php echo $headline; ?></p>
                      <?php endif; ?>
                      <?php if ($subheadline) : ?>
                        <p class="subheadline"><?php echo $subheadline; ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
              <?php if ($add_button) : ?>
                <div class="button-wrapper">
                  <a class="button qr-code" href="<?php echo $qr_code['url'];?>"><?php echo $button_text; ?></a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Testimonial
      -------------------------------------------- */
      elseif ( get_row_layout() == 'testimonial' ) :
        if (!get_sub_field('hide_widget')) : 
          $id               = get_sub_field('widget_id');
          $quote            = get_sub_field('quote');
          $author           = get_sub_field('author');
          $bg_image         = get_sub_field('bg_image');
          $emoji_img        = get_sub_field('emoji_img');
          $emoji_text       = get_sub_field('emoji_text');
          ?>
          
          <div class="section section-testimonial" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="hb-emoji hb-emoji-right">
              <?php if(isset($emoji_img['url'])): ?>
                
                <img src="<?= $emoji_img['url'] ?>">
                <div class="hb-emoji-text"><?= $emoji_text ?></div>
              
              <?php endif?>
            </div>
            <div class="container" style="background-image: url(<?php echo $bg_image['url']; ?>);">
              <div class="quote-wrapper">
                <?php if ($quote) : ?>
                <div class="quote">
                  <?php echo $quote; ?>
                </div>
                <?php endif; ?>
                <?php if ($author) : ?>
                <div class="author">
                  <?php echo $author; ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        For employers
      -------------------------------------------- */
      elseif ( get_row_layout() == 'for_employers' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');
          $button_text        = get_sub_field('button_text');
          $button_url         = get_sub_field('button_url');
          $emoji_img          = get_sub_field("emoji_img");
          $emoji_text         = get_sub_field("emoji_text");
        ?>

          <div class="section section-for-employers" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="hb-emoji hb-emoji-left">
              <?php if(isset($emoji_img['url'])): ?>
                
                <img src="<?= $emoji_img['url'] ?>">
                <div class="hb-emoji-text"><?= $emoji_text ?></div>
              
              <?php endif?>
            </div>

            <div class="container">
              <?php if ($headline) : ?>
              <h2 class="headline">
                <?php echo $headline; ?>
              </h2>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
              <div class="subheadline">
                <?php echo $subheadline; ?>
              </div>
              <?php endif; ?>
              <?php if ($button_url) : ?>
              <div class="button-wrapper">
                <a class="button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
              </div>
              <?php endif; ?>
            </div>
          </div>

        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Employers - Internal survey
      -------------------------------------------- */
      elseif ( get_row_layout() == 'employers_internal_survey' ) :
        if (!get_sub_field('hide_widget')) : 
          $id              = get_sub_field('widget_id');?>
          
          <div class="section section-employers-internal-survey" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ( have_rows('columns') ) : ?>
                <div class="eis-columns">
                  <?php while ( have_rows('columns') ) : the_row();
                    $percent        = get_sub_field('percent');
                    $text           = get_sub_field('text');
                    $bg_image       = get_sub_field('bg_image');
                    $caption        = get_sub_field('caption');?>
                    <div class="eis-column">
                      <div class="percent">
                        <?php if ($percent) : ?>
                          <p><?php echo $percent; ?></p>
                        <?php endif; ?>
                        <?php if ($bg_image) : ?>
                          <img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>">
                        <?php endif; ?>
                      </div>
                      <?php if ($text) : ?>
                        <p class="text"><?php echo $text; ?></p>
                      <?php endif; ?>
                      <?php if ($caption) : ?>
                        <p class="caption"><?php echo $caption; ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
              
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        FAQ
      -------------------------------------------- */
      elseif ( get_row_layout() == 'faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $button_text            = get_sub_field('button_text');
        $button_url             = get_sub_field('button_url');
        ?>

          <div class="section section-faq" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ( have_rows('items') ) : ?>
                <div class="faq-items">
                  <?php while ( have_rows('items') ) : the_row();
                    $question    = get_sub_field('question');
                    $answer      = get_sub_field('answer');?>
                    <div class="faq-item">
                      <?php if ($question) : ?>
                        <div class="question">
                          <p><?php echo $question; ?></p>
                          <img src="/wp-content/themes/homebase/images/pay-any-day-lp-faq-cross.svg">
                        </div>
                      <?php endif; ?>
                      <?php if ($answer) : ?>
                        <p class="answer"><?php echo $answer; ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
              <?php if ($button_url) : ?>
                <div class="button-wrapper">
                  <a class="button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
                </div>
              <?php endif; ?>
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

        if ( have_rows('items') ) {
          while ( have_rows('items') ) : the_row();
            $questions = array(
              '@type'          => 'Question',
              'name'           => get_sub_field('question'),
              'acceptedAnswer' => array(
              '@type' => "Answer",
              'text' => get_sub_field('answer')
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

      <?php
      /* --------------------------------------------
        Support footer
      -------------------------------------------- */
      elseif ( get_row_layout() == 'support_footer' ) :
        if (!get_sub_field('hide_widget')) : 
          $id              = get_sub_field('widget_id');
          $text            = get_sub_field('text');?>
          
          <div class="section section-support-footer" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">              
              <?php if ($text) : ?>
                <div class="text">
                  <?php echo $text; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Download app links
      -------------------------------------------- */
      elseif ( get_row_layout() == 'app_links' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $app_store_badge        = get_sub_field('app_store_badge');
        $google_play_badge      = get_sub_field('google_play_badge');
        $app_store_link         = get_sub_field('app_store_link');
        $google_play_link       = get_sub_field('google_play_link');
        ?>

          <div class="section section-app-links" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ($headline) : ?>
                <h1 class="headline">
                  <?php echo $headline; ?>
                </h1>
              <?php endif; ?>
              <?php if ($app_store_link) : ?>
                <a class="badge-link app-store-link" href="<?php echo $app_store_link; ?>">
                  <img src="<?php echo $app_store_badge['url']; ?>" alt="<?php echo $app_store_badge['alt']; ?>">
                </a>
              <?php endif; ?>
              <?php if ($google_play_link) : ?>
                <a class="badge-link google-play-link" href="<?php echo $google_play_link; ?>">
                  <img src="<?php echo $google_play_badge['url']; ?>" alt="<?php echo $google_play_badge['alt']; ?>">
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php
  $emoji_img  = get_field("emoji_img");
  $emoji_text = get_field("emoji_text");
?>

<div class="hb-emoji hb-emoji-right">
  <?php if(isset($emoji_img['url'])): ?>
    
    <img src="<?= $emoji_img['url'] ?>">
    <div class="hb-emoji-text"><?= $emoji_text ?></div>
  
  <?php endif?>
</div>

<?php get_footer(); ?>