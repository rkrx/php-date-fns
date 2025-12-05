<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LastDayOfISOWeekYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_last_day_of_iso_week_year(): void {
		$date = new DateTimeImmutable('2005-07-02');
		$result = DateFns::lastDayOfISOWeekYear($date);

		$this->assertEquals('2006-01-01 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
