<?php

namespace DateFns\Groups\HourHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInHoursTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_hour_difference(): void {
		$later = new DateTimeImmutable('2014-07-02 19:00:00');
		$earlier = new DateTimeImmutable('2014-07-02 06:50:00');

		$this->assertSame(12, DateFns::differenceInHours($later, $earlier));
	}

	/**
	 * @test
	 */
	public function supports_rounding_method(): void {
		$later = new DateTimeImmutable('2014-07-02 19:59:59');
		$earlier = new DateTimeImmutable('2014-07-02 06:00:01');

		$this->assertSame(14, DateFns::differenceInHours($later, $earlier, ['roundingMethod' => 'ceil']));
		$this->assertSame(13, DateFns::differenceInHours($later, $earlier, ['roundingMethod' => 'floor']));
	}
}
