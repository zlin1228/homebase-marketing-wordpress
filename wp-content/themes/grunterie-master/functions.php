<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may want to use plugins to keep things tidy.

*/


/*
1. lib/clean.php
  - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
2. lib/enqueue-style.php
    - enqueue Foundation and Reverie CSS
*/
require_once('lib/enqueue-style.php');

/*
3. lib/foundation.php
	- add pagination
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/nav.php
	- custom walker for top-bar and related
*/
require_once('lib/nav.php'); // filter default wordpress menu classes and clean wp_nav_menu markup
/*
5. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

//Composer dependencies
require_once( __DIR__ . '/vendor/autoload.php');


/**** Requiere Custom Fileds */
require_once('include/custom-fields/flexible-home-fields.php'); // do all the cleaning and enqueue here
require_once('include/custom-fields/flexible-home-new-fields.php');
require_once('include/custom-fields/flexible-home-mt39-fields.php');
require_once('include/custom-fields/flexible-new-home-mt39-fields.php');
require_once('include/custom-fields/flexible-content-fields.php'); // do all the cleaning and enqueue here
require_once('include/custom-fields/flexible-content-2-fields.php'); //new ACF group for another flexible content for -5 Lps
require_once('include/custom-fields/flexible-business-option-fields.php');
require_once('include/custom-fields/flexible-data-covid19-fields.php');
require_once('include/custom-fields/flexible-pricing-mt58-fields.php');
require_once('include/custom-fields/flexible-btb-mt59-fields.php');
require_once('include/custom-fields/flexible-partners-mt50-fields.php');
require_once('include/custom-fields/flexible-support-mt55-fields.php');
require_once('include/custom-fields/flexible-press-mt63-fields.php');
require_once('include/custom-fields/flexible-customer-mt54-fields.php');
require_once('include/custom-fields/flexible-customers-table-mt65-fields.php');
require_once('include/custom-fields/flexible-co-branded-partner-mt69-fields.php');
require_once('include/custom-fields/flexible-competitor-mt57-fields.php');
require_once('include/custom-fields/flexible-feature-mt51-fields.php');
require_once('include/custom-fields/flexible-partners4-fields.php');
require_once('include/custom-fields/flexible-time-card-calculator-mt88-fields.php');
require_once('include/custom-fields/flexible-simplified-paid-mt31-fields.php');
require_once('include/custom-fields/flexible-franchise-mt93-fields.php');
require_once('include/custom-fields/flexible-seo-cluster-mt87-fields.php');
require_once('include/custom-fields/flexible-secure-mt131-fields.php');
require_once('include/custom-fields/flexible-about-us-mt62-fields.php');
require_once('include/custom-fields/flexible-labor-law-mt120-fields.php');
require_once('include/custom-fields/gdm-sms-demo-confirmation-fields.php');
require_once('include/custom-fields/blog-option-fields.php');
require_once('include/custom-fields/flexible-post-mt41-fields.php');
require_once('include/custom-fields/post-category-fields.php');
require_once('include/custom-fields/engineering-option-fields.php');
require_once('include/custom-fields/flexible-careers-mt104-fields.php');
require_once('include/custom-fields/flexible-pricing-mt120-fields.php');
require_once('include/custom-fields/page-fields.php'); 
require_once('include/custom-fields/labor-laws-map.php');
require_once('include/custom-fields/google-schema-generator-page.php');
require_once('include/custom-fields/time-calculator-page.php'); 
require_once('include/custom-fields/calculator-download.php'); 
require_once('include/custom-fields/state-compliance.php');
require_once('include/custom-fields/schedule-maker.php'); 
require_once('include/custom-fields/hr-resources-custom-fields.php'); 
require_once('include/ajax-functions.php'); 

// Additional functions
include_once('blog-signup.php');
include_once('lib/blog-shortcodes.php');
include_once('lib/shortcodes.php');

/**********************
Add theme supports
 **********************/
