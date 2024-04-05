<?php

/**
 * Title: About Us Section
 * Slug: startupone/about-us
 * Categories: startupone-patterns
 */
$startupone_url = trailingslashit(get_stylesheet_directory_uri());
$startupone_images = array(
    $startupone_url . 'assets/images/about_img.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"background-alt"} -->
    <div class="wp-block-columns are-vertically-aligned-center has-background-alt-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"fotawp-flip-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-flip-up" style="flex-basis:60%"><!-- wp:cover {"url":"<?php echo esc_url($startupone_images[0]) ?>","id":6244,"dimRatio":0,"minHeight":580,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6244" alt="" src="<?php echo esc_url($startupone_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"60px","right":"60px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:60px;padding-bottom:20px;padding-left:60px;flex-basis:45%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"48px","lineHeight":"1.3"}},"textColor":"heading-color","className":"fotawp-flip-up"} -->
            <h2 class="wp-block-heading has-text-align-left fotawp-flip-up has-heading-color-color has-text-color" style="font-size:48px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Delivering Top-Notch Service for a Decade', 'startupone') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground","className":"fotawp-fade-up"} -->
            <p class="has-text-align-left fotawp-fade-up has-foreground-color has-text-color" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"fotawp-slide-up","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"42px","bottom":"0"}}}} -->
            <div class="wp-block-buttons fotawp-slide-up" style="margin-top:42px;margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"border":{"radius":"50px","width":"0px","style":"none"},"spacing":{"padding":{"left":"30px","right":"30px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px"><?php esc_html_e('Discover More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->