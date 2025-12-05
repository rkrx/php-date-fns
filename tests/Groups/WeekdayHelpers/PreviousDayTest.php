<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class PreviousDayTest extends TestCase {
	/**
	 * @test
	 */
	public function moves_to_previous_specific_day(): void {
		// Starting Thursday (4), previous Monday (1) should be 3 days back
		$date = new DateTimeImmutable('2024-08-08'); // Thursday
		$result = DateFns::previousDay($date, 1);
		$this->assertEquals('2024-08-05', $result->format('Y-m-d'));
	}
}
