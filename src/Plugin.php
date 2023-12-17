<?php

namespace Example;

class Plugin {
	public function __construct()
	{
		add_action( 'plugins_loaded', array( $this, 'do_stuff' ) );
	}
	public function do_stuff() {
		return __CLASS__;
	}
}
