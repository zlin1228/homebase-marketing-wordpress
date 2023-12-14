<aside id="sidebar" class="support-sidebar small-11 small-centered large-4 large-uncentered columns">
    <?php
  /*
   * Loop through Categories and Display Posts within
   */
  $post_type = 'hr';
   
  // Get all the taxonomies for this post type
  $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
   
  foreach( $taxonomies as $taxonomy ) :
   
      // Gets every "category" (term) in this taxonomy to get the respective posts
      $terms = get_terms( $taxonomy );
   
      foreach( $terms as $term ) : ?>
        
        <ul>
          <p class="strong"><?php echo $term->name; ?></p>
     
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
     
              <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php  echo get_the_title(); ?></a></li>
                       
            <?php endwhile; endif; ?>
        </ul>
   
      <?php endforeach;
   
  endforeach; ?>
</aside><!-- /#sidebar -->