<?php
/*
Template Name: Home - New - Flexible
*/
get_header(); ?>

<div class="container" role="document">
<?php
if ( have_rows('flexible_content') ) :

  $index = 0;

  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;
            /* --------------------------------------------
              2 column intro
            -------------------------------------------- */
            if ( get_row_layout() == '2_column_intro' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor      = get_sub_field('scroll_anchor');
                $borders            = get_sub_field('borders');
                $border_width       = get_sub_field('border_width');
                $border_length      = get_sub_field('border_length');
                $border_color       = get_sub_field('border_color');
                $background_color   = get_sub_field('background_color');
                $background         = get_sub_field('background');
                $reverse            = get_sub_field('reverse');
                $headline           = do_shortcode( get_sub_field('headline') );
                $subheadline        = do_shortcode( get_sub_field('subheadline') );
                $subheadline_link   = get_sub_field('subheadline_link');
                $text               = do_shortcode( get_sub_field('text') );
                $add_simple_link    = get_sub_field('add_simple_link');
                $link_prepend       = get_sub_field('link_prepend');
                $link_text          = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
                $link_url           = get_sub_field('link_url');
                $add_button         = get_sub_field('add_button');
                $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Create Account';
                $button_link        = get_sub_field('button_link');
                $add_signup_form    = get_sub_field('add_signup_form');
                $signup_form_text   = (get_sub_field('signup_button_text')) ? get_sub_field('signup_button_text') : 'Create Account';
                $signup_form_link   = get_sub_field('signup_action_link');
                $image              = get_sub_field('image');
                $image_link         = get_sub_field('image_link');
                $add_image_credit   = get_sub_field('add_image_credit');
                $image_credit_title = get_sub_field('image_credit_title');
                $image_credit_text  = get_sub_field('image_credit_text');
                $image_credit_color = get_sub_field('image_credit_color');
                $image1              = get_sub_field('image1');
                $image_link1         = get_sub_field('image_link1');
                ?>

                <div class="section col-2-section column-intro <?php echo ($section_index)?> <?php echo ($reverse) ? 'reverse' : ''; ?>" 
                  <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
                  <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                >
                <?php
                  if ($borders) :
                        echo '<style>.section.'.$section_index.':after{ max-width:'.$border_length.'%; border-bottom:'.$border_width.'px solid '.$border_color.'; left: calc(50% - '.($border_length/2).'%);}</style>';
                  endif;
                ?>
                  <div class="row">

                    <div class="columns large-6 col-2-left-col">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1>' . $headline . '</h1>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        $sub_headline  = ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
                        $sub_headline .= $subheadline;
                        $sub_headline .= ($subheadline_link) ? '</a>' : '';

                        echo '<h3>' . $sub_headline . '</h3>';
                      endif;

                      // text
                      if ($text) : ?>
                        <div class="col-2-text">
                          <?php echo $text; ?>
                        </div>
                      <?php endif;

                      // button
                      if ($add_button) : ?>
                        <div class="col-3-col-button">
                          <a
                            href="<?php echo $button_link; ?>"
                            class="button"
                          >
                            <?php echo $button_text; ?>
                          </a>
                        </div>
                      <?php endif;

                      // Signup Form
                      if ($add_signup_form) : ?>
                        <div class="page-template-flexible-home">
                          <div class="signup-bumper-column">
                            <form action="<?php echo $signup_form_link; ?>" id="home-signup-form-2" method="GET" class="home-form">
                              <input class="homeform" aria-label="email address" type="email" name="email" placeholder="Email Address">
                              <input type="submit" id="create-account" aria-label="submit" name="Submit" class="primary-cta buttonsbn" value="<?php echo $signup_form_text; ?>">
                            </form>
                          </div>
                        </div>
                      <?php endif;
                      
                      // link
                      if ($add_simple_link) : ?>
                        <div class="col-3-col-link">
                          <?php echo $link_prepend; ?>
                          <strong>
                            <a href="<?php echo $link_url; ?>">
                              <?php echo $link_text; ?>
                            </a>
                          </strong>
                        </div>
                      <?php endif;?>
                    </div>

                    <?php
                    // image
                    if ($image) : ?>
                      <div class="columns large-6 text-center col-2-right-col">
                        <div class="col-2-img">
                          <?php echo ($image_link) ? '<a href="' . $image_link . '">' : ''; ?>
                          <img class="lazyload" alt="Screenshot App" data-src="<?php echo $image; ?>">
                          <?php echo ($image_link) ? '</a>' : ''; ?>

                          <?php if ($add_image_credit) : ?>
                            <div class="col-2-image-credit"
                              style="color: <?php echo $image_credit_color; ?>;"
                            >
                              <?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
                              <?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <? if($image1): ?>
                          <div class="col-2-img-1">
                            <?php echo ($image_link1) ? '<a href="' . $image_link . '">' : ''; ?>
                            <img class="lazyload" alt="Screenshot App" data-src="<?php echo $image1; ?>">
                            <?php echo ($image_link1) ? '</a>' : ''; ?>

                            <?php if ($add_image_credit) : ?>
                              <div class="col-2-image-credit"
                                style="color: <?php echo $image_credit_color; ?>;"
                              >
                                <?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
                                <?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                  </div>
                </div>

              <?php endif; ?>

            <?php
            /* --------------------------------------------
              2 column
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_2_column' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $scroll_anchor      = get_sub_field('scroll_anchor');
                $borders            = get_sub_field('borders');
                $border_width       = get_sub_field('border_width');
                $border_length      = get_sub_field('border_length');
                $border_color       = get_sub_field('border_color');
                $background_color   = get_sub_field('background_color');
                $background         = get_sub_field('background');
                $reverse            = get_sub_field('reverse');
                $headline           = get_sub_field('headline');
                $subheadline        = get_sub_field('subheadline');
                $subheadline_link   = get_sub_field('subheadline_link');
                $text               = get_sub_field('text');
                $add_custom_list    = get_sub_field('add_custom_list');
                $learn_more         = get_sub_field('learn_more');
                $link_text          = (get_sub_field('link_text')) ? get_sub_field('link_text') : 'Learn more';
                $link_url           = get_sub_field('link_url');
                $button_text        = (get_sub_field('button_text')) ? get_sub_field('button_text') : 'Learn more';
                $button_link        = get_sub_field('button_link');
                $image              = get_sub_field('image');
                $image_link         = get_sub_field('image_link');
                $add_image_credit   = get_sub_field('add_image_credit');
                $image_credit_title = get_sub_field('image_credit_title');
                $image_credit_text  = get_sub_field('image_credit_text');
                $image_credit_color = get_sub_field('image_credit_color');
                $image1              = get_sub_field('image1');
                $image_link1         = get_sub_field('image_link1');
                ?>

                <div class="section col-2-section <?php echo ($section_index)?> <?php echo ($reverse) ? 'reverse' : ''; ?>" 
                  <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>
                  <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                >
                <?php
                  if ($borders) :
                        echo '<style>.section.'.$section_index.':after{ max-width:'.$border_length.'%; border-bottom:'.$border_width.'px solid '.$border_color.'; left: calc(50% - '.($border_length/2).'%);}</style>';
                  endif;
                ?>
                  <div class="row">

                    <div class="columns large-6 col-2-left-col">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2>' . $headline . '</h2>';
                      endif;

                      // subheadline
                      if ($subheadline) :
                        $sub_headline  = ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
                        $sub_headline .= $subheadline;
                        $sub_headline .= ($subheadline_link) ? '</a>' : '';

                        echo '<h3>' . $sub_headline . '</h3>';
                      endif;

                      // text
                      if ($text) : ?>
                        <div class="col-2-text">
                          <?php echo $text; ?>
                        </div>
                      <?php endif;

                      // custom bullet list
                      if ($add_custom_list && have_rows('custom_bullet_list')) : ?>
                        <ul class="col-2-bullet-list">
                          <?php while ( have_rows('custom_bullet_list') ) : the_row(); ?>

                            <?php
                            $headline = get_sub_field('headline');
                            $text     = get_sub_field('text');
                            ?>

                            <li>
                              <?php if ($headline) : ?>
                                <h4><?php echo $headline; ?></h4>
                              <?php endif; ?>

                              <?php echo $text; ?>
                            </li>

                          <?php endwhile; ?>
                        </ul>
                      <?php endif;

                      // link/button
                      if ($learn_more) : ?>
                        <div class="col-3-col-link">
                          <a
                            href="<?php echo ($learn_more == 'link') ? $link_url : $button_link; ?>"
                            class="<?php echo ($learn_more == 'button') ? 'button' : ''; ?>"
                          >
                            <?php echo ($learn_more == 'link') ? $link_text : $button_text; ?>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>

                    <?php
                    // image
                    if ($image) : ?>
                      <div class="columns large-6 text-center col-2-right-col">
                        <div class="col-2-img">
                          <?php echo ($image_link) ? '<a href="' . $image_link . '">' : ''; ?>
                          <img class="lazyload" alt="Screenshot App" data-src="<?php echo $image; ?>">
                          <?php echo ($image_link) ? '</a>' : ''; ?>

                          <?php if ($add_image_credit) : ?>
                            <div class="col-2-image-credit"
                              style="color: <?php echo $image_credit_color; ?>;"
                            >
                              <?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
                              <?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <? if($image1): ?>
                          <div class="col-2-img-1">
                            <?php echo ($image_link1) ? '<a href="' . $image_link . '">' : ''; ?>
                            <img class="lazyload" alt="Screenshot App" data-src="<?php echo $image1; ?>">
                            <?php echo ($image_link1) ? '</a>' : ''; ?>

                            <?php if ($add_image_credit) : ?>
                              <div class="col-2-image-credit"
                                style="color: <?php echo $image_credit_color; ?>;"
                              >
                                <?php echo ($image_credit_title) ? '<span>' . $image_credit_title . '</span>' : ''; ?>
                                <?php echo ($image_credit_text) ? $image_credit_text : ''; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                  </div>
                </div>

              <?php endif; ?>

            <?php
            /* --------------------------------------------
              reviews
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flexible_reviews' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                  $borders            = get_sub_field('borders');
                  $border_width       = get_sub_field('border_width');
                  $border_length      = get_sub_field('border_length');
                  $border_color       = get_sub_field('border_color');
                  $background_color   = get_sub_field('background_color');
                  $background         = get_sub_field('background');
                  $headline             = get_sub_field('headline');
                  $score                = get_sub_field('score');
                  $company_logo         = get_sub_field('company_logo');
                  $score_description    = get_sub_field('score_description');
                  $button               = get_sub_field('button');
                  $title                = get_sub_field('title');
                  $subtitle             = get_sub_field('subtitle');
                  $button_text          = get_sub_field('button_text');
                  $button_link          = get_sub_field('button_link');
                ?>
                <div class="section <?php echo ($section_index)?> reviews-layout"
                <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                >
                <?php
                  if ($borders) :
                        echo '<style>.section.'.$section_index.':after{ max-width:'.$border_length.'%; border-bottom:'.$border_width.'px solid '.$border_color.'; left: calc(50% - '.($border_length/2).'%);}</style>';
                  endif;
                ?>
                  <div class="row">
                    <div class="row-container">
                      <div class="text-center">
                          <h2><?php echo get_sub_field('headline'); ?></h2>
                      </div>
                      <div class="reviews medium-offset-1 medium-10">
                              <?php if ( have_rows('reviews') ) :
                                  while ( have_rows('reviews') ) : the_row();
                                      echo '      <div class="columns large-4 medium-4 text-center">';
                                      echo '			  <a href="'.get_sub_field('link_url').'" target="_blank">';
                                      echo '          <div class="score"><img class="lazyload" alt="Screenshot App" data-src="' . get_sub_field('score') . '" /></div>';
                                      echo '          <div class="company"><img class="lazyload" alt="Screenshot App" data-src="' . get_sub_field('company_logo') . '" /></div>';
                                      echo '          <div class="score-description">' . get_sub_field('score_description') . '</div>';
                                      echo '			  </a>';
                                      echo '      </div>';
                                  endwhile;
                              endif; ?>
                      </div>
                      <?php if ($button) : ?>
                        <div class="text-center">
                          <h2><?php echo $title; ?></h2>
                          <?php echo $subtitle; ?>
                            <div class="row_btn text-center">
                              <a href="<?php echo $button_link; ?>" class="button">
                                <?php echo $button_text; ?>
                              </a>
                            </div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php  
            /* --------------------------------------------
              Customers
            -------------------------------------------- */
            elseif ( get_row_layout() == 'customers' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                  $borders            = get_sub_field('borders');
                  $border_width       = get_sub_field('border_width');
                  $border_length      = get_sub_field('border_length');
                  $border_color       = get_sub_field('border_color');
                  $background_color   = get_sub_field('background_color');
                  $background         = get_sub_field('background');
                  $headline             = get_sub_field('headline');
                ?>

                <div class="section <?php echo ($section_index)?> customers-layout"
                  <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                >
                <?php
                  if ($borders) :
                        echo '<style>.section.'.$section_index.':after{ max-width:'.$border_length.'%; border-bottom:'.$border_width.'px solid '.$border_color.'; left: calc(50% - '.($border_length/2).'%);}</style>';
                  endif;
                ?>
                  <div class="row">
                  <div class="row-container">
                      <div class="text-center">
                          <h2><?php echo $headline; ?></h2>
                      </div>
                      <div class="customers">
                              <?php if ( have_rows('customers') ) :
                                  while ( have_rows('customers') ) : the_row();
                                      echo '      <div class="columns large-3 medium-3">';
                                      echo '          <div class="customer_logo"><div><img class="lazyload" alt="Screenshot App" data-src="' . get_sub_field('customer_logo') . '" alt="' .get_sub_field('customer_alt'). '" /></div></div>';
                                      echo '      </div>';
                                  endwhile;
                              endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>


            <?php  
            /* --------------------------------------------
              Testimonials
            -------------------------------------------- */
            elseif ( get_row_layout() == 'testimonials' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                  $borders            = get_sub_field('borders');
                  $border_width       = get_sub_field('border_width');
                  $border_length      = get_sub_field('border_length');
                  $border_color       = get_sub_field('border_color');
                  $background_color   = get_sub_field('background_color');
                  $background         = get_sub_field('background');
                  $headline             = get_sub_field('headline');
                ?>

                <div class="section <?php echo ($section_index)?> testimonials-layout"
                  <?php echo ($background) ? 'style="background-color:' . $background_color . '"' : ''; ?>
                >
                <?php
                  if ($borders) :
                        echo '<style>.section.'.$section_index.':after{ max-width:'.$border_length.'%; border-bottom:'.$border_width.'px solid '.$border_color.'; left: calc(50% - '.($border_length/2).'%);}</style>';
                  endif;
                ?>
                  <div class="row">
                    <div class="row-container">
                    <?php if ($headline) : ?>
                      <div class="text-center text-line head">
                          <h2><?php echo $headline; ?></h2>
                      </div>
                    <?php endif; ?>
                      <div class="testimonials medium-offset-1 medium-10">
                              <?php if ( have_rows('testimonials') ) :
                                  while ( have_rows('testimonials') ) : the_row();
                                      echo '      <div class="columns large-4 medium-4 text-center col-photo">';
                                      echo '          <div class="photo"><img class="lazyload" alt="Screenshot App" data-src="' . get_sub_field('photo') . '"/></div>';
                                      echo '      </div>';
                                      echo '      <div class="columns large-8 medium-8 col-quote">';
                                      echo '          <div class="quote_container">';
                                      echo '            <div class="quote">';
                                      echo                get_sub_field('quote');
                                      echo '            </div>';
                                      echo '            <div class="author_info">';
                                      echo '              <div class="author_name">';
                                      echo                  get_sub_field('author_name');
                                      echo '              </div>';
                                      echo '              <div class="author_position">';
                                      echo                  get_sub_field('author_position');
                                      echo '              </div>';
                                      echo '            </div>';
                                      echo '          </div>';
                                      echo '      </div>';
                                  endwhile;
                              endif; ?>
                      </div>
                      <?php if ($bottomline) : ?>
                        <div class="text-center text-line bottom">
                            <h3><?php echo $bottomline; ?></h3>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php endif; //end if layout ?>
        <?php endwhile; //end while main flex content ?>
    <?php endif; //end if have rows mail flex content ?>


<?php get_footer(); ?>