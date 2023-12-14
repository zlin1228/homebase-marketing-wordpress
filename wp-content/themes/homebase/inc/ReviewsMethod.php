<?php

if ( !class_exists('ReviewsMethod') ):

class ReviewsMethod{

    public $page;
    public $postsPerPage;
    public $filter_company;
    public $filter_feature;
    public $filter_address;
    public $sort_by;

    public $out;
    
    function __construct($page = 1, $filter_company = null, $filter_feature = null, $filter_address = null, $sort_by = null, $postsPerPage = 5){
        $this->page = $page;
        $this->postsPerPage = $postsPerPage;
        $this->filter_company = $filter_company;
        $this->filter_feature = $filter_feature;
        $this->filter_address = $filter_address;
        $this->sort_by = $sort_by;
    }

    public function count_posts($post_type = ''){   
        $args = array(
            'post_type'     => 'reviews',
            'numberposts'   => -1,
            'meta_query'    => $this->get_query_filter(),
        );

        $posts = new WP_Query( $args );
        return $posts->post_count;
    }

    public function get_query_filter(){
        $meta_query = array('relation' => 'AND');

        if($this->filter_company != null){
            $meta_query[] = array(
                'key' => 'review_$_company',
                'value' => $this->filter_company,
                'compare' => '='
            );
        }
        if($this->filter_feature != null){
            $meta_query[] = array(
                'key' => 'review_$_feature',
                'value' => $this->filter_feature,
                'compare' => '='
            );
        }
        if($this->filter_address != null){
            $meta_query[] = array(
                'key' => 'review_$_address',
                'value' => $this->filter_address,
                'compare' => '='
            );
        }

        return $meta_query;
    }

    public function get_html_filters(){
        $args = array(
            'post_type'     => 'reviews',
            'numberposts'    => -1,
        );

        $posts = new WP_Query( $args );

        $company_array = array();
        $features_array = array();
        $address_array = array();

        if( $posts->have_posts() ){
            while( $posts->have_posts() ): $posts->the_post();
                $review = get_field('review', get_the_ID());
                array_push($company_array, trim($review['author']['company']));
                array_push($address_array, trim($review['author']['address']));
                foreach ($review['review']['features'] as $feature) {
                    array_push($features_array, trim($feature['feature']));
                }
            endwhile;
        }
        wp_reset_postdata();

        $company_array = array_unique($company_array);
        $address_array = array_unique($address_array);
        $features_array = array_unique($features_array);

        set_query_var( 'company_array', $company_array );
        set_query_var( 'address_array', $address_array );
        set_query_var( 'features_array', $features_array );
        get_template_part( 'template-parts/review', 'filters');
    }

    public function get_posts(){
        $postOffset = ($this->page-1) * $this->postsPerPage;
        $countPosts = $this->count_posts();
        $max_pages = ceil($countPosts/$this->postsPerPage);

        if($this->sort_by == 'date'){
            $sort_by = $this->sort_by;
            $order = 'DESC';
        } else if($this->sort_by == 'rating'){
            $sort_by = 'meta_value';
            $order = 'DESC';
        } else{
            $sort_by = null;
            $order = 'ASC';
        }

        $args = array(
            'post_type'     => 'reviews',
            'offset' => $postOffset,
            'posts_per_page' => $this->postsPerPage,
            'meta_query'    => $this->get_query_filter(),
            'meta_key' => 'review_$_stars',
            'orderby' => $sort_by,
            'order'   => $order,
        );

        $posts = new WP_Query( $args );

        if( $posts->have_posts() ){
            while( $posts->have_posts() ): $posts->the_post();

                $review = get_field('review', get_the_ID());
                set_query_var( 'review', $review );
                //$this->out .= file_get_contents(locate_template("templates/review-content.php"));
                get_template_part( 'template-parts/review', 'content');
            endwhile;
        }
        if($countPosts > $this->postsPerPage){
            $this->get_pagination();
        }

        wp_reset_postdata();
    }

    public function get_pagination(){
        $countPosts = $this->count_posts();
        $max_pages = ceil($countPosts/$this->postsPerPage);
        set_query_var('page', $this->page);
        set_query_var('max_pages', $max_pages);
        //$this->out .= file_get_contents(locate_template("templates/review-pagination.php"));
        get_template_part( 'template-parts/review', 'pagination');
    }

}

endif;