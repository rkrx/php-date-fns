<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetDateTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_day_of_month(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');
		$result = DateFns::setDate($date, 15);

		$this->assertEquals('2014-09-15 11:30:40', $result->format('Y-m-d H:i:s'));
	}
}
