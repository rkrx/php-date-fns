<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_minutes_to_date(): void {
		$date = new DateTimeImmutable('2014-07-10 12:00:00');
		$result = DateFns::addMinutes($date, 30);

		$this->assertEquals('2014-07-10 12:30:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function subtracts_minutes_when_negative(): void {
		$date = new DateTimeImmutable('2014-07-10 12:00:00');
		$result = DateFns::addMinutes($date, -30);

		$this->assertEquals('2014-07-10 11:30:00', $result->format('Y-m-d H:i:s'));
	}
}
