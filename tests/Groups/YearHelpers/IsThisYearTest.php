<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisYearTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_current_year(): void {
		$date = new DateTimeImmutable();
		$this->assertTrue(DateFns::isThisYear($date));
	}
}
