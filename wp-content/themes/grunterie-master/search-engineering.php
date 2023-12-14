<?php

global $wp_query;

$total = $wp_query->max_num_pages;

$state_list = get_state_array();

get_header();
?>

<div class="container new-style" role="document">
<?php
if ( have_rows('flexible_content_for_engineering_search', 'option') ) :

  $index = 0;
  $postsMethod = new PostsMethod('engineering-blog');

  while ( have_rows('flexible_content_for_engineering_search', 'option') ) : the_row();

    /* --------------------------------------------
      features sub nav
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_sub_cat_nav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
        $hide_navmenu             = get_sub_field('hide_navmenu');
        $hide_searchbar           = get_sub_field('hide_searchbar');
        $nav_menu_name            = get_sub_field('nav_menu_name');
        $headline                 = get_sub_field('navbar_headline');
        $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div id="blog-navbar" class="section section-navbar blog-navbar hide-for-small">
          <div class="nav-main">
            <div class="row">
              <div class="column">
                <div class="nav-wrapper">
                  <div class="title-widget">
                    <h1><?php echo $headline; ?></h1>
                  </div>
                  <div class="search-widget">
                  <?php if (!$hide_searchbar) : ?>
                    <div class="search-control-button">
                      <a href="#" class="search-toggle" data-selector=".blog-navbar">Search</a>
                    </div>
                    <div class="nav-searchbar">
                      <form role="search" method="get" id="searchform" class="search-box" action="<?php echo home_url('/'); ?>">
                        <div class="search-button">
                          <input type="submit" id="searchbtn" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="button postfix searchbtn">
                        </div>
                        <div class="search-input">
                          <input type="text" value="" name="s" aria-label="Seach" class="searchinput" id="searchinput" placeholder="<?php esc_attr_e($placeholder, 'reverie'); ?>">
                          <input type="hidden" name="post_type" value="engineering-blog" />
                        </div>
                      </form>
                    </div>
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
      CTA Banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_widget' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $type                 = get_sub_field('type');
        $headline             = get_sub_field('headline');
        $subheadline          = get_sub_field('subheadline');
        $button_text          = get_sub_field('button_text');
        $button_link          = get_sub_field('button_link');
        ?>

        <div class="section section-cta-banner <?php echo ($type == "full") ? "fullwidth-banner" : "boxed-banner"; ?>">
          <div class="row row-samll">
            <div class="column">
              <div class="container">
              <?php if ($type != "full") : ?>
                <div class="bg-layer">
                  <div class="bg-inner">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                  </div>
                </div>
              <?php endif; ?>
                <div class="content-wrapper">
                  <div class="header">
                  <?php
                    if ($headline) :
                      echo '<h2 class="small">' . $headline . '</h2>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="subheading">' . $subheadline . '</h3>';
                    endif;?>
                  </div>

                  <div class="button-wrap">
										<a href="<?php echo $button_link; ?>" class="button <?php echo ($type != "full") ? "secondary reverse" : "primary"; ?>"><?php echo $button_text; ?></a>
                  </div>
                </div>
              </div>
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


      <?php
    /* --------------------------------------------
      Search Result Widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_search_result' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $prefix_result                = get_sub_field('prefix_result');
        $prefix_1_noresult            = get_sub_field('prefix_1_noresult');
        $prefix_2_noresult            = get_sub_field('prefix_2_noresult');
        $prefix_3_noresult            = get_sub_field('prefix_3_noresult');
        $headline_noresult            = get_sub_field('headline_noresult');

        $post_count                   = get_sub_field('post_count');

        ?>
        <div class="section section-search-result-header">
          <div class="row">
            <div class="columns">
              <div class="container">
              <?php 
                if( have_posts() ){
                  echo '<h3><strong>'.$wp_query->found_posts.' '.$prefix_result.'</strong></h3>';
                  echo '<h2><strong>'.get_search_query().'</strong></h2>';
                }
                else {
                  echo '<h3><strong>'.$prefix_1_noresult.'</strong></h3>';
                  echo '<h2>'.$prefix_2_noresult.'<strong>“'.get_search_query().'”</strong></h2>';
                  echo '<p>'.$prefix_3_noresult.'</p>';
                }
              ?>
              </div>
            </div>
          </div>
        </div>

        <div data-anchor="#post-grid" class="section section-post-grid <?php echo $custom_selector; ?>">
          <div class="row">
            <div class="columns">
              <div class="container">
                <?php 
                  

                  if( have_posts() ){
                    echo '<ul class="post-grid">';
                    while( have_posts() ): the_post();

                      echo '<li class="post-item">';
                      get_template_part( 'templates/custom-post-content', 'thumb');
                      echo '</li>';
                    endwhile;
                    echo '</ul>';

                    if ( !$current_page = get_query_var('paged') )
                      $current_page = 1;
                    // structure of "format" depends on whether we're using pretty permalinks
                    if($total > 1) {
                      echo '<div class="post-navigator">';
                      echo '<span class="prev">';
                      echo get_custom_previous_posts_link('&lsaquo;');
                      echo '</span>';
                    }
                    
                    echo paginate_links(array(
                      'prev_next'=> FALSE,
                      'current'  => $current_page,
                      'total'    => $total,
                      'mid_size' => 1,
                      'add_fragment'       => '#post-grid',
                      'type'     => 'list'
                    ));
                    if($total > 1) {
                      echo '<span class="next">';
                      echo get_custom_next_posts_link('&rsaquo;', $total);
                      echo '</span>';
                      echo'</div>';
                    }
                  }

                  else {
                    wp_reset_postdata();

                    if($headline_noresult) :
                      echo '<h3 class="text-left">'.$headline_noresult.'</h3>';
                    endif;

                    $args = array(
                      'post_type'       => 'engineering-blog',
                      'post_status'     => 'publish',
                      'posts_per_page'  => $post_num,
                      'orderby'         => 'date',
                      'order'           => 'DESC',
                      'paged'           => get_query_var('paged'),
                    );
              
                    $posts = new WP_Query( $args );
                    $total = $posts->max_num_pages;

                    if( $posts->have_posts() ){
                      echo '<ul class="post-grid">';
                      while( $posts->have_posts() ): $posts->the_post();
  
                        echo '<li class="post-item">';
                        get_template_part( 'templates/custom-post-content', 'thumb');
                        echo '</li>';
                      endwhile;
                      echo '</ul>';
                    }

                    wp_reset_postdata();
                  }

                ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>


    <?php endif; //end if layout ?>


	<?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>

</div>


<?php get_footer(); ?>