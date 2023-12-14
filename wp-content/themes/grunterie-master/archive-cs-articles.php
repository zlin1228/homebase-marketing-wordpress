<?php get_header(); ?>

<section class="support-header banner short single" style="background: #374252">
  <div class="row overlay-content">
    <div class="small-12 columns">
      <h1>CS Knowledge Base</h1>
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
  <div class="small-11 small-centered large-10 large-centered columns" role="main">
    <div class="row">
      <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
      
          <?php if ( have_posts() ) : ?>
          
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              
              <li>
                <article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
                  <header>                    
                    <?php reverie_entry_meta(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                      <?php the_excerpt(); ?>
                    </div>
                    <p class="category"><?php the_category(', ') ?></p>

                  </header>
                </article>
              </li>

            <?php endwhile; ?>
            
            <?php else : ?>
              <?php get_template_part( 'content', 'none' ); ?>
            
          <?php endif; // end have_posts() check ?>
        </ul>
    </div>
  </div>
    
<?php get_footer(); ?>