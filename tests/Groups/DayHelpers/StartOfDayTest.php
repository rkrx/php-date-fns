<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfDayTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_day(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::startOfDay($date);

		$this->assertEquals('2014-09-02 00:00:00.000000', $result->format('Y-m-d H:i:s.u'));
	}
}
