<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_hours_component(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');
		$result = DateFns::setHours($date, 5);

		$this->assertEquals('2014-09-01 05:30:40', $result->format('Y-m-d H:i:s'));
	}
}
