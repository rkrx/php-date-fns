<?php

namespace DateFns\Groups\TimestampHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use Throwable;

class GetUnixTimeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_seconds_from_date(): void {
		$date = new DateTimeImmutable('2017-01-01 00:00:00', new DateTimeZone('UTC'));
		$result = DateFns::getUnixTime($date);

		$this->assertSame(1483228800, $result);
	}

	/**
	 * @test
	 */
	public function accepts_numeric_timestamp_in_milliseconds(): void {
		$timestamp = 804643200000;
		$result = DateFns::getUnixTime($timestamp);

		$this->assertSame(804643200, $result);
	}

	/**
	 * @test
	 */
	public function truncates_towards_zero_for_negative_values(): void {
		$positive = DateTimeImmutable::createFromFormat('U.u', '1.001000');
		$negative = DateTimeImmutable::createFromFormat('U.u', '-1.001000');

		$this->assertInstanceOf(DateTimeImmutable::class, $positive);
		$this->assertInstanceOf(DateTimeImmutable::class, $negative);

		$this->assertSame(1, DateFns::getUnixTime($positive));
		$this->assertSame(-1, DateFns::getUnixTime($negative));
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_input(): void {
		$this->expectException(Throwable::class);
		DateFns::getUnixTime('invalid');
	}
}
