<?php get_header(); ?>
  
<div class="container new-style product-updates" role="document">

  <div class="product-updates-content">
    <div class="row">
      <div class="row-container">
        <div class="column">
          <div class="column-inner">
            <a href="<?php echo get_site_url(); ?>/product-updates" class="back-all-link"> < Back to all product updates</span></a>

            <div id="content" role="main">
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                  <div class="update-meta"><span><?php the_field('date'); ?></span></div>

                  <h1 class="update-title extra"><?php the_title(); ?></h1>

                  <div class="update-description">
                    <?php //the_field('update_description'); ?>
                    <?php the_content(); ?>
                  </div>
                </div>
              </article>
            <?php endwhile;  endif;// End the loop ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
    
<?php get_footer(); ?>