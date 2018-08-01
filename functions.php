<?php
/**
 * Daniel Zawadzki info-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Daniel_Zawadzki_info-blog
 */

 require_once( dirname( __FILE__) . '/admin/admin-init.php' );

if ( ! function_exists( 'daniel_zawadzki_info_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function daniel_zawadzki_info_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Daniel Zawadzki info-blog, use a find and replace
		 * to change 'daniel-zawadzki-info-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'daniel-zawadzki-info-blog', get_template_directory() . '/languages' );

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
			'menu-1' => 'main-menu',
			'menu-2' => 'page-menu' )
		 );

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
		add_theme_support( 'custom-background', apply_filters( 'daniel_zawadzki_info_blog_custom_background_args', array(
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
add_action( 'after_setup_theme', 'daniel_zawadzki_info_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function daniel_zawadzki_info_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'daniel_zawadzki_info_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'daniel_zawadzki_info_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function daniel_zawadzki_info_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'daniel-zawadzki-info-blog' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'daniel_zawadzki_info_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function daniel_zawadzki_info_blog_scripts() {

	/* Fonts */
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Do+Hyeon|Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=latin-ext' );
  /* Icons */
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.9/css/all.css');
	wp_enqueue_style( 'ionicons', 'https://unpkg.com/ionicons@4.2.5/dist/css/ionicons.min.css');
 /* Site */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'section-header', get_stylesheet_directory_uri() . '/css/section-header.css' );
	wp_enqueue_style( 'header', get_stylesheet_directory_uri() . '/css/header.css' );
	wp_enqueue_style( 'section-about', get_stylesheet_directory_uri() . '/css/section-about.css' );
	wp_enqueue_style( 'feature-boxes', get_stylesheet_directory_uri() . '/css/feature-boxes.css' );
	wp_enqueue_style( 'offer', get_stylesheet_directory_uri() . '/css/offer.css' );
	wp_enqueue_style( 'portfolio', get_stylesheet_directory_uri() . '/css/portfolio.css' );
	wp_enqueue_style( 'blog', get_stylesheet_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( 'contact', get_stylesheet_directory_uri() . '/css/contact.css' );
	wp_enqueue_style( 'single-page', get_stylesheet_directory_uri() . '/css/single-page.css' );
	wp_enqueue_style( 'wpis', get_stylesheet_directory_uri() . '/css/wpis.css' );

	/* Scripts */ 

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'ionicons', 'https://unpkg.com/ionicons@4.2.5/dist/ionicons.js', false, null, true );
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/Vendor/jquery.smooth-scroll.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('smoothscroll'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'daniel_zawadzki_info_blog_scripts' );

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

