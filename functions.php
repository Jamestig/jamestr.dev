<?php

/*
 * Functions
 */

// Theme support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Navigation menus

function jamestr_nav_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'side-menu' => __('Side Menu')
		)
	);
}
add_action('init', 'jamestr_nav_menus');


// Theme Styles

function jamestr_enqueue_styles() {

wp_enqueue_style( 'main-css', get_stylesheet_uri(), [], time(), 'all' );

}
add_action('wp_enqueue_scripts', 'jamestr_enqueue_styles' );

// Widget Areas

function jamestr_widget_areas() {
	register_sidebar( array (
		'name'					=> 'Sidebar Widget Area',
		'id'						=> 'main-sidebar',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2>',
		'after_title'		=> '</h2>',
	));
}
add_action('widgets_init', 'jamestr_widget_areas');

?>
