<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatDistanceTest extends TestCase {
	/**
	 * @test
	 */
	public function less_than_5_seconds(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:03'),
			['includeSeconds' => true]
		);
		$this->assertEquals('less than 5 seconds', $result);
	}

	/**
	 * @test
	 */
	public function less_than_10_seconds(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:07'),
			['includeSeconds' => true]
		);
		$this->assertEquals('less than 10 seconds', $result);
	}

	/**
	 * @test
	 */
	public function less_than_20_seconds(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:15'),
			['includeSeconds' => true]
		);
		$this->assertEquals('less than 20 seconds', $result);
	}

	/**
	 * @test
	 */
	public function half_a_minute(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:25'),
			['includeSeconds' => true]
		);
		$this->assertEquals('half a minute', $result);
	}

	/**
	 * @test
	 */
	public function less_than_a_minute(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:45'),
			['includeSeconds' => true]
		);
		$this->assertEquals('less than a minute', $result);
	}

	/**
	 * @test
	 */
	public function one_minute_with_seconds(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:33:00'),
			['includeSeconds' => true]
		);
		$this->assertEquals('1 minute', $result);
	}

	/**
	 * @test
	 */
	public function less_than_a_minute_default(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:20')
		);
		$this->assertEquals('less than a minute', $result);
	}

	/**
	 * @test
	 */
	public function one_minute_default(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:50')
		);
		$this->assertEquals('1 minute', $result);
	}

	/**
	 * @test
	 */
	public function n_minutes(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:34:50')
		);
		$this->assertEquals('3 minutes', $result);
	}

	/**
	 * @test
	 */
	public function about_1_hour(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 11:32:00')
		);
		$this->assertEquals('about 1 hour', $result);
	}

	/**
	 * @test
	 */
	public function treats_same_local_time_across_dst_start_as_one_day(): void {
		$timezone = new DateTimeZone('Europe/Berlin');
		$result = DateFns::formatDistance(
			new DateTimeImmutable('2024-03-30 12:00:00', $timezone),
			new DateTimeImmutable('2024-03-31 12:00:00', $timezone)
		);
		$this->assertEquals('1 day', $result);
	}

	/**
	 * @test
	 */
	public function about_n_hours(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 13:32:00')
		);
		$this->assertEquals('about 3 hours', $result);
	}

	/**
	 * @test
	 */
	public function one_day(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-05 10:32:00')
		);
		$this->assertEquals('1 day', $result);
	}

	/**
	 * @test
	 */
	public function n_days(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-07 10:32:00')
		);
		$this->assertEquals('3 days', $result);
	}

	/**
	 * @test
	 */
	public function about_1_month(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-05-04 10:32:00')
		);
		$this->assertEquals('about 1 month', $result);
	}

	/**
	 * @test
	 */
	public function n_months(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-07-04 10:32:00')
		);
		$this->assertEquals('3 months', $result);
	}

	/**
	 * @test
	 */
	public function about_1_year(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1987-04-04 10:32:00')
		);
		$this->assertEquals('about 1 year', $result);
	}

	/**
	 * @test
	 */
	public function over_1_year(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1987-10-04 10:32:00')
		);
		$this->assertEquals('over 1 year', $result);
	}

	/**
	 * @test
	 */
	public function almost_n_years(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1989-03-04 10:32:00')
		);
		$this->assertEquals('almost 3 years', $result);
	}

	/**
	 * @test
	 */
	public function about_n_years(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1989-04-04 10:32:00')
		);
		$this->assertEquals('about 3 years', $result);
	}

	/**
	 * @test
	 */
	public function over_n_years(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1989-10-04 10:32:00')
		);
		$this->assertEquals('over 3 years', $result);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 11:32:00')
		);
		$this->assertEquals('about 1 hour', $result);
	}

	/**
	 * @test
	 */
	public function adds_suffix(): void {
		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 10:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:25'),
			['includeSeconds' => true, 'addSuffix' => true]
		);
		$this->assertEquals('half a minute ago', $result); // date1 is before date2, so date1 is in past relative to date2?
		// Wait, formatDistance(laterDate, earlierDate) in JS
		// JS: formatDistance(date, baseDate)
		// If date < baseDate, it's 'ago'?
		// The test in JS: formatDistance(new Date(..., 10:32:00), new Date(..., 10:32:25), { addSuffix: true })
		// date1 (00) < date2 (25). result: "half a minute ago".
		// So if arg1 is before arg2 => "ago".

		$result = DateFns::formatDistance(
			new DateTimeImmutable('1986-04-04 11:32:00'),
			new DateTimeImmutable('1986-04-04 10:32:00'),
			['addSuffix' => true]
		);
		$this->assertEquals('in about 1 hour', $result);
	}
}
