<?php


// all style register and enqueue
function wplearning_style_enqueue()
{
    // Register the CSS file
    wp_register_style('tailwind-design', get_template_directory_uri() . "/css/custom.css", array(), '1.0', 'all');

    // Enqueue the CSS file
    wp_enqueue_style('tailwind-design');
}

// Use the correct hook to enqueue styles
add_action('wp_enqueue_scripts', 'wplearning_style_enqueue');
