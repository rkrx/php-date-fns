<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_hours_to_date(): void {
		$date = new DateTimeImmutable('2014-07-10 23:00:00');
		$result = DateFns::addHours($date, 2);

		$this->assertEquals('2014-07-11 01:00:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function subtracts_hours_when_negative(): void {
		$date = new DateTimeImmutable('2014-07-10 23:00:00');
		$result = DateFns::addHours($date, -2);

		$this->assertEquals('2014-07-10 21:00:00', $result->format('Y-m-d H:i:s'));
	}
}
