<?php
/*
* my theme function
*/

//theme title
add_theme_support('title-tag');

// theme css and Jquery file calling
function css_js_file_calling()
{
    wp_enqueue_style('wp_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');


    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', 'true');
}

add_action('wp_enqueue_scripts', 'css_js_file_calling');


// theme function
