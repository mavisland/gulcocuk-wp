<?php if (!defined('FW')) die('Forbidden');

/**
 * Theme’s filters and actions
 */
if (!function_exists('gulcocuk_setup')) :
	function gulcocuk_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action('after_setup_theme', 'gulcocuk_setup');

function gulcocuk_content_width() {
	$GLOBALS['content_width'] = apply_filters('gulcocuk_content_width', 640);
}
add_action('after_setup_theme', 'gulcocuk_content_width', 0);

/**
 * Adding Custom post type counts in 'Right now' Dashboard widget.
 * Acording this changes :
 * - https://core.trac.wordpress.org/ticket/26571
 * - https://core.trac.wordpress.org/ticket/26495
 * now you can't use 'right_now_*' action API to show your custom post type count from your Dashboard.
 * But if you running WP 3.8 or above, you can use 'dashboard_glance_items' instead.
 *
 * @package     Wordpress
 * @subpackage  Hooks
 * @author      Fery Wardiyanto <ferywardiyanto@gmail.com>
 * @link        http://feryardiant.github.com
 * @version     1.0
 */

// Showing all custom posts count
function custom_posttype_glance_items() {
    $glances = array();

    $args = array(
        'public'   => true,  // Showing public post types only
        '_builtin' => false  // Except the build-in wp post types (page, post, attachments)
    );

    // Getting your custom post types
    $post_types = get_post_types($args, 'object', 'and');

    foreach ($post_types as $post_type) {
        // Counting each post
        $num_posts = wp_count_posts($post_type->name);

        // Number format
        $num   = number_format_i18n($num_posts->publish);
        // Text format
        $text  = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));

        // If use capable to edit the post type
        if (current_user_can('edit_posts')) {
            // Show with link
            $glance = '<a class="'.$post_type->name.'-count" href="'.admin_url('edit.php?post_type='.$post_type->name).'">'.$num.' '.$text.'</a>';
        } else {
            // Show without link
            $glance = '<span class="'.$post_type->name.'-count">'.$num.' '.$text.'</span>';
        }

        // Save in array
        $glances[] = $glance;
    }

    // return them
    return $glances;
}
// Add custom post types count action to WP Dashboard
add_action('dashboard_glance_items', 'custom_posttype_glance_items');