if( ! function_exists( 'reverie_theme_support' ) ) {
    function reverie_theme_support() {
        // Add language supports.
        load_theme_textdomain('reverie', get_template_directory() . '/lang');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        // set_post_thumbnail_size(150, 150, false);
        add_image_size('fd-lrg', 1024, 99999);
        add_image_size('fd-med', 768, 99999);
        add_image_size('fd-sm', 320, 9999);

        // rss thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        register_nav_menus(array(
            'primary'          => __('Primary Navigation', 'reverie'),
            // 'additional'    => __('Additional Navigation', 'reverie'),
            // 'utility'       => __('Utility Navigation', 'reverie')
            'footer-product'   => __('Footer Product Navigation', 'reverie'),
            'footer-resources' => __('Footer Resources Navigation', 'reverie'),
            'footer-solutions' => __('Footer Solutions Navigation', 'reverie'),
            'footer-homebase'  => __('Footer Homebase Navigation', 'reverie'),
            'footer-copyright' => __('Footer Copyright Navigation', 'reverie'),
        ));

        // Add custom background support
        add_theme_support( 'custom-background',
            array(
                'default-image' => '',  // background image default
                'default-color' => '', // background color default (dont add the #)
                'wp-head-callback' => '_custom_background_cb',
                'admin-head-callback' => '',
                'admin-preview-callback' => ''
            )
        );
    }
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
    	'id' => 'Sidebar',
        'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('Support');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'id' => 'Support',
        'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('cs-articles');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'id' => 'cs-articles',
        'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
    	'id' => 'Footer',
        'before_widget' => '<div class="large-3 columns"><article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if ( ! function_exists( 'reverie_entry_meta' ) ) {
    function reverie_entry_meta() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
};

// Custom 

function register_menu() {
    register_nav_menu('features-menu', __('Features Navigation'));
}
add_action('init', 'register_menu');

function register_menu2() {
    register_nav_menu('features-menu2', __('Features Navigation 2'));
}
add_action('init', 'register_menu2');

function register_menu_features3() {
    register_nav_menu('features-menu3', __('Features Navigation 3'));
}
add_action('init', 'register_menu_features3');

function register_menu_features4() {
    register_nav_menu('features-menu4', __('Features Navigation 4'));
}
add_action('init', 'register_menu_features4');


function register_clovermenu() {
    register_nav_menu('clover-menu', __('Clover Menu'));
}
add_action('init', 'register_clovermenu');

function register_newmenu() {
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_newmenu');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/*
if ( function_exists ('register_sidebar')) { 
    register_sidebar ('support'); 
}*/

// add_filter( 'the_content_more_link', 'modify_read_more_link' );
// function modify_read_more_link() {
// return '<a class="more-link" href="' . get_permalink() . '">Continue Reading</a>';
// }

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 20 );

function new_excerpt_more($more) { 
    return '...'; 
} add_filter('excerpt_more', 'new_excerpt_more'); 

function get_custom_single_template($single_template) {
    global $post;

    if ($post->post_type == 'ad') {
        $terms = get_the_terms($post->ID, 'type');
        if($terms && !is_wp_error( $terms )) {
            //Make a foreach because $terms is an array but it supposed to be only one term
            foreach($terms as $term){
                $single_template = dirname( __FILE__ ) . '/single-'.$term->slug.'.php';
            }
        }
     }
     return $single_template;
}

add_filter( "single_template", "get_custom_single_template" ) ;

function exclude_diggdigg() {
    if (get_post_type() !== 'post') {
        remove_filter('the_excerpt', 'dd_hook_wp_content');
        remove_filter('the_content', 'dd_hook_wp_content');
    }
}
add_action('template_redirect', 'exclude_diggdigg');



/* ----------------------------
 * New homebase
 --------------------------- */
// options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}


// dynamically populate ACF select field
// with Zendesk categories
function acf_zendesk_category( $field ) {
    $field['choices'] = array();

    $sections_str     = file_get_contents("https://joinhomebase.zendesk.com/api/v2/help_center/en-us/sections.json");
    $sections         = json_decode( $sections_str, true )['sections'];

    if (!empty($sections)) {
        foreach ($sections as $section) {
            $html_url = $section['html_url'];
            $name     = $section['name'];

            $field['choices'][$html_url] = $name;
        }
    }

    return $field;
}

add_filter('acf/load_field/name=zendesk_category', 'acf_zendesk_category');



