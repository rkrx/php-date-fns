<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfMinuteTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_minute(): void {
		$date = new DateTimeImmutable('2014-12-01 22:15:45.400');
		$result = DateFns::startOfMinute($date);

		$this->assertEquals('2014-12-01 22:15:00.000000', $result->format('Y-m-d H:i:s.u'));
	}
}
