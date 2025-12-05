<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetDayTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_day_of_week_sunday_zero(): void {
		$date = new DateTimeImmutable('2014-09-01'); // Monday
		$result = DateFns::setDay($date, 0); // Sunday

		$this->assertEquals('2014-08-31', $result->format('Y-m-d'));
	}
}
