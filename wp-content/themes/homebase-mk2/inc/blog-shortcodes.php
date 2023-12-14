<?php

/********** quote widget ***********/

if (!function_exists('sp_quote_shortcode')) {

	function sp_quote_shortcode($atts, $content = null) {
       
    ob_start();
    ?>
    
    <div class="post-widget quote-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="quote-container">
              <div class="quote-wrapper">
                <p><?php echo $content; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content=$outp;

    return $out_content;
    
  } 
  add_shortcode('sp_quote', 'sp_quote_shortcode');
}

/********** 100k widget ***********/

if (!function_exists('sp_100k_shortcode')) {

	function sp_100k_shortcode($atts, $content = null) {

    extract(shortcode_atts(array('img' => ''), $atts));	
       
    ob_start();
    ?>
    
    <div class="post-widget quote-100k-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="quote-container">
              <div class="quote-wrapper">
                <div class="image-wrapper">
                  <img class="lazyload" data-src="<?php echo $img;?>">
                </div>
                <div class="text-wrapper">
                  <p><?php echo $content; ?></p>
                </div>
              </div>
            </div>
          </duiv>
        </div>
      </div>
    </div>
    
    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content=$outp;

    return $out_content;
    
  } 
  add_shortcode('sp_100k', 'sp_100k_shortcode');
}

/********** signup widget ***********/

if (!function_exists('sp_signup_shortcode')) {

	function sp_signup_shortcode($atts, $content = null) {

    extract(shortcode_atts(array(
      'headline' => '',
      'subheadline' => '',
      'link' => 'https://app.joinhomebase.com/onboarding/sign-up/?utm_campaign=signup_banner',
      'btn_text' => 'Get Started'
    ), $atts));	
       
    ob_start();
    ?>
    
    <div class="post-widget signup-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="signup-container">
              <div>
                <span class="headline"><?php echo $headline; ?></span>
                <p><?php echo $subheadline; ?></p>
              </div>

              <div>
                <a class="button primary" href="<?php echo $link; ?>" target="_blank" rel="noopener"><?php echo $btn_text; ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content=$outp;

    return $out_content;
    
  } 
  add_shortcode('sp_signup', 'sp_signup_shortcode');
}

/********** subscribe widget ***********/

if (!function_exists('sp_subscribe_shortcode')) {

	function sp_subscribe_shortcode($atts, $content = null) {

    extract(shortcode_atts(array(
      'headline' => '',
      'subheadline' => ''
    ), $atts));	

    $state_list = get_state_array();
       
    ob_start();
    ?>
    
    <div class="post-widget subscribe-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="subscribe-container">
              <div class="header">
              <?php

              if ($headline) :
                echo '<p class="headline">' . $headline . '</h2>';
              endif;

              if ($subheadline) :
                echo '<p class="subheadline">' . $subheadline . '</p>';
              endif;?>
              </div>

              <div class="form">
                <form name="iterable_optin" 
                    action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=b7db0538-8b4f-49ec-b2b1-b208d05b3a40"
                    target="_blank"
                    method="POST"
                    class="email"
                >
                  <div class="form-item">
                    <input class="homeform"
                        aria-label="email address"
                        type="email"
                        name="email"
                        required
                        placeholder="Email address"
                    />
                  </div>
                  <div class="form-item">
                    <select 
                      id="wlocationstate"
                      name="location_state" 
                      onfocus="if(this.value===this.defaultValue){this.value='';}" 
                      onblur="if(this.value===''){this.value=this.defaultValue;}"
                      required
                    >
                      <option value="" hidden selected>Select your state</option>
                      <?php
                        foreach($state_list as $key => $state) {
                          echo '<option value="'.$key.'">'.$state.'</option>';
                        }
                      ?>
                    </select>
                    <label class="hidelabel" for="wlocationstate">State</label>
                  </div>
                  <div class="form-item">
                    <button type="submit" 
                        class="button1 highlighted" 
                        onclick="ga('send', {'hitType': 'event', 'eventCategory': 'Blog', 'eventAction': 'Subscription', 'eventLabel': 'Subscribed', 'eventValue': 1}); ga('send', 'event', 'newsletter', 'subscribe', [ location.href ]);"
                    >Get started</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content=$outp;

    return $out_content;
    
  } 
  add_shortcode('sp_subscribe', 'sp_subscribe_shortcode');
}

