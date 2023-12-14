<?php
/*
Template Name: Scheduling
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">
<?php
  if ( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'flex_hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                       = get_sub_field('widget_id');
        $class                    = get_sub_field('widget_class');
        $add_bg                   = get_sub_field('add_background');
        $bg_color                 = get_sub_field('bg_color');
        $seotitle                 = get_sub_field('seo_title');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $ctatype                  = get_sub_field('cta_type');
        $button_text              = get_sub_field('button_text');
        $form_link                = get_sub_field('form_link');
        $caption                	= get_sub_field('caption');
        $button_link              = get_sub_field('button_link');
        $right_btn_text           = get_sub_field('right_btn_text');
        $right_btn_link           = get_sub_field('right_btn_link');
        $sub_text_after_btns      = get_sub_field('sub_text_after_btns');
        $f_image                  = get_sub_field('f_image');
        $b_image                  = get_sub_field('b_image');
        $center_image             = get_sub_field('center_image');
        $add_l_margin             = get_sub_field('add_l_margin');
        $f_max_width              = get_sub_field('f_max_width');
        $b_max_width              = get_sub_field('b_max_width');
        $hero_type_of_media       = get_sub_field('hero_type_of_media');
        $hero_video               = get_sub_field('hero_video');
        $video_popup_link         = get_sub_field('video_popup_link');
        $video_popup_placeholder  = get_sub_field('video_popup_placeholder');
        $hero_default_show        = get_sub_field("default_show");
        ?>

          <div class="section section-hero <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <?php if ($add_bg) : ?>
              <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
            <?php endif; ?>
            <div class="container">
              <div class="row v-align-middle equal-height">
                <div class="col-left col col-12 col-sm-6">
                  <div class="col-inner">
                    <div class="text-wrapper <?php echo ($add_l_margin) ? '' : 'nomargin';?>">
                      <?php
                      // headline
                      if ($seotitle) :
                        echo '<h1 class="seo-title micro">' . $seotitle . '</h1>';
                      endif;

                      if ($headline) :
                        echo '<h2 class="fw-black">' . $headline . '</h2>';
                      endif;

                      if ($subheadline) :
                        echo '<p class="subheading normal">' . $subheadline . '</p>';
                      endif;?>

                      <?php if ($ctatype == "form") : ?>

                        <form novalidate action="<?php echo $form_link; ?>"
                          id="hero-signup-form"
                          method="GET"
                          class="email-signup-form">                      	
                          <div class="form-item input">
                            <input class="homeform"
                              aria-label="email address"
                              type="email"
                              name="email"
                              placeholder="Email address"
                            />
                          </div>
                          <div class="form-item">
                            <button type="submit"
                                aria-label="submit"
                                id="create-account"
                                name="Submit"
                                class="primary"
                            ><?php echo $button_text; ?></button>
                          </div>
                        </form>
                        <?php if ($caption ) : ?>
                        <div class="caption"><?php echo $caption; ?></div>
                        <?php endif; ?>

                      <?php elseif($ctatype == "button") : ?>
                        <div class="hero-btns-wrap">

                          <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>

                          <?= ( !empty($sub_text_after_btns) )? "<p class='hero-sub-text-for-mob'>". $sub_text_after_btns ."</p>" : ""; ?>

                          <?php if(!empty($right_btn_text)){ ?>
                            <a rel="nofollow" class="button right-btn-7843678" href="<?= $right_btn_link ?>"><?= $right_btn_text ?></a>
                          <?php } ?>

                        </div>

                        <?= ( !empty($sub_text_after_btns) )? "<p class='hero-sub-text-after-btns'>". $sub_text_after_btns ."</p>" : ""; ?>
                      <?php else: ?>
                        <div class="form-wrap <?= ($hero_default_show != "form")? 'hb-hide' : ''; ?>">
                          
                          <form novalidate action="<?php echo $form_link; ?>"
                            id="hero-signup-form"
                            method="GET"
                            class="email-signup-form">                        
                            <div class="form-item input">
                              <input class="homeform"
                                aria-label="email address"
                                type="email"
                                name="email"
                                placeholder="Email address"
                              />
                            </div>
                            <div class="form-item">
                              <button type="submit"
                                  aria-label="submit"
                                  id="create-account"
                                  name="Submit"
                                  class="primary"
                              ><?php echo $button_text; ?></button>
                            </div>
                          </form>
                          <?php if ($caption ) : ?>
                          <div class="caption"><?php echo $caption; ?></div>
                          <?php endif; ?>

                        </div>

                        <div class="hero-btn-main-wrap <?= ($hero_default_show != "button")? 'hb-hide' : ''; ?>">
                          
                          <div class="hero-btns-wrap">

                            <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>

                            <?= ( !empty($sub_text_after_btns) )? "<p class='hero-sub-text-for-mob'>". $sub_text_after_btns ."</p>" : ""; ?>

                            <?php if(!empty($right_btn_text)){ ?>
                              <a rel="nofollow" class="button right-btn-7843678" href="<?= $right_btn_link ?>"><?= $right_btn_text ?></a>
                            <?php } ?>

                          </div>

                          <?= ( !empty($sub_text_after_btns) )? "<p class='hero-sub-text-after-btns'>". $sub_text_after_btns ."</p>" : ""; ?>


                        </div>

                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <?php if ( $hero_type_of_media == "video_popup" && $video_popup_link ) : ?>
                <div class="hero-video-popup col col-12 col-sm-6 col-right">
                  <div class="hero-video-wrapper">
                    <a id="hero-popup-video" href="<?php echo $video_popup_link; ?>">
                      <?php if ($video_popup_placeholder ) : ?>
                      <img src="<?php echo $video_popup_placeholder['url']; ?>" alt="<?php echo $video_popup_placeholder['alt']; ?>">
                      <?php endif; ?>
                    </a>
                  </div>                                
                </div>
                <?php endif; ?>  
                <?php if ( $hero_type_of_media == "video" && $hero_video ) : ?>
                <div class="hero-video col col-12 col-sm-6 col-right">
                  <div class="hero-video-wrapper">
                    <?php echo $hero_video; ?>  
                  </div>                                
                </div>
                <?php endif; ?>  
                <?php if ( $hero_type_of_media == "image" ) : ?>
                <div class="col col-12 col-sm-6 col-right <?php echo ($center_image) ? 'center' : '';?>">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($b_image ) : ?>
                      <div class="img-wrapper img-wrapper-main" <?php echo ($b_max_width) ? "style='width:".$b_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $b_image, 'full', '', array( "class" => "hero-img parallax-content1" ) ); ?>
                      </div>
                      <?php endif; ?>

                      <?php if ($f_image ) : ?>
                      <div class="img-wrapper img-wrapper-sub" <?php echo ($f_max_width) ? "style='width:".$f_max_width."'" : '';?>>
                        <?php echo wp_get_attachment_image( $f_image, 'full', '', array( "class" => "hero-img-sub parallax-content2" ) ); ?>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>  
              </div>              
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Features sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) :
        if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $nav_menu_name      = get_sub_field('menu_name');?>
          
          <div class="section section-navbar feature-navbar" data-scroll-sticky <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php wp_nav_menu( array('menu' => $nav_menu_name, 'menu_class' => 'features-sub', 'container_class' => 'features-sub-container') ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Slider
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_slider' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $class                  = get_sub_field('widget_class');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_url            	= get_sub_field('button_url');
        ?>

          <div class="section section-slider <?= $class ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ($subheadline) : ?>
                <h3 class="subheading">
                  <?php echo $subheadline; ?>
                </h3>
              <?php endif; ?>
              <div class="content">
              	<div class="col-left col-sm-5">
              		<?php if ( have_rows('items') ) : ?>
	                  <?php while ( have_rows('items') ) : the_row();
	                    $title    	= get_sub_field('title');
	                    $subtitle   = get_sub_field('subtitle');
	                    $image    	= get_sub_field('image');?>
	                    <div class="item">
	                      <?php if ($title) : ?>
	                        <div class="title">
	                          <h3><?php echo $title; ?></h3>
	                          <img src="/wp-content/themes/homebase/images/scheduling-slider-arrow.svg">
	                        </div>
	                      <?php endif; ?>
	                      <?php if ($subtitle) : ?>
	                      	<div class="subtitle">
	                      		<?php echo $subtitle; ?>
	                      	</div>
	                      <?php endif; ?>
	                      <div class="progress-bar-wrapper">
	                      	<div class="progress-bar"></div>
	                      </div>
	                      <?php if ($image) : ?>
	                        <div class="image">
	                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	                        </div>
	                      <?php endif; ?>
	                    </div>
	                  <?php endwhile; ?>
	                  <?php if ($button_url) : ?>
			                <div class="button-wrapper">
			                  <a class="button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
			                </div>
			              <?php endif; ?>
		              <?php endif; ?>
              	</div>
              	<div class="col-right col-sm-6">
              		<?php if ( have_rows('items') ) : ?>
	                  <?php while ( have_rows('items') ) : the_row();
	                    $image    	= get_sub_field('image');?>
	                    <div class="item">
	                      <?php if ($image) : ?>
	                        <div class="image">
	                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	                        </div>
	                      <?php endif; ?>
	                    </div>
	                  <?php endwhile; ?>
		              <?php endif; ?>
              	</div>
              </div>
              
              
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_customer_quote' ) :
        if (!get_sub_field('hide_widget')) : 
          $id               = get_sub_field('widget_id');
          $quote            = get_sub_field('quote');
          $image_bg       	= get_sub_field('image_bg');
          $image      			= get_sub_field('image');
          $name             = get_sub_field('name');
          $company          = get_sub_field('company');
          $who_is           = get_sub_field('who_is');
          ?>
          
          <div class="section section-customer-quote" <?php echo ($image_bg) ? "style='background-image: url(".$image_bg['url'].");'" : '';?> <?php echo ($id) ? "id='".$id."'" : '';?>>
          	<div class="container-narrow">
          		<div class="col-left col-sm-5">
	          		<?php if ($image) : ?>
		            <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
		            <?php endif; ?>
	          	</div>
	          	<div class="col-right col-sm-7">
	          		<?php if ($quote) : ?>
		            <div class="quote">
		              <p><?php echo $quote; ?></p>
		            </div>
		            <?php endif; ?>
		            <div class="author-info">
		              <?php if ($name) : ?>
		              <div class="name">
		                <p><?php echo $name; ?></p>
		              </div>
		              <?php endif; ?>
		              <div class="divider"></div>
		              <?php if ($company || $who_is) : ?>
		              <div class="info">
		                <p class="company"><?php echo $company; ?></p>
		                <p class="whois"><?php echo $who_is; ?></p>
		              </div>
		              <?php endif; ?>
		            </div>
	          	</div>
          	</div>          	
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        POS integrations widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_pos' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                       = get_sub_field('widget_id');
        $add_link                 = get_sub_field('add_link');
        $headline                 = get_sub_field('headline');
        $subheadline              = get_sub_field('subheadline');
        $link_text                = get_sub_field('link_text');
        $link_url                 = get_sub_field('link_url');
        $posts                    = get_sub_field('integrations');
        ?>

          <div class="section section-integration" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-sm-12 text-center">
                  <div class="col-inner">
                    <div class="section-header">
                      <?php if ($headline) : ?>
                        <h3 class="fw-black"><?php echo $headline; ?></h3>
                      <?php endif; ?>
                      <?php if ($subheadline) : ?>
                        <h3 class="subheading normal"><?php echo $subheadline; ?></h3>
                      <?php endif; ?>
                    </div>
                    <?php if ($posts) : ?>
                      <ul class="integrations-grid">
                      <?php foreach($posts as $post) : ?>
                        <?php 
                          setup_postdata($post);
                          $img = get_field('logo');

                          if ($img) : 
                        ?>
                          <li class="post-item"><img src="<?php echo $img; ?>" alt="<?php the_title(); ?>"></li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </ul>
                      <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <?php if ($add_link) : ?>
                      <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Signup CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_signup_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-signup-banner" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="section-inner <?php echo $color; ?>">
              <div class="container-narrow">
                <div class="row">
                  <div class="col col-12">
                    <div class="col-inner">
                      <div class="banner-container">
                        <div class="row v-align-middle">
                          <div class="col col-12 col-sm-8 col-left">
                            <div class="col-inner">
                              <?php
                              if ($headline) :
                                echo '<h3 class="fw-black">' . $headline . '</h3>';
                              endif;
                              if ($subheadline) :
                                echo '<p>' . $subheadline . '</p>';
                              endif;
                              ?>
                            </div>
                          </div>
                          <div class="col col-12 col-sm-4 col-right">
                            <div class="col-inner">
                              <div>
                              <a class="button primary" href="<?php echo $button_link; ?>">
                                <?php echo $button_text; ?>
                              </a>
                              </div>
                            </div>
                          </div>
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
        Rating widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_rating' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                 = get_sub_field('widget_id');
        $type               = get_sub_field('widget_type');
        $headline           = get_sub_field('headline');
        $subheadline        = get_sub_field('subheadline');
        $r_date             = get_sub_field('r_date');
        ?>

          <div class="section section-rating <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="bglayer"></div>
            <div class="container">
              <div class="row v-align-middle">
                <div class="col col-12 <?php echo ($type == 'fullbg') ? 'col-xl-4' : ''; ?>">
                  <div class="col-inner">
                    <div class="rating-header">
                      <?php

                      if ($headline) :
                        echo '<h2 class="'.(($type == "fullbg") ? 'large' : '').' fw-black">' . $headline . '</h2>';
                      endif;

                      if ($subheadline) :
                        echo '<h3 class="normal '.(($type == "halfbg") ? 'subheading' : '').'">' . $subheadline . '</h3>';
                      endif;?>                      
                    </div>
                  </div>
                </div>
                <div class="col col-12 <?php echo ($type == 'fullbg') ? 'col-xl-8' : ''; ?>">
                  <div class="col-inner">
                    <div class="col-board-wrapper">
                      <div class="rating-container">
                        <div class="rating-board">
                          <?php if ( have_rows('ratings') ) : $index = 0;
                              while ( have_rows('ratings') ) : the_row();
                                  $r_image        = get_sub_field('r_image');
                                  $r_label        = get_sub_field('r_label');
                                  $r_quote        = get_sub_field('r_quote');
                                  $p_logo         = get_sub_field('p_logo');
                                  $p_url          = get_sub_field('p_url');
                              if (($type == 'fullbg') && ($index == 3)) break;
                          ?>
                            
                              <div class="rating-box">
                                <div class="rscore"><object data="<?php echo $r_image['url']; ?>" type="image/svg+xml" alt="<?php echo $r_image['alt'];?>"><?php echo $r_image['alt'];?></object></div>
                                <div class="rlabel"><?php echo $r_label; ?></div>
                                <div class="rquote"><?php echo $r_quote; ?></div>
                                <div class="plogo">
                                  <?php if ($p_url) : ?><a href="<?php echo $p_url; ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                                    <?php echo wp_get_attachment_image( $p_logo, 'full' ); ?>
                                  <?php if ($p_url) : ?></a><?php endif; ?>
                                </div>
                              </div>
                            </a>
                          <?php 
                              $index++;
                              endwhile;
                            endif; 
                          ?>
                        </div>

                        <?php if ($r_date) : ?>
                          <div class="rating-date text-center micro">
                            <?php echo $r_date; ?>
                          </div>
                        <?php endif; ?>
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
        Features
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_features' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        ?>

          <div class="section section-features" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ( have_rows('feature') ) : ?>
                <div class="features">
                  <?php while ( have_rows('feature') ) : the_row();
                    $title   = get_sub_field('title');?>
                    <div class="feature">
                    	<?php if ($title) : ?>
                        <div class="title">
                          <h3 class="micro"><?php echo $title; ?></h3>
                          <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                        </div>
                      <?php endif; ?> 
                      <?php if ( have_rows('list') ) : ?>
                      	<ul class="tick">
                      		<?php while ( have_rows('list') ) : the_row();
                    			$list_item   = get_sub_field('list_item');?>
                    				<li><?php echo $list_item; ?></li>
                    			<?php endwhile; ?>
                      	</ul>
                      <?php endif; ?>        
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>        

      <?php
      /* --------------------------------------------
        FAQ
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        ?>

          <div class="section section-faq" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
                <h2 class="headline">
                  <?php echo $headline; ?>
                </h2>
              <?php endif; ?>
              <?php if ( have_rows('items') ) : ?>
                <div class="faq-items">
                  <?php while ( have_rows('items') ) : the_row();
                    $question    = get_sub_field('question');
                    $answer      = get_sub_field('answer');
                    $faq_field   = get_sub_field('faq_field');?>
                    <div class="faq-item">
                    	<?php if ($faq_field) : ?>
                        <div class="faq-field">
                          <p class="micro"><?php echo $faq_field; ?></p>
                        </div>
                      <?php endif; ?>
                      <?php if ($question) : ?>
                        <div class="question">
                          <p><?php echo $question; ?></p>
                          <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                        </div>
                      <?php endif; ?>
                      <?php if ($answer) : ?>
                      	<div class="answer">
                      		<?php echo $answer; ?>
                      	</div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
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

        if ( have_rows('items') ) {
          while ( have_rows('items') ) : the_row();
            $questions = array(
              '@type'          => 'Question',
              'name'           => get_sub_field('question'),
              'acceptedAnswer' => array(
              '@type' => "Answer",
              'text' => get_sub_field('answer')
                )
                );
                array_push($schema['mainEntity'], $questions);
          endwhile;

        function blog_generate_faq_schema ($schema) {
          global $schema;
          if ($schema['mainEntity']) {
            echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
          }
        }
        add_action( 'wp_footer', 'blog_generate_faq_schema', 100 );
        }

        ?>

      <?php
      /* --------------------------------------------
        Footer CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $align                  = get_sub_field('align');
        $stype                  = get_sub_field('stype');
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-cta-banner" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="banner-wrapper <?php echo 'aligned-'.$align; ?> <?php echo 'shape-'.$stype; ?>">
                      <div class="bg-layer">
                        <div class="bg-inner">
                          <div class="shape-1"></div>
                          <div class="shape-2"></div>
                          <div class="shape-3"></div>
                        </div>
                      </div>
                      <?php if ($content) : ?>
                        <h3 class="normal"><?php echo $content; ?></h3>
                      <?php endif; ?>
                      <?php if ($button_text) : ?>
                        <a class="button primary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
        Try Demo
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_try_demo' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                         = get_sub_field('widget_id');
        $content                    = get_sub_field('content');
        $back_page_text_for_desktop = get_sub_field("back_page_text");
        $back_page_text_for_mobile  = get_sub_field("back_page_text_for_mobile");
        $back_page_link             = get_sub_field("back_page_link");
        $section_heading            = get_sub_field("section_heading");
        $section_sub_heading        = get_sub_field("section_sub_heading");

        ?>

          <div class="section section-try-demo" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="bg-layer lpink">
              <div class="bg-inner"></div>
            </div>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <? if( !empty($back_page_text_for_desktop ) ){ ?>

                      <a class="back-text for-desktop" href="<?= $back_page_link ?>">
                        <img src='/wp-content/themes/homebase/images/arrow-894379843.svg'>
                        <?= $back_page_text_for_desktop ?>
                      </a>
                      <a class="back-text for-mobile" href="<?= $back_page_link ?>">
                        <img src='/wp-content/themes/homebase/images/arrow-894379843.svg'>
                        <?= $back_page_text_for_mobile ?>
                      </a>
                    <?php } ?>
                    <h1 class="try-demo"><?= $section_heading ?></h1>
                    <h3><?= $section_sub_heading ?></h3>
                    <?= get_sub_field("flex_content") ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php
      /* --------------------------------------------
        Bottom Floating CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_floating_bottom_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $text_1                 = get_sub_field('text_1');
        $text_2                 = get_sub_field('text_2');
        $cta_btn_text           = get_sub_field('cta_btn_text');
        $cta_btn_link           = get_sub_field('cta_btn_link');
        ?>

          <div class="section section-bottom-floating-cta" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-6 col-left">
                  <div class="col-inner">
                    <p class="text-1"><?= $text_1 ?></p>
                    <p class="text-2"><?= $text_2 ?></p>
                </div>
              </div>
              <div class="col col-6 col-right">
                  <div class="col-inner">
                  <?php if(!empty($cta_btn_text)){ ?>
                    <a class="button cta-btn" href="<?= $cta_btn_link ?>"><?= $cta_btn_text ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Pricing table
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_pricing_table' ) : ?>
        <?php if (!get_sub_field('hide_widget')) : ?>

          <?php
          $id                       = get_sub_field('pricing_table_id');
          $headline                 = get_sub_field('headline');
          $subheadline              = get_sub_field('subheadline');
          $bill_monthly             = get_sub_field('bill_monthly');
          $bill_annually            = get_sub_field('bill_annually');
          $save                     = get_sub_field('save');
          $add_link                 = get_sub_field('add_link');
          $f_link_text              = get_sub_field('f_link_text');
          $f_link_url               = get_sub_field('f_link_url');
          $show_crossed_out         = get_sub_field('show_crossed_out');
          $pricing_table_back_image = get_sub_field("pricing_table_back_image");
          $footer_left_text         = get_sub_field("footer_left_text");
          $footer_right_text        = get_sub_field("footer_right_text");
          $footer_bottom_text       = get_sub_field("footer_bottom_text");
          $footer_plus_icon         = get_sub_field("footer_plus_icon");
          $pricing_table_back_image = ( isset($pricing_table_back_image['url']) )? "background-image: url('". $pricing_table_back_image['url'] ."');" : "";
          $footer_plus_icon         = ( isset($footer_plus_icon['url']) )? $footer_plus_icon['url'] : "";
          ?>

          <div id="<?= $id ?>" class="section section-pricing-teable">
            <div class="container">
              <div class="row header">
                <div class="col col-12">
                  <div class="col-inner">
                    <h3 class="fw-black"><?php echo $headline; ?></h3>
                   
                    <?php if( have_rows('features_after_heading') ): ?>
                      <ul class="features_after_heading_49837">
                        <?php  while ( have_rows('features_after_heading') ) : the_row(); ?>
                          <li><span><?php the_sub_field('features_text_after_heading'); ?></span></li>
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>


                    <div class="hb-new-toggle-btn">
                      <div class="hb-toggle-row" data-monthly="<?php echo $bill_monthly; ?>" data-annual="<?php echo $bill_annually; ?>">
                        <div class="hb-toggle-col" type="monthly">Monthly</div>
                        <div class="hb-toggle-col active" type="annual">Annual</div>
                      </div>
                        <div class="save-text">
                          <img src="<?php echo $save['url']; ?>" alt="<?php echo $save['alt']; ?>">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wrap-849374" style="<?= $pricing_table_back_image ?>">
              <div class="container">
                <div class="row pricing-tables">
                  <div class="col col-12">
                    <div class="col-inner">
                      <?php if( have_rows('pricing_tables') ): ?>
                        <div class="pricing-tables-container">
                          <?php  while ( have_rows('pricing_tables') ) : the_row(); 
                            $hide_table = get_sub_field('hide_table');
                            $plan_title = get_sub_field('plan_title');
                            $plan_meta = get_sub_field('plan_meta');
                            $annually_save_text = get_sub_field('annually_save_text');
                            $monthly_price = get_sub_field('monthly_price');
                            $annually_price = get_sub_field('annually_price');
                            $unit = get_sub_field('unit');
                            $summary = get_sub_field('summary');
                            $plus_text = get_sub_field('plus_text');
                            $add_button = get_sub_field('add_button');
                            $add_toptag = get_sub_field('add_toptag');
                            $add_tooltip = get_sub_field('add_tooltip');
                            $button_text = get_sub_field('button_text');
                            $link_url = get_sub_field('link_url');
                            $top_tag_text = get_sub_field('top_tag_text');
                            $tooltip_text = get_sub_field('tooltip_text');
                            $addon_headline = get_sub_field('addon_headline');
                            $addon_subheadline = get_sub_field('addon_subheadline');
                            $addon_description = get_sub_field('addon_description');
                            $addon_offer = get_sub_field('addon_offer');
                            $show_addon = get_sub_field('show_addon');
                          ?>
                            <?php if (!$hide_table) : ?>
                              <div class="pricing-plane-wrapper <?php echo ($add_toptag) ? 'pricing-plan-tagged' : ''; ?>">
                                <div class="pricing-top-wrapper">
                                  <?php
                                  // top tag
                                  if ($add_toptag) : ?>
                                    <div class="plan-toptag">
                                      <span><?php echo $top_tag_text; ?></span>
                                    </div>
                                  <?php endif; ?>

                                  <?php if ($add_tooltip) : ?>
                                    <div class="plan-tooltip">
                                      <span><?php echo $tooltip_text; ?></span>
                                    </div>
                                  <?php endif; ?>
                                </div>                               

                                <div class="pricing-plan-table">
                                  <div class="plan-header">
                                    <?php if ($plan_title) : ?>
                                      <h3 class="plan-title"><?php echo $plan_title; ?></h3>
                                    <?php endif; ?>

                                    <?php if($summary): ?>
                                      <div class="plan-summary">
                                          <?php echo $summary; ?>
                                      </div>
                                    <?php endif; ?>
                                  </div>

                                  <div class="plan-body">
                                    <div class="plan-price">
                                      <?php if($show_crossed_out) : ?>
                                      <div class="crossed-out-price"><?php echo str_replace("<sup>$</sup>", "$", $monthly_price) ?></div>
                                      <?php endif; ?>
                                      <h3 class="fw-black plan-price-value"  annual="<?php echo $annually_price; ?>" monthly="<?php echo $monthly_price; ?>"><?php echo $annually_price; ?></h3>

                                      <div class="plan-meta">
                                        <?php echo $plan_meta ; ?>
                                      </div>

                                      <?php if($annually_save_text): ?>
                                          <div class="annually-save-text">
                                            <?php echo $annually_save_text ; ?>
                                          </div>
                                      <?php endif; ?>
                                    </div>

                                    <?php
                                    // list
                                    if (have_rows('provided_services')) : ?>
                                      <ul class="plan_services-list">
                                        <?php while ( have_rows('provided_services') ) : the_row(); ?>
                                          <li><?php the_sub_field('service'); ?></li>
                                        <?php endwhile; ?>
                                      </ul>
                                    <?php endif; ?>

                                    <?php if($add_button) : ?>
                                    <a href="<?php echo $link_url; ?>" target="_blank" class="button" rel="noopener noreferrer">
                                      <?php echo $button_text; ?>
                                    </a>

                                    <?php if($plus_text) : ?>
                                      <div class="plan-plus"><?php echo $plus_text; ?></div>
                                    <?php endif; ?>

                                    <?php endif; ?> 
                                    <?php if($show_addon) : ?>                                                                                             
                                    <div class="plan-addon">
                                      <?php if ($addon_subheadline): ?> 
                                      <div class="subheadline micro">
                                        <?php echo $addon_subheadline; ?>
                                      </div>
                                      <?php endif; ?>
                                      <?php if ($addon_headline): ?> 
                                      <div class="headline">
                                        <?php echo $addon_headline; ?>
                                      </div>
                                      <?php endif; ?>
                                      <?php if ($addon_description): ?> 
                                      <div class="description">
                                        <?php echo $addon_description; ?>
                                      </div>
                                      <?php endif; ?>
                                      <?php if ($addon_offer): ?> 
                                      <div class="offer">
                                        <?php echo $addon_offer; ?>
                                      </div>
                                      <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            <?php endif; ?>

                          <?php  endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="footer">
                  <div class="footer-container">
                    <img class="footer-plus-icon" src="<?= $footer_plus_icon ?>">
                    <div class="class-48734398">
                      <p class="footer-left-text"><?= $footer_left_text ?></p>
                      <p class="footer-right-text"><?= $footer_right_text ?></p>
                    </div>
                    <?= $footer_bottom_text ?>
                  </div>
              </div>
              </div>
            </div>
          
          </div>
        <?php endif; ?>


      <?php
      /* --------------------------------------------
        Logos Slider
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_logos_slider' ) : ?>
        <?php
        
        $id    = get_sub_field('flex_logos_slider_id');
        $class = get_sub_field('flex_logos_slider_class');
        $logos = get_sub_field('logos_slider');
        $title = get_sub_field('flex_logos_slider_title');

        ?>
        <?php if(!empty($logos) && is_array($logos) ): ?>
        
          <div id="<?= $id ?>" class="section section-logos-slider <?= $class ?>">
            <div class="container">
              <h2><?= $title ?></h2>
              <div class="marquee">
                <div class="overlay"></div>
                <div class="marquee-inner" style="animation-duration: <?php echo count($logos)*3; ?>s;">
                  <?php foreach( $logos as $logo ): ?>
                    <img class="marquee-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                  <?php endforeach; ?>
                </div>
                <div class="marquee-inner" style="animation-duration: <?php echo count($logos)*3; ?>s;">
                  <?php foreach( $logos as $logo ): ?>
                    <img class="marquee-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>          
          </div>
        
        <?php endif; ?>


      <?php
      /* --------------------------------------------
        Stacked Logos
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_stacked_logos' ) : ?>
        <?php
        
        $id    = get_sub_field('flex_stacked_logos_id');
        $class = get_sub_field('flex_stacked_logos_class');
        $title = get_sub_field('flex_logos_stacked_title');
        $logos = get_sub_field('stacked_logos');

        ?>
        <?php if(!empty($logos) && is_array($logos) ): ?>
        
          <div id="<?= $id ?>" class="section section-logos-stacked <?= $class ?>">
            <div class="container">
              <h2><?= $title ?></h2>
              <div class="row">
                  <?php foreach( $logos as $logo ): ?>
                    <div class="col">
                      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>          
          </div>
        
        <?php endif; ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>