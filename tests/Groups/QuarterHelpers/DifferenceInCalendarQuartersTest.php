<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInCalendarQuartersTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_calendar_quarter_difference(): void {
		$later = new DateTimeImmutable('2014-07-02');
		$earlier = new DateTimeImmutable('2013-12-31');

		$this->assertSame(3, DateFns::differenceInCalendarQuarters($later, $earlier));
	}
}
