<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachMinuteOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_minutes_within_interval(): void {
		$start = '2014-10-06 12:00';
		$end = '2014-10-06 12:03';
		$interval = [$start, $end];

		$result = DateFns::eachMinuteOfInterval(...$interval);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-10-06 12:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 12:01:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 12:02:00', $result[2]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 12:03:00', $result[3]->format('Y-m-d H:i:s'));
	}

	/** @test */
	public function handles_step_option(): void {
		$start = '2014-10-06 12:00';
		$end = '2014-10-06 12:04';
		$interval = [$start, $end];

		$result = DateFns::eachMinuteOfInterval(...$interval, options: ['step' => 2]);

		$this->assertCount(3, $result);
		$this->assertEquals('2014-10-06 12:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 12:02:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-06 12:04:00', $result[2]->format('Y-m-d H:i:s'));
	}
}
