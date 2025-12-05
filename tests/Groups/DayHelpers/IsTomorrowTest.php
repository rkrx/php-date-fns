<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsTomorrowTest extends TestCase {
	/**
	 * @test
	 */
	public function detects_tomorrow(): void {
		$tomorrow = new DateTimeImmutable('tomorrow');
		$this->assertTrue(DateFns::isTomorrow($tomorrow));
	}
}
