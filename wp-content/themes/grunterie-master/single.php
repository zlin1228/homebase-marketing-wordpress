<?php
/*
Template Name: Post - New
*/

$state_list = get_state_array();

get_header(); ?>

<div class="container new-style">
<?php
if ( have_rows('flexible_content_for_post', 'option') ) :

  while ( have_rows('flexible_content_for_post', 'option') ) : the_row();

    /* --------------------------------------------
      features sub nav
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_sub_cat_nav' && get_the_ID() != '17104') : ?>
      <?php if (!get_sub_field('hide_widget')) : 
          $headline                 = get_sub_field('navbar_headline');
          $hide_searchbar           = get_sub_field('hide_searchbar');
          $hide_nav_menu           = get_sub_field('hide_nav_menu');
          $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div class="section blog-navbar hide-for-small">
          <div class="nav-header">
            <div class="row">
              <div class="column medium-8">
                <div class="yoast_breadcrumbs">
                  <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                  ?>
                </div>
              </div>
              <div class="column medium-4">
                <div class="search-widget">
                  <div class="nav-searchbar">
                    <?php if (!$hide_searchbar) : ?>
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
                  <div class="search-control-button">
                      <a href="#" class="search-toggle" data-selector=".blog-navbar">Search</a>
                  </div>
                </div>
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
        <?php
          $category = get_the_category();
          $category_link = get_category_link($category[0]);
        ?>
        <span class="category"><?php echo $category[0]->cat_name;?></span>
        <span class="center-border">|</span>
        <span class="meta-date"><?php the_time('F j, Y'); ?></span>
      </div>
			<h1><?php the_title(); ?></h1>
			<p class="post-author">By <span class="name"><?php the_author(); ?></span></p>

      <?php if (!get_field('hide_share')) : ?>
          <div class="share-post-box">
            <span class="share-title">Share this article</span>
            <div class="share-buttons center" id="st-1">
              <?php
              $urluncoded = get_the_permalink();
              $url = urlencode( $urluncoded );
              $title = urlencode( get_the_title() );
              $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
              ?>
              <a class="st-btn st-share" data-network="twitter" target="_blank" rel="noopener" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'Twitter', '<?php echo $urluncoded ?>')">
                  <img alt="Share on Twitter" src="/wp-content/themes/grunterie-master/img/share-icons/twitter.svg">
              </a>
              <a class="st-btn st-share" data-network="linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'LinkedIn', '<?php echo $urluncoded ?>')">
                  <img alt="Share on LinkedIn" src="/wp-content/themes/grunterie-master/img/share-icons/linkedin.svg">
              </a>
              <a class="st-btn st-share" data-network="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Facebook', '<?php echo $urluncoded ?>');">
                  <img alt="Share on Facebook" src="/wp-content/themes/grunterie-master/img/share-icons/facebook.svg">
              </a>
              <a class="st-btn st-connection" href="#">
                  <span class="tooltiptext"></span>
                  <img alt="Copy link" src="/wp-content/themes/grunterie-master/img/share-icons/connection.svg">
              </a>
            </div>
          </div>
        <?php endif ; ?>
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
    			<?php /* Start loop */ ?>
    			<?php while (have_posts()) : the_post(); ?>

    				<div class="entry-content">
    					<?php the_content(); ?>
    				</div>
    			<?php endwhile; // End the loop ?>
        </div>
		</div>
		<!-- End Single Post Sidebar -->
	</div>

  <div class="post-block post-footer">
    <div class="row">
      <div class="columns">
        <?php if (!get_field('hide_share')) : ?>
          <div class="share-post-box">
            <span class="share-title">Share this article</span>
            <div class="share-buttons center" id="st-1">
              <?php
              $urluncoded = get_the_permalink();
              $url = urlencode( $urluncoded );
              $title = urlencode( get_the_title() );
              $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
              ?>
              <a class="st-btn st-share" data-network="twitter" target="_blank" rel="noopener" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'Twitter', '<?php echo $urluncoded ?>')">
                  <img class="lazyload" alt="Share on Twitter" data-src="/wp-content/themes/grunterie-master/img/share-icons/twitter.svg">
              </a>
              <a class="st-btn st-share" data-network="linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'social', 'share', 'LinkedIn', '<?php echo $urluncoded ?>')">
                  <img class="lazyload" alt="Share on LinkedIn" data-src="/wp-content/themes/grunterie-master/img/share-icons/linkedin.svg">
              </a>
              <a class="st-btn st-share" data-network="facebook" target="_blank" rel="noopener" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" onclick="ga('send', 'event', 'social', 'share', 'Facebook', '<?php echo $urluncoded ?>');">
                  <img class="lazyload" alt="Share on Facebook" data-src="/wp-content/themes/grunterie-master/img/share-icons/facebook.svg">
              </a>
              <a class="st-btn st-connection" href="#">
                  <span class="tooltiptext"></span>
                  <img class="lazyload" alt="Copy link" data-src="/wp-content/themes/grunterie-master/img/share-icons/connection.svg">
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

if ( have_rows('flexible_content_for_post', 'option') ) :

$postsMethod = new PostsMethod();

while ( have_rows('flexible_content_for_post', 'option') ) : the_row();

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
  elseif ( get_row_layout() == 'flex_post_slider' && get_the_ID() != '17104' ) : ?>

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
                        id="locationstate"
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