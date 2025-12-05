<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetDayOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_day_of_year(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');
		$result = DateFns::setDayOfYear($date, 2);

		$this->assertEquals('2014-01-02 11:30:40', $result->format('Y-m-d H:i:s'));
	}
}
