<?php

namespace DateFns\Groups\TimestampHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use Throwable;

class GetTimeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_milliseconds_from_date(): void {
		$date = new DateTimeImmutable('2017-01-01 00:00:00', new DateTimeZone('UTC'));
		$result = DateFns::getTime($date);

		$this->assertSame(1483228800000, $result);
	}

	/**
	 * @test
	 */
	public function accepts_numeric_timestamp_in_milliseconds(): void {
		$timestamp = 804643200000;
		$result = DateFns::getTime($timestamp);

		$this->assertSame($timestamp, $result);
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_input(): void {
		$this->expectException(Throwable::class);
		DateFns::getTime('invalid');
	}
}
