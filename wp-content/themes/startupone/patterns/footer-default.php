<?php

/**
 * Title: Default Footer
 * Slug: startupone/footer-default
 * Categories: startupone-patterns, footer
 */
$startupone_url = trailingslashit(get_stylesheet_directory_uri());
$startupone_images = array(
    $startupone_url . 'assets/images/payment_methods.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"heading-color","textColor":"foregound-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-foregound-alt-color has-heading-color-background-color has-text-color has-background" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
                <div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","textTransform":"none"}},"textColor":"foregound-alt","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px;text-transform:none"><?php esc_html_e('StartupOne', 'startupone') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam mauris sed ma', 'startupone') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"33.33%"} -->
                <div class="wp-block-column" style="flex-basis:33.33%"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Products', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"lineHeight":2}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Cozy Addons for Elementor', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Cozy Essentials', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('CT Patterns', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('FotaWP', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Fotablog', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Fota Agency', 'startupone') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Company', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"lineHeight":2}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('About Us', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Career', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Blog', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Policy', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Term &amp; Conditions', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Legal', 'startupone') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Downloads', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"lineHeight":2}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('IOS', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Android', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Mac', 'startupone') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Windows', 'startupone') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
        <p><?php esc_html_e('Proudly powered by WordPress&nbsp;|&nbsp;Theme: startupone by&nbsp; CozyThemes.', 'startupone') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"fotawp-scrollto-top is-style-button-hover-white-bgcolor"} -->
    <div class="wp-block-button fotawp-scrollto-top is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'startupone') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->