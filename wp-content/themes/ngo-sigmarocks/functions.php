<?php
function ngo_sigmarocks_enqueue_styles() {
    // Load parent theme stylesheet first
    wp_enqueue_style('ngo-parent-style', get_template_directory_uri() . '/style.css');

    // Load child theme stylesheet next
    // wp_enqueue_style('ngo-child-style', get_stylesheet_directory_uri() . '/style.css', array('ngo-parent-style'));
}
add_action('wp_enqueue_scripts', 'ngo_sigmarocks_enqueue_styles');

// Add custom class to the SJB listing button
add_filter('sjb-listing-button-class', function($classes) {
    // Add your custom class
    $classes .= 'apply-now-btn'; 
    
    return trim($classes);
});
