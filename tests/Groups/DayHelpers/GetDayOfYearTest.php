<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDayOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_day_of_year(): void {
		$date = new DateTimeImmutable('2014-02-11');
		$this->assertSame(42, DateFns::getDayOfYear($date));
	}
}
