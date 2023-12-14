<?php 
  $category = get_the_category();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="post-container">
    <div class="text-wrapper">
      <div class="post-meta">
        <?php if ($category) : ?>
        <span class="category" href="<?php echo get_category_link($category[0]);?>"><?php echo $category[0]->cat_name;?></span>
        <?php endif; ?>
        <p class="meta-date"><?php the_modified_time('F j, Y'); ?></p>
      </div>
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a class="read-more text-link-arrow" href="<?php the_permalink(); ?>">Read article</a>
    </div>
  </div>
</article>
