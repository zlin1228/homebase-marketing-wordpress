<?php
/*
Template Name: Customer - MT54 - Flexible
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
              $open_new               = get_sub_field('open_new');
              $headline               = get_sub_field('headline');
              $button_text            = get_sub_field('button_text');
              $action_link            = get_sub_field('action_link');
              $image                  = get_sub_field('image');
              ?>

                <div class="section section-hero">
                  <div class="container">
                    <div class="row v-align-middle">
                      <div class="col col-12 col-sm-6 col-left">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) :
                            echo '<h1 class="small">' . $headline . '</h1>';
                          endif;?>

                          <form action="<?php echo $action_link; ?>"
                            id="hero-signup-form"
                            method="GET"
                            class="email-signup-form"
                            <?php echo ($open_new) ? "target='_blank'" : "" ?>
                          >
                            <div class="form-item">
                              <input class="homeform"
                                  aria-label="email address"
                                  type="email"
                                  name="email"
                                  placeholder="Email address"
                              />
                            </div>
                            <div class="form-item">
                              <button type="submit"
                                  aria-label="submit"
                                  id="create-account"
                                  name="Submit"
                                  class="primary"
                              ><?php echo $button_text; ?></button>
                            </div>
                          </form>
                        </div>
                      </div>

                    <?php
                    // image
                    if ($image ) : ?>
                      <div class="col col-12 col-sm-6 col-right">
                        <div class="col-inner">
                          <div class="img-wrapper">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Intro Tab
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_intro_tab' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
                $open_new               = get_sub_field('open_new');
                $headline               = get_sub_field('headline');
                $subheadline            = get_sub_field('subheadline');

                if($open_new)
                  $target = "target='_blank'";
                else
                  $target = "";
              ?>

                <div class="section section-intro-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="section-header">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h2 class="fw-extra">' . $headline . '</h2>';

                          if ($subheadline) 
                            echo '<h3 class="subheading fw-normal">' . $subheadline . '</h3>';
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                    if ( have_rows('tabs') ) : $index = 0; $active = ' active';
                        while ( have_rows('tabs') ) : the_row();
                          $tab_title               = get_sub_field('tab_title');

                          $title                   = get_sub_field('title');
                          $description             = get_sub_field('description');
                          $link_text               = get_sub_field('link_text');
                          $link_url                = get_sub_field('link_url');
                          $image                   = get_sub_field('image');

                          $tabs.= '<li class="tab'.$active.'" data-tab="#tab-'.$index.'">'.$tab_title.'</li>';

                          $tabContents.= '<div id="tab-'.$index.'" class="tab-content'.$active.'"><div class="row v-align-middle">';
                          $tabContents.= '<div class="col col-12 col-sm-6 col-left"><div class="col-inner">';
                          $tabContents.= '<h3 class="subheading fw-bold">'.$title.'</h3>';
                          $tabContents.= '<p>'.$description.'</p>';
                          $tabContents.= '<a href="'.$link_url.'" class="text-link-arrow" '.$target.'>'.$link_text.'</a>';
                          $tabContents.= '</div></div>';

                          $tabContents.= '<div class="col col-12 col-sm-6 col-right"><div class="col-inner">';
                          $tabContents.= '<div class="img-wrapper">';
                          $tabContents.= '<img src="'.$image['url'].'" alt="'.$image['alt'].'">';
                          $tabContents.= '</div>';
                          $tabContents.= '</div></div>';

                          $tabContents.= '</div></div>';

                          $index++; $active='';
                        endwhile;
                  ?>
                  <div class="container-narrow">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                        
                         <div class="tab-header hide-for-sm">
                           <ul class="tabs">
                             <?php echo $tabs; ?>
                           </ul>
                         </div>

                         <div class="tab-contents">
                           <?php echo $tabContents; ?>
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php endif; ?>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Intro a customer
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_intro_customer' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $headline               = get_sub_field('headline');
              $image                  = get_sub_field('image');
              $badge                  = get_sub_field('badge');
              $company                = get_sub_field('company');
              $location               = get_sub_field('location');
              $testimonial            = get_sub_field('testimonial');
              $author_info            = get_sub_field('author_info');
              ?>

                <div class="section section-intro-customer">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="section-header">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h2 class="fw-extra">' . $headline . '</h2>';
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container-narrow">
                    <div class="row">
                      <div class="col col-12 col-sm-4 col-left">
                        <div class="col-inner">
                          <div class="img-wrapper">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <img class="badge" src="<?php echo $badge['url']; ?>" alt="<?php echo $badge['alt']; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-8 col-right">
                        <div class="col-inner">
                          <h3 class="company-name fw-bold"><?php echo $company; ?></h3>
                          <h3 class="location"><?php echo $location; ?></h3>
                          <?php
                            if ( have_rows('company_info') ) :
                              echo '<div class="company-info">';
                              while ( have_rows('company_info') ) : the_row();
                                $info_label              = get_sub_field('info_label');
                                $info_value              = get_sub_field('info_value');
                          ?>
                                <div class="info-box">
                                  <span class="info-value"><?php echo $info_value; ?></span>
                                  <span class="info-label"><?php echo $info_label; ?></span>
                                </div>
                          <?php
                              endwhile;
                              echo '</div>';
                            endif;
                          ?>
                          <p class="testimonial text-left"><?php echo $testimonial; ?></p>
                          <p class="author-info fw-bold text-left"><?php echo $author_info; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Favourite features
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_fav_features' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $headline               = get_sub_field('headline');
              ?>

                <div class="section section-fav-features">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="section-header">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h2 class="fw-extra">' . $headline . '</h2>';
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                    <?php
                      if ( have_rows('features') ) :
                        while ( have_rows('features') ) : the_row();
                          $image              = get_sub_field('image');
                          $title              = get_sub_field('title');
                          $description        = get_sub_field('description');
                    ?>

                      <div class="col col-12 col-sm-4">
                        <div class="col-inner">
                          <div class="feature-box">
                            <h3 class="subheading fw-bold"><?php echo $title; ?></h3>
                            <div class="img-wrapper">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <p><?php echo $description; ?></p>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; endif;?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>


            <?php
            /* --------------------------------------------
              Simpe CTA banner
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_s_cta' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $open_new               = get_sub_field('open_new');
              $banner_text            = get_sub_field('banner_text');
              $button_text            = get_sub_field('button_text');
              $button_link            = get_sub_field('button_link');

              if($open_new)
                $target = "target='_blank'";
              else
                $target = "";
              ?>

                <div class="section section-cta-banner">
                  <div class="container-narrow">
                    <div class="row v-align-middle">
                      <div class="col col-12 col-sm-8 col-left">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h3 class="fw-bold">' . $banner_text . '</h3>';
                          ?>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-4 col-right">
                        <div class="col-inner">
                          <?php
                          // headline
                          if ($button_text) 
                            echo '<a class="button primary" href="'.$button_link.'" '.$target.'>' . $button_text . '</a>';
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Customer logos
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_logos' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $headline               = get_sub_field('headline');
              $logos                  = get_sub_field('logos');
              ?>

                <div class="section section-customer-logos">
                  <div class="container-narrow">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="section-header">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h3 class="fw-bold">' . $headline . '</h3>';
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <ul class="customer-logos">
                            <?php 
                              $index = 0;
                              foreach ($logos as $logo) : 
                            ?>
                              <li class="<?php echo ($index > 5)? 'hide-for-sm' : '';?>">
                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
                              </li>
                            <?php 
                              $index++;
                              endforeach; 
                            ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>


            <?php
            /* --------------------------------------------
              We care
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_care' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $headline               = get_sub_field('headline');
              ?>

                <div class="section section-care">
                  <div class="container-narrow">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="section-header">
                          <?php
                          // headline
                          if ($headline) 
                            echo '<h2 class="fw-bold">' . $headline . '</h2>';
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="bg-container"><div class="bg-layer"></div></div>
                      <div class="col col-12 col-sm-8 offset-sm-4">
                        <div class="col-inner">
                          <?php
                            if ( have_rows('quotes') ) :
                              echo '<div class="quote-container text-left">';
                              while ( have_rows('quotes') ) : the_row();
                                $author_info         = get_sub_field('author_info');
                                $source              = get_sub_field('source');
                                $content             = get_sub_field('content');
                          ?>
                                <div class="quote-box">
                                  <p class="author fw-bold"><?php echo $author_info; ?></p>
                                  <p class="content"><?php echo $content; ?></p>
                                  <p class="source"><?php echo $source; ?></p>
                                </div>
                          <?php
                              endwhile;
                              echo '</div>';
                            endif;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              Intro customer support
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_support' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $image                  = get_sub_field('image');
              $title                  = get_sub_field('title');
              $headline               = get_sub_field('headline');
              $description            = get_sub_field('description');
              ?>

                <div class="section section-support">
                  <div class="container">
                    <div class="row v-align-middle">
                      <div class="col col-12 col-sm-5 offset-sm-1 col-left">
                        <div class="col-inner">
                          <div class="img-wrapper">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="col col-12 col-sm-6 col-right">
                        <div class="col-inner">
                          <div class="top">
                            <?php
                            // headline
                            if ($title) 
                              echo '<p class="title fw-bold">' . $title . '</p>';

                            if ($headline) 
                              echo '<h3 class="fw-bold">' . $headline . '</h3>';

                            if ($description) 
                              echo '<p class="description">' . $description . '</p>';
                            ?>
                          </div>

                          <div class="bottom">
                            <?php
                              if ( have_rows('contacts') ) :
                                echo '<div class="contact-info">';
                                while ( have_rows('contacts') ) : the_row();
                                  $contact_icon              = get_sub_field('contact_icon');
                                  $contact_title              = get_sub_field('contact_title');
                                  $link_text              = get_sub_field('link_text');
                                  $link_url              = get_sub_field('link_url');
                            ?>
                                  <div class="contact-box">
                                    <span class="contact-title"><?php echo $contact_title; ?></span>
                                    <a class="contact-link" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                    <div class="img-wrapper">
                                      <img src="<?php echo $contact_icon['url']; ?>" alt="<?php echo $contact_icon['alt']; ?>">
                                    </div>
                                  </div>
                            <?php
                                endwhile;
                                echo '</div>';
                              endif;
                            ?>
                          </div>
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
            elseif ( get_row_layout() == 'flex_f_cta' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

              <?php
              $open_new               = get_sub_field('open_new');
              $banner_text            = get_sub_field('banner_text');
              $button_text            = get_sub_field('button_text');
              $button_link            = get_sub_field('button_link');

              if($open_new)
                $target = "target='_blank'";
              else
                $target = "";
              ?>

                <div class="section section-f-cta-banner">
                  <div class="container">
                    <div class="row">
                      <div class="col col-12">
                        <div class="col-inner">
                          <div class="banner-wrapper">
                          <?php
                          // headline
                          if ($banner_text) 
                            echo '<h3 class="fw-bold">' . $banner_text . '</h3>';

                          if ($button_text) 
                            echo '<a class="button primary reverse" href="'.$button_link.'" '.$target.'>' . $button_text . '</a>';
                          ?>
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