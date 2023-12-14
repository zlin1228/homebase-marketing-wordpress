<?php get_header(); ?>

<!-- Start the main container -->
<div class="container" role="document">
  <div class="row">


<!-- Row for main content area -->
  <div class="small-12 large-8 columns support__content" id="content" role="main">

  <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
  <h1><?php echo $term->name; ?></h1>
  
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
  
  <?php /* Display navigation to next/previous pages when applicable */ ?>
  <?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
      <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
      <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
    </nav>
  <?php } ?>

  </div>

  <?php get_sidebar ('support'); ?>
    
<?php get_footer(); ?>