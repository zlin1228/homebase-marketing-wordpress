<?php
  wp_redirect( get_post_permalink(12304), 301 );
  exit();

  get_header();
?>
  
  <div class="row">
    <div class="small-12 columns">
      <div class="container" role="document">
          <!-- Row for main content area -->
          <div class="small-11 small-centered large-8 large-uncentered columns" id="content" role="main">

            <?php /* Start loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
			<?php the_field('hr_resource_description'); ?>
<br>
			<h3><strong><a href="<?php the_field('hr_resource_link'); ?>">Download Now</a></strong></h3>

              <div class="entry-content">
                <?php the_content(); ?>
              </div>

              <?php next_post_link( '%link', 'Next post in category', TRUE, ' ', 'post_format' ); ?>

            <?php endwhile; // End the loop ?>

          </div>

          <?php get_sidebar ('hr'); ?>
      </div>
    </div>
  </div>
    
<?php get_footer(); ?>