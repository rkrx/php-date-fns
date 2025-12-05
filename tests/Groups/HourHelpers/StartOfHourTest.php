<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfHourTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_hour(): void {
		$date = new DateTimeImmutable('2014-12-01 22:15:45.400');
		$result = DateFns::startOfHour($date);

		$this->assertEquals('2014-12-01 22:00:00.000000', $result->format('Y-m-d H:i:s.u'));
	}
}
