<?php
/*
* my theme function
*/

if (
    ! defined('_S_VERSION')
) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

//theme title
add_theme_support('title-tag');

// theme css and Jquery file calling
function rednews_scripts()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3.3');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);


    wp_enqueue_style('wp_style', get_stylesheet_uri());
    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/style/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), _S_VERSION);


    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('fontawesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js', array(), _S_VERSION, true);

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.3', 'true');
    // wp_enqueue_script('main', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', 'true');
    wp_enqueue_script('navbar', get_template_directory_uri() . '/jQuery/navbar.js', array('jquery'), '1.0.0', true);
}

// theme support
add_action('wp_enqueue_scripts', 'rednews_scripts');


// theme function
