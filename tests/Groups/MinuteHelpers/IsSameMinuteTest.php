<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameMinuteTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_same_minute(): void {
		$this->assertTrue(
			DateFns::isSameMinute(
				new DateTimeImmutable('2014-09-04 06:30:00'),
				new DateTimeImmutable('2014-09-04 06:30:30')
			)
		);
	}

	/**
	 * @test
	 */
	public function returns_false_for_different_minutes(): void {
		$this->assertFalse(
			DateFns::isSameMinute(
				new DateTimeImmutable('2014-09-04 06:30:00'),
				new DateTimeImmutable('2014-09-04 06:31:00')
			)
		);
	}
}
