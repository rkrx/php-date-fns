<?php

namespace DateFns\Groups\TimestampHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class FromUnixTimeTest extends TestCase {
	/**
	 * @test
	 */
	public function creates_date_from_seconds(): void {
		$result = DateFns::fromUnixTime(1330515499);

		$this->assertEquals('1330515499', $result->format('U'));
	}

	/**
	 * @test
	 */
	public function discards_fractional_seconds(): void {
		$result = DateFns::fromUnixTime(1483228800.987);

		$this->assertEquals('1483228800', $result->format('U'));
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_input(): void {
		$this->expectException(\TypeError::class);
		DateFns::fromUnixTime(NAN);
	}
}
