<?php

/**
 * Template Name: Contact Page
 *
 * Dynamic Contact Page template for RedNews theme
 * Allows full content management through WordPress page editor
 */

get_header();
?>

<section id="contactPage">
    <div class="contact-container">
        <div class="contact-content">
            <h2 class="contact-content-heading">Have a Query in Mind?
            </h2>
            <p class="contact-content-text">You can reach out to me via email or social media platforms to discuss
                the query.</p>
            <div class="contact-details">
                <div class="details"><img src="<?php echo get_template_directory_uri(); ?>/assets/contact/navigate.svg" alt="">
                    <p>Muzaffargarh, Punjab, Pakistan
                    </p>
                </div>
                <div class="details"><img src="<?php echo get_template_directory_uri(); ?>/assets/contact/ant-design-mail.svg" alt="">
                    <p>diveintoskills@gmail.com
                    </p>
                </div>
                <div class="details"><img src="<?php echo get_template_directory_uri(); ?>/assets/contact/phone-call.svg" alt="">
                    <p>+923001312712
                    </p>
                </div>
            </div>

        </div>
        <div class="contact-form">
            <h3 class="email-heading">Send Me Email</h3>
            <form class="form-container" action="#" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Your Phone Number">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
            <p class="contact-or">or</p>
            <div class="contact-social-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-facebook-fill0.svg" alt="facebook_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-instagram-fill0.svg" alt="instagram_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-twitter-fill0.svg" alt="twitter_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-linkedin-box-fill0.svg" alt="linkedIn_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/youtube_fill.svg" alt="YouTube_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-slack-fill0.svg" alt="slack_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/contact/akar-icons-discord-fill0.svg" alt="discord_icon">
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>