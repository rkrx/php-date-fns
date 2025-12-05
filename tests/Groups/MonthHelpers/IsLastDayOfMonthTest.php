<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsLastDayOfMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_last_day(): void {
		$this->assertTrue(DateFns::isLastDayOfMonth(new DateTimeImmutable('2014-09-30')));
		$this->assertFalse(DateFns::isLastDayOfMonth(new DateTimeImmutable('2014-09-29')));
	}
}
