<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsTodayTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_today(): void {
		$today = new DateTimeImmutable('today');
		$this->assertTrue(DateFns::isToday($today));
	}
}
