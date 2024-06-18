<?php
/**
 * Plugin Name: PHPUnit Starter for WordPress Plugin
 * Description: A starter kit for unit testing WordPress plugins using PHPUnit.
 * Author: Evan Mattson & Dev Kabir
 * Version: 1.0
 */
require_once __DIR__ . '/vendor/autoload.php';

use Example\Plugin;

add_action( 'init', 'example_plugin_file_line' );

/**
 * Returns the basename of the current plugin file.
 *
 * @return string The basename of the current plugin file.
 */
function example_plugin_file_line() {
	return plugin_basename( __FILE__ );
}

new Plugin();
