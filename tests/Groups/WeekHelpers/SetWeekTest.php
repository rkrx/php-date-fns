<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function shifts_date_by_week_difference(): void {
		$date = new DateTimeImmutable('2014-09-10');
		$currentWeek = DateFns::getWeek($date);
		$result = DateFns::setWeek($date, $currentWeek + 1);

		$this->assertEquals($date->modify('+7 days')->format('Y-m-d'), $result->format('Y-m-d'));
	}
}
