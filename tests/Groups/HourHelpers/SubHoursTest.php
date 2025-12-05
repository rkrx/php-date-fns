<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_hours_from_date(): void {
		$date = new DateTimeImmutable('2014-07-10 23:00:00');
		$result = DateFns::subHours($date, 2);

		$this->assertEquals('2014-07-10 21:00:00', $result->format('Y-m-d H:i:s'));
	}
}
