<?php

namespace DateFns\Groups\ISOWeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartAndEndOfISOWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function calculates_start_and_end_of_iso_week(): void {
		$date = new DateTimeImmutable('2014-09-03 11:55:00'); // Wednesday
		$start = DateFns::startOfISOWeek($date);
		$end = DateFns::endOfISOWeek($date);

		$this->assertEquals('2014-09-01 00:00:00', $start->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-09-07 23:59:59.999000', $end->format('Y-m-d H:i:s.u'));
	}
}
