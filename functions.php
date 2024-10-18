<?php

/**
 * 
 * my theme function
 * 
 */

// theme title
add_theme_support("title-tag");


function wplearning_style_enqueue()
{
    // Register the CSS file
    wp_register_style('tailwind-design', get_template_directory_uri() . "/css/custom.css", array(), '1.0', 'all');

    // Enqueue the CSS file
    wp_enqueue_style('tailwind-design');
}

// Use the correct hook to enqueue styles
add_action('wp_enqueue_scripts', 'wplearning_style_enqueue');



// theme function


function st_customizar_register($wp_customize)
{

    $wp_customize->add_section("st_header_area", array(
        "title" => __("Header Area", "abedinwahid"),
        "description" => "upload your logo",
    ));

    $wp_customize->add_setting("st_logo", array(
        "default" => get_bloginfo("template_directory") . "/img/itcompanylogo.png",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "st_logo", array(
        "label" => "logo upload",
        "description" => "if you interest change your logo, upload your photo here",
        "section" => "st_header_area",
        "setting" => "st_logo"
    )));
};

add_action("customize_register", "st_customizar_register");
