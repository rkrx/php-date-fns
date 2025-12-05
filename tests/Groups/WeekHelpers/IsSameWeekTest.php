<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_same_week(): void {
		$this->assertTrue(
			DateFns::isSameWeek(
				new DateTimeImmutable('2014-09-01'),
				new DateTimeImmutable('2014-09-06')
			)
		);
	}

	/**
	 * @test
	 */
	public function returns_false_for_different_weeks(): void {
		$this->assertFalse(
			DateFns::isSameWeek(
				new DateTimeImmutable('2014-09-01'),
				new DateTimeImmutable('2014-09-08')
			)
		);
	}
}
