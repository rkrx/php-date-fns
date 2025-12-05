<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfMinuteTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_minute(): void {
		$date = new DateTimeImmutable('2014-12-01 22:15:45.400');
		$result = DateFns::endOfMinute($date);

		$this->assertEquals('2014-12-01 22:15:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
