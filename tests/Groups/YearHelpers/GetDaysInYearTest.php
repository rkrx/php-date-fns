<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDaysInYearTest extends TestCase {
	/**
	 * @test
	 */
	public function counts_days_in_year(): void {
		$this->assertSame(365, DateFns::getDaysInYear(new DateTimeImmutable('2014-01-01')));
		$this->assertSame(366, DateFns::getDaysInYear(new DateTimeImmutable('2012-01-01')));
	}
}
