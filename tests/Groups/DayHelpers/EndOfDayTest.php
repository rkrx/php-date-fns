<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfDayTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_day(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::endOfDay($date);

		$this->assertEquals('2014-09-02 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
