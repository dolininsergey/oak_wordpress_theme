<?php
/**
 * oak-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oak-theme
 */

if ( ! function_exists( 'oak_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function oak_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on oak-theme, use a find and replace
		 * to change 'oak-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'oak-theme', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'oak-theme' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'oak_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'oak_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oak_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oak_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'oak_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oak_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oak-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oak-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'oak_theme_widgets_init' );


function oak_scripts_enqueue() {
	// Google Fonts
	wp_enqueue_style( 'oak-font-ubuntu', 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700', array(), false, false );
	wp_enqueue_style( 'oak-font-lekton', 'http://fonts.googleapis.com/css?family=Lekton:400,700,400italic', array(), false, false );
	// Bootstrap
	wp_enqueue_style( 'oak-bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, false );
	// Fontawesome
	wp_enqueue_style( 'oak-fontawesome', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', array(), false, false );
	wp_enqueue_style( 'oak-fontawesome-font', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/fonts/FontAwesome.otf', array(), false, false );
	// Owl Carousel
	wp_enqueue_style( 'oak-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), false, false );
	wp_enqueue_style( 'oak-owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), false, false );
	// Slider
	wp_enqueue_style( 'oak-slider', get_template_directory_uri() . '/css/jquery.kenburnsy.css', array(), false, false );
	// Animate
	wp_enqueue_style( 'oak-animate', get_template_directory_uri() . '/css/animate.css', array(), false, false );
	// Web Icons Font
	wp_enqueue_style( 'oak-web-icon-font-1', get_template_directory_uri() . '/css/pe-icon-7-stroke.css', array(), false, false );
	wp_enqueue_style( 'oak-web-icon-font-2', get_template_directory_uri() . '/css/iconmoon.css', array(), false, false );
	wp_enqueue_style( 'oak-web-icon-font-3', get_template_directory_uri() . '/css/et-line.css', array(), false, false );
	wp_enqueue_style( 'oak-web-icon-font-4', get_template_directory_uri() . '/css/ionicons.css', array(), false, false );
	// Magnific PopUp
	wp_enqueue_style( 'oak-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, false );
	// Tabs
	wp_enqueue_style( 'oak-tabs', get_template_directory_uri() . '/css/tabs.css', array(), false, false );
	wp_enqueue_style( 'oak-tabs-styles', get_template_directory_uri() . '/css/tabstyles.css', array(), false, false );
	// Loader Style
	wp_enqueue_style( 'oak-loader', get_template_directory_uri() . '/css/loader-1.css', array(), false, false );
	// Custom Styles
	wp_enqueue_style( 'oak-main-custom', get_template_directory_uri() . '/css/main.css', array(), false, false );
	wp_enqueue_style( 'oak-responsive-custom', get_template_directory_uri() . '/css/responsive.css', array(), false, false );
	// Favicon
	//wp_enqueue_style( 'oak-favicon', get_template_directory_uri() . '/favicon.ico', array(), false, false );
	wp_enqueue_script( 'oak-modernizer-scripts', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), false, false );

	// Scripts
	wp_enqueue_script( 'oak-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js', array(), false, true );
	wp_enqueue_script( 'oak-pace-scripts', get_template_directory_uri() . '/js/vendor/pace.min.js', array(), false, true );
	wp_enqueue_script( 'oak-bootstrap-scripts', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), false, true );
	//wp_enqueue_script( 'oak-jquery', get_template_directory_uri() . '/js/vendor/jquery-3.2.1.min.js', array(), false, false );
	wp_enqueue_script( 'oak-classie-scripts', get_template_directory_uri() . '/js/vendor/classie.js', array(), false, true );
	wp_enqueue_script( 'oak-isotope-pkgd-scripts', get_template_directory_uri() . '/js/vendor/isotope.pkgd.min.js', array(), false, true );
	wp_enqueue_script( 'oak-velocity-scripts', get_template_directory_uri() . '/js/vendor/jquery.velocity.min.js', array(), false, true );
	wp_enqueue_script( 'oak-jquery-kenburnsy-scripts', get_template_directory_uri() . '/js/vendor/jquery.kenburnsy.min.js', array(), false, true );
	wp_enqueue_script( 'oak-textslide-scripts', get_template_directory_uri() . '/js/vendor/textslide.js', array(), false, true );
	wp_enqueue_script( 'oak-imagesloaded-pkgd-scripts', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array(), false, true );
	wp_enqueue_script( 'oak-tabs-scripts', get_template_directory_uri() . '/js/vendor/tabs.js', array(), false, true );
	wp_enqueue_script( 'oak-ajax', get_template_directory_uri() . '/js/ajax.js', array(), false, true );
	//wp_enqueue_script( 'oak-ajax-scripts', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array(), false, false );
	wp_enqueue_script( 'oak-ef-slider-scripts', get_template_directory_uri() . '/js/ef-slider.js', array(), false, true );
	wp_enqueue_script( 'oak-owl-carousel-scripts', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'oak-magnific-popup-scripts', get_template_directory_uri() . '/js/vendor/jquery.magnific-popup.min.js', array(), false, true );
	wp_enqueue_script( 'oak-social-buttons-scripts', get_template_directory_uri() . '/js/vendor/jquery.social-buttons.min.js', array(), false, true );
	wp_enqueue_script( 'oak-wow-scripts', get_template_directory_uri() . '/js/vendor/wow.min.js', array(), false, true );
	wp_enqueue_script( 'oak-main-scripts', get_template_directory_uri() . '/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'oak_scripts_enqueue' );

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

/**
 * TGM 
 */
require get_template_directory() . '/tgm/oak-tgm.php';