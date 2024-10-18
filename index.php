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
<?php wp_head();?>
</head>
<body  <?php body_class(); ?>>

<div class="container mx-auto">
   <div>
         <img class="w-40 h-full" src="<?php echo get_theme_mod("st_logo"); ?>" alt="logo">
   </div>
</div>
    




<?php wp_footer();?>
</body>
</html>