<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameHourTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_same_hour(): void {
		$this->assertTrue(
			DateFns::isSameHour(
				new DateTimeImmutable('2014-09-04 06:00:00'),
				new DateTimeImmutable('2014-09-04 06:30:00')
			)
		);
	}

	/**
	 * @test
	 */
	public function returns_false_for_different_hour_or_day(): void {
		$this->assertFalse(
			DateFns::isSameHour(
				new DateTimeImmutable('2014-09-04 06:00:00'),
				new DateTimeImmutable('2014-09-05 06:00:00')
			)
		);
	}
}
