<?php
/*
Template Name: Features
*/
get_header(); ?>

<section class="banner short features" style="background-image: url(<?php the_field('background_image'); ?>);"> 
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 medium-10 medium-centered columns">
      <h1><?php the_field('h2_headline'); ?></h1>
    </div>
  </div>
</section>

<section class="features-menu">
  <div class="row">
    <?php if ( has_nav_menu( 'features-menu' ) ) { 
        wp_nav_menu( array( 'theme_location' => 'features-menu') ); 
    } ?>
  </div>
</section>

<?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="product features section">  
      <div class="row first">
        <div class="small-11 small-centered medium-8 medium-centered columns">
          <h2><?php the_field('product_headline'); ?></h2>
          <img src="<?php the_field('product_hero_image'); ?>">
        </div>
      </div>

      <div class="row">
        <div>
          <h3><?php the_field('bullets_headline'); ?></h3>

          <?php if( have_rows('bullet_point') ): ?>
            <ul class="product-sections large-block-grid-2">
              <?php while( have_rows('bullet_point') ): the_row();
                $icon = get_sub_field('bullet_icon');
                $headline = get_sub_field('bullet_headline');
                $text = get_sub_field('bullet_text'); ?>

                <li class="bullet-section small-12 medium-6 columns">
                  <div class="icon">
                    <img src="<?php echo $icon; ?>" alt="<?php echo $alt; ?>" />
                  </div>
                  <div class="bullet-text">
                    <p class="strong"><?php echo $headline; ?></p>
                    <?php echo $text; ?>
                  </div>
                </li>

              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

    </div>
    
  <?php endwhile; // End the loop ?>
    
<?php get_footer(); ?>
