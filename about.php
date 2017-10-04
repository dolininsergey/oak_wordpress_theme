<?php
/*
Template Name: About Page
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
    <div class="header-page ef-parallax-bg" style="background-image:url(<?php echo fw_resize(fw_get_db_settings_option('about-bg-image-1/url', 'http://oak/wp-content/themes/oak-theme/img/about-header.jpg'), 1170, 550);?>)">
        <div class="col-md-6 col-md-offset-6">
            <div class="row">
                <div class="inner-content">
                    <div class="header-content">
                        <h1><?php echo fw_get_db_settings_option('about-header-1'); ?></h1>
                        <hr>
                        <p><?php echo fw_get_db_settings_option('about-header-1-underheader'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title near-content">
        <h1><?php echo fw_get_db_settings_option('about-header-2'); ?></h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p style="font-size: 18px; line-height: 26px;"><?php echo fw_get_db_settings_option('about-text-block-1'); ?></p>
        </div>
        <div class="col-md-4">
            <p><?php echo fw_get_db_settings_option('about-text-block-2'); ?></p>
        </div>
        <div class="col-md-4">
            <p><?php echo fw_get_db_settings_option('about-text-block-3'); ?></p>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="row">
        <div class="col-md-12">
            <div class="our-story wow fadeInUp" style="background: url(<?php echo fw_resize(fw_get_db_settings_option('about-bg-image-2/url', 'http://oak/wp-content/themes/oak-theme/img/our-story.jpg'), 870, 500);?>) no-repeat" data-wow-duration="0.5s" data-wow-delay="0.2s">
               <div class="col-md-6 col-md-offset-6">
                    <div class="our-story-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="our-story-content-inner">
                            <h1><?php echo fw_get_db_settings_option('about-header-3'); ?></h1>
                            <hr>
                            <p><?php echo fw_get_db_settings_option('about-text-block-4'); ?></p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title">
        <h1><?php echo fw_get_db_settings_option('about-header-4'); ?></h1>
        <hr>
        <h6><?php echo fw_get_db_settings_option('about-header-4-underheader'); ?></h6>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="services-home-page">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="<?php echo fw_get_db_settings_option('about-item1-icon'); ?>"></span>
                            <hr>
                        </div>
                        <h4><?php echo fw_get_db_settings_option('about-item1-header'); ?></h4>
                        <p><?php echo fw_get_db_settings_option('about-item1-text'); ?></p>                
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="<?php echo fw_get_db_settings_option('about-item2-icon'); ?>"></span>
                            <hr>
                        </div>
                        <h4><?php echo fw_get_db_settings_option('about-item2-header'); ?></h4>
                        <p><?php echo fw_get_db_settings_option('about-item2-text'); ?></p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="<?php echo fw_get_db_settings_option('about-item3-icon'); ?>"></span>
                            <hr>
                        </div>
                        <h4><?php echo fw_get_db_settings_option('about-item3-header'); ?></h4>
                        <p><?php echo fw_get_db_settings_option('about-item3-text'); ?></p>                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
            <div class="our-story-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('about-bg-image-3/url', 'http://oak/wp-content/themes/oak-theme/img/services.jpg'), 680, 675);?>" alt="Our Story">
            </div>
    </div>
</div>

<?php if(fw_get_db_settings_option('about-member1-image/url') || fw_get_db_settings_option('about-member2-image/url') || 
            fw_get_db_settings_option('about-member3-image/url') || fw_get_db_settings_option('about-member4-image/url')) { ?>
<div class="container margin-top">
    <div class="main-title">
        <h1><?php echo fw_get_db_settings_option('about-header-5'); ?></h1>
        <hr>
        <h6><?php echo fw_get_db_settings_option('about-header-5-underheader'); ?></h6>
    </div>
    <div class="owl-carousel team">
<?php if(fw_get_db_settings_option('about-member1-image/url')) { ?>
        <div>
            <div class="img member"> 
                <img src="<?php echo fw_resize(fw_get_db_settings_option('about-member1-image/url'), 350, 400);?>" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position"><?php echo fw_get_db_settings_option('about-member1-position'); ?></span>
                            <hr>
                            <ul class="member-social-media">
                            <?php if(fw_get_db_settings_option('about-member1-facebook')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member1-facebook'); ?>" target="_blank">Facebook</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member1-twitter')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member1-twitter'); ?>" target="_blank">Twitter</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member1-dribbble')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member1-dribbble'); ?>" target="_blank">Dribbble</a></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name"><?php echo fw_get_db_settings_option('about-member1-name'); ?></span>
        </div>          
<?php } ?>
<?php if(fw_get_db_settings_option('about-member2-image/url')) { ?>
        <div>
            <div class="img member">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('about-member2-image/url'), 350, 400);?>" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position"><?php echo fw_get_db_settings_option('about-member2-position'); ?></span>
                            <hr>
                            <ul class="member-social-media">
                            <?php if(fw_get_db_settings_option('about-member2-facebook')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member2-facebook'); ?>" target="_blank">Facebook</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member2-twitter')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member2-twitter'); ?>" target="_blank">Twitter</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member2-dribbble')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member2-dribbble'); ?>" target="_blank">Dribbble</a></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name"><?php echo fw_get_db_settings_option('about-member2-name'); ?></span>
        </div>          
<?php } ?>
<?php if(fw_get_db_settings_option('about-member3-image/url')) { ?>
        <div>
            <div class="img member">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('about-member3-image/url'), 350, 400);?>" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position"><?php echo fw_get_db_settings_option('about-member3-position'); ?></span>
                            <hr>
                            <ul class="member-social-media">
                            <?php if(fw_get_db_settings_option('about-member3-facebook')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member3-facebook'); ?>" target="_blank">Facebook</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member3-twitter')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member3-twitter'); ?>" target="_blank">Twitter</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member3-dribbble')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member3-dribbble'); ?>" target="_blank">Dribbble</a></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name"><?php echo fw_get_db_settings_option('about-member3-name'); ?></span>
        </div>          
<?php } ?>
<?php if(fw_get_db_settings_option('about-member4-image/url')) { ?>
        <div>
            <div class="img member">
                <img src="<?php echo fw_resize(fw_get_db_settings_option('about-member4-image/url'), 350, 400);?>" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position"><?php echo fw_get_db_settings_option('about-member4-position'); ?></span>
                            <hr>
                            <ul class="member-social-media">
                            <?php if(fw_get_db_settings_option('about-member4-facebook')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member4-facebook'); ?>" target="_blank">Facebook</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member4-twitter')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member4-twitter'); ?>" target="_blank">Twitter</a></li><?php } ?>
                            <?php if(fw_get_db_settings_option('about-member4-dribbble')) { ?><li><a href="<?php echo fw_get_db_settings_option('about-member4-dribbble'); ?>" target="_blank">Dribbble</a></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name"><?php echo fw_get_db_settings_option('about-member4-name'); ?></span>
        </div> 
<?php } ?>           
    </div>
</div>
    <?php } ?>
<?php if(fw_get_db_settings_option('about-client1-image/url') || fw_get_db_settings_option('about-client2-image/url') || 
            fw_get_db_settings_option('about-client3-image/url') || fw_get_db_settings_option('about-client4-image/url')) { ?>    
<div class="container margin-top">
    <div class="clients-wrapper">
        <ul class="client-thumb">           
            <?php if(fw_get_db_settings_option('about-client1-image/url')) { ?><li><a href="#"><img src="<?php echo fw_resize(fw_get_db_settings_option('about-client1-image/url', 'http://oak/wp-content/themes/oak-theme/img/clients/client_1.jpg'), 125, 80);?>" alt="Client 1"></a></li> <?php } ?>
            <?php if(fw_get_db_settings_option('about-client2-image/url')) { ?><li><a href="#"><img src="<?php echo fw_resize(fw_get_db_settings_option('about-client2-image/url', 'http://oak/wp-content/themes/oak-theme/img/clients/client_1.jpg'), 125, 80);?>" alt="Client 2"></a></li> <?php } ?>
            <?php if(fw_get_db_settings_option('about-client3-image/url')) { ?><li><a href="#"><img src="<?php echo fw_resize(fw_get_db_settings_option('about-client3-image/url', 'http://oak/wp-content/themes/oak-theme/img/clients/client_1.jpg'), 125, 80);?>" alt="Client 3"></a></li> <?php } ?>
            <?php if(fw_get_db_settings_option('about-client4-image/url')) { ?><li><a href="#"><img src="<?php echo fw_resize(fw_get_db_settings_option('about-client4-image/url', 'http://oak/wp-content/themes/oak-theme/img/clients/client_1.jpg'), 125, 80);?>" alt="Client 4"></a></li> <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
<?php get_footer(); ?>