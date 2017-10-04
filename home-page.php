<?php
/*
Template Name: Home Page 
*/
?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oak-theme
 */

get_header(); ?>

    <div class="container">
        <div class="slider-wrapper">
            <div class="slider-description">
                <div class="slider-description-inner">
                    <h1><?php echo fw_get_db_settings_option('slider-inner-text-bold'); ?><span><?php echo fw_get_db_settings_option('slider-inner-text-turquoise'); ?></span></h1>
                </div>
                <div class="cd-intro">
                    <div class="cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible"><?php echo fw_get_db_settings_option('slider-ticker-1'); ?></b>
                            <b><?php echo fw_get_db_settings_option('slider-ticker-2'); ?></b>
                            <b><?php echo fw_get_db_settings_option('slider-ticker-3'); ?></b>
                        </span>
                    </div>
                </div>
            </div>
            <div id="slider-ef" class="slider-images-wrapper">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('main_slider_img_1/url', 'http://oak/wp-content/themes/oak-theme/img/slider/image_1.jpg'), 1170, 610);?>" alt="Slider Image 1">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('main_slider_img_2/url', 'http://oak/wp-content/themes/oak-theme/img/slider/image_1.jpg'), 1170, 610);?>" alt="Slider Image 2">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('main_slider_img_3/url', 'http://oak/wp-content/themes/oak-theme/img/slider/image_1.jpg'), 1170, 610);?>" alt="Slider Image 3">
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="history-wrapper">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                <div class="row">
                    <article>
                        <h1><?php echo fw_get_db_settings_option('agency-section-header'); ?></h1>
                        <hr>
                        <h4><?php echo fw_get_db_settings_option('agency-section-underheader'); ?></h4>
                        <p>
                        <br/><?php echo fw_get_db_settings_option('agency-text-description'); ?></p>
                    </article>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="row">
                    <div id="history-images" class="owl-carousel">
                        <img src="<?php echo fw_resize(fw_get_db_settings_option('agency-slider-1/url', 'http://oak/wp-content/themes/oak-theme/img/about_img.jpg'), 470, 500);?>" alt="About Image 1">
                        <img src="<?php echo fw_resize(fw_get_db_settings_option('agency-slider-2/url', 'http://oak/wp-content/themes/oak-theme/img/about_img2.jpg'), 470, 500);?>" alt="About Image 2">
                        <img src="<?php echo fw_resize(fw_get_db_settings_option('agency-slider-3/url', 'http://oak/wp-content/themes/oak-theme/img/about_img3.jpg'), 470, 500);?>" alt="About Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1><?php echo fw_get_db_settings_option('why-us-header'); ?></h1>
            <hr>
            <h6><?php echo fw_get_db_settings_option('why-us-underheader'); ?></h6>
        </div>
        <div class="services-home-page">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-icon">
                        <span><i class="<?php echo fw_get_db_settings_option('why-us-item1-icon'); ?>"></i></span>
                        <hr>
                    </div>
                    <h4><?php echo fw_get_db_settings_option('why-us-item1-header'); ?></h4>
                    <p><?php echo fw_get_db_settings_option('why-us-item1-text'); ?></p>
                </div>
                <div class="col-md-4">
                    <div class="services-icon">
                        <span><i class="<?php echo fw_get_db_settings_option('why-us-item2-icon'); ?>"></i></span>
                        <hr>
                    </div>
                    <h4><?php echo fw_get_db_settings_option('why-us-item2-header'); ?></h4>
                    <p><?php echo fw_get_db_settings_option('why-us-item2-text'); ?></p>
                </div>
                <div class="col-md-4">
                    <div class="services-icon">
                        <span><i class="<?php echo fw_get_db_settings_option('why-us-item3-icon'); ?>"></i></span>
                        <hr>
                    </div>
                    <h4><?php echo fw_get_db_settings_option('why-us-item3-header'); ?></h4>
                    <p><?php echo fw_get_db_settings_option('why-us-item3-text'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1><?php echo fw_get_db_settings_option('our-work-header'); ?></h1>
            <hr>
            <h6><?php echo fw_get_db_settings_option('our-work-underheader'); ?></h6>
        </div>
        <div class="portfolio-wrapper">
            <button class="nav">
                <span class="icon-container">
                    <span class="line line01"></span>
                    <span class="line line02"></span>
                    <span class="line line03"></span>
                    <span class="line line04"></span>
                </span>
            </button>
            <div class="works-filter">
                <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
                <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
                <a href="javascript:void(0)" class="filter" data-filter="web">Web Design</a>
                <a href="javascript:void(0)" class="filter" data-filter="graphic">Graphic Design</a>
            </div>
            <div class="js-masonry">
                <div class="row" id="work-grid">
                    <!-- Begin of Thumbs Portfolio -->
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-1/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_1.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">250</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix web">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-2/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_2.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">60</span>
                                </a>
                                <div class="details">
                                    <span class="title">WATCH-J</span>
                                    <span class="info">NEW TREND FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix graphic">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-3/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_3.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">1060</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-4/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_4.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">900</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-5/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_5.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">979</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-6/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_6.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">1024</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-7/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_7.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">2048</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-8/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_8.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">256</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="<?php echo fw_resize(fw_get_db_settings_option('our-work-item-9/url', 'http://oak/wp-content/themes/oak-theme/img/home-portfolio/img_9.jpg'), 370, 400);?>" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">256</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="newsletter">
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-left">
                        <div class="newsletter-left-inner">
                            <h1>STAY INFORMED <br> WITH OUR <b>NEWSLETTER</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-right" style="background: url(<?php bloginfo('template_directory') ?>/img/newsletter-bg.jpg)">
                        <div class="newsletter-right-inner">
                            <form>
                                <input type="text" name="newsletter" placeholder="ENTER YOUR EMAIL">
                                <input type="submit" value="SUBSCRIBE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>