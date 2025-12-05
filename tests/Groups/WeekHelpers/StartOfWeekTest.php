<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_week(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::startOfWeek($date);

		$this->assertEquals('2014-08-31 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
