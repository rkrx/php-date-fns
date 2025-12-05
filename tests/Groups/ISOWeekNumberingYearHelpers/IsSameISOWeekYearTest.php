<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameISOWeekYearTest extends TestCase {
	/**
	 * @test
	 */
	public function compares_iso_week_years(): void {
		$this->assertFalse(
			DateFns::isSameISOWeekYear(
				new DateTimeImmutable('2005-01-01'),
				new DateTimeImmutable('2005-12-31')
			)
		);
		$this->assertFalse(
			DateFns::isSameISOWeekYear(
				new DateTimeImmutable('2004-12-31'),
				new DateTimeImmutable('2006-01-01')
			)
		);
	}
}
