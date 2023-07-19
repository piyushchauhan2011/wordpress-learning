<?php
/**
 * Class SampleTest
 *
 * @package New_Plugin
 */

/**
 * Sample test case.
 * wordpress-tests-stubs are available
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.

		//./vendor/bin/phpunit --debug
		// wordpress core functions available
		if (function_exists('taxonomy_exists')) {
			echo 'exists';
		} else {
			echo 'does not exist';
		}
		$this->assertTrue( true );
	}
}
