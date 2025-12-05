<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_minute_difference(): void {
		$later = new DateTimeImmutable('2014-07-02 12:20:00');
		$earlier = new DateTimeImmutable('2014-07-02 12:07:59');

		$this->assertSame(12, DateFns::differenceInMinutes($later, $earlier));
	}

	/**
	 * @test
	 */
	public function returns_negative_difference(): void {
		$later = new DateTimeImmutable('2000-01-01 10:00:00');
		$earlier = new DateTimeImmutable('2000-01-01 10:01:59');

		$this->assertSame(-1, DateFns::differenceInMinutes($later, $earlier));
	}

	/**
	 * @test
	 */
	public function supports_rounding_method(): void {
		$later = new DateTimeImmutable('2014-07-02 12:20:59');
		$earlier = new DateTimeImmutable('2014-07-02 12:07:01');

		$this->assertSame(14, DateFns::differenceInMinutes($later, $earlier, ['roundingMethod' => 'ceil']));
		$this->assertSame(13, DateFns::differenceInMinutes($later, $earlier, ['roundingMethod' => 'floor']));
	}
}
