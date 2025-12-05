<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubISOWeekYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_iso_week_years(): void {
		$date = new DateTimeImmutable('2005-07-02');
		$result = DateFns::subISOWeekYears($date, 1);

		$this->assertEquals('2004-06-26', $result->format('Y-m-d'));
	}
}
