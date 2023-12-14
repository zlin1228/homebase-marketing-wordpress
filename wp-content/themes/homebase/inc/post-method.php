<?php

if ( !class_exists('PostMethod') ):

class PostMethod{

    public $post_type;
    public $page;
    public $postsPerPage;
    public $sort_by;
    public $meta_key;

    
    function __construct($post_type='post', $page = 1, $sort_by = null, $postsPerPage = 4, $meta_key = null){
        $this->post_type = $post_type;
        $this->page = $page;
        $this->postsPerPage = $postsPerPage;
        $this->sort_by = $sort_by;
        $this->meta_key = $meta_key;
    }

    public function count_posts($post_type = ''){   
        $args = array(
            'post_type'     => $post_type,
            'post_status'   => 'publish',
            'numberposts'   => -1,
        );

        $posts = new WP_Query( $args );
        return $posts->found_posts; 
    }

    public function get_featured_post($post_filter, $cat_id=null){
      $meta_key = null;
      $sort_by = 'modified';

      if($post_filter == "popular") {
        $meta_key = 'wpb_post_views_count';
        $sort_by = 'meta_value_num';
      }

      $args = array(
        'post_type'       => $this->post_type,
        'post_status'     => 'publish',
        'posts_per_page'  => 1,
        'cat'             => $cat_id,
        'meta_key'        => $meta_key,
        'orderby'         => $sort_by,
        'order'           => 'DESC',
      );

      $posts = new WP_Query( $args );

      if( $posts->have_posts() ){
        while( $posts->have_posts() ): $posts->the_post();
          get_template_part( 'template-parts/article', 'featured');
        endwhile;
      }

      wp_reset_postdata();
    }


    public function get_grid_posts($post_num, $sort_by, $cat_id, $subscribe) {
      $meta_key = null;
      $sort_by = 'modified';

      if($sort_by == "popular") {
        $meta_key = 'wpb_post_views_count';
        $sort_by = 'meta_value_num';
      }

      $args = array(
        'post_type'       => $this->post_type,
        'post_status'     => 'publish',
        'posts_per_page'  => $post_num,
        'cat'             => $cat_id,
        'meta_key'        => $meta_key,
        'orderby'         => $sort_by,
        'order'           => 'DESC',
        'paged'           => get_query_var('paged'),
      );

      $posts = new WP_Query( $args );
      $index = 0;

      $total = $posts->max_num_pages;


      if( $posts->have_posts() ){
        echo '<ul class="post-grid">';
        while( $posts->have_posts() ): $posts->the_post(); $index++;
          if($subscribe && $subscribe['position'] == $index) {
            echo '<li class="subscribe-item">';
            set_query_var( 'subscribe', $subscribe );
            get_template_part( 'templates/subscribe', 'content');
            echo '</li>';
            
          }
          echo '<li class="post-item">';
          get_template_part( 'template-parts/article', 'thumb');
          echo '</li>';
        endwhile;
        echo '</ul>';
      }

      if ( !$current_page = get_query_var('paged') )
          $current_page = 1;
     // structure of "format" depends on whether we're using pretty permalinks
      if($total > 1) {
        echo '<div class="post-navigator">';
        echo '<span class="prev">';
        echo get_custom_previous_posts_link('&lsaquo;');
        echo '</span>';
      }
       
      echo paginate_links(array(
        'prev_next'=> FALSE,
        'current'  => $current_page,
        'total'    => $total,
        'mid_size' => 1,
        'add_fragment'       => '#post-grid',
        'type'     => 'list'
      ));

      if($total > 1) {
        echo '<span class="next">';
        echo get_custom_next_posts_link('&rsaquo;', $total);
        echo '</span>';
        echo'</div>';
      }
      
      wp_reset_postdata();
    }

    public function get_slider_posts($post_num, $sort_by, $cat_id) {
      if($sort_by == "related") {
        $postID = get_the_ID();
        $tags = wp_get_post_tags($postID);
        
        if ($tags) {
          $first_tag = $tags[0]->term_id;
          $args=array(
            'post_type'       => $this->post_type,
            'post_status'     => 'publish',
            'posts_per_page'  => $post_num,
            'tag__in'          => array($first_tag),
            'post__not_in'    => array($postID),
            'ignore_sticky_posts'=>1,
            'orderby'         => 'modified',
            'order'           => 'DESC',
          );
        }
        else {
          $cat_id = get_the_category( $postID )[0]->term_id;
          $args=array(
            'post_type'       => $this->post_type,
            'post_status'     => 'publish',
            'cat'             => $cat_id,
            'posts_per_page'  => $post_num,
            'post__not_in'    => array($postID),
            'ignore_sticky_posts'=>1,
            'orderby'         => 'modified',
            'order'           => 'DESC',
          );
        }
      }
      else {
        $meta_key = null;
        $sort_by = 'modified';

        if($sort_by == "popular") {
          $meta_key = 'wpb_post_views_count';
          $sort_by = 'meta_value_num';
        }
  
        $args = array(
          'post_type'       => $this->post_type,
          'post_status'     => 'publish',
          'posts_per_page'  => $post_num,
          'cat'             => $cat_id,
          'meta_key'        => $meta_key,
          'orderby'         => $sort_by,
          'order'           => 'DESC',
        );
      }
      

      $posts = new WP_Query( $args );

      if( $posts->have_posts() ){
        echo '<div class="post-slider">';
        while( $posts->have_posts() ): $posts->the_post();
          echo '<div class="post-item">';
          get_template_part( 'template-parts/article', 'nothumb');
          echo '</div>';
        endwhile;
        echo '</div>';
      }

      wp_reset_postdata();
    }
}

endif;


// add_filter('get_pagenum_link', 'custom_next_previous_fix');

// function custom_next_previous_fix($url) {
//   if(is_blog ())
//     $url.='#post-grid';
  
//   return $url;
// }

function get_custom_previous_posts_link( $label = null ) {
  global $paged;

  if ( null === $label ) {
      $label = __( '&laquo;' );
  }

  if ( ! is_single() && $paged > 1 ) {
      /**
       * Filters the anchor tag attributes for the previous posts page link.
       *
       * @since 2.7.0
       *
       * @param string $attributes Attributes for the anchor tag.
       */
      $attr = apply_filters( 'previous_posts_link_attributes', '' );
      $link = previous_posts( false )."#post-grid";
      return '<a href="' . $link . "\" $attr>" . preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '</a>';
  }
  else 
      return '<span>'. preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) .'</span>' ;
}

function get_custom_next_posts_link( $label = null, $max_page = 0 ) {
  global $paged, $wp_query;

  if ( ! $max_page ) {
      $max_page = $wp_query->max_num_pages;
  }

  if ( ! $paged ) {
      $paged = 1;
  }

  $nextpage = intval( $paged ) + 1;

  if ( null === $label ) {
      $label = __( '&raquo;' );
  }

  if ( ! is_single() && ( $nextpage <= $max_page ) ) {
      /**
       * Filters the anchor tag attributes for the next posts page link.
       *
       * @since 2.7.0
       *
       * @param string $attributes Attributes for the anchor tag.
       */
      $attr = apply_filters( 'next_posts_link_attributes', '' );
      $link = next_posts( $max_page, false )."#post-grid";
      return '<a href="' . $link . "\" $attr>" . preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '</a>';
  }
  else 
      return '<span>'. preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) .'</span>' ;
}