<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class AreIntervalsOverlappingTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_overlapping_intervals(): void {
		$intervalLeft = ['2014-01-10', '2014-01-20'];
		$intervalRight = ['2014-01-17', '2014-01-21'];

		$this->assertTrue(DateFns::areIntervalsOverlapping(...$intervalLeft, ...$intervalRight));
	}

	/** @test */
	public function returns_false_for_non_overlapping_intervals(): void {
		$intervalLeft = ['2014-01-10', '2014-01-20'];
		$intervalRight = ['2014-01-21', '2014-01-22'];

		$this->assertFalse(DateFns::areIntervalsOverlapping(...$intervalLeft, ...$intervalRight));
	}

	/** @test */
	public function returns_false_for_adjacent_intervals_by_default(): void {
		$intervalLeft = ['2014-01-10', '2014-01-20'];
		$intervalRight = ['2014-01-20', '2014-01-30'];

		$this->assertFalse(DateFns::areIntervalsOverlapping(...$intervalLeft, ...$intervalRight));
	}

	/** @test */
	public function returns_true_for_adjacent_intervals_if_inclusive(): void {
		$intervalLeft = ['2014-01-10', '2014-01-20'];
		$intervalRight = ['2014-01-20', '2014-01-30'];

		$this->assertTrue(DateFns::areIntervalsOverlapping(...$intervalLeft, ...$intervalRight, options: ['inclusive' => true]));
	}
}
