<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ClosestIndexToTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_date_index_from_given_array_closest_to_given_date(): void {
		$date = new DateTimeImmutable('2014-07-02');
		$result = DateFns::closestIndexTo($date, [
			new DateTimeImmutable('2015-08-31'),
			new DateTimeImmutable('2012-07-02'),
		]);
		// 2014-07 vs 2015-08 (~13 months)
		// 2014-07 vs 2012-07 (24 months)
		// So index 0 is closest.
		$this->assertEquals(0, $result);
	}

	/**
	 * @test
	 */
	public function works_if_closest_date_from_array_is_before_given_date(): void {
		$date = new DateTimeImmutable('2014-07-02 06:30:04.500');
		$result = DateFns::closestIndexTo($date, [
			new DateTimeImmutable('2014-07-02 06:30:05.900'),
			new DateTimeImmutable('2014-07-02 06:30:03.900'),
			new DateTimeImmutable('2014-07-02 06:30:10.000'),
		]);
		// 4.5 vs 5.9 -> 1.4s
		// 4.5 vs 3.9 -> 0.6s <-- Closest
		// 4.5 vs 10.0 -> 5.5s

		$this->assertEquals(1, $result);
	}

	/**
	 * @test
	 */
	public function returns_null_if_array_is_empty(): void {
		$date = new DateTimeImmutable('2014-07-02');
		$result = DateFns::closestIndexTo($date, []);
		$this->assertNull($result);
	}
}
