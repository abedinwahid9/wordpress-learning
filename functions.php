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


// google fonts function

function st_add_google_fonts()
{
    wp_enqueue_style("st_google_fonts", "https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap", false);
};

add_action('wp_enqueue_scripts', 'st_add_google_fonts');


// theme function
function st_customizar_register($wp_customize)
{
    // header section all functionality
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


    // menu bar position
    $wp_customize->add_section("st_menu_option", array(
        "title" => __("menu Position Option", "abedinwahid"),
        "description" => "If you interest change your menu position",
    ));

    $wp_customize->add_setting("st_menu_position", array(
        "default" => "right_menu",
    ));

    $wp_customize->add_control("st_menu_position", array(
        "label" => "Menu position",
        "description" => "if you interest to change your menu position",
        "section" => "st_menu_option",
        "setting" => "st_menu_position",
        "type" => "radio",
        "choices" => array(
            "left_menu" => "Left Menu",
            "right_menu" => "Right Menu",
            "center_menu" => "Center Menu",

        )
    ));
};

add_action("customize_register", "st_customizar_register");

// register menu

register_nav_menu("main_menu", __("Main Menu", "abedinwahid"));
