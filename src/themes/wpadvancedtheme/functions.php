<?php
/**
 * Theme Functions
 * 
 * @package wpadvancedtheme
 * 
 */

// print_r();
// echo filemtime( get_template_directory() . '/style.css' ); - "Use this function to avoid browser caching for Stylesheets & Scripts"
// wp_die();

// CONSTANTS
if ( ! defined( 'WPADVANCEDTHEME_DIR_PATH' ) ) {
   define( 'WPADVANCEDTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'WPADVANCEDTHEME_DIR_URI' ) ) {
   define( 'WPADVANCEDTHEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_URI' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_JS_URI' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_JS_DIR_PATH' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_IMG_URI' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_CSS_URI' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/css' );
}
if ( ! defined( 'WPADVANCEDTHEME_BUILD_CSS_DIR_PATH' ) ) {
   define( 'WPADVANCEDTHEME_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/src/css' );
}

require_once WPADVANCEDTHEME_DIR_PATH . '/includes/helpers/autoloader.php';
require_once WPADVANCEDTHEME_DIR_PATH . '/includes/helpers/template-tags.php';


//Get Class Instances
function wpadvancedtheme_get_theme_instance() {
   \WPADVANCEDTHEME\Includes\WPADVANCED_THEME::get_instance();
}
wpadvancedtheme_get_theme_instance();
