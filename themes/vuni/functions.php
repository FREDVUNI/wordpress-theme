<?php
// action hook
// dependencies are the scripts that other scripts depend on so they can't load before them (the array is the dependency)
add_action('wp_enqueque_scripts', function () {
    wp_enqueque_style("main-styles", get_stylesheet_directory_uri() . "/assets/css/main.css");

    wp_enqueque_script("jquery", get_stylesheet_directory_uri() . "/assets/js/jquery.min.js");
    wp_enqueque_script("scrollex", get_stylesheet_directory_uri() . "/assets/js/jquery.min.js", array('jquery'));
    wp_enqueque_script("skel", get_stylesheet_directory_uri() . "/assets/js/skel.min.js", array('jquery'));
    wp_enqueque_script("util", get_stylesheet_directory_uri() . "/assets/js/util.js", array('jquery'));
    wp_enqueque_script("main-js-script", get_stylesheet_directory_uri() . "/assets/js/main.js", array('jquery', 'scrollex', 'skil', 'util'));
});
