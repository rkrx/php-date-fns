<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDayTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_day_index_sunday_zero(): void {
		$date = new DateTimeImmutable('2012-02-26'); // Sunday
		$this->assertSame(0, DateFns::getDay($date));
	}
}
