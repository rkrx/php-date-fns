<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function compares_quarters(): void {
		$this->assertTrue(
			DateFns::isSameQuarter(
				new DateTimeImmutable('2014-07-02'),
				new DateTimeImmutable('2014-09-30')
			)
		);
		$this->assertFalse(
			DateFns::isSameQuarter(
				new DateTimeImmutable('2014-07-02'),
				new DateTimeImmutable('2014-12-01')
			)
		);
	}
}
