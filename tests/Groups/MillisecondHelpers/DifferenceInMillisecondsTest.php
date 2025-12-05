<?php

namespace DateFns\Groups\MillisecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInMillisecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_millisecond_difference(): void {
		$later = new DateTimeImmutable('2014-07-02 12:30:21.700');
		$earlier = new DateTimeImmutable('2014-07-02 12:30:20.600');

		$this->assertSame(1100, DateFns::differenceInMilliseconds($later, $earlier));
	}

	/**
	 * @test
	 */
	public function returns_negative_when_later_is_before(): void {
		$later = new DateTimeImmutable('2014-07-02 12:30:20.600');
		$earlier = new DateTimeImmutable('2014-07-02 12:30:21.700');

		$this->assertSame(-1100, DateFns::differenceInMilliseconds($later, $earlier));
	}
}
