<?php
/*
Template Name: GDM-SMS-DEMO-CONFIRMATION
*/
get_header(); ?>

<?php 
  $page_type = get_field('page_type');
?>
<div class="container <?php echo $page_type.'-page-template' ; ?>" role="document">

<?php 

  if($page_type == 'confirm') :   //  Confirmation Page
    if (have_rows('page_content')) : 
      while( have_rows('page_content') ): the_row();
        $page_width           = get_sub_field('page_width');
        $head_image           = get_sub_field('head_image');
        $image_width          = get_sub_field('image_width');
        $headline             = get_sub_field('headline');
        $content       	      = get_sub_field('content');
        $button_text          = get_sub_field('button_text');
        $button_link          = get_sub_field('button_link');
        $add_phone_number     = get_sub_field('add_phone_number');
        $phone_number         = get_sub_field('phone_number');
      endwhile;
    endif; ?>

    <div class="section section-confirm">
      <div class="row" style="max-width:<?php echo $page_width; ?>">
        <div class="head-image">
          <img class="lazyload" data-src="<?php echo $head_image['url']; ?>" alt="<?php echo $head_image['alt']; ?>" style="max-width:<?php echo $image_width; ?>">
        </div>
        <div class="headline">
          <h2><?php echo $headline; ?></h2>
        </div>
        <div class="content">
          <?php echo $content; ?>
        </div>
        <div class="button-wrapper">
          <a class="button" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
        </div>
        <?php if ($add_phone_number) : ?>
          <div class="phone-numebr">
            <span>Or call <a href="tel:1-<?php echo $phone_number ; ?>"><?php echo $phone_number; ?></a></span>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php 
    elseif($page_type == 'gdm') :   //  GDM Page
      if (have_rows('gdm_page_content')) : 
        while( have_rows('gdm_page_content') ): the_row();

          if ( get_row_layout() == 'flex_main_logo' ) :
            if (!get_sub_field('hide_widget')) :
              $logo           = get_sub_field('logo');
              ?>

              <div class="section section-logo">
                <div class="row">
                  <div class="logo-image">
                    <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_2_columns' ) :
            if (!get_sub_field('hide_widget')) :
              $reversed               = get_sub_field('reversed');
              $headline               = get_sub_field('headline');
              $subheadline            = get_sub_field('subheadline');
              $button_text            = get_sub_field('button_text');
              $button_link            = get_sub_field('button_link');
              $image_1                = get_sub_field('image_1');
              $image_2                = get_sub_field('image_2');
              ?>

              <div class="section section-2-cols-widget">
                <div class="row flex-row <?php echo ($reversed) ? 'reversed-row' : ''; ?>">
                  <div class="columns medium-6 col-left">
                    <div class="col-wrapper">
                      <?php 
                        if($headline)
                          echo '<h1>'.$headline.'</h1>';
                        if($subheadline)
                          echo '<h3>'.$subheadline.'</h3>';
                        if($button_text) 
                          echo '<a href="'.$button_link.'" class="button">'.$button_text.'</a>';
                      ?>
                    </div>
                  </div>
                  <div class="columns medium-6 col-right <?php echo ($image_1 && $image_2) ? 'dual' : 'single'; ?>">
                    <div class="col-wrapper">
                      <?php if($image_1) :?>
                        <img class="lazyload image-first" data-src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>">
                      <?php endif; ?>
                      <?php if($image_2) :?>
                        <img class="lazyload image-second" data-src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_companies_logo' ) :
            if (!get_sub_field('hide_widget')) :
              $headline               = get_sub_field('headline');
              $subheadline            = get_sub_field('subheadline');
              $companies_logo         = get_sub_field('companies_logo');
              ?>

              <div class="section section-companies-logo">
                <div class="row">
                  <div class="header">
                    <?php 
                      if($headline)
                        echo '<h2>'.$headline.'</h2>';
                      if($subheadline)
                        echo '<h3>'.$subheadline.'</h3>';
                    ?>
                  </div>
                  <div class="logo-wrapper">
                    <?php if($companies_logo) : ?>
                      <ul>
                        <?php foreach ($companies_logo as $logo) : ?>
                          <li>
                            <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_2_columns_group' ) :
            if (!get_sub_field('hide_widget')) :
              $headline               = get_sub_field('headline');
              $subheadline            = get_sub_field('subheadline');
              ?>

              <div class="section section-2-col-group">
                <div class="row">
                  <div class="header">
                    <?php 
                      if($headline)
                        echo '<h2>'.$headline.'</h2>';
                      if($subheadline)
                        echo '<h3>'.$subheadline.'</h3>';
                    ?>
                  </div>
                  <?php if ( have_rows('group') ) :
                    $index = 0;
                    echo '<div class="group-wrapper">';
                      while ( have_rows('group') ) : the_row();
                        $image          = get_sub_field('image');
                        $content        = get_sub_field('content');?>

                        <div class="row flex-row <?php echo ($index%2) ? 'reversed-row': ''; ?>">
                          <div class="columns medium-6 col-left">
                            <div class="col-wrapper">
                              <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                          </div>
                          <div class="columns medium-6 col-right">
                            <div class="col-wrapper">
                              <?php echo $content; ?>
                            </div>
                          </div>
                        </div>
                        <?php $index++;
                      endwhile;
                    echo '</div>';
                  endif;?>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_sync' ) :
            if (!get_sub_field('hide_widget')) :
              $headline               = get_sub_field('headline');
              $subheadline            = get_sub_field('subheadline');
              $payroll_brands         = get_sub_field('payroll_brands');
              $button_text            = get_sub_field('button_text');
              $button_link            = get_sub_field('button_link');
              ?>

              <div class="section section-sync-widget">
                <div class="row">
                  <div class="container">
                    <div class="header">
                      <?php 
                        if($headline)
                          echo '<h2>'.$headline.'</h2>';
                        if($subheadline)
                          echo '<h3>'.$subheadline.'</h3>';
                      ?>
                    </div>
                    <div class="brands-wrapper">
                      <?php if($payroll_brands) : ?>
                        <ul>
                          <?php foreach ($payroll_brands as $brand) : ?>
                            <li>
                              <img class="lazyload" data-src="<?php echo $brand['url']; ?>" alt="<?php echo $brand['alt']; ?>"/>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                    <div class="footer">
                    <?php if($button_text) 
                          echo '<a href="'.$button_link.'" class="button">'.$button_text.'</a>';
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_testimonial' ) :
            if (!get_sub_field('hide_widget')) :
              $quote                    = get_sub_field('quote');
              $customer_name            = get_sub_field('customer_name');
              $customer_position        = get_sub_field('customer_position');
              $source                   = get_sub_field('source');
              ?>

              <div class="section section-testimonial-widget">
                <div class="row flex-row">
                  <div class="columns medium-6 col-left">
                    <div class="col-wrapper">
                      <?php 
                        if($quote)
                          echo $quote;
                        echo '<div class="quote-info">';
                        if($customer_name)
                          echo '<p>'.$customer_name.'</p>';
                        if($customer_position)
                          echo '<p>'.$customer_position.'</p>';
                        if($source) 
                          echo '<span>'.$source.'</span>';
                        echo '</div>';
                      ?>
                    </div>
                  </div>
                  <div class="columns medium-6 col-right">
                    <div class="col-wrapper">
                      <?php if ( have_rows('list') ) :
                        echo '<ul>';
                          while ( have_rows('list') ) : the_row();
                            $icon             = get_sub_field('icon');
                            $description      = get_sub_field('description');
                            $headline         = get_sub_field('headline');?>

                            <li class="list-item">
                              <div class="icon">
                                  <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                              </div>
                              <div class="cotent">
                                <h4><?php echo $headline; ?></h4>
                                <p><?php echo $description; ?></p>
                              </div>
                            </li>
                            <?php
                          endwhile;
                        echo '</ul>';
                      endif;?>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_about' ) :
            if (!get_sub_field('hide_widget')) :
              $logo                  = get_sub_field('logo');
              $contact_us            = get_sub_field('contact_us');
              $phone_numebr          = get_sub_field('phone_numebr');
              $phone_link            = get_sub_field('phone_link');
              $image                 = get_sub_field('image');
              $image_link            = get_sub_field('image_link');
              $headline              = get_sub_field('headline');
              $content               = get_sub_field('content');
              ?>

              <div class="section section-aboutus-widget">
                <div class="row">
                  <div class="columns medium-6 col-left">
                    <div class="row">
                      <div class="columns medium-6 col-logo">
                        <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                      </div>
                      <div class="columns medium-6 col-links">
                        <?php 
                        echo '<p>'.$contact_us.'</p>';
                        echo '<a class="phone" href="'.$phone_link.'">'.$phone_numebr.'</a>';
                        echo '<a class="review" href="'.$image_link.'" target="blank"><img class="lazyload" data-src="'.$image['url'].'" alt="'.$image['alt'].'"></a>';
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="columns medium-6 col-right">
                    <div class="col-wrapper">
                      <?php 
                        if($headline)
                          echo '<h4>'.$headline.'</h4>';
                        if($content)
                          echo $content;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;

          endif;
        endwhile;
      endif; ?>
      <div class="copyright">
        <div class="row">
          <div class="columns">
            <p><?php echo date('Y'); ?> © <?php the_field('op_footer_copyright', 'option'); ?></p>

            <?php wp_nav_menu( array('theme_location' => 'footer-copyright') ); ?>
          </div>
        </div>
      </div>

    <?php 
    elseif($page_type == 'sms') :   //  sms Page
      if (have_rows('sms_page_content')) : 
        while( have_rows('sms_page_content') ): the_row();
          if ( get_row_layout() == 'flex_hero' ) :
            if (!get_sub_field('hide_widget')) :
              $logo             = get_sub_field('logo');
              $headline         = get_sub_field('headline');
              $subheadline      = get_sub_field('subheadline');
              $button_text      = get_sub_field('button_text');
              $button_link      = get_sub_field('button_link');
              $quote            = get_sub_field('quote');
              $customer_photo   = get_sub_field('customer_photo');
              $name             = get_sub_field('name');
              $position         = get_sub_field('position');
              $background       = get_sub_field('background');
            ?>

              <div class="section section-hero" <?php echo ($background) ? 'style="background-image: url('.$background['url'].');"' : ''; ?>>
                <div class="overlay"></div>
                <div class="row">
                  <div class="header">
                    <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                    <?php 
                      if($headline)
                        echo '<h1>'.$headline.'</h1>';
                      if($subheadline)
                        echo '<h3>'.$subheadline.'</h3>';
                      if($button_text) 
                        echo '<a href="'.$button_link.'" class="button">'.$button_text.'</a>';
                    ?>
                  </div>
                  <div class="testimonial-wrapper">
                    <div class="testimonial-quote"><?php echo $quote; ?></div>
                    <div class="customer-photo"><img class="lazyload image-first" data-src="<?php echo $customer_photo['url']; ?>" alt="<?php echo $customer_photo['alt']; ?>"></div>
                    <div class="customer-info">
                      <p><?php echo $name; ?></p>
                      <p><?php echo $position; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_2_columns' ) :
            if (!get_sub_field('hide_widget')) :
              $button_text      = get_sub_field('button_text');
              $button_link      = get_sub_field('button_link');
            ?>

              <div class="section section-2-columns">
                <div class="row">
                  <?php if ( have_rows('group') ) :
                    $index = 0;
                    echo '<div class="group-wrapper">';
                      while ( have_rows('group') ) : the_row();
                        $image          = get_sub_field('image');
                        $content        = get_sub_field('content');?>

                        <div class="two-col-row <?php echo ($index%2) ? 'reversed-row': ''; ?>">
                          <div class="col-left">
                            <div class="col-wrapper">
                              <?php echo $content; ?>
                            </div>
                          </div>
                          <div class="col-right">
                            <div div class="col-wrapper">
                              <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                          </div>
                        </div>
                        <?php $index++;
                      endwhile;
                    echo '</div>';
                  endif;?>
                  <div class="footer">
                    <?php 
                      if($button_text) 
                        echo '<a href="'.$button_link.'" class="button">'.$button_text.'</a>';
                    ?>
                  </div>
                </div>
              </div>
            <?php
            endif;

          elseif ( get_row_layout() == 'flex_simple_text' ) :
            if (!get_sub_field('hide_widget')) :
              $content          = get_sub_field('content');
              $button_text      = get_sub_field('button_text');
              $button_link      = get_sub_field('button_link');
            ?>

              <div class="section section-simple-text">
                <div class="row">
                  <div class="text-wrapper">
                    <?php 
                      if($content)
                        echo $content;
                    ?>
                  </div>
                  <div class="footer">
                    <?php if($button_text) 
                        echo '<a href="'.$button_link.'" class="button">'.$button_text.'</a>';
                    ?>
                  </div>
                </div>
              </div>
            <?php
            endif;

          endif;
        endwhile;
      endif; ?>

    <?php 
    elseif($page_type == 'demo') :   //  demo Page
      if (have_rows('demo_page_content')) : 
        while( have_rows('demo_page_content') ): the_row();
        if ( get_row_layout() == 'flex_hero' ) :
          if (!get_sub_field('hide_widget')) :
            $logo             = get_sub_field('logo');
            $headline         = get_sub_field('headline');
            $subheadline      = get_sub_field('subheadline');
            $background       = get_sub_field('background_image');
          ?>

            <div class="section section-hero" <?php echo ($background) ? 'style="background-image: url('.$background['url'].');"' : ''; ?>>
              <div class="overlay"></div>
              <div class="row">
                <div class="header">
                  <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                  <?php 
                    if($headline)
                      echo '<h1>'.$headline.'</h1>';
                    if($subheadline)
                      echo '<h3>'.$subheadline.'</h3>';
                  ?>
                </div>
                <?php 
                if (have_rows('form_content')) : 
                  while( have_rows('form_content') ): the_row();
                    $select_label           = get_sub_field('select_label');
                    $email_label           = get_sub_field('email_label');
                    $action_link          = get_sub_field('action_link');
                    $button_text             = get_sub_field('button_text');
                  ?>
                  <div class="form-container">
                    <form class="demo-form" action="<?php echo $action_link; ?>">
                      <div class="form-item-wrapper">
                        <label for="business_type"><?php echo $select_label; ?></label>
                        <select id="business_type" name="business_type">
                        <?php 
                        if ( have_rows('select_options') ) :
                          while ( have_rows('select_options') ) : the_row();
                            $opt = get_sub_field('option');
                            echo '<option value="'.$opt.'">'.$opt.'</option>';
                          endwhile;
                        endif;?>
                        </select>
                      </div>
                      <div class="form-item-wrapper">
                        <label for="email"><?php echo $email_label; ?></label>
                        <input id="email" name="email" type="email" placeholder="" required>
                      </div>
                      <input type="submit" value="<?php echo $button_text; ?>">
                    </form> 
                  </div>
                  <?php
                  endwhile;
                endif; ?>
              </div>
            </div>
          <?php
          endif;

        elseif ( get_row_layout() == 'flex_3_columns' ) :
          if (!get_sub_field('hide_widget')) :
          ?>
          <div class="section section-3-columns">
            <div class="row">
              <?php
                if ( have_rows('columns') ) :
                  while ( have_rows('columns') ) : the_row();
                    $image           = get_sub_field('image');
                    $headline           = get_sub_field('headline');
                    $content          = get_sub_field('content');
                    $link_text          = get_sub_field('link_text');
                    $link_url             = get_sub_field('link_url');
              ?>
                <div class="columns medium-4">
                  <div class="col-container">
                    <div class="image-wrapper">
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                    <div class="text-wrapper">
                      <h4><?php echo $headline; ?></h4>
                      <p><?php echo $content; ?></p>
                    </div>
                    <div class="link-wrapper">
                      <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    </div>
                  </div>
                </div>
                <?php endwhile;
                endif;?>
            </div>
          </div>
          <?php
          endif;

        endif;
      endwhile;
    endif; ?>
    <div class="footer"></div>
  <?php
    endif;
  ?>
</div>

<?php get_footer(); ?>