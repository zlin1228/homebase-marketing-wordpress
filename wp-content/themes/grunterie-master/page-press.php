<?php
/*
Template Name: Press
*/
get_header(); ?>

<section class="banner short verticals" style="background-color: #B587D2; background-image: url(<?php the_field('background_image'); ?>);"> 
  <div class="row overlay-content">
    <div class="small-12 medium-10 medium-centered columns">
      <p class="strong"><?php the_field('h1_headline'); ?></p>
      <h1><?php the_field('h2_headline'); ?></h1>
    </div>
  </div>
</section>
  
  <div class="container" role="document">
    <div class="row">
      <div class="small-11 small-centered medium-8 medium-centered columns">
        <?php /* Start loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="about entry-content">
              <?php the_content(); ?>
            </div>
        <?php endwhile; // End the loop ?>
      </div>
    </div>

  </div>
    
<?php get_footer(); ?>
