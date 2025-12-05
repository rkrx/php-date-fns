<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class NextDayTest extends TestCase {
	/**
	 * @test
	 */
	public function moves_to_next_specific_day(): void {
		// Starting Thursday (4), next Monday (1) should be 4 days ahead
		$date = new DateTimeImmutable('2024-08-08'); // Thursday
		$result = DateFns::nextDay($date, 1);
		$this->assertEquals('2024-08-12', $result->format('Y-m-d'));
	}
}
