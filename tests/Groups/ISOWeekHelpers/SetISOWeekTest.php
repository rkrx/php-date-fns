<?php

namespace DateFns\Groups\ISOWeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetISOWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_iso_week_preserving_weekday(): void {
		$date = new DateTimeImmutable('2014-09-03'); // Wednesday, ISO week 36
		$result = DateFns::setISOWeek($date, 1);

		$this->assertEquals('2014-01-01', $result->format('Y-m-d'));
		$this->assertSame(3, (int) $result->format('N'));
	}
}
