<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddMonthsTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_months(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::addMonths($date, 2);

		$this->assertEquals('2014-11-01', $result->format('Y-m-d'));
	}
}
