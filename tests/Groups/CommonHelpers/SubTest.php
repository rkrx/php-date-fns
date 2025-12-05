<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_duration(): void {
		$date = new DateTimeImmutable('2014-09-01 10:00:00');

		$result = DateFns::sub($date, [
			'hours' => 2,
			'minutes' => 9,
		]);

		$this->assertEquals('2014-09-01 07:51:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function subtracts_multiple_units(): void {
		$date = new DateTimeImmutable('2014-09-01 10:00:00');

		$result = DateFns::sub($date, [
			'years' => 2,
			'months' => 9,
			'weeks' => 1,
			'days' => 7,
			'hours' => 5,
			'minutes' => 9,
			'seconds' => 30,
		]);

		// Let's verify manual calc:
		// 2014-09-01 10:00:00
		// -2 years -> 2012-09-01
		// -9 months -> 2011-12-01
		// -1 week -> 2011-11-24
		// -7 days -> 2011-11-17
		// -5 hours -> 2011-11-17 05:00:00
		// -9 minutes -> 2011-11-17 04:51:00
		// -30 seconds -> 2011-11-17 04:50:30

		$this->assertEquals('2011-11-17 04:50:30', $result->format('Y-m-d H:i:s'));
	}
}
