<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachWeekOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_weeks_within_interval(): void {
		$interval = ['2014-10-06', '2014-10-20'];

		$result = DateFns::eachWeekOfInterval(...$interval);

		$this->assertCount(3, $result);
		$this->assertEquals('2014-10-05 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-12 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-19 00:00:00', $result[2]->format('Y-m-d H:i:s'));
	}

	/** @test */
	public function handles_step_option(): void {
		$interval = ['2014-10-06', '2014-10-27'];

		$result = DateFns::eachWeekOfInterval(...$interval, options: ['step' => 2]);

		$this->assertCount(2, $result);
		$this->assertEquals('2014-10-05 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-19 00:00:00', $result[1]->format('Y-m-d H:i:s'));
	}
}
