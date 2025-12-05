<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInSecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_second_difference(): void {
		$later = new DateTimeImmutable('2014-07-02 12:30:20');
		$earlier = new DateTimeImmutable('2014-07-02 12:30:07.999');

		$this->assertSame(12, DateFns::differenceInSeconds($later, $earlier));
	}

	/**
	 * @test
	 */
	public function truncates_towards_zero_by_default(): void {
		$later = new DateTimeImmutable('2014-07-02 12:30:07.999');
		$earlier = new DateTimeImmutable('2014-07-02 12:30:20');

		$this->assertSame(-12, DateFns::differenceInSeconds($later, $earlier));
	}

	/**
	 * @test
	 */
	public function supports_rounding_method(): void {
		$later = new DateTimeImmutable('2014-07-02 12:30:20.900');
		$earlier = new DateTimeImmutable('2014-07-02 12:30:07.100');

		$this->assertSame(14, DateFns::differenceInSeconds($later, $earlier, ['roundingMethod' => 'ceil']));
		$this->assertSame(13, DateFns::differenceInSeconds($later, $earlier, ['roundingMethod' => 'floor']));
	}
}
