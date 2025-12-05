<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class FormatDistanceStrictTest extends TestCase {
	/**
	 * @test
	 */
	public function zero_seconds_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:05'),
			new DateTimeImmutable('1986-04-04 10:32:05')
		);
		$this->assertEquals('0 seconds', $result);
	}

	/**
	 * @test
	 */
	public function five_seconds_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:05')
		);
		$this->assertEquals('5 seconds', $result);
	}

	/**
	 * @test
	 */
	public function one_minute_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:33:00')
		);
		$this->assertEquals('1 minute', $result);
	}

	/**
	 * @test
	 */
	public function n_minutes_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:35:00')
		);
		$this->assertEquals('3 minutes', $result);
	}

	/**
	 * @test
	 */
	public function one_hour_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 11:32:00')
		);
		$this->assertEquals('1 hour', $result);
	}

	/**
	 * @test
	 */
	public function n_hours_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 13:32:00')
		);
		$this->assertEquals('3 hours', $result);
	}

	/**
	 * @test
	 */
	public function one_day_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-05 10:32:00')
		);
		$this->assertEquals('1 day', $result);
	}

	/**
	 * @test
	 */
	public function n_days_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-07 10:32:00')
		);
		$this->assertEquals('3 days', $result);
	}

	/**
	 * @test
	 */
	public function one_month_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-05-04 10:32:00')
		);
		$this->assertEquals('1 month', $result);
	}

	/**
	 * @test
	 */
	public function n_months_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-07-04 10:32:00')
		);
		$this->assertEquals('3 months', $result);
	}

	/**
	 * @test
	 */
	public function one_year_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1987-04-04 10:32:00')
		);
		$this->assertEquals('1 year', $result);
	}

	/**
	 * @test
	 */
	public function n_years_default(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1991-04-04 10:32:00')
		);
		$this->assertEquals('5 years', $result);
	}

	/**
	 * @test
	 */
	public function force_unit_second(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:34:00'),
			['unit' => 'second']
		);
		$this->assertEquals('120 seconds', $result);
	}

	/**
	 * @test
	 */
	public function force_unit_minute(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 12:32:00'),
			['unit' => 'minute']
		);
		$this->assertEquals('120 minutes', $result);
	}

	/**
	 * @test
	 */
	public function force_unit_hour(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-06 10:32:00'),
			['unit' => 'hour']
		);
		$this->assertEquals('48 hours', $result);
	}

	/**
	 * @test
	 */
	public function force_unit_day(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-05-03 10:32:00'),
			['unit' => 'day']
		);
		// Apr has 30 days. Apr 4 to May 3 is 29 days?
		// Apr 4 + 29 days = May 3.
		// wait, JS test used 1986-03-04 to 1986-05-03.
		// 1986-03-04 -> Mar 31 days.
		// difference is 31 (Mar remainder) + 3 (May) + (31-4) = 27 + 3 = 30?
		// Mar 4 to May 3.
		// Mar has 31.
		// 4th to 4th next month is 1 month.
		// Mar 4 to Apr 4 is 31 days.
		// Apr 4 to May 3 is 29 days.
		// Total 60 days.
		// Let's copy JS test exactly.

		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-06-03 10:32:00'), // June 3rd
			['unit' => 'day']
		);
		// Apr (30) + May (31).
		// Apr 4 to May 4 = 30 days.
		// May 4 to June 3 = 30 days. Total 60.
		$this->assertEquals('60 days', $result);
	}

	/**
	 * @test
	 */
	public function rounding_method_floor(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:33:59'),
			['roundingMethod' => 'floor']
		);
		$this->assertEquals('1 minute', $result);
	}

	/**
	 * @test
	 */
	public function rounding_method_ceil(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:33:01'),
			['roundingMethod' => 'ceil']
		);
		$this->assertEquals('2 minutes', $result);
	}

	/**
	 * @test
	 */
	public function adds_suffix(): void {
		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:25'),
			['addSuffix' => true]
		);
		$this->assertEquals('25 seconds ago', $result);

		$result = DateFns::formatDistanceStrict(
			new DateTimeImmutable('1986-04-04 11:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:00'),
			['addSuffix' => true]
		);
		$this->assertEquals('in 1 hour', $result);
	}
}
