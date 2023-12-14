<div class="small-12 medium-4 columns">
  <div class="blog-sidebar">
    <div class="sidebar-block bg--grey-light">
      <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <div class="row collapse">
          <div class="large-8 small-9 columns">
            <input type="text" value="" name="s" aria-label="Seach" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
          </div>
          <div class="large-4 small-3 columns">
            <input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="button postfix">
          </div>
        </div>
      </form>
    </div>
    
    <div class="sidebar-block">
      <a href="<?php echo get_site_url(); ?>/hr-resources">
        <img alt="Banner for download templates" src="<?php echo get_template_directory_uri(); ?>/img/hr-widget.png">
      </a>
    </div>

    <div class="sidebar-block">
      <a href="<?php echo get_site_url(); ?>/">
        <img alt="Banner Homebase" src="https://joinhomebase.com/wp-content/uploads/2017/05/blog-signup-link-1.png">
      </a>
    </div>
  </div>

  <div id="sidebar">
    <?php

    $taxonomy = 'engineerings_cat';
    $terms = get_terms($taxonomy); // Get all terms of a taxonomy

    if ( $terms && !is_wp_error( $terms ) ) :
    ?>
    <article class="panel widget widget_categories">
        <h4>Categories</h4>
        <ul>
            <?php foreach ( $terms as $term ) { ?>
                <li class="cat-item"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>" data-wpel-link="internal"><?php echo $term->name; ?></a></li>
            <?php } ?>
        </ul>
    <?php endif;?>

  </div>

</div>