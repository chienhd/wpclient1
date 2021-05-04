<?php
/**
 * client functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package client
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'client_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function client_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on client, use a find and replace
		 * to change 'client' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'client', get_template_directory() . '/languages' );

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
		add_image_size( 'post-thumbnails', 450, 214, array( 'center', 'center' ) );
		// set_post_thumbnail_size('thumbnail', 80, 80, true);
		// set_post_thumbnail_size('medium', 133, 110, true);
		// set_post_thumbnail_size('medium_large', 300, 300, true);
		


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'client' ),
				'menu-2' => esc_html__( 'Footer 1', 'client' ),
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
				'client_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'client_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function client_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'client_content_width', 640 );
}
add_action( 'after_setup_theme', 'client_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function client_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'client' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'client' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'client_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function client_scripts() {
    /*stylesheet*/
	wp_enqueue_style( 'client-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'client-style', 'rtl', 'replace' );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap');
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/bootstrap-3.3.7-dist/css/bootstrap.css',false,'v3.3.7','all');
    wp_enqueue_style( 'revolution', get_template_directory_uri() . '/assets/revolution/css/settings.css',false,'	1.4.5','all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false, time(),'all');

    /*javascript*/
    /*wp_enqueue_script( 'client-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );*/
    wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 'v3.5.1', true);
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js', array (), 'v3.3.7', true);
    wp_enqueue_script( 'themepunch.plugins', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.plugins.min.js', array (), 'v1.0.5', true);
    wp_enqueue_script( 'themepunch.revolution', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array (), '4.3.6', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array (), time(), true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'client_scripts' );

/**
 * admin style
 */	
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
	    form#edittag {
			max-width: 100%;
		}
		.wp-admin.some-class-only-on-that-edit-page #edittag {
		    max-width: 100%;
		}
  </style>';
}

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
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/client-options.php';