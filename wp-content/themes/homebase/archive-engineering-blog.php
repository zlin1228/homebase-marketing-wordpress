<?php
get_header(); 
?>

<main id="primary" class="site-main" role="document">

<?php
if ( have_rows('flexible_content_for_engineering_archive', 'option') ) :

  $postsMethod = new PostMethod('engineering-blog');

  while ( have_rows('flexible_content_for_engineering_archive', 'option') ) : the_row();

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
        <div id="blog-navbar" class="section section-navbar blog-navbar hide-for-sm">
          <div class="nav-main">
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
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
          </div>
        </div>
      <?php endif;

    /* --------------------------------------------
      Featured post widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_featured_post' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $post_type                 = get_sub_field('post_type');
        $custom_post               = get_sub_field('custom_post');
        ?>

        <div class="section section-feaured-post">
          <div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
                  <?php
                    if($post_type == 'custom' && $custom_post ) {
                      foreach($custom_post as $post) : 
                        setup_postdata($post);
                        get_template_part( 'templates/custom-featured-post', 'content');
                      endforeach;
                      wp_reset_postdata();
                    }
                    else
                      $postsMethod->get_featured_post($post_type); 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          <div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
                  <?php 
                    if($headline) :
                    echo '<h3 class="text-left">'.$headline.'</h3>';
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
                      $postsMethod->get_grid_posts($posts_count, $sort_by, null, $subscribe); 
                  ?>
                </div>
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

      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline                    = get_sub_field('headline');
        $sort_by                     = get_sub_field('sort_by');
        $custom_selector             = get_sub_field('custom_selector');
        $custom_posts                = get_sub_field('custom_posts');
        $posts_count                 = get_sub_field('posts_count');
        ?>

        <div class="section section-post-slider <?php echo ($custom_selector)?>">
          <div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
                  <?php 
                    if($headline) :
                    echo '<h3 class="text-left">'.$headline.'</h3>';
                    endif;
                    echo '<div class="slider-wrapper">';

                    if($sort_by == 'custom' && $custom_posts ) {
                      echo '<div class="post-slider">';
                      foreach($custom_posts as $post) :  setup_postdata($post);
                        echo '<div class="post-item">';
                        get_template_part( 'templates/custom-post-content', 'nothumb');
                        echo '</div>';
                      endforeach;
                      echo '</div>';
                      
                      wp_reset_postdata();
                    }
                    else
                      $postsMethod->get_slider_posts($posts_count, $sort_by, null); 
                    echo '</div>';
                  ?>
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
          <div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
									<div class="banner-container">
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
                        echo '<h3 class="subheading fw-normal">' . $subheadline . '</h3>';
                      endif;?>
                      </div>

                      <div class="button-wrap">
                        <a href="<?php echo $button_link; ?>" class="button <?php echo ($type != "full") ? "primary reverse" : "primary"; ?>"><?php echo $button_text; ?></a>
                      </div>
                    </div>
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
          <div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
									<div class="text-box <?php echo ($add_border_top) ? 'top-border': '';?> <?php echo ($text_align);?>">
                    <div class="content-wrapper">
                      <?php

                      if ($logo) :?>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                      <?php endif;

                      if ($text) :
                        echo $text;
                      endif;?>
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

</main>


<?php get_footer(); ?>