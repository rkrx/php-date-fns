<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class RoundToNearestMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function rounds_to_nearest_minute(): void {
		$date = new DateTimeImmutable('2014-07-10 12:12:34');
		$result = DateFns::roundToNearestMinutes($date);

		$this->assertEquals('2014-07-10 12:13:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function rounds_to_nearest_quarter_hour(): void {
		$date = new DateTimeImmutable('2014-07-10 12:12:34');
		$result = DateFns::roundToNearestMinutes($date, ['nearestTo' => 15]);

		$this->assertEquals('2014-07-10 12:15:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function honors_rounding_method(): void {
		$date = new DateTimeImmutable('2014-07-10 12:12:34');
		$floor = DateFns::roundToNearestMinutes($date, ['roundingMethod' => 'floor']);
		$ceil = DateFns::roundToNearestMinutes($date, ['nearestTo' => 30, 'roundingMethod' => 'ceil']);

		$this->assertEquals('2014-07-10 12:12:00', $floor->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-07-10 12:30:00', $ceil->format('Y-m-d H:i:s'));
	}
}
