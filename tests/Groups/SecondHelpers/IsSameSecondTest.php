<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsSameSecondTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_same_second(): void {
		$this->assertTrue(
			DateFns::isSameSecond(
				new DateTimeImmutable('2014-09-04 06:30:15'),
				new DateTimeImmutable('2014-09-04 06:30:15.500')
			)
		);
	}

	/**
	 * @test
	 */
	public function returns_false_for_different_second(): void {
		$this->assertFalse(
			DateFns::isSameSecond(
				new DateTimeImmutable('2014-09-04 06:00:15'),
				new DateTimeImmutable('2014-09-04 06:01:15')
			)
		);
	}
}
