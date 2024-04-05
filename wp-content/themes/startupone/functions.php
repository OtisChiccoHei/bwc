<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function startupone_scripts()
{
    // enqueue parent style
    wp_enqueue_style('startupone-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'startupone_scripts');

if (!function_exists('startupone_excerpt_limit')) {
    function startupone_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'startupone_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since startupone 1.0.0
 *
 * @return void
 */
function startupone_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'startupone-patterns' => array('label' => __('StartupOne Patterns', 'startupone'))
    );

    $block_pattern_categories = apply_filters('startupone_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'startupone_register_pattern_category', 9);
