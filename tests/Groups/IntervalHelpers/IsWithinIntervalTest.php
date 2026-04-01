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
		$interval = [
			new DateTimeImmutable('2014-09-01'),
			new DateTimeImmutable('2014-12-31'),
		];

		$inside = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-10-31'),
			...$interval
		);
		$start = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-09-01'),
			...$interval
		);
		$end = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-12-31'),
			...$interval
		);

		$this->assertTrue($inside);
		$this->assertTrue($start);
		$this->assertTrue($end);
	}

	/**
	 * @test
	 */
	public function returns_false_for_dates_outside_interval(): void {
		$interval = [
			new DateTimeImmutable('2014-09-01'),
			new DateTimeImmutable('2014-12-31'),
		];

		$result = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-02-11'),
			...$interval
		);

		$this->assertFalse($result);
	}

	/**
	 * @test
	 */
	public function normalizes_reversed_interval(): void {
		$interval = [
			new DateTimeImmutable('2014-12-31'),
			new DateTimeImmutable('2014-09-01'),
		];

		$result = DateFns::isWithinInterval(
			new DateTimeImmutable('2014-10-31'),
			...$interval
		);

		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_when_any_date_is_invalid(): void {
		$interval = [
			new DateTimeImmutable('2014-09-01'),
			new DateTimeImmutable('2014-12-31'),
		];
		$invalidInterval = [
			'invalid',
			new DateTimeImmutable('2014-12-31'),
		];

		$this->assertFalse(
			DateFns::isWithinInterval(
				'invalid',
				...$interval
			)
		);
		$this->assertFalse(
			DateFns::isWithinInterval(
				new DateTimeImmutable('2014-10-31'),
				...$invalidInterval
			)
		);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$interval = [
			(new DateTimeImmutable('2014-09-01'))->getTimestamp(),
			(new DateTimeImmutable('2014-12-31'))->getTimestamp(),
		];

		$result = DateFns::isWithinInterval(
			(new DateTimeImmutable('2014-10-31'))->getTimestamp(),
			...$interval
		);

		$this->assertTrue($result);
	}
}
