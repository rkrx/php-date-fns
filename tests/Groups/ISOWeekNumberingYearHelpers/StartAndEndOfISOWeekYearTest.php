<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartAndEndOfISOWeekYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_and_end_of_iso_week_year(): void {
		$date = new DateTimeImmutable('2005-07-02');
		$start = DateFns::startOfISOWeekYear($date);
		$end = DateFns::endOfISOWeekYear($date);

		$this->assertEquals('2005-01-03 00:00:00', $start->format('Y-m-d H:i:s'));
		$this->assertEquals('2006-01-01 23:59:59.999000', $end->format('Y-m-d H:i:s.u'));
	}
}
