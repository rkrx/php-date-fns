<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_week(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::endOfWeek($date);

		$this->assertEquals('2014-09-06 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
