<?php
/**
 * Deuren
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Documentation standards:
 * https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/
 *
 * @package        WordPress
 * @subpackage    deuren
 * @since        1.0.2
 *
 * @author        The Bigger Boat
 */
/**
 * Increase memory and processing time.
 *
 * @since  1.0.1
 */
ini_set('upload_max_size', '64M');
ini_set('post_max_size', '64M');
ini_set('max_execution_time', '300');

/**
 * Define theme path for quicker referencing.
 *
 * @since  1.0.1
 */
define('THEME_DIR', get_template_directory_uri());
/**
 * Load our ACF configuration information.
 *
 * This is required to set up ACF Local JSON.
 *
 * @since 1.0.1
 */
require_once get_template_directory() . '/inc/acf/config.php';

/**
 * Load our helpers file.
 *
 * This contains a number of useful functions used throughout the theme.
 *
 * @since 1.0.2
 */
require_once get_template_directory() . '/inc/helpers/deuren.php';
require_once get_template_directory() . '/inc/helpers/woocommerce-function.php';
/**
 * Core theme class.
 *
 * Sets up WordPress hooks for actions and filters that are used in the theme.
 *
 * @since 1.0.1
 */
class deuren

{

	/**
	 * Set up our action and filter hooks.
	 */
	public function __construct()
	{
	
		/**
		 * Remove Generator Meta Tag.
		 *
		 * @since 1.0.1
		 */
		remove_action('wp_head', 'wp_generator');
		/**
		 * Set up stylesheets and scripts.
		 *
		 * @since 1.0.1
		 */
		add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
		/**
		 * Set up image sizes and menu assignment.
		 *
		 * @since 1.0.1
		 */
		add_action('init', array($this, 'deuren_init'));
		/**
		 * Additional active menu classes.
		 *
		 * @since 1.0.1
		 */
	  //  add_filter('nav_menu_css_class', array($this, 'add_active_class'), 10, 2);
		/*
		 * Google Api
		 */
		//add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
		/*
	 * Excerpt
	 */
	}
   /* public function my_acf_google_map_api($api)
	{
		$api['key'] = 'AIzaSyCwXwrp-FcHELStKoqx8ZyzQkEW5zVSPEc';
		return $api;
	}*/
	/**
	 * Enqueue scripts and styles for the front end.
	 *
	 * @since 1.0.1
	 * @access public
	 */
	public function enqueue_styles()
	{

		wp_enqueue_style('table', THEME_DIR . '/assets/css/grid_responsive.css', array(), '1.0.1');
		wp_enqueue_style('st2', THEME_DIR . '/assets/css/fancybox.css', array(), '1.0.1');
	 
		wp_enqueue_style('st4', THEME_DIR . '/assets/css/jquery.mmenu.css', array(), '1.0.1');
		wp_enqueue_style('st5', THEME_DIR . '/assets/css/jquery.mmenu.all.css', array(), '1.0.1');

		//wp_enqueue_style('skin', THEME_DIR . '/assets/css/skin.css', array(), '1.0.1');
		wp_enqueue_style('slik', THEME_DIR . '/assets/css/slick/slick.css', array(), '1.0.1');
		wp_enqueue_style('slik_theme', THEME_DIR . '/assets/css/slick/slick-theme.css', array(), '1.0.1');
			
		wp_enqueue_style('old-style-2', THEME_DIR . '/assets/stylesheets/app.css', array(), '1.0.1');
	
		wp_enqueue_style('deuren-style', THEME_DIR . '/assets/stylesheets/newApp.css', array(), '1.0.1');

		// wp enqueue script

		wp_enqueue_script('js0', THEME_DIR . '/assets/js/jquery-1.8.2.min.js', array('jquery'), '1.0.1', false);
		
		wp_enqueue_script('js1', THEME_DIR . '/assets/js/jquery.fancybox.pack.js', array('jquery'), '1.0.1', false);
	    wp_enqueue_script('js15', THEME_DIR . '/assets/js/jquery.mmenu.js', array('jquery'), '1.0.1', false);
		wp_enqueue_script('js16', THEME_DIR . '/assets/js/jquery.mmenu.all.js', array('jquery'), '1.0.1', false);
		
		wp_enqueue_script('js4', THEME_DIR . '/assets/js/jquery.isotope.min.js', array('jquery'), '1.0.1', false);
		
		wp_enqueue_script('js10', THEME_DIR . '/assets/js/modernizr.js', array('jquery'), '1.0.1', false);
		
		wp_enqueue_script('js14', THEME_DIR . '/assets/js/jquery.viewportchecker.js', array('jquery'), '1.0.1', false);

		wp_enqueue_script('deuren-masonry', THEME_DIR . '/assets/js/script.js', array('jquery'), '1.0.1', false);
		wp_enqueue_script('deuren-slick', THEME_DIR . '/assets/js/slick.js', array('jquery'), '1.0.1', false);
	  
		wp_enqueue_script('deuren-foundation', THEME_DIR . '/assets/js/foundation.min.js', array('jquery'), '1.9.1', false);
		wp_enqueue_script('deuren-app', THEME_DIR . '/assets/js/app.js', array('jquery'), '1.0.1', false);
		
		$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
		//after wp_enqueue_script
		wp_localize_script( 'deuren-app', 'path', $translation_array );

	}
	/**
	 * Set up the theme information.
	 *
	 * This assigns image sizes, registers nav menus and enables HTML5 components.
	 *
	 * @since 1.0.1
	 * @access public
	 */
	// Register Custom Navigation Walker
	public function deuren_init()
	{
	   // This theme uses wp_nav_menu().
		register_nav_menus( array(
			// Main navigation
			'main_nav'     => __( 'Main Menu - Desktop', 'deuren' ),
			'primary' => __('Primary Menu', 'Deuren'),

			// Mobile navigation
			'mobile_nav'   => __( 'Main Menu - Mobile', 'deuren' ),

		) );
		// Register our image sizes.
		add_theme_support('post-thumbnails');
		// Additional image sizes.
		add_image_size('technical', 384, 344, array('center', 'center'));
		add_image_size('key-feature', 440, 440, array('center', 'center'));
		// Add RSS feed links to <head> for posts and comments.
		add_theme_support('automatic-feed-links');
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
	  
	/**
	 * Add additional classes to active menu items.
	 *
	 * @since 1.0.1
	 * @access public
	 */
   /* public function add_active_class($classes, $item)
	{
		if ($item->menu_item_parent == 0 &&
			in_array('current-menu-item', $classes) ||
			in_array('current-menu-ancestor', $classes) ||
			in_array('current-menu-parent', $classes) ||
			in_array('current_page_parent', $classes) ||
			in_array('current_page_ancestor', $classes)
		) {
			$classes[] = 'active';
		}
		return $classes;
	}*/
}
// Here we go! - Mario, 2017
new deuren;
require_once 'wp-bootstrap-navwalker.php';
function custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function is_post_type($type)
{
	global $wp_query;
	if ($type == get_post_type($wp_query->post->ID)) {
		return true;
	}
	return false;
}

function new_excerpt_more($more)
{
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function wpdocs_my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	
	<input placeholder="Search entire store here..." type="text" value="' . get_search_query() . '"  />
	<input class="fa "  type="submit" id="searchsubmit" value="&#xf002;" />
	</div>
	</form>';
 
	return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

function numbering_pagination() {
   global $wp_query;
 
$total_pages = $wp_query->max_num_pages;
 
if ($total_pages > 1){
 
  $current_page = max(1, get_query_var('paged'));
   
  echo paginate_links(array(
	  'base' => get_pagenum_link(1) . '%_%',
	  'format' => '/page/%#%',
	  'current' => $current_page,
	  'total' => $total_pages,
	));
}
	
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
require_once 'wp-bootstrap-navwalker.php';
function deuren_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deuren_widgets_init' );

function my_custom_sidebar() {
	register_sidebar(
		array (
			'name' => __( 'Custom', 'your-theme-domain' ),
			'id' => 'custom-side-bar',
			'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
			'before_widget' => '<aside class="grid_3 sidebar sidebar-right"><section class="block-layered-nav">',
			'after_widget' => "</section></aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3><div class="title-divider"><span>&nbsp;</span></div>',
		)
	);

}
add_action( 'widgets_init', 'my_custom_sidebar' );

function term_ancestors( $term_id, $taxonomy ) {
		$ancestors = get_ancestors( $term_id, $taxonomy );
		$ancestors = array_reverse( $ancestors );

		foreach ( $ancestors as $ancestor ) {
			$ancestor = get_term( $ancestor, $taxonomy );

			if ( ! is_wp_error( $ancestor ) && $ancestor ) {
				$this->add_crumb( $ancestor->name, get_term_link( $ancestor ) );
			}
		}
	}

//  custom widget
// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Terms Widget', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Show all terms', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	 
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	 
	// This is where you run the code and display the output
	echo __( 'Hello, World!', 'wpb_widget_domain' );
	echo $args['after_widget'];
	}
			 
	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	}
	else {
	$title = __( 'New title', 'wpb_widget_domain' );
	}
	// Widget admin form
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php 
	}
		 
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
} // Class wpb_widget ends here
// First we create a function
function list_terms_custom_taxonomy( $atts ) {
 
echo '<div class="block-content" style="">
									<dl class="open-default" id="layered_navigation_accordion">
									<dd>
						<ol class="categoryList">
						   '; 
$terms = get_terms(  'product_cat' );
                         
    foreach ( $terms as $term ) {
      // echo $term->name.' '.$term->term_id.' '.$term->parent.'<br>';
    }

/*foreach ($terms as $term) {
	echo $term->name.'<br>';
}*/

echo '</ol></dd></dl></div>';
}
 
// Add a shortcode that executes our function
add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );
 
//Allow Text widgets to execute shortcodes
 
add_filter('widget_text', 'do_shortcode');
