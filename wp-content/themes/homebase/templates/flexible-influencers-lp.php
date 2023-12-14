<?php
/*
Template Name: Influencers LP
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
        $coupon_headline          = get_sub_field('coupon_headline');
        $coupon_subheadline       = get_sub_field('coupon_subheadline');
        $coupon_caption           = get_sub_field('coupon_caption');
        $ctatype                  = get_sub_field('cta_type');
        $button_text              = get_sub_field('button_text');
        $form_link                = get_sub_field('form_link');
        $utm_campaign             = get_sub_field('utm_campaign');
        $caption                	= get_sub_field('caption');
        $button_link              = get_sub_field('button_link');
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

                      <?php if ($coupon_headline || $coupon_subheadline) : ?>
                        <div class="coupon">
                          <?php if ($coupon_headline) : ?>
                            <div class="headline">
                              <?php echo $coupon_headline; ?>
                            </div>
                          <?php endif; ?>
                          <?php if ($coupon_subheadline) : ?>
                            <div class="subheadline">
                              <?php echo $coupon_subheadline; ?>
                            </div>
                          <?php endif; ?>
                          <?php if ($coupon_caption) : ?>
                            <div class="caption">
                              <?php echo $coupon_caption; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>

                      <?php if ($ctatype == "form") : ?>

                      <form action="<?php echo $form_link; ?>"
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
                        <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>">
                      </form>
                      <?php if ($caption ) : ?>
                      <div class="caption"><?php echo $caption; ?></div>
                      <?php endif; ?>

                      <?php else : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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
        Slider
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_slider' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_url            	= get_sub_field('button_url');
        ?>

          <div class="section section-slider" <?php echo ($id) ? "id='".$id."'" : '';?>>
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
        Footer CTA banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta_banner' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $align                  = get_sub_field('align');
        $stype                  = get_sub_field('stype');
        $content                = get_sub_field('content');
        $caption                = get_sub_field('caption');
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
                      <?php if ($caption) : ?>
                        <div class="caption"><?php echo $caption; ?></div>
                      <?php endif; ?>
                      <?php if ( have_rows('items') ) : ?>
                        <ul class="tick">
                        <?php while ( have_rows('items') ) : the_row();
                          $item      = get_sub_field('item');?>                          
                          <?php if ($item) : ?>
                            <li class="item">
                              <?php echo $item; ?>
                            </li>
                          <?php endif; ?>
                        <?php endwhile; ?>
                        </ul>
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

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>