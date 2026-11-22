<?php

function estateflow_after_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'flex-width'  => true,
        'flex-height' => true,
    ));

    register_nav_menus(array(
        'header-menu' => esc_html('Header Menu'),
    ));
}

add_action('after_setup_theme', 'estateflow_after_setup_theme');