<?php

$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$cat_name = single_cat_title( '', false );

$state_list = get_state_array();

get_header(); 
?>

<div class="container new-style" role="document">

<?php
if ( have_rows('flexible_content_for_category', 'option') ) :

  $postsMethod = new PostsMethod();

  while ( have_rows('flexible_content_for_category', 'option') ) : the_row();

    /* --------------------------------------------
      features sub nav
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_sub_cat_nav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
          $headline                 = get_sub_field('navbar_headline');
          $hide_navbar              = get_sub_field('hide_searchbar');
          $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div id="blog-navbar" class="section section-navbar blog-navbar hide-for-small">
          <div id="nav-header" class="nav-header">
            <div class="row">
              <div class="column"><h1><?php echo $headline; ?></h1></div>
            </div>
          </div>

          <div class="nav-main">
            <div class="row">
              <div class="column">
                <div class="nav-wrapper">
                  <?php wp_nav_menu( array('theme_location' => 'blog-cat', 'menu-class' => 'blog-nav') ); ?>
                  <div class="search-widget">
                    <div class="search-control-button">
                      <a href="#" class="search-toggle" data-selector=".blog-navbar">Search</a>
                    </div>
                    <div class="nav-searchbar">
                    <?php if (!get_sub_field('hide_navbar')) : ?>
                      <form role="search" method="get" id="searchform" class="search-box" action="<?php echo home_url('/'); ?>">
                        <div class="search-button">
                          <input type="submit" id="searchbtn" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="button postfix searchbtn">
                        </div>
                        <div class="search-input">
                          <input type="text" value="" name="s" aria-label="Seach" class="searchinput" id="searchinput" placeholder="<?php esc_attr_e($placeholder, 'reverie'); ?>">
                        </div>
                      </form>
                    <?php endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif;

    /* --------------------------------------------
      Featured post widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_featured_post' ) : 

    $term = get_queried_object();

    if( have_rows('featured_post', $term) ):

      while( have_rows('featured_post', $term) ): the_row();

        if (!get_sub_field('hide_widget', $term)) : ?>

          <?php
          $post_type                 = get_sub_field('post_type', $term);
          $custom_post               = get_sub_field('custom_post', $term);
          ?>

          <div class="section section-feaured-post">
            <div class="row">
              <?php
                if($post_type == 'custom' && $custom_post ) {
                  foreach($custom_post as $post) : 
                    setup_postdata($post);
                    get_template_part( 'templates/custom-featured-post', 'content');
                  endforeach;
                  wp_reset_postdata();
                }
                else
                  $postsMethod->get_featured_post($post_type, $cat_id); 
              ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php
    /* --------------------------------------------
      Post grid widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_post_grid' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline                    = get_sub_field('headline');
        $sort_by                     = get_sub_field('sort_by');
        $posts_count                 = get_sub_field('posts_count');
        $custom_posts                = get_sub_field('custom_posts');

        $subscribe = null;
        ?>

        <div data-anchor="#post-grid" class="section section-post-grid">
          <div class="row">
            <div class="columns">
              <div class="container">
                <?php 
                  if($headline) :
                    echo '<h3 class="text-left">'.$headline.'<strong>'.$cat_name.'</strong></h3>';
                  endif;

                  if($sort_by == 'custom' && $custom_posts ) {

                    echo '<ul class="post-grid">';
                    foreach($custom_posts as $post) :  setup_postdata($post);
                      echo '<li class="post-item">';
                      get_template_part( 'templates/custom-post-content', 'thumb');
                      echo '</li>';
                    endforeach;
                    echo '</ul>';
                    
                    wp_reset_postdata();
                  }
                  else
                    $postsMethod->get_grid_posts($posts_count, $sort_by, $cat_id, $subscribe);
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    
    <?php
    /* --------------------------------------------
      Posts slider widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_post_slider' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :

        $term           = get_queried_object();

        $headline       = get_sub_field('headline');

        if( have_rows('post_slider', $term) ):

          while( have_rows('post_slider', $term) ): the_row();
    
            if (!get_sub_field('hide_widget', $term)) : 
              $sort_by                     = get_sub_field('post_type', $term);
              $posts_count                 = get_sub_field('posts_count', $term);
              $custom_posts                = get_sub_field('custom_posts', $term);
        ?>

              <div class="section section-post-slider">
                <div class="row">
                  <div class="container text-left">
                  <?php 
                    if($headline) :
                    echo '<h3 class="text-left">'.$headline.'</h3>';
                    endif;
                    echo '<div class="slider-wrapper">';

                    if($sort_by == 'custom' && $custom_posts ) {
                      echo '<ul class="post-slider">';
                      foreach($custom_posts as $post) :  setup_postdata($post);
                        echo '<li class="post-item">';
                        get_template_part( 'templates/custom-post-content', 'nothumb');
                        echo '</li>';
                      endforeach;
                      echo '</ul>';
                      
                      wp_reset_postdata();
                    }
                    else
                      $postsMethod->get_slider_posts($posts_count, $sort_by, $cat_id); 
                    echo '</div>';
                  ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Subscribe Banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_subscrible_widget' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $type                 = get_sub_field('type');
        $headline             = get_sub_field('headline');
        $subheadline          = get_sub_field('subheadline');
        $button_text          = get_sub_field('button_text');
        $form_link            = get_sub_field('form_link');
        $modal_message        = get_sub_field('modal_message');
        $modal_btn_text       = get_sub_field('modal_btn_text');
        $modal_ID             = get_sub_field('modal_ID');
       
        $item_type = ($type != 'full') ? 'reverse' : '';
        ?>

        <div class="section section-subscribe-banner <?php echo ($type == "full") ? "fullwidth-banner" : "boxed-banner"; ?>">
          <div class="row">
            <div class="column">
              <div class="container">
              <?php if ($type != "full") : ?>
                <div class="bg-layer">
                  <div class="bg-inner">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                  </div>
                </div>
              <?php endif; ?>
                <div class="content-wrapper">
                  <div class="header">
                  <?php

                  if ($headline) :
                    echo '<h3>' . $headline . '</h3>';
                  endif;

                  if ($subheadline) :
                    echo '<p>' . $subheadline . '</p>';
                  endif;?>
                  </div>

                  <div class="form">
                    <form name="subscribe" 
                        action="<?php echo $form_link; ?>"
                        method="POST"
                        class="email"
                    >
                      <input type="hidden" name="modal_ID" value="<?php echo $modal_ID; ?>" />
                      <div class="form-item">
                        <input class="homeform <?php echo $item_type; ?>"
                            aria-label="email address"
                            type="email"
                            name="email"
                            placeholder="Email address"
                        />
                      </div>
                      <div class="form-item">
                        <select 
                          class="<?php echo $item_type; ?>"
                          name="location_state" 
                          required
                        >
                          <option value="" hidden selected>Select your state</option>
                          <?php
                            foreach($state_list as $key => $state) {
                              echo '<option value="'.$key.'">'.$state.'</option>';
                            }
                          ?>
                        </select>
                        <label class="hidelabel" for="locationstate">State</label>
                      </div>
                      <div class="form-item">
                        <button type="submit" 
                            class="button primary <?php echo $item_type;?>"
                            onclick="ga('send', {'hitType': 'event', 'eventCategory': 'Blog', 'eventAction': 'Subscription', 'eventLabel': 'Subscribed', 'eventValue': 1});"
                        ><?php echo $button_text; ?></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="remodal subcribe-confirm" data-remodal-id="blog-modal<?php echo ($modal_ID) ? '-'.$modal_ID : ''; ?>" role="dialog" aria-labelledby="modal-title" aria-describedby="modal-subtitle" data-remodal-options="hashTracking: false">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="row text-center">
                <h2 id="modal-title"></h2>
                <div class="modal-body" data-remodal-body="body"><?php echo $modal_message; ?></div>
                <div class="modal-footer"><button data-remodal-action="confirm" class="button primary"><?php echo $modal_btn_text; ?></button></div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Specific Text Widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_spectext' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $add_border_top         = get_sub_field('add_border_top');
        $widget_type            = get_sub_field('widget_type');
        $text_align             = get_sub_field('text_align');
        $logo                   = get_sub_field('logo');
        $text                   = get_sub_field('text');

        ?>

        <div class="section section-spec-text <?php echo ($widget_type);?>">
          <div class="row">
            <div class="column">
              <div class="container <?php echo ($add_border_top) ? 'top-border': '';?> <?php echo ($text_align);?>">
                <div class="content-wrapper">
                  <?php

                  if ($logo) :?>
                    <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                  <?php endif;

                  if ($text) :
                    echo $text;
                  endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>


    <?php endif; //end if layout ?>
	<?php endwhile; //end while main flex content ?>
</div>
<?php else : ?>

  <!-- Start the main container -->
<div class="container" role="document">
  <div class="row">
    <div class="small-12 medium-8 columns">
      <!-- Row for main content area -->
      <div id="content" role="main">
        <div class="blog-header">
          <h3><?php single_cat_title( '', true ); ?></h3>
        </div>
        <ul class="small-block-grid-1 medium-block-grid-3">
      
          <?php if ( have_posts() ) : ?>
          
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            
            <?php else : ?>
              <?php get_template_part( 'content', 'none' ); ?>
            
          <?php endif; // end have_posts() check ?>
        </ul>
      </div>
    </div>
    <?php get_sidebar (); ?>
  </div>
</div>

<section class="pagination">
  <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
      <nav id="post-nav">
        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
      </nav>
  <?php } ?>
</section>

<?php endif; //end if have rows mail flex content ?>

<?php get_footer(); ?>