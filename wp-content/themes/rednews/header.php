<?php

/**
 * Header template file.
 */
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header section  -->
    <header id="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <a href="<?php echo home_url('/'); ?>">
                    <?php
                    if (function_exists('the_custom_logo') && has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        // Fallback: Display site name if no logo is set
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </a>
            </div>
            <!-- Regular navbar links for desktop -->
            <div class="navbar-link desktop-nav">
                <!-- <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="./Blogs.html">Blogs</a></li>
                    <li><a href="./Courses.html">Courses</a></li>
                    <li><a href="./About.html">About</a></li>
                    <li><a href="./Contact.html">Contact</a></li>
                </ul> -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-link',
                    'container' => false,
                ));
                ?>
            </div>
            <!-- Hamburger icon for mobile -->
            <div class="mobile-menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-overlay"></div>
    <div class="mobile-nav-drawer">
        <div class="drawer-header">
            <i class="fa-solid fa-xmark close-drawer"></i>
        </div>
        <nav class="drawer-content">
            <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="./Blogs.html">Blogs</a></li>
                <li><a href="./Courses.html">Courses</a></li>
                <li><a href="./About.html">About</a></li>
                <li><a href="./Contact.html">Contact</a></li>
            </ul> -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'drawer-content',
                'container' => false,
            ));
            ?>
        </nav>
    </div>