<?php

function estateflow_enqueue_assets() {
    wp_enqueue_style('estateflow-main', get_theme_file_uri("assets/dist/css/main.css"),
        false, wp_get_theme()->get('Version'), 'all');
}


add_action( 'wp_enqueue_scripts', 'estateflow_enqueue_assets' );