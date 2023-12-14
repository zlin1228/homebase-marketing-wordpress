<?php
/*
Template Name: Post - New
*/

$state_list = get_state_array();

get_header(); ?>

<div class="container new-style">

<?php
if ( have_rows('flexible_content_for_engineering_post', 'option') ) :

  while ( have_rows('flexible_content_for_engineering_post', 'option') ) : the_row();

    /* --------------------------------------------
      features sub nav
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_sub_cat_nav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
           $hide_breadcrumbs         = get_sub_field('hide_breadcrumbs');
           $hide_searchbar           = get_sub_field('hide_searchbar');
           $nav_menu_name            = get_sub_field('nav_menu_name');
           $headline                 = get_sub_field('navbar_headline');
           $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div class="section blog-navbar hide-for-small">
          <div class="nav-header">
            <div class="row">
              <div class="column medium-8">
                <?php if ( !$hide_breadcrumbs ) : ?>
                <div class="yoast_breadcrumbs">
                  <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                  ?>
                </div>
                <?php endif; ?>
              </div>
              <div class="column medium-4">
                <?php if ( !$hide_searchbar ) : ?>
                <div class="search-widget">
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
                  <div class="search-control-button">
                      <a href="#" class="search-toggle" data-selector=".blog-navbar">Search</a>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif;
    endif; //end if layout
  endwhile; //end while main flex content ?>

<?php endif; ?>

<section class="post-banner text-center single">
	<div class="row header">
		<div class="columns">
      <div class="post-meta">
        <span class="meta-date"><?php the_time('F j, Y'); ?></span>
      </div>
			<h1><?php the_title(); ?></h1>
			<p class="post-author">By <span class="name"><?php the_author(); ?></span></p>
		</div>
  </div>
  <div class="featured-img">
    <?php the_post_thumbnail(); ?>
  </div>
</section>

<div class="main-container" role="document">
	<div class="row">
		<div class="columns main-col" role="main">
        <div class="content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    				<div class="entry-content">
    					<?php the_content(); ?>
    				</div>
    			<?php endwhile; endif; // End the loop ?>
        </div>
		</div>
		<!-- End Single Post Sidebar -->
	</div>

  <div class="post-block post-footer">
    <div class="row">
      <div class="columns">
        <?php if (!get_field('hide_share')) : ?>
          <div class="share-post-box">
            <span class="share-title">Share post on</span>
            <div class="inline-share-buttons center" id="st-1">
                  <?php
                  $urluncoded = get_the_permalink();
                  $url = urlencode( $urluncoded );
                  $title = urlencode( get_the_title() );
                  $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
                  ?>
                  <a class="st-btn st-first" data-network="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Facebook', '<?php echo $urluncoded ?>');">
										<img class="lazyload" alt="Share on Facebook" data-src="/wp-content/themes/grunterie-master/img/share-icons/facebook-nofill.svg">
                  </a>
									<a class="st-btn" data-network="twitter" target="_blank" rel="noopener" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'Twitter', '<?php echo $urluncoded ?>')">
										<img class="lazyload" alt="Share on Twitter" data-src="/wp-content/themes/grunterie-master/img/share-icons/twitter-nofill.svg">
                  </a>
									<a class="st-btn" data-network="linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'LinkedIn', '<?php echo $urluncoded ?>')">
										<img class="lazyload" alt="Share on LinkedIn" data-src="/wp-content/themes/grunterie-master/img/share-icons/linkedin-nofill.svg">
                  </a>
									<a class="st-btn st-last" data-network="pinterest" target="_blank" rel="noopener" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=<?php echo $img; ?>&description=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Pinterest', '<?php echo $urluncoded ?>');">
										<img class="lazyload" alt="Share on Pinterest" data-src="/wp-content/themes/grunterie-master/img/share-icons/pinterest-nofill.svg">
                  </a>
            </div>
          </div>
        <?php endif ; ?>

        <?php if (!get_field('hide_author_box')) : ?>
          <div class="blog-post-author-box">
            <?php
            $post_author_id = $post->post_author;
            $author_photo   = get_field('acf_user_photo', 'user_' . $post_author_id);
            $auhtor_descr   = get_the_author_meta('description');
            ?>
            <?php if ($author_photo) : ?>
              <div class="author-photo">
                <img src="<?php echo $author_photo; ?>" alt="">
              </div>
            <?php endif; ?>
              <div class="author-text">
                <strong><?php the_author(); ?></strong>
                <?php echo ($auhtor_descr) ? $auhtor_descr : ''; ?>
              </div>
            </div>
        <?php endif ; ?>

        <?php if (get_field('show_notice')) : ?>
          <div class="blog-post-notice">
            <?php
            $notice_text   = get_field('notice_text');
            ?>
            <div class="notice-container">
              <?php echo $notice_text; ?>
            </div>
          </div>
        <?php endif ; ?>
      </div>
    </div>
  </div>
</div>


<?php

if ( have_rows('flexible_content_for_engineering_post', 'option') ) :

$postsMethod = new PostsMethod('engineering-blog');

while ( have_rows('flexible_content_for_engineering_post', 'option') ) : the_row();

  /* --------------------------------------------
    Post grid widget
  -------------------------------------------- */
  if ( get_row_layout() == 'flex_post_grid' ) : ?>

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

      <div class="section section-post-slider <?php echo ($custom_selector)?> <?php echo ($section_index)?>">
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

      <div class="section section-spec-text <?php echo ($widget_type);?> <?php echo ($section_index);?>">
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

<?php endif; ?>

</div>

<?php get_footer(); ?>