<?php
/**
 *
 * Test case for Drop It
 *
 */
class Drop_It_UnitTestCase extends WP_UnitTestCase {
	public $di;

	/**
	 * Init
	 * @return [type] [description]
	 */
	function setup() {
		parent::setup();
		global $drop_it;
		$this->di = $drop_it;
	}

	function teardown() {
	}

	// Check if settings get set up on activation
	function test_default_settings() {
		$this->assertNotEmpty( $this->di->settings );
	}

	function test_available_drops() {
		$this->assertNotEmpty( $this->di->drops );
	}

	// Check if errors are handled properly
	function test_error_handling() {

	}

	function test_save_drop() {
		//$this->assertNotEmpty( $this->di->save_drop() );
	}
}

