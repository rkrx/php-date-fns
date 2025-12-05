<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_zero_based_month(): void {
		$date = new DateTimeImmutable('2014-02-11');
		$this->assertSame(1, DateFns::getMonth($date));
	}
}
