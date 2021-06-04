<?php

/**
 * Base unit test class for CheezTest
 */
class CheezTest_TestCase extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();

		global $cheeztest;
		$this->_toc = $cheeztest;
	}
}
