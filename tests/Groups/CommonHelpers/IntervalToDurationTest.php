<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IntervalToDurationTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_correct_duration_for_arbitrary_dates(): void {
		$start = new DateTimeImmutable('1929-01-15 12:00:00');
		$end = new DateTimeImmutable('1968-04-04 19:05:00');
		$interval = [$start, $end];

		$result = DateFns::intervalToDuration(...$interval);

		$this->assertEquals([
			'years' => 39,
			'months' => 2,
			'days' => 20,
			'hours' => 7,
			'minutes' => 5,
		], $result);
	}

	/**
	 * @test
	 */
	public function returns_correct_duration_with_seconds(): void {
		$start = new DateTimeImmutable('2020-02-01 12:00:00');
		$end = new DateTimeImmutable('2021-03-02 13:01:01');
		$interval = [$start, $end];

		$result = DateFns::intervalToDuration(...$interval);

		$this->assertEquals([
			'years' => 1,
			'months' => 1,
			'days' => 1,
			'hours' => 1,
			'minutes' => 1,
			'seconds' => 1,
		], $result);
	}

	/**
	 * @test
	 */
	public function returns_empty_array_when_dates_are_same(): void {
		$start = new DateTimeImmutable('2020-02-01 12:00:00');
		$end = new DateTimeImmutable('2020-02-01 12:00:00');
		$interval = [$start, $end];

		$result = DateFns::intervalToDuration(...$interval);

		$this->assertEquals([], $result);
	}

	/**
	 * @test
	 */
	public function returns_negative_duration_if_start_is_greater_than_end(): void {
		$start = new DateTimeImmutable('2020-04-01');
		$end = new DateTimeImmutable('2020-03-01');
		$interval = [$start, $end];

		$result = DateFns::intervalToDuration(...$interval);

		$this->assertEquals(['months' => -1], $result);
	}
}