// ajax handler: zendesk faq articles
if ( !function_exists('zendesk_faq_articles') ):

    function zendesk_faq_articles() {

        $content = '';

        // faq articles
        $articles       = array();
        $url            = 'https://joinhomebase.zendesk.com/api/v2/help_center/en-us/articles.json?sort_by=updated_at&sort_order=desc';
        $articles_data  = json_decode(file_get_contents($url), true );
        $page_count     = $articles_data['page_count'];
        $articles_array = $articles_data['articles'];

        foreach ($articles_array as $article) {
            $id          = $article['id'];
            $promoted    = $article['promoted'];
            $article_url = $article['html_url'];
            $title       = $article['title'];
            $body        = $article['body'];

            if ($promoted) {
                $articles[$id]['title']       = $title;
                $articles[$id]['article_url'] = $article_url;
                $articles[$id]['body']        = $body;
            }
        }

        if (isset($page_count)) {
            for ($i = 2; $i <= $page_count; $i++) {
                $articles_data  = json_decode(file_get_contents($url . '&page=' . $i), true );
                $articles_array = $articles_data['articles'];

                foreach ($articles_array as $article) {
                    $id          = $article['id'];
                    $promoted    = $article['promoted'];
                    $article_url = $article['html_url'];
                    $title       = $article['title'];
                    $body        = $article['body'];

                    if ($promoted) {
                        $articles[$id]['title']       = $title;
                        $articles[$id]['article_url'] = $article_url;
                        $articles[$id]['body']        = $body;
                    }
                }
            }
        }

        if (!empty($articles)) :

            foreach ($articles as $article) :

                $content .= '
                    <div class="columns medium-6 faq-article">
                        <h4>' . $article['title'] . '</h4>
                        <p>' . wp_trim_words(sanitize_text_field($article['body']), 40) . '</p>
                        <a href="' . $article['article_url'] . '" class="faq-article-link" target="_blank">
                            Read more
                        </a>
                    </div>
                ';

            endforeach;

        else :

            $content .= '
                <div class="row">
                    <div class="columns text-center">
                        No promoted articles were found.
                    </div>
                </div>
            ';

        endif;

        echo $content;

        die();

    }

    add_action('wp_ajax_zendesk_faq_articles',        'zendesk_faq_articles');
    add_action('wp_ajax_nopriv_zendesk_faq_articles', 'zendesk_faq_articles');

endif;


// ajax handler - get_press_posts
if ( !function_exists('get_press_posts') ):

    function get_press_posts() {

        $content = "";
        $paged   = sanitize_text_field(intval( $_POST["paged"] )) + 1;

        $arg = array(
            'post_type'      => 'press_list',
            'orderby'        => 'menu_order',
            'posts_per_page' => 6,
            'paged'          => $paged
        );

        $the_query = new WP_Query( $arg );

        $no_more = ($paged == $the_query->max_num_pages) ? 1 : '';

        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();

                $logo         = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $title        = get_the_title();
                $description  = get_field('description');
                $description_ = ($description) ? '<p>' . $description . '</p>' : '';
                $press_link   = get_field('press_link');
                $press_link_  = ($press_link) ? '<a href="' . $press_link . '" target="_blank" rel="noopener">Learn more</a>' : '';

                $content .= '
                    <div class="columns large-4 medium-6 active">
                        <div class="integrations-post">
                            <div class="integrations-post-img">
                                <div>
                                    <img src="' . $logo . '">
                                </div>
                            </div>
                            <div class="integrations-post-content">
                                <h3>' . $title . '</h3>
                                ' . $description_ . $press_link_ . '
                            </div>
                        </div>
                    </div>
                ';

            endwhile; 
        endif; wp_reset_query();

        $callback = array(
            'content' => $content,
            'paged'   => $paged,
            'no_more' => $no_more
        );

        echo wp_json_encode( $callback );
        wp_die();

    }

    add_action('wp_ajax_get_press_posts',        'get_press_posts');
    add_action('wp_ajax_nopriv_get_press_posts', 'get_press_posts');

endif;


function true_style_frontend() {
    wp_enqueue_style( 'my-nice-select', get_template_directory_uri() . '/css/nice-select.css' );
    wp_enqueue_style( 'my-slick', get_template_directory_uri() . '/css/slick.css' );
    //wp_enqueue_style( 'my-main', get_template_directory_uri() . '/css/main.css' );
    if(is_page_template('page-schedule-maker.php')) {
        wp_enqueue_style( 'select2', get_template_directory_uri() . '/css/select2.min.css' );
    }
   
    wp_enqueue_style( 'my-styles-reviews', get_template_directory_uri() . '/css/styles-reviews.css' );
}
 
