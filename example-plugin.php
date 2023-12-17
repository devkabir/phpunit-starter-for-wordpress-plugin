<?php
/**
 * Plugin Name: PHPUnit Starter for WordPress Plugin
 * Description: A starter kit for unit testing WordPress plugins using PHPUnit.
 * Author: Evan Mattson & Dev Kabir
 * Version: 1.0
 */
require_once __DIR__. '/vendor/autoload.php';

use Example\Plugin;

add_action("init", 'example_plugin_file_line');

function example_plugin_file_line(){
    return  plugin_basename( __FILE__ );
}

new Plugin();