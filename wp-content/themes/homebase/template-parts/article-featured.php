<?php 
  $category = get_the_category();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="row">
  <div class="col col-12 col-sm-6 col-left">
    <div class="col-inner">
      <div class="col-wrap">
        <div class="post-meta">
          <?php if ($category) : ?>
          <span class="category" href="<?php echo get_category_link($category[0]);?>"><?php echo $category[0]->cat_name;?></span>
          <?php endif; ?>
          <span class="meta-date"><?php the_modified_time('F j, Y'); ?></span>
        </div>

        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a class="button secondary" href="<?php the_permalink(); ?>">Read article</a>
      </div>
    </div>
  </div>

  <div class="col col-12 col-sm-6 col-right">
    <div class="col-inner">
      <div class="col-wrap">
        <div class="img-wrapper">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</article>
