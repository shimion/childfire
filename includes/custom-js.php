<?php
add_action( 'wp_enqueue_scripts', 'cherry_child_custom_scripts' );

function cherry_child_custom_scripts() {
	/**
	 * How to enqueue script?
	 *
	 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 */
	 
	wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/js/my_script.js', array('jquery'), '1.0' );
	wp_enqueue_script( 'parallaxSlider', get_stylesheet_directory_uri() . '/js/parallaxSlider.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'chrome-smoothing-scroll', get_stylesheet_directory_uri() . '/js/smoothing-scroll.js', array('jquery'), '1.0', true );
	 
} ?>