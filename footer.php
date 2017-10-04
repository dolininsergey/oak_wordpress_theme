<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oak-theme
 */

?>

    <div class="footer margin-top">
        <div class="container">
            <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <h4><?php echo fw_get_db_settings_option('footer-header-1'); ?></h4>
                                    <address><?php echo fw_get_db_settings_option('footer-field-1'); ?></address>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                               <h4><?php echo fw_get_db_settings_option('footer-header-2'); ?></h4>
                                <p><?php echo fw_get_db_settings_option('footer-field-2'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                            <ul class="social-media">
                                <?php if(fw_get_db_settings_option('facebook-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('facebook-social'); ?>" target="_blank"><i class="iconmoon-facebook"></i></a></li> <?php } ?>
                                <?php if(fw_get_db_settings_option('twitter-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('twitter-social'); ?>" target="_blank"><i class="iconmoon-twitter"></i></a></li> <?php } ?>
                                <?php if(fw_get_db_settings_option('flickr-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('flickr-social'); ?>" target="_blank"><i class="iconmoon-flickr2"></i></a></li> <?php } ?>
                                <?php if(fw_get_db_settings_option('dribbble-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('dribbble-social'); ?>" target="_blank"><i class="iconmoon-dribbble3"></i></a></li> <?php } ?>
                                <?php if(fw_get_db_settings_option('pinterest-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('pinterest-social'); ?>" target="_blank"><i class="iconmoon-pinterest"></i></a></li> <?php } ?>
                                <?php if(fw_get_db_settings_option('linkedin-social')) { ?> <li><a href="<?php echo fw_get_db_settings_option('linkedin-social'); ?>" target="_blank"><i class="iconmoon-linkedin2"></i></a></li> <?php } ?>
                            </ul>
                            <span class="copyright-mark"><?php echo fw_get_db_settings_option('footer-copyright'); ?></span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

    <?php wp_footer(); ?>
</body>
</html>	
