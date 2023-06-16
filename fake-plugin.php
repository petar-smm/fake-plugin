<?php
/**
 * Plugin Name: Fake Plugin
 * Plugin URI: N\A
 * Description: Helps debugging issues
 * Version: 0.0.0
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
		$this-property = "property";
	}
}

$plugin = new FakePlugin();

