<?php

/**
 * Hero Banner Section Template
 *
 * Displays a customizable hero banner with heading, subheading, and image.
 */

// Retrieve hero section settings with fallback default values
$hero_heading = get_theme_mod(
    'rednews_hero_heading',
    'The latest articles and courses to help you upgrade your skills.'
);
$hero_subheading = get_theme_mod(
    'rednews_hero_subheading',
    'Master Web Development with amazing resources that are available for free! Join our Newsletter and get alerted when new articles, topics or courses are published.'
);
$hero_image = get_theme_mod(
    'rednews_hero_image',
    get_template_directory_uri() . '/assets/hero/hero_img.svg'
);
?>

<section id="heroBanner">
    <div class="hero-banner-container">
        <div class="hero-banner-content">
            <h3 class="hero-banner-title"><?php echo esc_html($hero_heading); ?></h3>
            <p class="hero-banner-paragraph"><?php echo esc_html($hero_subheading); ?></p>
            <div class="hero-banner-email newsletter-email-input">
                <input type="email" placeholder="Email Address" class="email-input-field">
                <span class="email-submit-btn">Subscribe</span>
            </div>
        </div>
        <div class="hero-banner-img">
            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($hero_heading); ?>">
        </div>
    </div>
</section>