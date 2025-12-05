<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsLeapYearTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_leap_years(): void {
		$this->assertTrue(DateFns::isLeapYear(new DateTimeImmutable('2012-01-01')));
		$this->assertFalse(DateFns::isLeapYear(new DateTimeImmutable('2014-01-01')));
	}
}
