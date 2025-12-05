<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInBusinessDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function counts_only_weekdays(): void {
		$later = new DateTimeImmutable('2014-07-10'); // Thursday
		$earlier = new DateTimeImmutable('2014-07-02'); // Wednesday previous week

		// Wed, Thu, Fri, Mon, Tue, Wed, Thu = 7 business days? Actually July 2 to 10: 6 business days (2,3,4,7,8,9)
		$this->assertSame(6, DateFns::differenceInBusinessDays($later, $earlier));
	}

	/**
	 * @test
	 */
	public function returns_zero_for_same_day(): void {
		$date = new DateTimeImmutable('2014-07-10');
		$this->assertSame(0, DateFns::differenceInBusinessDays($date, $date));
	}
}
