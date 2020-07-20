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

//helpers
//Redirect 404
function redirect404() {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 ); exit();
}

function authorCheck($post_ID = null)
{
    $post_ID = $post_ID ?? get_the_ID();
    if(get_post_field('post_author', $post_ID) != get_current_user_id()) {
        redirect404();
    }
}

//My Dump
function my_dump($var, $die = false) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if($die) {
        die;
    }
}

//Поддержка сессий в WP
function start_session() {
    if(!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session', 1);

//Метрики

function metrics() { ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(65631721, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/65631721" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173082724-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173082724-1');
    </script>
<?php }

add_action('wp_head', 'metrics');