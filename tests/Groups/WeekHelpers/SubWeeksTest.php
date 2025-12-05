<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubWeeksTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_weeks(): void {
		$date = new DateTimeImmutable('2014-09-29');
		$result = DateFns::subWeeks($date, 4);

		$this->assertEquals('2014-09-01', $result->format('Y-m-d'));
	}
}
