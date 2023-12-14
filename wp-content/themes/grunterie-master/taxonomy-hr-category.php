<?php
wp_redirect( get_post_permalink(12304), 301 );
exit();
get_header(); 
?>

<section class="support-header hr-taxonomy banner short single" style="background-image: url(<?php the_field('hr_tax_background_image', 'option'); ?>);">
  <div id="overlay"></div>
  <div class="row overlay-content">
    <div class="small-12 columns">
      <?php
        if( have_rows('hr_c_hero_content', 'option') ):
          while( have_rows('hr_c_hero_content', 'option') ): the_row();
            $headline       = get_sub_field('hr_c_hero_headline', 'option');
            $subheadline    = get_sub_field('hr_c_hero_subheadline', 'option');
            $partner_title  = get_sub_field('hr_c_partnership_tiltle', 'option');
            $partner_link   = get_sub_field('hr_c_partnership_link', 'option');
            $partner_logo   = get_sub_field('hr_c_partnership_logo', 'option');
          endwhile;
        endif;
      ?>
      <p class="strong"><?php echo $headline; ?></p>
      <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
      <h1><?php echo $term->name; ?></h1>
      <br><br>
      <div class="hrg hide-for-small">
        <p><?php echo $partner_title; ?></p>
        <a href="<?php echo $partner_link; ?>" target="_blank"><span class="logo" style="background-image: url(<?php echo $partner_logo; ?>);"></span></a>
      </div>
    </div>
  </div>
</section>

<!-- Start the main container -->
<div class="container" role="document">
  <div class="row">
    <div class="small-12 columns">

      <div class="small-12 large-12 columns" id="content" role="main">
      <?php
        if( have_rows('hr_c_main_content', 'option') ):
          while( have_rows('hr_c_main_content', 'option') ): the_row();
            $download   = get_sub_field('hr_c_download_button_text', 'option');
            $back   = get_sub_field('hr_c_back_button_text', 'option');
          endwhile;
        endif;
      ?>

        <ul class="resources medium-block-grid-3 large-block-grid-3">
        
        <?php if ( have_posts() ) : ?>
        
          <?php /* Start the Loop */ ?>
          <?php query_posts($query_string."&orderby=title&order=ASC"); ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <li class="resource">
              <div class="wrapper">
                <div class="icon" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/word.png)"></div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('hr_resource_summary'); ?></p>
                <a class="primary-cta download-resource" href="<?php the_field('hr_resource_link'); ?>" target="_blank"><?php echo $download; ?></a>
              </div>
            </li>

          <?php endwhile; ?>
          
          <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
          
        <?php endif; // end have_posts() check ?>

        </ul>

        <a href="<?php get_site_url(); ?>/hr-resources/" class="resource-link strong-link" style="margin-bottom: 30px;"><span class="arrow-left"></span><?php echo $back; ?></a>
        
        <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
          <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
          </nav>
        <?php } ?>

      </div>
    </div>
  </div>
</div>

<section class="hrg-callout">
  <div class="row">
    <div class="small-11 small-centered large-10 large-centered columns">
    <?php
      if( have_rows('hr_c_contact_us', 'option') ):
        while( have_rows('hr_c_contact_us', 'option') ): the_row();
          $contact_headline   = get_sub_field('hr_c_contactus_headline', 'option');
          $contact_text   = get_sub_field('hr_c_contactus_text', 'option');
        endwhile;
      endif;
    ?>
      <h3><?php echo $contact_headline; ?></h3>
      <p><?php echo $contact_text; ?></p>
    </div>
  </div>
</section>
    
<?php get_footer(); ?>