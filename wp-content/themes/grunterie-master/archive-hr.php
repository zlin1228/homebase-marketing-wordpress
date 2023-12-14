<?php get_header(); ?>

<section class="support-header hr-header banner short single" style="background-image: url(<?php the_field('hr_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <h1>Small Business Resources</h1>
      <p>Free Guides for Hiring & Employee Onboarding.</p>

      <div class="hrg hide-for-small">
        <p>In partnership with:</p>
        <a href="http://restauranthrgroup.com/" target="_blank"><span class="logo"></span></a>
      </div>
    </div>
  </div>
</section>

  <!-- Start the main container -->
<div class="container hr-container" role="document">
  <div class="row">

<!-- Row for main content area -->
  <div class="small-11 small-centered large-11 large-centered columns" role="main">

    <div class="row">
      <ul class="product-sections medium-block-grid-4 large-block-grid-4">
        <li class="hr-block">
          <div class="wrapper">
            <div class="icon job-descriptions"></div>
            <h2>Job Descriptions</h2>
            <p>Pick a template and customize it to your needs.</p>
            <a href="<?php get_site_url(); ?>/homebase/hrtax/job-descriptions/" class="strong">View all templates</a>
          </div>
        </li>

        <li class="hr-block">
          <div class="wrapper">
            <div class="icon new-hire"></div>
            <h2>New Hire Forms</h2>
            <p>Generic new hire forms that you can edit and repurpose.</p>
            <a href="<?php get_site_url(); ?>/homebase/hrtax/new-hire-forms/" class="strong">View all forms</a>
          </div>
        </li>

        <li class="hr-block">
          <div class="wrapper">
            <div class="icon hiring-guides"></div>
            <h2>Hiring Guides</h2>
            <p>Interviewing, hiring and onboarding new employees.</p>
            <a href="<?php get_site_url(); ?>/homebase/hrtax/hiring-guides/" class="strong">View all guides</a>
          </div>
        </li>

        <li class="hr-block">
          <div class="wrapper">
            <div class="icon job-descriptions"></div>
            <h2>Performance Reviews</h2>
            <p>Effectively reviewing the performance of your employees.</p>
            <a href="<?php get_site_url(); ?>/homebase/hrtax/performance-reviews/" class="strong">View all guides</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
    
<?php get_footer(); ?>