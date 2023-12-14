<?php
/*
Template Name: Contact Sales - MT64
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
        $id                     = get_sub_field('widget_id');
        $class                  = get_sub_field('widget_class');
        $add_bg                 = get_sub_field('add_background');
        $bg_color               = get_sub_field('bg_color');
        $seotitle               = get_sub_field('seo_title');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $f_image                = get_sub_field('f_image');
        $b_image                = get_sub_field('b_image');
        $center_image           = get_sub_field('center_image');
        $add_l_margin           = get_sub_field('add_l_margin');
        $f_max_width            = get_sub_field('f_max_width');
        $b_max_width            = get_sub_field('b_max_width');
        ?>

          <div class="section section-hero <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <?php if ($add_bg) : ?>
              <div class="bg-layer <?php echo $bg_color; ?>"><div class="bg-inner"></div></div>
            <?php endif; ?>
            <div class="container">
              <div class="row v-align-middle">
                <div class="col-left col col-12 col-sm-5 offset-sm-1">
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
                        echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                      endif;?>

                      
                    </div>
                  </div>
                </div>
                <div class="col-right col col-12 col-sm-6 <?php echo ($center_image) ? 'center' : '';?>">
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
              </div>
              
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Get in touch 
      -------------------------------------------- */
      elseif ( get_row_layout() == 'get_in_touch' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                         = get_sub_field('widget_id');
        $class                      = get_sub_field('widget_class');

        $image                      = get_sub_field('image');
        $headline_left              = get_sub_field('headline_left');
        $subheadline_left           = get_sub_field('subheadline_left');
        $phone_headline_left        = get_sub_field('phone_headline_left');
        $phone_number_left          = get_sub_field('phone_number_left');
        $phone_working_hours_left   = get_sub_field('phone_working_hours_left');
        $chat_headline              = get_sub_field('chat_headline');
        $chat_link_title            = get_sub_field('chat_link_title');
        $chat_link_url              = get_sub_field('chat_link_url');
        $chat_working_hours         = get_sub_field('chat_working_hours');
        $help_center_headline       = get_sub_field('help_center_headline');
        $help_center_text           = get_sub_field('help_center_text');
        ?>

          <div class="section section-get-in-touch <?php echo ($class) ? $class : ''; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container">
              <div class="row v-align-middle">
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="customer-support">
                    <?php if ($image) : ?>
                      <img src="<?php echo $image['url']; ?>">
                    <?php endif; ?>
                    <?php if ($headline_left) : ?>
                      <h3 class="headline"><?php echo $headline_left; ?></h3>
                    <?php endif; ?>
                    <?php if ($subheadline_left) : ?>
                      <p class="subheadline"><?php echo $subheadline_left; ?></p>
                    <?php endif; ?>
                    <?php  if ( have_rows('list_left') ) : ?>
                      <ul class="tick">
                      <?php while ( have_rows('list_left') ) : the_row(); ?>
                        <?php $list_item    = get_sub_field('list_item'); ?>
                        <li><?php echo $list_item; ?></li>
                      <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                    </div>
                    <div class="phone-chat">
                      <div class="phone">
                        <?php if ($phone_headline_left) : ?>
                        <p class="headline"><?php echo $phone_headline_left; ?></p>
                        <?php endif; ?>
                        <?php if ($phone_number_left) : ?>
                        <a class="link" href="tel:<?php echo $phone_number_left; ?>"><?php echo $phone_number_left; ?></a>
                        <?php endif; ?>
                        <?php if ($phone_working_hours_left) : ?>
                        <p class="working-hours"><?php echo $phone_working_hours_left; ?></p>
                        <?php endif; ?>
                      </div>
                      <div class="chat">
                        <?php if ($chat_headline) : ?>
                        <p class="headline"><?php echo $chat_headline; ?></p>
                        <?php endif; ?>
                        <?php if ($chat_link_title) : ?>
                        <a id="open-chat-window" class="link" href="<?php echo $chat_link_url; ?>" data-wpel-link="internal"><?php echo $chat_link_title; ?></a>
                        <?php endif; ?>
                        <?php if ($chat_working_hours) : ?>
                        <p class="working-hours"><?php echo $chat_working_hours; ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="help-center">
                      <?php if ($help_center_headline) : ?>
                      <p class="headline"><?php echo $help_center_headline; ?></p>
                      <?php endif; ?>
                      <?php if ($help_center_text) : ?>
                      <p class="text"><?php echo $help_center_text; ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-12 col-right">
                  <div class="col-inner">
                    <?php  if ( have_rows('blocks') ) : ?>
                      
                      <?php while ( have_rows('blocks') ) : the_row(); ?>
                        <?php 
                          $headline_right               = get_sub_field('headline_right');
                          $subheadline_right            = get_sub_field('subheadline_right');
                          $phone_headline_right         = get_sub_field('phone_headline_right');
                          $phone_number_right           = get_sub_field('phone_number_right');
                          $phone_working_hours_right    = get_sub_field('phone_working_hours_right');
                          $message_headline             = get_sub_field('message_headline');
                          $message_link_title           = get_sub_field('message_link_title');
                          $message_link_url             = get_sub_field('message_link_url');
                          $message_working_hours        = get_sub_field('message_working_hours');
                        ?>
                        <div class="block-right col-sm-5">
                          <div class="content">
                          <?php if ($headline_right) : ?>
                            <h3 class="headline"><?php echo $headline_right; ?></h3>
                          <?php endif; ?>
                          <?php if ($subheadline_right) : ?>
                            <p class="subheadline"><?php echo $subheadline_right; ?></p>
                          <?php endif; ?>
                          <?php  if ( have_rows('list_right') ) : ?>
                            <ul class="tick">
                            <?php while ( have_rows('list_right') ) : the_row(); ?>
                              <?php $list_item    = get_sub_field('list_item'); ?>
                              <li><?php echo $list_item; ?></li>
                            <?php endwhile; ?>
                            </ul>
                          <?php endif; ?>
                          </div>
                          <div class="phone-chat">
                            <div class="phone">
                              <?php if ($phone_headline_right) : ?>
                              <p class="headline"><?php echo $phone_headline_right; ?></p>
                              <?php endif; ?>
                              <?php if ($phone_number_right) : ?>
                              <a class="link" href="tel:<?php echo $phone_number_right; ?>"><?php echo $phone_number_right; ?></a>
                              <?php endif; ?>
                              <?php if ($phone_working_hours_right) : ?>
                              <p class="working-hours"><?php echo $phone_working_hours_right; ?></p>
                              <?php endif; ?>
                            </div>
                            <div class="chat">
                              <?php if ($message_headline) : ?>
                              <p class="headline"><?php echo $message_headline; ?></p>
                              <?php endif; ?>
                              <?php if ($message_link_title) : ?>
                              <a class="link" href="<?php echo $message_link_url; ?>" data-wpel-link="internal"><?php echo $message_link_title; ?></a>
                              <?php endif; ?>
                              <?php if ($message_working_hours) : ?>
                              <p class="working-hours"><?php echo $message_working_hours; ?></p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>                     
                    <?php endif; ?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Customer quote
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_quote' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $id                     = get_sub_field('widget_id');
        $type                   = get_sub_field('image_type');
        $title                  = get_sub_field('title');
        $photo                  = get_sub_field('image');
        $quote                  = get_sub_field('quote');
        $label                  = get_sub_field('label');
        $customer_name          = get_sub_field('name');
        $customer_position      = get_sub_field('position');
        $business               = get_sub_field('business');
        $address                = get_sub_field('address');
        $link                   = get_sub_field('link');
        ?>

          <div class="section section-customer-quote <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <?php if ($type != "noimage" &&  $photo) : ?>
                          <div class="photo-wrapper">
                            <?php echo wp_get_attachment_image( $photo, 'full' ); ?>
                          </div>
                        <?php endif; ?>
                        <?php if ( $type == "photo" && $label) : ?>
                          <div class="quote-label hide-for-small">
                            <?php echo wp_get_attachment_image( $label, 'full' ); ?>
                          </div>
                        <?php endif; ?>
                        <div class="quote-wrapper">
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <p class="name fw-bold"><?php echo $customer_name; ?></p>
                          <p class="position">
                            <span><?php echo $customer_position;?></span>
                            <?php if($link) : ?>
                              <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                            <?php endif; ?>
                            <span><?php echo $business; ?></span>
                            <?php if($link) : ?>
                              </a> 
                            <?php endif; ?>

                            <?php if($address) : ?>
                            <span><?php echo $address;?></span>
                            <?php endif; ?>
                          </p>
                        </div>
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
        Contact form
      -------------------------------------------- */
      elseif ( get_row_layout() == 'contact_form' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $contact_form_id        = get_sub_field('contact_form_id');
        ?>

          <div id="send-us-a-message" class="section section-contact-form">
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <?php if ($headline) : ?>
                      <h3 class="headline"><?php echo $headline; ?></h3>
                    <?php endif; ?>
                    <?php if ($subheadline) : ?>
                      <p class="subheadline"><?php echo $subheadline; ?></p>
                    <?php endif; ?>
                    <?php if ($contact_form_id) :?>
                    <div id="contact-sales" class="form-wrap">
                      <?php 
                      if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                        Ninja_Forms()->display( intval($contact_form_id), true );
                      } 
                      ?>
                    </div>
                    <?php endif;?>
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