<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDaysInMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_days_in_month(): void {
		$date = new DateTimeImmutable('2012-02-01');
		$this->assertSame(29, DateFns::getDaysInMonth($date));
	}
}