add_action( 'wp_enqueue_scripts', 'true_style_frontend' );

include_once 'Reviews.php';

function reviews_update(){
    $page = $_POST['page'];
    if($_POST['filter_company'] == 'all'){
        $filter_company = null;
    } else{
        $filter_company = $_POST['filter_company'];
    }
    if($_POST['filter_features'] == 'all'){
        $filter_features = null;
    } else{
        $filter_features = $_POST['filter_features'];
    }
    if($_POST['filter_address'] == 'all'){
        $filter_address = null;
    } else{
        $filter_address = $_POST['filter_address'];
    }
    if($_POST['filter_sort'] == 'all'){
        $filter_sort = null;
    } else{
        $filter_sort = $_POST['filter_sort'];
    }

    $ReviewsMethod = new ReviewsMethod($page, $filter_company, $filter_features, $filter_address, $filter_sort);

    $ReviewsMethod->get_posts();

    die();
}
add_action('wp_ajax_reviewsUpdate', 'reviews_update');
add_action('wp_ajax_nopriv_reviewsUpdate', 'reviews_update');

function add_cond_to_where( $where ) {

        //Replace showings_$ with repeater_slug_$
        $where = str_replace("meta_key = 'review_$", "meta_key LIKE 'review_%", $where);

        return $where;
    }

add_filter('posts_where', 'add_cond_to_where');

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
        get_template_part( 'templates/review', 'filters');
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
                get_template_part( 'templates/review', 'content');
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
        get_template_part( 'templates/review', 'pagination');
    }

}

function stars_width($stars){
    $left_position_star_1 = 3;
    $left_position_star_2 = 24;
    $left_position_star_3 = 45;
    $left_position_star_4 = 65;
    $left_position_star_5 = 86;

    if(intval($stars) >= 5){
        return 100;
    }
    
    $fraction = explode('.', $stars);

    if(!isset($fraction[1]) || $fraction[1] == 0){
        $integer = 'left_position_star_'.(1 + intval($stars));
        return $$integer;
    }

    $fraction = $fraction[1]*1.3;
    $integer = 'left_position_star_'.(1 + intval($stars));
    return $$integer + $fraction;
}


add_filter( 'manage_media_columns', 'sk_media_columns_filesize' );
/**
 * Filter the Media list table columns to add a File Size column.
 *
 * @param array $posts_columns Existing array of columns displayed in the Media list table.
 * @return array Amended array of columns to be displayed in the Media list table.
 */
function sk_media_columns_filesize( $posts_columns ) {
	$posts_columns['filesize'] = __( 'File Size', 'my-theme-text-domain' );

	return $posts_columns;
}

add_action( 'manage_media_custom_column', 'sk_media_custom_column_filesize', 10, 2 );
/**
 * Display File Size custom column in the Media list table.
 *
 * @param string $column_name Name of the custom column.
 * @param int    $post_id Current Attachment ID.
 */
function sk_media_custom_column_filesize( $column_name, $post_id ) {
	if ( 'filesize' !== $column_name ) {
		return;
	}

	$bytes = filesize( get_attached_file( $post_id ) );

	echo size_format( $bytes, 2 );
}

add_action( 'admin_print_styles-upload.php', 'sk_filesize_column_filesize' );
/**
 * Adjust File Size column on Media Library page in WP admin
 */
function sk_filesize_column_filesize() {
	echo
	'<style>
		.fixed .column-filesize {
			width: 10%;
		}
	</style>';
}

/* AMP for Engineering CPT */



add_action('init', 'my_custom_init');
function my_custom_init() {
   //add_post_type_support( 'engineerings', AMP_QUERY_VAR );
}

/* Preload CSS */


function add_rel_preload($html, $handle, $href, $media) {
    
    if (is_admin())
        return $html;

     $html = '<link rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'" id="'. $handle . '" href="' . $href . '" type="text/css" media="all" />\n';
    return $html;
}
//add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );
//14/10/2019: Commented by Nico (Hakuna) as the preload was causing conflicts with Firefox and IE

//Page Slug Body Class
//22/10/2019: Ale (Hakuna) Added page slug as body class  
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;

        if ( function_exists('get_field') ) {
            $field_class = get_field('global_css_class_name');
            if(!empty($field_class) && strlen($field_class)) {
                $classes[] = $field_class;
            }            
        }
    }
    return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

