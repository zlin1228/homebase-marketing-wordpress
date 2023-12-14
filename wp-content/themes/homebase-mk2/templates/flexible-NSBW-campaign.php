<?php
/*
Template Name: Featured - NSBW Campaign
*/
get_header(); ?>

<main id="primary" class="site-main <?php echo (get_field('fixed_header')) ? 'has-fixed-header' : ''; ?>" data-scroll-container role="document">
<?php
  if ( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      /* --------------------------------------------
        Hero
      -------------------------------------------- */
      if ( get_row_layout() == 'hero_section' ) : ?>


        <?php
        $id                       = get_sub_field("hero_section_id");
        $class                    = get_sub_field("hero_section_class");
        $hero_sub_title           = get_sub_field("hero_sub_title");
        $hero_title               = get_sub_field("hero_title");
        $hero_text                = get_sub_field("hero_text");
        $hero_right_image         = get_sub_field("hero_right_image");

        ?>

        <div class="section hero <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="bg-layer"></div>
          <div class="container">
            <div class="row">
              <div class="col col-6">
                <div class="col-inner col-left">
                  <h6><?= $hero_sub_title ?></h6>
                  <h1><?= $hero_title ?></h1>
                  <div class="text"><?= $hero_text ?></div>
                </div>
              </div>
              <div class="col col-6">
                <div class="col-inner">
                  <?php if(!empty($hero_right_image)): ?>
                    <img src="<?= $hero_right_image ?>">
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>


      <?php
      /* --------------------------------------------
        Two Columns Section
      -------------------------------------------- */
      elseif ( get_row_layout() == 'two_col_section' ) :
        
        $id                       = get_sub_field("two_col_section_id");
        $class                    = get_sub_field("two_col_section_class");
        $section_title            = get_sub_field("section_main_title");
        $left_column_content      = get_sub_field("left_column_content");
        $right_column_content     = get_sub_field("right_column_content");

        ?>
        
        <div class="section two-columns-content <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">

            <?php if(!empty($section_title)): ?>
              <h2><?= $section_title ?></h2>
            <?php endif ?>

            <div class="row">
              <div class="col col-6">
                <div class="col-inner">
                  <?= $left_column_content ?>
                </div>
              </div>
              <div class="col col-6">
                <div class="col-inner">
                  <?= $right_column_content ?>
                </div>
              </div>
            </div>
          </div>
        </div>


      <?php
      /* --------------------------------------------
        Flexible Columns Section
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flexible_col_section' ) :
        
        $id                       = get_sub_field("flexible_col_section_id");
        $class                    = get_sub_field("flexible_col_section_class");
        $section_title            = get_sub_field("flexible_col_section_title");
        $section_sub_title        = get_sub_field("flexible_col_section_sub_title");

        ?>
        
        <div class="section flexible-column-section <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">

            <?php if(!empty($section_title)): ?>
              <h2><?= $section_title ?></h2>
            <?php endif ?>

            <?php if(!empty($section_sub_title)): ?>
              <div class="sub-title"><?= $section_sub_title ?></div>
            <?php endif; ?>

            <div class="row">

              <?php if(have_rows("flexible_col_section_columns")): ?>
                <?php while( have_rows("flexible_col_section_columns") ): the_row();
                
                  $col_image = get_sub_field("flexible_col_section_image");
                  $col_text  = get_sub_field("flexible_col_section_column_text");
                ?>

                  <div class="col">
                      <div class="col-inner">
                        <img src="<?= $col_image ?>">
                        <div class="col-text"><?= $col_text ?></div>
                      </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
        </div>



      <?php
      /* --------------------------------------------
        HomeBase CTA Banner
      -------------------------------------------- */
      elseif ( get_row_layout() == 'homebase_cta_banner' ) :
        
        $id                       = get_sub_field("homebase_cta_banner_id");
        $class                    = get_sub_field("homebase_cta_banner_class");
        $section_title            = get_sub_field("homebase_cta_banner_title");
        $promo_code               = get_sub_field("homebase_cta_banner_promo_code");
        $text_after_promo_code    = get_sub_field("homebase_cta_banner_text_after_promo_code");
        $cta_btn                  = get_sub_field("homebase_cta_banner_cta_button");

        ?>
        
        <div class="section section-cta-banner <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="col-inner">
                  <div class="banner-wrapper aligned-center shape-type1">
                    <div class="bg-layer">
                      <div class="bg-inner">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="shape-3"></div>
                      </div>
                    </div>


                    <?php if(!empty($section_title)): ?>
                      <h2><?= $section_title ?></h2>
                    <?php endif; ?>

                    <?php if(have_rows("homebase_cta_banner_inline_check_list")): ?>
                      <ul>
                        <?php while(have_rows("homebase_cta_banner_inline_check_list")): the_row(); ?>
                        
                          <li><?= get_sub_field("homebase_cta_banner_check_list_text") ?></li>
                        
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>

                    <?php if(!empty($promo_code)): ?>
                      <p class="promo-code"><?= $promo_code ?></p>
                    <?php endif; ?>

                    <div class="text-after-promo-code"><?= $text_after_promo_code ?></div>
                    <a class="btn btn-white" target="<?= $cta_btn['target'] ?>" href="<?= $cta_btn['url'] ?>"><?= $cta_btn['title'] ?></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>



      <?php
      /* --------------------------------------------
        Flexible Single Column
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flexible_single_col_title_only' ) :
        
        $id                       = get_sub_field("flexible_single_col_title_only_id");
        $class                    = get_sub_field("flexible_single_col_title_only_class");
        $section_title            = get_sub_field("flexible_single_col_title_only_title");
        $text                     = get_sub_field("flexible_single_col_title_only_text");

        ?>
        
        <div class="section single-column-content <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">

            <?php if(!empty($section_title)): ?>
              <h2><?= $section_title ?></h2>
            <?php endif; ?>
            <div class="content-text"><?= $text ?></div>

          </div>
        </div>



      <?php
      /* --------------------------------------------
        Two columns progress bar
      -------------------------------------------- */
      elseif ( get_row_layout() == 'two_col_progressbar' ) :
        
        $id           = get_sub_field("two_col_progressbar_id");
        $class        = get_sub_field("two_col_progressbar_class");
        $image_1      = get_sub_field("two_col_progressbar_image_1");
        $text_1       = get_sub_field("two_col_progressbar_text_1");
        $image_2      = get_sub_field("two_col_progressbar_image_2");
        $text_2       = get_sub_field("two_col_progressbar_text_2");

        ?>
        
        <div class="section two-columns-progressbar <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">
            <div class="row">
              <div class="col col-6">
                <div class="col-inner">
                  <img src="<?= $image_1 ?>">
                  <p><?= $text_1 ?></p>
                </div>
              </div>
              <div class="col col-6">
                <div class="col-inner">
                  <img src="<?= $image_2 ?>">
                  <p><?= $text_2 ?></p>
                </div>
              </div>
            </div>            
          </div>
        </div>



      <?php
      /* --------------------------------------------
        Flexible Image Columns
      -------------------------------------------- */
      elseif ( get_row_layout() == 'flexible_image_columns' ) :
        
        $id                       = get_sub_field("flexible_image_columns_id");
        $class                    = get_sub_field("flexible_image_columns_class");

        ?>
        
        <div class="section flexible-image-columns <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">

            <div class="row">
              <?php if(have_rows("flexible_image_columns_image_columns")): ?>
                <?php while(have_rows("flexible_image_columns_image_columns")): the_row();

                  $column_image = get_sub_field("column_image");
                  $column_text  = get_sub_field("flexible_image_columns_column_text");
                ?>

                <div class="col">
                  <div class="col-inner">
                    <img src="<?= $column_image ?>">
                    <div class="column-text"><?= $column_text ?></div>
                  </div>
                </div>
                  

                <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
        </div>




      <?php
      /* --------------------------------------------
        Download Report
      -------------------------------------------- */
      elseif ( get_row_layout() == 'download_report' ) :
        
        $id        = get_sub_field("download_report_id");
        $class     = get_sub_field("download_report_class");
        $title     = get_sub_field("download_report_title");
        $sub_title = get_sub_field("download_report_sub_title");
        $cta_btn   = get_sub_field("download_report_cta_button");

        ?>
        
        <div class="section download-report <?= ($class) ? $class : ''; ?>" <?= ($id) ? "id='".$id."'" : '';?>>
          <div class="container">
            <div class="row">
              <div class="col col-6">
                <div class="col-inner">
                  <h2><?= $title ?></h2>
                  <p><?= $sub_title ?></p>
                </div>
              </div>
              <div class="col col-6">
                <div class="col-inner">
                  <a class="btn btn-light-purple" target="<?= $cta_btn['target'] ?>" href="<?= $cta_btn['url'] ?>"><?= $cta_btn['title'] ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>



      <?php endif; //end if layout ?>
    <?php endwhile; //end while main flex content ?>
  <?php endif; //end if have rows mail flex content ?>

</main>

<?php get_footer(); ?>