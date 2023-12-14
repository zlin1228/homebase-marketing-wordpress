<?php
/* Template name: Data For COVID-19
 * Template version: V1
 * Updated By: Baljinder Singh
 * Date: Mar 31, 2020
 *  */
get_header(); ?>

<div class="container new-style" role="document">

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
        <div class="row row-flex">
          <div class="row-container">
            <div class="columns medium-5 col-left ">
              <div class="column-inner">
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
            <div class="columns medium-7 col-right">
              <div class="column-inner">
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
      IFrames
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_iframes' ) : ?>

      <?php if (!get_sub_field('hide_widget')) : ?>
        <div class="section section-iframes <?php echo ($section_index)?>">
          <?php if ( have_rows('iframes') ) :
              while ( have_rows('iframes') ) : the_row();

                  echo '  <div class="row">';
                  echo '    <div class="columns medium-12">';
                  echo '      <div class="iframe-headline"><h2>'. get_sub_field('headline') .'</h2></div>';
                  echo '      <div class="iframe">'. get_sub_field('iframe') .'</div>';
                  echo '    </div>';
                  echo '   </div>';
              endwhile;
          endif; ?>
        </div>
      <?php endif; ?>

    <?php
    /* --------------------------------------------
			simple content
		-------------------------------------------- */
		elseif ( get_row_layout() == 'flex_simple_content' ) : ?>

			<?php if (!get_sub_field('hide_widget')) :
          $center						  = get_sub_field('center');
					$headline						= get_sub_field('headline');
					$extra_css_classes  = get_sub_field('extra_css_classes');
					$add_note 			    = get_sub_field('add_note');
          $content 			      = get_sub_field('content');
          $note 			        = get_sub_field('note');
          $scroll_anchor      = get_sub_field('scroll_anchor');
			?>

				<div class="section section-simple-content <?php echo ($center) ? 'center' : ''; ?> <?php echo ($extra_css_classes) ? $extra_css_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
          <?php if ($headline) : ?>
          <div class="row row-small header">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <h3 class="fw-bold"><?php echo $headline; ?></h3>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
					<div class="row row-small content">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
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
      Plain Text
    -------------------------------------------- */
    elseif ( get_row_layout() == 'flex_plain_text' ) : ?>

      <?php if (!get_sub_field('hide_widget')) :

        $content           = get_sub_field('content');
      ?>

        <div class="section section-plaintext <?php echo ($section_index)?> text-left">
          <div class="row">
            <div class="columns">
              <?php
              // headline
              if ($content) :
                echo $content;
              endif;
              ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

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
          <?php if ( !$hide_breadcrumb ) : ?>
          <div class="row row-small header">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php if (function_exists('the_breadcrumb_for_covid19_data')) the_breadcrumb_for_covid19_data(get_state_array()); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <div class="row row-small content">
            <div class="row-container">
              <div class="columns medium-6 col-left">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php echo ($left_content); ?>
                  </div>
                </div>
              </div>
              <div class="columns medium-6 col-right">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <?php echo ($right_content); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php if ( $add_link ) : ?>
          <div class="row row-small footer">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <div class="text-wrapper">
                    <a class="text-link-arrow" href="<?php echo ($link_url); ?>"><?php echo ($link_text); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
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
					<div class="row row-small header">
            <div class="row-container">
              <div class="column">
                <div class="column-inner">
                  <?php if ($headline) : ?>
                    <h3 class="fw-bold"><?php echo $headline; ?></h3>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          
          <?php
            // if( have_rows('list') ):
            //   $count = 0;
            //   while ( have_rows('list') ) : the_row(); 
            //     $count++;
            //   endwhile;
            //   $breakPoint = round($count/6, 0 ,PHP_ROUND_HALF_DOWN) + 1;
            // endif;
          ?>

          <?php if( have_rows('list') ): ?>
            <div class="row row-small content">
              <div class="row-container"> 
                <div class="column">
                  <div class="column-inner">
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
            </div>
          <?php endif; ?>
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
          <div class="row">
            <div class="row-container"> 
              <div class="column">
                <div class="column-inner">
                  <div class="container <?php echo ($add_border_top) ? 'top-border': '';?> <?php echo ($text_align);?>">
                    <div class="content-wrapper">
                      <?php

                      if ($logo) :?>
                        <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
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

<script type="text/javascript">
		window.addEventListener( 'load', function() {
      if (jQuery(this).width() < 641) {
        jQuery('.section-simple-list h3').click(function(event){

          if( jQuery('.section-simple-list h3.active').is(jQuery(this)) )  {
            jQuery('.section-simple-list h3.active').removeClass('active');
            jQuery('.section-simple-list .row.content.open').removeClass('open').slideUp();

            return;
          }

          jQuery('.section-simple-list h3.active').removeClass('active');
          jQuery('.section-simple-list .row.content.open').removeClass('open').slideUp();

          jQuery(this).addClass('active');
          jQuery(this).closest( ".section-simple-list" ).find('.row.content').addClass('open').slideDown();
        });
      }
		});
</script>

<?php get_footer(); ?>