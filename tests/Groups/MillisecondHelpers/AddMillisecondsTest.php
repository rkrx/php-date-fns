<?php

namespace DateFns\Groups\MillisecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddMillisecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_positive_milliseconds(): void {
		$date = new DateTimeImmutable('2014-07-10 12:45:30.000');
		$result = DateFns::addMilliseconds($date, 750);

		$this->assertEquals('2014-07-10 12:45:30.750', $result->format('Y-m-d H:i:s.v'));
	}

	/**
	 * @test
	 */
	public function adds_negative_milliseconds(): void {
		$date = new DateTimeImmutable('2014-07-10 12:45:30.500');
		$result = DateFns::addMilliseconds($date, -250);

		$this->assertEquals('2014-07-10 12:45:30.250', $result->format('Y-m-d H:i:s.v'));
	}
}
