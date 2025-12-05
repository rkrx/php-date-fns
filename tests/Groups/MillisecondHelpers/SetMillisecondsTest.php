<?php

namespace DateFns\Groups\MillisecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetMillisecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_millisecond_component(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40.500');
		$result = DateFns::setMilliseconds($date, 300);

		$this->assertEquals('2014-09-01 11:30:40.300', $result->format('Y-m-d H:i:s.v'));
	}

	/**
	 * @test
	 */
	public function normalizes_out_of_range_values(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40.500');
		$result = DateFns::setMilliseconds($date, 1299);

		$this->assertEquals('2014-09-01 11:30:40.299', $result->format('Y-m-d H:i:s.v'));
	}
}
