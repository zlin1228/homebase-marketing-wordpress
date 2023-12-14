<?php
/*
Template Name: Videos
*/
get_header(); ?>

  <div class="container" role="document">
    <div class="row">
 <h1> Homebase Product Videos </h1>
      <div class="small-11 small-centered medium-12 medium-centered columns">
        <?php /* Start loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
            
            <div class="row">
              <div>
                <?php if( have_rows('video') ): ?>
                  <ul class="videos medium-block-grid-3">
                    <?php while( have_rows('video') ): the_row();
                      $title = get_sub_field('video_title');
                      $link = get_sub_field('video_link'); ?>

                      <li class="video">
                        <div class="video__item"><?php echo $link; ?></div>
                        <h3 class="video-title"><?php echo $title; ?></h3>
                      </li>

                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>

          <?php endwhile; // End the loop ?>
      </div>
    </div>

  </div>
    
<?php get_footer(); ?>
