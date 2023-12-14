<?php
/*
Template Name: Landing Page 2
*/
get_header(); ?>
  
<div class="partners__wrapper container" role="document">
  <div class="row">
    <div class="small-11 small-centered columns partners__content">
      <div class="row">
        <div class="small-11 small-centered medium-8 medium-uncentered columns">
          <div class="row partners">
            <div class="small-11 small-centered columns">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-beta-purple.png" width="150"/>
              <span class="plus">+</span>
              <img src="<?php the_field('partner_logo'); ?>" height="60"/>
            </div>
          </div>

          <h2 class="partners__desc"><?php the_field('partner_desc'); ?></h2>

          <img class="partner__hero" src="<?php the_field('partner_hero_image'); ?>" />

          <?php /* Start loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="partner__body entry-content">
                <?php the_content(); ?>
              </div>
          <?php endwhile; // End the loop ?>
        </div>

        <div class="small-12 medium-4 medium-uncentered columns">

          <form class="partners__form" method="get" action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']&referral_code=$_GET['referral_code']">
            <div class="form-head">
              <h4><?php the_field('referral_form_heading'); ?></h4>
            
            </div>
            <div class="form-body">
              <div class="form-group large-12">
                <label>Full Name
                  <input class="homeform" type="text" name="fullname"/>
                </label>
              </div>
              <div class="form-group large-12">
                <label>Email
                  <input class="homeform" type="email" name="email"/>
                </label>
              </div>

		 <div class="form-group large-12">
             <label>
                  <input class="homeform" type="hidden" name="referral_code" value="<?php the_field('referral_code'); ?>"/>
            </label>
              </div>

              <div class="form-group-button large-12 partners__create-account">
                <input type="submit" value="Create Account">
              </div>

            </div>
          </form>


  
<!--
        <form class="partners__form" method="get" action="https://app.joinhomebase.com/onboarding/sign-up?fullname=$_GET['fullname']&email=$_GET['email']&referral_code=3B00-CE25">
            <div class="form-head">
              <h4>Sign Up for Free</h4>
            </div>
            <div class="form-body">
              <div class="form-group large-12">
                <label>Full Name
                  <input class="homeform" type="text" name="fullname"/>
                </label>
              </div>
              <div class="form-group large-12">
                <label>Email
                  <input class="homeform" type="email" name="email"/>
                </label>
              </div>
              <div class="form-group-button large-12 partners__create-account">
                <input type="submit" value="Create Account">
              </div>
            </div>
          </form>

-->

          <div class="landing-testimonial-block">
            <p class="partners__quote">"With 20+ employees on one schedule, Homebase is the best time-saving, headache-reducing business partner I could ask for!"</p>
            <p class="partners__owner">BETH P, NORM’S NEWS (KALISPELL, MT)</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/norms-news.jpg">
          </div>
          <div class="landing-testimonial-block">
            <p class="partners__quote">"I can manage my team from anywhere and spend less time on admin. I can’t imagine running my business without Homebase."</p>
            <p class="partners__owner">HUNTER BROOKS, EVERGREEN’S SALAD (SEATTLE, WA)</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/hunter.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php get_footer(); ?>
