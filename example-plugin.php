<?php
/**
 * Plugin Name: WP PHPUnit Example Plugin
 * Description: A complete example for using WP PHPUnit with plugin development
 * Plugin URI: https://github.com/wp-phpunit/
 * Author: Evan Mattson
 * Author URI: https://aaemnnost.tv
 * Version: 1.0
 */
require_once __DIR__. '/vendor/autoload.php';

use Example\Plugin;

add_action("init", 'example_plugin_file_line');

function example_plugin_file_line(){
    return  plugin_basename( __FILE__ );
}

new Plugin();