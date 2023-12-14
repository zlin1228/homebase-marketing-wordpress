<?php
/*
Template Name: Home - FoodFanatics
*/
get_header(); ?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://joinhomebase.com",
  "logo": "https://joinhomebase.com/wp-content/uploads/2016/08/hblogo.jpg",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+1-415-951-3830",
    "contactType": "customer service"
  }]
}
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Homebase",
  "url": "https://joinhomebase.com"
}
</script>

<section class="banner tall" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="test row overlay-content">
    <div class="small-12 medium-10 medium-centered columns">
      <h1><?php the_field('h1_headline'); ?></h1>
      <p><?php the_field('h2_headline'); ?></p>
 
<br><br>
      <a href="https://app.joinhomebase.com/onboarding/sign-up?referral_code=AE96-53F0" id="start-now" target="_blank" class="primary-cta"><?php the_field('button_text'); ?></a>  </div>
  </div>
</section>

<?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="customers section">  
      <div class="row">
        <div class="small-12 columns">
          <p class="strong">
            <?php the_field('customers_headline'); ?>
          </p>

          <?php while( have_rows('customer_logos') ): the_row();
            $slide = get_sub_field('logos'); ?>
       
              <div class="slide">
                <img src="<?php echo $slide; ?>" alt="<?php echo $alt; ?>" />
              </div>

          <?php endwhile; ?>
        </div>
      </div>

      <div class="testimonial">
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
                      <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
                    </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>


    <div id="features" class="product section">  
      <div class="row first">
        <div class="small-11 small-centered medium-8 medium-centered columns">
          <h2><?php the_field('product_headline'); ?></h2>
          <img src="<?php the_field('product_hero_image'); ?>">
        </div>
      </div>

      <div class="row">
        <div class="small-12 columns">
          <?php if( have_rows('product_section') ): ?>
            <ul class="product-sections">
              <?php while( have_rows('product_section') ): the_row();
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

      <div class="row">
        <div class="small-11 small-centered columns">
          <a href="<?php echo get_site_url(); ?>/features/employee-scheduling" class="strong-link">View the full Feature List <span class="arrow"></span></a>
        </div>
      </div>
    </div>

    <div class="free-offer section">
      <div class="small-10 small-centered columns">
        <h2>Everything you need to manage your team</h2>
        <ul class="small-block-grid-2 medium-block-grid-4">
          <li>
            <span class="timeclock"></span>
            <h3>Free Time Clock</h3>
          </li>
          <li>
            <span class="timesheets"></span>
            <h3>Free Timesheets</h3>
          </li>
          <li>
            <span class="scheduling"></span>
            <h3>Free Scheduling</h3>
          </li>
          <li>
            <span class="messaging"></span>
            <h3>Free Messaging</h3>
          </li>
        </ul>

        <a href="https://app.joinhomebase.com/onboarding/sign-up" id="sign-up-footer" target="_blank" class="primary-cta" style="background: #39ACBF; color: white;">Get Started Now</a>
        <a href="<?php echo get_site_url(); ?>/features/employee-scheduling" class="strong-link" style="display: block; font-size: 14px; margin-top: 35px;">View the full Feature List <span class="arrow"></span></a>
      </div>
    </div>

    <div class="testimonial case-studies section">  
      <div class="row">
        <div class="case-quote">
          <div class="quote">
            <span class="styled-apostrophe">“</span>I can manage my team from anywhere, and spend less time on admin. I can't imagine running my restaurant without Homebase."
          </div>
          <p class="strong">HUNTER BROOKS @ EVERGREEN’S SALAD</p>
        </div>
        <div class="case-photo">
        </div>
      </div>
    </div>

    




    
  <?php endwhile; // End the loop ?>
    
<?php get_footer(); ?>
