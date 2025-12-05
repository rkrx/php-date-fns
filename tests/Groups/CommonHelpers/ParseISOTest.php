<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use Exception;
use PHPUnit\Framework\TestCase;

class ParseISOTest extends TestCase {
	/**
	 * @test
	 */
	public function parses_iso_string(): void {
		// 2011-10-05T14:48:00.000Z
		$str = '2019-09-18T19:00:52Z';
		$result = DateFns::parseISO($str);

		$this->assertEquals('2019-09-18 19:00:52', $result->format('Y-m-d H:i:s'));
		$this->assertEquals(0, $result->getOffset()); // Check offset is 0 (UTC)
	}

	/**
	 * @test
	 */
	public function parses_basic_iso_string(): void {
		$str = '20190918T190052Z'; // Basic format
		// PHP DateTime might handle this?
		$result = DateFns::parseISO($str);
		$this->assertEquals('2019-09-18 19:00:52', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_iso(): void {
		$this->expectException(Exception::class);
		DateFns::parseISO('invalid-iso-string');
	}
}
