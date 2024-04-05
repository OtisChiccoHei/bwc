<?php

/**
 * Title: Header with Banner
 * Slug: startupone/header-with-banner
 * Categories: startupone-patterns
 */
$startupone_url = trailingslashit(get_stylesheet_directory_uri());
$startupone_images = array(
    $startupone_url . 'assets/images/banner_image.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|50","bottom":"0px","left":"var:preset|spacing|50"}}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:0px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","textTransform":"none","lineHeight":"1.1"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}},"color":{"text":"var:preset|color|foregound-alt"}}}},"fontSize":"large","fontFamily":"outfit"} /-->

            <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","layout":{"type":"flex","justifyContent":"left"}} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px"},"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-buttons" style="margin-top:0px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"14px","bottom":"14px"}},"typography":{"fontSize":"18px"},"border":{"radius":"50px","width":"1px"}},"borderColor":"foregound-alt","className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:14px;padding-right:var(--wp--preset--spacing--70);padding-bottom:14px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Pricing', 'startupone') ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"typography":{"fontSize":"18px"},"border":{"radius":"50px","width":"0px","style":"none"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"15px","bottom":"15px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:15px;padding-right:var(--wp--preset--spacing--60);padding-bottom:15px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Login', 'startupone') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"margin":{"top":"70px","bottom":"60px"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:70px;margin-bottom:60px"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"74px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","className":"fotawp-flip-up","fontFamily":"outfit"} -->
                <h2 class="wp-block-heading has-text-align-left fotawp-flip-up has-foregound-alt-color has-text-color has-link-color has-outfit-font-family" style="font-size:74px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Ignite Your Brands Success with Our Agency', 'startupone') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-lite"}}}},"textColor":"accent-lite","className":"fotawp-fade-up","fontSize":"medium"} -->
                <p class="has-text-align-left fotawp-fade-up has-accent-lite-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'startupone') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"fotawp-slide-up","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"52px"},"blockGap":"var:preset|spacing|40"}}} -->
                <div class="wp-block-buttons fotawp-slide-up" style="margin-top:52px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","style":{"typography":{"fontSize":"18px"},"border":{"width":"1px","color":"#FEFEFE","radius":"50px"},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:50px;padding-top:15px;padding-bottom:15px"><?php esc_html_e('Get Started Today', 'startupone') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"17px","bottom":"17px"}},"typography":{"fontSize":"18px"},"border":{"radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:17px;padding-right:var(--wp--preset--spacing--60);padding-bottom:17px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Try Demo', 'startupone') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"align":"wide","id":6214,"sizeSlug":"large","linkDestination":"none","className":"fotawp-flip-up"} -->
    <figure class="wp-block-image alignwide size-large fotawp-flip-up"><img src="<?php echo esc_url($startupone_images[0]) ?>" alt="" class="wp-image-6214" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->