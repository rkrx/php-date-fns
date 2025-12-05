<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class CompareAscTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_0_if_the_given_dates_are_equal(): void {
		$result = DateFns::compareAsc(
			new DateTimeImmutable('1989-07-10'),
			new DateTimeImmutable('1989-07-10')
		);
		$this->assertEquals(0, $result);
	}

	/**
	 * @test
	 */
	public function returns_minus_1_if_the_first_date_is_before_the_second_one(): void {
		$result = DateFns::compareAsc(
			new DateTimeImmutable('1987-02-11'),
			new DateTimeImmutable('1989-07-10')
		);
		$this->assertEquals(-1, $result);
	}

	/**
	 * @test
	 */
	public function returns_1_if_the_first_date_is_after_the_second_one(): void {
		$result = DateFns::compareAsc(
			new DateTimeImmutable('1989-07-10'),
			new DateTimeImmutable('1987-02-11')
		);
		$this->assertEquals(1, $result);
	}

	/**
	 * @test
	 */
	public function sorts_dates_array_in_chronological_order_when_used_as_sort_callback(): void {
		$dates = [
			new DateTimeImmutable('1995-07-02'),
			new DateTimeImmutable('1987-02-11'),
			new DateTimeImmutable('1989-07-10'),
		];

		usort($dates, [DateFns::class, 'compareAsc']);

		$expected = [
			new DateTimeImmutable('1987-02-11'),
			new DateTimeImmutable('1989-07-10'),
			new DateTimeImmutable('1995-07-02'),
		];

		$this->assertEquals($expected, $dates);
	}
}
