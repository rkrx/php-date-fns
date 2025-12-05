<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInCalendarYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_calendar_year_difference(): void {
		$later = new DateTimeImmutable('2014-12-31');
		$earlier = new DateTimeImmutable('2011-01-01');

		$this->assertSame(3, DateFns::differenceInCalendarYears($later, $earlier));
	}
}
