<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisMinuteTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_when_date_in_current_minute(): void {
		$now = new DateTimeImmutable();
		$candidate = new DateTimeImmutable($now->format('Y-m-d H:i:00'));

		$this->assertTrue(DateFns::isThisMinute($candidate));
	}

	/**
	 * @test
	 */
	public function returns_false_when_date_not_in_current_minute(): void {
		$now = new DateTimeImmutable();
		$candidate = $now->modify('+1 minute');

		$this->assertFalse(DateFns::isThisMinute($candidate));
	}
}
