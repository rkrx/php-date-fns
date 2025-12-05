<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SpecificDayHelpersTest extends TestCase {
	/**
	 * @test
	 */
	public function moves_to_next_and_previous_named_days(): void {
		$date = new DateTimeImmutable('2024-08-08'); // Thursday

		$this->assertEquals('2024-08-09', DateFns::nextFriday($date)->format('Y-m-d'));
		$this->assertEquals('2024-08-12', DateFns::nextMonday($date)->format('Y-m-d'));
		$this->assertEquals('2024-08-11', DateFns::nextSunday($date)->format('Y-m-d'));

		$this->assertEquals('2024-08-02', DateFns::previousFriday($date)->format('Y-m-d'));
		$this->assertEquals('2024-08-05', DateFns::previousMonday($date)->format('Y-m-d'));
		$this->assertEquals('2024-08-04', DateFns::previousSunday($date)->format('Y-m-d'));
	}
}
