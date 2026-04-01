<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachMonthOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_months_within_interval(): void {
		$start = '2014-02-06';
		$end = '2014-08-10';
		$interval = [$start, $end];

		$result = DateFns::eachMonthOfInterval(...$interval);

		$this->assertCount(7, $result);
		$this->assertEquals('2014-02-01 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-03-01 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-08-01 00:00:00', $result[6]->format('Y-m-d H:i:s'));
	}

	/** @test */
	public function handles_step_option(): void {
		$start = '2014-02-06';
		$end = '2014-08-10';
		$interval = [$start, $end];

		$result = DateFns::eachMonthOfInterval(...$interval, options: ['step' => 2]);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-02-01 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-04-01 00:00:00', $result[1]->format('Y-m-d H:i:s'));
	}
}