// only allow "post" posttype in search that doesn't have post_type querystring
add_action('pre_get_posts', 'search_fix_posttype');
function search_fix_posttype($query){
    if( !is_admin() && $query->is_search() && !isset($_GET['post_type']) ) $query->set('post_type', 'post');
    return $query;
}

add_shortcode('state', 'get_state');
function get_state() {
   return "'State=".get_query_var('State')."'";
}

add_shortcode('msa', 'get_msa');
function get_msa() {
   return "'Msa=".get_query_var('Msa')."'";
}

add_shortcode('state_name', 'get_state_name');
function get_state_name($shortState) {
    
    $state_list = array('AL'=>"Alabama",  
    'AK'=>"Alaska",  
    'AZ'=>"Arizona",  
    'AR'=>"Arkansas",  
    'CA'=>"California",  
    'CO'=>"Colorado",  
    'CT'=>"Connecticut",  
    'DE'=>"Delaware",  
    'DC'=>"District Of Columbia",  
    'FL'=>"Florida",  
    'GA'=>"Georgia",  
    'HI'=>"Hawaii",  
    'ID'=>"Idaho",  
    'IL'=>"Illinois",  
    'IN'=>"Indiana",  
    'IA'=>"Iowa",  
    'KS'=>"Kansas",  
    'KY'=>"Kentucky",  
    'LA'=>"Louisiana",  
    'ME'=>"Maine",  
    'MD'=>"Maryland",  
    'MA'=>"Massachusetts",  
    'MI'=>"Michigan",  
    'MN'=>"Minnesota",  
    'MS'=>"Mississippi",  
    'MO'=>"Missouri",  
    'MT'=>"Montana",
    'NE'=>"Nebraska",
    'NV'=>"Nevada",
    'NH'=>"New Hampshire",
    'NJ'=>"New Jersey",
    'NM'=>"New Mexico",
    'NY'=>"New York",
    'NC'=>"North Carolina",
    'ND'=>"North Dakota",
    'OH'=>"Ohio",  
    'OK'=>"Oklahoma",  
    'OR'=>"Oregon",  
    'PA'=>"Pennsylvania",
    'PR'=>"Puerto Rico",
    'RI'=>"Rhode Island",  
    'SC'=>"South Carolina",  
    'SD'=>"South Dakota",
    'TN'=>"Tennessee",  
    'TX'=>"Texas",  
    'UT'=>"Utah",  
    'VT'=>"Vermont",  
    'VA'=>"Virginia",  
    'WA'=>"Washington",  
    'WV'=>"West Virginia",  
    'WI'=>"Wisconsin",  
    'WY'=>"Wyoming");

    if($shortState=="")
        $shortState = get_query_var('State');
    return str_replace('%20', ' ', $state_list[$shortState]);

}

add_shortcode('msa_name', 'get_msa_name');
function get_msa_name() {
   return str_replace('%20', ' ', get_query_var('Msa'));
}

/*=============================================
                BREADCRUMBS
=============================================*/
//  to include in functions.php
function the_breadcrumb_for_covid19_data($state_list)
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '<span class="delimiter">&gt</span>'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs">' . ' '; //echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        
        if (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                if(is_page('COVID-19 Impact by City')){
                    echo ' ' . $delimiter . ' ' . $before . str_replace('%20', ' ', get_query_var('Msa')) . $after;
                }
                elseif(is_page('COVID-19 Impact by State')){
                    $state = get_query_var('State');
                    echo ' ' . $delimiter . ' ' . $before . str_replace('%20', ' ',  $state_list[$state]) . $after;
                }
                else{
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            }
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} // end the_breadcrumb()


add_action('init', 'add_my_options_pages');
function add_my_options_pages() {
    acf_add_options_page(array(
        'page_title' 	=> 'HR Resources Pages Custom Fields',
        'menu_title' 	=> 'HR Pages Custom Fields',
        'menu_slug' 	=> 'hr_custom-fields',
        'capability' 	=> 'edit_posts', 
        'parent_slug'	=> 'edit.php?post_type=hr-resources',
        'position'	=> false,
        'icon_url' 	=> 'dashicons-images-alt2',
        'redirect'	=> false,
    ));
}

