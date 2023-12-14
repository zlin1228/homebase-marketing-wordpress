<?php get_header(); ?>

<main id="primary" class="site-main product-updates" role="document">

<?php if (have_rows('hero', 'option')) : 
    while(have_rows('hero', 'option')): the_row();
      $headline            = get_sub_field('headline');
      $subheadline         = get_sub_field('subheadline');
      $image               = get_sub_field('image');
    endwhile;
    ?>

    <section class="section section-hero">
      <div class="container">
        <div class="row v-align-middle">
          <div class="col col-12 col-sm-6 col-left">
            <div class="col-inner">
              <div class="text-wrap">
                <?php if ($headline) : ?>
                <h1 class="extra"><?php echo $headline; ?></h1>
                <?php endif;?>

                <?php if ($subheadline) : ?>
                <h3 class="subheading"><?php echo $subheadline; ?></h3>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-right hide-for-sm">
            <div class="col-inner">
              <div class="img-wrap">
                <?php if ($image) : ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>

<!-- Start the main container -->
<div class="product-updates-content">
  <div class="container">
    <div class="row">
      <div class="col col-12">
        <div class="col-inner">
          <div id="content" role="main">
            <ul class="product-updates">

            <?php
            /*
            * Loop through Categories and Display Posts within
            */
            $args = array(
              'post_type' => 'product-update',
              'post_status' => 'publish',
              'posts_per_page' => -1,  //show all posts
              'meta_key'			=> 'date',
              'orderby'			=> 'meta_value',
              'order'				=> 'DESC'
            );

            $posts = new WP_Query($args);
            $pre_date = date_create('now');
      
            if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 

              $update_date = date_create(get_field('date'));

              if ( is_object($update_date) ) {
                $interval = $pre_date->diff( $update_date );
                $pre_date = $update_date;
              }
            ?>

              <li class="product-update-list <?php echo ($interval->m >= 1)? 'bordered':''; ?>">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <div class="entry-content">
                    <div class="update-meta"><span><?php the_field('date'); ?></span></div>

                    <h2 class="update-title"><?php the_title(); ?></h2>

                    <div class="update-description">
                      <?php //the_field('update_description'); ?>
                      <?php the_content(); ?>
                    </div>
                  </div>
                </article>
              </li>

            <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

<?php get_footer(); ?>