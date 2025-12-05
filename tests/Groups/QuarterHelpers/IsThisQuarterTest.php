<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_current_quarter(): void {
		$date = new DateTimeImmutable();
		$this->assertTrue(DateFns::isThisQuarter($date));
	}
}
