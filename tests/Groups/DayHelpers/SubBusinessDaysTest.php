<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubBusinessDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_business_days(): void {
		$date = new DateTimeImmutable('2014-09-01'); // Monday
		$result = DateFns::subBusinessDays($date, 10);

		$this->assertEquals('2014-08-18', $result->format('Y-m-d'));
	}
}
