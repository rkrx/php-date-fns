<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetISODayTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_iso_day_of_week(): void {
		$date = new DateTimeImmutable('2012-02-27'); // Monday
		$this->assertSame(1, DateFns::getISODay($date));
	}
}
