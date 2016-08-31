<?php
/**
* Big Sisters Theme functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Big_Sisters_Theme
*/

if ( ! function_exists( 'big_sisters_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*/
	function big_sisters_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html( 'Primary Menu' ),
			) );

			// Switch search form, comment form, and comments to output valid HTML5.
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

		}
	endif; // big_sisters_setup
	add_action( 'after_setup_theme', 'big_sisters_setup' );

	/**
	* Set the content width in pixels, based on the theme's design and stylesheet.
	*
	* @global int $content_width
	*/
	function big_sisters_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'big_sisters_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'big_sisters_content_width', 0 );

	/**
	* Register widget area.
	*
	* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	*/
	function big_sisters_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html( 'Sidebar' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			) );
		}
		add_action( 'widgets_init', 'big_sisters_widgets_init' );

		/**
		* Filter the stylesheet_uri to output the minified CSS file.
		*/
		function big_sisters_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
			if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
				$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
			}

			return $stylesheet_uri;
		}
		add_filter( 'stylesheet_uri', 'big_sisters_minified_css', 10, 2 );



		/**
		* Enqueue scripts and styles.
		*/
		function big_sisters_scripts() {
			wp_enqueue_style( 'flickity_stylesheet', get_template_directory_uri() . '/js/flickity/flickity.css');
			wp_enqueue_script( 'flickity_js', get_template_directory_uri(). '/js/flickity/flickity.pkgd.min.js' , array('jquery'));

			wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
			wp_enqueue_style( 'big-sisters-font', 'https://fonts.googleapis.com/css?family=Roboto:700,500,300' );
			wp_enqueue_style( 'font-awesome-cdn' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.4.0');


			wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
			wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
			wp_enqueue_script( 'YTplayer', get_template_directory_uri() . '/js/ytplayer.js', array(), true );


			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'big_sisters_scripts' );


		function bigsisters_archive_title($title) {
			if (is_post_type_archive( array('story'))) {
				$title = 'Success Stories';
			} elseif (is_post_type_archive( array('news'))) {
				$title = 'In The News';
			}
			return $title;
		}
		add_filter('get_the_archive_title', 'bigsisters_archive_title');

		/**
		* Custom template tags for this theme.
		*/
		require get_template_directory() . '/inc/template-tags.php';

		/**
		* Custom functions that act independently of the theme templates.
		*/
		require get_template_directory() . '/inc/extras.php';

		/**
		* Allow SVG files into WordPress
		*/
		function cc_mime_types($mimes) {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');


// =========== TinyMCE custom styles ============= //

/*
Plugin Name: Custom Styles
Plugin URI: http://www.speckygeek.com
Description: Add custom styles in your posts and pages content using TinyMCE WYSIWYG editor. The plugin adds a Styles dropdown menu in the visual post editor.
Based on TinyMCE Kit plug-in for WordPress
http://plugins.svn.wordpress.org/tinymce-advanced/branches/tinymce-kit/tinymce-kit.php
*/
/** * Apply styles to the visual editor */
add_filter('mce_css', 'tuts_mcekit_editor_style');
function tuts_mcekit_editor_style($url) {
	if ( !empty($url) )
	$url .= ',';
	// Retrieves the plugin directory URL
	// Change the path here if using different directories
	$url .= trailingslashit( get_stylesheet_directory_uri() ) . '/editor-styles.css';
	return $url;
}
/**
* Add "Styles" drop-down
*/
add_filter( 'mce_buttons_2', 'tuts_mce_editor_buttons' );

function tuts_mce_editor_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}

/** * Add styles/classes to the "Styles" drop-down */
add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );
function tuts_mce_before_init( $settings ) {
	$style_formats = array(
		array(
			'title' => 'White Button',
			'selector' => 'a',
			'classes' => 'button-white'
		),
		array(
			'title' => 'Dark Blue Button',
			'selector' => 'a',
			'classes' => 'button-deepblue'
		),
		array(
			'title' => 'Bright Blue Button',
			'selector' => 'a',
			'classes' => 'button-brightblue'
		),
		array(
			'title' => 'Center Element',
			'selector' => 'a',
			'styles' => array(
				'margin' => '0 auto'
			)
		),
		array(
			'title' => 'Left Align Element',
			'selector' => 'a',
			'styles' => array(
				'margin' => '0 0'
			)
		)
	);
	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}

/* Learn TinyMCE style format options at http://www.tinymce.com/wiki.php/Configuration:formats */
/** Add custom stylesheet to the website front-end with hook 'wp_enqueue_scripts' */
add_action('wp_enqueue_scripts', 'tuts_mcekit_editor_enqueue');

/* * Enqueue stylesheet, if it exists. */
function tuts_mcekit_editor_enqueue() {
	$StyleUrl = get_stylesheet_directory_uri().'/editor-styles.css'; // Customstyle.css is relative to the current file
	wp_enqueue_style( 'myCustomStyles', $StyleUrl );
}
function my_theme_add_editor_styles() {
	add_editor_style( 'editor-styles.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );
