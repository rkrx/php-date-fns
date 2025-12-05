<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfHourTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_hour(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::endOfHour($date);

		$this->assertEquals('2014-09-02 11:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
