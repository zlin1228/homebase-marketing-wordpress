<?php get_header(); ?>
  
<section class="banner short single" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 medium-8 medium-centered columns">
      <h1><?php the_title(); ?></h1>
      <p><?php the_field('location'); ?></p>
    </div>
  </div>
</section>
  
  <div class="container" role="document">
    <div class="row">
<!-- Row for main content area -->
  <div class="small-11 small-centered large-8 columns" id="content" role="main">
  
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; // End the loop ?>

    <a style="margin-top:20px;" href="mailto:careers@joinhomebase.com" class="primary-cta">Apply Now!</a>

  </div>
    
<?php get_footer(); ?>