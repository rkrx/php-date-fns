<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInISOWeekYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_iso_week_year_difference(): void {
		$later = new DateTimeImmutable('2005-07-02');
		$earlier = new DateTimeImmutable('2004-07-02');

		$this->assertSame(0, DateFns::differenceInISOWeekYears($later, $earlier));
	}
}
