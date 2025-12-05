<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LastDayOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_last_day_of_year(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::lastDayOfYear($date);

		$this->assertEquals('2014-12-31 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
