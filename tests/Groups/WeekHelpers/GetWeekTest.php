<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_week_number(): void {
		$date = new DateTimeImmutable('2005-01-01'); // Saturday
		$this->assertSame(1, DateFns::getWeek($date));
	}
}
