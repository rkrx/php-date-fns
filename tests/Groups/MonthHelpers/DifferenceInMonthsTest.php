<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInMonthsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_month_difference_truncated(): void {
		$later = new DateTimeImmutable('2014-07-02');
		$earlier = new DateTimeImmutable('2014-06-30');

		$this->assertSame(0, DateFns::differenceInMonths($later, $earlier));
	}
}
