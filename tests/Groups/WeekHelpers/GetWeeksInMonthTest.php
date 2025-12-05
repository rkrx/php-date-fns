<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetWeeksInMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function counts_weeks_in_month(): void {
		$date = new DateTimeImmutable('2014-09-15');
		$this->assertSame(5, DateFns::getWeeksInMonth($date));
	}
}
