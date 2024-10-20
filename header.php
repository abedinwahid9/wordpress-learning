<?php

/**
 * 
 * this template for displaying this header
 * 
 */

?>


<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="container  mx-auto ">
        <div class="flex z-50 justify-between items-center <?php echo get_theme_mod("st_menu_position"); ?>">
            <div class="img">
                <a href=" <?php echo home_url(); ?> "> <img class="w-20 h-full" src="<?php echo get_theme_mod("st_logo"); ?>" alt="logo"></a>
            </div>
            <div class="nav">
                <?php wp_nav_menu(array("theme_location" => "main_menu", "menu_id" => "nav")) ?>
            </div>
        </div>
    </header>