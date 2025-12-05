<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_minutes_from_date(): void {
		$date = new DateTimeImmutable('2014-07-10 12:30:00');
		$result = DateFns::subMinutes($date, 30);

		$this->assertEquals('2014-07-10 12:00:00', $result->format('Y-m-d H:i:s'));
	}
}
