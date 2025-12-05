<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsWeekendTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_weekends(): void {
		$this->assertTrue(DateFns::isWeekend(new DateTimeImmutable('2024-08-10'))); // Saturday
		$this->assertFalse(DateFns::isWeekend(new DateTimeImmutable('2024-08-12'))); // Monday
	}
}
