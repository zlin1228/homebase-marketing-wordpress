<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
<li>
  <article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
  	<header>
      <?php global $post; ?>
      <?php
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1000,350 ), false, '' );
      ?>

      <?php if ($src[0]): ?>
        <div class="feature-image" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-repeat: none !important; background-position: 50% 20% !important;">
          <a href="<?php the_permalink(); ?>" aria-label="Read more about <?php the_title(); ?>">
          </a>
        </div>
      <?php endif; ?>
      
      
      <?php reverie_entry_meta(); ?>
      <h2><a href="<?php the_permalink(); ?>" aria-label="Read more about <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <div class="entry-content">
        <?php the_excerpt(); ?>
      </div>
      <p class="category"><?php the_category(', ') ?><?php echo get_the_term_list( $post->ID, 'engineerings_cat', '', ', ' ); ?></p>

  	</header>
  </article>
</li>