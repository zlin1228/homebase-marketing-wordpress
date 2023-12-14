<?php get_header(); ?>

<section class="support-header banner short single" style="background-image: url(<?php the_field('support_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <h1>Careers at Homebase</h1>
      <p>Help us make life for hourly workers a little easier.</p>
      <div class="search row">
        <div class="small-12 medium-7 medium-centered columns">
          <?php include (TEMPLATEPATH . '/cs-articles-search.php'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Start the main container -->
<div class="container" role="document">
  <div class="row">

<!-- Row for main content area -->
  <div class="small-12 large-8 columns" id="content" role="main">
  
  <?php if ( have_posts() ) : ?>
  
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    
    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    
  <?php endif; // end have_posts() check ?>
  
  <?php /* Display navigation to next/previous pages when applicable */ ?>
  <?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
      <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
      <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
    </nav>
  <?php } ?>

  </div>

  <?php get_sidebar ('cs-articles'); ?>
    
<?php get_footer(); ?>