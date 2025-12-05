<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function compares_months(): void {
		$this->assertTrue(
			DateFns::isSameMonth(
				new DateTimeImmutable('2014-09-01'),
				new DateTimeImmutable('2014-09-30')
			)
		);
		$this->assertFalse(
			DateFns::isSameMonth(
				new DateTimeImmutable('2014-09-01'),
				new DateTimeImmutable('2014-10-01')
			)
		);
	}
}
