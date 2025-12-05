<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LastDayOfWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_last_day_of_week(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::lastDayOfWeek($date);

		$this->assertEquals('2014-09-06 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
