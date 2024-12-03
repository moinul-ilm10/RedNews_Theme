<?php

/**
 * Footer template file.
 */
?>

<footer id="footerSection">
    <div class="footer-container">
        <div class="footer-body">
            <!-- Footer Heading -->
            <h3 class="footer-heading"><?php echo esc_html(get_theme_mod('footer_heading', 'Dive Into Skills')); ?></h3>

            <!-- Footer Content -->
            <div class="footer-content">
                <!-- Paragraph -->
                <p><?php echo esc_html(get_theme_mod('footer_description', 'The latest articles and courses to help you upgrade your skills.')); ?></p>

                <!-- Footer Menus -->
                <div class="footer-menu-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_1',
                        'menu_class' => '',
                        'container' => 'ul', // Keep the same structure as HTML template
                    ));
                    ?>
                </div>
                <div class="footer-menu-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_2',
                        'menu_class' => '',
                        'container' => 'ul',
                    ));
                    ?>
                </div>
            </div>

            <!-- Social Links -->
            <div class="footer-social-link">
                <img src="./assets/social/akar-icons_facebook-fill.svg" alt="facebook_icon">
                <img src="./asset/social/akar-icons_instagram-fill.svg" alt="instagram_icon">
                <img src="./asset/social/akar-icons_twitter-fill.svg" alt="twitter_icon">
                <img src="./asset/social/akar-icons_linkedin-box-fill.svg" alt="linkedIn_icon">
                <img src="./asset/social/akar-icons_youtube-fill.svg" alt="YouTube_icon">
                <img src="./asset/social/akar-icons_slack-fill.svg" alt="slack_icon">
                <img src="./asset/social/akar-icons_discord-fill.svg" alt="discord_icon">
            </div>

            <!-- Footnote -->
            <div class="footer-footnote">
                <p><?php echo esc_html(get_theme_mod('footer_copyright', 'COPYRIGHT @ 2022 Dive Into Skills')); ?></p>
                <p><?php echo esc_html(get_theme_mod('footer_developed_by', 'Developed by: Ahmad Raza')); ?></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>

<!-- <img src="./assets/social/akar-icons_facebook-fill.svg" alt="" srcset=""> -->