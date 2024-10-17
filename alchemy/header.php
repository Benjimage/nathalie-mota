<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body>
<header>
    <div class="menu-container">
    <?php the_custom_logo(); ?>
    <?php  wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => 'header-menu'
        ]);
        ?>
    </div>
    
</header>
<body <?php body_class(); ?>>
    
        <?php wp_body_open(); ?>