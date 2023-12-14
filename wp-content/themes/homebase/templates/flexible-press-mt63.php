<?php
/*
Template Name: Press - MT63 - Flexible
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $headline                 = get_sub_field('headline');
      $subheadline              = get_sub_field('subheadline');
      $content                  = get_sub_field('content');
      ?>

        <div class="section section-hero ">
          <div class="container">
            <div class="row">
              <div class="col col-12 text-center">
                <div class="col-inner">
                  <?php
                  // headline
                  if ($headline) :
                    echo '<h1 class="fw-extra">' . $headline . '</h1>';
                  endif;

                  if ($subheadline) :
                    echo '<h3 class="subheading fw-normal">' . $subheadline . '</h3>';
                  endif;

                  if ($content) :
                    echo '<div class="press-inquiry fw-normal">' . $content . '</div>';
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
      Posts slider
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_post_slider' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline              = get_sub_field('headline');
        $open_new              = get_sub_field('open_in_new_tab');
        ?>

        <div class="section section-post-slider  text-left">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                <?php 
                  if($headline) :
                  echo '<h3 class="fw-bold">'.$headline.'</h3>';
                  endif;
                  echo '<div class="slider-wrapper">';

                  if ( have_rows('slides') ) :
                    echo '<div class="post-slider press">';
                    while ( have_rows('slides') ) : the_row();

                    $cat_text             = get_sub_field('category');
                    $cat_url              = get_sub_field('category_url');
                    $c_new_tab            = get_sub_field('c_open_in_new_tab');
                    $date                 = get_sub_field('date');
                    $tite                 = get_sub_field('title');
                    $desc                 = get_sub_field('description');
                    $link_text            = get_sub_field('link_text');
                    $link_url             = get_sub_field('link_url');
                    $l_new_tab            = get_sub_field('l_open_in_new_tab');?>

                      <div class="post-item">
                        <article class="post">
                          <div class="post-container">
                            <div class="text-wrapper">
                              <div class="post-meta">
                                <span class="title"><?php echo $cat_text;?></span>
                                <p class="meta-date"><?php echo $date; ?></p>
                              </div>
                              <h4><?php echo $tite; ?></h4>
                              <p><?php echo $desc; ?></p>
                              <a class="text-link-arrow" href="<?php echo $link_url; ?>" <?php echo ($l_new_tab) ? 'target="_blank" rel="noopener noreferrer"' : '';?>><?php echo $link_text; ?></a>
                            </div>
                          </div>
                        </article>
                      </div>

                    <?php
                    endwhile;
                    echo '</div>';
                  endif;

                  echo '</div>';
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif;

    /* --------------------------------------------
      Press logos
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_press_logos' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 

        $logos                = get_sub_field('logos');

      ?>
        <div class="section section-press-logo ">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <ul class="press-logos">
                    <?php foreach ($logos as $logo) : ?>
                      <li>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif;

    /* --------------------------------------------
      2 columns widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_2_columns' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 

        $headline               = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        
      ?>
        <div class="section section-2-columns ">
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-sm-6 col-left">
                <div class="col-inner">
                  <div class="content-wrapper">
                    <?php
                      // headline
                      if ($headline) :
                        echo '<h2 class="fw-extra">' . $headline . '</h2>';
                      endif;

                      if ($subheadline) :
                        echo '<h3 class="subheading fw-normal">' . $subheadline . '</h3>';
                      endif;
                    ?>
                  </div>
                </div>
              </div>
              <div class="col col-sm-6 col-right">
                <div class="col-inner">
                  <div class="content-wrapper">
                    <?php if( have_rows('blocks') ): ?>
                      <?php  while ( have_rows('blocks') ) : the_row(); 
                        $icon               = get_sub_field('icon');
                        $block_headline     = get_sub_field('block_headline');
                        $block_desc         = get_sub_field('block_description');
                        $link_text          = get_sub_field('link_text');
                        $link_url           = get_sub_field('link_url');
                        $open_new           = get_sub_field('open_in_new_tab');
                      ?>
                        <div class="card-item">
                          <div class="img-wrapper">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                          </div>
                          <div class="text_wrapper">
                            <h4><?php echo $block_headline; ?></h4>
                            <p><?php echo $block_desc; ?></p>
                            <a class="text-link-arrow" href="<?php echo $link_url;?>" <?php echo ($open_new) ? 'target="_blank" rel="noopener noreferrer"' : '';?>><?php echo $link_text;?></a>
                          </div>
                        </div>
                      <?php  endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif;

    /* --------------------------------------------
      Footer Intro
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_footer_intro' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 

        $homebase_logo            = get_sub_field('homebase_logo');
        $content                  = get_sub_field('content');
        
      ?>
        <div class="section section-footer-intro ">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="intro-box">
                    <div class="content-wrapper">
                      <?php
                      if ($homebase_logo) :?>
                        <img class="homebase-logo" src="<?php echo $homebase_logo['url']; ?>" alt="<?php echo $homebase_logo['alt']; ?>">
                      <?php endif;

                      if ($content) :
                        echo $content;
                      endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; 

    /* --------------------------------------------
      Footer link
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_footer_link' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 

        $add_button               = get_sub_field('add_button');
        $add_content              = get_sub_field('add_content');
        $button_text              = get_sub_field('button_text');
        $button_link              = get_sub_field('button_link');
        $open_new                 = get_sub_field('open_in_new_tab');
        $content                  = get_sub_field('content');
        
      ?>
        <div class="section section-footer-link  hide-for-small">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="content-wrapper text-center">
                    <?php
                    if ($add_button && $button_text) :?>
                      <a class="button secondary" href="<?php echo $button_link;?>" <?php echo ($open_new) ? 'target="_blank" rel="noopener noreferrer"' : '';?>><?php echo $button_text;?></a>
                    <?php endif;

                    if ($add_content && $content) :
                      echo $content;
                    endif;?>
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

</main>

<?php get_footer(); ?>