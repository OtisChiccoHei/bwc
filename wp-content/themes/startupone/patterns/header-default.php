<?php

/**
 * Title: Default Header
 * Slug: startupone/header-default
 * Categories: startupone-patterns, header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"var:preset|spacing|50","bottom":"0px","left":"var:preset|spacing|50"}}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:0px;padding-right:var(--wp--preset--spacing--50);padding-bottom:0px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
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
</div>
<!-- /wp:group -->