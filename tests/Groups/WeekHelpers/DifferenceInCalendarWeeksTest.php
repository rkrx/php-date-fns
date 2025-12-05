<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInCalendarWeeksTest extends TestCase {
	/**
	 * @test
	 */
	public function calculates_calendar_week_difference(): void {
		$later = new DateTimeImmutable('2014-12-31');
		$earlier = new DateTimeImmutable('2014-01-01');

		$this->assertSame(52, DateFns::differenceInCalendarWeeks($later, $earlier, ['weekStartsOn' => 1]));
	}
}
