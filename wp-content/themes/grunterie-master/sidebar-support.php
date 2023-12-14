<aside id="sidebar" class="support-sidebar small-11 small-centered large-4 large-uncentered columns">
  <div class="support-sidebar__inner">
    <?php
  /*
   * Loop through Categories and Display Posts within
   */
  $post_type = 'support';
   
  // Get all the taxonomies for this post type
  $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
   
  foreach( $taxonomies as $taxonomy ) :
   
      // Gets every "category" (term) in this taxonomy to get the respective posts
      $terms = get_terms( $taxonomy );
   
      foreach( $terms as $term ) : ?>

      <?php $term_link = get_term_link( $term ); ?>
        
          <ul class="support-sidebar__menu">
            <li href="#" class="support-sidebar__term js-support-dropdown">
              <div class="term-name"><?php echo $term->name; ?></div>

              <ul class="sub-menu">
                <?php
                $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => -1,  //show all posts
                        'tax_query' => array(
                            array(
                                'taxonomy' => $taxonomy,
                                'field' => 'slug',
                                'terms' => $term->slug,
                            )
                        )
         
                    );
                $posts = new WP_Query($args);
         
                if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
                    <li class="support-sidebar__cat show_hide"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php  echo get_the_title(); ?></a></li>
                           
                <?php endwhile; endif; ?>
                </ul>

            </li>
          </ul>
   
      <?php endforeach;
   
  endforeach; ?>
  <a href="<?php echo get_site_url(); ?>/support" class="go-back strong-link">Back to Support Index <span class="arrow"></span></a>
   <br>
 <div class="sidebar-block">
      <a href="<?php echo get_site_url(); ?>/?utm_source=support">
        <img src="https://joinhomebase.com/wp-content/uploads/2017/05/blog-signup-link-1.png">
      </a>
    </div>

  </div>
</aside><!-- /#sidebar -->