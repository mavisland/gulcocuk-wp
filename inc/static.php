<?php if (!defined('FW')) die('Forbidden');

/**
 * Enqueue all theme scripts and styles
 */
wp_enqueue_style("style", get_template_directory_uri() . get_stylesheet_uri());

wp_enqueue_script("html5shiv", get_template_directory_uri() . "/assets/js/html5shiv.min.js");
wp_enqueue_script("respond", get_template_directory_uri() . "/assets/js/respond.min.js");

wp_script_add_data("html5shiv", "conditional", "lt IE 9");
wp_script_add_data("respond", "conditional", "lt IE 9");

wp_enqueue_script("scripts", get_template_directory_uri() . "/assets/js/scripts.js", array("jquery"), "", true);
