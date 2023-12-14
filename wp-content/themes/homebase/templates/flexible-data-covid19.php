<?php
/* Template name: Data For COVID-19
 * Template version: V1
 * Updated By: Baljinder Singh
 * Date: Mar 31, 2020
 *  */
get_header(); ?>

<main id="primary" class="site-main" role="document">

<?php
if ( have_rows('flexible_content') ) :

  while ( have_rows('flexible_content') ) : the_row();

    /* hero */
    if ( get_row_layout() == 'flex_hero' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :
        $headline         = get_sub_field('headline');
        $subheadline      = get_sub_field('subheadline');
        $content          = get_sub_field('content');
      ?>
      
      <div class="section section-hero">
        <div class="container">
          <div class="row v-align-middle">
            <div class="col col-12 col-sm-5 col-left ">
              <div class="col-inner">
                <div class="text-wrapper">
                  <?php if ($headline) : ?>
                    <h1 class="fw-black small"><?php echo do_shortcode($headline); ?></h1>
                  <?php endif; ?>

                  <?php if ($subheadline) : ?>
                    <h2 class="subheading"><?php echo do_shortcode($subheadline); ?></h2>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col col-12 col-sm-7 col-right">
              <div class="col-inner">
                <div class="text-wrapper">
                  <?php if ($content) :
                    echo $content;
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php endif; ?>

    <?php
    /* --------------------------------------------
			simple content
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_simple_content' ) : ?>

			<?php if (!get_sub_field('hide_widget')) :
          $center						= get_sub_field('center');
					$headline						= get_sub_field('headline');
					$extra_css_classes      = get_sub_field('extra_css_classes');
					$add_note 			    = get_sub_field('add_note');
          $content 			      = get_sub_field('content');
          $note 			        = get_sub_field('note');
          $scroll_anchor      = get_sub_field('scroll_anchor');
			?>

				<div class="section section-simple-content <?php echo ($center) ? 'center' : ''; ?> <?php echo ($extra_css_classes) ? $extra_css_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
          <?php if ($headline) : ?>
          <div class="container-narrow">
            <div class="row header">
              <div class="col col-12">
                <div class="col-inner">
                    <h3 class="fw-bold"><?php echo $headline; ?></h3>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
					<div class="container-narrow">
            <div class="row content">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php echo $content; ?>

                    <?php if ($add_note) : ?>
                      <div class="note"><?php echo $note; ?></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			<?php endif;?>

    <?php
    /* --------------------------------------------
			simple content -2 columns
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_2_columns_simple_content' ) : ?>

			<?php if (!get_sub_field('hide_widget')) :
          $hide_breadcrumb		      = get_sub_field('hide_breadcrumb');
          $left_content             = get_sub_field('left_content');
					$right_content 			      = get_sub_field('right_content');
          $add_link 			          = get_sub_field('add_link');
          $link_text 			          = get_sub_field('link_text');
          $link_url 			          = get_sub_field('link_url');
			?>

        <div class="section section-2-cols">
          
          <div class="container-narrow">
            <?php if ( !$hide_breadcrumb ) : ?>
              <div class="row header">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="text-wrapper">
                      <?php if (function_exists('the_breadcrumb_for_covid19_data')) the_breadcrumb_for_covid19_data(get_state_array()); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <div class="row content">
              <div class="col col-12 col-sm-6 col-left">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php echo ($left_content); ?>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-sm-6 col-right">
                <div class="col-inner">
                  <div class="text-wrapper">
                    <?php echo ($right_content); ?>
                  </div>
                </div>
              </div>
            </div>

            <?php if ( $add_link ) : ?>
              <div class="row footer">
                <div class="col col-12">
                  <div class="col-inner">
                    <div class="text-wrapper">
                      <a class="text-link-arrow" href="<?php echo ($link_url); ?>"><?php echo ($link_text); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
			<?php endif;?>

    <?php
    /* --------------------------------------------
			simple list
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_simple_list' ) : ?>

			<?php if (!get_sub_field('hide_widget')) :
          $headline						= get_sub_field('headline');
          $type               = get_sub_field('type');
			?>

				<div class="section section-simple-list">
					<div class="container-narrow">
            <div class="row header">
              <div class="col col-12">
                <div class="col-inner">
                  <?php if ($headline) : ?>
                    <h3 class="fw-bold"><?php echo $headline; ?></h3>
                  <?php endif; ?>
                </div>
              </div>
            </div>
         
          <?php if( have_rows('list') ): ?>
            <div class="row content">
              <div class="col col-12">
                <div class="col-inner">
                  <div class="item-wrapper">
                    <?php  while ( have_rows('list') ) : the_row(); ?>
                      <div class="item">
                      <?php if ($type == "overall") : ?>
                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('item_name'); ?></a>
                      
                      <?php elseif ($type == "state") :?>
                        <a href="/data/state/<?php the_sub_field('link');?>/"><?php the_sub_field('item_name'); ?></a>
                      <?php elseif ($type == "city") :?>
                        <a href="/data/city/<?php the_sub_field('link');?>/"><?php the_sub_field('item_name'); ?></a>
                      <?php endif; ?>
                      </div>
                    <?php  endwhile; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          
          </div>
				</div>

      <?php endif;?>
      
      <?php
    /* --------------------------------------------
      About us Widget
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_aboutus' ) : ?>
      <?php if (!get_sub_field('hide_widget')) : ?>

        <?php
        $add_border_top         = get_sub_field('add_border_top');
        $widget_type            = get_sub_field('widget_type');
        $text_align             = get_sub_field('text_align');
        $logo                   = get_sub_field('logo');
        $text                   = get_sub_field('text');

        ?>

        <div class="section section-aboutus <?php echo ($widget_type);?>">
          <div class="container">
            <div class="row"> 
              <div class="col col-12">
                <div class="col-inner">
                  <div class="box-container <?php echo ($add_border_top) ? 'top-border': '';?> <?php echo ($text_align);?>">
                    <div class="content-wrapper">
                      <?php

                      if ($logo) :?>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                      <?php endif;

                      if ($text) :
                        echo $text;
                      endif;?>
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