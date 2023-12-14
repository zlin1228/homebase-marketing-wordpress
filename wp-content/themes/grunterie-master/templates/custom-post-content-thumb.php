<?php 
  $category = get_the_category(); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="post-container">
    <div class="img-wrapper">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(450, 450)); ?></a>
    </div>
    <div class="text-wrapper">
      <div class="post-meta">
        <?php if ($category) : ?>
        <span class="category" href="<?php echo get_category_link($category[0]);?>"><?php echo $category[0]->cat_name;?></span>
        <?php endif; ?>
        <p class="meta-date"><?php the_time('F j, Y'); ?></p>
      </div>

      <a href="<?php the_permalink(); ?>"><p class="title"><?php the_title(); ?></p></a>
    </div>
  </div>
</article>
