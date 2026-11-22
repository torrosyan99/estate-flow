<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="py-4">
    <div class="page-container flex justify-between">
        <?php
        if (has_custom_logo()) the_custom_logo();
        else  echo '<h1 style="font-size: 20px">' . get_bloginfo('name') . '</h1>';
        ?>
        <nav>
            <?php
            wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'nav',
            ))
            ?>
        </nav>
    </div>

</header>