function add_city_rewrite_rule() {
    $page = get_page_by_path( 'data/city' );
    add_rewrite_rule(
        '^data/city/([^/]*)/?',
        'index.php?page_id='.$page->ID.'&Msa=$matches[1]',
        'top'
    );
}

function add_state_rewrite_rule() {
    $page = get_page_by_path( 'data/state' );
    add_rewrite_rule(
        '^data/state/([^/]*)/?',
        'index.php?page_id='.$page->ID.'&State=$matches[1]',
        'top'
    );
}

function register_custom_query_vars( $vars ) {
    array_push( $vars, 'Msa');
    array_push( $vars, 'State');
    return $vars;
}

add_action('init', 'add_city_rewrite_rule');
add_action('init', 'add_state_rewrite_rule');
add_filter( 'query_vars', 'register_custom_query_vars', 1 );


add_filter('wpseo_title', 'filter_wpseo_title');
function filter_wpseo_title($title) {
  $title = do_shortcode($title);  
  return $title;
}


function add_btb_details_rewrite_rule() {
    $page = get_page_by_path( 'reopen-business-coronavirus/details' );
    add_rewrite_rule(
        '^reopen-business-coronavirus/details/([^/]*)/?',
        'index.php?page_id='.$page->ID.'&location=$matches[1]',
        'top'
    );
}

function register_custom_location_query_vars( $vars ) {
    array_push( $vars, 'location');
    return $vars;
}


add_action('init', 'add_btb_details_rewrite_rule');
add_filter( 'query_vars', 'register_custom_location_query_vars', 1 );

add_shortcode('location_name', 'get_location_name');

function get_location_name( $atts = array( 'skip_convert_state_code' => false ) ) {
    $location = get_query_var('location');

    if($location == '')
        $location = 'USA';
    elseif(strlen($location)==2 && !$atts['skip_convert_state_code'])
        $location = get_state_name($location);

    return str_replace('%20', ' ', $location);
}

add_shortcode('location_param', 'get_location_param');

function get_location_param() {

    $location = get_query_var('location');

    if(strlen($location)==0)
        return null;
    
    if(strlen($location)==2)
        return "'State=".$location."'";
    else
        return "'Msa=".$location."'";
}

function get_btbpage_type () {
    $location = get_query_var('location');

    if(strlen($location)==0)
        return 'USA';
    elseif(strlen($location)==2)
        return 'State';
    else
        return 'City';
}

function register_menu_blog_cat() {
    register_nav_menu('blog-cat', __('Blog Cat Navbar'));
}
add_action('init', 'register_menu_blog_cat');


include_once 'functions-blog.php';


function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        echo "0 View";
    }
    echo $count.' Views';
}

//Modern Jquery
add_action('wp_enqueue_scripts', 'nwd_modern_jquery');
function nwd_modern_jquery() {
    global $wp_scripts;
    if(is_admin()) return;
    $wp_scripts->registered['jquery-core']->src = get_template_directory_uri() .'/js/jquery-3.5.1.min.js';
    $wp_scripts->registered['jquery']->deps = ['jquery-core'];
}

// add blog admin pages wp-137
add_action('init', 'add_blog_option_pages');
function add_blog_option_pages() {
    acf_add_options_page(array(
        'page_title' 	=> 'Blog pages with custom fields',
        'menu_title' 	=> 'Blog pages option',
        'menu_slug' 	=> 'blog-custom-fields',
        'capability' 	=> 'edit_posts', 
        'parent_slug'	=> 'edit.php',
        'position'	=> false,
        'icon_url' 	=> 'dashicons-images-alt2',
        'redirect'	=> false,
    ));
}

