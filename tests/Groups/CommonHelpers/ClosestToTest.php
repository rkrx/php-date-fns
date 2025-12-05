<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ClosestToTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_date_from_given_array_closest_to_given_date(): void {
		$date = new DateTimeImmutable('2014-07-02');
		$result = DateFns::closestTo($date, [
			new DateTimeImmutable('2015-08-31'),
			new DateTimeImmutable('2012-07-02'),
		]);
		// 2014 is closer to 2015 (1yr) than 2012 (2yr)
		$this->assertEquals(new DateTimeImmutable('2015-08-31'), $result);
	}

	/**
	 * @test
	 */
	public function works_if_closest_date_from_array_is_before_given_date(): void {
		$date = new DateTimeImmutable('2014-07-02 06:30:04.500');
		$result = DateFns::closestTo($date, [
			new DateTimeImmutable('2014-07-02 06:30:05.900'),
			new DateTimeImmutable('2014-07-02 06:30:03.900'), // Diff 0.6s
			new DateTimeImmutable('2014-07-02 06:30:10.000'),
		]);

		$this->assertEquals(new DateTimeImmutable('2014-07-02 06:30:03.900'), $result);
	}

	/**
	 * @test
	 */
	public function returns_null_if_array_is_empty(): void {
		$date = new DateTimeImmutable('2014-07-02');
		$result = DateFns::closestTo($date, []);
		$this->assertNull($result);
	}
}
