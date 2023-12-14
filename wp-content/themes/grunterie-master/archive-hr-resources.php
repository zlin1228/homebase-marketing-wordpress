<?php 
  wp_redirect( 'http://joinhomebase.com', 301 ); exit;
  wp_redirect( get_post_permalink(12304), 301 );
  exit();
  get_header(); 
?>

<section class="support-header hr-header banner short single" style="background-image: url(<?php the_field('hr_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <?php
        if( have_rows('hero_content', 'option') ):
          while( have_rows('hero_content', 'option') ): the_row();
            $headline       = get_sub_field('hr_a_hero_headline', 'option');
            $subheadline    = get_sub_field('hr_a_hero_subheadline', 'option');
            $partner_title  = get_sub_field('hr_a_partnership_tiltle', 'option');
            $partner_link   = get_sub_field('hr_a_partnership_link', 'option');
            $partner_logo   = get_sub_field('hr_a_partnership_logo', 'option');
          endwhile;
        endif;
      ?>
      <h1><?php echo $headline; ?></h1>
      <p><?php echo $subheadline; ?></p>

      <div class="hrg hide-for-small">
        <p><?php echo $partner_title; ?></p>
        <a href="<?php echo $partner_link; ?>" target="_blank"><span class="logo" style="background-image: url(<?php echo $partner_logo; ?>);"></span></a>
      </div>
    </div>
  </div>
</section>

  <!-- Start the main container -->
<div class="container hr-container" role="document">
  <div class="row">

    <!-- Row for main content area -->
    <div class="small-11 small-centered large-11 large-centered columns" role="main">
    <?php
      if( have_rows('main_content', 'option') ):
        while( have_rows('main_content', 'option') ): the_row();
          $intro_headline   = get_sub_field('hr_a_introduction_headline', 'option');
          $intro_text       = get_sub_field('hr_a_introduction_text', 'option');
          $item_link_text   = get_sub_field('hr_a_item_link_text', 'option');
          $modal_title      = get_sub_field('hr_a_modal_title', 'option');
          $modal_text       = get_sub_field('hr_a_modal_text', 'option');
          $button_text      = get_sub_field('hr_a_button_text', 'option');
        endwhile;
      endif;
    ?>
      <div class="intro small-12 small-centered large-10 columns">        
        <h2><?php echo $intro_headline; ?></h2> 
        <p><?php echo $intro_text; ?></p>
      </div>

      <div class="row">
        <!-- Row for main content area -->
        <div class="small-11 small-centered medium-11 medium-centered columns" role="main">
          <ul class="small-block-grid-1 medium-block-grid-2">
          <?php
           
          // $post_type = 'hr-resources';
           
          // // Get all the taxonomies for this post type
          // $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
           
          // foreach( $taxonomies as $taxonomy ) :
           
              // Gets every "category" (term) in this taxonomy to get the respective posts
              $terms = get_terms( 'hr-category' );
           
              foreach( $terms as $term ) : ?>

              <?php $term_link = get_term_link( $term ); ?> 

                <li>
                  <div class="support-tax">
                    <div class="show-for-medium-up support-tax__icon <?php echo $term->slug; ?>"></div>
                    <div class="support-tax__content">
                      <div class="support-tax__content-inner">
                        <span class="support-tax__title"><?php echo $term->name; ?></span>
                        <a class="support-tax__link" href="<?php echo $term_link ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>" data-reveal-id="<?php echo $term->slug; ?>-modal"><?php echo $item_link_text; ?></a>
                      </div>
                    </div>
                  </div>
                </li>

                <div id="<?php echo $term->slug; ?>-modal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                  <h2 id="modalTitle"><?php echo $modal_title; ?></h2>
                  <p><?php echo $modal_text; ?></p>
                  <a href="<?php echo $term_link ?>" class="primary-cta"><?php echo $button_text; ?></a>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>
           
              <?php endforeach;
           
          // endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="hrg-callout">
  <div class="row">
    <div class="small-11 small-centered large-10 large-centered columns">
      <?php
        if( have_rows('contact_us', 'option') ):
          while( have_rows('contact_us', 'option') ): the_row();
            $contactus_headline   = get_sub_field('hr_a_contactus_headline', 'option');
            $contactus_text       = get_sub_field('hr_a_contactus_text', 'option');
          endwhile;
        endif;
      ?>
      <h3><?php echo $contactus_headline; ?></h3>
      <p><?php echo $contactus_text; ?></p>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>