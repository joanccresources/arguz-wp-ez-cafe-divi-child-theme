<?php

/**
 * @author Divi Awesome
 * @copyright 2022
 */
if ( ! defined('ABSPATH') ) {
	die();
}

add_action( 'wp_enqueue_scripts', 'ezcafe_divi_child_theme', 20  );
function ezcafe_divi_child_theme() {
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css', array(), et_get_theme_version() );
    wp_enqueue_style( 'child-theme', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
 
function ezcafe_dequeue() {
    wp_dequeue_style( 'divi-style' );}
add_action( 'wp_enqueue_scripts', 'ezcafe_dequeue', 1  );
add_action( 'wp_head', 'ezcafe_dequeue', 1 );