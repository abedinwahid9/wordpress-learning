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
    <div class="container mx-auto ">
        <div class="flex justify-between items-center">
            <div>
                <img class="w-20 h-full" src="<?php echo get_theme_mod("st_logo"); ?>" alt="logo">
            </div>
            <div>
                <ul class="flex gap-5 ">
                    <li class="hover:text-red-700">home</li>
                    <li class="hover:text-red-700">menu</li>
                    <li class="hover:text-red-700">about</li>
                    <li class="hover:text-red-700">contact</li>
                    <li class="hover:text-red-700">blogs</li>
                    <li class="hover:text-red-700">help</li>
                </ul>
            </div>
        </div>
    </div>





    <?php wp_footer(); ?>
</body>

</html>