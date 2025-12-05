<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IntervalTest extends TestCase {
	/**
	 * @test
	 */
	public function exposes_start_and_end(): void {
		$result = DateFns::interval('2000-01-01', '2023-01-01');

		$this->assertEquals(new DateTimeImmutable('2000-01-01'), $result['start']);
		$this->assertEquals(new DateTimeImmutable('2023-01-01'), $result['end']);
	}

	/**
	 * @test
	 */
	public function accepts_mixed_input_types(): void {
		$start = (new DateTimeImmutable('2000-01-01'))->getTimestamp();
		$end = '2023-01-01T00:00:00Z';

		$result = DateFns::interval($start, $end);

		$this->assertEquals(new DateTimeImmutable('@' . $start), $result['start']);
		$this->assertEquals(new DateTimeImmutable($end), $result['end']);
	}

	/**
	 * @test
	 */
	public function allows_non_positive_interval_unless_asserted(): void {
		$result = DateFns::interval('2023-01-01', '2000-01-01');
		$this->assertEquals(new DateTimeImmutable('2023-01-01'), $result['start']);
		$this->assertEquals(new DateTimeImmutable('2000-01-01'), $result['end']);

		$this->expectException(\TypeError::class);
		DateFns::interval('2023-01-01', '2000-01-01', ['assertPositive' => true]);
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_dates(): void {
		$this->expectException(\TypeError::class);
		DateFns::interval('invalid date', '2000-01-01');
	}
}
