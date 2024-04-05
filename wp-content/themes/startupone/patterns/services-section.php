<?php

/**
 * Title:Services Section
 * Slug: startupone/services-section
 * Categories: startupone-patterns
 */
$startupone_url = trailingslashit(get_stylesheet_directory_uri());
$startupone_images = array(
    $startupone_url . 'assets/images/icon_1.png',
    $startupone_url . 'assets/images/icon_2.png',
    $startupone_url . 'assets/images/icon_3.png',
    $startupone_url . 'assets/images/icon_4.png',
    $startupone_url . 'assets/images/icon_5.png',
    $startupone_url . 'assets/images/icon_6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"7rem","bottom":"7rem"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top"} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%","className":"fotawp-flip-up"} -->
        <div class="wp-block-column is-vertically-aligned-top fotawp-flip-up" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"750px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
                <h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_e('Services', 'startupone') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_e('What We Offer', 'startupone') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-top fotawp-fade-up" style="flex-basis:50%"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","lineHeight":1.9}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px;line-height:1.9"><?php echo esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"0px","bottom":{"width":"1px"}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-button-hover-secondary-color"} -->
                <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><?php echo esc_html_e('More Services', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"80px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6271,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[0]) ?>" alt="" class="wp-image-6271" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('Business Strategy', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6386,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[1]) ?>" alt="" class="wp-image-6386" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px","bottom":"0"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;margin-bottom:0;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('Branding &amp; Growth', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6387,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[2]) ?>" alt="" class="wp-image-6387" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('StartUp Ideas', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"80px"},"margin":{"top":"80px"}}}} -->
    <div class="wp-block-columns" style="margin-top:80px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6389,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[3]) ?>" alt="" class="wp-image-6389" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('Content Writing', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6390,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[4]) ?>" alt="" class="wp-image-6390" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px","bottom":"0"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;margin-bottom:0;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('Financial Management', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:image {"id":6391,"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($startupone_images[5]) ?>" alt="" class="wp-image-6391" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:64px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"30px"}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:30px;font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html_e('Digital Marketing', 'startupone') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'startupone') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"typography":{"textDecoration":"none"},"border":{"radius":"40px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"primary","className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:40px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html_e('Read More', 'startupone') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->