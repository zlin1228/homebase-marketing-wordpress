<?php
/**
 * Homebase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Homebase
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * head cleanup
**/
require get_template_directory() . '/lib/clean.php';

/**
 * Enqueue scripts and styles.
**/
require get_template_directory() . '/lib/enqueue.php';

/**
 * Implement Nav menu.
**/
require get_template_directory() . '/lib/foundation.php'; 
/**
 * Implement Nav menu.
 */
require get_template_directory() . '/lib/nav.php';

/**
 * Import the ACF.
 */
require get_template_directory() . '/inc/custom-fields.php';




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


include_once get_template_directory() . '/inc/post-method.php';
include_once get_template_directory() . '/inc/blog-shortcodes.php';


//if( is_page_template( 'page-reviews.php' ) ) {
	include_once get_template_directory() . '/inc/Reviews.php';
	include_once get_template_directory() . '/inc/ReviewsMethod.php';
//}


if ( ! function_exists( 'homebase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function homebase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Homebase, use a find and replace
		 * to change 'homebase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'homebase', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		//add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		//add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('fd-lrg', 1024, 99999);
		add_image_size('fd-med', 768, 99999);
		add_image_size('fd-sm', 320, 9999);

		add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary'          	=> __('Primary Navigation', 'homebase'),
			'footer-product'   	=> __('Footer Product Navigation', 'homebase'),
			'footer-resources' 	=> __('Footer Resources Navigation', 'homebase'),
			'footer-solutions' 	=> __('Footer Solutions Navigation', 'homebase'),
			'footer-homebase'  	=> __('Footer Homebase Navigation', 'homebase'),
			'footer-copyright' 	=> __('Footer Copyright Navigation', 'homebase'),
			'blog-nav'			=> __('Blog Navigation', 'homebase'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'homebase_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Gutenberg | Add theme support
		add_theme_support( 'block-templates' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'block-template-parts' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'homebase_setup' );

/**
 * Gutenberg | Register block scripts
 */
function homebase_register_block_script() {
	wp_register_script( 'block-faq', get_template_directory_uri() . '/blocks/faq/faq.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-sub-nav', get_template_directory_uri() . '/blocks/sub-nav/sub-nav.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-paycheck-calculator', get_template_directory_uri() . '/blocks/paycheck-calculator/paycheck-calculator.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-hero-calculator', get_template_directory_uri() . '/blocks/hero-calculator/hero-calculator.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-cta-calculator', get_template_directory_uri() . '/blocks/cta-calculator/cta-calculator.js', [ 'jquery', 'acf' ] );
	//wp_register_script( 'block-hero', get_template_directory_uri() . '/blocks/hero/hero.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-text-with-image', get_template_directory_uri() . '/blocks/text-with-image/text-with-image.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-hero-paycheck-lp', get_template_directory_uri() . '/blocks/hero-paycheck-lp/hero-paycheck-lp.js', [ 'jquery', 'acf' ] );
}

add_action( 'init', 'homebase_register_block_script' );
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Gutenberg | Register ACF blocks
 * */

function homebase_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/how-to-use' );
    register_block_type( __DIR__ . '/blocks/cta-calculator' );
    register_block_type( __DIR__ . '/blocks/faq' );
    register_block_type( __DIR__ . '/blocks/paycheck-calculator' );
    register_block_type( __DIR__ . '/blocks/hero-calculator' );
    register_block_type( __DIR__ . '/blocks/sub-nav' );
    //register_block_type( __DIR__ . '/blocks/hero' );
    register_block_type( __DIR__ . '/blocks/text-with-gif' );
    register_block_type( __DIR__ . '/blocks/image-boxes' );
    register_block_type( __DIR__ . '/blocks/text-with-image' );
    register_block_type( __DIR__ . '/blocks/hero-paycheck-lp' );
}
add_action( 'init', 'homebase_register_acf_blocks' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function homebase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'homebase_content_width', 640 );
}
add_action( 'after_setup_theme', 'homebase_content_width', 0 );

/**
 * Register custom menu area.
 */

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

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function homebase_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'homebase' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'homebase' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'homebase_widgets_init' );


// options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// blog options page
add_action('init', 'add_blog_option_pages');
function add_blog_option_pages() {
	if( function_exists('acf_add_options_page') ) {
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
}

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

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 20 );

function new_excerpt_more($more) { 
	return '...'; 
} add_filter('excerpt_more', 'new_excerpt_more'); 


