<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_day_difference_truncated(): void {
		$later = new DateTimeImmutable('2014-07-02 12:00:00');
		$earlier = new DateTimeImmutable('2014-07-02 00:00:00');

		$this->assertSame(0, DateFns::differenceInDays($later, $earlier));
	}
}
