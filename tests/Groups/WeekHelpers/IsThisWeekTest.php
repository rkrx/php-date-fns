<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_current_week(): void {
		$date = new DateTimeImmutable();
		$this->assertTrue(DateFns::isThisWeek($date));
	}
}
