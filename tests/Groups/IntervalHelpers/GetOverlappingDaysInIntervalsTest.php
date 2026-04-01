<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetOverlappingDaysInIntervalsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_zero_for_non_overlapping_intervals(): void {
		$intervalLeft = [
			new DateTimeImmutable('2016-11-10 13:00:00'),
			new DateTimeImmutable('2016-12-03 15:00:00'),
		];
		$intervalRight = [
			new DateTimeImmutable('2016-12-04 09:00:00'),
			new DateTimeImmutable('2016-12-04 18:00:00'),
		];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(0, $result);
	}

	/**
	 * @test
	 */
	public function counts_partial_overlapping_days(): void {
		$intervalLeft = [
			new DateTimeImmutable('2016-11-10 13:00:00'),
			new DateTimeImmutable('2016-12-03 15:00:00'),
		];
		$intervalRight = [
			new DateTimeImmutable('2016-11-14 09:00:00'),
			new DateTimeImmutable('2016-11-15 18:00:00'),
		];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(2, $result);
	}

	/**
	 * @test
	 */
	public function zero_length_intervals_do_not_overlap(): void {
		$date = new DateTimeImmutable('2016-11-15 00:00:00');
		$intervalLeft = [$date, $date];
		$intervalRight = [$date, $date];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(0, $result);
	}

	/**
	 * @test
	 */
	public function one_millisecond_intervals_overlap_for_one_day(): void {
		$start = new DateTimeImmutable('2016-11-15 00:00:00');
		$end = $start->setTime(0, 0, 0, 1000); // +1ms
		$intervalLeft = [$start, $end];
		$intervalRight = [$start, $end];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(1, $result);
	}

	/**
	 * @test
	 */
	public function normalizes_reversed_intervals(): void {
		$intervalLeft = [
			new DateTimeImmutable('2016-12-03 15:00:00'),
			new DateTimeImmutable('2016-11-10 13:00:00'),
		];
		$intervalRight = [
			new DateTimeImmutable('2016-11-05 00:00:00'),
			new DateTimeImmutable('2016-11-14 00:00:00'),
		];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(4, $result);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$start1 = (new DateTimeImmutable('2016-11-10 13:00:00'))->getTimestamp();
		$end1 = (new DateTimeImmutable('2016-12-03 15:00:00'))->getTimestamp();
		$start2 = (new DateTimeImmutable('2016-11-05 00:00:00'))->getTimestamp();
		$end2 = (new DateTimeImmutable('2016-11-14 00:00:00'))->getTimestamp();
		$intervalLeft = [$start1, $end1];
		$intervalRight = [$start2, $end2];

		$result = DateFns::getOverlappingDaysInIntervals(
			...$intervalLeft,
			...$intervalRight
		);

		$this->assertSame(4, $result);
	}
}
