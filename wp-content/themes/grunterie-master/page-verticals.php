<?php
/*
Template Name: Verticals
*/
get_header(); ?>

<section class="banner short verticals" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 medium-8 medium-centered columns">
      <p class="strong"><?php the_field('h1_headline'); ?></p>
      <h1><?php the_field('h2_headline'); ?></h1>
    </div>
  </div>
</section>

<div class="vertical testimonial">
  <div class="row">
    <div class="small-11 small-centered medium-7 medium-centered columns">
      <?php if( have_rows('testimonial') ): ?>
        <ul class="testimonial-slides">
          <?php while( have_rows('testimonial') ): the_row();
            $quote = get_sub_field('testimonial_quote');
            $name = get_sub_field('testimonial_company_name');
            $image = get_sub_field('testimonial_company_image'); ?>
       
              <li class="slide">
                <div class="quote"><?php echo $quote; ?></div>
                <p class="strong"><?php echo $name; ?></p>
              </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
  
<div class="vertical container" role="document">
  <div class="row">
    <div class="small-12 columns">
      <?php /* Start loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="vertical-product">  

          <div class="row">
            <div class="small-12 columns">
              <?php if( have_rows('verticals_product') ): ?>
                <ul class="product-sections">
                  <?php while( have_rows('verticals_product') ): the_row();
                    $image = get_sub_field('product_image');
                    $text = get_sub_field('product_text'); ?>

                    <li class="product-section">
                      <div class="small-12 medium-6 columns text">
                        <?php echo $text; ?>
                      </div>
                      <div class="small-12 medium-6 columns image">
                        <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
                      </div>
                    </li>

                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>

      <?php endwhile; // End the loop ?>
    </div>
  </div>
</div>

<section class="footer-cta callout section">
  <div class="row">
    <div class="small-12 medium-8 medium-centered columns">
      <h2><?php the_field('callout_headline'); ?></h2>
      <?php the_field('callout_body'); ?>
      <a href="https://app.joinhomebase.com/onboarding/sign-up" target="_blank" class="primary-cta">Get Started for Free</a>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>
