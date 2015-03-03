<?php
/**
 * Example Test
 *
 * @author Leonid Mamchenkov <l.mamchenkov@qobo.biz>
 * @author Andreas Demetriou <androsland@gmail.com>
 */
class EntryPathTest extends PHPUnit_Framework_TestCase {

	/**
	 * Example unit test
	 *
	 * The list of all available assertions is here:
	 * https://phpunit.de/manual/current/en/appendixes.assertions.html
	 */
	public function test_entry_path() {
		$dir = dirname(__FILE__) . "/data";
		$archive = ezcArchive::open(dirname(__FILE__) . "/data/images.tar.gz");
		try {
			$archive -> extract($dir);
		} catch (Exception $e) { // even if an exception is caught (e.g. file_exists) try to see if the files are extracted
			$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_flat_0_aaaaaa_40x100.png"));
			$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_highlight-soft_75_cccccc_1x100.png"));
			$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_inset-soft_95_fef1ec_1x100.png"));
		}

		$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_flat_0_aaaaaa_40x100.png"));
		$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_highlight-soft_75_cccccc_1x100.png"));
		$this -> assertTrue(file_exists("$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_inset-soft_95_fef1ec_1x100.png"));

	}

}
