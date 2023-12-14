<?php
get_header(); 
?>

<div class="container new-style" role="document">

<?php
if ( have_rows('flexible_content_for_engineering_archive', 'option') ) :

  $postsMethod = new PostsMethod('engineering-blog');

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
                $postsMethod->get_featured_post($post_type); 
            ?>
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
          <div class="row">
            <div class="columns">
              <div class="container">
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
                $postsMethod->get_slider_posts($posts_count, $sort_by, null); 
              echo '</div>';
            ?>
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


    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
  
</div>
<?php else : ?>

		<!-- Start the main container -->
		<div class="container" role="document">
		<div class="row">

			<div class="small-12 medium-8 columns main-col">

				<!-- Row for main content area -->
				<div id="content" role="main">
					<div class="blog-header">
							<h1>Local Business Tips and Tricks</h1>
<p>Ideas for helping you manage your business and your employees. Plus product updates from Homebase, employee scheduling tools, and much more.</p>

						<h2 style="font-size:22px; font-style:italic;">Latest from the Homebase Blog:</h2>
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