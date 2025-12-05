<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class RoundToNearestHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function rounds_to_nearest_hour(): void {
		$date = new DateTimeImmutable('2014-07-10 12:34:56');
		$result = DateFns::roundToNearestHours($date);

		$this->assertEquals('2014-07-10 13:00:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function rounds_with_custom_increment_and_method(): void {
		$date = new DateTimeImmutable('2014-07-10 12:34:56');

		$halfHour = DateFns::roundToNearestHours($date, ['nearestTo' => 6]);
		$ceilQuarter = DateFns::roundToNearestHours($date, ['nearestTo' => 8, 'roundingMethod' => 'ceil']);

		$this->assertEquals('2014-07-10 12:00:00', $halfHour->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-07-10 16:00:00', $ceilQuarter->format('Y-m-d H:i:s'));
	}
}
