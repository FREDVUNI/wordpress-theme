<?php
// action hook
// dependencies are the scripts that other scripts depend on so they can't load before them (the array is the dependency)
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('scrollex', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'));
    wp_enqueue_script('skel', get_stylesheet_directory_uri() . '/assets/js/skel.min.js', array('jquery'));
    wp_enqueue_script('util', get_stylesheet_directory_uri() . '/assets/js/util.js', array('jquery'));
    wp_enqueue_script('main-js-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery', 'scrollex', 'skel', 'util'));
});

add_action('after_setup_theme', function () {
    //theme title tag
    add_theme_support('title-tag');
});

//register menu (this theme only has one in the sidebar)

register_nav_menus(
    array(
        'head_menu' => 'Main menu',
    )
);
