<?php
/*
Template Name: No Header
*/
get_header(); ?>

<!-- Start the main container -->
<div class="container" role="document">
  <div class="row">


<!-- Row for main content area -->
  <div class="small-12 large-12 columns" role="main">
  
  <?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="row">
      <div class="small-12 medium-10 medium-centered columns">
        <h1 class="centered"><?php the_field('h1_headline'); ?></h1>
      </div>
    </div>
      
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; // End the loop ?>

  </div>
    
<?php get_footer(); ?>
