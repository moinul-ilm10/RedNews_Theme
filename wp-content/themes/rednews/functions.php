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

if (! function_exists('rednews_setup')) {
    function rednews_setup()
    {

        /**
         * Make theme avaialbe for translations.
         */
        // load_theme_textdomain('rednews', get_template_directory() .  '/languages');

        /**
         * Include theme supports.
         */
        add_theme_support('automatic-feed-links'); // Add default posts and comments RSS feed links to head.
        add_theme_support('title-tag'); // Let WordPress manage the document title.
        add_theme_support('post-thumbnails'); // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio')); // Add post type format support.

        /**
         * Add support for core custom logo.
         */
        add_theme_support('custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]);

        // Register manu locations.
        register_nav_menus(
            [
                'primary' => esc_html__('Header Menu', 'RedNews'),
                'footer_menu_1'  => esc_html__('Footer Primary', 'RedNews'),
                'footer_menu_2'  => esc_html__('Footer Secondary', 'RedNews'),
            ]
        );
    }
}
add_action('after_setup_theme', 'rednews_setup');


//theme title
// add_theme_support('title-tag');

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


//? theme function
// Customize Footer Settings

// Add footer settings to the Customizer
function theme_customize_register($wp_customize)
{
    // Footer Heading
    $wp_customize->add_setting('footer_heading', array(
        'default' => 'Dive Into Skills',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_heading', array(
        'label' => __('Footer Heading', 'text-domain'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Description
    $wp_customize->add_setting('footer_description', array(
        'default' => 'The latest articles and courses to help you upgrade your skills.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_description', array(
        'label' => __('Footer Description', 'text-domain'),
        'section' => 'footer_settings',
        'type' => 'textarea',
    ));

    // Footer Copyright Text
    $wp_customize->add_setting('footer_copyright', array(
        'default' => 'COPYRIGHT @ 2022 Dive Into Skills',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Footer Copyright Text', 'text-domain'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Developed By Text
    $wp_customize->add_setting('footer_developed_by', array(
        'default' => 'Developed by: Ahmad Raza',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_developed_by', array(
        'label' => __('Footer Developed By', 'text-domain'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Social Links (Repeater-like input)
    $wp_customize->add_setting('footer_social_links', array(
        'default' => json_encode([]),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_links', array(
        'label' => __('Social Links (JSON)', 'text-domain'),
        'description' => __('Enter a JSON array of links with name, URL, and icon.', 'text-domain'),
        'section' => 'footer_settings',
        'type' => 'textarea',
    )));

    // Footer Section
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'text-domain'),
        'priority' => 130,
    ));
}
add_action('customize_register', 'theme_customize_register');

// Enqueue theme styles and scripts
function theme_enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style/custom.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_custom_styles');
