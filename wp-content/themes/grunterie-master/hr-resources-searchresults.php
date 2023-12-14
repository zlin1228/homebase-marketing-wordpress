<?php get_header(); ?>

  <!-- Start the main container -->
<div class="container" role="document">
  <div class="row">

<!-- Row for main content area -->
  <div class="small-12 large-8 columns" id="content" role="main">
    <h2><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
  
    <?php if ( have_posts() ) : ?>
    
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
      
      <?php else : ?>
        
        <article id="post-0" class="post no-results not-found">
          <h4><?php _e( 'No results found :( ', 'reverie' ); ?></h4>

          <div class="entry-content">
            <p><?php _e( 'Apologies, we couldn\'t find any HR resources that mentioned your keyword.', 'reverie' ); ?></p>
          </div>
          <hr />
        </article>
      
    <?php endif; // end have_posts() check ?>

  </div>

  <?php get_sidebar ('hr'); ?>
    
<?php get_footer(); ?>