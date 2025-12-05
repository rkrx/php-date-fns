<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class IsExistsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_date_exists(): void {
		$this->assertTrue(DateFns::isExists(2018, 0, 31)); // Jan 31 2018
		$this->assertTrue(DateFns::isExists(2018, 1, 28)); // Feb 28 2018
		$this->assertTrue(DateFns::isExists(2020, 1, 29)); // Feb 29 2020 (leap)
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_does_not_exist(): void {
		$this->assertFalse(DateFns::isExists(2018, 1, 30)); // Feb 30 2018
		$this->assertFalse(DateFns::isExists(2018, 1, 29)); // Feb 29 2018 (non-leap)
	}

	/**
	 * @test
	 */
	public function returns_false_for_invalid_month(): void {
		$this->assertFalse(DateFns::isExists(2018, 12, 1)); // Month 12 (JS 0-11)
		$this->assertFalse(DateFns::isExists(2018, -1, 1));
	}
}
