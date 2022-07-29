<?php
    /*
	 * Use a find and replace
	 * to change 'janedoe' to the name of your theme in all the template files.
	*/

function janedoe_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'janedoe', get_template_directory() . '/languages' );

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
	
	add_image_size( 'archive',400,265,true);

	// This theme uses wp_nav_menu() in 2 locations.
	register_nav_menus(
		array(
			'principal' => 'Menu principal',
			'pied' => 'Menu pied de page',
			'reseaux' => 'Menu reseaux sociaux'
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
}
add_action( 'after_setup_theme', 'janedoe_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function janedoe_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Pied 1', 'janedoe' ),
			'id'            => 'pied1',
			'description'   => __( 'Widgets en pied de page gauche', 'janedoe' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Pied 2', 'janedoe' ),
			'id'            => 'pied2',
			'description'   => __( 'Widgets en pied de page droit', 'janedoe' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);

}
add_action( 'widgets_init', 'janedoe_widgets_init' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function janedoe_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'janedoe_pingback_header' );


/**
 * Enqueue scripts and styles.
 */
function janedoe_scripts() {
	
	/* STYLE */
	wp_enqueue_style( 'janedoe-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	// wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700%7COpen+Sans' );

    /* JAVASCRIPT */
    // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js','','1.0',true );

}
add_action( 'wp_enqueue_scripts', 'janedoe_scripts' );

