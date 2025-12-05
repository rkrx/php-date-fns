<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_days_from_date(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::subDays($date, 10);

		$this->assertEquals('2014-08-22', $result->format('Y-m-d'));
	}
}
