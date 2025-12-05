<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ToDateTest extends TestCase {
	/**
	 * @test
	 */
	public function converts_string_to_date(): void {
		$result = DateFns::toDate('2023-01-01');
		$this->assertInstanceOf(DateTimeImmutable::class, $result);
		$this->assertEquals('2023-01-01', $result->format('Y-m-d'));
	}

	/**
	 * @test
	 */
	public function returns_date_instance_as_is(): void {
		$date = new DateTimeImmutable('2023-01-01');
		$result = DateFns::toDate($date);
		$this->assertSame($date, $result);
	}

	/**
	 * @test
	 */
	public function converts_timestamp_to_date(): void {
		$ts = 1672531200; // 2023-01-01 00:00:00 UTC
		$result = DateFns::toDate($ts);

		$this->assertEquals('2023-01-01 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
