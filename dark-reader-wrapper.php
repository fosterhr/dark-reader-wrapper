<?php
/**
 * Plugin Name: Dark Reader Wrapper
 * Plugin URI: https://github.com/fosterhr/dark-reader-wrapper
 * Description: A plugin to enable Dark Reader on all pages.
 * Version: 1.0
 * Author: Foster Reichert
 * Author URI: https://links.fosterreichert.com/
 */

add_action("wp_enqueue_scripts", "dark_reader_enqueue_scripts");

function dark_reader_enqueue_scripts() {
	wp_enqueue_script("dark-reader", "https://cdnjs.cloudflare.com/ajax/libs/darkreader/4.9.58/darkreader.min.js", array(), "4.9.58", false);
	wp_add_inline_script("dark-reader", "DarkReader.enable();");
}
