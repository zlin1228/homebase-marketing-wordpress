<?php get_header(); ?>
  
<main id="primary" class="site-main product-update" role="document">

  <div class="product-updates-content">
    <div class="container">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
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

</main>
    
<?php get_footer(); ?>