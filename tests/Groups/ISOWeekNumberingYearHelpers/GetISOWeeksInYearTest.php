<?php

namespace DateFns\Groups\ISOWeekNumberingYearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetISOWeeksInYearTest extends TestCase {
	/**
	 * @test
	 */
	public function counts_iso_weeks_in_year(): void {
		$this->assertSame(53, DateFns::getISOWeeksInYear(new DateTimeImmutable('2015-01-01')));
		$this->assertSame(52, DateFns::getISOWeeksInYear(new DateTimeImmutable('2014-01-01')));
	}
}
