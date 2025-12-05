<?php

namespace DateFns\Groups\ISOWeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetISOWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_iso_week_number(): void {
		$date = new DateTimeImmutable('2005-01-01'); // ISO week 53 of 2004
		$this->assertSame(53, DateFns::getISOWeek($date));
	}
}
