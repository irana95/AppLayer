<?php

function AppLayers_setup(){
	load_theme_textdomain('AppLayers');
	
	add_theme_support('title-tag');
	add_theme_support('custom-logo',array('height'=>31, 'width'=>134,'flex-height'=>true));
	
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(730,446);
	
	add_theme_support('html5',array(
	'search-form',
	 'gallery',
	 'comment-form',
	 'caption',
	 'comment-list'));
	add_theme_support('post-formats',array(
	'image',
	 'video',
	 'gallery',
	 'aside'));
	 register_nav_menu('primary','Primary Menu');
}
 
add_action('after_setup_theme','AppLayers_setup');
function AppLayers_scripts() {
	
	wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js');
	wp_enqueue_script( 'agency', get_template_directory_uri() . 'js/agency.js');
	wp_enqueue_script( 'interface', get_template_directory_uri() . 'js/interface.js');
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . 'js/jquery.easing.min.js');
}
add_action( 'wp_enqueue_scripts', 'AppLayers_scripts' );
