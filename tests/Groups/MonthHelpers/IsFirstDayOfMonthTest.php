<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsFirstDayOfMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_first_day(): void {
		$this->assertTrue(DateFns::isFirstDayOfMonth(new DateTimeImmutable('2014-09-01')));
		$this->assertFalse(DateFns::isFirstDayOfMonth(new DateTimeImmutable('2014-09-02')));
	}
}
