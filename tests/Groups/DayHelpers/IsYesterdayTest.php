<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsYesterdayTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_yesterday(): void {
		$yesterday = new DateTimeImmutable('yesterday');
		$this->assertTrue(DateFns::isYesterday($yesterday));
	}
}
