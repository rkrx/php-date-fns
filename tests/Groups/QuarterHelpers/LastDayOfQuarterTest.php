<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LastDayOfQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_last_day_of_quarter(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::lastDayOfQuarter($date);

		$this->assertEquals('2014-03-31 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
