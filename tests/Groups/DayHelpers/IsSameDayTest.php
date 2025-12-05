<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameDayTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_same_day(): void {
		$this->assertTrue(
			DateFns::isSameDay(
				new DateTimeImmutable('2014-09-04 06:00:00'),
				new DateTimeImmutable('2014-09-04 18:00:00')
			)
		);
	}

	/**
	 * @test
	 */
	public function returns_false_for_different_days(): void {
		$this->assertFalse(
			DateFns::isSameDay(
				new DateTimeImmutable('2014-09-04 06:00:00'),
				new DateTimeImmutable('2014-09-05 06:00:00')
			)
		);
	}
}
