<?php
/*
Template Name: Back To Business - MT59 - Flexible
*/

$state_list = array('AL'=>"Alabama",  
    'AK'=>"Alaska",  
    'AZ'=>"Arizona",  
    'AR'=>"Arkansas",  
    'CA'=>"California",  
    'CO'=>"Colorado",  
    'CT'=>"Connecticut",  
    'DE'=>"Delaware",
    'FL'=>"Florida",  
    'GA'=>"Georgia",  
    'HI'=>"Hawaii",  
    'ID'=>"Idaho",  
    'IL'=>"Illinois",  
    'IN'=>"Indiana",  
    'IA'=>"Iowa",  
    'KS'=>"Kansas",  
    'KY'=>"Kentucky",  
    'LA'=>"Louisiana",  
    'ME'=>"Maine",  
    'MD'=>"Maryland",  
    'MA'=>"Massachusetts",  
    'MI'=>"Michigan",  
    'MN'=>"Minnesota",  
    'MS'=>"Mississippi",  
    'MO'=>"Missouri",  
    'MT'=>"Montana",
    'NE'=>"Nebraska",
    'NV'=>"Nevada",
    'NH'=>"New Hampshire",
    'NJ'=>"New Jersey",
    'NM'=>"New Mexico",
    'NY'=>"New York",
    'NC'=>"North Carolina",
    'ND'=>"North Dakota",
    'OH'=>"Ohio",  
    'OK'=>"Oklahoma",  
    'OR'=>"Oregon",  
    'PA'=>"Pennsylvania",
    'PR'=>"Puerto Rico",
    'RI'=>"Rhode Island",  
    'SC'=>"South Carolina",  
    'SD'=>"South Dakota",
    'TN'=>"Tennessee",  
    'TX'=>"Texas",  
    'UT'=>"Utah",  
    'VT'=>"Vermont",  
    'VA'=>"Virginia",  
    'WA'=>"Washington",  
    'WV'=>"West Virginia",  
    'WI'=>"Wisconsin",  
    'WY'=>"Wyoming");

$city_list = array(
  'Atlanta',
  'Austin',
  'Baltimore',
  'Birmingham',
  'Boston',
  'Buffalo',
  'Charlotte',
  'Chicago',
  'Cincinnati',
  'Cleveland',
  'Columbus',
  'Dallas',
  'Denver',
  'Detroit',
  'Hartford',
  'Houston',
  'Indianapolis',
  'Jacksonville',
  'Kansas City',
  'Las Vegas',
  'Los Angeles',
  'Louisville',
  'Memphis',
  'Miami',
  'Milwaukee',
  'Minneapolis',
  'Nashville',
  'New Orleans',
  'New York',
  'Oklahoma City',
  'Orlando',
  'Philadelphia',
  'Phoenix',
  'Pittsburgh',
  'Portland',
  'Providence',
  'Raleigh',
  'Richmond',
  'Riverside',
  'Sacramento',
  'Salt Lake City',
  'San Antonio',
  'San Diego',
  'San Francisco',
  'San Jose',
  'Seattle',
  'St. Louis',
  'Tampa',
  'Virginia Beach',
  'Washington DC'
);

include_once( dirname(__FILE__) . '/../lib/btb-helper.php');

$dobj = new Btb_data_obj;
// $dobj->show_me_what_you_got();

// exit();
// echo dirname(__FILE__); exit();
get_header(); ?>

<div class="container" role="document">
<?php
global $post;
$detail = (get_field('detail_page')) ? 'detail' : '';

