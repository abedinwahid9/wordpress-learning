<?php




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
