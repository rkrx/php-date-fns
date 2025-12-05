<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class MinTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_min_date(): void {
		$dates = [
			new DateTimeImmutable('2022-01-01'),
			new DateTimeImmutable('2023-01-01'),
			new DateTimeImmutable('2022-06-01'),
		];

		$result = DateFns::min($dates);

		$this->assertEquals('2022-01-01', $result->format('Y-m-d'));
	}

	/**
	 * @test
	 */
	public function returns_min_date_from_mixed_input(): void {
		$dates = [
			'2022-01-01',
			new DateTimeImmutable('2023-01-01'),
			1654041600, // 2022-06-01
		];

		$result = DateFns::min($dates);

		$this->assertEquals('2022-01-01', $result->format('Y-m-d'));
	}
}
