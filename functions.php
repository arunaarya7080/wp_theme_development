<?php

/**
 * HTML_2_WP functions, making all dynamic term using hooks functions
 *
 * @package HTML_2_WP
 */


//    add to enqueue scripts and styles file by function_wp
 
function add_html2wp_style_scripts() {

    wp_enqueue_style( 'wp-style-name', get_stylesheet_uri() );
	
	// <!-- Template Main CSS File -->

    wp_enqueue_style( 'main-style-name', get_template_directory_uri().'/assets/css/style.css');

	// <!-- Vendor CSS Files in assests file-->
    wp_enqueue_style( 'bootstrap-style-name', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'icofont-style-name', get_template_directory_uri().'/assets/vendor/icofont/icofont.min.css');
	wp_enqueue_style( 'animate-style-name', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css');
	wp_enqueue_style( 'fawesome-style-name', get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css'); 
	wp_enqueue_style( 'nivo-slider-style-name', get_template_directory_uri().'/assets/vendor/nivo-slider/css/nivo-slider.css');
	wp_enqueue_style( 'owl-carousel-style-name', get_template_directory_uri().'/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
	wp_enqueue_style( 'wenbox-style-name', get_template_directory_uri().'/assets/vendor/venobox/venobox.css');   

	// <!-- Vendor JS Files  in assetes-->
wp_enqueue_script( 'script-name-min', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-bt', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-easign', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-appear', get_template_directory_uri() . '/assets/vendor/appear/jquery.appear.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-paralex', get_template_directory_uri() . '/assets/vendor/parallax/parallax.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-knob', get_template_directory_uri() . '/assets/vendor/knob/jquery.knob.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-wow-min', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-pkgd-min', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-navi-slider', get_template_directory_uri() . '/assets/vendor/nivo-slider/js/jquery.nivo.slider.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-carosel-slider', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name-venbox-slider', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '1.0.0', true );
// <!-- Template Main JS File in assetes -->
wp_enqueue_script( 'script-name-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'add_html2wp_style_scripts' );


// //////////////////////////////////////////


/**
 * Register widget area footer sidebar etc.
 */

function html2wp_widgets_and_footer_init() {


	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'html2wp' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'html2wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-1', 'html2wp' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'html2wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-2', 'html2wp' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'html2wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-3', 'html2wp' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'html2wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);



}
add_action( 'widgets_init', 'html2wp_widgets_and_footer_init' );


// *****************************************************


///////////////////////////////////////////

// custom post type code 

function html_2_wp_create_custom_post_type() {

 
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
    
$labels = array(
'name' => _x('Tech_Posts', 'plural'),
'singular_name' => _x('Tech_Post', 'singular'),
'menu_name' => _x('Tech_Post', 'admin menu'),
'name_admin_bar' => _x('Tech_Post', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Tech_Post'),
'new_item' => __('New Tech_Post'),
'edit_item' => __('Edit Tech_Post'),
'view_item' => __('View Tech_Post'),
'all_items' => __('All Tech_Post'),
'search_items' => __('Search Tech_Post'),
'not_found' => __('No Tech_Post found.'),
);


 
$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our Tech_Post and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'tech_post'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-embed-post',
);



register_post_type( 'tech_post',$args);
}


add_action( 'init', 'html_2_wp_create_custom_post_type' );

// Hooking up our function to theme setup

// custom feilds or meta box  type code 


function html_2_wp_your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = 'html_2_wp_Information_box';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Information box', 'html_2_wp' ),
        'id'         => 'Information_box',
        'post_types' => ['post', 'page'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Full_Name', 'html_2_wp' ),
                'id'          => $prefix . 'full_name',
                'placeholder' => esc_html__( 'Full_Name', 'html_2_wp' ),
                'clone'       => true,
            ],
            [
                'type'        => 'email',
                'name'        => esc_html__( 'Add_Email', 'html_2_wp' ),
                'id'          => $prefix . 'add_email',
                'placeholder' => esc_html__( 'Add_Email', 'html_2_wp' ),
            ],
            [
                'type'        => 'number',
                'name'        => esc_html__( 'Add_Number', 'html_2_wp' ),
                'id'          => $prefix . 'add_number',
                'placeholder' => esc_html__( 'Add_Number', 'html_2_wp' ),
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'html_2_wp_your_prefix_register_meta_boxes' );

/////////////////////////////////////////


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'html_2_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function html_2_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HTML_2_WP, use a find and replace
		 * to change 'html_2_wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'html_2_wp', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary Menu', 'html_2_wp' ),
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
				'html_2_wp_custom_background_args',
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
add_action( 'after_setup_theme', 'html_2_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function html_2_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'html_2_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'html_2_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function html_2_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'html_2_wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'html_2_wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'html_2_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function html_2_wp_scripts() {
	wp_enqueue_style( 'html_2_wp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'html_2_wp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'html_2_wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'html_2_wp_scripts' );

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

