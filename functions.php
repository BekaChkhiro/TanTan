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
