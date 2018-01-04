<?php

if(!defined('DUCRAY_THEME_DIR')) {
	//define('LOVETOEAT_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('DUCRAY_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('DUCRAY_THEME_URL')) {
	define('DUCRAY_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

require_once DUCRAY_THEME_DIR.'libs/posttypes.php';
require_once DUCRAY_THEME_DIR.'libs/utils.php';
//require_once DUCRAY_THEME_DIR.'libs/utils.php';
/*require_once LOVETOEAT_THEME_DIR.'libs/FoodFight.php';
require_once LOVETOEAT_THEME_DIR.'libs/FoodFight_Item.php';

add_theme_support('post-formats', array('gallery'));
add_theme_support('post-thumbnails', array('post', 'recipes', 'restaurants', 'foodfight'));*/
	
	
/*function duc_settings_menu() {
	add_theme_page('Ducray - Ustawienia', 'Szablon Ducray', 'manage_options', 'duc-theme-options', 'duc_settings_page');
}*/

add_theme_support('post-thumbnails', array('post', 'products'));
	
add_action('admin_menu', 'duc_settings_menu');
	
if(function_exists('register_nav_menus')) {
	register_nav_menus(array(
			'main_nav' => 'Główne menu nawigacji'
	));
}
		
function printPointsCategories($post_id) {
	printPostCategories($post_id, array('place'));
	//printPostCategories();
	//echo 'test 1';
}

register_sidebar( array(
		'name'          => 'Widget Area',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
function getColor($seriesName){
	switch($seriesName){
		case 'anacaps': $color='ff561c'; break;
		case 'anaphase': $color='ff561c'; break;
		case 'creastim': $color='ff561c'; break;
		case 'neoptide': $color='ff561c'; break;
		case 'argeal': $color='ff2d37'; break;
		case 'sabal': $color='ff2d37'; break;
		case 'dexyane': $color='1dafe4'; break;
		case 'elution': $color='359e42'; break;
		case 'extra-doux': $color='359e42'; break;
		case 'sensinol': $color='359e42'; break;
		case 'kelual-ds': $color='006bbb'; break;
		case 'kertyol-p-s-o': $color='006bbb'; break;
		case 'squanorm': $color='006bbb'; break;
		case 'keracnyl': $color='00bcda'; break;
		case 'melascreen': $color='8d6d3f'; break;
		default: break;
				
	}
	return $color;
}

function getImageApplicatiom($atr){
	switch($atr){
		case '1': $image='zel.jpg'; break;
		case '2': $image='krem.jpg'; break;
		case '3': $image='szampon.jpg'; break;
		default: break;				
	}
	return $image;
}



	
?>