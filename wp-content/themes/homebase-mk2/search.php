<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Homebase
 */

global $wp_query;

$total = $wp_query->max_num_pages;

$state_list = get_state_array();


get_header();
?>

<main id="primary" class="site-main" role="document">

<?php
if ( have_rows('flexible_content_for_search', 'option') ) :

  $postMethod = new PostMethod();

  while ( have_rows('flexible_content_for_search', 'option') ) : the_row();

    /* --------------------------------------------
      features sub nav
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_sub_cat_nav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
          $headline                 = get_sub_field('navbar_headline');
          $hide_navbar              = get_sub_field('hide_searchbar');
          $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div id="blog-navbar" class="section section-navbar blog-navbar hide-for-sm">
          <div id="nav-header" class="nav-header">
						<div class="container">
							<div class="row">
								<div class="col col-12">
									<div class="col-inner">
										<h1><?php echo $headline; ?></h1>
									</div>
								</div>
							</div>
						</div>
          </div>

          <div class="nav-main">
						<div class="container">
							<div class="row">
								<div class="col col-12">
									<div class="col-inner">
										<div class="nav-wrapper">
											<?php wp_nav_menu( array('theme_location' => 'blog-nav', 'menu-class' => 'blog-nav') ); ?>
											<div class="search-widget">
												<div class="search-control-button">
													<a href="#" class="search-toggle" data-selector=".blog-navbar">Search</a>
												</div>
												<div class="nav-searchbar">
												<?php if (!get_sub_field('hide_navbar')) : ?>
													<form role="search" method="get" id="searchform" class="search-box" action="<?php echo home_url('/'); ?>">
														<div class="search-button">
															<input type="submit" id="searchbtn" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="searchbtn">
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
          </div>
        </div>
      <?php endif;
			
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
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
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
        </div>

        <div data-anchor="#post-grid" class="section section-post-grid">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
                <?php 
                  if( have_posts() ){
                    echo '<ul class="post-grid">';
                    while( have_posts() ): the_post();

                      echo '<li class="post-item">';
                      get_template_part('template-parts/article', 'thumb');
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
                      'post_type'       => 'post',
                      'post_status'     => 'publish',
                      'posts_per_page'  => $post_count,
                      'orderby'         => 'modified',
                      'order'           => 'DESC',
                      'paged'           => get_query_var('paged'),
                    );
              
                    $posts = new WP_Query( $args );
                    $total = $posts->max_num_pages;

                    if( $posts->have_posts() ){
                      echo '<ul class="post-grid">';
                      while( $posts->have_posts() ): $posts->the_post();
  
                        echo '<li class="post-item">';
                        get_template_part('template-parts/article', 'thumb');
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
											</div>
										</div>
									<?php endif; ?>
										<div class="content-wrapper">
											<div class="header">
											<?php

											if ($headline) :
												echo '<h2>' . $headline . '</h2>';
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
													<div class="form-item input">
														<input class="homeform <?php echo $item_type; ?>"
																aria-label="email address"
																type="email"
																name="email"
																placeholder="Email address"
														/>
													</div>
													<div class="form-item input">
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
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="col-inner">
									<div class="text-box <?php echo ($add_border_top) ? 'top-border': '';?> <?php echo ($text_align);?>">
										<div class="content-wrapper">
											<?php

											if ($logo) :?>
												<img class="lazyload" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
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

    <?php
    /* --------------------------------------------
      Bottom CTA Widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'search_bottom_cta' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $text                   = get_sub_field('text');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');

        ?>

				<div class="section section-bottom-cta">
					<div class="container">
						<?php if ($text) : ?>
							<div class="text">
								<?php echo $text; ?>
							</div>
						<?php endif; ?>
						<?php if ($button_link) : ?>
								<a class="button primary" href="<?php echo $button_link ?>"><?php echo $button_text; ?></a>							
						<?php endif; ?>
					</div>
        </div>
      <?php endif; ?>


    <?php endif; //end if layout ?>
	<?php endwhile; //end while main flex content ?>
	
<?php endif; //end if ?>

</main><!-- #main -->

<?php
get_footer();

