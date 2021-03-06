<?php
/**
 * HWI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HWI
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hwi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on HWI, use a find and replace
		* to change 'hwi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hwi', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hwi' ),
		)
	);

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
			'hwi_custom_background_args',
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
}
add_action( 'after_setup_theme', 'hwi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hwi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hwi_content_width', 640 );
}
add_action( 'after_setup_theme', 'hwi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hwi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hwi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hwi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Languages', 'hwi' ),
			'id'            => 'languages',
			'description'   => esc_html__( 'Add widgets here.', 'hwi' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Discover', 'hwi' ),
			'id'            => 'discover',
			'description'   => esc_html__( 'Add widgets here.', 'hwi' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Form contacs', 'hwi' ),
			'id'            => 'form-contact',
			'description'   => esc_html__( 'Add widgets here.', 'hwi' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'hwi' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'hwi' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	require_once get_template_directory() . '/inc/widgets/class-hwi-posts-widget.php';
	register_widget( 'hwi_Posts_Widget' );
}
add_action( 'widgets_init', 'hwi_widgets_init' );
function hwi_enqueue_style( $name ) {
	wp_enqueue_style( "gtt-$name", get_template_directory_uri() . "/$name.css", [], filemtime( get_stylesheet_directory() . "/$name.css" ) );
}

/**
 * Enqueue scripts and styles.
 */
function hwi_scripts() {
	wp_enqueue_style( 'hwi-theme-slick', get_template_directory_uri() . '/css/slick.css' ); // @codingStandardsIgnoreLine
	if ( is_front_page() ) {
		hwi_enqueue_style( 'home' );
	}
	if ( is_page_template( 'template/about.php' ) ) {
		hwi_enqueue_style( 'about' );
		wp_enqueue_script( 'hwi-chart', 'https://cdn2.hubspot.net/hubfs/476360/Chart.js' );
		wp_enqueue_script( 'hwi-utils', 'https://cdn2.hubspot.net/hubfs/476360/utils.js' );
	}
	if ( is_page_template( 'template/partner.php' ) ) {
		hwi_enqueue_style( 'partner' );
	}
	if ( is_page_template( 'template/contact.php' ) ) {
		hwi_enqueue_style( 'contact' );
	}
	if ( is_page_template( 'template/news.php' ) ) {
		hwi_enqueue_style( 'news' );
		wp_enqueue_script( 'hwi-list', get_template_directory_uri() . '/js/list.min.js', array(), _S_VERSION, true );
	}
	if ( is_singular( 'projects' ) ) {
		hwi_enqueue_style( 'single-projects' );
		wp_enqueue_style( 'hwi-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' ); // @codingStandardsIgnoreLine
		wp_enqueue_script( 'hwi-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], '1.8', true );
		wp_enqueue_script( 'hwi-list', get_template_directory_uri() . '/js/list.min.js', array(), _S_VERSION, true );
	}
	if ( is_singular( 'post' ) || is_archive() ) {
		hwi_enqueue_style( 'single-post' );
	}
	wp_enqueue_style( 'hwi-wow-css', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'hwi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hwi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hwi-slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hwi-wow', get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hwi-script', get_template_directory_uri() . '/js/script.js', [ 'jquery' ], '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hwi_scripts' );

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
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-hwi-icons.php';

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
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_widgets_blog_editor', '__return_false' );
add_action( 'wp_enqueue_scripts', function() {
	// Remove CSS on the front end.
	wp_dequeue_style( 'wp-block-library' );

	// Remove inline global CSS on the front end.
	wp_dequeue_style( 'global-styles' );
}, 20 );

if ( ! function_exists( 'rwmb_meta' ) ) {
	/**
	 * Fallback function metabox.
	 *
	 * @return mixed
	 */
	function rwmb_meta( $key, $args = [], $post_id = null ) {
		return null;
	}
}
