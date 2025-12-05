<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_days_to_date(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::addDays($date, 10);

		$this->assertEquals('2014-09-11', $result->format('Y-m-d'));
	}

	/**
	 * @test
	 */
	public function does_not_mutate_when_amount_is_zero(): void {
		$date = new DateTimeImmutable('2014-09-01 15:30:00');
		$result = DateFns::addDays($date, 0);

		$this->assertSame($date, $result);
	}
}
