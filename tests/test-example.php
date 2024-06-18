<?php

class Example_Test extends PHPUnit_Framework_TestCase {
	protected function setUp() {
		parent::setUp();
	}
	/**
	 * Test if WordPress and the plugin are loaded correctly.
	 *
	 * @return void
	 */
	function test_wordpress_and_plugin_are_loaded() {
		$this->assertTrue( function_exists( 'do_action' ) );
		$this->assertTrue( function_exists( 'example_plugin_file_line' ) );
		$this->assertTrue( class_exists( 'Example\\Plugin' ) );
	}

	/**
	 * Test if the function callback is working correctly.
	 *
	 * @return void
	 */
	function test_function_callback_working() {
		$this->assertSame( 10, has_action( 'init', 'example_plugin_file_line' ), 'action is loaded' );

		$this->assertTrue( function_exists( 'example_plugin_file_line' ), 'function is loaded' );

		$this->assertSame( example_plugin_file_line(), 'C:/laragon/www/local/wpmu/wp-content/plugins/example-plugin/example-plugin.php', 'function works' );
	}

	/**
	 * Test if the class callback is working correctly.
	 *
	 * @return void
	 */
	function test_class_callback_working() {
		$this->assertTrue( class_exists( 'Example\\Plugin' ), 'class is loaded' );
		$pluginClass = new Example\Plugin();
		$this->assertSame( 10, has_action( 'plugins_loaded', array( $pluginClass, 'do_stuff' ) ), 'action is loaded' );
		$this->assertSame( $pluginClass->do_stuff(), 'Example\\Plugin', 'class works' );
	}

	protected function tearDown() {
		parent::tearDown();
	}
}