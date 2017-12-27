<?php

/* Define Constants */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');

/* Menus */
function register_my_menus(){
	register_nav_menus(array(
		'main-menu' => 'Main Menu'
	));
}

add_action('init', 'register_my_menus');

/* Load JS Files */
function load_custom_scripts() {
	wp_enqueue_script('custom_script', THEMEROOT . '/js/scripts.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');

add_filter('show_admin_bar', '__return_false');

//image sizes
add_image_size( 'artwork', 1100, 1100 );

?>