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


// Add Hero Section settings to the WordPress Customizer
function rednews_hero_customize_register($wp_customize)
{
    // Create a new section for Hero Banner
    $wp_customize->add_section('rednews_hero_section', array(
        'title'    => __('Hero Banner', 'rednews'),
        'priority' => 30,
    ));

    // Hero Heading Setting
    $wp_customize->add_setting('rednews_hero_heading', array(
        'default'           => 'The latest articles and courses to help you upgrade your skills.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('rednews_hero_heading', array(
        'label'    => __('Hero Heading', 'rednews'),
        'section'  => 'rednews_hero_section',
        'type'     => 'text',
    ));

    // Hero Subheading Setting
    $wp_customize->add_setting('rednews_hero_subheading', array(
        'default'           => 'Master Web Development with amazing resources that are available for free! Join our Newsletter and get alerted when new articles, topics or courses are published.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('rednews_hero_subheading', array(
        'label'    => __('Hero Subheading', 'rednews'),
        'section'  => 'rednews_hero_section',
        'type'     => 'textarea',
    ));

    // Hero Image Setting
    $wp_customize->add_setting('rednews_hero_image', array(
        'default'           => get_template_directory_uri() . '/assets/hero/hero_img.svg',
        'sanitize_callback' => 'rednews_sanitize_image',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rednews_hero_image',
            array(
                'label'    => __('Hero Image', 'rednews'),
                'section'  => 'rednews_hero_section',
                'settings' => 'rednews_hero_image',
            )
        )
    );
}
add_action('customize_register', 'rednews_hero_customize_register');

// Custom image sanitization function
function rednews_sanitize_image($input)
{
    // Allow only image file types
    $valid_file_types = array('jpg', 'jpeg', 'png', 'gif', 'svg');

    // If no image is uploaded, return the default
    if (empty($input)) {
        return get_template_directory_uri() . '/assets/hero/hero_img.svg';
    }

    // Get file extension
    $file_extension = strtolower(pathinfo($input, PATHINFO_EXTENSION));

    // Validate file type
    if (!in_array($file_extension, $valid_file_types)) {
        return get_template_directory_uri() . '/assets/hero/hero_img.svg';
    }

    return esc_url_raw($input);
}

// Add custom meta boxes for About Page additional fields
function rednews_about_page_meta_boxes()
{
    add_meta_box(
        'rednews_about_additional_info',
        'Additional About Page Information',
        'rednews_about_meta_box_callback',
        'page',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'rednews_about_page_meta_boxes');

// Callback function to display custom meta box
function rednews_about_meta_box_callback($post)
{
    // Add a nonce field for security
    wp_nonce_field('rednews_about_meta_box', 'rednews_about_meta_box_nonce');

    // Retrieve existing meta values
    $mission = get_post_meta($post->ID, 'rednews_about_mission', true);
    $vision = get_post_meta($post->ID, 'rednews_about_vision', true);
?>
    <table class="form-table">
        <tr>
            <th><label for="rednews_about_mission">Our Mission</label></th>
            <td>
                <textarea
                    id="rednews_about_mission"
                    name="rednews_about_mission"
                    rows="4"
                    class="large-text"><?php echo esc_textarea($mission); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="rednews_about_vision">Our Vision</label></th>
            <td>
                <textarea
                    id="rednews_about_vision"
                    name="rednews_about_vision"
                    rows="4"
                    class="large-text"><?php echo esc_textarea($vision); ?></textarea>
            </td>
        </tr>
    </table>
<?php
}

// Save custom meta box data
function rednews_save_about_page_meta_box($post_id)
{
    // Check nonce for security
    if (
        !isset($_POST['rednews_about_meta_box_nonce']) ||
        !wp_verify_nonce($_POST['rednews_about_meta_box_nonce'], 'rednews_about_meta_box')
    ) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Save/update mission field
    if (isset($_POST['rednews_about_mission'])) {
        update_post_meta(
            $post_id,
            'rednews_about_mission',
            sanitize_textarea_field($_POST['rednews_about_mission'])
        );
    }

    // Save/update vision field
    if (isset($_POST['rednews_about_vision'])) {
        update_post_meta(
            $post_id,
            'rednews_about_vision',
            sanitize_textarea_field($_POST['rednews_about_vision'])
        );
    }
}
add_action('save_post', 'rednews_save_about_page_meta_box');
