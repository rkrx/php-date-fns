<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetWeekOfMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_week_of_month(): void {
		$date = new DateTimeImmutable('2014-09-15'); // Monday
		$this->assertSame(3, DateFns::getWeekOfMonth($date));
	}
}
