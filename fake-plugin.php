<?php
/**
 * Plugin Name: Fake Plugin
 * Plugin URI: N\A
 * Description: Used mainly to debug plugins in the updater; 
 * Version: 0.0.6
 * Author: Petar Stoyanov
 * Author URI: scratchmm.com
 * Text Domain: wp-logger
 * Update URI: hswp
 */

class FakePlugin
{
	private string $property;

	public function __construct()
	{
		$this->property = "property";
	}
}

$plugin = new FakePlugin();

