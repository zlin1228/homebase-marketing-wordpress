<?php
/*
Template Name: Future of work
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">
<?php
  if ( have_rows('flex_content') ) :

    while ( have_rows('flex_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'flex_hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $headline               = get_sub_field('headline');
        $bg_image               = get_sub_field('bg_image');
        $text               	  = get_sub_field('text');
        ?>

          <div class="section section-hero" <?php echo ($id) ? "id='".$id."'" : '';?> style="background-image: url(<?php echo $bg_image['url']; ?>);">
            <div class="container-narrow">
              <div class="headline">
              	<h1><?php echo $headline; ?></h1>
              </div>
              <div class="text-arrow">
              	<div class="text">
              		<?php echo $text; ?>
              	</div>
              </div>              
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Are you ready
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_are_you_ready' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $text = get_sub_field('text'); 
        ?>
          
          <div class="section section-are-you-ready" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <?php if ($text): ?>
                <h2><?php echo $text; ?></h2>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Outsmarting
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_outsmarting' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $section_bg_image   = get_sub_field('section_bg_image');
          $headline           = get_sub_field('headline');
          $text               = get_sub_field('text');
          $front_image        = get_sub_field('front_image');
          $back_image         = get_sub_field('back_image');
        ?>

          <div class="section section-outsmarting" <?php echo ($id) ? "id='".$id."'" : '';?> style="background-image: url(<?php echo $section_bg_image['url']; ?>);">
            <div class="container-narrow">
              <div class="col-left">
                <?php if ($headline): ?>
                  <h2><?php echo $headline; ?></h2>
                <?php endif; ?>
                <?php if ($text): ?>
                  <?php echo $text; ?>
                <?php endif; ?>
              </div>
              <div class="col-right">
                <div class="back-image">
                  <img src="<?php echo $back_image['url']; ?>" alt="<?php echo $back_image['alt']; ?>">
                </div>
                <div class="front-image">
                  <img src="<?php echo $front_image['url']; ?>" alt="<?php echo $front_image['alt']; ?>">
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Resignation with vertical charts
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_resignation_vertical' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                  = get_sub_field('widget_id');
        $text                = get_sub_field('text');
        $image               = get_sub_field('image');
        ?>

          <div class="section-resignation-vertical" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="col-left">
                <div class="image">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="hline-left"></div>
                <div class="text">
                  <?php echo $text; ?>
                </div>
              </div>
              <div class="col-right">
                <?php if(have_rows('charts')) : ?>
                <div class="charts">
                  <?php while(have_rows('charts')) :  the_row(); 
                    $percent               = get_sub_field('percent');
                    $text_below_chart      = get_sub_field('text_below_chart');
                  ?> 
                  <div class="chart">
                    <div class="chart-bg">
                      <div class="chart-fill" data-percent="<?php echo $percent; ?>">
                        <div class="percent">
                          <?php echo $percent . '%'; ?>
                        </div>
                      </div>
                    </div>
                    <div class="chart-text">
                      <?php echo $text_below_chart; ?>
                    </div>
                  </div>
                  <?php endwhile; ?>   
                </div>  
                <?php endif; ?> 
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Resignation with horizontal charts
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_resignation_horizontal' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                  = get_sub_field('widget_id');
        $text                = get_sub_field('text');
        ?>

          <div class="section-resignation-horizontal" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="col-left">                
                <?php if(have_rows('charts')) : ?>
                <div class="charts">
                  <?php while(have_rows('charts')) :  the_row(); 
                    $percent               = get_sub_field('percent');
                    $text_above_chart      = get_sub_field('text_above_chart');
                  ?> 
                  <div class="chart">
                    <div class="chart-text">
                      <div class="percent">
                        <?php echo $percent . '%'; ?>
                      </div>
                      <div class="text-above-chart">
                        <?php echo $text_above_chart; ?>
                      </div>
                      
                    </div>
                    <div class="chart-bg">
                      <div class="chart-fill" data-percent="<?php echo $percent; ?>">                        
                      </div>
                    </div>                    
                  </div>
                  <?php endwhile; ?>   
                </div>  
                <?php endif; ?>
              </div>
              <div class="col-right">                
                <div class="text">
                  <?php echo $text; ?>
                </div>
                <div class="hline-right"></div> 
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Resignation quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_resignation_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $section_bg_image   = get_sub_field('section_bg_image');
          $author_title       = get_sub_field('author_title');
          $author_company     = get_sub_field('author_company');
          $author_name        = get_sub_field('author_name');
          $author_position    = get_sub_field('author_position');
          $quote              = get_sub_field('quote');
          $back_image         = get_sub_field('back_image');
          $front_image        = get_sub_field('front_image');
        ?>

          <div class="section section-resignation-quote" <?php echo ($id) ? "id='".$id."'" : '';?> style="background-image: url(<?php echo $section_bg_image['url']; ?>);">
            <div class="hline-left"></div>
            <div class="container-narrow">
              <div class="author-info-top">
                <?php if ($author_title): ?>
                  <?php echo "<span class='author-title'>" . $author_title . "</span>"; ?>
                <?php endif; ?>
                <?php if ($author_company): ?>
                  <?php echo " | " . $author_company; ?>
                <?php endif; ?>
              </div>
              <?php if ($quote): ?>
              <div class="quote">
                <h3><?php echo $quote; ?></h3>
              </div>
              <?php endif; ?>
              <div class="image">
                <div class="back-image">
                  <img src="<?php echo $back_image['url']; ?>" alt="<?php echo $back_image['alt']; ?>">
                </div>
                <div class="front-image">
                  <img src="<?php echo $front_image['url']; ?>" alt="<?php echo $front_image['alt']; ?>">
                </div>
              </div>
              <div class="author-info-bottom">
                <?php if ($author_name): ?>
                  <div class="author-name">
                    <?php echo $author_name; ?>
                  </div>
                <?php endif; ?>
                <?php if ($author_position): ?>
                  <div class="author-position">
                    <?php echo $author_position; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php
      /* --------------------------------------------
        CTA
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $color              = get_sub_field('color');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');
        ?>

          <div class="section section-cta <?php echo $color; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="col-left">
                <?php if ($headline): ?>
                <div class="headline micro">                  
                  <?php echo $headline; ?>                    
                </div>
                <?php endif; ?>
                <?php if ($subheadline): ?>
                <div class="subheadline">                  
                  <?php echo $subheadline; ?>                    
                </div>
                <?php endif; ?>
              </div>
              <div class="col-right">
                <?php if(have_rows('links')) : ?>
                <div class="links">
                  <?php while(have_rows('links')) :  the_row(); 
                    $link_text    = get_sub_field('link_text');
                    $url          = get_sub_field('url');
                  ?>
                  <div class="link">
                    <a href="<?php echo $url; ?>"><?php echo $link_text; ?><object data="<?php echo get_template_directory_uri(); ?>/images/fow-cta-arrow-right.svg" type="image/svg+xml" alt="arrow right>"></object></a>
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
        Newsletter subscription
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_newsletter' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $section_bg_image   = get_sub_field('section_bg_image');
          $headline           = get_sub_field('headline');
          $subheadline        = get_sub_field('subheadline');
          $form_button_text   = get_sub_field('form_button_text');
          $form_button_link   = get_sub_field('form_button_link');
        ?>

          <div class="section section-newsletter" <?php echo ($id) ? "id='".$id."'" : '';?> style="background-image: url(<?php echo $section_bg_image['url']; ?>);">
            <div class="container-narrow">              
              <?php if ($headline): ?>
              <div class="headline">                  
                <?php echo $headline; ?>                    
              </div>
              <?php endif; ?>
              <?php if ($subheadline): ?>
              <div class="subheadline">                  
                <?php echo $subheadline; ?>                    
              </div>
              <?php endif; ?>
              <div class="form">
                <form name="subscribe-fow" 
                  action="<?php echo $form_button_link; ?>"
                  method="POST"
                  class="email-signup-form"
                >
                  <input class="subscribe-country" type="hidden" name="country">
                  <input class="subscribe-source-url" type="hidden" name="source_url">
                  <div class="form-item input">
                    <input class="homeform"
                      aria-label="email address"
                      type="email"
                      name="email"
                      placeholder="Enter email for updates"
                    />
                  </div>
                  <div class="form-item">
                    <button type="submit"
                      aria-label="submit"
                      id="create-account"
                      name="Submit"
                      class="primary"
                    ><?php if($form_button_text) : echo $form_button_text; else : echo "Subscribe"; endif; ?></button>
                  </div>
                </form> 
              </div>              
              
              <?php if(have_rows('future_posts')) : ?>
              <div class="future-posts">
                <?php while(have_rows('future_posts')) :  the_row(); 
                  $coming_soon_date     = get_sub_field('coming_soon_date');
                  $title                = get_sub_field('title');
                  $subtitle             = get_sub_field('subtitle');
                  $front_image          = get_sub_field('front_image');
                  $back_image           = get_sub_field('back_image');
                ?>
                <div class="future-post">
                  <div class="date">
                    <p>Coming soon:</p>
                    <p><?php echo $coming_soon_date; ?></p>
                  </div>
                  <div class="image">
                    <div class="back-image">
                      <img src="<?php echo $back_image['url']; ?>" alt="<?php echo $back_image['alt']; ?>">
                    </div>
                    <div class="front-image">
                      <img src="<?php echo $front_image['url']; ?>" alt="<?php echo $front_image['alt']; ?>">
                    </div>                    
                  </div>
                  <div class="title">
                    <?php echo $title; ?>
                  </div>
                  <div class="subtitle">
                    <?php echo $subtitle; ?>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
              <?php endif; ?>
              
              
            </div>
          </div>

        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Employee info
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_employee' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id           = get_sub_field('widget_id');
          $image        = get_sub_field('image');
          $name         = get_sub_field('name');
          $position     = get_sub_field('position');
          $text         = get_sub_field('text');
        ?>

          <div class="section section-employee" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="image-wrapper">
                <div class="image">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
              </div>                     
              <div class="content">
                <div class="name"><?php echo $name; ?></div>
                <div class="position"><?php echo $position; ?></div>
                <div class="text"><?php echo $text; ?></div>
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php
      /* --------------------------------------------
        We love SMB
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_smb' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $id                 = get_sub_field('widget_id');
          $section_bg_image   = get_sub_field('section_bg_image');
          $headline           = get_sub_field('headline');
          $text               = get_sub_field('text');
          $link_text          = get_sub_field('link_text');
          $link_url           = get_sub_field('link_url');
        ?>

          <div class="section section-smb" <?php echo ($id) ? "id='".$id."'" : '';?> style="background-image: url(<?php echo $section_bg_image['url']; ?>);">
            <div class="hline-left"></div>
            <div class="container-narrow">
              <div class="headline">
                <h3><?php echo $headline; ?></h3>
              </div>                     
              <div class="text">
                <?php echo $text; ?>
              </div>
              <div class="link">
                <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?><object data="<?php echo get_template_directory_uri(); ?>/images/fow-cta-arrow-right.svg" type="image/svg+xml" alt="arrow right>"></object></a>
              </div>
              <div class="hline-right"></div>
            </div>
          </div>

        <?php endif; ?>
      
      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>