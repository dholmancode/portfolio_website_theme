<?php
function enqueue_photo_portfolio_styles() {
    $version = rand(); // Use a random number as the version
    wp_enqueue_style('photo-portfolio-style', get_template_directory_uri() . '/photo-portfolio.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'enqueue_photo_portfolio_styles');

function enqueue_styles() {
    $version = rand(); // Use a random number as the version
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Add WooCommerce support
function my_theme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'my_theme_add_woocommerce_support');

function enqueue_custom_woocommerce_styles() {
    if (class_exists('WooCommerce')) {
        $version = rand(); // Use a random number as the version
        wp_enqueue_style('custom-woocommerce.css', get_template_directory_uri() . '/woocommerce-custom.css', array(), $version);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_woocommerce_styles');

function enqueue_custom_styles() {
    if (class_exists('WooCommerce')) {
        $version = rand(); // Use a random number as the version
        wp_enqueue_style('custom-woocommerce.css', get_template_directory_uri() . '/woocommerce-custom.css', array(), $version);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_web_port_styles() {
    $version = rand(); // Use a random number as the version
    wp_enqueue_style('web-port', get_template_directory_uri() . '/web-port.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'enqueue_web_port_styles');

function enqueue_portfolio_styles() {
    $version = rand(); // Use a random number as the version
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/portfolio.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'enqueue_portfolio_styles');
?>