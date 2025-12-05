<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInWeeksTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_week_difference(): void {
		$later = new DateTimeImmutable('2014-07-09 12:00:00');
		$earlier = new DateTimeImmutable('2014-07-02 12:00:00');

		$this->assertSame(1, DateFns::differenceInWeeks($later, $earlier));
	}

	/**
	 * @test
	 */
	public function supports_rounding_method(): void {
		$later = new DateTimeImmutable('2014-07-09 23:59:59');
		$earlier = new DateTimeImmutable('2014-07-02 00:00:01');

		$this->assertSame(1, DateFns::differenceInWeeks($later, $earlier, ['roundingMethod' => 'floor']));
		$this->assertSame(2, DateFns::differenceInWeeks($later, $earlier, ['roundingMethod' => 'ceil']));
	}
}