function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	 
	if ($image_set !== 'none') {
			update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


function get_state_array() {

	$state_list = array('AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois",'IN'=>"Indiana",'IA'=>"Iowa",'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland",'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma",'OR'=>"Oregon",'PA'=>"Pennsylvania",'PR'=>"Puerto Rico",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");

	return $state_list;
}

function is_blog () {
	return (( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() ) && ('post' == get_post_type() || 'engineering-blog' == get_post_type() )) || is_search();
}

// only allow "post" posttype in search that doesn't have post_type querystring
add_action('pre_get_posts', 'search_fix_posttype');
function search_fix_posttype($query){
    if( !is_admin() && $query->is_search() && !isset($_GET['post_type']) ) $query->set('post_type', 'post');
    return $query;
}

if( is_plugin_active('wordpress-seo/wp-seo.php') ){
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

	// Set og:title to be same as seo title
	add_filter('wpseo_opengraph_title', 'set_same_title_as_seo');
	function set_same_title_as_seo($title){
		$ytitl = YoastSEO()->meta->for_post( get_the_ID() )->title;
		
		if($ytitl <> '') return $ytitl;
		else $title;
	}
}

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


/* for Review page */

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


function reviews_update() {
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
    
    $state_list = get_state_array();

    if($shortState=="")
        $shortState = get_query_var('State');
    return str_replace('%20', ' ', $state_list[$shortState]);

}

add_shortcode('msa_name', 'get_msa_name');
function get_msa_name() {
   return str_replace('%20', ' ', get_query_var('Msa'));
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
                if(is_page('COVID-19 Impact by City')) {
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

// add_filter( 'wp_get_attachment_image_src', 'fix_wp_get_attachment_image_svg', 10, 4 );  /* the hook */

 function fix_wp_get_attachment_image_svg($image, $attachment_id, $size, $icon) {
    if (is_array($image) && preg_match('/\.svg$/i', $image[0]) && $image[1] <= 1) {
        if(is_array($size)) {
            $image[1] = $size[0];
            $image[2] = $size[1];
        } elseif(($xml = simplexml_load_file($image[0])) !== false) {
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $image[1] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[2] : null);
            $image[2] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[3] : null);
        } else {
            $image[1] = $image[2] = null;
        }
    }
    return $image;
} 

add_action('wp_loaded', 'post_plugin_load');
function post_plugin_load(){

	// redirect if mobile is used. Sample URL https://joinhomebase.com/homebase-pricing/?redIfMobile=https://app.joinhomebase.com/tiers
	if( isset( $_GET[ 'redIfMobile' ] ) && wp_is_mobile() ){
		wp_redirect( urldecode( $_GET[ 'redIfMobile' ] ) );
		exit();
	}
	// redirect if mobile is not used. Sample URL https://hb2020.wpengine.com/homebase-pricing/?redIfNotMobile=https://app.joinhomebase.com/tiers
	if( isset( $_GET[ 'redIfNotMobile' ] ) && !wp_is_mobile() ){
		wp_redirect( urldecode( $_GET[ 'redIfNotMobile' ] ) );
		exit();
	}

}

/**
 * Change published date to modified date in Yoast meta
 */

use Yoast\WP\SEO\Presenters\Abstract_Indexable_Presenter;

function remove_wp_seo_presenters( $filter ) {

	if (is_singular( 'post' )) {
		if (($key = array_search('Yoast\WP\SEO\Presenters\Open_Graph\Article_Published_Time_Presenter', $filter)) !== false) {
			unset($filter[$key]);
		}

	}
	return $filter;

	
}
add_filter( 'wpseo_frontend_presenter_classes', 'remove_wp_seo_presenters' );

class Custom_Presenter extends Abstract_Indexable_Presenter {

	public $property;
	public $content;

	function __construct($property, $content) {
		$this->property = $property;
		$this->content = $content;
	}

	public function present() {
		return '<meta property="' . esc_attr( $this->property ) . '" content="' . esc_attr( $this->content ) . '" class="yoast-seo-meta-tag" />';
	}

	public function get() {
		return null;
	}
}

function add_custom_presenter( $presenters ) {

	global $post;

	if (is_singular( 'post' )) {

		$hb_display_publish_date = get_field("hb_display_publish_date", $post->ID);

		if($hb_display_publish_date == true){

			$published_time = new Custom_Presenter("article:published_time", $post->post_date_gmt );
			$presenters[] = $published_time;

		} else {

			$published_time = new Custom_Presenter("article:published_time", $post->post_modified_gmt );
			$presenters[] = $published_time;

		}
	}

	return $presenters;
	
}
add_filter( 'wpseo_frontend_presenters', 'add_custom_presenter' );