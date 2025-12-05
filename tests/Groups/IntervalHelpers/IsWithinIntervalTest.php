<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsWithinIntervalTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_dates_inside_or_on_boundaries(): void {
		$inside = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-10-31'),
			[
				'start' => new DateTimeImmutable('2014-09-01'),
				'end' => new DateTimeImmutable('2014-12-31'),
			]
		);
		$start = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-09-01'),
			[
				'start' => new DateTimeImmutable('2014-09-01'),
				'end' => new DateTimeImmutable('2014-12-31'),
			]
		);
		$end = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-12-31'),
			[
				'start' => new DateTimeImmutable('2014-09-01'),
				'end' => new DateTimeImmutable('2014-12-31'),
			]
		);

		$this->assertTrue($inside);
		$this->assertTrue($start);
		$this->assertTrue($end);
	}

	/**
	 * @test
	 */
	public function returns_false_for_dates_outside_interval(): void {
		$result = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-02-11'),
			[
				'start' => new DateTimeImmutable('2014-09-01'),
				'end' => new DateTimeImmutable('2014-12-31'),
			]
		);

		$this->assertFalse($result);
	}

	/**
	 * @test
	 */
	public function normalizes_reversed_interval(): void {
		$result = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-10-31'),
			[
				'start' => new DateTimeImmutable('2014-12-31'),
				'end' => new DateTimeImmutable('2014-09-01'),
			]
		);

		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_when_any_date_is_invalid(): void {
		$this->assertFalse(
			DateFns::isWithinInterval(
				'invalid',
				[
					'start' => new DateTimeImmutable('2014-09-01'),
					'end' => new DateTimeImmutable('2014-12-31'),
				]
			)
		);
		$this->assertFalse(
			DateFns::isWithinInterval(
				new DateTimeImmutable('2014-10-31'),
				[
					'start' => 'invalid',
					'end' => new DateTimeImmutable('2014-12-31'),
				]
			)
		);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$result = DateFns::isWithinInterval(
			(new DateTimeImmutable('2014-10-31'))->getTimestamp(),
			[
				'start' => (new DateTimeImmutable('2014-09-01'))->getTimestamp(),
				'end' => (new DateTimeImmutable('2014-12-31'))->getTimestamp(),
			]
		);

		$this->assertTrue($result);
	}
}
