<?php

function univ_files() {
    wp_enqueue_script('main-univ-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style ('univ_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style ('univ_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style ('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style ('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_action('wp_enqueue_scripts', 'univ_files');

function univ_features() {
    add_theme_support('title-tag');
   
    // ****Dynamic Menu Option***
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    // register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
}
add_action('after_setup_theme', 'univ_features');



