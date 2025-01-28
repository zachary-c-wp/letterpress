<?php
// Enable block styles
add_action( 'after_setup_theme', 'letterpress_setup' );

function letterpress_setup() {
	add_theme_support( 'wp-block-styles' );
}

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'letterpress_enqueue_styles' );

function letterpress_enqueue_styles() {
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

// Add small & lede paragraph styles
add_action( 'init', 'letterpress_register_block_styles' );

function letterpress_register_block_styles() {
	register_block_style( 'core/paragraph', array(
		'name'         => 'small',
		'label'        => __( 'Small', 'letterpress' ),
		'inline_style' => 'p.is-style-small {
			font-size: var( --wp--preset--font-size--x-small );
		}'
    ) );

	register_block_style( 'core/paragraph', array(
		'name'         => 'lede',
		'label'        => __( 'Lede', 'letterpress' ),
		'inline_style' => 'p.is-style-lede {
			font-size: var( --wp--preset--font-size--medium );
			line-height: var( --wp--preset--spacing--40 );
		}'
    ) );
}
