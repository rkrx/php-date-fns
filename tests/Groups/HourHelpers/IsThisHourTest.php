<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisHourTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_when_in_current_hour(): void {
		$now = new DateTimeImmutable();
		$candidate = new DateTimeImmutable($now->format('Y-m-d H:00:00'));

		$this->assertTrue(DateFns::isThisHour($candidate));
	}
}
