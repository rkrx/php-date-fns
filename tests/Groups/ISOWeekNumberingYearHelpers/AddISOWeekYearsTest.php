<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddISOWeekYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_iso_week_years_preserving_week_and_day(): void {
		$date = new DateTimeImmutable('2004-07-02'); // ISO week 27, Friday
		$result = DateFns::addISOWeekYears($date, 1);

		$this->assertEquals('2005-07-08', $result->format('Y-m-d'));
		$this->assertSame(5, (int) $result->format('N'));
	}
}