if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;

            /* --------------------------------------------
              Hero
            -------------------------------------------- */
            if ( get_row_layout() == 'flex_hero' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline                 = do_shortcode(get_sub_field('headline'));
                $subheadline              = get_sub_field('subheadline');
                $simple_text              = get_sub_field('simple_text');
                $scroll_anchor = get_sub_field('scroll_anchor');
                ?>

                <div class="section section-hero <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row headline">
                    <div class="columns medium-10 medium-offset-1">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1>' . $headline . '</h1>';
                      endif;
                      ?>
                    </div>
                  </div>
                  <div class="row content">
                    <div class="columns medium-10 medium-offset-1 ">
                      <div class="container <?php echo $detail; ?>">
                        <div class="content-wrapper">
                          <?php
                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h2>';
                          endif;
                          
                          if ($simple_text) : ?>
                            <div>
                              <?php echo $simple_text; ?>
                            </div>
                          <?php endif;?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              By the number
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_by_numbers' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                
                $add_link           = get_sub_field('add_link');
                $link_text       = get_sub_field('link_text');
                $link_url        = get_sub_field('link_url');
                ?>

                <div class="section section-by-numbers <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns large-8 large-offset-2 medium-10 medium-offset-1 text-center">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2>' . do_shortcode($headline) . '</h2>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        echo '<h3>' . $subheadline . '</h3>';
                      endif;

                      if ($add_link) : ?>
                        <a href="<?php echo $link_url; ?>" <?php echo (!$detail) ? 'target="_blank"' : ''; ?> class="more-link">
                          <?php echo $link_text; ?>
                        </a>
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card-grid clearfix">
                      <?php if( have_rows('info_cards') ): ?>
                          <?php  while ( have_rows('info_cards') ) : the_row(); 
                            $chart = get_sub_field('chart_image');
                            $sb_value = do_shortcode( get_sub_field('value') );
                            $sb_simple_text = do_shortcode( get_sub_field('simple_text') );
                            $sb_chart_code = do_shortcode( get_sub_field('chart_code') ); 
                          ?>
                            <div class="columns medium-6">
                              <div class="card">
                                <div class="title"><?php the_sub_field('title'); ?></div>
                                <div class="chart">
                                  <?php if( $sb_chart_code == '' ): ?>
                                      <img class="lazyload" data-src="<?php echo $chart['url']; ?>" alt="<?php echo $chart['alt']; ?>">
                                  <?php else: 
                                      echo $sb_chart_code; 
                                  endif; ?>
                                </div>
                                <div class="value" <?php echo get_sub_field('value_color') ?  "style='color:".get_sub_field('value_color')."'" : ''; ?>><?php echo $sb_value; ?></div>
                                <div class="card-desc"><?php echo $sb_simple_text; ?></div>
                              </div>
                            </div>
                          <?php  endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

              <?php endif; ?>
            
            <?php
            /* --------------------------------------------
              Form Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_form_widget' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                
                $newsletter_form      = get_sub_field('newsletter_form');
                $post_form            = get_sub_field('post_form');
                $background           = get_sub_field('background');
                $background_color     = get_sub_field('background_color');
                $box               =get_sub_field('box');
                $placeholder        = get_sub_field('placeholder');
                $button_text     = get_sub_field('button_text');
                $form_link      = get_sub_field('form_link');
                $text_input     = get_sub_field('text_input');
                $email_input     = get_sub_field('email_input');
                $state_selector     = get_sub_field('state_selector');
                ?>

                <div class="section section-form-widget <?php echo $section_index?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="form-container <?php echo ($box) ? 'boxed':''; ?>" 
                    <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                  >
                    <div class="row header">
                      <div class="columns">
                        <?php
                        // headline
                        if ($headline) :
                          echo '<h3>' . $headline . '</h3>';
                        endif;

                        // subheadline
                        if ($subheadline) :
                          echo '<h4>' . $subheadline . '</h4>';
                        endif;
                        ?> 
                      </div>
                    </div>
                    <div class="row form">
                    <?php if($newsletter_form) : ?>
                      <form name="iterable_optin" 
                          action="<?php echo $form_link; ?>"
                          target="_blank"
                          method="POST"
                          class="email"
                      >
                    <?php else :?>
                      <form action="<?php echo $form_link; ?>"
                          id="btb-form-wrapper"
                          method="<?php echo ($post_form) ? 'POST' : 'GET'?>"
                          class="home-form"
                      >
                    <?php endif;?>
                          <div class="row input">
                            <?php if ($text_input) : ?>
                            <input class="homeform"
                                aria-label="zip code"
                                type="text"
                                name="zipcode"
                                autocomplete="off"
                                placeholder="<?php echo $placeholder; ?>"
                                <?php echo (!$background) ? 'style="background-color: #F3EEF6;"' : ''; ?>
                            />
                            <?php endif; ?>
                            <?php if ($email_input) : ?>
                            <input class="homeform"
                                aria-label="email address"
                                type="email"
                                name="email"
                                required
                                placeholder="<?php echo $placeholder; ?>"
                                <?php echo (!$background) ? 'style="background-color: #F3EEF6;"' : ''; ?>
                            />
                            <?php endif; ?>
                            <?php if ($state_selector) : ?>
                              <select 
                                name="location_state" 
                                onfocus="if(this.value===this.defaultValue){this.value='';}" 
                                onblur="if(this.value===''){this.value=this.defaultValue;}"
                                required
                                <?php echo (!$background) ? 'style="background-color: #F3EEF6;"' : ''; ?>
                              >
                                <option hidden="" disabled="" selected="">Select a state</option>
                                <?php
                                  foreach($state_list as $key => $state) {
                                    echo '<option value="'.$key.'">'.$state.'</option>';
                                  }
                                ?>
                              </select>
                            <?php endif; ?>

                            <?php if($newsletter_form) : ?>
                              <input type="submit" 
                                  class="button1 highlighted" 
                                  value="<?php echo $button_text; ?>"
                                  onclick="ga('send', 'event', 'newsletter', 'subscribe', [ location.href ]);"
                              >
                            <?php else :?>
                              <input type="submit"
                                aria-label="submit"
                                id="create-account"
                                name="Submit"
                                class="primary-cta buttonsbn <?php if($text_input) echo 'disabled zipbtn'; ?>"
                                value="<?php echo $button_text; ?>"
                                <?php if($text_input) echo 'disabled="disabled"'; ?>
                              />
                            <?php endif;?>
                          </div>
                          <?php if ($text_input) : ?>
                            <div class="btb-zip-search-results" style="display: none;">
                              <ul class="result-list empty"></ul>
                            </div>
                          <?php endif; ?>
                      </form>
                    </div>
                  </div>
                </div>

              <?php endif; ?>


            <?php
            /* --------------------------------------------
              Traning Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_traning_widget' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                ?>

                <div class="section section-training-widget <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns large-8 large-offset-2 text-center">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2>' . $headline . '</h2>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        echo '<h3>' . $subheadline . '</h3>';
                      endif;
                    ?> 
                    </div>
                  </div>
                  <?php if( have_rows('business_fields') ): ?>
                    <?php  while ( have_rows('business_fields') ) : the_row(); ?>
                      <div class="row">
                        <div class="field-container">
                          <h3><?php the_sub_field('title'); ?></h3>
                          <div class="row">
                            <div class="traninings-container">
                              <?php if( have_rows('traninings') ): ?>
                                  <?php  while ( have_rows('traninings') ) : the_row(); 
                                    $featured_image = get_sub_field('featured_image');
                                  ?>
                                    <li class="trianing-box">
                                      <div class="tranining">
                                        <div class="left-col">
                                          <img class="lazyload" data-src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>">
                                        </div>
                                        <div class="right-col">
                                          <a href="<?php the_sub_field('link_url'); ?>" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>>
                                            <div class="summary"><?php the_sub_field('summary'); ?></div>
                                            <div class="training-link"><?php the_sub_field('link_text'); ?></div>
                                          </a>
                                        </div>
                                      </div>
                                    </li>
                                  <?php  endwhile; ?>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php  endwhile; ?>
                  <?php endif; ?>
                </div>

              <?php endif; ?>

              <?php
            /* --------------------------------------------
              Social button group
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_social_button_group' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $title = urlencode( get_the_title() ); //$post->ID
                $url = urlencode( get_permalink() );
                $img = urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );

                $sndata = array(
                  'Facebook'	=> array(
                            'shurl'	=>	'javascript:void(0)" onclick="soc_share_invoke_pu(this);" data-url="https://www.facebook.com/sharer.php?u=' . $url . '&title=' . $title
                          ),
                  'Twitter'	=> array(
                            'shurl'	=>	'javascript:void(0)" onclick="soc_share_invoke_pu(this);" data-url="http://twitter.com/share?text=' . $title . '&url=' . $url
                          ),
                  'Instagram'	=> array(
                            'shurl'	=>	'javascript:void(0)" onclick="soc_share_invoke_pu(this);" data-url="https://plus.google.com/share?url=' . $url
                          ),
                  'Linkedin'	=> array(
                            'shurl'	=>	'javascript:void(0)" onclick="soc_share_invoke_pu(this);" data-url="https://www.linkedin.com/cws/share?url=' . $url
                  ),
                  'Pinterest'	=> array(
                            'shurl'	=>	'javascript:void(0)" onclick="soc_share_invoke_pu(this);" data-url="http://pinterest.com/pin/create/button/?url=' . $url . '&media=' . $img . '&description=' . $title
                          ),
                );

                $networks = array_keys( $sndata );

                ?>

                <div class="section section-social-group <?php echo $section_index?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="group-container">
                    <div class="row">
                      <div class="columns large-6">
                        <?php
                        // headline
                        if ($headline) :
                          echo '<h3>' . $headline . '</h3>';
                        endif;
                        ?> 
                      </div>
                      <div class="columns large-6">
                        <div class="button-container">
                          <ul>
                          <?php if( have_rows('social_buttons') ): ?>
                              <?php  while ( have_rows('social_buttons') ) : the_row(); 
                                $social_network = get_sub_field('social_network');
                                $button_link = get_sub_field('button_link');
                                $icon_image = get_sub_field('icon_image');
                                $bg_color = get_sub_field('bg_color');

                                if(strcmp($social_network, 'Instagram')) :
                              ?>
                                <li class="button-item">
                                  <a 
                                    href="<?php echo $sndata[ $social_network ][ 'shurl' ]; ?>" 
                                    title="Share On <?php echo $social_network; ?>"
                                    <?php echo ($bg_color) ? 'style="background-color:' . $bg_color . '"' : ''; ?> 
                                  >
                                    <img class="lazyload" data-src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>">
                                  </a>
                                </li>
                                <?php endif; ?>
                              <?php  endwhile; ?>
                          <?php endif; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endif; ?>
            
            
            <?php
            /* --------------------------------------------
              Impact Table
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_impact_table' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $hide_city_table           = get_sub_field('hide_city_table');
                $hide_state_table        = get_sub_field('hide_state_table');
                $city_table_headline           = get_sub_field('city_table_headline');
                $state_table_headline        = get_sub_field('state_table_headline');
                ?>

                <div class="section section-impact-table <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="table-container text-left">
                      <?php if (!$hide_city_table) : ?>
                        <div class="table clearfix">
                          <h2><?php echo $city_table_headline; ?></h2>
                          <div class="columns large-2 show-for-large-up">
                            <?php $number = 1;?>
                            <?php foreach($city_list as $city) { 
                                  if( $number > 9 ): $number = 1;?>
                                    </div>
                                    <div class="columns large-2 show-for-large-up">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $city; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $city; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                          <div class="columns medium-3 show-for-medium">
                            <?php $number = 1;?>
                            <?php foreach($city_list as $city) { 
                                  if( $number > 13 ): $number = 1;?>
                                    </div>
                                    <div class="columns medium-3 show-for-medium">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $city; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $city; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                          <div class="columns small-6 show-for-small">
                            <?php $number = 1;?>
                            <?php foreach($city_list as $city) { 
                                  if( $number > 25 ): $number = 1;?>
                                    </div>
                                    <div class="columns small-6 show-for-small">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $city; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $city; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <?php if (!$hide_state_table) : ?>
                        <div class="border-line"></div>
                        <div class="table clearfix">
                          <h2><?php echo $state_table_headline; ?></h2>
                          <div class="columns large-2 show-for-large-up">
                            <?php $number = 1;?>
                            <?php foreach($state_list as $key => $state) { 
                                  if( $number > 9 ): $number = 1;?>
                                    </div>
                                    <div class="columns large-2 show-for-large-up">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $key; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $state; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                          <div class="columns medium-3 show-for-medium">
                            <?php $number = 1;?>
                            <?php foreach($state_list as $key => $state) { 
                                  if( $number > 13 ): $number = 1;?>
                                    </div>
                                    <div class="columns medium-3 show-for-medium">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $key; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $state; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                          <div class="columns small-6 show-for-small">
                            <?php $number = 1;?>
                            <?php foreach($state_list as $key => $state) { 
                                  if( $number > 26 ): $number = 1;?>
                                    </div>
                                    <div class="columns small-6 show-for-small">
                                  <?php endif; ?>
                              <div class="item">
                                <a href="/reopen-business-coronavirus/details/<?php echo $key; ?>/" <?php echo (!$detail) ? 'target="_blank"' : ''; ?>><?php echo $state; ?></a>
                              </div>
                              <?php $number = $number + 1; ?>
                            <?php  } ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>                  
                </div>

              <?php endif; ?>            

            <?php
            /* --------------------------------------------
              About Us Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_about_widget' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                
                $logo       = get_sub_field('logo');
                $simple_text       = get_sub_field('simple_text');
                $add_button        = get_sub_field('add_button');
                $button_text     = get_sub_field('button_text');
                $button_url      = get_sub_field('button_url');
                ?>

                <div class="section section-about-widget <?php echo $section_index?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns large-8 medium-10 large-offset-2 medium-offset-1">
                      <div class="widget-container">
                        <div class="widget-header">
                          <?php
                          if ($logo) :
                            echo '<div class="logo-wrapper"><img class="lazyload" data-src="'.$logo['url'].'" alt="'.$logo['alt'].'"></div>';
                          endif;
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h3>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h4>';
                          endif;
                          ?> 
                        </div>
                        <div class="widget-main">
                          <?php echo $simple_text; ?>
                        </div>
                        <?php if ($add_button) : ?>
                        <div class="widget-footer">
                          <a href="<?php echo $button_url; ?>"><?php echo $button_text;?></a>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Details Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_result_widget' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = do_shortcode(get_sub_field('headline'));
                $subheadline        = get_sub_field('subheadline');                
                ?>

                <div class="section section-details-widget <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns">
                      <div class="widget-container">
                        <div class="header">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;
                          ?> 
                        </div>
                        <?php if( have_rows('result_blocks') ): ?>
                          <?php  while ( have_rows('result_blocks') ) : the_row(); 
                            $block_headline = do_shortcode(get_sub_field('block_headline'));
                            $chart = get_sub_field('chart_image');
                            $sb_value = do_shortcode( get_sub_field('value') );
                            $value_color = do_shortcode( get_sub_field('value_color') );
                            $sb_chart_code = do_shortcode( get_sub_field('chart_code') );
                            $sb_result_template_w = do_shortcode( get_sub_field('result_template_w') );
                            $sb_result_template_m = do_shortcode( get_sub_field('result_template_m') );
                            $ifram_code_nation = do_shortcode( get_sub_field('ifram_code_nation') );
                            $ifram_code_state = do_shortcode( get_sub_field('ifram_code_state') );
                            $ifram_code_msa = do_shortcode( get_sub_field('ifram_code_msa') );
                            $simple_text = get_sub_field('simple_text');

                            $page_type = get_btbpage_type();
                             
                          ?>
                            <div class="result-block">
                              <div class="title"><?php echo $block_headline; ?></div>
                              <div class="block-wrapper">
                                <div class="left-wrapper">
                                  <div class="chart">
                                    <?php if( $sb_chart_code == '' ): ?>
                                        <img class="lazyload" data-src="<?php echo $chart['url']; ?>" alt="<?php echo $chart['alt']; ?>">
                                    <?php else: 
                                        echo $sb_chart_code; 
                                    endif; ?>
                                  </div>
                                  <div class="value" <?php echo $value_color ?  "style='color:".$value_color."'" : ''; ?>><?php echo $sb_value; ?></div>
                                  <div class="card-desc-w"><?php echo $sb_result_template_w; ?></div>
                                  <div class="card-desc-m" <?php echo $value_color ?  "style='color:".$value_color."'" : ''; ?>><?php echo $sb_result_template_m; ?></div>
                                </div>
                                <div class="right-wrapper">
                                  <div class="iframe-chart">
                                    <?php
                                      if ($page_type == 'State')
                                        echo $ifram_code_state;
                                      elseif($page_type == 'City')
                                        echo $ifram_code_msa;
                                      else
                                        echo $ifram_code_nation;
                                    ?>
                                  </div>
                                  <div class="chart-desc">
                                    <?php echo $simple_text; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php  endwhile; ?>
                        <?php endif; ?>
                      </div>                     
                    </div>
                  </div>
                </div>

              <?php endif; ?>

            <?php
            /* --------------------------------------------
              News Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_news_widget' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                $newcode            = do_shortcode(get_sub_field('news_code'));
                ?>

                <div class="section section-new-widget <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns">
                      <div class="widget-container">
                        <div class="header">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;
                          ?> 
                        </div>
                        
                        <div class="news">                          
                          <div class="news-container">
                            <?php echo $newcode; ?>
                          </div>
                        </div>
                      </div>                     
                    </div>
                  </div>
                </div>

              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Page Leadboard
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_page_leadboard' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor = get_sub_field('scroll_anchor');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                $background_color   = get_sub_field('background_color');
                $link_text          = get_sub_field('link_text');
                $link_url           = get_sub_field('link_url');
                ?>

                <div class="section section-leadboard <?php echo ($section_index)?> <?php echo $detail; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row">
                    <div class="columns">
                      <div class="widget-container" <?php echo $background_color ?  "style='background-color:".$background_color."'" : ''; ?>>
                        <div class="leadboard">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h2>' . $headline . '</h2>';
                          endif;

                          // subheadline
                          if ($subheadline) :
                            echo '<h3>' . $subheadline . '</h3>';
                          endif;

                          if ($link_url) :
                            echo '<a href ="'.$link_url.'" class="more-link" >' . $link_text . '</a>';
                          endif;
                          ?> 
                        </div>
                      </div>                     
                    </div>
                  </div>
                </div>

              <?php endif; ?>

            <?php endif; //end if layout ?>
        <?php endwhile; //end while main flex content ?>
    <?php endif; //end if have rows mail flex content ?>

<?php get_footer(); ?>