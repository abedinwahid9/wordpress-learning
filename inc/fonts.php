<?php



// google fonts function

function st_add_google_fonts()
{
    wp_enqueue_style("st_google_fonts", "https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap", false);
};

add_action('wp_enqueue_scripts', 'st_add_google_fonts');
