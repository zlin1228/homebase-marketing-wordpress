<?php
/*
Template Name: Labor law guides - MT120
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
$statepage            = get_field('state_page');
?>


<?php if ($statepage) : ?>
  <div class="section section-breadcrumbs">
    <div class="container">
      <?php
        if ( function_exists('yoast_breadcrumb') ) :
          yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
        endif;
      ?>
    </div>
  </div>  
<?php endif; ?>


<?php 

if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $wid                    = get_sub_field('w_id');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      $add_download_btn       = get_sub_field('add_download_btn');
      $state_btn_text         = get_sub_field('state_btn_text');
      $state_btn_link         = get_sub_field('state_btn_link');
      $federal_btn_text       = get_sub_field('federal_btn_text');
      $federal_btn_link       = get_sub_field('federal_btn_link');
      $image                  = get_sub_field('image');
      ?>

        <div class="section section-hero" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-5 offset-sm-1 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h1 class="fw-black <?php echo ($statepage)? 'small': ''; ?>"><?php echo $headline; ?></h1>
                    <?php endif; ?>
                    <?php if ($subheadline) : ?>
                      <h2 class="subheading"><?php echo $subheadline; ?></h2>
                    <?php endif; ?>

                    <?php if ($add_download_btn) : ?>
                      <div class="group-buttons">
                        <a class="button secondary" href="<?php echo $state_btn_link; ?>" target="_blank" rel="noopener noreferrer"><?php echo $state_btn_text; ?></a>
                        <a class="button secondary" href="<?php echo $federal_btn_link; ?>" target="_blank" rel="noopener noreferrer"><?php echo $federal_btn_text; ?></a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="img-wrapper">
                  <?php if ($image ) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
      Card widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_card' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $wid                    = get_sub_field('w_id');
      $headline               = get_sub_field('headline');
      $subheadline            = get_sub_field('subheadline');
      ?>

        <div class="section section-card" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="bglayer"><div class="bginner"></div></div>
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="card-container">
                    <div class="card-wrapper">
                      <?php
                      // headline
                      if ($headline) 
                        echo '<h3 class="fw-black">' . $headline . '</h3>';
                      if ($subheadline) 
                        echo '<h3 class="subheading">' . $subheadline . '</h3>';
                      ?>
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
      Wages and breaks widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_wages_breaks' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
      $wid            = get_sub_field('w_id');
      $headline       = get_sub_field('headline');
      ?>

        <div class="section section-wb" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
         <div class="container">
            <div class="row">
              <div class="col col-12 ">
                <div class="col-inner">
                  <div class="header-wrapper">
                    <?php
                    if ($headline) 
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    ?>
                  </div>

                  <?php if( have_rows('cards') ): ?>
                  <div class="card-wrapper">
                    <?php while( have_rows('cards') ): the_row(); 
                      $card_number        = get_sub_field('card_number');
                      $card_perx          = get_sub_field('card_perx');
                      $card_number_append = get_sub_field('card_number_append');
                      $card_title         = get_sub_field('card_title');
                      $card_content       = get_sub_field('card_content');
                    ?>
                      <div class="card">
                        <div class="card-container">
                          <div class="card-header">
                            <div class="number">
                              <span class="number-main"><?php echo $card_number; ?></span>
                              <?php if ($card_number_append) : ?>
                              <span class="append"><?php echo $card_number_append; ?></span>
                              <?php endif; ?>
                              <?php if ($card_perx) : ?>
                                <span class="prex"><?php echo $card_perx; ?></span>
                              <?php endif; ?>
                            </div>
                            <div class="title"><?php echo $card_title; ?></div>
                          </div>
                          <div class="content-wrapper">
                            <div class="card-content">
                              <?php echo $card_content; ?>
                            </div>
                            <a class="read-more" href="#">Read more</a>  
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <?php endif; ?>

                  <div class="row row-2cols">
                    <div class="col col-12 col-sm-6 col-left">
                      <div class="col-inner">
                      <?php if( have_rows('paychecks') ): ?>
                        <?php while( have_rows('paychecks') ): the_row(); 
                          $icon_paychecks       = get_sub_field('icon_paychecks');
                          $title_paychecks      = get_sub_field('title_paychecks');
                          $content_paychecks    = get_sub_field('content_paychecks');
                        ?>
                          <div class="col-wrapper">
                            <?php if($icon_paychecks) :?>
                              <img class="icon" src="<?php echo $icon_paychecks['url']; ?>" alt="<?php echo $icon_paychecks['alt']; ?>">
                            <?php endif; ?>

                            <?php if($title_paychecks) :?>
                              <h3 class="subheading fw-bold"><?php echo $title_paychecks; ?></h3>
                            <?php endif; ?>

                            <?php if($content_paychecks) :?>
                              <?php echo $content_paychecks; ?>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                      </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-right">
                      <div class="col-inner">
                      <?php if( have_rows('child_law') ): ?>
                        <?php while( have_rows('child_law') ): the_row(); 
                          $icon_child       = get_sub_field('icon_child');
                          $title_child      = get_sub_field('title_child');
                          $content_child    = get_sub_field('content_child');
                        ?>
                          <div class="col-wrapper">
                            <?php if($icon_child) :?>
                              <img class="icon" src="<?php echo $icon_child['url']; ?>" alt="<?php echo $icon_child['alt']; ?>">
                            <?php endif; ?>

                            <?php if($title_child) :?>
                              <h3 class="subheading fw-bold"><?php echo $title_child; ?></h3>
                            <?php endif; ?>

                            <?php if($content_child) :?>
                              <?php echo $content_child; ?>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
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
      Hiring and Firing widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_hire_fire' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid            = get_sub_field('w_id');
        $headline       = get_sub_field('headline');
        $icon_hire      = get_sub_field('icon_hire');
        $icon_fire      = get_sub_field('icon_fire');
      ?>

        <div class="section section-hf" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container-narrow">
            <div class="row row-header">
              <div class="col col-12 ">
                <div class="col-inner">
                  <div class="header-wrapper">
                    <?php
                    if ($headline) 
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row row-2cols">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if($icon_hire) :?>
                    <div class="icon"><img src="<?php echo $icon_hire['url']; ?>" alt="<?php echo $icon_hire['alt']; ?>"></div>
                    <?php endif; ?>
                    <?php if( have_rows('hiring') ): ?>
                      <?php while( have_rows('hiring') ): the_row(); 
                        $title        = get_sub_field('title');
                        $content      = get_sub_field('content');
                      ?>
                        <div class="content-block">
                          <?php if($title) :?>
                            <div class="title"><?php echo $title; ?></div>
                          <?php endif; ?>

                          <?php if($content) :?>
                            <?php echo $content; ?>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if($icon_fire) :?>
                    <div class="icon"><img src="<?php echo $icon_fire['url']; ?>" alt="<?php echo $icon_fire['alt']; ?>"></div>
                    <?php endif; ?>
                    <?php if( have_rows('firing') ): ?>
                      <?php while( have_rows('firing') ): the_row(); 
                        $title        = get_sub_field('title');
                        $content      = get_sub_field('content');
                      ?>
                        <div class="content-block">
                          <?php if($title) :?>
                            <div class="title"><?php echo $title; ?></div>
                          <?php endif; ?>

                          <?php if($content) :?>
                            <?php echo $content; ?>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
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
      Additional laws widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_additional_laws' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid            = get_sub_field('w_id');
        $headline       = get_sub_field('headline');
        $image          = get_sub_field('image');
      ?>

        <div class="section section-addlaws" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12 col-sm-5 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($image) : ?>
                      <img class="mobile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>

                    <?php if ($headline) : ?>
                      <h2 class="fw-black"><?php echo $headline; ?></h2>
                    <?php endif; ?>

                    <?php if ($image) : ?>
                      <img class="desktop" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-7 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">               
                    <?php if( have_rows('additional_laws') ): ?>
                      <?php while( have_rows('additional_laws') ): the_row(); 
                        $title        = get_sub_field('title');
                        $content      = get_sub_field('content');
                      ?>
                        <div class="law-block">
                          <?php if($title) :?>
                            <div class="title"><?php echo $title; ?></div>
                          <?php endif; ?>

                          <?php if($content) :?>
                            <?php echo $content; ?>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
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
      State table
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_state_table' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid            = get_sub_field('w_id');
        $headline       = get_sub_field('headline');
      ?>

        <div class="section section-state-table" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="header-wrapper">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h3 class="subheading fw-bold">' . $headline . '</h3>';
                    
                    ?>
                  </div>

                  <div class="table-wrapper">
                    <?php if( have_rows('row_states') ): ?>
                      <table>
                        <tbody>
                          <?php while( have_rows('row_states') ): the_row(); ?>
                            <tr>
                              <?php if( have_rows('states') ): ?>
                                <?php while( have_rows('states') ): the_row(); ?>
                                  <td align="center" >
                                    <?php  
                                      $link = get_sub_field('state'); 
                                    ?>
                                    <?php if($link) : ?>
                                    <a href="<?php echo esc_url( $link['url']); ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><?php echo esc_html( $link['title'] ); ?></a>
                                    <?php endif; ?>
                                  </td>
                                <?php endwhile; ?>
                              <?php endif; ?>
                            </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    <?php endif; ?>
                  </div>

                  <div class="select-wrapper">
                    <?php if( have_rows('row_states') ): ?>
                      <select id="liststate">
                        <option value="" hidden selected>Select your state</option>
                        <?php while( have_rows('row_states') ): the_row(); ?>
                          <?php if( have_rows('states') ): ?>
                            <?php while( have_rows('states') ): the_row(); ?>
                              <?php  
                                $link = get_sub_field('state'); 
                                $link_target = $link['target'] ? $link['target'] : '_self';
                              ?>
                              <?php if($link) : ?>
                              <option value="<?php echo esc_url( $link['url']); ?>"><?php echo esc_html( $link['title'] ); ?></option>
                              <?php endif; ?>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </select>
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
      Requirements table
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_requirements_table' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid          = get_sub_field('w_id');
        $headline     = get_sub_field('headline');
      ?>

        <div class="section section-requirements" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
         <div class="container">
            <div class="row">
              <div class="col col-12 ">
                <div class="col-inner">
                  <div class="header-wrapper">
                    <?php
                    // headline
                    if ($headline) 
                      echo '<h2 class="fw-black">' . $headline . '</h2>';
                    ?>
                  </div>

                  <?php if( have_rows('table_requirements') ): ?>
                  <div class="requirements-wrapper">
                    <?php while( have_rows('table_requirements') ): the_row(); 
                      $checked      = get_sub_field('checked');
                      $title        = get_sub_field('title');
                      $content      = get_sub_field('content');
                    ?>
                      <div class="item-requirement <?php echo ($checked) ? 'checked' : ''; ?>">
                        <div class="item-container">
                          <div class="title"><?php echo $title; ?></div>                            
                          <div class="description"><?php echo $content; ?></div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
      Remember and Aditional Resources widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_remember' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid              = get_sub_field('w_id');
        $rem_title        = get_sub_field('rem_title');
        $rem_content      = get_sub_field('rem_content');
        $resource_title   = get_sub_field('resource_title');
      ?>

        <div class="section section-remember" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if($rem_title) :?>
                      <div class="title"><?php echo $rem_title; ?></div>
                    <?php endif; ?>

                    <?php if($rem_content) :?>
                      <?php echo $rem_content; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if($resource_title) :?>
                      <h3 class="subheading fw-bold"><?php echo $resource_title; ?></h3>
                    <?php endif; ?>

                    <?php if( have_rows('additional_links') ): ?>
                      <div class="resource-wrapper">
                      <?php while( have_rows('additional_links') ): the_row(); 
                        $link = get_sub_field('resource'); 
                        $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                        <a class="text-link-arrow" href="<?php echo esc_url( $link['url']); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                      <?php endwhile;?>
                      </div>
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
      Link banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_link_banner' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid              = get_sub_field('w_id');
        $pre_text         = get_sub_field('pre_text');
      ?>

        <div class="section section-link-banner" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container">
            <div class="row v-align-middle">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($pre_text) : ?>
                      <span class="pre-text"><?php echo $pre_text; ?></span>
                    <?php endif;?>

                    <?php if( have_rows('links') ): ?>
                    <div class="link-group">
                      <?php while( have_rows('links') ): the_row(); 
                        $link_text      = get_sub_field('link_text');
                        $link_url       = get_sub_field('link_url');
                      ?>
                        <?php if ($link_text) : ?>
                          <div class="link-item">
                            <?php if ($link_url) : ?>
                            <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                            <?php else : ?>
                              <span><?php echo $link_text; ?></span>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
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
      CTA widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_cta_widget' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>

      <?php
        $wid              = get_sub_field('w_id');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $button_text      = get_sub_field('button_text');
        $button_link      = get_sub_field('button_link');
      ?>

        <div class="section section-cta-banner" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container-narrow">
            <div class="row v-align-middle">
              <div class="col col-12 col-sm-8 col-left">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="subheading fw-bold"><?php echo $headline; ?></h3>
                    <?php else : ?>
                      <h3 class="subheading fw-bold">HR for people who don't do HR.</h3>
                    <?php endif;?>
                    <?php if ($subheadline) : ?>
                      <p class="subheadline"><?php echo $subheadline; ?></p>
                    <?php else : ?>
                      <p class="subheadline">Homebase gives you modern tools and guidance to keep you compliant.</p>
                    <?php endif;?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-4 col-right">
                <div class="col-inner">
                  <div class="col-wrapper">
                    <?php if ($button_link) : ?>
                      <?php if ($button_text) : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                      <?php else : ?>
                        <a class="button primary" href="<?php echo $button_link; ?>">Learn more</a>
                      <?php endif; ?>
                    <?php else : ?>
                      <?php if ($button_text) : ?>
                        <a class="button primary" href="/hr-compliance/"><?php echo $button_text; ?></a>
                      <?php else : ?>
                        <a class="button primary" href="/hr-compliance/">Learn more</a>
                      <?php endif; ?>
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
      Subscribe Banner
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_subscribe' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $wid                  = get_sub_field('w_id');
        $type                 = get_sub_field('type');
        $headline             = get_sub_field('headline');
        $subheadline          = get_sub_field('subheadline');
        $button_text          = get_sub_field('button_text');
        $form_link            = get_sub_field('form_link');

        $state_list = get_state_array();
        ?>

        <div class="section section-subscribe" <?php echo ($wid) ? 'id="'.$wid.'"' : ''; ?>>
          <div class="container-narrow">
            <div class="row">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="content-wrapper">
                    <div class="header">
                    <?php

                    if ($headline) :
                      echo '<h3 class="fw-black">' . $headline . '</h3>';
                    endif;

                    if ($subheadline) :
                      echo '<h3 class="subheading">' . $subheadline . '</h3>';
                    endif;?>
                    </div>

                    <div class="form">
                      <form name="subscribe" 
                          action="<?php echo $form_link; ?>"
                          method="POST"
                          class="email"
                      >
                        <div class="form-item">
                          <input class="homeform" aria-label="email address" type="email" name="email" placeholder="Enter your email address" required/>
                        </div>
                        <div class="form-item">
                          <select name="location_state" required>
                            <option value="" hidden selected>Select your state</option>
                            <?php
                              foreach($state_list as $key => $state) {
                                echo '<option value="'.$key.'">'.$state.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <div class="form-item">
                          <button type="submit" class="button primary"><?php echo $button_text; ?></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="remodal subcribe-confirm" data-remodal-id="modal-subscribe" role="dialog" aria-labelledby="modal-title" aria-describedby="modal-subtitle" data-remodal-options="hashTracking: false">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="row text-center">
                <h2 id="modal-title"></h2>
                <div class="modal-body" data-remodal-body="body">Thanks for subscribing.</div>
                <div class="modal-footer"><button data-remodal-action="confirm" class="button primary">OK</button></div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      
    <?php endif; //end if layout ?>
  <?php endwhile; //end while main flex content ?>
<?php endif; //end if have rows mail flex content ?>

</main>
<?php get_footer(); ?>