function get_state_array() {

    $state_list = array('AL'=>"Alabama",  
    'AK'=>"Alaska",  
    'AZ'=>"Arizona",  
    'AR'=>"Arkansas",  
    'CA'=>"California",  
    'CO'=>"Colorado",  
    'CT'=>"Connecticut",  
    'DE'=>"Delaware",  
    'DC'=>"District Of Columbia",  
    'FL'=>"Florida",  
    'GA'=>"Georgia",  
    'HI'=>"Hawaii",  
    'ID'=>"Idaho",  
    'IL'=>"Illinois",  
    'IN'=>"Indiana",  
    'IA'=>"Iowa",  
    'KS'=>"Kansas",  
    'KY'=>"Kentucky",  
    'LA'=>"Louisiana",  
    'ME'=>"Maine",  
    'MD'=>"Maryland",  
    'MA'=>"Massachusetts",  
    'MI'=>"Michigan",  
    'MN'=>"Minnesota",  
    'MS'=>"Mississippi",  
    'MO'=>"Missouri",  
    'MT'=>"Montana",
    'NE'=>"Nebraska",
    'NV'=>"Nevada",
    'NH'=>"New Hampshire",
    'NJ'=>"New Jersey",
    'NM'=>"New Mexico",
    'NY'=>"New York",
    'NC'=>"North Carolina",
    'ND'=>"North Dakota",
    'OH'=>"Ohio",  
    'OK'=>"Oklahoma",  
    'OR'=>"Oregon",  
    'PA'=>"Pennsylvania",
    'PR'=>"Puerto Rico",
    'RI'=>"Rhode Island",  
    'SC'=>"South Carolina",  
    'SD'=>"South Dakota",
    'TN'=>"Tennessee",  
    'TX'=>"Texas",  
    'UT'=>"Utah",  
    'VT'=>"Vermont",  
    'VA'=>"Virginia",  
    'WA'=>"Washington",  
    'WV'=>"West Virginia",  
    'WI'=>"Wisconsin",  
    'WY'=>"Wyoming");

    return $state_list;
}


function is_blog () {
    return (( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() ) && ('post' == get_post_type() || 'engineering-blog' == get_post_type() )) || is_search();
}


add_filter( 'wpseo_breadcrumb_links', 'shorten_last_breadcrumb_title' );
function shorten_last_breadcrumb_title( $links ) {
	if( sizeof($links) > 2 ){
        $last = array_pop($links);
        
        $limit = 20;
        if (strlen($last['text']) > ($limit)) {
            $last['text'] = mb_substr($last['text'], 0, $limit, 'UTF-8') . '&hellip;';
        }

        array_push($links, $last);
	}
	return $links;
}

// wp-159
function register_menu_customers_table() {
    register_nav_menu('customers_table', __('Customers table Navigation'));
}
add_action('init', 'register_menu_customers_table');


function shortcode_ajax() {
  if ( !empty($_REQUEST['shortcode']) ) {
    // Try and sanitize your shortcode to prevent possible exploits. Users typically can't call shortcodes directly.
    $shortcode_name = esc_attr($_REQUEST['shortcode']);

    // Wrap the shortcode in tags. You might also want to add arguments here.
    $full_shortcode = sprintf('[%s]', $shortcode_name);

    // Perform the shortcode
    echo do_shortcode( $full_shortcode );

    // Stop the script before WordPress tries to display a template file.
    exit;
  }
}
add_action('init', 'shortcode_ajax');

function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
     
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

/** add product upadate option page **/ 
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Product update post options',
        'menu_title' 	=> 'Product update post options',
        'menu_slug' 	=> 'product-update-options',
        'capability' 	=> 'edit_posts', 
        'parent_slug'	=> 'edit.php?post_type=product-update',
        'position'	=> false,
        'redirect'	=> false,
    ));
}

function is_product_updates () {
    return (( is_archive() || is_author() || is_category() || is_single() || is_tag() ) && ('product-update' == get_post_type()));
}

function modify_read_more_link() {
    return '<a class="text-link-arrow" href="' . get_permalink() . '">Read more</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function wp_change_search_url() {
    if ( !empty( $_GET['s'] ) ) {

        if( !empty( $_GET['post_type']) )
            wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '?post_type='.get_query_var( 'post_type' ) );
        else
            wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ));
        exit();
    }  
}

add_action( 'template_redirect', 'wp_change_search_url' );

/** add engineering option page  **/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Engineering blog options',
        'menu_title' 	=> 'Engineering blog options',
        'menu_slug' 	=> 'engineering-blog-options',
        'capability' 	=> 'edit_posts', 
        'parent_slug'	=> 'edit.php?post_type=engineering-blog',
        'position'	=> false,
        'redirect'	=> false,
    ));
}


function search_template_chooser($template) {
  $post_type = get_query_var('post_type');
  if( is_search() && $post_type == 'engineering-blog' )   
  {
    return locate_template('search-engineering.php');  //  redirect to archive-search.php
  }   
  return $template;
}
add_filter('template_include', 'search_template_chooser');    
