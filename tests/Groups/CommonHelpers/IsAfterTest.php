<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsAfterTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_first_date_is_after_second_one(): void {
		$date = new DateTimeImmutable('1989-07-10');
		$dateToCompare = new DateTimeImmutable('1987-02-11');

		$result = DateFns::isAfter($date, $dateToCompare);
		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_first_date_is_before_second_one(): void {
		$date = new DateTimeImmutable('1987-02-11');
		$dateToCompare = new DateTimeImmutable('1989-07-10');

		$result = DateFns::isAfter($date, $dateToCompare);
		$this->assertFalse($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_dates_are_equal(): void {
		$date = new DateTimeImmutable('1989-07-10');
		$dateToCompare = new DateTimeImmutable('1989-07-10');

		$result = DateFns::isAfter($date, $dateToCompare);
		$this->assertFalse($result);
	}
}
