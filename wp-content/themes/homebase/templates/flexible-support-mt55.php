<?php
/*
Template Name: Support - MT55
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
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
              $scroll_anchor            = get_sub_field('scroll_anchor');
              $border                   = get_sub_field('add_border_bottom');
              $headline                 = get_sub_field('headline');
              $question_text            = get_sub_field('question_text');
              $link_text                = get_sub_field('link_text');
              $link_url                 = get_sub_field('link_url');
              $image_for_desktop        = get_sub_field('image_for_desktop');
              $image_for_mobile         = get_sub_field('image_for_mobile');
              ?>

                <div class="section col-2-section section-hero <?php echo ($section_index)?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="container">
                    <div class="row">
                      <div class="col col-12 col-sm-5 offset-sm-1 col-2-left-col text-left">
                        <div class="col-inner">
                        <?php
                        // headline
                        if ($headline) :
                          echo '<h1 class="fw-black">' . $headline . '</h1>';
                        endif;?>

                        <form
                          action="https://support.joinhomebase.com/hc/en-us/search/"
                          method="GET"
                          target="_blank"
                          class="zendesk-search"
                        >
                          <input type="text" aria-label="How can we help you?" name="query">
                          <input type="hidden" name="utf8" value="✓">
                          <input type="hidden" name="commit" value="Search">
                        </form>

                        <?php if ($question_text) : ?>
                          <div class="question_text">
                            <?php echo $question_text; ?>
                          </div>
                        <?php endif; ?>

                        <?php if ($link_url && $link_text) : ?>
                          <div class="text-link">
                            <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                          </div>
                        <?php endif;?>
                        </div>
                      </div>

                      <?php
                      // image
                      if ($image_for_desktop || $image_for_mobile ) : ?>
                        <div class="col col-12 col-sm-6 text-right col-2-right-col">
                          <div class="col-2-img img-desktop"><div class="col-inner">
                            <img src="<?php echo $image_for_desktop['url']; ?>" alt="<?php echo $image_for_desktop['alt']; ?>">
                          </div></div>
                          <div class="col-2-img img-mobile"><div class="col-inner">
                            <img src="<?php echo $image_for_mobile['url']; ?>" alt="<?php echo $image_for_mobile['alt']; ?>">
                          </div>
                        </div></div>
                      <?php endif; ?>

                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Guide Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_guide' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $scroll_anchor     = get_sub_field('scroll_anchor');
              $border                = get_sub_field('add_border_bottom');

              $tab_icon_o            = get_sub_field('tab_icon_o');
              $tab_title_o           = get_sub_field('tab_title_o');
              $headline_o            = get_sub_field('headline_o');
              $button_text_o         = get_sub_field('button_text_o');
              $button_link_o         = get_sub_field('button_link_o');

              $v_headline_o                 = get_sub_field('v_headline_o');
              $v_subheadline_o              = get_sub_field('v_subheadline_o');
              $v_button_text_o              = get_sub_field('v_button_text_o');
              $v_button_link_o              = get_sub_field('v_button_link_o');

              $tab_icon_e            = get_sub_field('tab_icon_e');
              $tab_title_e           = get_sub_field('tab_title_e');
              $headline_e            = get_sub_field('headline_e');
              $button_text_e         = get_sub_field('button_text_e');
              $button_link_e         = get_sub_field('button_link_e');

              $v_headline_e                 = get_sub_field('v_headline_e');
              $v_subheadline_e              = get_sub_field('v_subheadline_e');
              $v_button_text_e              = get_sub_field('v_button_text_e');
              $v_button_link_e              = get_sub_field('v_button_link_e');
              ?>

              <div class="section col-2-section section-guide <?php echo ($border) ? 'border-bottom' : '';?> <?php echo ($section_index)?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                <div class="row tabs">
                  <div class="col col-6 tab left-tab active" data-tab="#tab-owner">
                    <div class="col-inner">
                      <div class="tab-container">
                        <div class="tab-icon">
                          <img src="<?php echo $tab_icon_o['url']; ?>" alt="<?php echo $tab_icon_o['alt']; ?>">
                        </div>
                        <div class="tab-title">
                          <P><?php echo $tab_title_o; ?></P>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col col-6 tab right-tab" data-tab="#tab-employee">
                    <div class="col-inner">
                      <div class="tab-container">
                        <div class="tab-icon">
                          <img src="<?php echo $tab_icon_e['url']; ?>" alt="<?php echo $tab_icon_e['alt']; ?>">
                        </div>
                        <div class="tab-title">
                          <P><?php echo $tab_title_e; ?></P>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row tab-contents">
                    <div id="tab-owner" class="col col-12 tab-content active">
                      <div class="col-inner">
                        <div class="guide-container col-12 col-md-10 offset-md-1">
                          <div class="content-header">
                            <h2 class="fw-black"><?php echo $headline_o; ?></h2>
                          </div>

                          <?php if( have_rows('guide_items_o') ): ?>
                            <div class="row guides">
                            <?php  while ( have_rows('guide_items_o') ) : the_row(); 
                              $icon             = get_sub_field('icon');
                              $text             = get_sub_field('text');
                              $link_text        = get_sub_field('link_text');
                              $link_url         = get_sub_field('link_url');
                            ?>
                              <div class="col col-12 col-sm-3">
                                <div class="col-inner">
                                  <div class="icon-wrapper">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                  </div>
                                  <div class="text-wrapper">
                                    <p><?php echo $text; ?></p>
                                  </div>
                                  <div class="link-wrapper">
                                    <a href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a>
                                  </div>
                                </div>
                              </div>
                            <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                          <div class="button-container">
                            <a class="button" href="<?php echo $button_link_o; ?>" target="_blank" rel="noopener noreferrer"><?php echo $button_text_o; ?></a>
                          </div>
                        </div>
                        <div class="video-container">
                          <div class="row">
                            <div class="col col-sm-5 left-col">
                              <div class="col-inner">
                                <div class="wrapper">
                                <?php
                                  if ($v_headline_o) :
                                  echo '<h2 class="fw-bold">' . $v_headline_o . '</h2>';
                                endif;?>

                                <?php if ($v_subheadline_o) : ?>
                                  <h3 class="subheading"><?php echo $v_subheadline_o; ?></h3>
                                <?php endif; ?>
                                </div>
                              </div>
                            </div>

                            <?php if( have_rows('video_items_o') ): ?>
                              <div class="col col-sm-7 right-col"><div class="col-inner">
                              <?php  while ( have_rows('video_items_o') ) : the_row(); 
                                $item_type           = get_sub_field('item_type');
                                $video_src           = get_sub_field('video_source');
                                $image               = get_sub_field('image');
                                $headline            = get_sub_field('item_headline');
                                $content             = get_sub_field('content');
                                $link_text           = get_sub_field('link_text');
                                $link_url            = get_sub_field('link_url');
                              ?>
                                <div class="video-item <?php echo ($item_type == 'Video') ? 'video' : 'pdf'; ?>">
                                  <div class="item-left-col">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php if( $item_type == 'Video' ): ?>
                                    <div class="overlay">
                                      <a href="<?php echo $video_src; ?>" target="_blank" rel="noopener noreferrer">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/icon_video.png' ?>" alt="Play Now"/>
                                      </a>
                                    </div>
                                    <?php endif; ?>
                                  </div>
                                  <div class="item-right-col">
                                    <a href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer">
                                      <div class="headline"><?php echo $headline; ?></div>
                                      <div class="content"><?php echo $content; ?></div>
                                      <div class="video-link"><?php echo $link_text; ?></div>
                                    </a>
                                  </div>
                                </div>

                              <?php  endwhile; ?>
                              </div></div>
                            <?php endif; ?>
                          </div>
                          <div class="row text-center">
                            <div class="col">
                              <div class="col-inner">
                                <div><a class="button" href="<?php echo $v_button_link_o; ?>" target="_blank" rel="noopener noreferrer"><?php echo $v_button_text_o; ?></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="tab-employee" class="col col-12 tab-content">
                      <div class="col-inner">
                        <div class="guide-container col-12  col-sm-10 offset-sm-1">
                          <div class="content-header">
                            <h2 class="fw-black"><?php echo $headline_e; ?></h2>
                          </div>

                          <?php if( have_rows('guide_items_e') ): ?>
                            <div class="row guides">
                            <?php  while ( have_rows('guide_items_e') ) : the_row(); 
                              $icon             = get_sub_field('icon');
                              $text             = get_sub_field('text');
                              $link_text        = get_sub_field('link_text');
                              $link_url         = get_sub_field('link_url');
                            ?>
                              <div class="col col-12 col-sm-3">
                                <div class="col-inner">
                                  <div class="icon-wrapper">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                  </div>
                                  <div class="text-wrapper">
                                    <p><?php echo $text; ?></p>
                                  </div>
                                  <div class="link-wrapper">
                                    <a href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a>
                                  </div>
                                </div>
                              </div>
                            <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                          <div class="button-container">
                            <div><a class="button" href="<?php echo $button_link_e; ?>" target="_blank" rel="noopener noreferrer"><?php echo $button_text_e; ?></a></div>
                          </div>
                        </div>

                        <div class="video-container">
                          <div class="row">
                            <div class="col col-12 col-sm-5 left-col">
                              <div class="col-inner">
                                <div class="wrapper">
                                <?php
                                  if ($v_headline_e) :
                                  echo '<h2 class="fw-bold">' . $v_headline_e . '</h2>';
                                endif;?>

                                <?php if ($v_subheadline_e) : ?>
                                  <h3 class="subheading"><?php echo $v_subheadline_e; ?></h3>
                                <?php endif; ?>
                                </div>
                              </div>
                            </div>

                            <?php if( have_rows('video_items_e') ): ?>
                              <div class="col col-12 col-sm-7 right-col"><div class="col-inner">
                              <?php  while ( have_rows('video_items_e') ) : the_row(); 
                                $item_type           = get_sub_field('item_type');
                                $video_src           = get_sub_field('video_source');
                                $image               = get_sub_field('image');
                                $headline            = get_sub_field('item_headline');
                                $content             = get_sub_field('content');
                                $link_text           = get_sub_field('link_text');
                                $link_url            = get_sub_field('link_url');
                              ?>
                                <div class="video-item <?php echo ($item_type == 'Video') ? 'video' : 'pdf'; ?>">
                                  <div class="item-left-col">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php if( $item_type == 'Video' ): ?>
                                    <div class="overlay">
                                      <a href="<?php echo $video_src; ?>" target="_blank" rel="noopener noreferrer">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/icon_video.png' ?>" alt="Play Now"/>
                                      </a>
                                    </div>
                                    <?php endif; ?>
                                  </div>
                                  <div class="item-right-col">
                                    <a href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer">
                                      <div class="headline"><?php echo $headline; ?></div>
                                      <div class="content"><?php echo $content; ?></div>
                                      <div class="video-link"><?php echo $link_text; ?></div>
                                    </a>
                                  </div>
                                </div>

                              <?php  endwhile; ?>
                              </div></div>
                            <?php endif; ?>
                          </div>
                          <div class="row text-center">
                            <div class="col">
                              <div class="col-inner">
                                <div><a class="button" href="<?php echo $v_button_link_e; ?>" target="_blank" rel="noopener noreferrer"><?php echo $v_button_text_e; ?></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php if ($border) :
                    echo '<div class="row border"></div>';
                  endif;?>
                </div>
              </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Contact us Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_contact' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : 
                $scroll_anchor            = get_sub_field('scroll_anchor');
                $add_border_bottom        = get_sub_field('add_border_bottom');
                $headline                 = get_sub_field('headline');
                $subheadline              = get_sub_field('subheadline');
              ?>
                <div class="section section-contact <?php echo ($section_index)?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="container">
                
                    <div class="row header">
                      <div class="col col-12">
                        <div class="col-inner">
                          <?php
                          if ($headline) :
                            echo "<h2 class='fw-bold'>".$headline."</h2>";
                          endif;

                          if ($subheadline) :
                            echo "<h3>".$subheadline."</h3>";
                          endif;?>
                        </div>
                      </div>
                    </div>
                    <div class="row content">
                      <?php if( have_rows('contact_methods') ): ?>
                        <?php  while ( have_rows('contact_methods') ) : the_row(); 
                          $title              = get_sub_field('title');
                          $icon               = get_sub_field('icon');
                          $link_text          = get_sub_field('link_text');
                          $link_url           = get_sub_field('link_url');
                          $content            = get_sub_field('content');
                        ?>
                          <div class ="col col-12 col-sm-6 contact-item">
                            <div class="col-inner">
                              <div class="item-wrapper">
                                <div class="item-title"><?php echo $title; ?></div>
                                <div class="item-method"><a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></div>
                                <div class="item-img"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></div>
                                <div class="item_text"><?php echo $content; ?></div>
                              </div>
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
              Testimonial Widget
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_testimonial' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : 
                $scroll_anchor            = get_sub_field('scroll_anchor');
                $add_border_bottom        = get_sub_field('add_border_bottom');
                $name                     = get_sub_field('name');
                $position                 = get_sub_field('position');
                $quote                    = get_sub_field('quote');
              ?>
                <div class="section section-testimonial <?php echo ($section_index)?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="wrapper">
                            <?php
                            if ($quote) :
                              echo "<div class='quote'>".$quote."</div>";
                            endif;?>
                            <div class="customer-info">
                            <?php if ($name) :?>
                              <div class="customer-name"><?php echo $name; ?></div>
                            <?php endif; ?>
                            <?php if ($position) :?>
                              <div class="customer-position"><?php echo $position; ?></div>
                            <?php endif; ?>
                            </div>
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