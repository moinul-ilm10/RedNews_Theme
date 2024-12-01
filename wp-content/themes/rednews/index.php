<?php
/*
* This template for displaying the header
*
*/

?>

<!DOCTYPE html>
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
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/RedNews_Logo.png" alt=""></a>
            </div>
            <!-- Regular navbar links for desktop -->
            <div class="navbar-link desktop-nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="./Blogs.html">Blogs</a></li>
                    <li><a href="./Courses.html">Courses</a></li>
                    <li><a href="./About.html">About</a></li>
                    <li><a href="./Contact.html">Contact</a></li>
                </ul>
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
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="./Blogs.html">Blogs</a></li>
                <li><a href="./Courses.html">Courses</a></li>
                <li><a href="./About.html">About</a></li>
                <li><a href="./Contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>

    <?php wp_footer(); ?>
</body>

</html>