<?php 
/* 
Plugin Name: Shortcode Buddy
Description: Creates Shortcodes That Make it easy for non-coders to add dynamic content with ease.
Version: 0.1.9.5
Author: Vincent Astolfi
Author URI: http://www.nueue.net/
Plugin URI: http://www.nueue.net/
*/
// Adds Options Page
include ('options/sb_options.php');
// Adds main Stylesheet
add_action( 'wp_enqueue_scripts', 'sbuddy_add_my_stylesheet' );

function sbuddy_add_my_stylesheet() {
wp_register_style( 'sbuddy-style', 
plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'sbuddy-style' );
}
// Adds Animation Stylesheet (By Dan Eden)
add_action( 'wp_enqueue_scripts', 'sbuddy_animation_css' );

function sbuddy_animation_css() {
wp_register_style( 'sbuddy-animate-css', 
plugins_url('shortcodes/animate/animate-custom.css', __FILE__) );
wp_enqueue_style( 'sbuddy-animate-css' );
}
// Adds Animation js
function shortcode_buddy_js_init() {
    wp_enqueue_script( 'shortcode_buddy_js', plugins_url( '/shortcodes/animate/shortcode-buddy-animate.js', __FILE__ ));
}
add_action('init','shortcode_buddy_js_init');
// Add WYSIWYG Buttons
include ('buttons/buttons.php');
// Add Shortcodes
include ('shortcodes/shortcodes.php');
include ('shortcodes/columns/column-shortcodes.php');
include ('shortcodes/login.php');
include ('shortcodes/tooltip.php'); 
//include ('shortcodes/icons/icons.php');
?>