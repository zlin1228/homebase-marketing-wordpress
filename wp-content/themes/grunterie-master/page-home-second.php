<?php
/*
Template Name: Home Second
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

<section class="banner alternate-homepage" style="background-image: url(<?php the_field('alternate_homepage_banner-img'); ?>); background-position: 50% 40% !important;"> 
  <div id="overlay"></div>
  <div class="test row overlay-content">
    <div class="small-12 medium-centered columns">
      <h1 class="alternate-homepage__h1 text--bold"><?php the_field('alternate_homepage_h1'); ?></h1>
      <div class="row">
        <div class="small-10 small-centered columns">
          <h2 class="alternate-homepage__h2"><?php the_field('alternate_homepage_h2'); ?></h2>
          <h3 class="alternate-homepage__h3 text--medium mbm"><?php the_field('alternate_homepage_h3'); ?></h3>
        </div>
      </div>
      
        <!--Custom form Start -->
          <div class="small-12 medium-6 small-centered columns">
           <form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']" id="home-signup-form" method="GET" class="home-form">
              <!-- <fieldset>
                <input class="homeform" type="text" name="fullname" placeholder="Full Name"/>
              </fieldset> -->

              <fieldset>
                <input class="homeform" type="email" name="email" placeholder="Email"/>
              </fieldset>

              <input type="submit" id="create-account" name="Submit" class="primary-cta buttonsbn" value="<?php the_field('button_text'); ?>" />
            </form>
          </div>
        <!--Custom form ends -->
      <!-- <a href="https://app.joinhomebase.com/onboarding/sign-up" id="start-now" target="_blank" class="primary-cta"><?php the_field('button_text'); ?></a> -->   </div>
  </div>
</section>

<!-- <section class="banner tall" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="test row overlay-content">
    <div class="small-12 medium-10 medium-centered columns">
      <h1 class="text--medium"><?php the_field('h1_headline'); ?></h1>
      <p class="text--medium"><?php the_field('h2_headline'); ?></p>
          <div class="small-12 medium-6 medium-centered columns">
           <form action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']" id="home-signup-form" method="GET" class="home-form">
              <!-- <fieldset>
                <input class="homeform" type="text" name="fullname" placeholder="Full Name"/>
              </fieldset> -->

              <!-- <fieldset>
                <input class="homeform" type="email" name="email" placeholder="Email"/>
              </fieldset>

              <input type="submit" id="create-account" name="Submit" class="primary-cta buttonsbn" value="<?php the_field('button_text'); ?>" />
            </form>
          </div>
      <!-- <a href="https://app.joinhomebase.com/onboarding/sign-up" id="start-now" target="_blank" class="primary-cta"><?php the_field('button_text'); ?></a> -->   <!-- </div>
  </div>
</section> -->

<?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="testiomial-slider ptl pbl">
      <div class="row">
        <div class="small-11 small-centered medium-12 medium-centered columns">
          <h3 class="text--center text--purple text--medium">Loved by owners, managers, and teams everywhere &#9829;</h3>
          <?php if( have_rows('testimonial') ): ?>
            <div class="quote-slider flexslider">
              <ul class="testimonial-slides slides ptxs">
                <?php while( have_rows('testimonial') ): the_row();
                  $quote = get_sub_field('testimonial_quote');
                  $name = get_sub_field('testimonial_company_name');
                  $image = get_sub_field('testimonial_company_image');
                  $position = get_sub_field('testimonial_company_position'); ?>
             
                    <li class="testimonial-slide">
                      <div class="quote-container" style="height:180px;">
                        <div class="quote" ><?php echo $quote; ?></div>
                        <div class="quote-info">
                          <img class="testimonial__img"src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
                          <p class="strong"><?php echo $name; ?></p>
                          <p class="position"><?php echo $position; ?></p>
                        </div>
                      </div>
                    </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

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
        <div class="customers-goals">
  
          <p><?php the_field('customers_subtitle'); ?></p>

          <div class="customers_goal small-12 medium-4 column">
            <img width="38" height="41" src="<?php echo get_template_directory_uri(); ?>/img/clock-icon.png"><?php the_field('customer_stat_1'); ?>
          </div>
          <div class="customers_goal small-12 medium-4 column">
            <img width="34" height="41" src="<?php echo get_template_directory_uri(); ?>/img/track-icon.png"><?php the_field('customer_stat_2'); ?>
          </div>
          <div class="customers_goal small-12 medium-4 column">
            <img width="43" height="43" src="<?php echo get_template_directory_uri(); ?>/img/save-icon.png"><?php the_field('customer_stat_3'); ?>
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

    <div class="verticals section">  
      <div class="row">
        <div class="small-12 columns">
          <p class="strong"><?php the_field('vertical_subtitle'); ?></p>
          <h2><?php the_field('vertical_headline'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="small-11 small-centered medium-12 medium-centered columns">
          <ul class="small-block-grid-2 medium-block-grid-4">
            <li><a href="<?php echo get_site_url(); ?>/cafe-scheduling"><img src="<?php echo get_template_directory_uri(); ?>/img/cafe.svg"><h3>Cafes</h3></a></li>
            <li><a href="<?php echo get_site_url(); ?>/quick-service-restaurants"><img src="<?php echo get_template_directory_uri(); ?>/img/qsr.svg"><h3>Quick Service Restaurants</h3></a></li>
            <li><a href="<?php echo get_site_url(); ?>/full-service-restaurants"><img src="<?php echo get_template_directory_uri(); ?>/img/fsr.svg"><h3>Full-Service Restaurants</h3></a></li>
            <li><a href="<?php echo get_site_url(); ?>/retail"><img src="<?php echo get_template_directory_uri(); ?>/img/retail.svg"><h3>Retail</h3></a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- <div id="pricing" class="pricing section">  
      <div class="row">
        <div class="small-12 columns">
          <p class="strong">Simple pricing, no surprises</p>
          <h2>Try any plan free for 30 days.</h2>
        </div>

        <div class="row">
          <div class="small-10 small-centered medium-11 medium-centered columns">
            <ul class="small-block-grid-1 medium-block-grid-4">
              <li class="tier basic">
                <div class="tier-header">
                  <p class="strong">Basic</p>
                  <p class="italic">Save time & reduce risk</p>
                  <p class="strong price">FREE <span>/MO</span></p>
                </div>
                <div class="tier-body">
                  <ul>
                    <li><b>Free Forever</b></li>
                    <li><b>Unlimited Employees</b></li>
                    <li>Advanced Time Clock</li>
                    <li>Cloud-Based Timesheets</li>
                    <li>Easy Scheduling</li>
                  </ul>
                </div>
                <div class="tier-cta">
                  <a href="https://app.joinhomebase.com/onboarding/partners" id="lead-basic" target="_blank" class="strong">Sign Up Now</a>
                </div>
              </li>

              <li class="tier essentials">
                <div class="popular">
                  <p class="strong">
                    Most Popular
                  </p>
                </div>
                <div class="tier-header">
                  <p class="strong">Essentials</p>
                  <p class="italic">Increase team productivity</p>
                  <p class="strong price">$9.95 <span>/MO</span></p>
                </div>
                <div class="tier-body">
                  <ul>
                    <li><b>Get all Basic Features</b></li>
                    <li>Alerts & Notifications</li>
                    <li>Labor Law Compliance</li>
                    <li>Employee Messaging</li>
                  </ul>
                </div>
                <div class="tier-cta">
                  <a href="https://app.joinhomebase.com/onboarding/partners" id="lead-essentials" target="_blank" class="strong">Sign Up Now</a>
                </div>
              </li>

              <li class="tier plus">
                <div class="tier-header">
                  <p class="strong">Plus</p>
                  <p class="italic">Control your labor costs</p>
                  <p class="strong price">$29.95 <span>/MO</span></p>
                </div>
                <div class="tier-body">
                  <ul>
                    <li><b>Get all Essential Features</b></li>
                    <li>Advanced Reporting</li>
                    <li>Advanced Labor Controls</li>
                  </ul>
                </div>
                <div class="tier-cta">
                  <a href="https://app.joinhomebase.com/onboarding/partners" id="lead-plus" target="_blank" class="strong">Sign Up Now</a>
                </div>
              </li>

              <li class="tier enterprise">
                <div class="tier-header">
                  <p class="strong">Enterprise</p>
                  <p class="italic">Grow your business</p>
                  <p class="strong price">$79.95 <span>/MO</span></p>
                </div>
                <div class="tier-body">
                  <ul>
                    <li><b>Get all Plus Features</b></li>
                    <li>Multi-Location Support</li>
                    <li>Employee Performance</li>
                    <li>Manage Task Lists</li>
                  </ul>
                </div>
                <div class="tier-cta">
                  <a href="https://app.joinhomebase.com/onboarding/partners" id="lead-enterprise" target="_blank" class="strong">Sign Up Now</a>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="small-11 small-centered columns">
            <a href="<?php echo get_site_url(); ?>/homebase-pricing" class="strong-link">View Our Detailed Pricing Plans <span class="arrow"></span></a>
          </div>
        </div>

      </div>
    </div> -->

    <div class="covered-by row">
      <div class="small-12 small-centered columns">
        <p class="strong">
          Covered By
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/covered-by.png">
      </div>
    </div>
    
  <?php endwhile; // End the loop ?>
    
<?php get_footer(); ?>