/********** review widget ***********/

if (!function_exists('sp_review_shortcode')) {

	function sp_review_shortcode($atts, $content = null) {

    extract(shortcode_atts(array(
      'name' => '',
      'position' => ''
    ), $atts));	

    ob_start();
    ?>
    
    <div class="post-widget review-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="review-container">
              <p class="quote"><?php echo $content; ?></p>
              <p class="customer-info">
                <span class="name"><?php echo $name; ?></span>
                <span class="center-border">|</span>
                <span class="position"><?php echo $position; ?></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content = $outp;

    return $out_content;
    
  } 
  add_shortcode('sp_review', 'sp_review_shortcode');
}


/********** review widget ***********/

if (!function_exists('sp_tableofcontents_shortcode')) {

	function sp_tableofcontents_shortcode($atts, $content = null) {

    ob_start();
    ?>
    
    <div class="post-widget table-block">
      <div class="row">
        <div class="col col-12">
          <div class="col-inner">
            <div class="table-container">
              <h3>Table of contents</h3>
              <?php echo $content; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php	
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content = $outp;

    return $out_content;
    
  } 
  add_shortcode('sp_tableofcontents', 'sp_tableofcontents_shortcode');
}


/********** Table of contents April 2022 ***********/

if (!function_exists('sp_toc_shortcode')) {

  function sp_toc_shortcode($atts, $content = null) {

    ob_start();
    ?>
    
    <section id="section-table-of-contents">
      <div class="container"></div>
    </section>

    <?php 
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content = $outp;

    return $out_content;
    
  } 
  add_shortcode('sp_toc', 'sp_toc_shortcode');
}

/********** Blog pages by year accordion | Sep 2023 ***********/

if (!function_exists('sp_blog_pages_accordion_shortcode')) {

  function sp_blog_pages_accordion_shortcode($atts, $content = null) {

    ob_start();
    ?>
    
    <div class="section section-blog">
      <h2>Blog</h2>
      <div class="accordion">
        <?php
          $post_years = wp_get_archives( array(
            'type'            => 'yearly',
            'format'          => 'html',
            'show_post_count' => false,
            'echo'            => 0,
          ) );

          $post_years = explode('<li>', $post_years);

          foreach ( $post_years as $year_item ) {
            $year = strip_tags( $year_item );
            if ( !empty( $year ) ) {
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'year'           => $year,
                'cache_results' => false,
                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
              );

              $query = new WP_Query( $args );

              if ( $query->have_posts() ) {
                ?>
                <div class="card year<?php echo $year; ?>">
                  <div class="card-header" id="heading-<?php echo $year; ?>">
                    <button class="btn btn-link" type="button">
                      <?php echo $year; ?> <img src="/wp-content/themes/homebase/images/scheduling-faq-cross.svg" alt="tab-cross">
                    </button>
                  </div>

                  <div id="collapse-<?php echo $year; ?>" class="collapse">
                    <div class="card-body">
                      <ul>
                        <?php
                          while ( $query->have_posts() ) {
                            $query->the_post();
                            if (get_post_meta($post->ID, '_yoast_wpseo_title', true) && !str_contains(get_post_meta($post->ID, '_yoast_wpseo_title', true), '%%')) {
                              $post_title = get_post_meta($post->ID, '_yoast_wpseo_title', true);
                            }
                            else {
                              $post_title = get_the_title();
                            }
                            if (get_post_meta($post->ID, '_yoast_wpseo_meta-robots-noindex', true) != 1) {
                              echo '<li><a href="' . get_permalink() . '">' . $post_title . '</a></li>';
                            }
                          }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <?php
                wp_reset_postdata();
              }             
            }
          }
        ?>
      </div>
    </div>

    <?php 
    $outp = ob_get_contents();
    ob_end_clean();

    $out_content = $outp;

    return $out_content;
    
  } 
  add_shortcode('sp_blog_pages_accordion', 'sp_blog_pages_accordion_shortcode');
}