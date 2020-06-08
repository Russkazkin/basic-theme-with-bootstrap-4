<?php

function enqueue_styles() {
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/libs/node_modules/bootstrap/dist/css/bootstrap.min.css', null, '4.5.0');
	wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/libs/node_modules/@fortawesome/fontawesome-free/css/all.min.css', null, '5.13.0');
	wp_register_style('font-style', '//fonts.googleapis.com/css?family=Anonymous+Pro:400,700|Montserrat:400,700|Roboto+Slab&display=swap&subset=cyrillic');
	wp_enqueue_style( 'font-style');
	wp_enqueue_style( 'basic-bs4-style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri() . '/resources/css/main.min.css', null, '0.0.1');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {

	wp_register_script('html5-shim', get_template_directory_uri() . '/inc/html5shiv/html5shiv.min.js');
	wp_enqueue_script('html5-shim');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/libs/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.0');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Include custom navwalker for BootStrap ver 4
require_once(get_template_directory() . '/inc/bs4navwalker-master/bs4navwalker.php');

// Customizer
include_once(get_template_directory() . '/customizer/customizer.php');
include_once(get_template_directory() . '/customizer/custom_slider.php');
include_once(get_template_directory() . '/customizer/custom_vantages.php');
include_once(get_template_directory() . '/customizer/custom_jumbotron.php');
include_once(get_template_directory() . '/customizer/custom_modal.php');

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
// remove_filter('the_content', 'wpautop'); //Отключение произвола с тегами в визуальном редакторе

//Код ниже убирает замену кавычек в WordPress
//в тексте записей и страниц
remove_filter('the_content', 'wptexturize');
//в заголовках записей и страниц
remove_filter('the_title', 'wptexturize');
//в тексте комментариев
remove_filter('comment_text', 'wptexturize');

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}