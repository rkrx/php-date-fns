<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetISOWeekYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_iso_week_year(): void {
		// Dec 31, 2005 belongs to ISO week year 2005
		$date = new DateTimeImmutable('2005-12-31');
		$this->assertSame(2005, DateFns::getISOWeekYear($date));
	}
}
