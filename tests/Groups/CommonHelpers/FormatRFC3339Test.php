<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatRFC3339Test extends TestCase {
	/**
	 * @test
	 */
	public function formats_rfc_3339_date_string(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52.123', new DateTimeZone('UTC'));
		// Default fractionDigits is 0, so no fractional part
		$result = DateFns::formatRFC3339($date);
		$this->assertEquals('2019-03-03T19:00:52Z', $result);
	}

	/**
	 * @test
	 */
	public function formats_rfc_3339_date_string_with_offset(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('-08:00'));
		$result = DateFns::formatRFC3339($date);
		$this->assertEquals('2019-03-03T19:00:52-08:00', $result);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:13.456', new DateTimeZone('UTC'));
		$timestamp = $date->getTimestamp();

		$result = DateFns::formatRFC3339($timestamp);
		// timestamp loses milliseconds, but ensure base format is correct
		// PHP timestamp acts like UTC
		$this->assertEquals('2019-10-04T12:30:13Z', $result);
	}

	/**
	 * @test
	 */
	public function allows_to_specify_digits_of_second_fractions(): void {
		$date = new DateTimeImmutable('2019-12-11 01:00:00.789', new DateTimeZone('UTC'));

		$result = DateFns::formatRFC3339($date, ['fractionDigits' => 3]);
		$this->assertEquals('2019-12-11T01:00:00.789Z', $result);
	}

	/**
	 * @test
	 */
	public function works_when_ms_less_than_100(): void {
		// 0.012 seconds = 12 milliseconds.
		// DateTime constructor with microseconds: .012000
		$date = new DateTimeImmutable('2019-12-11 01:00:00.012', new DateTimeZone('UTC'));

		$result = DateFns::formatRFC3339($date, ['fractionDigits' => 2]);
		$this->assertEquals('2019-12-11T01:00:00.01Z', $result);
	}
}
