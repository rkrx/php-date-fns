<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddSecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_seconds_to_date(): void {
		$date = new DateTimeImmutable('2014-07-10 12:45:00');
		$result = DateFns::addSeconds($date, 30);

		$this->assertEquals('2014-07-10 12:45:30', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function subtracts_seconds_when_negative(): void {
		$date = new DateTimeImmutable('2014-07-10 12:45:00');
		$result = DateFns::addSeconds($date, -30);

		$this->assertEquals('2014-07-10 12:44:30', $result->format('Y-m-d H:i:s'));
	}
}
