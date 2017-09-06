<?php

/**
 * Disable Emoji Styles and Scripts
 */
function disable_wp_emojicons() {
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
add_action( 'init', 'disable_wp_emojicons' );

/**
 * This custom function should help removing all links in the header and footer.
 */
function vd_remove_json_api() {
    // Remove the REST API lines from the HTML Header
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // Remove the REST API endpoint.
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Turn off oEmbed auto discovery.
    add_filter( 'embed_oembed_discover', '__return_false' );

    // Don't filter oEmbed results.
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

    // Remove oEmbed discovery links.
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );

    // Remove all embeds rewrite rules.
    // add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
}
add_action( 'after_setup_theme', 'vd_remove_json_api' );

function vd_disable_json_api() {
    // Filters for WP-API version 1.x
    add_filter( 'json_enabled', '__return_false' );
    add_filter( 'json_jsonp_enabled', '__return_false' );

    // Filters for WP-API version 2.x
    add_filter( 'rest_enabled', '__return_false' );
    add_filter( 'rest_jsonp_enabled', '__return_false' );
}
add_action( 'after_setup_theme', 'vd_disable_json_api' );

/** Remove Weblog Client Link */
remove_action( 'wp_head', 'rsd_link' );

/** Remove Windows Live Writer Manifest Link */
remove_action( 'wp_head', 'wlwmanifest_link' );

/** Remove WP Generator Meta Tag */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'qtranxf_wp_head_meta_generator' );

/** remove wp version param from any enqueued scripts */
function vd_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vd_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vd_remove_wp_ver_css_js', 9999 );

add_filter( 'body_class', 'custom_body_class' );
function custom_body_class($classes) {
	if (is_home()) {
		$classes[] = "body-wrapper static";
	} elseif ( is_page_template( 'page-example.php' ) ) {
		$classes[] = 'example';
	}
	return $classes;
}