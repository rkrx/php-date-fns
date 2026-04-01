<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class MaxTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_max_date(): void {
		$dates = [
			new DateTimeImmutable('2022-01-01'),
			new DateTimeImmutable('2023-01-01'),
			new DateTimeImmutable('2022-06-01'),
		];

		$result = DateFns::max(...$dates);

		$this->assertEquals('2023-01-01', $result->format('Y-m-d'));
	}

	/**
	 * @test
	 */
	public function returns_max_date_from_mixed_input(): void {
		$dates = [
			'2022-01-01',
			new DateTimeImmutable('2023-01-01'),
			1654041600, // 2022-06-01
		];

		$result = DateFns::max(...$dates);

		$this->assertEquals('2023-01-01', $result->format('Y-m-d'));
	}

	/**
	 * @test
	 */
	public function throws_if_no_dates_are_given(): void {
		$this->expectException(RuntimeException::class);
		$this->expectExceptionMessage('dates cannot be empty');

		DateFns::max();
	}
}
