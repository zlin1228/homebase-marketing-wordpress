<?php
/*
Template Name: Video Landing page - MM
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php

if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline_img             = get_sub_field('headline_img');
        $subheadline_part1        = get_sub_field('subheadline_part1');
        $subheadline_part2        = get_sub_field('subheadline_part2');
        $subheadline_part3        = get_sub_field('subheadline_part3');
        $description              = get_sub_field('description');
        $sharing_title            = get_sub_field('sharing_title');
        $label_for_video          = get_sub_field('label_for_video');
        $label_arrow              = get_sub_field('label_arrow');
        $video_link               = get_sub_field('video_link');
        $max_width                = get_sub_field('max_width');
        $max_height               = get_sub_field('max_height');
        $video_poster             = get_sub_field('video_poster');
        $schema_markup            = get_sub_field('schema_markup');

        if($schema_markup)   
          echo '<div style="display: none;">'.$schema_markup.'</div>';
      ?>

        <div class="section section-hero">
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 col-lg-5 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($headline_img) : ?>
                      <div class="logo-wrapper">
                        <h1><img class="headline-img" src="<?php echo $headline_img['url']; ?>" alt="<?php echo $headline_img['alt']; ?>" width="446" height="156"></h1>
                      </div>
                    <?php endif ; ?>
                    <h2>
                      <?php echo ($subheadline_part1) ? '<span class="subheadline-part1">'.$subheadline_part1.'</span>' : ''; ?>
                      <?php echo ($subheadline_part2) ? '<span class="subheadline-part2">'.$subheadline_part2.'</span>' : ''; ?>
                      <?php echo ($subheadline_part3) ? '<span class="subheadline-part3">'.$subheadline_part3.'</span>' : ''; ?>
                    </h2>
                    <div class="video-container show-for-lg-down">
                      <?php if ($video_poster) : ?>
                        <img src="<?php echo $video_poster['url']; ?>" alt="<?php echo $video_poster['alt']; ?>">
                        <div class="overlay"></div>
                      <?php endif; ?>
                      <?php if ($video_link ) : ?>
                        <a class="play-video" href="<?php echo $video_link; ?>">Play</a>
                      <?php endif; ?>
                    </div>
                    <?php if($description) :?>
                      <p><?php echo $description; ?></p>
                    <?php endif; ?>
                    <?php if($sharing_title) :?>
                      <div class="share-post-box">
                        <span class="share-title"><?php echo $sharing_title;?></span>
                        <div class="share-buttons center">
                          <?php
                          $urluncoded = get_the_permalink();
                          $url = urlencode( $urluncoded );
                          $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
                          $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
                          ?>

                          <a class="st-btn st-share" data-network="twitter" target="_blank" rel="noopener" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'Twitter', '<?php echo $urluncoded ?>')">
                              <img alt="Share on Twitter" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/twitter.svg'; ?>">		
                          </a>
                          <a class="st-btn st-share" data-network="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Facebook', '<?php echo $urluncoded ?>');">
                              <img alt="Share on Facebook" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/facebook.svg'; ?>">
                          </a>
                          <a class="st-btn st-share" data-network="linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'LinkedIn', '<?php echo $urluncoded ?>')">
                              <img alt="Share on LinkedIn" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/linkedin.svg'; ?>">
                          </a>
                          <a class="st-btn st-connection" href="#">
                              <span class="tooltiptext"></span>
                              <img  alt="Copy link" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/connection.svg'; ?>">
                          </a>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-lg-6 offset-lg-1 col-right hide-for-lg-down">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <div class="video-container">
                      <?php if ($video_poster) : ?>
                        <img src="<?php echo $video_poster['url']; ?>" alt="<?php echo $video_poster['alt']; ?>" width="620" height="350" style="<?php echo ($max_width)? 'width:'.$max_width : '';?> <?php echo ($max_height)? 'height:'.$max_height : '';?>">
                        <div class="overlay"></div>
                      <?php endif; ?>
                      <?php if ($video_link ) : ?>
                        <a class="play-video" href="<?php echo $video_link; ?>">Play</a>
                      <?php endif; ?>
                    </div>
                    <?php if ($label_for_video ) : ?>
                      <div class="sticker-label"><?php echo $label_for_video; ?></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_single_2cols' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $background             = get_sub_field('background');
      $headline               = get_sub_field('headline');
      $author_info            = get_sub_field('author_info');
      $quote                  = get_sub_field('quote');
      $label_for_image        = get_sub_field('label_for_image');
      $max_width              = get_sub_field('max_width');
      $max_height             = get_sub_field('max_height');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-s-2cols" style="background: url('<?php echo $background['url']; ?>') no-repeat center bottom -20px;">
          <div class="container">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <div class="headline-wrapper"><h2 class="fw-black"><?php echo $headline; ?></h2></div>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 col-lg-4 offset-lg-1 col-text">
                <div class="col-inner">
                  <div class="text-wrapper">
                  <?php if ($quote) : ?>
                    <h3><?php echo $quote; ?></h3>
                  <?php endif;?>
                  <?php if ($author_info) : ?>
                    <div class="author-info"><?php echo $author_info; ?></div>
                  <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 offset-sm-1 col-image">
                <div class="col-inner">
                  <div class="img-wrapper">
                  <?php if ($image) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="<?php echo ($max_width)? 'width:'.$max_width : '';?> <?php echo ($max_height)? 'height:'.$max_height : '';?>">
                  <?php endif;?>
                  <?php if ($label_for_image ) : ?>
                    <div class="sticker-label"><?php echo $label_for_image; ?></div>
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Video grid widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_video_grid' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline                         = get_sub_field('headline');
        $max_videos                       = get_sub_field('max_videos');
        $background                       = get_sub_field('background');
        $label_for_unavailable_video      = get_sub_field('label_for_unavailable_video');
        $title_for_unavailable_video      = get_sub_field('title_for_unavailable_video');
        $poster_for_unavailable_video     = get_sub_field('poster_for_unavailable_video');
        $index = 0;
      ?>

        <div class="section section-videogrid" style="background: url('<?php echo $background['url']; ?>') center top;">
          <div class="container">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="video-grid">
                    <?php if ( have_rows('videoes') ) :
                      while ( have_rows('videoes') ) : the_row();
                        $video_poster = get_sub_field('video_poster');
                        $video_title = get_sub_field('video_title');
                        $video_link = get_sub_field('video_link');
                        $index++;
                    ?>
                      <div class="video-card <?php echo ($index >3) ? 'hidden': '';?>">
                        <div class="video-container">
                          <?php if ($video_poster) : ?>
                            <img src="<?php echo $video_poster['url']; ?>" alt="<?php echo $video_poster['alt']; ?>">
                            <div class="overlay"></div>
                          <?php endif; ?>
                          <?php if ($video_link ) : ?>
                            <a class="play-video" href="<?php echo $video_link; ?>">Play</a>
                          <?php endif; ?>
                        </div>
                        <div class="video-title-warpper">
                          <div class="video-title"><?php echo $video_title; ?></div>
                        </div>
                      </div>
                    <?php 
                        endwhile;
                      endif; 
                    ?>

                    <?php for( $i = $index; $i < $max_videos; $i++ ) : ?>
                      <div class="video-card empty hide-for-sm">
                        <div class="video-container">
                          <?php if ($poster_for_unavailable_video) : ?>
                            <img src="<?php echo $poster_for_unavailable_video['url']; ?>" alt="<?php echo $poster_for_unavailable_video['alt']; ?>">
                            <div class="overlay"></div>
                          <?php endif; ?>
                          <div class="label-layer">
                            <span class="coming-label"><?php echo $label_for_unavailable_video; ?></span>
                          </div>
                        </div>
                        <div class="video-title-warpper">
                          <div class="video-title"><?php echo $title_for_unavailable_video; ?></div>
                        </div>
                      </div>
                    <?php 
                      endfor; 
                    ?>
                  </div>

                  <button id="toggle-videoes" class="button"><span class="title-more">See more</span><span class="title-less">See less</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Mutiple 2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_multiple_2cols' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline      = get_sub_field('headline');
      ?>

        <div class="section section-multiple-2cols">
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h2 class="fw-black"><?php echo $headline; ?></h2>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <?php if ( have_rows('rows') ) :
                while ( have_rows('rows') ) : the_row();
                
                if (!get_sub_field('hide_widget')) : 
                  $reverse          = get_sub_field('reverse');
                  $subheadline      = get_sub_field('subheadline');
                  $description      = get_sub_field('description');
                  $image            = get_sub_field('image');
                  $max_width        = get_sub_field('max_width');
                  $max_height       = get_sub_field('max_height');
              ?>
                <div class="row v-align-middle <?php echo ($reverse)? 'reverse' : '';?>">
                  <div class="col col-12 col-sm-6 col-left">
                    <div class="col-inner">
                      <div class="text-wrapper">
                        <?php if ($subheadline) : ?>
                          <h3 class="fw-black"><?php echo $subheadline; ?></h3>
                        <?php endif;?>
                        <?php if ($description) : ?>
                          <p><?php echo $description; ?></p>
                        <?php endif;?>

                        <?php if ( have_rows('links') ) :
                          echo '<ul class="social-links">';
                          while ( have_rows('links') ) : the_row();
                            $link_type  = get_sub_field('link_type');
                            $link_text  = get_sub_field('link_text');
                            $link_url   = get_sub_field('link_url'); ?>
                            
                          <?php if (strcmp($link_type, 'ins') == 0) : ?>
                            <li><a class="icon-link icon-insta" href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a></li>
                          <?php elseif (strcmp($link_type, 'fb') == 0) : ?>
                            <li><a class="icon-link icon-fb" href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a></li>
                          <?php else : ?>
                            <li><a class="" href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a></li>
                          <?php endif;
                          endwhile;
                          echo '</ul>';
                        endif; 
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col col-12 col-sm-6 col-right">
                    <div class="col-inner">
                      <div class="img-wrapper" >
                      <?php if ($image) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="<?php echo ($max_width) ? 'width:'.$max_width : ''; ($max_height) ? ' height:'.$max_height : '';?>">
                      <?php endif;?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php 
                  endif;
                endwhile;
              endif; 
              ?>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      CTA widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_2cols' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $background           = get_sub_field('background');
        $headline             = get_sub_field('headline');
        $description          = get_sub_field('description');
        $button_text          = get_sub_field('button_text');
        $button_link          = get_sub_field('button_link');
        $label_for_image      = get_sub_field('label_for_image');
        $max_width            = get_sub_field('max_width');
        $max_height           = get_sub_field('max_height');
        $image                = get_sub_field('image');
      ?>

        <div class="section section-cta-2cols" style="background: url('<?php echo $background['url']; ?>') center top;">
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h2 class="fw-extra"><?php echo $headline; ?></h2>
                    <?php endif;?>
                    <?php if ($description) : ?>
                      <h3 class="subheading fw-normal"><?php echo $description; ?></h3>
                    <?php endif;?>
                    <?php if ($button_text && $button_link) : ?>
                      <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="image-wrapper">
                    <?php if ($label_for_image ) : ?>
                      <div class="sticker-label"><?php echo $label_for_image; ?></div>
                    <?php endif; ?>
                    <?php if ($image) : ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="<?php echo ($max_width) ? 'width:'.$max_width : ''; ($max_height) ? ' height:'.$max_height : '';?>">
                    <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Tweet widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_tweets' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $headline         = get_sub_field('headline');
      ?>

        <div class="section section-tweet">
          <div class="container">
            <div class="row row-header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h3 class="fw-extra"><?php echo $headline; ?></h3>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="row row-tweets">
              <div class="col col-12">
                <div class="col-inner">
                  
                  <?php if ( have_rows('tweets') ) :
                  echo '<div id="tweet-slider">';
                    while ( have_rows('tweets') ) : the_row();
                        $tweet    = get_sub_field('tweet');
                  ?>
                    <div class="tweet-item">
                      <?php echo $tweet; ?>
                    </div>
                  <?php 
                      endwhile;
                      echo '</div>';
                    endif; 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Sharing widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_sharing' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $sharing_title    = get_sub_field('sharing_title');
      ?>

        <div class="section section-sharing">
          <div class="container-narrow">
            <div class="row row-sharing">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if($sharing_title) :?>
                    <div class="share-post-box center">
                      <span class="share-title"><?php echo $sharing_title;?></span>
                      <div class="share-buttons center">
                        <?php
                        $urluncoded = get_the_permalink();
                        $url = urlencode( $urluncoded );
                        $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
                        $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
                        ?>

                        <a class="st-btn st-share" data-network="twitter" target="_blank" rel="noopener" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'Twitter', '<?php echo $urluncoded ?>')">
                            <img alt="Share on Twitter" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/twitter.svg'; ?>">		
                        </a>
                        <a class="st-btn st-share" data-network="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Facebook', '<?php echo $urluncoded ?>');">
                            <img alt="Share on Facebook" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/facebook.svg'; ?>">
                        </a>
                        <a class="st-btn st-share" data-network="linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'LinkedIn', '<?php echo $urluncoded ?>')">
                            <img alt="Share on LinkedIn" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/linkedin.svg'; ?>">
                        </a>
                        <a class="st-btn st-connection" href="#">
                            <span class="tooltiptext"></span>
                            <img  alt="Copy link" src="<?php echo get_stylesheet_directory_uri() . '/images/share-icons/connection.svg'; ?>">
                        </a>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      CTA banner widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $scribble1           = get_sub_field('scribble1');
        $scribble2           = get_sub_field('scribble2');
        $content1           = get_sub_field('content1');
        $content2           = get_sub_field('content2');
      ?>

        <div class="section section-cta-banner">        
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <div class="content-wrapper">
                      <?php if ($content1) : ?>
                        <div><?php echo $content1; ?></div>
                      <?php endif; ?>
                      <?php if ($content1 && $content2) : ?>
                        <div class="h-divider fw-bold">|</div>
                      <?php endif; ?>
                      <?php if ($content2) : ?>
                        <div><?php echo $content2; ?></div>
                      <?php endif; ?>
                      <?php if ($scribble1) : ?>
                        <img class="scribble1" alt="<?php echo $scribble1['alt']; ?>"  src="<?php echo $scribble1['url']; ?>" />
                      <?php endif; ?>
                      <?php if ($scribble2) : ?>
                        <img class="scribble2" alt="<?php echo $scribble2['alt']; ?>"  src="<?php echo $scribble2['url']; ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>


<?php get_footer('video-lp'); ?>