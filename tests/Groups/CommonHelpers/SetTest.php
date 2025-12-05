<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_specific_values(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');

		// Month 10 -> November (since 0-indexed: 0=Jan ... 10=Nov?) wait 0=Jan, 1=Feb.. 9=Oct, 10=Nov?
		// date-fns: 0=Jan.
		// 0=Jan, 1=Feb, 2=Mar... 6=Jul, 7=Aug, 8=Sep, 9=Oct, 10=Nov, 11=Dec.
		// My implementation adds 1 to input.
		// So input 10 -> 11(Nov).

		$result = DateFns::set($date, [
			'year' => 2015,
			'month' => 10, // Nov
			'date' => 20,
		]);

		$this->assertEquals('2015-11-20 11:30:40', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function sets_time_values(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');

		$result = DateFns::set($date, [
			'hours' => 10,
			'minutes' => 5,
			'seconds' => 9,
			// milliseconds?
		]);

		$this->assertEquals('2014-09-01 10:05:09', $result->format('Y-m-d H:i:s'));
	}
}
