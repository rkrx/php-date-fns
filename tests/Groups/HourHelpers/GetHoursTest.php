<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_hour_component(): void {
		$date = new DateTimeImmutable('2012-02-29 11:45:00');
		$this->assertSame(11, DateFns::getHours($date));
	}
}
