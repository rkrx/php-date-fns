<?php

namespace DateFns\Groups\WeekdayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDayAndISODayTest extends TestCase {
	/**
	 * @test
	 */
	public function uses_common_helper_getDay_and_iso_day(): void {
		$date = new DateTimeImmutable('2012-02-27'); // Monday
		$this->assertSame(1, DateFns::getDay($date));
		$this->assertSame(1, DateFns::getISODay($date));
	}
}
