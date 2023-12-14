<?php get_header(); ?>
  
<section class="banner short single banner-single-guides" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 medium-8 medium-centered columns">
      <h1><?php the_field('h1_headline'); ?></h1>
      <h3 class="guide__subtitle"><?php the_field('h2_headline'); ?></h3>
    </div>
  </div>
</section>
  
  <div class="container" role="document">
    <div class="row">
<!-- Row for main content area -->
  <div class="small-11 small-centered large-8 columns" id="content" role="main">
  
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="entry-content guides__content">
        <?php the_content(); ?>
      </div>

      <div class="post-nav">
        <span class="prev"><?php previous_post_link('%link', '< Previous Post'); ?></span>
        <span class="next"><?php next_post_link('%link', 'Next Post >'); ?></span>
      </div>
    <?php endwhile; // End the loop ?>

  </div>
    
<?php get_footer(); ?>