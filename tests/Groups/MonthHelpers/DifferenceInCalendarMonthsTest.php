<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInCalendarMonthsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_calendar_month_difference(): void {
		$later = new DateTimeImmutable('2014-12-15');
		$earlier = new DateTimeImmutable('2014-01-01');

		$this->assertSame(11, DateFns::differenceInCalendarMonths($later, $earlier));
	}
}
