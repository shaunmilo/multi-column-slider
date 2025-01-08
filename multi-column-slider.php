<?php
/**
 * Plugin Name: Multi Column Slider V2
 * Plugin URI: https://shaunmilo.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Shaun MIlosevich
 * Author URI: https://shaunmilo.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );


// Register and load the custom module
function load_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'module/bb-module.php';
    }
}
add_action( 'init', 'load_module' );

function enqueue_slick_slider() {
    wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'fl-builder' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_slick_slider' );

function enqueue_custom_styles() {

    wp_enqueue_style('multi-column-front-end', plugins_url('/module/includes/frontend.css.php', __FILE__));
    wp_enqueue_style('multi-column-settings', plugins_url('/module/css/settings.css'));
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

