<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_quarter(): void {
		$date = new DateTimeImmutable('2014-09-15 11:55:00');
		$result = DateFns::startOfQuarter($date);

		$this->assertEquals('2014-07-01 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
