<?php
	/**
	 * Starkers functions and definitions
	 * Rewritten for Evo Exhibits
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package WordPress
 	 * @subpackage Starkers
 	 * @since Starkers 4.0
	 */

	/* ==================================================================
	
	Required external files
	
	=================================================================== */

	/* Starkers Utilities */
	require_once( 'includes/external/starkers-utilities.php' );
    
    /* Redux Framework */
    //require_once( 'install/options.php' );

    /* ==================================================================
    
    Theme specific settings
    Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
    
    =================================================================== */

    add_theme_support('post-thumbnails');
    add_action( 'after_setup_theme', 'register_my_menu' );
    function register_my_menu() {
        register_nav_menu( 'primary', 'Home Menu' );
        register_nav_menu( 'secondary', 'Other Menu' );
        // Site Map
        register_nav_menu( 'sitemap1', 'Site Map 1' );
        register_nav_menu( 'sitemap2', 'Site Map 2' );
        register_nav_menu( 'sitemap3', 'Site Map 3' );
        register_nav_menu( 'sitemap4', 'Site Map 4' );
        register_nav_menu( 'sitemap5', 'Site Map 5' );
        register_nav_menu( 'sitemap6', 'Site Map 6' );
    }

    /* ==================================================================
    
    Actions and Filters
    
    =================================================================== */

    add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer', 999999 );
    add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

    /* ==================================================================
    
    Scripts
    
    =================================================================== */

    require_once('includes/content/scripts.php');

    /* ==================================================================
    
    Comments
    
    =================================================================== */

    require_once('includes/content/comments.php');
    
    /* ==================================================================
    
    Extra Functions
    
    =================================================================== */
                        
    /* Media Shortcode Modify */
    require_once('includes/content/media-shortcode.php');
            
    /* Register Custom Navigation Walker */
    require_once('includes/nav/bootstrap-navwalker.php');

    /* Widget Areas */
    require_once('includes/nav/widget-areas.php');
    
    /* Other Theme Functions */
    require_once('includes/content/others.php');