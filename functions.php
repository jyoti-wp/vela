<?php
/**
 * Functions.
 *
 * @package capella
 */

// Constants
if ( ! defined( 'VELLA_BUILD_URI' ) ) {
	define( 'VELLA_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

function vella_add_theme_scripts() {

	wp_enqueue_style( 'main-css', VELLA_BUILD_URI . '/css/main.css', false, '1.1', 'all' );
	wp_enqueue_script( 'main-js', VELLA_BUILD_URI . '/js/main.js', [ 'jquery' ], 1.1, true );

}

add_action( 'wp_enqueue_scripts', 'vella_add_theme_scripts' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu'  => __( 'Extra Menu' )
		)
	);
}

add_action( 'init', 'register_my_menus' );

function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'vela' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'vela' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


