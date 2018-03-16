<?php
/**
 * crmbulb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crmbulb
 */

if ( ! function_exists( 'crmbulb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function crmbulb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on crmbulb, use a find and replace
		 * to change 'crmbulb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'crmbulb', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'crmbulb' ),
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
		add_theme_support( 'custom-background', apply_filters( 'crmbulb_custom_background_args', array(
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
add_action( 'after_setup_theme', 'crmbulb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crmbulb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crmbulb_content_width', 640 );
}
add_action( 'after_setup_theme', 'crmbulb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crmbulb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crmbulb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crmbulb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crmbulb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crmbulb_scripts() {
	$ver = time();
	$dir = get_template_directory_uri();
	// wp_enqueue_style( 'crmbulb-custom-style', $dir.'/css/custom-style.css', [], $ver);
	// wp_enqueue_style( 'crmbulb-ui-components', $dir . '/css/ui-components.css', [], $ver);
	// wp_enqueue_style( 'crmbulb-who-we-are-css', $dir . '/css/who-we-are.css', [], $ver);
	// wp_enqueue_style( 'crmbulb-products-css', $dir.'/css/products.css', [], $ver);
	wp_enqueue_style( 'crmbulb-font-awesome', $dir.'/css/font-awesome.css', [], $ver);

	// wp_enqueue_style( 'crmbulb-font-awesome', BULB_SHOP_MENU_URL . '/static/css/theme/css/font-awesome.css', [], $ver);
	wp_enqueue_style( 'crmbulb-style-grid', BULB_SHOP_MENU_URL . '/static/css/lib/bootstrap/css/bootstrap.min.css', [], $ver);
	wp_enqueue_style( 'crmbulb-style-combined', BULB_SHOP_MENU_URL . '/static/css/theme/combined.css', [], $ver);
	wp_enqueue_style( 'crmbulb-style-css', get_stylesheet_uri(), [], $ver);
	

	

	wp_enqueue_script( 'crmbulb-navigation', $dir . '/js/jquery-1.11.1.min.js', array(), '20151223215', true );
	wp_enqueue_script( 'crmbulb-main-js', $dir . '/js/main.js', array(), '2015121523', true );
	wp_enqueue_script( 'crmbulb-jquery-lib', $dir . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'crmbulb-skip-link-focus-fix', $dir . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crmbulb_scripts' );



// Add custom widgets
function add_custom_widgets() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'crmbulb-widgets' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'crmbulb-widgets' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'crmbulb-widgets' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'crmbulb-widgets' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'crmbulb-widgets' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'crmbulb-widgets' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'crmbulb-widgets' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'crmbulb-widgets' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}

add_action( 'widgets_init', 'add_custom_widgets' );
 
// Register sidebars by running crmbulb-widgets_widgets_init()



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


add_filter('nav_menu_css_class' , function($classes, $item) {
    if (in_array('current-menu-item', $classes) )
        $classes[] = 'active ';
    return $classes;
}, 10 , 2);

