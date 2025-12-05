<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachHourOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_hours_within_interval(): void {
		$start = '2014-10-06 12:00';
		$end = '2014-10-06 15:00';

		$result = DateFns::eachHourOfInterval(['start' => $start, 'end' => $end]);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-10-06 12:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 13:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 14:00:00', $result[2]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 15:00:00', $result[3]->format('Y-m-d H:i:s'));
	}

	/** @test */
	public function handles_step_option(): void {
		$start = '2014-10-06 12:00';
		$end = '2014-10-06 15:00';

		$result = DateFns::eachHourOfInterval(['start' => $start, 'end' => $end], ['step' => 2]);

		$this->assertCount(2, $result);
		$this->assertEquals('2014-10-06 12:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 14:00:00', $result[1]->format('Y-m-d H:i:s'));
	}
}
