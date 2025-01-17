<?php
// Enable block styles
add_action( 'after_setup_theme', 'zc_wp_fse_theme_setup' );

function zc_wp_fse_theme_setup() {
	add_theme_support( 'wp-block-styles' );
}

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'zc_wp_fse_theme_enqueue_styles' );

function zc_wp_fse_theme_enqueue_styles() {
	wp_enqueue_style(
		'zc-wp-fse-theme-styles',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' ),
		'all'
	);

	if ( current_user_can( 'administrator' ) && isset( $_REQUEST[ 'dev-mode' ] ) ) {
		wp_enqueue_style(
			'zc-wp-fse-theme-dev-mode-styles',
			get_template_directory_uri() . '/assets/css/dev-mode.css',
			array(),
			filemtime( get_template_directory() . '/assets/css/dev-mode.css' ),
			'all'
		);
	}
}
