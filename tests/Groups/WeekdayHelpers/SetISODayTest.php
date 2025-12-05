<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetISODayTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_iso_day_of_week(): void {
		$date = new DateTimeImmutable('2014-09-01'); // Monday
		$result = DateFns::setISODay($date, 7); // Sunday

		$this->assertEquals('2014-09-07', $result->format('Y-m-d'));
	}
}
