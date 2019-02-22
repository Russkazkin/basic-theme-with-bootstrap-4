<?php

function enqueue_styles() {

	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', null, '4.1.2');
	wp_enqueue_style('fontawesome-style', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css', null, '5.0.8');
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Pattaya|Vollkorn+SC:400,700&amp;subset=cyrillic');
	wp_enqueue_style( 'font-style');
	wp_enqueue_style( 'basic-bs4-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {

	wp_register_script('html5-shim', get_template_directory_uri() . '/inc/html5shiv/html5shiv.min.js');
	wp_enqueue_script('html5-shim');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '4.1.2');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Include custom navwalker for BootStrap ver 4
require_once(get_template_directory() . '/inc/bs4navwalker-master/bs4navwalker.php');

// Customizer
include_once(get_template_directory() . '/customizer/customizer.php');
include_once(get_template_directory() . '/customizer/custom_slider.php');
include_once(get_template_directory() . '/customizer/custom_vantages.php');
include_once(get_template_directory() . '/customizer/custom_jumbotron.php');

// Template parts
require_once(get_template_directory() . '/inc/bbs_slider.php');
require_once(get_template_directory() . '/inc/bbs_vantages.php');
require_once(get_template_directory() . '/inc/bbs_jumbotron.php');
require_once(get_template_directory() . '/inc/bbs_form_modal.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

function bbsCustomizerScripts() {
	wp_enqueue_script(
		'bbs-theme-customizer', // название скрипта, указываем что угодно
		get_stylesheet_directory_uri() . '/customizer/customizer.js', // URL
		array( 'jquery', 'customize-preview' ), // зависимости от других скриптов
		null, // версия, ну её
		true // подключить в футере
	);
}
add_action( 'customize_preview_init', 'bbsCustomizerScripts' );

function bbsSanitize( $value ){
	return strip_tags( stripslashes( $value ) );
}

function bbsSanitizeTags( $value ){
    return strip_tags(  $value  );
}

add_theme_support( 'post-thumbnails' );