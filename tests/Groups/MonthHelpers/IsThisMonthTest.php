<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_current_month(): void {
		$date = new DateTimeImmutable();
		$this->assertTrue(DateFns::isThisMonth($date));
	}
}
