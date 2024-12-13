<?php
/**
 * Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// WooCommerce support
function custom_theme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'custom_theme_add_woocommerce_support' );

// Enqueue scripts and styles
function custom_theme_scripts() {
    wp_enqueue_style( 'custom-theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

// Include all necessary PHP files
include_once get_template_directory() . '/footer.php';
include_once get_template_directory() . '/front-page.php';
include_once get_template_directory() . '/header.php';
include_once get_template_directory() . '/index.php';
include_once get_template_directory() . '/page.php';
include_once get_template_directory() . '/sidebar.php';

// Include all PHP files from template-parts directory
foreach (glob(get_template_directory() . '/template-parts/*.php') as $file) {
    include_once $file;
}

// Include all PHP files from woocommerce directory
foreach (glob(get_template_directory() . '/woocommerce/*.php') as $file) {
    include_once $file;
}
