<?php

namespace DateFns\Groups\ISOWeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameISOWeekTest extends TestCase {
	/**
	 * @test
	 */
	public function compares_iso_weeks(): void {
		$this->assertTrue(
			DateFns::isSameISOWeek(
				new DateTimeImmutable('2014-09-03'),
				new DateTimeImmutable('2014-09-07')
			)
		);
		$this->assertFalse(
			DateFns::isSameISOWeek(
				new DateTimeImmutable('2014-09-03'),
				new DateTimeImmutable('2014-09-08')
			)
		);
	}
}
