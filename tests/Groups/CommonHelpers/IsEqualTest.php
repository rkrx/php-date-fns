<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsEqualTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_dates_are_equal(): void {
		$dateLeft = new DateTimeImmutable('1987-02-11');
		$dateRight = new DateTimeImmutable('1987-02-11');

		$result = DateFns::isEqual($dateLeft, $dateRight);
		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_dates_are_not_equal(): void {
		$dateLeft = new DateTimeImmutable('1989-07-10');
		$dateRight = new DateTimeImmutable('1987-02-11');

		$result = DateFns::isEqual($dateLeft, $dateRight);
		$this->assertFalse($result);
	}
}
