<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameYearTest extends TestCase {
	/**
	 * @test
	 */
	public function compares_years(): void {
		$this->assertTrue(
			DateFns::isSameYear(
				new DateTimeImmutable('2014-09-02'),
				new DateTimeImmutable('2014-02-11')
			)
		);
		$this->assertFalse(
			DateFns::isSameYear(
				new DateTimeImmutable('2014-09-02'),
				new DateTimeImmutable('2013-02-11')
			)
		);
	}
}
