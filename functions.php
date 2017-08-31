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
        // Set up our base stylesheet.
        wp_enqueue_style('grid_1008-style', THEME_DIR . '/assets/css/grid_1008.css', array(), '1.0.1');
        wp_enqueue_style('grid_1280-style', THEME_DIR . '/assets/css/grid_1280.css', array(), '1.0.1');
        wp_enqueue_style('grid_768', THEME_DIR . '/assets/css/grid_768.css', array(), '1.0.1');
        wp_enqueue_style('grid_768', THEME_DIR . '/assets/css/grid_768.css', array(), '1.0.1');
        wp_enqueue_style('grid_res', THEME_DIR . '/assets/css/grid_responsive.css', array(), '1.0.1');

        wp_enqueue_style('st1', THEME_DIR . '/assets/css/easylightbox.css', array(), '1.0.1');
        wp_enqueue_style('st2', THEME_DIR . '/assets/css/fancybox.css', array(), '1.0.1');
        wp_enqueue_style('st3', THEME_DIR . '/assets/css/print.css', array(), '1.0.1');
        wp_enqueue_style('st3', THEME_DIR . '/assets/css/print.css', array(), '1.0.1');
        wp_enqueue_style('st3', THEME_DIR . '/assets/css/print.css', array(), '1.0.1');

        wp_enqueue_style('skin', THEME_DIR . '/assets/css/skin.css', array(), '1.0.1');
        wp_enqueue_style('slik', THEME_DIR . '/assets/css/slick/slick.css', array(), '1.0.1');
        wp_enqueue_style('slik_theme', THEME_DIR . '/assets/css/slick/slick-theme.css', array(), '1.0.1');
        
        wp_enqueue_style('old-style', THEME_DIR . '/assets/css/oldstyle.css', array(), '1.0.1');
        wp_enqueue_style('deuren-style', THEME_DIR . '/assets/css/app.css', array(), '1.0.1');

        // Include the fontawesome library.
        
        // Add latest jQuery.
        /*wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', array(), '3.1.1', true);*/
        // Set up our required theme scripts.

        wp_enqueue_script('js0', THEME_DIR . '/assets/js/jquery-1.8.2.min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js1', THEME_DIR . '/assets/js/jquery.fancybox.pack.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js2', THEME_DIR . '/assets/js/jquery.flexslider-min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js3', THEME_DIR . '/assets/js/jquery.iosslider.min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js4', THEME_DIR . '/assets/js/jquery.isotope.min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js5', THEME_DIR . '/assets/js/jquery.selectbox-0.2.min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js6', THEME_DIR . '/assets/js/jquery.tweet.js', array('jquery'), '1.0.1', false);
       // wp_enqueue_script('js7', THEME_DIR . '/assets/js/jquery.ui.totop.js', array('jquery'), '1.0.1', false);
        //wp_enqueue_script('js8', THEME_DIR . '/assets/js/lightbox-1.js', array('jquery'), '1.0.1', false);
       // wp_enqueue_script('js9', THEME_DIR . '/assets/js/lightbox.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js10', THEME_DIR . '/assets/js/modernizr.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js11', THEME_DIR . '/assets/js/responsive-tables.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js12', THEME_DIR . '/assets/js/selectivizr-min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js13', THEME_DIR . '/assets/js/waypoints.min.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('js14', THEME_DIR . '/assets/js/jquery.viewportchecker.js', array('jquery'), '1.0.1', false);



        //wp_enqueue_script('deuren-time', THEME_DIR . '/assets/js/jquery.fancybox-1.3.4.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('deuren-viewport', THEME_DIR . '/assets/js/script_ie.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('deuren-masonry', THEME_DIR . '/assets/js/script.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('deuren-slick', THEME_DIR . '/assets/js/slick.js', array('jquery'), '1.0.1', false);
        wp_enqueue_script('deuren-app', THEME_DIR . '/assets/js/app.js', array('jquery'), '1.0.1', false);

        // wp_enqueue_script('deuren-app', THEME_DIR . '/dist/js/minify.min.js', array('jquery'), '1.0.1', false);
       
        
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
    
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input class="fa fa-facebook" type="submit" id="searchsubmit" value="&#xf002;" />
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



 
