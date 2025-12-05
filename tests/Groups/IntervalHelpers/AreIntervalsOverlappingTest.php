<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class AreIntervalsOverlappingTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_for_overlapping_intervals(): void {
		$i1 = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$i2 = ['start' => '2014-01-17', 'end' => '2014-01-21'];

		$this->assertTrue(DateFns::areIntervalsOverlapping($i1, $i2));
	}

	/** @test */
	public function returns_false_for_non_overlapping_intervals(): void {
		$i1 = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$i2 = ['start' => '2014-01-21', 'end' => '2014-01-22'];

		$this->assertFalse(DateFns::areIntervalsOverlapping($i1, $i2));
	}

	/** @test */
	public function returns_false_for_adjacent_intervals_by_default(): void {
		$i1 = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$i2 = ['start' => '2014-01-20', 'end' => '2014-01-30'];

		$this->assertFalse(DateFns::areIntervalsOverlapping($i1, $i2));
	}

	/** @test */
	public function returns_true_for_adjacent_intervals_if_inclusive(): void {
		$i1 = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$i2 = ['start' => '2014-01-20', 'end' => '2014-01-30'];

		$this->assertTrue(DateFns::areIntervalsOverlapping($i1, $i2, ['inclusive' => true]));
	}
}
