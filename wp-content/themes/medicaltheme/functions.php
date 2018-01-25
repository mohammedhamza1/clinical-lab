<?php
/**
 * medicalTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medicalTheme
 */

if ( ! function_exists( 'medicaltheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function medicaltheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on medicalTheme, use a find and replace
		 * to change 'medicaltheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'medicaltheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        function medicaltheme_menu(){ 
            register_nav_menus(array( 
                'bootstrap-menu' => 'Navigation Bar' ));
        }
        add_action('init','medicaltheme_menu');
        /*
        **  function to Add bootstrap menu
        **  wp_nav_menu() 
        */
        function medicaltheme_bootstrap_nav_menu(){
            wp_nav_menu(array(
            'theme_location'     => 'bootstrap-menu',
            'menu_class'         => 'nav navbar-nav navbar-right',
            'container'          => false
            ));
        }


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'medicaltheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'medicaltheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medicaltheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medicaltheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'medicaltheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medicaltheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medicaltheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medicaltheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'medicaltheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function medicaltheme_styles() {
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('main-css',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('swipebox-css',get_template_directory_uri().'/css/swipebox.css');
    wp_enqueue_style('easygallery-css',get_template_directory_uri().'/css/jquery.easy-gallery.css');

}
function medicaltheme_scripts(){
    wp_enqueue_script('mainjq-js',get_template_directory_uri().'/js/jquery-2.1.4.min.js',array(),false,false);
    wp_enqueue_script('easygallery-js',get_template_directory_uri().'/js/jquery.easy-gallery.js',array(),false,true);
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap-3.1.1.min.js',array(),false,true);
    wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
    wp_enqueue_script('wow-js',get_template_directory_uri().'/js/wow.min.js',array(),false,false);
    wp_enqueue_script('move-top',get_template_directory_uri().'/js/move-top.js',array(),false,false);
    wp_enqueue_script('number-s',get_template_directory_uri().'/js/numscroller-1.0.js',array(),false,false);
    wp_enqueue_script('easing-js',get_template_directory_uri().'/js/easing.js',array(),false,false);
    
    wp_enqueue_script('responsiveslides-js',get_template_directory_uri().'/js/responsiveslides.min.js',array(),false,false);

    
   
}
add_action( 'wp_enqueue_scripts', 'medicaltheme_styles' );
add_action( 'wp_enqueue_scripts','medicaltheme_scripts' );

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
