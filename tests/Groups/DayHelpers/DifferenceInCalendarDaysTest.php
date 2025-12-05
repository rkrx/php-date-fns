<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInCalendarDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_calendar_day_difference(): void {
		$later = new DateTimeImmutable('2012-07-02 00:00:00');
		$earlier = new DateTimeImmutable('2011-07-02 23:00:00');

		$this->assertSame(366, DateFns::differenceInCalendarDays($later, $earlier));
	}
}
