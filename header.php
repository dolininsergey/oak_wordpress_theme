<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oak-theme
 */


// if( !empty( $settings_options['main_logo']['url'] ) ) {
//     $main_logo = $settings_options['main_logo']['url'];
//     echo 'Option 1 - Work';
// };

// if( !empty( $db_settings_options['main_logo']['url'] ) ) {
//     $main_logo = $db_settings_options['main_logo']['url'];
//     echo 'Option 2 - Work';
// };
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>OAK - HTML Theme</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
   <?php wp_head(); ?>
</head>

<body>
    <!-- Preloader -->
    <div class="cover"></div>

    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo fw_resize(fw_get_db_settings_option('logo/url', 'http://oak/wp-content/themes/oak-theme/img/logo.png'), 93, 21);?>" alt="Logo"> 
                </a>
            </div>
            
            <!-- Menu Hamburger (Default) -->
            <button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>
            
            <div class="menu-wrap" style="background-image: url(<?php bloginfo('template_directory') ?>/img/nav_bg.jpg)">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
<!--                         <div class="search-wrap js-ui-search">
                            <input class="js-ui-text" type="text" placeholder="Search Here...">
                            <span class="eks js-ui-close"></span>
                        </div> -->
                        <?php get_search_form(); ?>
                    </div>
                    <nav class="menu">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => '',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'menu-list',
                                'container_id'    => '',
                                'menu_class'      => 'menu-list',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ) );
                         ?>
<!--                         <div class="menu-list">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">- Default</a></li>
                                        <li><a href="index-architecture.html">- Architecture</a></li>
                                        <li><a href="index-full-slider.html">- Slider Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-2column.html">-Portfolio 2 Column</a></li>
                                        <li><a href="portfolio-3column.html">-Portfolio 3 Column</a></li>
                                        <li><a href="portfolio-masonry.html">-Portfolio Masonry</a></li>
                                        <li><a href="portfolio-dribbble.html">-Portfolio Dribbble</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                        <li><a href="single-blog.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div> -->
                    </nav>

                    <div class="hidden-xs">
                        <div class="menu-social-media">
                            <ul>
                               <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                               <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                               <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                               <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                               <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                        </div>

                        <div class="menu-information">
                            <ul>
                                <li><span>T:</span> 003 124 115</li>
                                <li><span>E:</span> info@mail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Menu Hamburger (Default) -->

        </div>
    </div>
