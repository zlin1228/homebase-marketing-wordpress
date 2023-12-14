<?php
/*
Template Name: Timecard calculator - MT88
*/
get_header(); ?>

<div class="container new-style" role="document">
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
        ?>

          <div class="section section-hero">
            <div class="row row-small">
              <div class="row-container">
                <div class="columns">
                  <div class="column-inner">
                    <div class="hero-header">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2 class="fw-black hide-for-small">' . $headline . '</h2>';
                        echo '<h1 class="fw-black show-for-small">' . $headline . '</h1>';
                      endif;

                      if ($subheadline) :
                        echo '<h3 class="subheading normal">' . $subheadline . '</h3>';
                      endif;?>
                    </div>
                    <div class="divider hide-for-small"></div>
                    <div class="hero-footer">
                      <?php
                      if ($text) :
                        echo '<p>' . $text . '</p>';
                      endif;

                      if ($link_text) :
                        echo '<a class="text-link-arrow" href="'.$link_url.'">' . $link_text . '</a>';
                      endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Time card calculator widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_time_card_calculator' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : 

          $email_form_text        = get_sub_field('email_form_text');
          $email_form_id          = get_sub_field('email_form_id');
        ?>

          <div class="section section-timecard">
            <div class="row row-medium row-table">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <table border="0" cellspacing="0" cellpadding="0" class="hide-for-small">
                      <thead>
                        <tr>
                          <th class="label">Day</th>
                          <th>Monday</th>
                          <th>Tuesday</th>
                          <th>Wednesday</th>
                          <th>Thursday</th>
                          <th>Friday</th>
                          <th>Saturday</th>
                          <th>Sunday</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="time-container startingtime">
                            <td class="label">Starting Time</td>
                            <td class="mon">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="tue">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="wed">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="thu">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="fri">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sat">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sun">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                        </tr>
                        <tr class="time-container endingtime">
                            <td class="label">Ending Time</td>
                            <td class="mon">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="tue">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="wed">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="thu">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="fri">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sat">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sun">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                        </tr>
                        <tr class="time-container breaktime">
                            <td class="label">Break<br>(Min)</td>
                            <td class="mon">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="tue">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="wed">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="thu">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="fri">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sat">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                            <td class="sun">
                              <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                            </td>
                        </tr>
                        <tr style="height:1.5rem;"></tr>
                        <tr class="time-container totaltime">
                            <td class="label">Total hours</td>
                            <td class="mon">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="tue">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="wed">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="thu">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="fri">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="sat">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                            <td class="sun">
                              <input type="hidden" value="0" class="totalinput"><div class="total">0.00</div>
                            </td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="timecard-wrap show-for-small">
                      <div class="timecard-group">
                        <div class="timecard-container" data-day="Monday">
                          <div class="item-wrap">
                            <div class="item-row">
                              <div class="item-col">
                                <div class="item-label">select your day of work</div>
                                <div class="item-content">
                                  <select class="days">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="item-row">
                              <div class="item-col startingtime"  style="margin-right: 13px;">
                                <div class="item-label">Starting Time</div>
                                <div class="item-content">
                                  <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                                </div>
                              </div>
                              <div class="item-col endingtime" style="margin-left: 13px;">
                                <div class="item-label">Ending Time</div>
                                <div class="item-content">
                                  <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                                </div>
                              </div>
                            </div>
                            <div class="item-row breaktime">
                              <div class="item-col">
                                <div class="item-label">Insert your break period</div>
                                <div class="item-content">
                                  <input type="text" name="timepicker" class="timepicker" placeholder="0:00" autocomplete="off"/>
                                </div>
                              </div>
                            </div>
                            <div class="item-row totaltime">
                              <div class="item-col">
                                <div class="item-label">Total Hours</div>
                              </div>
                              <div class="item-col">
                                <div class="item-content">
                                  <input type="hidden" value="00" class="totalinput"><div class="total">0h 00m</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a class="remove-timecard" href="#">Remove</a>
                        </div>
                      </div>
                      <div class="button-wrap">
                        <a class="add_timecard" href="#">Add another shift</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-medium row-footer">
              <div class="row-container">
                <div class="column">
                  <div class="column-inner">
                    <div class="col-wrap">
                      <div class="form-container">
                        <p><?php echo $email_form_text; ?></p>
                        <div class="sendemailform">
                          <?php 
                          if ( is_plugin_active( 'ninja-forms/ninja-forms.php' ) ) {
                            Ninja_Forms()->display( intval($email_form_id), true );
                          } 
                          ?>
                        </div>
                      </div>
                      <div class="result-container">
                        <p>Total Hours</p>
                        <div class="result-hours">0h 00m</div> 
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
        2 columns widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_2_cols' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $reverse                = get_sub_field('reverse');
        $headline               = get_sub_field('headline');
        $subheadline            = get_sub_field('subheadline');
        $content                = get_sub_field('content');
        $add_link               = get_sub_field('add_link');
        $link_text              = get_sub_field('link_text');
        $link_url               = get_sub_field('link_url');
        $image                  = get_sub_field('image');
        ?>

          <div class="section section-2-cols">
            <div class="row row-flex <?php echo ($reverse)? 'reverse' : '';?> row-medium">
              <div class="row-container">
                <div class="column medium-6 col-left">
                  <div class="column-inner">
                    <div class="text-wrapper">
                    <?php if ($headline) : ?>
                      <h3 class="fw-black"><?php echo $headline; ?></h3>
                    <? endif;?>
                    <?php if ($subheadline) : ?>
                      <p class="subheading"><?php echo $subheadline; ?></p>
                    <? endif;?>
                    <?php if ($content) : ?>
                      <?php echo $content; ?>
                    <? endif;?>
                    <?php if ($add_link) : ?>
                      <a class="text-link-arrow" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    <? endif;?>
                    </div>
                  </div>
                </div>
                <div class="column medium-6 col-right">
                  <div class="column-inner">
                    <div class="img-wrapper">
                    <?php if ($image) : ?>
                      <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <? endif;?>
                    </div>
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
        $title                  = get_sub_field('title');
        $photo                  = get_sub_field('image');
        $quote                  = get_sub_field('quote');
        $label                  = get_sub_field('label');
        $customer_name          = get_sub_field('customer_name');
        $customer_position      = get_sub_field('customer_position');
        ?>

          <div class="section section-customer-quote">
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-9 medium-offset-3">
                  <div class="column-inner">
                    <?php if ($title) : ?>
                      <h3 class="subheading fw-black hide-for-small"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($quote) : ?>
                      <div class="quote-container">
                        <div class="quote-wrapper">
                          <p class="quote-message"><?php echo $quote; ?></p>
                          <p class="name fw-bold"><?php echo $customer_name; ?></p>
                          <p class="position"><?php echo $customer_position; ?></p>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if ($photo) : ?>
                      <img data-src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" class="photo lazyload"/>
                    <?php endif; ?>
                    <?php if ($label) : ?>
                      <span class="quote-label hide-for-small">
                        <img class="lazyload"  data-src="<?php echo $label['url']; ?>" alt="<?php echo $label['alt']; ?>"/>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        Signup banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_simple_cta' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $color                  = get_sub_field('color');
        $headline               = get_sub_field('banner_text');
        $subheadline            = get_sub_field('subheadline');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-signup-banner">
            <div class="section-inner <?php echo $color; ?>">
              <div class="row row-flex">
                <div class="row-container">
                  <div class="columns medium-8 col-left">
                    <div class="column-inner">
                      <?php
                      if ($headline) :
                        echo '<h3 class="fw-black">' . $headline . '</h3>';
                      endif;
                      if ($subheadline) :
                        echo '<span class="normal">' . $subheadline . '</span>';
                      endif;
                      ?>
                    </div>
                  </div>
                  <div class="columns medium-4 col-right">
                    <div class="column-inner">
                      <a class="button primary" href="<?php echo $button_link; ?>">
                        <?php echo $button_text; ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php
      /* --------------------------------------------
        FAQs widget
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flex_faq' ) : ?>

        <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $headline         = get_sub_field('headline');
        $d_image          = get_sub_field('image_d');
        $m_image          = get_sub_field('image_m');
        ?>

          <div class="section section-faqs">
            <div class="row row-small">
              <div class="row-container">
                <div class="columns medium-6 col-left">
                  <div class="column-inner">
                    <div class="col-wrapper">
                      <?php if ($headline) : ?>
                        <h2 class="fw-black"><?php echo $headline; ?></h2>
                      <?php endif; ?>
                      <?php if ($d_image) : ?>
                        <img class="lazyload hide-for-small" data-src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                      <?php endif; ?>
                      <?php if ($m_image) : ?>
                        <img class="lazyload show-for-small" data-src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['alt']; ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="columns medium-6 col-right">
                  <div class="column-inner">
                    <?php if(have_rows('faqs')) : ?>
                      <?php while(have_rows('faqs')) :  the_row(); 
                        $faq_field         = get_sub_field('faq_field');
                        $question          = get_sub_field('question');
                        $answers           = get_sub_field('answers');
                      ?>
                        <div class="faq-item text-left">
                          <div class="field"><?php echo $faq_field; ?></div>
                          <h3 class="subheading fw-bold"><?php echo $question; ?></h3>
                          <?php echo $answers; ?>
                        </div>
                      <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
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
        $align                  = get_sub_field('align');
        $stype                  = get_sub_field('stype');
        $content                = get_sub_field('content');
        $button_text            = get_sub_field('button_text');
        $button_link            = get_sub_field('button_link');
        ?>

          <div class="section section-cta-banner">
            <div class="row row-small">
              <div class="row-container">
                <div class="column small-12">
                  <div class="column-inner">
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
                        <a class="button secondary reverse" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
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

</div>

<?php get_footer(); ?>