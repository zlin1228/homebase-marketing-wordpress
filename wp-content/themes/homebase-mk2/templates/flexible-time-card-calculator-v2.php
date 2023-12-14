<?php
/*
Template Name: Timecard calculator - V2
*/
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
  if ( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'flex_hero' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $text                   = get_sub_field('text');
        $link_text              = get_sub_field('link_text');
        $link_url               = get_sub_field('link_url');
        $add_bg                 = get_sub_field('add_background');
        $bg_color               = get_sub_field('bg_color');
        ?>

          <div class="section section-hero">
          	<?php if ($add_bg) : ?>
              <div class="bg-layer <?php echo $bg_color; ?>">
              	<div class="bg-inner"></div>
              </div>
            <?php endif; ?>
            <div class="container-narrow">
              <div class="row">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="hero-header">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h1 class="fw-black small">' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h2 class="subheading fw-normal">' . $subheadline . '</h2>';
                      endif;?>
                    </div>
                    <div class="hero-footer">
                      <?php
                      if ($text) : ?>
                        <a href="#marketing"><?php echo $text; ?><img src="<?php echo get_template_directory_uri(); ?>/images/triangle.svg" alt="triangle"></a>
                      <?php endif;?>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

	<?php
    /* --------------------------------------------
      Hero
    -------------------------------------------- */
    elseif ( get_row_layout() == 'affiliate_flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $add_button             = get_sub_field('add_button');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        $img_l_d                = get_sub_field('img_l_d');
        $img_l_m                = get_sub_field('img_l_m');
        $img_r_d                = get_sub_field('img_r_d');
        $img_r_m                = get_sub_field('img_r_m');
      ?>

        <style type="text/css">
          .section-hero {}
        </style>


		<div class="section section-hero">
			<div class="bg-layer lpink">
				<div class="bg-inner"></div>
			</div>
			<div class="container-narrow">
				<div class="row">
				<div class="col col-12">
					<div class="col-inner">
					<div class="hero-header">
						<?php
						// headline
						if ($headline) :
						echo '<h1 class="fw-black small">' . $headline . '</h1>';
						endif;

						if ($subheadline) :
						echo '<h2 class="subheading fw-normal">' . $subheadline . '</h2>';
						endif;
						
						if ($add_button) :
                      	echo '<a class="button primary" href="'.$button_link.'">' . $button_text . '</a>';
                    	endif;
						?>
					</div>
					<div class="hero-footer">
						<?php
						if ($text) : ?>
						<a href="#marketing"><?php echo $text; ?><img src="<?php echo get_template_directory_uri(); ?>/images/triangle.svg" alt="triangle"></a>
						<?php endif;?>                      
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>

      <?php endif; ?>


      <?php
      /* --------------------------------------------
        Sub nav
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_sub_nav' ) :
        if (!get_sub_field('hide_widget')) : 
          $hide_widget        = get_sub_field('hide_widget');
          $id                 = get_sub_field('widget_id');
          $nav_menu_name      = get_sub_field('menu_name');?>
          
          <div class="section section-navbar feature-navbar" data-scroll-sticky>
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
        Time card calculator 
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_time_card_calculator_new' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 
          $email_form_id          = get_sub_field('email_form_id');
        ?>

          <div class="section section-timecard-new">
            <div id="printableform" class="container-narrow">
            	<div class="pdf-title">Homebase Free Time card calculator</div>
            	<div class="name-date">
            		<div class="name">
            			<label for="name">Name</label>
            			<input type="text" name="name">
            		</div>
            		<div class="date">
            			<label for="date">Date</label>
            			<input type="text" name="date">
            		</div>
            	</div>
            	<div class="addons">
            		<div class="title">
            			<p>Add on:</p>
            		</div>
            		<div class="checkboxes">
            			<div class="gross-container">
            				<div class="gross">
	            				<input type="checkbox" name="gross">
	            				<label for="gross">Total gross wages</label>
	            			</div>
	            			<div class="gross-box">
	            				<span>$</span>
	            				<input id="rate" type="number" name="rate" placeholder="00.00" step="0.01" min="0.10" max="300.00">
	            				<span>/hour</span>
	            			</div>
            			</div>
            			<div class="overtime40-container">
            				<div class="overtime40">
	            				<input type="checkbox" name="overtime40">
	            				<label for="overtime40">Calculate overtime at 40+ hrs/week</label>
	            			</div>
	            			<div class="overtime40-box">
	            				<span>Overtime at:</span>
	            				<select name="overtime40x" id="overtime40x">
	            					<option value="1">1x</option>
										    <option value="1.5">1.5x</option>
										    <option value="2">2x</option>
										    <option value="2.5">2.5x</option>
										    <option value="3">3x</option>
											</select>
	            				<span>hourly rate</span>
	            			</div>
            			</div>
            			<div class="overtime8-container">
            				<div class="overtime8">
	            				<input type="checkbox" name="overtime8">
	            				<label for="overtime8">Calculate overtime at 8+ hrs/day</label>
	            			</div>
	            			<div class="overtime8-box">
	            				<span>Overtime at:</span>
	            				<select name="overtime8x" id="overtime8x">
										    <option value="1">1x</option>
										    <option value="1.5">1.5x</option>
										    <option value="2">2x</option>
										    <option value="2.5">2.5x</option>
										    <option value="3">3x</option>
											</select>
	            				<span>hourly rate</span>
	            			</div>
            			</div>            			
            		</div>
            	</div>
            	<div class="calculator">
            		<div class="row titles">
            			<div class="day">
            				Day
            			</div>
            			<div class="middle">
            				<div class="start">
            					Starting time
            				</div>
            				<div class="end">
            					Ending time
            				</div>
            				<div class="break">
            					Break estimation
            				</div>
            			</div>
            			<div class="total title">
            				Total
            			</div>
            		</div>
            		<div class="days">
	            		<div class="row monday">
	            			<div class="day">
	            				Monday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="monstart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="monend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="monbreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row tuesday">
	            			<div class="day">
	            				Tuesday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="tuestart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="tueend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="tuebreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row wednesday">
	            			<div class="day">
	            				Wednesday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="wedstart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="wedend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="wedbreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row thursday">
	            			<div class="day">
	            				Thursday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="thustart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="thuend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="thubreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row friday">
	            			<div class="day">
	            				Friday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="fristart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="friend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="fribreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row saturday">
	            			<div class="day">
	            				Saturday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="satstart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="satend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="satbreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
	            		<div class="row sunday">
	            			<div class="day">
	            				Sunday
	            			</div>
	            			<div class="middle">
	            				<div class="start">
	            					<input type="time" name="sunstart" value="00:00">
	            					<span>Starting time</span>
	            				</div>
	            				<div class="end">
	            					<input type="time" name="sunend" value="00:00">
	            					<span>Ending time</span>
	            				</div>
	            				<div class="break">
	            					<input type="number" name="sunbreak" placeholder="0.0" min="0.5" max="10.0" step="0.5">
	            					<span class="letter-h">h</span>
	            					<span>Break estimation</span>
	            				</div>
	            			</div>
	            			<div class="total">
	            				00:00
	            			</div>
	            		</div>
            		</div>
            		<div class="totals">
            			<div class="item total-hours">
            				Total hours: <span id="total-hours">00:00</span>
            			</div>
            			<div class="item reg-hours">
            				Regular hours: <span id="reg-hours">00:00</span>
            			</div>
            			<div class="item over-hours">
            				Overtime hours: <span id="over-hours">00:00</span>
            			</div>
            			<div class="item gross-pay">
            				Total gross pay: <span id="total-gross-pay">$0000.00</span>
            			</div>
            			<div class="item over-pay">
            				Overtime pay: <span id="over-pay">$0000.00</span>
            			</div>
            		</div>
            	</div>
              <div class="actions">
                <div class="form">
                  <?php 
                  if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                    Ninja_Forms()->display( intval($email_form_id), true );
                  } 
                  ?>
                </div>
                <div class="buttons">
                	<a id="print" href="#" class="button primary">Print/PDF</a>
                	<a id="reset" href="#" class="button reverse">Reset</a>
                </div>
              </div>
              <div class="pdf-powered">Powered by ⚡️<img class="wpr-exclude" src="<?php echo site_url(); ?>/wp-content/themes/homebase/images/homebase-logo-purple_small.svg" width="72" height="11"></div>
              <div class="pdf-footer">
              	<p class="title">Save the hassle with free Homebase time clocks.</p>
              	<ul class="tick">
              		<li>Track hours from your phone, tablet, or POS device.</li>
              		<li>Get reminders for upcoming shifts and breaks.</li>
              		<li>Track overtime & daily earnings based on hours worked.</li>
              	</ul>
              </div>
              <div class="pdf-copy">www.joinhomebase.com</div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        How to use
      -------------------------------------------- */
      elseif ( get_row_layout() == 'how_to_use' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $caption      		= get_sub_field('caption');
        ?>

          <div class="section section-how-to-use" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <?php if ($headline) : ?>
                <h3 class="headline"><?php echo $headline; ?></h3>
              <?php endif; ?>
              <?php if(have_rows('steps')) : ?>
              	<div class="steps">
                  <?php while(have_rows('steps')) : the_row(); 
                    $title          = get_sub_field('title');
                    $text           = get_sub_field('text'); ?>
                    <div class="step">
                      <?php if ($title) : ?>
                        <p class="title"><?php echo $title; ?></p>
                      <?php endif; ?>
                      <?php if ($text) : ?>
                        <p class="text"><?php echo $text; ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
              <?php if ($caption) : ?>
                <p class="caption"><?php echo $caption; ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        CTA
      -------------------------------------------- */
      elseif ( get_row_layout() == 'cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $logo      				= get_sub_field('logo');
        $main_image				= get_sub_field('main_image');
        $button_text      = get_sub_field('button_text');
        $button_link      = get_sub_field('button_link');
        ?>

          <div class="section section-cta" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
            	<div class="left">
            		<?php if ($logo) : ?>
            			<img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
            		<?php endif; ?>
	              <?php if ($headline) : ?>
	                <h3 class="headline"><?php echo $headline; ?></h3>
	              <?php endif; ?>
	              <?php if ($subheadline) : ?>
	                <p class="subheadline"><?php echo $subheadline; ?></p>
	              <?php endif; ?>
	              <?php if(have_rows('list')) : ?>
	              	<ul class="tick">
	                  <?php while(have_rows('list')) : the_row();
	                    $text = get_sub_field('text'); ?>
	                      <?php if ($text) : ?>
	                        <li><?php echo $text; ?></li>
	                      <?php endif; ?>
	                  <?php endwhile; ?>
	                </ul>
	              <?php endif; ?>
	              <?php if ($button_link && $button_text) : ?>
                  <a class="button primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                <?php endif;?>
              </div>
              <div class="right">
              	<?php if ($main_image) : ?>
            			<img class="main-image" src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>">
            		<?php endif; ?>
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
        <?php endif;

      /* --------------------------------------------
        FAQs
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $hide_widget      = get_sub_field('hide_widget');
        $id               = get_sub_field('widget_id');
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $image_d          = get_sub_field('image_d');
        $image_m          = get_sub_field('image_m');
        $type             = get_sub_field('type');
        ?>

          <div class="section section-faq <?php echo $type; ?>" <?php echo ($id) ? "id='".$id."'" : '';?>>
            <div class="container-narrow">
              <div class="row">
                <?php if ($type == 'one-col') : ?>
                  <?php if ($subheadline) : ?>
                    <p class="subheadline micro"><?php echo $subheadline; ?></p>
                  <?php endif; ?>
                  <?php if ($headline) : ?>
                    <h2 class="headline fw-black"><?php echo $headline; ?></h2>
                  <?php endif; ?>
                  <div class="col-right">
                    <div class="col-inner">
                      <?php if(have_rows('faqs')) : ?>
                        <?php while(have_rows('faqs')) : the_row(); 
                          $faq_field         = get_sub_field('faq_field');
                          $question          = get_sub_field('question');
                          $answer            = get_sub_field('answer'); ?>
                          <div class="faq-item text-left">
                            <?php if ($faq_field) : ?>
                              <div class="field">
                                <p class="micro"><?php echo $faq_field; ?></p>
                              </div>
                            <?php endif; ?>
                            <?php if ($question) : ?>
                              <div class="question">
                                <p><?php echo $question; ?></p>
                                <img src="<?php echo site_url(); ?>/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                              </div>
                            <?php endif; ?>
                            <?php if ($answer) : ?>
                              <div class="answer">
                                <?php echo $answer; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php else : ?>
                <div class="col col-12 col-sm-6 col-left">
                  <div class="col-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($image_d) : ?>
                        <?php echo wp_get_attachment_image( $image_d, 'full', '', array( "class" => "hide-for-sm" ) ); ?>
                      <?php endif; ?>
                      <?php if ($image_m) : ?>
                        <?php echo wp_get_attachment_image( $image_m, 'full', '', array( "class" => "show-for-sm" ) ); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-sm-6 col-right">
                  <div class="col-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) : the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers'); ?>
                        <div class="faq-item text-left">
                          <?php if ($faq_field) : ?>
                            <div class="field">
                              <p class="micro"><?php echo $faq_field; ?></p>
                            </div>
                          <?php endif; ?>
                          <?php if ($question) : ?>
                            <div class="question">
                              <p><?php echo $question; ?></p>
                              <img src="<?php echo site_url(); ?>/wp-content/themes/homebase/images/scheduling-faq-cross.svg">
                            </div>
                          <?php endif; ?>
                          <?php if ($answers) : ?>
                            <div class="answer">
                              <?php echo $answers; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>