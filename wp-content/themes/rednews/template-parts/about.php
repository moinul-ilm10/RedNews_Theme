<?php

/**
 * Template Name: About Page
 *
 * Dynamic About Page template for RedNews theme
 * Allows full content management through WordPress page editor
 */

get_header();
?>

<section id="aboutPage">
    <div class="about-container">
        <h2 class="about-heading">All About "Dive Into Skills"
        </h2>
        <div class="about-details">
            <p class="about-paragraph">"Dive Into Skills" is a platform where you can
                learn about software development. The
                purpose behind "Dive Into Skills" is to
                educate people about Programming and
                technology and to raise awareness of skills.
                Here I will share knowledgeable content
                about "free courses on different platforms,
                tutorials on different topics related to
                software development". I hope by using this
                platform, you will learn many valuable skills.</p>

            <div class="image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/about/Dive Into Skills 1.png" alt="Dive Into Skills" class="about-image">
                <div class="triangle-card-top top-right detail-card-bg"></div>
                <div class="triangle-card-bottom bottom-left detail-card-bg"></div>
            </div>
        </div>
        <h2 class="about-heading">Master Mind behind "Dive Into Skills"
        </h2>
        <div class="about-introduction">
            <div class="about-introduction-content">
                <h4 class="about-introduction-heading">Ahmad Raza
                </h4>
                <p class="about-paragraph">I am Ahmad Raza. I am a student of
                    bachelors of Software Engineering and
                    also a MERN Stack Developer, UI/UX
                    Designer and Content Creator. I'm also a
                    community mentor at iConnect Pakistan.</p>
                <a class="know-more-link" href="#">Know More</a>
            </div>

            <div class="image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/about/AhmadRaza365 Profile 1.png" alt="Dive Into Skills" class="about-image">
                <div class="triangle-card-top top-right intro-card-bg"></div>
                <div class="triangle-card-bottom bottom-left intro-card-bg"></div>
            </div>
        </div>
    </div>
</section>

<?php
// Include the share social icons section from your existing HTML
get_template_part('template-parts/share-social-icons');

get_footer();
?>