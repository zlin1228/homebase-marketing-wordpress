<?php
/*
Template Name: Like a blog
*/
get_header(); 

$state_list = get_state_array(); 
?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">

	<section class="post-banner text-center single">
		<div class="container">
			<div class="row header">
				<div class="col col-12">
					<div class="col-inner">
						<div class="post-meta">
							<span class="meta-date"><?php the_time('F j, Y'); ?></span>
						</div>
						<h1 class="small fw-black"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
	  </div>
	  
	  <?php if ( get_field('hero_banner_new_image') ) { 
	  	$hero_banner_new_image = get_field('hero_banner_new_image'); ?>
		  <div class="featured-img-new">
		  	<img src="<?php echo $hero_banner_new_image['url']; ?>" alt="<?php echo $hero_banner_new_image['alt']; ?>">
		  </div>
	  <?php }
	  else {  ?>
		  <div class="featured-img">
		    <?php the_post_thumbnail(); 
		} ?>  	
		  </div>  
	</section>

<?php

if ( have_rows('flexible_content') ) :

$postMethod = new PostMethod();

while ( have_rows('flexible_content') ) : the_row();

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
	                  $postMethod->get_grid_posts($posts_count, $sort_by, null, $subscribe); 
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
										$postMethod->get_slider_posts($posts_count, $sort_by, null); 
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

	<?php
  /* --------------------------------------------
    Bottom CTA Widget
  -------------------------------------------- */
  elseif ( get_row_layout() == 'post_bottom_cta' ) : ?>
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

  <?php 
  /* --------------------------------------------
    Features sub nav
  -------------------------------------------- */
  elseif ( get_row_layout() == 'flex_sub_cat_nav' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : 
        $headline                 = get_sub_field('navbar_headline');
        $hide_searchbar           = get_sub_field('hide_searchbar');
        $hide_nav_menu           = get_sub_field('hide_nav_menu');
        $placeholder              = get_sub_field('search_placeholder');
      ?>
        <div class="section blog-navbar hide-for-md-down">
          <div class="nav-header">
						<div class="container">
							<div class="row">
								<div class="col col-12 col-sm-7">
									<div class="col-inner">
										<div class="yoast_breadcrumbs">
											<?php
												if ( function_exists('yoast_breadcrumb') ) {
													yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
												}
											?>
										</div>
									</div>
			          </div>
								<div class="col col-12 col-sm-5">
									<div class="col-inner">
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
          </div>
        </div>
      <?php endif;?>

  <?php
  /* --------------------------------------------
    Simple one column
  -------------------------------------------- */
  elseif ( get_row_layout() == 'simple_one_column' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $content            = get_sub_field('content');
          ?>
          <div class="section section-simple-one-column <?php echo ($id) ? "id='".$id."'" : '';?>">
            <div class="container-narrow">
              <?php if ($content) : ?>
                <div class="content"><?php echo $content; ?></div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

  <?php
  /* --------------------------------------------
    FAQs widget
  -------------------------------------------- */
  elseif ( get_row_layout() == 'flex_faq' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $id               = get_sub_field('widget_id');
      $headline         = get_sub_field('headline');
      $image_d          = get_sub_field('image_d');
      $image_m          = get_sub_field('image_m');
      ?>

        <div class="section section-faqs" <?php echo ($id) ? "id='".$id."'" : '';?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <?php endif; ?>
                    <?php if ($image_d) : ?>
                      <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
                    <?php endif; ?>
                    <?php if ($image_m) : ?>
                      <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <?php if(have_rows('faqs')) : ?>
                    <?php while(have_rows('faqs')) :  the_row(); 
                      $faq_field         = get_sub_field('faq_field');
                      $question          = get_sub_field('question');
                      $answers           = get_sub_field('answers'); ?>
                      <div class="faq-item text-left">
                        <?php if ($faq_field) : ?>
                        <div class="field"><?php echo $faq_field; ?></div>
                        <?php endif; ?>
                        <h3 class="subheading fw-bold"><?php echo $question; ?></h3>
                        <?php echo $answers; ?>
                      </div>
                    <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php 
  
      global $schema;

      $schema = array(
      '@context'   => "https://schema.org",
      '@type'      => "FAQpage",
      'mainEntity' => array()
      );

      if ( have_rows('faqs') ) {
        while ( have_rows('faqs') ) : the_row();
          $questions = array(
            '@type'          => 'Question',
            'name'           => get_sub_field('question'),
            'acceptedAnswer' => array(
            '@type' => "Answer",
            'text' => get_sub_field('answers')
              )
              );
              array_push($schema['mainEntity'], $questions);
        endwhile;

      function bloglike_generate_faq_schema ($schema) {
        global $schema;
        if ($schema['mainEntity']) {
          echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
        }
      }
      add_action( 'wp_footer', 'bloglike_generate_faq_schema', 100 );
      }

      ?>

  <?php
  /* --------------------------------------------
    Meet the owners
  -------------------------------------------- */
  elseif ( get_row_layout() == 'flex_mto' ) : ?>
      <?php if (!get_sub_field('mto_hide_widget')) : ?>
        <div class="meet-the-owners-block">
					<?php if( have_rows('meet_the_owners_row') ):?>
						<div class="container">
							<h2>Meet the owners</h2>
						</div>				
						<div class="meet-the-owners">
							<?php 
		   				 	while( have_rows('meet_the_owners_row') ) : the_row();
		   					  $mto_image                = get_sub_field('mto_image');
						      $mto_name                 = get_sub_field('mto_name');
						      $mto_company              = get_sub_field('mto_company');
						      $mto_text              	= get_sub_field('mto_text');
						    ?>
		   				<div class="container">
		   					<div class="mto-image col-md-3"><img src="<?php echo $mto_image['url']; ?>" alt="<?php $mto_image['alt']; ?>"></div>
		   					<div class="mto-text-wrapper col-md-9">
		   						<div class="mto-name"><?php echo $mto_name; ?></div>
		   						<div class="mto-company"><?php echo $mto_company; ?></div>
		   						<div class="mto-text"><?php echo $mto_text; ?></div>
		   					</div>
		   				</div>
		   					<?php endwhile; ?>
		   			</div>
					<?php endif; ?>
				</div>
      <?php endif; ?>


  <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>