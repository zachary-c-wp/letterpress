<?php
// Enable block styles
add_action( 'after_setup_theme', 'letterpress_theme_setup' );

function letterpress_theme_setup() {
	add_theme_support( 'wp-block-styles' );
}

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'letterpress_theme_enqueue_styles' );

function letterpress_theme_enqueue_styles() {
	wp_enqueue_style(
		'letterpress-styles',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' ),
		'all'
	);

	if ( current_user_can( 'administrator' ) && isset( $_REQUEST[ 'dev-mode' ] ) ) {
		wp_enqueue_style(
			'letterpress-dev-mode-styles',
			get_template_directory_uri() . '/assets/css/dev-mode.css',
			array(),
			filemtime( get_template_directory() . '/assets/css/dev-mode.css' ),
			'all'
		);
	}
}
